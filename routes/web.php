<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return 'All Cleared';
});

Route::get('admin/public/uploads/{filename}', function ($filename)
{
    $path = storage_path('../admin/public/uploads/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('admin/public/uploads/thumb/{filename}', function ($filename)
{
    $path = storage_path('../admin/public/uploads/thumb/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/', 'PageController@index');

Route::get('/our-fleets', 'PageController@fleets');

Route::get('home', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/booking-form', function () {
    return view('booking-form');
});

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');
Route::get('car-single', function () {
    return view('car-single');
});
Route::get('/top-four-luxury-car-in-uk', function () {
    return view('top-four-luxury-car');
});
Route::get('/hire-british-luxury-car-for-one-of-the-most-prestigious-events', function () {
    return view('hire-british-luxury-car-for-one-of-the-most-prestigious-events');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogs', function () {
    return view('blog-two');
});
Route::get('/the-best-lamborghini-to-hire-in-the-world', function () {
    return view('the-best-lamborghini-to-hire-in-the-world');
});
Route::get('blog-single', function () {
    return view('blog-single');
});
Route::get('/hire-a-bentley-for-wedding-in-uk', function () {
    return view('hire-a-bentley-for-wedding-in-uk');
});

Route::get('/Mistakes-that-you-should-avoid-when-hiring-a-car', function () {
    return view('blog5');
});
Route::get('/analysis-of-new-mercedes-2021', function () {
    return view('blog6');
});
Route::get('/hire-a-ferrari-812-superfast-in-the-uk', function () {
    return view('blog7');
});
Route::get('/celebrate-your-birthday-in-a-luxury-car', function () {
    return view('blog8');
});
Route::post('/contact-us', 'ContactController@contact');

Route::post('/', 'ContactController@form')->name('form');

Route::post('/booking-form', 'ContactController@book')->name('book');

Route::get('/contact', function () {
    return view('contact');
});


