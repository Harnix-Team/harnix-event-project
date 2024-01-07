<?php

    use App\Http\Controllers\EventsController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\NotificationsController;
    use Illuminate\Support\Facades\Route;


    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    // Home route 


    // route of about
    Route::get('/about', function () {
        return view('about');
    });

  

    Route::get('/profil', function () {
        return view('profile.profil');
    })->middleware(['auth', 'verified'])->name('profil');

    Route::get('/nos-offres', function () {
        return view('advertising_offer');
    })->name('nos-offres');

    // Route::get('/notifiacation', function () {
    //     return view('profile.notifiacation');
    // })->middleware(['auth', 'verified'])->name('notifiacation');


    // Route::get('/notifiacation', function () {
    //     return view('profile.notifiacation');
    // })->middleware(['auth', 'verified'])->name('notifiacation');


    // Route::get('/create-events', function () {
    //     return view('users./create_events');
    // })->middleware(['auth', 'verified'])->name('create-events');

    // Notification route 
    Route::controller(NotificationsController::class)->group(function () {

        Route::middleware('auth')->group(function () {

            Route::get('/notifiacation', 'index')->name('notifiacation');

            // Route::get('/create-event', 'create')->name('create-event');

            // Route::post('/event.store', 'store')->name('event.store');

            // Route::get('/events/{id}', 'show')->name('event.show');

            // Route::get('/event.edit/{id}', 'edit')->name('event.edit');

            // Route::get('/dashboard', 'showForDash')->name('dashboard');

            // Route::get('/dashbord.passevent', 'showForDash')->name('dashbord.passevent');

            // Route::patch('/update', 'update')->name('update');

            // Route::get('/event.delete/{id}', 'destroy')->name('event.delete');


        });

    });

    // Events routes 
    Route::controller(EventsController::class)->group(function () {

        Route::middleware('auth')->group(function () {

            Route::get('/create-event', 'create')->name('create-event');

            Route::post('/event.store', 'store')->name('event.store');

            Route::get('/events/{id}', 'show')->name('event.show');

            Route::get('/event.edit/{id}', 'edit')->name('event.edit');

            Route::get('/dashboard', 'showForDash')->name('dashboard');

            Route::get('/dashbord.passevent', 'showForDash')->name('dashbord.passevent');

            Route::patch('/update', 'update')->name('update');

            Route::get('/event.delete/{id}', 'destroy')->name('event.delete');


        });

        // Display all events
        Route::get('/events', 'index');

        // Display all event in home Page
        Route::get('/', 'displayInHome');


    });

    // Normal authentification(edit, update profil and destroy session)
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



    //  Authentification with social networks...

    // GOOGLE
    Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

    // FACEBOOK
    Route::get('/auth/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('/auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

    require __DIR__.'/auth.php';
