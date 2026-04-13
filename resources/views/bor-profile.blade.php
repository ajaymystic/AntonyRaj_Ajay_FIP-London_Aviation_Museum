@extends('layouts.app')
@section('title', $pilot->full_name ?: ($pilot->last_name . ($pilot->initials ? ', ' . $pilot->initials : '')) . ' — Book of Remembrance')
@section('data-page', 'bor-profile')

@section('content')
@php
    $displayName = $pilot->full_name ?: ($pilot->last_name . ($pilot->initials ? ', ' . $pilot->initials : ''));
    $statusClass = 'status-' . str_replace(' ', '', $pilot->in_book);
@endphp

<section id="profile-section" class="grid-con">
    <div id="ps-content" class="col-span-full">
        <a href="{{ route('bor') }}" class="back-link">← Back to Book of Remembrance</a>

        <div class="profile-grid">
            <div>
                @if($pilot->photo_path)
                    <img class="profile-photo" src="{{ asset($pilot->photo_path) }}" alt="{{ $displayName }}">
                @else
                    <div class="profile-placeholder">✦</div>
                @endif
            </div>

            <div>
                <h1 class="profile-name">{{ $displayName }}</h1>

                <span class="status-badge {{ $statusClass }}">
                    {{ $pilot->in_book }}
                </span>

                @if($pilot->initials)
                    <p class="profile-label">Initials</p>
                    <p class="profile-value">{{ $pilot->initials }}</p>
                @endif

                @if($pilot->full_name)
                    <p class="profile-label">Full Name</p>
                    <p class="profile-value">{{ $pilot->full_name }}</p>
                @endif

                @if($pilot->notes)
                    <p class="profile-label">Notes</p>
                    <p class="profile-notes">{{ $pilot->notes }}</p>
                @endif

                <p class="profile-label">Record Added</p>
                <p class="profile-value">{{ \Carbon\Carbon::parse($pilot->created_at)->format('F j, Y') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection