<style type="text/css">
	table{
		border-collapse: collapse;
	}
</style>
<form>
	<table >
		<tr>
	        <th colspan="2">Cập nhật thông tin nhân viên</th>
	        <th>Mã SP</th>
	        <th>Tên SP</th>
	        <th>Số lượng</th>
	        <th>Màu sắc</th>
        </tr>
        <tr>
        	<td>Mã SP </td>
        	<td><input  name="MaSP" readonly="true" value=" <?php echo $id; ?>"></td>               
        
        	<td>Tên SP</td>
        	<td><input type="text" name="TenSP"></td>
			<td>Tên SP</td>
			<td><input type="text" name="TenSP"></td>
        	<!-- 
        <tr><td>Số lượng</td><td><input type="text" name="SoLuong"></td>
        <tr><td>Màu sắc</td><td><input type="text" name="MauSac"></td></tr>
        <tr><td>Hình ảnh</td><td><input type="text" name="HinhAnh"></td></tr>
        <tr><td>Giá tiền</td><td><input type="text" name="GiaTien"></td></tr>
        <tr><td>Mô tả</td><td><input type="text" name="MoTa"></td> -->
        </tr>
    </table>
    <button type="submit" name="sua"></button>
</form>