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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(["middleware"=>['auth']],function (){
    Route::get('/kt_admin/dashboard','dashboardcontroller@index' );
/***********************************************************
 * ***************** Slider ******************************
 ************************************************************/
Route::get('/kt_admin/slider','slidercontroller@index') ;
Route::post('/kt_admin/add_slider','slidercontroller@add') ;
Route::post('/kt_admin/up_slider/{id}','slidercontroller@update') ;
Route::get('/kt_admin/del_slider/{id}','slidercontroller@delete') ;
/***********************************************************
 * ***************** End Slider ******************************
 ************************************************************/

    /***********************************************************
     * ***************** gallery ******************************
     ************************************************************/
    Route::get('/kt_admin/gallery','gallerycontroller@index') ;
    Route::post('/kt_admin/add_gallery','gallerycontroller@add') ;
    Route::post('/kt_admin/up_gallery/{id}','gallerycontroller@update') ;
    Route::get('/kt_admin/del_gallery/{id}','gallerycontroller@delete') ;
    /***********************************************************
     * ***************** End gallery ******************************
     ************************************************************/




/***********************************************************
 * ***************** Team ******************************
 ************************************************************/
Route::get('/kt_admin/team','teamcontroller@index') ;
Route::post('/kt_admin/add_team','teamcontroller@add') ;
Route::post('/kt_admin/up_team/{id}','teamcontroller@update') ;
Route::get('/kt_admin/del_team/{id}','teamcontroller@delete') ;
/***********************************************************
 * ***************** End Team ******************************
 ************************************************************/



    /***********************************************************
     * ***************** Testimonial ******************************
     ************************************************************/
    Route::get('/kt_admin/test','testimonialcontroller@index') ;
    Route::post('/kt_admin/add_test','testimonialcontroller@add') ;
    Route::post('/kt_admin/up_test/{id}','testimonialcontroller@update') ;
    Route::get('/kt_admin/del_test/{id}','testimonialcontroller@delete') ;
    /***********************************************************
     * ***************** End Testimonial ******************************
     ************************************************************/
/***********************************************************
 * ***************** About ******************************
 ************************************************************/
Route::get('/kt_admin/about','aboutcontroller@index') ;
Route::post('/kt_admin/up_about/{id}','aboutcontroller@update') ;
Route::get('/kt_admin/edit_about/{id}','aboutcontroller@edit') ;

/***********************************************************
 * ***************** End About ******************************
 ************************************************************/







 /***********************************************************
 * ***************** Service  ******************************
 ************************************************************/
Route::get('/kt_admin/serve','servicecontroller@index');
Route::get('/kt_admin/e_serve/{id}','servicecontroller@edit');
Route::get('/kt_admin/c_serve','servicecontroller@create');
Route::post('/kt_admin/up_serve/{id}','servicecontroller@update');
Route::get('/kt_admin/del_serve/{id}','servicecontroller@delete');
Route::post('/kt_admin/add_serve','servicecontroller@add');

 /***********************************************************
  ****************** End Service ***************************
 ***********************************************************/

    /***********************************************************
     * ***************** Type_Sponsor  ******************************
     ************************************************************/
    Route::get('/kt_admin/type','type_sponsorcontroller@index');
    Route::post('/kt_admin/up_type/{id}','type_sponsorcontroller@update');

    /***********************************************************
     ****************** End Type_Sponsor ***************************
     ***********************************************************/

    /***********************************************************
     * ***************** Sponsor  ******************************
     ************************************************************/
    Route::get('/kt_admin/sponsor','sponsorcontroller@index');
    Route::post('/kt_admin/up_sponsor/{id}','sponsorcontroller@update');
    Route::get('/kt_admin/del_sponsor/{id}','sponsorcontroller@delete');
    Route::post('/kt_admin/add_sponsor','sponsorcontroller@add');
    /***********************************************************
     ****************** End Sponsor ***************************
     ***********************************************************/

    /***********************************************************
     * ***************** Client  ******************************
     ************************************************************/
    Route::get('/kt_admin/client','clientcontroller@index');
    Route::post('/kt_admin/up_client/{id}','clientcontroller@update');
    Route::get('/kt_admin/del_client/{id}','clientcontroller@delete');
    Route::post('/kt_admin/add_client','clientcontroller@add');
    /***********************************************************
     ****************** End Client ***************************
     ***********************************************************/




    /***********************************************************
     * ***************** EVENT  ******************************
     ************************************************************/
    Route::get('/kt_admin/event','eventcontroller@index');
    Route::get('/kt_admin/event/{id}','eventcontroller@edit');
    Route::get('/kt_admin/c_event','eventcontroller@create');
    Route::post('/kt_admin/event/{id}','eventcontroller@update');
    Route::get('/kt_admin/del_event/{id}','eventcontroller@delete');
    Route::post('/kt_admin/event','eventcontroller@add');

    /***********************************************************
     ****************** End EVENT ***************************
     ***********************************************************/


/***********************************************************
 ****************** Contact  ******************************
 ************************************************************/
Route::get('/kt_admin/contact','contactcontroller@index');

Route::post('/kt_admin/up_contact/{id}','contactcontroller@update');

/***********************************************************
 * ***************** End Contact ******************************/


    Route::get('/logout',function (){
        auth()->logout();
        return view('auth.login');
    });
});

/***********************************************************
 * ***************** Website  ******************************
 ************************************************************/

Route::get('/','sitecontroller@index');
Route::get('/Our_Services','sitecontroller@our_services');
Route::get('/Service/{id}_{name}','sitecontroller@service');
Route::get('/Gallery','sitecontroller@gallery');
Route::get('/About','sitecontroller@about');
Route::get('/Contact','sitecontroller@contact');
Route::get('/Events','sitecontroller@event');

/***********************************************************
 ****************** End Website  **************************
 ************************************************************/



Auth::routes();


