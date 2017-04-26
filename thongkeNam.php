<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="ThongKe/thongkeProcessNam.php">
	<table>
    	<tr>
        	<td>Từ ngày:</td>
            <td><input type="text" name="ngayBd" /></td>
        </tr>
        <tr>
        	<td>Đến ngày:</td>
            <td><input type="text" name="ngayKt" /></td>
        </tr>
    </table>
    <input type="submit" value="Thống kê" name="thongke" />
</form>
</body>
</html>