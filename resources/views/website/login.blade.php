
<html lang="es">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<style type="text/css">
    body {
    background: url('../website/assets/images/img3.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 140px;
    background: url('../website/assets/images/logo-sv-2.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #61afd5;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('../website/assets/images/img1.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('../website/assets/images/img1.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('../website/assets/images/img2.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('../website/assets/images/img2.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #61afd5;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #61afd5;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #fff;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #a0e0ff;
}

#title{
    color: #61afd5;
    text-shadow: 1px 1px black;
}

p{
    color: gray;
}

#hr-login {
    border-top: 0.5px dashed #61afd5;
}

#footer-text{
    color: white;
    position: absolute;
    bottom:-20;
    right:0;
}

</style>

<div class="logo"></div>
<div class="login-block">
    <h1 id="title">¡BIENVENIDO!</h1>
    <hr id="hr-login">
    <p>Ingrese sus credenciales para iniciar sesión:</p>
    <input type="text" value="" placeholder="Nombre de usuario" id="username" />
    <input type="password" value="" placeholder="Contraseña" id="password" />
    <button>INICIAR SESIÓN</button>
</div>

<div align="right">
    <h5 id="footer-text">© HR Solutions Pasto | 2022<h5>
</div>

</html>