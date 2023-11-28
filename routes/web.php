<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::resource('Products', ProductController::class);
/*
  products.index
  - url；Products
  - http_method：GET|HEAD
  - conn_controller_method：ProductController@index

  products.show
  - url；Products/{Product}
  - http_method：GET|HEAD
  - conn_controller_method：ProductController@show

  products.create
  - url；Products/create
  - http_method：GET|HEAD
  - conn_controller_method：ProductController@create

  products.store
  - url；Products
  - http_method：POST
  - conn_controller_method：ProductController@store

  products.edit
  - url；Products/{Product}/edit
  - http_method：GET|HEAD
  - conn_controller_method：ProductController@edit

  products.update
  - url；Products/{Product}
  - http_method：PUT|PATCH
  - conn_controller_method：ProductController@update

  products.destroy
  - url；Products/{Product}
  - http_method：DELETE
  - conn_controller_method：ProductController@destroy

 */
