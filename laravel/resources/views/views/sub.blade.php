@extends('views.master')
@section('noidung')
Đây là trang sub
<br/>

@for ($i=0; $i <10 ; $i = $i + 1)
	Số thứ tư: {{ $i }} <br/>

@endfor
<hr/>

<?php $i=0 ?>
@while ( $i <= 10) 
	Số thứ tự: {{ $i }} <br/>
	<?php $i++ ?>

@endwhile
<hr/>

<?php 
$array = ["laravel","yii","symfony2","codeIgniter"]; ?>
@foreach ($array as $item) 
	{{ $item }}, 

@endforeach
@stop