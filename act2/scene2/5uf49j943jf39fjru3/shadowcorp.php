/* Copyright 2013, Greg Foss
*
*This program is distributed under the terms of the GNU Affero General Public
*License */

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shadow Corp.</title>
<link rel="stylesheet" type="text/css" href="style/5tyl3.css" />
<link rel="icon" type="image/ico" href="favicon.ico" />
<!--[if IE]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<br />
<div style="margin:auto;width:1024px" class="main">

<center><a href="shadowcorp.php">
<h1 style="font-size:60px">Shadow Corp</h1>
</a></center>

<div style="margin:auto;width:900px" class="body">
<fieldset>
<center><h2>Login</h2></center>
<form method="POST" action="auth/login.php">
	<table border="0" style="margin:auto;width:20%">
	<tr><td align="center" valign="top">
	Username:
	</td><td align="left" valign="top">
	<input type="text" name="username" class="textbox" />
	</td></tr>
	<tr><td align="center">
	Password:
	</td><td align="left" valign="top">
	<input type="password" name="password" class="textbox" />
	</td></tr>
	<tr><td></td><td align="right" valign="top">
	<input type="submit" value="Submit" class="button" />
	</td></tr>
	</table>
</form>
</fieldset>
</div>
<br /><br />
</div>
<table class="footer" style="margin:auto;width:1024px"><tr><td align="left" width="15%">
<strong>&copy; Shadow Corp 2013</strong>
</td><td align="center"  width="70%">
<marquee><?php echo base64_encode("%u0047%u0059%u0077%u0039%u004f%u0054%u0059%u0034%u004d%u006a%u006b%u0030%u004f%u0044%u004a%u006a%u004d%u006d%u0052%u006b%u0059%u0032%u004a%u0068%u004f%u0057%u0046%u006d%u004e%u007a%u004d%u0031%u004d%u007a%u0051%u0032%u0059%u0057%u0056%u006a%u004d%u007a%u004a%u006b%u004e%u0057%u0049%u003d"); ?></marquee>
</td><td align="right"  width="15%">
<strong><?php echo date("m-d-Y");?></strong>
</td></tr></table>
</body>
</html>
