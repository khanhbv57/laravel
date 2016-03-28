<form action = "{!! route('postDangky') !!}" method = "POST" name = "frmThem">






	<table>
		<tr>
			<td>Môn học</td>
			<td><input type="text" name="txtMonhoc" /></td>
		</tr>
		<tr>
			<td>Giá tiền</td>
			<td><input type="text" name="txtGiaTien" /></td>
		</tr>
		<tr>
		<td>Giảng viên</td>
		<td><input type="text" name="txtGiangVien"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnGui" value="Thêm" /></td>
		</tr>
	</table>
</form>