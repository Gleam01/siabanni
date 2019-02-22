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

Route::get('/', ['uses' => 'FrontViewController@index', 'as' => 'front.home']);

Route::get('courses', ['uses' => 'FrontViewController@courses', 'as' => 'front.courses']);

Route::get('event', ['uses' => 'FrontViewController@event', 'as' => 'front.event']);

Route::get('teachers', ['uses' => 'FrontViewController@teachers', 'as' => 'front.teachers']);

Route::get('teachers-details', ['uses' => 'FrontViewController@teacher_detail', 'as' => 'front.teacher-details']);

Route::get('blog', ['uses' => 'FrontViewController@blog', 'as' => 'front.blog']);

Route::get('blog-details', ['uses' => 'FrontViewController@blog_details', 'as' => 'front.blog-detail']);

Route::get('about', ['uses' => 'FrontViewController@about', 'as' => 'front.about']);

Route::get('faq', ['uses' => 'FrontViewController@faq', 'as' => 'front.faq']);

Route::get('galary', ['uses' => 'FrontViewController@galary', 'as' => 'front.galary']);

Route::get('price', ['uses' => 'FrontViewController@price', 'as' => 'front.price']);

Route::get('contact', ['uses' => 'FrontViewController@contact', 'as' => 'front.contact']);


