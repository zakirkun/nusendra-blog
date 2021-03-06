<?php
Route::resource('/','HomeController');
Route::view('/offline', 'frontend.page.offline');

Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap.xml/posts', 'SitemapController@posts');
Route::get('/sitemap.xml/categories', 'SitemapController@categories');

Route::view('/now','frontend.page.now')->name('now');
Route::view('/skills','frontend.page.skill')->name('skills');
Route::view('/portfolio','frontend.page.portfolio')->name('portfolio');
Route::view('/disclaimer','frontend.page.disclaimer')->name('disclaimer');
Route::view('/contact','frontend.page.contact')->name('contact');
Route::view('/terms-of-service','frontend.page.tos')->name('tos');

// mini portfolio
Route::view('/portfolio/vre-price-manager', 'frontend.page.portfolio.mini.priceManager');
Route::view('/portfolio/vre-gtalk-center-sender', 'frontend.page.portfolio.mini.gtalkCenterSender');
Route::view('/portfolio/vre-ddcounter', 'frontend.page.portfolio.mini.ddcounter');
Route::view('/portfolio/vre-ddcounter-operator', 'frontend.page.portfolio.mini.ddcounterOperator');
Route::view('/portfolio/vre-xmpp-client', 'frontend.page.portfolio.mini.xmppClient');

// main portfolio
Route::view('/portfolio/ahtefe-counter-reload', 'frontend.page.portfolio.main.ahtefeCounterReload');
Route::view('/portfolio/webmap-peruntukan-lahan-permukiman', 'frontend.page.portfolio.main.webmapPeruntukanLahanPermukiman');
Route::view('/portfolio/nusendra-blog', 'frontend.page.portfolio.main.nusendra');
Route::view('/portfolio/payroll-and-man-power', 'frontend.page.portfolio.main.payroll');
Route::view('/portfolio/bat-monitoring-project', 'frontend.page.portfolio.main.monitoring');
Route::view('/portfolio/e-pelaporan', 'frontend.page.portfolio.main.epelaporan');
Route::view('/portfolio/digigov', 'frontend.page.portfolio.main.digigov');

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
Route::feeds();
