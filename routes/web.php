<?php
Route::resource('/','HomeController');
Route::view('/offline', 'frontend.page.offline');

Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap.xml/posts', 'SitemapController@posts');
Route::get('/sitemap.xml/categories', 'SitemapController@categories');

Route::view('/now','frontend.page.now')->name('now');
Route::view('/skills','frontend.page.skill')->name('skills');
Route::view('/disclaimer','frontend.page.disclaimer')->name('disclaimer');
Route::view('/contact','frontend.page.contact')->name('contact');
Route::view('/terms-of-service','frontend.page.tos')->name('tos');

Route::get('/post/{slug}','PostController@show');
Route::get('/kategori/{kategori}','KategoriController@show');
Route::get('/get-popular-posts','HomeController@getPopularPosts');

Route::post('post-search','PostController@search');

Route::group(['middleware' => 'OnlyAjax'],function(){
  Route::resource('/backend-post','PostController');
  Route::resource('/backend-kategori','KategoriController');
});

Route::group(['middleware' => 'Authentication'], function(){
  Route::view('/backend','backend.index');
});


Auth::routes();
