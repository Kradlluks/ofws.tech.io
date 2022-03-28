<!DOCTYPE html>
<?php include ('./Content/validar.php'); ?>
<html>

<!-- CSS only -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="./style.css">

<link href="https://fonts.googleapis.com/css?family=Raleway:400,700"
rel="stylesheet"
crossorigin="anonymous">

<head>

<meta charset="utf-8">

    <title> Login </title>

<!--- Conexão --->



<!-- Fim da conexão  -->


</head>

<Style>

@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');


* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);
}

.log {

	padding: 10%;
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {
	background: linear-gradient(90deg, #5D54A4, #7C78B8);
	position: relative;
	height: 580px;
	width: 340px;
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;
	height: 100%;
}

.screen__background {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;
	top: -50px;
	right: 120px;
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;
	top: -172px;
	right: 0;
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;
	top: 420px;
	right: 50px;
	border-radius: 60px;
}

.login {
	width: 220px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;
	position: relative;
}

.login__icon {
	position: absolute;
	top: 30px;
    padding: 10px ;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 15px;
	padding-left: 40px;
	font-weight: 700;
	width: 60%;
	transition: .2s;
}
/**new Code **/
.form-control.sucess input{
	border-color:#228B22;
}
.form-control.error input{
	border-color:#B22222;

}

.form-control.success i.fa-check-circle
{
visibility: visible;
color: #228B22;
}

.form-control.error i.fa-exclamation-circle {
	visibility: visible;
	color: #B22222;
}
.form-control.error small {
	visibility: visible;
	position: absolute;
	bottom: 0;
	left: 0;
	color: #B22222;
}

/**new Code **/
.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 26px 20px;
	border-radius: 24px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 40%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
	height: 8%;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

.social-login {
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);
}

</Style>

<!-- JavaScript Bundle with Popper -->
<script src="valid.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>


    <body>

        <form id="formlogin" class="form-control" method="POST" action="validar.php">

                 <div class="container">

                    <div class="screen">

                        <div class="screen__content">

                        <!--- Login --->

                            <form class="login">

                                <div class="login__field">

                                    <i class="login__icon fas fa-user"></i>

                                        <input type="text" name="logintc" id="logintc" class="login__input" placeholder=" User or Email">
				                <i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small>Check</small></input>
                                            </div>

                                                <div class="login__field">

                                                    <i class="login__icon fas fa-lock"></i>


                        <!--- Password --->

                            <input type="password" name="passtc" id="passtc" class="login__input" placeholder="Password">
							<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small>Check</small></input>
				                <p><input style="width:fit-content; height:fit-content" type="checkbox" >Show password</input>
                                </div>

                                    <button  name="log" class="button login__submit" type="submit" id="entrar" name="entrar" onclick="validate()">

                                        <span class="button__text"> Entrar </span>
					                    <i class="button__icon fas fa-chevron-right"></i>

                                    </button><p></p>

									<button name="forgotb" href="./Content/forgot.php" class="button" type="submit" >
									<span class="text-center">  </span>
									<i Style="padding:15px;" > Esqueces-te da password? </i>
			</button>
                        <!-- Login With Social media-->

             <div class="social-login">

                    <h3>log in via</h3>

                        <div class="social-icons">

                            <a href="#" class="social-login__icon fab fa-instagram"></a>
					        <a href="#" class="social-login__icon fab fa-facebook"></a>
		                    <a href="#" class="social-login__icon fab fa-twitter"></a>

                        </div>

            </div>

        </div>

            <div class="screen__background">

                    <span class="screen__background__shape screen__background__shape4"></span>
			        <span class="screen__background__shape screen__background__shape3"></span>
			        <span class="screen__background__shape screen__background__shape2"></span>
			        <span class="screen__background__shape screen__background__shape1"></span>
		    </div>

        </div>

    </div>

</div>


</form>



    </body>



</html>
