<?php

use Illuminate\Support\Facades\Route;
use App\Event;
use App\Blog;
use App\User;
use App\EventDonation;

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

/*---------------------Front End--------------------*/

Route::get('/', function () {
	$education_event = Event::where('Category_id','1')->where('Status','1')->orderBy('created_at','desc')->limit(3)->get();
	$side_education_event = Event::where('Category_id','1')->where('Status','1')->orderBy('created_at','desc')->limit(3)->get();
	$medical_event = Event::where('Category_id','4')->where('Status','1')->orderBy('created_at','desc')->limit(3)->get();
	$side_medical_event = Event::where('Category_id','4')->where('Status','1')->orderBy('created_at','desc')->limit(3)->get();
	$poverty_event = Event::where('Category_id','5')->where('Status','1')->orderBy('created_at','desc')->limit(3)->get();
	$ongoing_event = Event::where('Status','1')->where('raised_fund','>','0')->orderBy('created_at','desc')->limit(4)->get();
	$upcoming_event = Event::where('Status','1')->where('raised_fund','=','0')->orderBy('created_at','desc')->limit(4)->get();
	$completed_event = Event::where('Status','1')->orderBy('created_at','desc')->get();
	$success_story = Event::where('Status','1')->orderBy('created_at','desc')->get();
	$blog_post = Blog::orderBy('created_at','desc')->limit(2)->get();

	$total_donors = User::where('register_as','donor')->where('register_as','Donor')->count();
	$total_events = Event::count();
	$event_donations = EventDonation::sum('Payment');
	$successfully_completed = Event::whereColumn('raised_fund','>=','Fund')->count();

    return view('front-end.partials.index',compact('education_event','side_education_event','medical_event','side_medical_event','poverty_event','ongoing_event','upcoming_event','completed_event','success_story','blog_post','total_donors','total_events','event_donations','successfully_completed'));
});

/*Route::get('index', 'htmlcontroller@homepage');*/

Route::get('about', 'htmlcontroller@aboutpage');

Route::get('education', 'htmlcontroller@educationpage');

// Education Detail Page
Route::get('educationdetail/{id}', 'htmlcontroller@educationdetailpage');

Route::get('medical', 'htmlcontroller@medicalpage');

// Medical Detail Page
Route::get('medicaldetail/{id}', 'htmlcontroller@medicaldetailpage');

Route::get('poverty', 'htmlcontroller@povertypage');

// Poverty Detail Page
Route::get('povertydetail/{id}', 'htmlcontroller@povertydetailpage');

Route::get('ongoingevent', 'htmlcontroller@ongoingeventpage');

// Ongoing Event Detail Page
Route::get('ongoingeventdetail/{id}', 'htmlcontroller@ongoingeventdetailpage');

Route::get('upcomingevent', 'htmlcontroller@upcomingeventpage');

// Upoming Event Detail Page
Route::get('upcomingeventdetail/{id}', 'htmlcontroller@upcomingeventdetailpage');

Route::get('completedevent', 'htmlcontroller@completedeventpage');

//Completed Event Detail Page
Route::get('completedeventdetail/{id}', 'htmlcontroller@completedeventdetailpage');

Route::get('blog', 'htmlcontroller@blogpage');

//Blog Post Detail Page
Route::get('blogdetail/{id}', 'htmlcontroller@blogdetailpage');

Route::get('successstories', 'htmlcontroller@successstoriespage');

//Successful story Detail Page
Route::get('successstoriesdetail/{id}', 'htmlcontroller@successstoriesdetailpage');

/*Route::get('sign-up', 'htmlcontroller@registerpage');

Route::get('sign-in', 'htmlcontroller@loginpage');*/

Route::get('contact', 'htmlcontroller@contactpage');

Route::get('termofuse', 'htmlcontroller@termpage');

Route::get('privacy&policy', 'htmlcontroller@privacypage');

Route::get('faqs', 'htmlcontroller@faqspage');

Route::get('readmore', 'htmlcontroller@readmorepage');

Route::get('thankyou', 'htmlcontroller@Thankyoupage');

Route::get('commitnow', 'htmlcontroller@CommitNowpage');

//search
Route::get('search-education-event', 'SearchController@SearchEducationEvent');

Route::get('search-medical-event', 'SearchController@SearchMedicalEvent');

Route::get('search-poverty-event', 'SearchController@SearchPovertyEvent');

Route::get('search-ongoing-event', 'SearchController@SearchOngoingEvent');

Route::get('search-upcoming-event', 'SearchController@SearchUpcomingEvent');

Route::get('search-completed-event', 'SearchController@SearchCompletedEvent');

Route::get('search-success-stories', 'SearchController@SearchSuccessStory');

Route::get('search-blog-post', 'SearchController@SearchBlogPost');

/*Route::get('volunteer', 'htmlcontroller@volunteerpage');*/

