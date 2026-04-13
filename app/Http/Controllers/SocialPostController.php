<?php

namespace App\Http\Controllers;

use App\Models\SocialPost;
use Illuminate\Http\Request;

class SocialPostController extends Controller
{
    // I use the ?all=1 param so the admin can see drafts alongside published posts
    public function index(Request $request)
    {
        if ($request->has('all')) {
            $posts = SocialPost::orderByDesc('created_at')->get();
        } else {
            $posts = SocialPost::where('status', 'published')
                ->orderByDesc('published_at')
                ->get();
        }

        return response()->json($posts);
    }

    public function show(SocialPost $socialPost)
    {
        return response()->json($socialPost);
    }

    public function store(Request $request)
    {
        $platform = $request->input('platform', '');

        if (!in_array($platform, ['instagram', 'facebook', 'twitter', 'youtube'])) {
            return response()->json(['error' => 'Invalid platform.'], 422);
        }

        if (!$request->hasFile('media') || !$request->file('media')->isValid()) {
            return response()->json(['error' => 'Media file required.'], 422);
        }

        $file = $request->file('media');
        $mime = $file->getMimeType();
        $allowedImages = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        $allowedVideos = ['video/mp4'];
        $mediaType     = '';

        // I check the actual MIME type rather than trusting the file extension
        if (in_array($mime, $allowedImages)) {
            $mediaType = 'image';
        } elseif (in_array($mime, $allowedVideos)) {
            $mediaType = 'video';
        } else {
            return response()->json(['error' => 'Unsupported file type.'], 422);
        }

        // I use uniqid to avoid filename collisions in the uploads folder
        $filename = uniqid('post_') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/social'), $filename);
        $mediaUrl = 'uploads/social/' . $filename;

        $status = 'draft';
        if (in_array($request->input('status'), ['draft', 'published'])) {
            $status = $request->input('status');
        }

        $publishedAt = null;
        if ($status === 'published') {
            $publishedAt = now();
        }

        $post = SocialPost::create([
            'platform' => $platform,
            'media_url' => $mediaUrl,
            'media_type' => $mediaType,
            'caption' => trim($request->input('caption', '')),
            'hashtags' => trim($request->input('hashtags', '')),
            'external_link' => trim($request->input('external_link', '')),
            'status' => $status,
            'published_at' => $publishedAt,
        ]);

        return response()->json(['message' => 'Post created.', 'id' => $post->id], 201);
    }

    // I only update text fields on edit — replacing media requires a new upload
    public function update(Request $request, SocialPost $socialPost)
    {
        $platform = $request->input('platform', '');

        if (!in_array($platform, ['instagram', 'facebook', 'twitter', 'youtube'])) {
            return response()->json(['error' => 'Invalid platform.'], 422);
        }

        $status = 'draft';
        if (in_array($request->input('status'), ['draft', 'published'])) {
            $status = $request->input('status');
        }

        $publishedAt = null;
        if ($status === 'published') {
            $publishedAt = now();
        }

        $socialPost->update([
            'platform'      => $platform,
            'caption'       => trim($request->input('caption', '')),
            'hashtags'      => trim($request->input('hashtags', '')),
            'external_link' => trim($request->input('external_link', '')),
            'status'        => $status,
            'published_at'  => $publishedAt,
        ]);

        return response()->json(['message' => 'Post updated.']);
    }

    public function destroy(SocialPost $socialPost)
    {
        $socialPost->delete();

        return response()->json(['message' => 'Post deleted.']);
    }
}