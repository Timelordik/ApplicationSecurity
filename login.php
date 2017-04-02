
<!DOCTYPE html>
<html>

<head>
  <title>Online Examination - Log in</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script type="text/javascript" src="modernizr-1.5.min.js"></script>


</head>

<body>
<hr>
<fieldset  style="width: 50%; margin: 5px auto; " />

<legend>Sign In</legend>
	<form method = "POST" action="loginconnect.php" id="login_form" class = "result">  <!--action="loginconnect.php"-->
		<table>
		<tr>
			<td >UserName</td>
		</tr>
		<tr>
			<td> <input type ="text" id="user" name ="user" placeholder="UserName" autofocus/></td>
		</tr>
		<tr>
			<td>Password</td>
		</tr>
		<tr>
			<td><input type ="password" id="pass" name ="pass" placeholder="Password"/></td>
		</tr>

			<tr>
		<td>
			 <input type="radio" name="usertype" value="2"> User
             <input type="radio" name="usertype" value="1"> Admin <br><br>
		</td>
		</tr>


		<tr>
			<td><input type ="submit" id="submit"  name ="submit" value="Log In"/>  </td> <!-- id="btn" class="submit" name ="Login"-->
		</tr>


		</table>

	</form>


	</fieldset>

<!--
           <div>
           <h2 align = "center"> <a href="signup.php">Sign Up Here</a></h2>

           </div>>-->


  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

</body>
</html>