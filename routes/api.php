<?php

Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/question/{question}/reply', 'ReplyController');

Route::post('/{reply}/like', 'LikeController@likeIt');
Route::delete('/{reply}/like', 'LikeController@unlikeIt');

Route::group([

  'middleware' => 'api',
  'prefix' => 'auth'

], function ($router) {

  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('signup', 'AuthController@signup');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');
});
