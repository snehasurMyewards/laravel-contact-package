<?php

// Route::get('contact',function(){
// 	return view('contact::contact');
// })->name('contact');
// Route::post('contact',function(Request $request){
// 	return $request->all();
// });

Route::group(['namespace' => 'CodeCaptain\Contact\Http\Controllers'],function(){
	Route::get('contact','ContactController@index')->name('contact');
	Route::post('contact','ContactController@send');
});

