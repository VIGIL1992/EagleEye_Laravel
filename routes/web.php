<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactPageController;

use App\Models\contact_page;
use App\Models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    return view('welcome');

    // fetch all users
    // $users = DB::select("select * from users");
    ###
    // $users = DB::table('users')->get();
    // $user = User::where('id', 1)->first();
    // $user = User::get();
    // $user = User::find(1);

    //create new user
    // $users = DB::insert('insert into users (name, email, password) values (?, ?, ?)', 
    //     ['vigil', 'vigil1992@gmail.com', 'password', ]);
    ###
    // $users = DB::table('users')->insert([
    //     'name' =>'Vigil',
    //     'email' => 'abc@gmail.com',
    //     'password' => 'password'
    // ]);
    // $users = User::create([
    //     'name' => 'abc',
    //     'email' => 'abc@gmail.com',
    //     'password' => 'password',
    // ]);

    //update user
    // $users = DB::update(
    //     'update users set email = ? where name = ?',
    //     [ 'abc@gmail.com', 'vigil']
    // );
    ###
    // $users = DB::table('users')->where('id', 3)->update([
    //     'name' =>'abc',
    // ]);
    // $user = User::where('id', 4)->update([
    //     'name' => 'vigil',
    // ]);
    // $user = User::find(4)->update([
    //     'email' => 'abc@gmail.com',
    // ]);

    //delete user
    // $user = DB::delete("delete from users where id=2");
    // $user = DB::table('users')->where('id', 3)->delete();
    // $user = User::find(4)->delete();

    // dd($user->name);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/index', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('frontend/about');
})->name('about');

// Route::get('/contact', [ContactPageController::class, 'home'])->name('admin.home');
Route::get('/contact', function () {
    $contact = contact_page::first();
    return view('frontend/contact', compact('contact'));
})->name('contact');

Route::get('/products', function () {
    $products = Product::all();
    return view('frontend/product', compact('products'));
})->name('products');

// Route::get('admin/dashboard', function () {
//     return view('admin/dashboard');
// })->name('dashboard');




Route::prefix('/admin')->group(function () {
    Route::get('home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('products', [AdminController::class, 'product'])->name('admin.products');
    Route::get('contact', [ContactPageController::class, 'index'])->name('admin.contact');

    Route::patch('contact.update', [ContactPageController::class, 'update'])->name('contact.update');
    // Route::patch('contact.update', function () {
    //     dd('hai');
        
    //     return view('frontend/contact', compact('contact'));
    // })->name('contact.update');

    Route::resource('/product', ProductController::class);

});




