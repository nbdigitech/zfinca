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

//website links 
Route::get('/','IndexController@index')->name('Index');

Route::get('About','AboutController@aboutdirector')->name('AboutUs');

Route::get('Contact','ContactController@index')->name('Contact');

Route::post('Contact/Store','ContactController@store')->name('Contact/Store');

Route::post('Enquire/Store','ContactController@store_enquiry')->name('Enquire/Store');

Route::get('Team','AboutController@team')->name('Team');

Route::get('Services','ServicesController@index')->name('Services');

Route::get('Product','ProductController@product')->name('Product');

Route::get('Product/ProductDetails','IndexController@productdetails')->name('ProductDetails');

Route::get('Gallery/Images','GalleryController@images')->name('Gallery/Images');

Route::get('Gallery/Videos','GalleryController@videos')->name('Gallery/Videos');





//Admin panel area

Route::get('/Admin/Login','Admin\LoginController@Index')->name('Admin/Login');

Route::post('/Admin/Login/Attempt','Admin\LoginController@attempt')->name('Admin/Login/Attempt');

Route::group(['middleware'=>'auth'],function(){

Route::get('/Admin','Admin\DashboardController@Index')->name('Admin/Dashboard');

Route::get('Admin/Banner','Admin\BannerController@Index')->name('Admin/Banner');

Route::get('Admin/Banner/Add','Admin\BannerController@Create')->name('Admin/Banner/Add');

Route::post('Admin/Banner/Store','Admin\BannerController@Store')->name('Admin/Banner/Store');

Route::get('Admin/Banner/Store','Admin\BannerController@Return')->name('Admin/Banner/Store');

Route::post('Admin/Banner/EditSession','Admin\BannerController@EditSession')->name('Admin/Banner/EditSession');

Route::get('Admin/Banner/EditSession','Admin\BannerController@Return')->name('Admin/Banner/EditSession');

Route::get('Admin/Banner/Edit','Admin\BannerController@Edit')->name('Admin/Banner/Edit');

Route::post('Admin/Banner/Update','Admin\BannerController@Update')->name('Admin/Banner/Update');

Route::post('Admin/Banner/Delete','Admin\BannerController@Delete')->name('Admin/Banner/Delete');

Route::get('Admin/Banner/Update','Admin\BannerController@Return')->name('Admin/Banner/Update');

Route::get('Admin/Banner/Delete','Admin\BannerController@Return')->name('Admin/Banner/Delete');

//banner section//


//banner section//
Route::get('Admin/Notification','Admin\NotificationController@Index')->name('Admin/Notification');

Route::get('Admin/Notification/Add','Admin\NotificationController@Create')->name('Admin/Notification/Add');

Route::post('Admin/Notification/Store','Admin\NotificationController@Store')->name('Admin/Notification/Store');

Route::get('Admin/Notification/Store','Admin\NotificationController@Return')->name('Admin/Notification/Store');

Route::post('Admin/Notification/EditSession','Admin\NotificationController@EditSession')->name('Admin/Notification/EditSession');

Route::get('Admin/Notification/EditSession','Admin\NotificationController@Return')->name('Admin/Notification/EditSession');

Route::get('Admin/Notification/Edit','Admin\NotificationController@Edit')->name('Admin/Notification/Edit');

Route::post('Admin/Notification/Update','Admin\NotificationController@Update')->name('Admin/Notification/Update');

Route::post('Admin/Notification/Delete','Admin\NotificationController@Delete')->name('Admin/Notification/Delete');

Route::get('Admin/Notification/Update','Admin\NotificationController@Return')->name('Admin/Notification/Update');

Route::get('Admin/Notification/Delete','Admin\NotificationController@Return')->name('Admin/Notification/Delete');

//Notification section//


//TeamMember section//
Route::get('Admin/TeamMember','Admin\TeamMemberController@Index')->name('Admin/TeamMember');

Route::get('Admin/TeamMember/Add','Admin\TeamMemberController@Create')->name('Admin/TeamMember/Add');

Route::post('Admin/TeamMember/Store','Admin\TeamMemberController@Store')->name('Admin/TeamMember/Store');

Route::get('Admin/TeamMember/Store','Admin\TeamMemberController@Return')->name('Admin/TeamMember/Store');

Route::post('Admin/TeamMember/EditSession','Admin\TeamMemberController@EditSession')->name('Admin/TeamMember/EditSession');

Route::get('Admin/TeamMember/EditSession','Admin\TeamMemberController@Return')->name('Admin/TeamMember/EditSession');

Route::get('Admin/TeamMember/Edit','Admin\TeamMemberController@Edit')->name('Admin/TeamMember/Edit');

Route::post('Admin/TeamMember/Update','Admin\TeamMemberController@Update')->name('Admin/TeamMember/Update');

Route::post('Admin/TeamMember/Delete','Admin\TeamMemberController@Delete')->name('Admin/TeamMember/Delete');

Route::get('Admin/TeamMember/Update','Admin\TeamMemberController@Return')->name('Admin/TeamMember/Update');

Route::get('Admin/TeamMember/Delete','Admin\TeamMemberController@Return')->name('Admin/TeamMember/Delete');
//TeamMember section//


//TeamMember section//
Route::get('Admin/Testimonial','Admin\TestimonialController@Index')->name('Admin/Testimonial');

Route::get('Admin/Testimonial/Add','Admin\TestimonialController@Create')->name('Admin/Testimonial/Add');

Route::post('Admin/Testimonial/Store','Admin\TestimonialController@Store')->name('Admin/Testimonial/Store');

Route::get('Admin/Testimonial/Store','Admin\TestimonialController@Return')->name('Admin/Testimonial/Store');

Route::post('Admin/Testimonial/EditSession','Admin\TestimonialController@EditSession')->name('Admin/Testimonial/EditSession');

Route::get('Admin/Testimonial/EditSession','Admin\TestimonialController@Return')->name('Admin/Testimonial/EditSession');

Route::get('Admin/Testimonial/Edit','Admin\TestimonialController@Edit')->name('Admin/Testimonial/Edit');

Route::post('Admin/Testimonial/Update','Admin\TestimonialController@Update')->name('Admin/Testimonial/Update');

Route::post('Admin/Testimonial/Delete','Admin\TestimonialController@Delete')->name('Admin/Testimonial/Delete');

Route::get('Admin/Testimonial/Update','Admin\TestimonialController@Return')->name('Admin/Testimonial/Update');

Route::get('Admin/Testimonial/Delete','Admin\TestimonialController@Return')->name('Admin/Testimonial/Delete');
//Testimonial section//


//Contact section//
Route::get('Admin/Contact','Admin\ContactController@Index')->name('Admin/Contact');

Route::get('Admin/Contact/Add','Admin\ContactController@Create')->name('Admin/Contact/Add');

Route::post('Admin/Contact/Store','Admin\ContactController@Store')->name('Admin/Contact/Store');

Route::get('Admin/Contact/Store','Admin\ContactController@Return')->name('Admin/Contact/Store');

Route::get('Admin/Contact/AllDetails','Admin\ContactController@AllDetails')->name('Admin/Contact/AllDetails');

Route::post('Admin/Contact/EditSession','Admin\ContactController@EditSession')->name('Admin/Contact/EditSession');

Route::get('Admin/Contact/EditSession','Admin\ContactController@Return')->name('Admin/Contact/EditSession');

Route::get('Admin/Contact/Edit','Admin\ContactController@Edit')->name('Admin/Contact/Edit');

Route::post('Admin/Contact/Update','Admin\ContactController@Update')->name('Admin/Contact/Update');

Route::post('Admin/Contact/Delete','Admin\ContactController@Delete')->name('Admin/Contact/Delete');

Route::get('Admin/Contact/Update','Admin\ContactController@Return')->name('Admin/Contact/Update');

Route::get('Admin/Contact/Delete','Admin\ContactController@Return')->name('Admin/Contact/Delete');
//Contact section//


//EnquiryForm section//
Route::get('Admin/EnquiryForm','Admin\EnquiryFormController@Index')->name('Admin/EnquiryForm');

Route::get('Admin/EnquiryForm/Add','Admin\EnquiryFormController@Create')->name('Admin/EnquiryForm/Add');

Route::post('Admin/EnquiryForm/Store','Admin\EnquiryFormController@Store')->name('Admin/EnquiryForm/Store');

Route::get('Admin/EnquiryForm/Store','Admin\EnquiryFormController@Return')->name('Admin/EnquiryForm/Store');

Route::post('Admin/EnquiryForm/EditSession','Admin\EnquiryFormController@EditSession')->name('Admin/EnquiryForm/EditSession');

Route::get('Admin/EnquiryForm/EditSession','Admin\EnquiryFormController@Return')->name('Admin/EnquiryForm/EditSession');

Route::get('Admin/EnquiryForm/AllDetails','Admin\EnquiryFormController@AllDetails')->name('Admin/EnquiryForm/AllDetails');

Route::post('Admin/EnquiryForm/Update','Admin\EnquiryFormController@Update')->name('Admin/EnquiryForm/Update');

Route::post('Admin/EnquiryForm/Delete','Admin\EnquiryFormController@Delete')->name('Admin/EnquiryForm/Delete');

Route::get('Admin/EnquiryForm/Update','Admin\EnquiryFormController@Return')->name('Admin/EnquiryForm/Update');

Route::get('Admin/EnquiryForm/Delete','Admin\EnquiryFormController@Return')->name('Admin/EnquiryForm/Delete');
//EnquiryForm section//


//Image section//
Route::get('Admin/Image','Admin\ImageController@Index')->name('Admin/Image');

Route::get('Admin/Image/Add','Admin\ImageController@Create')->name('Admin/Image/Add');

Route::post('Admin/Image/Store','Admin\ImageController@Store')->name('Admin/Image/Store');

Route::get('Admin/Image/Store','Admin\ImageController@Return')->name('Admin/Image/Store');

Route::post('Admin/Image/EditSession','Admin\ImageController@EditSession')->name('Admin/Image/EditSession');

Route::get('Admin/Image/EditSession','Admin\ImageController@Return')->name('Admin/Image/EditSession');

Route::get('Admin/Image/Edit','Admin\ImageController@Edit')->name('Admin/Image/Edit');

Route::post('Admin/Image/Update','Admin\ImageController@Update')->name('Admin/Image/Update');

Route::post('Admin/Image/Delete','Admin\ImageController@Delete')->name('Admin/Image/Delete');

Route::get('Admin/Image/Update','Admin\ImageController@Return')->name('Admin/Image/Update');

Route::get('Admin/Image/Delete','Admin\ImageController@Return')->name('Admin/Image/Delete');
//Image section//


//Video section//
Route::get('Admin/Video','Admin\VideoController@Index')->name('Admin/Video');

Route::get('Admin/Video/Add','Admin\VideoController@Create')->name('Admin/Video/Add');

Route::post('Admin/Video/Store','Admin\VideoController@Store')->name('Admin/Video/Store');

Route::get('Admin/Video/Store','Admin\VideoController@Return')->name('Admin/Video/Store');

Route::post('Admin/Video/EditSession','Admin\VideoController@EditSession')->name('Admin/Video/EditSession');

Route::get('Admin/Video/EditSession','Admin\VideoController@Return')->name('Admin/Video/EditSession');

Route::get('Admin/Video/Edit','Admin\VideoController@Edit')->name('Admin/Video/Edit');

Route::post('Admin/Video/Update','Admin\VideoController@Update')->name('Admin/Video/Update');

Route::post('Admin/Video/Delete','Admin\VideoController@Delete')->name('Admin/Video/Delete');

Route::get('Admin/Video/Update','Admin\VideoController@Return')->name('Admin/Video/Update');

Route::get('Admin/Video/Delete','Admin\VideoController@Return')->name('Admin/Video/Delete');
//Video section//


//Testimonial section//
Route::get('Admin/Testimonial','Admin\TestimonialController@Index')->name('Admin/Testimonial');

Route::get('Admin/Testimonial/Add','Admin\TestimonialController@Create')->name('Admin/Testimonial/Add');

Route::post('Admin/Testimonial/Store','Admin\TestimonialController@Store')->name('Admin/Testimonial/Store');

Route::get('Admin/Testimonial/Store','Admin\TestimonialController@Return')->name('Admin/Testimonial/Store');

Route::post('Admin/Testimonial/EditSession','Admin\TestimonialController@EditSession')->name('Admin/Testimonial/EditSession');

Route::get('Admin/Testimonial/EditSession','Admin\TestimonialController@Return')->name('Admin/Testimonial/EditSession');

Route::get('Admin/Testimonial/Edit','Admin\TestimonialController@Edit')->name('Admin/Testimonial/Edit');

Route::post('Admin/Testimonial/Update','Admin\TestimonialController@Update')->name('Admin/Testimonial/Update');

Route::post('Admin/Testimonial/Delete','Admin\TestimonialController@Delete')->name('Admin/Testimonial/Delete');

Route::get('Admin/Testimonial/Update','Admin\TestimonialController@Return')->name('Admin/Testimonial/Update');

Route::get('Admin/Testimonial/Delete','Admin\TestimonialController@Return')->name('Admin/Testimonial/Delete');
//Testimonial section//


//Product section//
Route::get('Admin/Product','Admin\ProductController@Index')->name('Admin/Product');

Route::get('Admin/Product/Add','Admin\ProductController@Create')->name('Admin/Product/Add');

Route::post('Admin/Product/Store','Admin\ProductController@Store')->name('Admin/Product/Store');

Route::get('Admin/Product/Store','Admin\ProductController@Return')->name('Admin/Product/Store');

Route::post('Admin/Product/EditSession','Admin\ProductController@EditSession')->name('Admin/Product/EditSession');

Route::get('Admin/Product/EditSession','Admin\ProductController@Return')->name('Admin/Product/EditSession');

Route::get('Admin/Product/Edit','Admin\ProductController@Edit')->name('Admin/Product/Edit');

Route::post('Admin/MasterCategory/Product/MCChange','Admin\ProductController@MasterCategoryChange')->name('Admin/MasterCategory/Product/MCChange');

Route::post('Admin/MasterCategory/Product/MSCChange','Admin\ProductController@MasterCategorySubChange')->name('Admin/MasterCategory/Product/MSCChange');

Route::post('Admin/Product/Update','Admin\ProductController@Update')->name('Admin/Product/Update');

Route::post('Admin/Product/Delete','Admin\ProductController@Delete')->name('Admin/Product/Delete');

Route::get('Admin/Product/Update','Admin\ProductController@Return')->name('Admin/Product/Update');

Route::get('Admin/Product/Delete','Admin\ProductController@Return')->name('Admin/Product/Delete');
//Product section//


//MasterCategory section//
Route::get('Admin/MasterCategory','Admin\MasterCategoryController@Index')->name('Admin/MasterCategory');

Route::get('Admin/MasterCategory/Add','Admin\MasterCategoryController@Create')->name('Admin/MasterCategory/Add');

Route::post('Admin/MasterCategory/Store','Admin\MasterCategoryController@Store')->name('Admin/MasterCategory/Store');

Route::get('Admin/MasterCategory/Store','Admin\MasterCategoryController@Return')->name('Admin/MasterCategory/Store');

Route::post('Admin/MasterCategory/EditSession','Admin\MasterCategoryController@EditSession')->name('Admin/MasterCategory/EditSession');

Route::get('Admin/MasterCategory/EditSession','Admin\MasterCategoryController@Return')->name('Admin/MasterCategory/EditSession');

Route::get('Admin/MasterCategory/Edit','Admin\MasterCategoryController@Edit')->name('Admin/MasterCategory/Edit');

Route::post('Admin/MasterCategory/Update','Admin\MasterCategoryController@Update')->name('Admin/MasterCategory/Update');

Route::post('Admin/MasterCategory/Delete','Admin\MasterCategoryController@Delete')->name('Admin/MasterCategory/Delete');

Route::get('Admin/MasterCategory/Update','Admin\MasterCategoryController@Return')->name('Admin/MasterCategory/Update');

Route::get('Admin/MasterCategory/Delete','Admin\MasterCategoryController@Return')->name('Admin/MasterCategory/Delete');
//MasterCategory section//


//MasterSubCategory section//
Route::get('Admin/MasterSubCategory','Admin\MasterSubCategoryController@Index')->name('Admin/MasterSubCategory');

Route::get('Admin/MasterSubCategory/Add','Admin\MasterSubCategoryController@Create')->name('Admin/MasterSubCategory/Add');

Route::post('Admin/MasterSubCategory/Store','Admin\MasterSubCategoryController@Store')->name('Admin/MasterSubCategory/Store');

Route::get('Admin/MasterSubCategory/Store','Admin\MasterSubCategoryController@Return')->name('Admin/MasterSubCategory/Store');

Route::post('Admin/MasterSubCategory/EditSession','Admin\MasterSubCategoryController@EditSession')->name('Admin/MasterSubCategory/EditSession');

Route::get('Admin/MasterSubCategory/EditSession','Admin\MasterSubCategoryController@Return')->name('Admin/MasterSubCategory/EditSession');

Route::get('Admin/MasterSubCategory/Edit','Admin\MasterSubCategoryController@Edit')->name('Admin/MasterSubCategory/Edit');

Route::post('Admin/MasterSubCategory/Update','Admin\MasterSubCategoryController@Update')->name('Admin/MasterSubCategory/Update');

Route::post('Admin/MasterSubCategory/Delete','Admin\MasterSubCategoryController@Delete')->name('Admin/MasterSubCategory/Delete');

Route::get('Admin/MasterSubCategory/Update','Admin\MasterSubCategoryController@Return')->name('Admin/MasterSubCategory/Update');

Route::get('Admin/MasterSubCategory/Delete','Admin\MasterSubCategoryController@Return')->name('Admin/MasterSubCategory/Delete');
//MasterSubCategory section//


//SubCategory section//
Route::get('Admin/SubCategory','Admin\SubCategoryController@Index')->name('Admin/SubCategory');

Route::get('Admin/SubCategory/Add','Admin\SubCategoryController@Create')->name('Admin/SubCategory/Add');

Route::post('Admin/SubCategory/Store','Admin\SubCategoryController@Store')->name('Admin/SubCategory/Store');

Route::get('Admin/SubCategory/Store','Admin\SubCategoryController@Return')->name('Admin/SubCategory/Store');

Route::post('Admin/SubCategory/EditSession','Admin\SubCategoryController@EditSession')->name('Admin/SubCategory/EditSession');

Route::post('Admin/SubCategory/Change','Admin\SubCategoryController@Change')->name('Admin/SubCategory/Change');

Route::get('Admin/SubCategory/EditSession','Admin\SubCategoryController@Return')->name('Admin/SubCategory/EditSession');

Route::get('Admin/SubCategory/Edit','Admin\SubCategoryController@Edit')->name('Admin/SubCategory/Edit');

Route::post('Admin/SubCategory/Update','Admin\SubCategoryController@Update')->name('Admin/SubCategory/Update');

Route::post('Admin/SubCategory/Delete','Admin\SubCategoryController@Delete')->name('Admin/SubCategory/Delete');

Route::get('Admin/SubCategory/Update','Admin\SubCategoryController@Return')->name('Admin/SubCategory/Update');

Route::get('Admin/SubCategory/Delete','Admin\SubCategoryController@Return')->name('Admin/SubCategory/Delete');
//SubCategory section//
});

Auth::routes();

Route::get('/home', 'Admin\DashboardController@Index')->name('home');
