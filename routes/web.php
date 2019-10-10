<?php

Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::patch('/posts/{post}','PostsController@update');
Route::delete('/posts/{post}','PostsController@destroy');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::delete('/posts/{post}/comments/{comment}','CommentsController@destroy');
