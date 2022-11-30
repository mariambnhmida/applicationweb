<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>My application</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/newstyle.css">

    <script type="text/javascript"></script>

</head>
<body class="interface_inscri_connexion">
	<form class="form-style-9" action="{{route('handleAdminLogin')}}" method="POST" style="opacity: 0.9;">
        {{csrf_field()}}
        <h1><center>Login</center></h1>
			 <div class=container>
				<b><label type="label" name="label_login" class="field-style field-split align-left">Username </label></b>
				<input type="text" name="email" class="field-style field-split align-right" id="exampleEmail11" placeholder="Enter your email"/>
				<b><label type="label" name="label_password" class="field-style field-split align-left" >Password</label></b>
				<input type="password" name="password" class="field-style field-split align-right" id="txtPassword" placeholder="Enter your password"/>
			    <br><br>
				<div>
                    <a href="{{route('showchart')}}"></a>
				   <button type="submit" id="Login">Login</button>
					<a href="http://dig2s.com/" >
						<img style=" float:right " class="img_societe_digi" src="{{asset('assets')}}/images/logo.png" style="margin-left: auto;margin-right: auto; float:right ">
						</a>

				</div>
				<br>
				<a href="#">Forgot Password?</a>
			</div>
	</form>
</body>
</html>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Login").click(function () {
            var password = $("#txtPassword").val();
            var email = $("#exampleEmail11").val();
            if (password == email) {
                alert("Your password cannot be your email.Please check your password!");
                return false;
            }
            return true;
        })});
        </script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Login").click(function () {
            var password = $("#txtPassword").val();
            var email = $("#exampleEmail11").val();
            if (email==password) {
                alert("Your email cannot be your password.Please check your password!");
                return false;
            }
            return true;
        })});
</script>

