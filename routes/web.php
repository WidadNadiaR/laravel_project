<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
});

//localhost:8000/admin/inputbuku
Route::get('/admin/inputbuku', function () {
    return view(view: 'admin.inputbuku');
});

// untuk kategori
// Route::get('/admin/kategori', function () {
//     return view(view: 'admin.kategori');
// });

Route::get ('/admin/kategori', [CategoryController::class,'index'])
                                     ->name('admin.inkategori');

Route::post('/admin/kategori', [CategoryController::class, 'store'])
                                     ->name('admin.storekategori');

//untuk penulis
Route::get('/admin/penulis', function () {
    return view(view: 'admin.penulis');
});
