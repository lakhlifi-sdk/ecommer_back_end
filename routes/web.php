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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    
    Route::get('/home', 'Api\ProduitController@create_view')->name('home');

});

Auth::routes();

Route::post('create', 'Api\ProduitController@store');

Route::get('produit/create', 'Api\ProduitController@create_view');

/*APP_NAME="backend ecommerce"
APP_ENV=local
APP_KEY=base64:BqFogijUkRwE1l5a0mYgB+h5mVcFLc4sPgVKSuSLCTE=
APP_DEBUG=true
APP_URL=http://ecommercebackendd.herokuapp.com/

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=us-cdbr-east-02.cleardb.com
DB_PORT=3306
DB_DATABASE=heroku_f04b0d90713261d
DB_USERNAME=bd79603ee37cf6
DB_PASSWORD=17a3db6e

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

JWT_SECRET=eSqhuMk2GfZxhhWV38SqiK2FkO53CqIiLytgwouEhxjYckT0iLg18YjBWBfjIa3M
*/