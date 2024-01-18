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

use Illuminate\Support\Facades\Route;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/nav', function () {
   return view('layouts.default.navigation_new');
});

//Default Controller
Route::get('/', 'HomeController@index')->name('home');
Route::post('/home/submit', 'HomeController@submit');
Route::post('/contact/message', 'VmslController@contactMessage')->name('contact.message');
Route::get('/contact-us', 'VmslController@contactPage')->name('contact.page');
Route::get('/grs', 'VmslController@grsPage')->name('grs.page');
Route::post('/grs-submit', 'VmslController@grsPagesubmit')->name('grs.page.submit');


Route::get('/e-tender', 'VmslController@etenderPage')->name('etender.page');
Route::get('/e-tender-data', 'VmslController@etenderPagedata')->name('etender.data');


Route::get('/achievement', 'VmslController@achievementPage')->name('achievement.page');
Route::get('/achievement-details/{id}', 'VmslController@achievementDetails');
Route::get('/member-details/{id}', 'VmslController@memberDetails');
Route::post('/newsletter', 'VmslController@newsletter')->name('newsletter');



Route::get('policy-and-guidelines/{category_slug}','VmslController@categoryWiseGuidelines')->name('category.wise.guidelines');
Route::get('/policy-and-guidelines', 'VmslController@policyGuidelines')->name('policy.and.guidelines');
Route::get('/guidelines-data/{id}', 'VmslController@guidelinesData')->name('guidelines.data');


Route::get('reports/{category_slug}','VmslController@categoryWiseReport')->name('category.wise.report');
Route::get('/reports', 'VmslController@policyReport')->name('policy.and.report');
Route::get('/reports-data/{id}', 'VmslController@ReportData')->name('report.data');

Route::get('/company-executives', 'VmslController@companyExecutives')->name('company.executives');
Route::get('/committees/{category_slug}', 'VmslController@committees')->name('committees');


Route::get('/downloads', 'VmslController@downloads')->name('download.page');
Route::get('/download-data', 'VmslController@downlaoddata')->name('download.data');

Route::get('/disclosure', 'VmslController@disclosurePage')->name('disclosure.page');
Route::get('/disclosure-data', 'VmslController@disclosureData')->name('disclosure.data');
Route::get('/green-office', 'VmslController@greenOffice')->name('green.office');

Route::get('/about-us', 'VmslController@aboutPage')->name('about.page');
//VMSL Route
Route::get('/loans','VmslController@loanPage')->name('loan.page');
Route::get('loans/{any}','VmslController@loans')->name('loan.single.page');
Route::get('loan/{any}','VmslController@CategoryWiseLoan')->name('loan.category.page');
Route::post('/loan-request', 'VmslController@loan_request')->name('loan.request');

Route::get('service/{any}','VmslController@serviceSignlePage')->name('service.signle.page');


Route::get('/home/skin/{any?}', 'HomeController@getSkin');
Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');

/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('csrs','HomeController@csr');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read')->name('single.blog');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');


Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// Custom routes
$path = base_path().'/routes/custom/';
$lang = scandir($path);
foreach($lang as $value) {
	if($value === '.' || $value === '..') {continue;}
	include( 'custom/'. $value );

}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin

		include('sximo.php');

});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});






Route::get('deposit-schemes/{any}','VmslController@deposits');
Route::get('directors/{any}','VmslController@directors');
Route::get('faq','VmslController@faq');
Route::get('/financial-calculator','VmslController@calculator');
Route::get('why-nhfc','VmslController@whynhfc');
Route::get('featured-program','VmslController@featured_program');

Route::get('management-team','VmslController@management_team');
Route::get('corporate-governance/{id}','VmslController@corporateGovernance')->name('corporate-governance');


Route::get('strategic-partners','VmslController@strategic_partners');
Route::get('regulatory-disclosures','VmslController@regulatory_disclosures');
Route::get('financial-report','VmslController@financial_report');
Route::get('shareholding-structure','VmslController@shareholding_structure');
Route::get('location','VmslController@location');
Route::get('news','VmslController@news');
Route::get('news/{id}','VmslController@news_details');

Route::get('news-bulletin','VmslController@news_bulletin');
Route::get('complain-cell','VmslController@complainCell')->name('complain.cell.page');
Route::get('projects/{category_slug}','VmslController@projectPage')->name('project.page');


Route::get('careers','VmslController@vacancy_announcement');
Route::get('career-with-us/{slug}','VmslController@careerWithUs')->name('career.with.us');
Route::post('career/request/submit','VmslController@careerRequestSubmit')->name('career.request.submit');



Route::get('files/{id}','VmslController@files_info');
Route::get('/get-event-category-imgae/{id}','VmslController@getEventCategoryImgae');



Route::post('/deposit-request', 'VmslController@deposit_request');
Route::get('/sitemap', 'VmslController@sitemap');

//EVENT
Route::get('event/single/{slug}','VmslController@eventSingle')->name('event.single');
Route::get('news-and-events','VmslController@events')->name('events');
Route::get('financial/literacy','VmslController@financialLiteracy')->name('financial.literacy');

Route::get('bongobondhu-corner','VmslController@bongobondhu_corner')->name('bongobondhu.corner');

Route::post('/get-search-content', 'VmslController@getSearchContent');
Route::any('/get-search-page', 'VmslController@getSearchPage')->name('get-search-page');
Route::post('/all-call-for','VmslController@callfor')->name('all-call-for');

//Custom Page
Route::get('pages/{any}','VmslController@custom_page')->name('custom.page');




                  