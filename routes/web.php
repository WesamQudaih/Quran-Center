<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Teachers\AchievementTeacherController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\teachers\ActivitesTeacherController;
use App\Http\Controllers\CirclesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teachers\StudentTeacherController;
use App\Http\Controllers\StudentCoursesController;
use App\Http\Controllers\TeacherValuationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Route::get('/teacher', function () {
//     return view('/teachers/TeacherHome');
// });
// Route::get('/Division',[ DivisionController::class, 'create']  )->name('division');
// Route::post('/Division/store',[ DivisionController::class, 'store']  )->name('division.store');

require __DIR__ . '/auth.php';




Auth::routes();

//Normal Users Routes List
// Route::middleware(['auth', 'user-access:user'])->group(function () {

//     // Route::get('/home', [HomeController::class, 'index'])->name('home');
//     return view('/teachers/TeacherHome');
// });

//teacher Routes List
// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function () {return view('home'); });
//     Route::resource('activities', ActivitesController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('achievements', AchievementController::class);
//     Route::resource('divisions', DivisionsController::class);
//     Route::resource('courses_students', StudentCoursesController::class);
//     Route::resource('courses', CoursesController::class);
// });

//Admin Routes List
// Route::prefix('admin')->middleware(['auth:user'])->group(function () {
//     Route::resource('circles', CirclesController::class);
//     Route::resource('courses', CoursesController::class);
//     Route::resource('teachers', TeacherValuationController::class);
//     Route::resource('activities', ActivitesController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('achievements', AchievementController::class);
//     Route::resource('divisions', DivisionsController::class);
//     Route::resource('courses_students', StudentCoursesController::class);
// });










// Route::get('/logout', [App\Http\Controllers\UsersController::class, 'logout']);




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::get('/app', function () {
//         return view('crud.app');
//     });
// });

Route::get('/students/{id}', [App\Http\Controllers\StudentController::class, 'show'])->middleware('auth');


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('/admin/parent');
    })->name('admin.adminHome');
    Route::resource('circles', CirclesController::class);
    Route::resource('courses', CoursesController::class);
    Route::resource('teachers', TeacherValuationController::class);
    Route::resource('activities', ActivitesController::class);
    Route::resource('students', StudentController::class);
    Route::resource('divisions', DivisionsController::class);
    Route::resource('courses_students', StudentCoursesController::class);
    Route::resource('users', UsersController::class);
});

Route::prefix('teacher')->group(function () {
    Route::get('/', function () {
        return view('/teachers/TeacherHome');
    })->name('teachers.TeacherHome');
    Route::get('/activities', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'index'])->name('teachers.activities.index');
    Route::post('/activities', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'store'])->name('teachers.activities.store');
    Route::get('/activities/create', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'create'])->name('teachers.activities.create');
    Route::put('/activities/{activity}', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'update'])->name('teachers.activities.update');
    Route::delete('/activities/{activity}', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'destroy'])->name('teachers.activities.destroy');
    Route::get('/activities/{activity}/edit', [App\Http\Controllers\Teachers\ActivitesTeacherController::class, 'edit'])->name('teachers.activities.edit');

    Route::get('/students', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'index'])->name('teachers.students.index');
    Route::post('/students', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'store'])->name('teachers.students.store');
    Route::get('/students/create', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'create'])->name('teachers.students.create');
    Route::put('/students/{student}', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'update'])->name('teachers.students.update');
    Route::delete('/students/{student}', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'destroy'])->name('teachers.students.destroy');
    Route::get('/students/{student}/edit', [App\Http\Controllers\Teachers\StudentTeacherController::class, 'edit'])->name('teachers.students.edit');

    Route::get('/achievements', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'index'])->name('teachers.achievements.index');
    Route::post('/achievements', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'store'])->name(' teachers.achievements.store');
    Route::get('/achievements/create', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'create'])->name('teachers.achievements.create');
    Route::put('/achievements/{achievement}', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'update'])->name('teachers.achievements.update');
    Route::delete('/achievements/{achievement}', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'destroy'])->name('teachers.achievements.destroy');
    Route::get('/achievements/{achievement}/edit', [App\Http\Controllers\Teachers\AchievementTeacherController::class, 'edit'])->name('teachers.achievements.edit');

    // Route::resource('activities', ActivitesTeacherController::class);
    // Route::resource('students', StudentController::class);
    // Route::resource('achievements', AchievementController::class);
    // Route::resource('divisions', DivisionsController::class);
    // Route::resource('courses_students', StudentCoursesController::class);
    // Route::resource('courses', CoursesController::class);
});



// Route::middleware(["auth", 'user-access:user'])->group(function () {
//     Route::prefix('user')->name('user.')->group(function () {
//         Route::get('/home', [App\Http\Controllers\HomeController::class, 'Userindex'])->name('user.home');
//         Route::get('/logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('user.logout');

// });
// });

// Route::middleware(["auth", 'user-access:admin'])->group(function () {

//     Route::prefix('admin')->name('admin.')->group(function () {
//         Route::get('/home', function () {
//             return view('admin.parent');
//         })->name('admin.home');
//         //Route::get('/home', [App\Http\Controllers\HomeController::class, 'Adminindex'])->name('admin.home');
//         Route::get('/logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('admin.logout');
//     });
// });

// Route::middleware(['guest:web'])->group(function () {
//     Route::get('/', [App\Http\Controllers\UsersController::class, 'login'])->name('login');
//     Route::post('/check', [App\Http\Controllers\UsersController::class, 'check'])->name('user.check');

// });
