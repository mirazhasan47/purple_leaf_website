<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;


Route::get('/purple_leaf', function () {
    return view('welcome');
});

Route::view('/become-a-client', 'becomeaclient')->name('becomeaclient');
Route::view('/edleader', 'edleader')->name('edleader');
Route::view('/commchat', 'commchat')->name('commchat');
Route::view('/gim', 'gim')->name('gim');
Route::view('/eskimi', 'eskimi')->name('eskimi');
Route::view('/londonhealth', 'londonhealth')->name('londonhealth');
Route::view('/dotline', 'dotline')->name('dotline');
Route::view('/karighor', 'karighor')->name('karighor');
Route::view('/flexinote', 'flexinote')->name('flexinote');
Route::view('/becomeaclient', 'becomeaclient')->name('becomeaclient');

Route::view('/test', 'test')->name('test');

Route::get('/cookie-status', [CookieController::class, 'status']);
Route::post('/cookie-accept', [CookieController::class, 'store']);


use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/send-email', function () {
    Mail::to('recipient@example.com')->send(new TestMail());
    return 'Email sent successfully!';
});


use App\Http\Controllers\ContactController;

Route::post('/send-contact-email', [ContactController::class, 'sendEmail'])->name('contact.send');



use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // Fetch all rows from 'page_items'
    $items = DB::table('page_items')->get();

    // Pass the collection to the view
    return view('welcome_lgf', compact('items'));
});

Route::view('/login', view: 'login')->name('login');
Route::view('/donation-aborted', 'donation_aborted')->name('donation_aborted');

Route::view('/skill-developement-institute', 'skill_developement_institute')->name('skill_developement_institute');

Route::view('/gallery', view: 'gallery')->name('gallery');

Route::view('/news-and-stories', 'news_and_stories')->name('news_and_stories');
Route::view('/blogs', 'blogs')->name('blogs');
Route::view('/lets-make-change-together', 'lets_make_change_together')->name('lets-make-change-together');
Route::view('/our-activities', 'our_activities')->name('our-activities');


Route::view('/tree-plantation-fund', 'tree_plantation_fund')->name('tree_plantation_fund');

Route::view('/connect-with-us', 'connect_with_us')->name('connect_with_us');


Route::view('/about-us', 'about_us')->name('about_us');

Route::view('/lorem-ipsum', 'lorem_ipsum')->name('lorem_ipsum');

Route::view('/contact', 'contact')->name('contact');

Route::view('/no-result-found', 'no_result_found')->name('no_result_found');

Route::view('/courses-page', 'courses_page')->name('courses_page');



use App\Http\Controllers\AdminController;

Route::get('/login', [AdminController::class, 'loginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


use App\Http\Controllers\LandingPageController; // ✅ import it

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users.index');
    Route::get('/products', [AdminController::class, 'products'])->name('products.index');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders.index');
    Route::get('/landing-page', [AdminController::class, 'landingPage'])->name('admin.landing_page');

});



Route::get('/register', [AdminController::class, 'registerForm'])->name('register');
Route::post('/register', [AdminController::class, 'register']);



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('landing-page', [LandingPageController::class, 'index'])->name('landing_page');
    Route::get('landing-page/data', action: [LandingPageController::class, 'data'])->name('landing_page.data');
    Route::post('landing-page/save', action: [LandingPageController::class, 'save'])->name('landing_page.save');
    Route::get('landing-page/edit/{id}', [LandingPageController::class, 'edit']);
});


