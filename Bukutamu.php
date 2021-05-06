<!DOCTYPE html>
<html>
<head>
<title>BUKU TAMU</title>
</head>
<body>
<form action="simpan.php" method="get">
<table width="75%" border="0" align="center" bgcolor="#FFFFCC">
<tr bgcolor="99CCFF">
<td colspan="3"><div align="center"><strong>BUKU TAMU</strong></div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="25%"><div align="right">Nama</div></td>
<td width="2%">:</td>
<td width="73%"><input type="TEXT" name="nama" size="30"></td>
</tr>
<tr>
<td height="40" valign="top"><div align="right">Jenis Kelamin</div></td>
<td valign="top">:</td>
<td> <input type="RADIO" value="P" checked name="sex"> Wanita <br>
<input type="RADIO" value="L" name="sex"> Laki-Laki</td>
</tr>
<tr>
<td height="21"><div align="right">E-mail</div></td>
<td>:</td>
<td><input type="TEXT" name="email" size="30"></td>
</tr>
<tr>
<td height="78" valign="top"><div align="right">Minat</div></td>
<td valign="top">:</td>
<td><INPUT TYPE=CHECKBOX NAME=minat1>Bonsai<br>
	<INPUT TYPE=CHECKBOX NAME=minat2>Tanaman Hias<br>
	<INPUT TYPE=CHECKBOX NAME=minat3>Musik Jazz<br>
	<INPUT TYPE=CHECKBOX NAME=minat4>Pemograman</td>
</tr>
<tr>
<td height="21" valign="top"><div align="right">Komentar</div></td>	
<td valign="top">:</td>
<td><TEXTAREA  ROWS = "4"COLS="40" NAME="komentar"></TEXTAREA></td>
</tr>
<tr>
<td height="21" colspan="3" valign="top"><div align="center"><input type="SUBMIT" value ="Simpan"></div></td>	
</tr>
<tr bgcolor="#99CCFF">
<td height="21" colspan="3" valign="top">&nbsp;</td></tr>
</table>
<P>
</form>
</body>
</html>