/*---------------------/Front End--------------------*/


/*-------------------Admin Dasboard-------------------*/

// User Administration
Auth::routes(['verify' => true]);//Email Verification

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');//User Dashboard Controller

Route::resource('users', 'UserController');

Route::post('users/{id}', 'UserController@update')->name('users');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::get('/admin', 'AdminController@index');


// Categories Management
Route::get('/showcategories', 'CategoriesManagementController@index');

Route::get('/createcategories', 'CategoriesManagementController@create');

Route::post('/savecategories', 'CategoriesManagementController@store');

Route::get('/editcategories/{id}', 'CategoriesManagementController@edit');

Route::post('/updatecategories/{id}', 'CategoriesManagementController@update');

Route::get('/deletecategories/{id}', 'CategoriesManagementController@destroy');


// Event Management
Route::get('/showallevent', 'EventManagementController@index');

Route::get('/generateevent', 'EventManagementController@create');

Route::post('/saveuserevent', 'EventManagementController@store');

Route::get('/edituserevent/{id}', 'EventManagementController@edit');

Route::get('/viewuserevent/{id}', 'EventManagementController@view');

Route::post('/updateuserevent/{id}', 'EventManagementController@update');

Route::get('/deleteuserevent/{id}', 'EventManagementController@destroy');


// Event Approval
Route::match(['get','post'],'/toggle-approve', 'ApprovalController@approval');

// Contact
Route::get('/showecontact', 'ContactController@index');

Route::post('/savecontact', 'ContactController@store');

Route::get('/deletecontact/{id}', 'ContactController@destroy');

Route::match(['get','post'],'/toggle-view', 'ContactController@ContactView');

//Donation Management
Route::get('/view-general-donation', 'DonationManagementController@Generalindex');

Route::get('/view-event-donation', 'DonationManagementController@Eventindex');

//Event Info
Route::get('/view-ongoing-event', 'EventInfoController@OngoingEventindex');

Route::get('/deleteongoingevent/{id}', 'EventInfoController@destroyongoingevent');

Route::get('/view-upcoming-event', 'EventInfoController@UpcomingEventindex');

Route::get('/deleteupcomingevent/{id}', 'EventInfoController@destroyupcomingevent');

Route::get('/view-completed-event', 'EventInfoController@CompletedEventindex');

Route::get('/deletecompletedevent/{id}', 'EventInfoController@destroycompletedevent');

// Blog Management
Route::get('/show-blog', 'BlogManagementController@index');

Route::get('/new-blog', 'BlogManagementController@create');

Route::post('/publish-blog', 'BlogManagementController@store');

Route::get('/edit-blog/{id}', 'BlogManagementController@edit');

Route::post('/update-blog/{id}', 'BlogManagementController@update');

Route::get('/delete-blog/{id}', 'BlogManagementController@destroy');

// Transfer Fund Management
Route::get('/view-success-stories', 'TransferFundController@index');

Route::get('/transfer-fund/{id}', 'TransferFundController@show');

Route::post('transfer-by-card','TransferFundController@TransferByCard')->name('transfer-by-card');

Route::post('transfer-by-easypaisa','TransferFundController@TransferByEasyPaisa')->name('transfer-by-easypaisa');

Route::get('/delete-success-stories/{id}', 'TransferFundController@destroy');
/*-------------------/Admin Dasboard-------------------*/


/*-------------------User Dasboard-------------------*/

// Event Request
Route::get('/showevents', 'EventRequestController@index');

Route::get('/show-approve-events', 'EventRequestController@approveindex');

Route::get('/createevents', 'EventRequestController@create');

Route::post('/saveevent', 'EventRequestController@store');

Route::get('/editevent/{id}', 'EventRequestController@edit');

Route::post('/updateevent/{id}', 'EventRequestController@update');

Route::get('/deleteevent/{id}', 'EventRequestController@destroy');


// Profile Management
Route::get('/profile', 'ProfileController@Profile');

Route::post('/updateprofile', 'ProfileController@Update_Profile');

//Donation
Route::group(['middleware'=>['auth']],function(){

	//Event Donation
	Route::get('/basket-listing/{id}', 'EventDonationController@show');

	Route::post('checkout','EventDonationController@EventDonation')->name('checkout');

	Route::post('checkout-now','EventDonationController@EasypaisaDonation')->name('checkout-now');

	//General Donation
	Route::get('donate', 'GeneralDonationController@create');

	Route::post('amount-donated','GeneralDonationController@GeneralDonation')->name('amount-donated');

	Route::post('commit-now','GeneralDonationController@storeEasypaisa')->name('commit-now');
});

//General Donation View In User Panel
Route::get('/show-general-donation', 'GeneralDonationController@index');

//Event Donation View In User Panel
Route::get('/show-event-donation', 'EventDonationController@index');
/*-------------------/User Dasboard-------------------*/