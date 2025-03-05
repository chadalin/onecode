<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\LogMiddleware;
use App\Http\Middleware\ActiveMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\TokenMiddleware;
use App\Http\Controllers\Validation\ValidationController;
use App\Http\Controllers\ValutaController;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MasterController;

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



//Route::view('/','welcome');
Route::view('/', 'home.index')->name('home');


Route::redirect('/home', '/',302);
//Route::get('/test',TestController::class)->name('test')->middleware(LogMiddleware::class)->middleware('token:secret,foo');
Route::get('/emeil', EmailController::class);
Route::resource('posts', PostController::class);
Route::resource('photos', PhotoController::class);
/*
Route::prefix('user')->as('user.')->group(function(){
Route::resource('posts/{post}/comments',CommentController::class);
});
*/
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register/store',[RegisterController::class,'store'])->name('register.store');


Route::middleware('guest')->group(function(){
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store'])->name('login.store');
Route::get('login/{user}/confomation',[LoginController::class,'confirmation'])->name('login.confirmation');
Route::post('login/{user}/confirm',[LoginController::class,'confirm'])->name('login.confirm'); 
});
//Route::get('blog',[BlogController::class,'index'])->name('blog');
//Route::get('blog/{post}',[BlogController::class,'show'])->name('blog.show');
//Route::get('blog/{post}/like',[BlogController::class,'liske'])->name('blog.like');

//КАБИНЕТ ЮЗЕРА

Route::prefix('user')->middleware('auth','active', 'admin')->group(function(){
    Route::redirect('/user', '/user/posts')->name('user');
Route::get('posts', [PostController::class,'index'])->name('user.posts');
Route::post('posts/create',[PostController::class,'create'])->name('user.posts.create');
Route::post('posts/store',[PostController::class, 'store'])->name('user.posts.store');
Route::get('posts/{post}', [PostController::class,'show'])->name('user.posts.show');
Route::get('posts/{post}/edit',[PostController::class,'edit'])->name('user.posts.edit');
Route::put('posts/{post}',[PostController::class,'update'])->name('user.post.update');
Route::delete('posts/{post}',[PostController::class,'delete'])->name('user.posts.delete');
Route::put('posts/{post}/like',[PostController::class,'like'])->name('user.posts.like');
});

//КАБИНЕТ АДМИНА


Route::get('admin/', [AdminController::class,'index'])->name('admin.index');
Route::get('admin/posts/create',[AdminController::class,'create'])->name('admin.post.create');
Route::post('admin/posts',[AdminController::class, 'store'])->name('admin.posts.store');
Route::get('admin/posts/{post}', [AdminControllerr::class,'show'])->name('admin.post.show');
Route::get('admin/posts/{post}/edit',[AdminController::class,'edit'])->name('admin.post.edit');
Route::put('admin/posts/{post}',[AdminController::class,'update'])->name('admin.post.update');
Route::delete('admin/posts/{post}',[AdminController::class,'delete'])->name('admin.post.delete');
Route::put('admin/posts/{post}/like',[AdminController::class,'like'])->name('admin.post.like');
Route::get('admin/students',[AdminController::class,'students'])->name('admin.students');

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login/store',[LoginController::class,'store'])->name('store');

Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('blog/store',[BlogController::class, 'store'])->name('blog.store');
Route::get('blog/show/{post}', [BlogController::class,'show'])->name('blog.show');
Route::get('blog/{post}/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::put('blog/update/{post}',[BlogController::class,'update'])->name('blog.update');
Route::delete('blog/delete//{post}',[BlogController::class,'delete'])->name('blog.delete');
Route::put('blog/{post}/like',[BlogController::class,'like'])->name('.blog.like');

//Route::get('test',TestController::class)->name('index');
Route::get('valuta',[ValutaController::class,'index'])->name('index');
Route::post('valuta/store',[ValutaController::class,'store'])->name('valuta.store');
Route::get('valuta/{post}/show',[ValutaController::class,'store'])->name('valuta.show');
Route::get('valuta/{post}/edit',[ValutaController::class,'edit'])->name('valuta.edit');
Route::post('valuta/{post}/update',[ValutaController::class,'update'])->name('valuta.update');
Route::put('valuta/{post}/dalete',[ValutaController::class,'deleta'])->name('valuta.delete');

Route::get('task',[TaskController::class,'index'])->name('index');
Route::post('task/store',[TaskController::class,'store'])->name('task.store');
Route::get('task/create',[TaskController::class,'create'])->name('task.create');
Route::get('task/{task}/show',[TaskController::class,'show'])->name('task.show');
Route::get('task/{task}/edit',[TaskController::class,'edit'])->name('task.edit');
Route::patch('task/{task}/update',[TaskController::class,'update'])->name('task.update');
Route::delete('task/{task}/delete',[TaskController::class,'delete'])->name('task.delete');



Route::get('admin/student/test',[AdminStudentController::class,'test'])->name('admin.student.test');
Route::get('admin/student',[AdminStudentController::class,'index'])->name('admin.student.index');
Route::post('admin/student/store',[AdminStudentController::class,'store'])->name('admin.student.store');
Route::get('admin/student/create',[AdminStudentController::class,'create'])->name('admin.student.create');
Route::get('admin/student/{student}/',[AdminStudentController::class,'show'])->name('admin.student.show');
Route::get('admin/student/{student}/edit',[AdminStudentController::class,'edit'])->name('admin.student.edit');
Route::patch('admin/student/{student}/',[AdminStudentController::class,'update'])->name('admin.student.update');
Route::delete('admin/student/{student}/delete',[AdminStudentController::class,'delete'])->name('admin.student.delete');

Route::get('admin/import-excel', [ExcelImportController::class,'index'])->name('import.excel');
Route::post('admin/import-excel', [ExcelImportController::class,'import']);

Route::get('admin/', function () {
    return redirect()->route('products.index');
});
Route::resource('admin/products', ProductController::class)->except('show');
Route::post('admin/products/store', [ProductController::class,'store'])->name('admin.products.store');
Route::get('admin/products/import/index', [MasterController::class, 'importProductIndex'])->name('importProductIndex');
Route::post('admin/products/import', [MasterController::class, 'importProduct'])->name('importProduct');
Route::get('admin/products/export', [MasterController::class, 'exportProduct'])->name('exportProduct');