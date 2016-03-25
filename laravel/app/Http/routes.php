<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});
Route::get('hoclaravel',function(){
	echo "hello world";
});
Route::get('test', function(){
	return "Lập trình laravel5";
});
Route::get('view','HomeController@showview');
Route::get('khoa-hoc/lap-trinh-php', function(){
	return "Khóa học lập trình PHP";
});
Route::get('laptrinh/{monhoc}/{nam}', function($monhoc,$nam){
	return "khóa học lập trình: $monhoc năm $nam";
});
Route::get('mon-hoc/{mon?}',function($mon = laravel){
	return $mon;
});
Route::get('thong-tin/{hoten}/{sdt}', function($hoten, $sdt){
	return "$hoten có Sdt: $sdt ";
})->where(['hoten'=>'[a-z A-Z]+','sdt' =>'[0-9]{0,10}']);
Route::get('news', function(){
	$hoten = "Khanhkaka";
	return view('view',compact('hoten'));
});
Route::get('cong-nghe-thong-tin',['as' =>'cntt',function(){
	return "chuyên ngành công nghệ thông tin";
}]);
Route::get('test','HomeController@show');

Route::group(['prefix'=>'nganh'], function(){
	Route::get('cong-nghe-thong-tin',function(){
		echo "Đây là ngành công nghệ thông tin";
	});
	Route::get('dien-tu-vien-thong',function(){
		echo "Đây là ngành điện tử viễn thông";
	});
	Route::get('he-thong-thong-tin',function(){
		echo "Đây là ngành hệ thống thông tin";
	});
	Route::get('khoa-hoc-may-tinh',function(){
		echo "Đây là ngành khoa học máy tính";
	});

});
Route::get('goi-view',function(){
	return view('layout.content');
});
Route::get('goi-layout',function(){
	return view('layout.sub.layout');
});
View::share('title','Lập trình laravel5.2');
View::composer('layout.sub.layout',function($temp){
	return $temp->with('thongtin','Đây là trang cá nhân');
});
Route::get('check-view',function(){
	if(view()->exists('layout.sub.layout')){
		return "tồn tại View";
	}else {

		return "không tồn tại view";
	}
});