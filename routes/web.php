<?php

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

Route::get('/', function () {return view('welcome');});

Route::get('/a', function () {return view('Admin.AdminDashbord');});





Auth::routes();


Route::prefix('Categorie')->middleware('auth')->group( function () {
//----------------------------------------  categorie -------------------------------------------------------------------
//index
    Route::get('/IndexCategorie', 'Categorie\CategorieControler@index')->name('IndexCategorie');

//end index


//add

    Route::get('/AddCategorie', 'Categorie\CategorieControler@add')->name('AddCategorie');
    Route::post('/AddCategorie', 'Categorie\CategorieControler@add')->name('AddCategorie');
//end add

//Edite

    Route::get('/EditeCategorie/{id}', 'Categorie\CategorieControler@edite')->name('EditeCategorie');
    Route::post('/EditeCategorie/{id}', 'Categorie\CategorieControler@edite')->name('EditeCategorie');

//end Edite

//Delete
    Route::get('/DeleteCategorie/{id}', 'Categorie\CategorieControler@Delete')->name('DeleteCategorie');
    Route::post('/DeleteCategorie/{id}', 'Categorie\CategorieControler@Delete')->name('DeleteCategorie');


//End Delete
});



Route::prefix('Event')->middleware('auth')->group( function () {

    Route::get('/IndexEvent', 'Event\EventConttroller@index')->name('IndexEvent');


    Route::get('/AddEvent', 'Event\EventConttroller@add')->name('AddEvent');
    Route::post('/AddEvent', 'Event\EventConttroller@add')->name('AddEvent');


    Route::get('/DeleteEvent/{id}', 'Event\EventConttroller@delete')->name('DeleteEvent');

});



Route::prefix('Mark')->middleware('auth')->group( function () {

    Route::get('/IndexMark', 'Mark\MarkController@index')->name('IndexMark');


    Route::get('/AddMark', 'Mark\MarkController@add')->name('AddMark');
    Route::post('/AddMark', 'Mark\MarkController@add')->name('AddMark');

    Route::get('/DeleteMark/{id}', 'Mark\MarkController@delete')->name('DeleteMark');

});



Route::prefix('Course')->middleware('auth')->group( function () {
//----------------------------------------  categorie -------------------------------------------------------------------
//index

    Route::get('/IndexCourse', 'Course\CourseController@index')->name('IndexCourse');


    Route::get('/InfoCourse/{id}', 'Course\CourseController@info')->name('InfoCourse');

//end index


//add

    Route::get('/AddCourse', 'Course\CourseController@add')->name('AddCourse');
    Route::post('/AddCourse', 'Course\CourseController@add')->name('AddCourse');
//end add


//Edite

    Route::get('/EditeCourse/{id}', 'Course\CourseController@edite')->name('EditeCourse');
    Route::post('/EditeCourse/{id}', 'Course\CourseController@edite')->name('EditeCourse');

//end Edite

//Delete
    Route::get('/DeleteCourse/{id}', 'Course\CourseController@Delete')->name('DeleteCourse');
    Route::post('/DeleteCourse/{id}', 'Course\CourseController@Delete')->name('DeleteCourse');


//End Delete
});


Route::prefix('Lecture')->middleware('auth')->group( function () {

    Route::get('/IndexLecture', 'Lecture\LectureController@index')->name('IndexLecure');



    Route::get('/AddLecture/{id}', 'Lecture\LectureController@AddId')->name('AddLectureId');
//    Route::post('/AddLecture/{id}', 'Lecture\LectureController@AddId')->name('AddLectureId');
    Route::get('/AddLecture', 'Lecture\LectureController@add')->name('AddLecture');
    Route::post('/AddLecture', 'Lecture\LectureController@add')->name('AddLecture');





    Route::get('/DeleteLecture/{id}', 'Lecture\LectureController@delete')->name('DeleteLecture');






        Route::post('/EditeLecture/{id}', 'Lecture\LectureController@edite')->name('EditeLecture');
        Route::get('/EditeLecture/{id}', 'Lecture\LectureController@edite')->name('EditeLecture');



});




Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

// start route quiz
Route::group(['middleware' => 'auth'], function () {
    Route::get('/HomeQuiz', 'HomeQuizController@index');
    Route::resource('tests', 'TestsController');
    Route::resource('profile', 'profileController');
    // Route::resource('roles', 'RolesController');
    // Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    // Route::resource('users', 'UsersController');
    // Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    // Route::resource('user_actions', 'UserActionsController');
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
});// end route quiz
