
<?php 
/*
|--------------------------------------------------------------------------
| User  Module Routes
|--------------------------------------------------------------------------
|
| All the routes related to the User module have to go in here. Make sure
| to change the namespace in case you decide to change the 
| namespace/structure of controllers.
|
*/
Route::group(['prefix' => 'user', 'namespace' => 'App\Modules\User\Controllers'], function () {
    Route::get('/', ['as' => 'user.index', 'uses' => 'IndexController@index']);
    Route::get('model-test', ['as' => 'user.modelTest', 'uses' => 'IndexController@modelTest']);
});
