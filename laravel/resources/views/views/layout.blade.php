@extends('views.master')
@section('title','laravel')
@section('sidebar')

	@parent
	laravel
@stop
@section('noidung')
	Đây là trang layout
	<br/>
	<br/>
	<?php $hoten = "training";?>

	{!! $hoten !!}

<?php $diem = 5; ?>
@if ($diem <=5 ) {
	Trung bình
}
@elseif ($diem >= 5) {
	khá giỏi
}
@endif

{{ isset($diem) ? $diem: 'không tồn tại'}}
<hr/>
{{ $diemm or 'không tồn tại điểm' }}
@stop
