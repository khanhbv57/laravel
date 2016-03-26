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
Route::get('goi-master',function(){
	return view('views.sub');
});
Route::get('schema/create',function(){
	Schema::create('user',function($table){

		$table->increments('id');
		$table->string('hoten');
		$table->integer('tuoi');
		$table->text('ghichu')->nullable;
	});
});
Route::get('schema/rename',function(){
	Schema::rename('user','tb_user');
});
Route::get('schema/drop',function(){
	Schema::drop('user');
});
Route::get('schema/drop-exists',function(){
	Schema::dropIfExists('user');
});
Route::get('schema/change',function(){
	Schema::table('user',function($table){
		$table->string('hoten',50)->change();
	});
});
Route::get('schema/drop-col',function(){
	Schema::table('user',function($table){
		$table->dropColumn('ghichu');
	});
});
Route::get('schema/create/cate',function(){
	Schema::create('category',function($table){
		$table->increments('id');
		$table->string('name');
		$table->timestamps();
	});
});
Route::get('schema/create/product',function(){
	Schema::create('product',function($table){
		$table->increments('id');
		$table->string('name');
		$table->integer('price');
		$table->integer('cate_id')->unsigned();
		$table->foreign('cate_id')->references('id')->on('category');
		$table->timestamps();
	});
});
Route::get('query/select-all',function(){
	$data = DB::table('user')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/select-column',function(){
	$data = DB::table('user')->select('hoten')->where('tuoi',20)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/order',function(){
	$data = DB::table('product')->orderBy('id','DESC')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/limit',function(){
	$data = DB::table('product')->skip(2)->take(2)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/between',function(){
	$data = DB::table('product')->whereBetween('id',[1,2])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where-in',function(){
	$data = DB::table('product')->whereIn('id',[2,4])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where-not-in',function(){
	$data = DB::table('product')->whereNotIn('id',[2,4])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/count',function(){
	$data = DB::table('user')->count();
	echo $data;
});
Route::get('query/max',function(){
	$data = DB::table('user')->max('tuoi');
	echo $data;
});
Route::get('model/select-all',function(){
	$data = App\Product::all()->toArray();
	echo "<pre>";
	print_r($data);
	echo "</pre>";

});
Route::get('model/select-id',function(){
	$data = App\Product::findOrFail(2)->tojSon();
	echo "<pre>";
	print_r($data);
	echo "</pre>";

});
Route::get('model/where',function(){
	$data = App\Product::where('price',500000)->get()->toArray();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('form/layout',function(){
	return view('form.layout');
});