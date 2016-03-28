{!! Form::open(array('route'=>'sendEmail','files'=>true)) !!}
{!! Form::label('hoten','Họ Tên') !!}
{!! Form::text('txthoten','',array('class'=>'input')) !!}<br/><br/>

{!! Form::label('matkhau','Mật khẩu') !!}
{!! Form::password('txtmatkhau','',array('class'=>'input')) !!}<br/><br/>

{!! Form::label('email','Email') !!}
{!! Form::Email('txtEmail','',array('class'=>'input')) !!}<br/><br/>

{!! Form::label('gioitinh','Giới Tính') !!}
{!! Form::radio('rdGioiTinh','nam',true)!!} Nam
{!! Form::radio('rdGioiTinh','nu') !!} Nữ <br/><br/>

{!! Form::label('sltThanhPho','Thành Phố') !!}
{!! Form::select('txtGhiChu',array(
									'hn'=>'Hà Nội',
									'h'=>'Huế',
									'hcm'=>'Hồ Chí Minh'),'hcm') !!} <br/><br/>

{!! Form::label('monhoc','Môn Học') !!}
{!! Form::checkbox('chkMonHoc','swift') !!} Swift
{!! Form::checkbox('chkMonHoc','php') !!} PHP & MySQL
{!! Form::checkbox('chkMonHoc','android') !!} Android <br/><br/>

{!! Form::hidden('website','google.com') !!}

{!! Form::label('hinh','Avata') !!}
{!! Form::file('fImages') !!}

{!! Form::submit('Gửi') !!}
{!! Form::button('OK') !!}
{!! Form::reset('Xóa') !!}
{!! Form::close() !!}
