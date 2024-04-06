<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\generatePDF;
use App\Models\Article;
use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
######################################## Registrasion ############################################
Route::get('donor-register', function () {
    return view('registration.donor_register');
});
Route::get('charity-register', function () {
    return view('registration.charity_register');
});

Route::post('/donor-register', [RegistrationController::class, 'storeDonor']);
Route::post('/charity-register', [RegistrationController::class, 'storeCharity']);

######################################## Home Pages ############################################
Route::get('/', function () {
    $home = Home::where('page', 'الرئيسية')->first();
    return view('welcome', compact('home'));
})->name('welcome');
Route::get('/about-us', function () {
    $home = Home::where('page', 'من نحن')->first();
    return view('aboutUs', compact('home'));
});
Route::get('/contact-us', function () {
    $home = Home::where('page', 'تواصل معنا')->first();
    return view('contactUs', compact('home'));
});
// save message in db from contact us form
Route::post('/contact-us', [MessageController::class, 'store'])->name('contactUs.store');
// about us newslatter subscription Alert
Route::get('newsLetter', function () {
    Alert::success('شكرا لك على الإشتراك');
    return redirect('/articles');
});



######################################## Articles  ############################################
Route::get('/article/{id}', function ($id) {
    $article = Article::find($id);
    return view('articles.article', compact('article'));
})->name('article.show');
Route::get('/articles', function () {
    $articles = Article::all();
    return view('articles.articles', compact('articles'));
});


######################################## Donations ############################################
Route::get('/donations', [DonationController::class, 'index'])->name('donations.show');

Route::middleware(['charity'])->group(function () {
    Route::get('/donations/{donation}', [DonationController::class, 'show'])->name('donations.show');
    Route::post('/donation_requests', [DonationRequestController::class, 'store'])->name('donation_requests.store');
});


######################################## Donation Invoice PDF ############################################
Route::get('receipt/{donation_request}', [generatePDF::class, 'index'])->name('receipt.pdf');



######################################## Redirect the user to correct Login form ############################################
Route::get('/login', function (Request $request) {
    $previousUrl = $request->headers->get('referer');

    if (strpos($previousUrl, '/donor/edit-profile') !== false) {
        return redirect(route('filament.donor.auth.login'));
    } elseif (strpos($previousUrl, '/charity/edit-profile') !== false) {
        return redirect(route('filament.charity.auth.login'));
    } else {
        // Default redirect if the previous URL doesn't match the conditions
        return redirect('/'); // You can set a default here
    }
})->name('login');

