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

//Route::get('/w', function () {
//    return view('admin.welcome');
//});
Route::get('/',[
	'uses' => 'my_blogController@indexx',
	'as' => 'i'
]);

Route::get('/products/(id)',[
'uses' =>'my_blogController@products',
'as'  => 'category-product'

]);

Route::get('/product_details/(id)',[
    'uses' =>'my_blogController@details',
    'as'  => 'product_details'

]);
Route::get('/edit-product/(id)',[
    'uses' =>'my_blogController@editProducts',
    'as'  => 'edit-product'

]);

Route::get('/registers',[
'uses' =>'my_blogController@register',
'as' => 're'

]);

Route::post('/save',[
    'uses' =>'my_blogController@saveInfo',
    'as' => 'sr'
]);


Route::post('/edit/(id)',[
    'uses' =>'my_blogController@editInfo',
    'as' => 'editCategory'
]);



Route::post('/update',[
    'uses' =>'my_blogController@updateInfo',
    'as' => 'up'
]);

Route::post('/delete/(id)',[
    'uses' =>'my_blogController@deleteInfo',
    'as' => 'deleteCategory'
]);




//Route::post('/unpulished/(id)',[
   // 'uses' =>'my_blogController@saveInfo',
   // 'as' => 'sr'
//]);



Route::post('/manage',[
    'uses' =>'my_blogController@manageInfo',
    'as' => 'ma'
]);


Route::get('/signin',[
'uses' =>'my_blogController@logs',
'as' => 'lo'

]);


Route::post('/brand/add',[
    'uses' =>'my_blogController@Brandadd',
    'as' => 'add-brand'

]);


Route::post('/brand/save',[
    'uses' =>'my_blogController@BrandReq',
    'as' => 'new-brand'

]);


Route::get('/product',[
    'uses' => 'productController@index',
    'as ' =>'indx'
]);
Route::get('/product/add',[
    'uses' => 'productController@added',
    'as ' =>'ap'
]);
Route::get('/product/manage',[
    'uses' => 'productController@manages',
    'as ' =>'mp'
]);

Route::get('/product/save',[
    'uses' => 'productController@saveProduct',
    'as ' =>'new-product'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
