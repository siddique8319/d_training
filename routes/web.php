<?php

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

// Route::get('/admin', function () {
//     return view('admin.index');

// });


// -------------all admin controller--------------
Route::group(['middleware' => 'auth'],
    function () {
        Route::resource('/admin', 'MainAdminController');
        Route::resource('Slider', 'SliderController');
        Route::resource('SpeacialVideo', 'speacialVideoController');
        Route::resource('Studentfeedback', 'studentFeedbackAdminController');
        Route::resource('UpcomingSeminar', 'upcomingSeminarcontroller');
        Route::resource('CourseAdmin', 'courseadminController');
        Route::resource('CertificationAdmin', 'certifcationProgramadminController');
        Route::resource('OurProgramAdmin', 'ourProgramadminController');
        Route::resource('AboutOurTrainingAdmin', 'aboutourTrainingadminController');

        Route::resource('CourseModule', 'AdminCoursemoduleController');
        Route::resource('SoftwareModule', 'AdminSoftwaremoduleController');
        Route::resource('AdminMultigallery', 'AdminMultiGalleryController');
        Route::resource('AdminBlog', 'adminBlogController');
        Route::resource('AdminTutorial', 'adminTutorialController');
        Route::resource('AdminNotice', 'adminNoticeController');
        Route::resource('StudentAdminProject', 'studentProjectAdmin_Controller');
        Route::resource('FeedbackShow', 'feedback_controller');
        Route::resource('StudentApplicationBackend', 'StudentApplicationController');






    });




// --------using route and Home about Controller----
Route::resource('/','MainpageController');
Route::resource('Homepage','MainpageController');
Route::resource('HomeAbout','AboutHomeController');
Route::get('HomeFounderCompany.aboutCompanyFounder','AboutHomeController@aboutCompanyFounder')->name('HomeFounderCompany.aboutCompanyFounder');

Route::resource('UpdateBatch','updateBatchHomeController');
Route::resource('ContactHome','ContactHomeController');
Route::resource('NoticeHome','NoticeHomeController');
Route::resource('TrainingHome','TrainingHomeController');
Route::resource('Professional','ProfessionalCourseConroller');
Route::resource('DiplomaCourse','DiplomaCourseConroller');
Route::resource('FreeSeminner','FreeSeminarController');
Route::resource('ITsecurity','ITsecurityCourseConroller');

Route::resource('Blog','BlogController');
Route::resource('Tutorial','TutorialController');
Route::resource('StudentGallery','StudentGalleryController');
Route::resource('TeacherGallery','TeacherGalleryController');
Route::resource('OfficeGallery','OfficeGalleryController');
Route::resource('DoofazitEvent','DoofazitEventController');
Route::resource('LabProgram','LapProgramController');
Route::resource('NoticeView','NoticeHomeController');
Route::resource('StudentProject','studentProject_Controller');
Route::resource('FeedbackStudent','feedback_controller');


Auth::routes();

Route::get('/home', 'HomeController@index');



//<------------------------MenuSetup------------------------->

Route::resource('addCategory','categoryController');
Route::resource('addSubCategory','subCategoryController');


//<-------------------------Header News-------------------------------------->

Route::resource('addnewsheader','headerNewsController');


//<.......................Student Application route.................................>