// Theme Forest Admin
Route::prefix('admin')->group(function () {
  Route::get('/', ['uses' => 'BackViewController@index', 'as' => 'back.home']);

  Route::get('students', ['uses' => 'BackViewController@students', 'as' => 'back.students']);

  Route::get('add-students', ['uses' => 'BackViewController@add_students', 'as' => 'back.add-students']);

  Route::get('students-profile', ['uses' => 'BackViewController@students_profile', 'as' => 'back.students-profile']);

  Route::get('students-invoice', ['uses' => 'BackViewController@students_invoice', 'as' => 'back.students-invoice']);

  Route::get('professors', ['uses' => 'BackViewController@professors', 'as' => 'back.professors']);

  Route::get('add-staff', ['uses' => 'BackViewController@add_staff', 'as' => 'back.add-staff']);

  Route::get('add-professors', ['uses' => 'BackViewController@add_professors', 'as' => 'back.add-professors']);

  Route::get('sign-in', ['uses' => 'BackViewController@sign_in', 'as' => 'back.sign-in']);

  Route::get('sign-up', ['uses' => 'BackViewController@sign_up', 'as' => 'back.sign-up']);

  Route::get('forgot-password', ['uses' => 'BackViewController@forgot_password', 'as' => 'back.forgot-password']);

  Route::get('404', ['uses' => 'BackViewController@four_oh_four', 'as' => 'back.404']);

  Route::get('500', ['uses' => 'BackViewController@server_error', 'as' => 'back.500']);

  Route::get('page-offline', ['uses' => 'BackViewController@page_offline', 'as' => 'back.page-offline']);

  Route::get('locked', ['uses' => 'BackViewController@locked', 'as' => 'back.locked']);

  Route::get('events', ['uses' => 'BackViewController@events', 'as' => 'back.events']);

  Route::get('departments', ['uses' => 'BackViewController@departments', 'as' => 'back.departments']);

  Route::get('add-departments', ['uses' => 'BackViewController@add_departments', 'as' => 'back.add-departments']);

  Route::get('courses', ['uses' => 'BackViewController@courses', 'as' => 'back.courses']);

  Route::get('add-courses', ['uses' => 'BackViewController@add_courses', 'as' => 'back.add-courses']);

  Route::get('courses-info', ['uses' => 'BackViewController@courses_info', 'as' => 'back.courses-info']);

  Route::get('library', ['uses' => 'BackViewController@library', 'as' => 'back.library']);

  Route::get('classroom', ['uses' => 'BackViewController@classroom', 'as' => 'back.classroom']);

  Route::get('noticeboard', ['uses' => 'BackViewController@noticeboard', 'as' => 'back.noticeboard']);

  Route::get('centres', ['uses' => 'BackViewController@centres', 'as' => 'back.centres']);

  Route::get('blog-dashboard', ['uses' => 'BackViewController@blog_dashboard', 'as' => 'back.blog-dashboard']);

  Route::get('blog-post', ['uses' => 'BackViewController@blog_post', 'as' => 'back.blog-post']);

  Route::get('blog-list', ['uses' => 'BackViewController@blog_list', 'as' => 'back.blog-list']);

  Route::get('blog-grid', ['uses' => 'BackViewController@blog_grid', 'as' => 'back.blog-grid']);

  Route::get('blog-details', ['uses' => 'BackViewController@blog_details', 'as' => 'back.blog-details']);

  Route::get('file-dashboard', ['uses' => 'BackViewController@file_dashboard', 'as' => 'back.file-dashboard']);

  Route::get('file-documents', ['uses' => 'BackViewController@file_documents', 'as' => 'back.file-documents']);

  Route::get('file-media', ['uses' => 'BackViewController@file_media', 'as' => 'back.file-media']);

  Route::get('file-images', ['uses' => 'BackViewController@file_images', 'as' => 'back.file-images']);

  Route::get('mail-inbox', ['uses' => 'BackViewController@mail_inbox', 'as' => 'back.mail-inbox']);

  Route::get('chat', ['uses' => 'BackViewController@chat', 'as' => 'back.chat']);

  Route::get('contact', ['uses' => 'BackViewController@contact', 'as' => 'back.contact']);

  Route::get('widgets-app', ['uses' => 'BackViewController@widgets_app', 'as' => 'back.widgets-app']);

  Route::get('widgets-data', ['uses' => 'BackViewController@widgets_data', 'as' => 'back.widgets-data']);

  Route::get('blank', ['uses' => 'BackViewController@blank', 'as' => 'back.blank']);

  Route::get('dashboard-rtl', ['uses' => 'BackViewController@dashboard_rtl', 'as' => 'back.dashboard-rtl']);

  Route::get('index2', ['uses' => 'BackViewController@index2', 'as' => 'back.index2']);

  Route::get('image-gallery', ['uses' => 'BackViewController@image_gallery', 'as' => 'back.image-gallery']);

  Route::get('timeline', ['uses' => 'BackViewController@timeline', 'as' => 'back.timeline']);

  Route::get('invoice', ['uses' => 'BackViewController@invoice', 'as' => 'back.invoice']);

  Route::get('ui_kit', ['uses' => 'BackViewController@ui_kit', 'as' => 'back.ui_kit']);

  Route::get('alerts', ['uses' => 'BackViewController@alerts', 'as' => 'back.alerts']);

  Route::get('collapse', ['uses' => 'BackViewController@collapse', 'as' => 'back.collapse']);

  Route::get('colors', ['uses' => 'BackViewController@colors', 'as' => 'back.colors']);

  Route::get('dialogs', ['uses' => 'BackViewController@dialogs', 'as' => 'back.dialogs']);

  Route::get('icons', ['uses' => 'BackViewController@icons', 'as' => 'back.icons']);

  Route::get('list-group', ['uses' => 'BackViewController@list_group', 'as' => 'back.list-group']);

  Route::get('media-object', ['uses' => 'BackViewController@media_object', 'as' => 'back.media-object']);

  Route::get('modals', ['uses' => 'BackViewController@modals', 'as' => 'back.modals']);

  Route::get('notifications', ['uses' => 'BackViewController@notifications', 'as' => 'back.notifications']);

  Route::get('progressbars', ['uses' => 'BackViewController@progressbars', 'as' => 'back.progressbars']);

  Route::get('range-sliders', ['uses' => 'BackViewController@range_sliders', 'as' => 'back.range-sliders']);

  Route::get('sortable-nestable', ['uses' => 'BackViewController@sortable_nestable', 'as' => 'back.sortable-nestable']);

  Route::get('tabs', ['uses' => 'BackViewController@tabs', 'as' => 'back.tabs']);

  Route::get('waves', ['uses' => 'BackViewController@waves', 'as' => 'back.waves']);

  Route::get('profile', ['uses' => 'BackViewController@profile', 'as' => 'back.profile']);

  Route::get('parents', ['uses' => 'BackViewController@parents', 'as' => 'back.parents']);

  Route::get('search-results', ['uses' => 'BackViewController@search_results', 'as' => 'back.search-results']);

  Route::put('accept-by-staff-level-one/{folder}', ['uses' => 'FolderController@acceptByStaffLevelOne', 'as' => 'folder.accept.staff.one']);

  Route::put('reject-by-staff-level-one/{folder}', ['uses' => 'FolderController@rejectByStaffLevelOne', 'as' => 'folder.reject.staff.one']);

  Route::put('accept-by-staff-level-two/{folder}', ['uses' => 'FolderController@acceptByStaffLevelTwo', 'as' => 'folder.accept.staff.two']);

  Route::put('reject-by-staff-level-two/{folder}', ['uses' => 'FolderController@rejectByStaffLevelTwo', 'as' => 'folder.reject.staff.two']);

  Route::put('student-status/{student}', ['uses' => 'StudentController@updateStatus', 'as' => 'student.status']);

});

Route::resource('school', 'SchoolController');
Route::resource('training', 'TrainingController');
Route::resource('option', 'OptionController');

Route::post('registerstaff', 'Auth\RegisterController@registerStaff')->name('registerstaff');


Auth::routes(['verify' => true]);

// Auth::routes();

Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'dashboard']);


Route::get('pursuit-registration/{step}', ['uses' => 'HomeController@pursuitRegistration', 'as' => 'register.pursuit'])->where('step', '[1-4]?');

Route::resource('user', 'UserController', ['except' => ['create', 'store']]);
Route::resource('student', 'StudentController');
Route::resource('folder', 'FolderController');
Route::get('admission', 'AdmissionPaymentController@create')->name('admission.create');
Route::post('admission', 'AdmissionPaymentController@store')->name('admission.store');