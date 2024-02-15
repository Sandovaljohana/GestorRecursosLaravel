<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/login.css'])
    <title>Login</title>
</head>
<body>
<form>
<div class="user" >
<label for="user"> Usuario: </label>
<input type="text" id="user" required/>
</div>
<div class="pasword">
<label for="password"> Contraseña: </label>
<input type="password" id="password" required/>
</div>
<div class="boton">
    <button type="submit"> Login </button>
</form>
</div>
<script type="module" src="./login/login.js"></script>
</body>
</html>