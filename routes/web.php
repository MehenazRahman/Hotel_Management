<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

route::get('/',[AdminController::class,'home']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

route::get('/home',[AdminController::class, 'index'])->name('home');

route::get('/create_room',[AdminController::class, 'create_room'])->middleware(['auth', 'admin']);
route::post('/add_room',[AdminController::class, 'add_room'])->middleware(['auth', 'admin']);

route::get('/view_room',[AdminController::class, 'view_room'])->middleware(['auth', 'admin']);

route::get('/room_delete/{id}',[AdminController::class, 'room_delete'])->middleware(['auth', 'admin']);
route::get('/room_update/{id}',[AdminController::class, 'room_update'])->middleware(['auth', 'admin']);

route::post('/edit_room/{id}',[AdminController::class, 'edit_room'])->middleware(['auth', 'admin']);

route::get('/room_details/{id}',[HomeController::class, 'room_details']);

route::post('/add_booking/{id}',[HomeController::class, 'add_booking']);

route::get('/bookings',[AdminController::class, 'bookings'])->middleware(['auth', 'admin']);

route::get('/delete_booking/{id}',[AdminController::class, 'delete_booking'])->middleware(['auth', 'admin']);

route::get('/approve_booking/{id}',[AdminController::class, 'approve_booking'])->middleware(['auth', 'admin']);

route::get('/reject_booking/{id}',[AdminController::class, 'reject_booking'])->middleware(['auth', 'admin']);

route::get('/view_gallery',[AdminController::class, 'view_gallery'])->middleware(['auth', 'admin']);

route::post('/upload_gallery',[AdminController::class, 'upload_gallery'])->middleware(['auth', 'admin']);

route::get('/delete_image/{id}',[AdminController::class, 'delete_image'])->middleware(['auth', 'admin']);

route::post('/contact',[HomeController::class, 'contact']);

route::get('/all_messages',[AdminController::class, 'all_messages'])->middleware(['auth', 'admin'])->middleware(['auth', 'admin']);

route::get('/send_email/{id}',[AdminController::class, 'send_email'])->middleware(['auth', 'admin'])->middleware(['auth', 'admin']);

route::get('/delete_messages/{id}',[AdminController::class, 'delete_messages'])->middleware(['auth', 'admin']);

route::post('/mail/{id}',[AdminController::class, 'mail'])->middleware(['auth', 'admin'])->middleware(['auth', 'admin']);


route::get('/our_rooms',[HomeController::class, 'our_rooms']);

route::get('/hotel_gallery',[HomeController::class, 'hotel_gallery']);
 
route::get('/contact_us',[HomeController::class, 'contact_us']);

route::get('/about_us',[HomeController::class, 'about_us']);

