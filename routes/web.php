<?php

use App\Livewire\Admin\Companies\Companies;
use App\Livewire\Admin\Events\Events;
use App\Livewire\Admin\Media\Media;
use App\Livewire\Admin\Posts\Posts;
use App\Livewire\Admin\TeamMembers\TeamMembers;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/resources', function () {
    return view('resources.index');
})->name('resources');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::group(['prefix' => 'resources'], function () {
    Route::get('/', function () {
        return view('resources.index');
    })->name('resources.index');
    Route::get('/events-webinar', function () {
        return view('resources.events-webinar');
    })->name('resources.events-webinar');
    Route::get('/posts', function () {
        return view('resources.posts');
    })->name('resources.posts');
    Route::get('/media', function () {
        return view('resources.media');
    })->name('resources.media');
});

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('admin/posts', Posts::class)->name('admin.posts');
    Route::get('admin/events', Events::class)->name('admin.events');
    Route::get('admin/media', Media::class)->name('admin.media');

    Route::get('admin/companies', Companies::class)->name('admin.companies');
    Route::get('admin/team-members', TeamMembers::class)->name('admin.team-members');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
