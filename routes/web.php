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

Route::get('/condidat/inscription','inscriconController@welcome')->name('inscri');
Route::post('/inscription1','inscriconController@store')->name('inscri1');
Route::get('/entreprise/inscription','inscrientrepriseController@welcome')->name('inscri2');
Route::post('/inscription3','inscrientrepriseController@store')->name('inscri3');
Route::get('/connexion','homeController@login')->name('login');
Route::get('/offre/depo','offreControler@depo')->name('offre')->middleware('auth:entreprise');
Route::post('/offre1','offreControler@store')->name('offre1')->middleware('auth:entreprise');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/condidat/profile','profileController@profile')->name('profile');
Route::get('/entreprise/profile','enprofileController@profile')->name('eprofile');
Route::post('/profile2','enprofileController@update')->name('profile2');
Route::post('/profile1','profileController@update')->name('profile1');
Route::post('/upload_image','profileController@upload_image')->name('upload_image');
Route::post('/upload_image1','enprofileController@upload_image')->name('upload_image1');
Route::post('/changepass','profileController@changepass')->name('changepass');
Route::post('/changepass1','enprofileController@changepass')->name('changepass1');
Route::post('/upload_cv','profileController@upload_cv')->name('upload_cv');
Route::post('/tags','profileController@tags')->name('tags');

Route::get('/login/condidat', 'Auth\LoginController@showCondidatLoginForm')->name('log1');
Route::get('/login/entreprise', 'Auth\LoginController@showEntrepriseLoginForm')->name('log2');

Route::post('/login/condidat', 'Auth\LoginController@condidatLogin');
Route::post('/login/entreprise', 'Auth\LoginController@entrepriseLogin');

Route::get('offre/{id}', 'offreControler@offre_details')->name('offre_details');
Route::get('offre', 'offreControler@search_offre')->name('toutoffre');
Route::get('search_offre', 'offreControler@search_offre')->name('search_offre');
Route::get('search_condidat', 'offreControler@search_condidat')->name('search_condidat');

Route::get('presentation/entreprise/{id}', 'inscrientrepriseController@descentreprise')->name('desc1');
Route::get('entreprises', 'inscrientrepriseController@allentreprise')->name('desc');

Route::get('cvtheque/condidat/{id}', 'CvthequeController@desccondidat')->name('cvteque1');
Route::get('cvtheque', 'CvthequeController@search_condidat')->name('cvteque');

Route::get('postuler/{id_offre}', 'offreControler@postuler')->name('postuler');
Route::get('dispostuler/{id}', 'offreControler@despostuler')->name('dispostuler');

Route::get('mesoffres', 'offreControler@mesoffres')->name('mesoffres');
Route::get('mesoffres/entreprise', 'offreControler@mesoffresentreprise')->name('mesoffres1');

Route::get('condidat/postuler/{id_offre}', 'CvthequeController@condidatpostuler')->name('condidatpostuler');
Route::get('condidat/deposercv', 'CvthequeController@condidatdeposer')->name('deposercv')->middleware('auth:condidat');
Route::post('/deposer','CvthequeController@deposer')->name('deposer');
Route::post('/upload_cv1','CvthequeController@upload_cv1')->name('upload_cv1');
Route::get('/guide/depo/cv','CvthequeController@guide')->name('guide');

/*Route::group(){
    route::get('acceuil','AdminController@upload_cv1')
}*/


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('acceuil', 'AdminController@index')->name('index')->middleware('auth');
    Route::get('entreprises/{id}', 'AdminController@formentreprise')->name('entreprise')->middleware('auth');
    Route::post('statut/{id}', 'Admincontroller@statut')->name('statut');

});





