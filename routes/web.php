<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\BorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SocialPostController;

// Public pages
Route::get('/', fn() => view('index'))->name('home');
Route::get('/wartime', fn() => view('wartime'))->name('wartime');
Route::get('/battle-of-britain', fn() => view('battle-of-britain'))->name('bob');
Route::get('/book-of-remembrance', fn() => view('book-of-remembrance'))->name('bor');

// I fetch the pilot from the DB here and redirect to BOR if the ID doesn't exist
Route::get('/bor-profile/{id}', function(int $id) {
    $pilot = \App\Models\BorPilot::find($id);
    if (!$pilot) {
        return redirect()->route('bor');
    }
    return view('bor-profile', ['pilot' => $pilot]);
})->name('bor.profile');

Route::get('/events', fn() => view('events'))->name('events');
Route::get('/exhibition', fn() => view('exhibition'))->name('exhibition');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Admin auth routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Protected admin pages — all guarded by the AdminAuth middleware
Route::middleware('admin.auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
    Route::get('/events',  fn() => view('admin.events'))->name('events');
    Route::get('/social-posts', fn() => view('admin.social-posts'))->name('social-posts');
    Route::get('/messages', fn() => view('admin.messages'))->name('messages');
});

// JSON API — public endpoints
Route::prefix('api')->group(function () {
    Route::get('/bor', [BorController::class, 'index']);
    Route::get('/bor/{borPilot}', [BorController::class, 'show']);
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{event}', [EventController::class, 'show']);
    Route::get('/social-posts', [SocialPostController::class, 'index']);
    Route::get('/social-posts/{socialPost}',[SocialPostController::class, 'show']);
    Route::post('/newsletter', [NewsletterController::class, 'subscribe']);
    Route::post('/contact', [ContactController::class, 'send']);

    // I group the write endpoints under admin.auth so only logged-in admins can modify data
    Route::middleware('admin.auth')->group(function () {
        Route::post('/events', [EventController::class, 'store']);
        Route::put('/events/{event}',  [EventController::class, 'update']);
        Route::delete('/events/{event}',  [EventController::class, 'destroy']);
        Route::post('/social-posts',  [SocialPostController::class, 'store']);
        Route::put('/social-posts/{socialPost}', [SocialPostController::class, 'update']);
        Route::delete('/social-posts/{socialPost}', [SocialPostController::class, 'destroy']);
        Route::get('/messages',  [MessageController::class, 'index']);
    });
});
