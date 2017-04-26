<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="Calendar.js">
</script>
<link href="Calendar.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" action="searchProcess.php" id="Form1" name="Form1">	
	<table>
		<tr>
			<td>Ngày:</td>
			<td>
				<input name="txtDate" type="text" id="txtDate" />
  				<input type="button" name="Button" value="Date" onclick="showCalendar('txtDate')">							  			</td>
		</tr>
    </table>
    <tr><input type="radio" name="a" value="Thu" />Thu<input type="radio" name="a" value="chi" />			 		Chi
    </tr>
    <br />
   	<input type="submit" value="Tìm" name="tim" />
</form>

</body>
</html>
