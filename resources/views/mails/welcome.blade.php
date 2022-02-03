<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Te damos la bienvenida</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>


<body style="margin: 0; padding: 0;">
 
<table align="center" border="0"  cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #eaeaea; margin-bottom: 15px;">

<tr>

<td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0; background-image: url('https://globalteam.company/wp-content/uploads/2020/05/bg-1.jpg'); background-size: 100%; background-position: center; background-repeat: no-repeat;">
 	<img src="https://globalteam.company/backoffice/public/img/logo-global-06.png" alt="Creating Email Magic" width="250" height="250" style="display: block;" />
</td>

</tr>

<tr>

<td bgcolor="#ffffff" style="padding: 15px 30px">
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
		 
		 <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px; padding: 15px 0">
		 
		  	<b>¡{{$user->name}}, Bienvenido al futuro!</b>
		 
		 </td>
		 
		</tr>
		 
		<tr>
		 
		 <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 15px;">
		  	De parte de toda la comunida de Global Team, te damos una cálida bienvenida. <br /><br />
		  	A continuación hacemos entrega de tus credenciales de acceso a nuestra plataforma
		 </td>
		 
		</tr>

		<tr>
		 <td style="color: #153643; padding: 5px 0; font-family: Arial, sans-serif; font-size: 15px;">
		  	<b>URL DE INGRESO: </b><a href="https://backoffice.globalteam.company">https://backoffice.globalteam.company</a>
		 </td>
		</tr>

		<tr>	 
		 <td style="color: #153643; padding: 5px 0; font-family: Arial, sans-serif; font-size: 15px;">
		  	<b>USUARIO: </b>{{$user->email}}
		 </td>
		</tr>

		<tr> 
		 <td style="color: #153643; padding: 5px 0; font-family: Arial, sans-serif; font-size: 15px;">
		  	<b>CONTRASEÑA: </b>{{$user->pass_reset}}
		 </td>
		</tr>

		<tr> 
		 <td style="color: #153643; padding: 5px 0; font-family: Arial, sans-serif; font-size: 15px;">
		  	<b>CODIGO DE REFERIDOS: </b>{{$user->codigo_referido}}
		 </td>
		</tr>

		<tr> 
		 <td style="color: #153643; padding: 5px 0; font-family: Arial, sans-serif; font-size: 15px;">
		  	<b>LANDING PAGE DE REFERIDOS: </b><a href="#">https://www.globalteam.company</a>
		 </td>
		</tr>

	 </table>
	
</td>

</tr>

<tr>

<td bgcolor="#f4f4f4" style="padding: 30px 30px 30px 30px;">

	<table border="0" cellpadding="0" cellspacing="0" width="100%">
 
	 <tr>
	 
	<td width="75%" style="color: #13356c; font-family: Arial, sans-serif; font-size: 14px;">
 
	 &copy; <a href="https://globalteam.company/">Global Team</a>, 2020<br/>
	 
	 Síguenos en nuestas redes
	 
	</td>
	 
	<td align="right">
 
		<table border="0" cellpadding="0" cellspacing="0">
		 
		<tr>
		 
		 <td>
		 
		  <a href="https://www.instagram.com/globalteamcoworking/">
		 
		   <img src="https://globalteam.company/wp-content/uploads/2020/05/in-ico.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
		 
		  </a>
		 
		 </td>
		 
		 <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
		 
		 <td>
		  <a href="https://www.facebook.com/globalteamholding">
		   <img src="https://globalteam.company/wp-content/uploads/2020/05/fb-ico.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
		  </a>
		 </td>
		 
		</tr>
		 
		 </table>
	 
	 </tr>
	 
	</table>

</td>

</tr>

</table>
 
</body>


</html>