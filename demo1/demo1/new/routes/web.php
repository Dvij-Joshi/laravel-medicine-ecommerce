web.php

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/validation', function(){
    return view('validation');
});

Route::get('/master', function(){
    return view('master');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/viewcart', function(){
    return view('viewcart');
});

Route::post('/lgadmin',[User:: class, 'lgadmin']); //user = Controller name

Route::get('/logout',[User:: class, 'logout']);

Route::post('/submitdata',[User:: class, 'submitdata']);

Route::post('/submitproduct',[User:: class, 'submitproduct']);

Route::get('/user_view',[User::class, 'user_view']);

Route::get('/menu',[User::class, 'menu']);

Route::get('/addcart/{p_id}',[User::class,'addcart'])->name('user.addcart1');

Route::get('/deletecart/{Cartid}',[User::class,'deleteCart'])->name('user.deleteCart');

Route::get('/cart',[User::class,'showCart'])->name('cart');

Route::get('/remove-from-cart/{p_id}',[User::class,'removeFromCart'])->name('remove.addcart1');
Route::get('/viewcart',[User:: class, 'view_cart']);

// Route::get('/plusqty/{cartid}/{qty}' )

Route::match(['get','post'],'/botman',[User::class,'botman']);
