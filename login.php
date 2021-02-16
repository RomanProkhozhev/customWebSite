<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kirjaudu Sisään</title>
	<script src="script.js"></script>
</head>
<body>
	<form>
		<h1>Kirjaudu Sisään</h1>
		<label>Käyttäjätunnus</label>
		<input type="text" name="username" />
		<label>Salasana</label>
		<input type="password" name="password" />
		<br>
		<div onclick="login()" class="btn">Log In</div>
	</form>

<style>
body {
	height: 100vh;
	margin: 0;
	padding: 0;
	font-family: Source Sans Pro;
	display: flex;
	align-items: center;
	justify-content: center;
}
h1 {
	font-size: 3em;
	display: inline-block;
	border-bottom: 1px solid black;
}
form {
	margin-top: -10%;
	max-width: 400px;
	width: 100%;
}
label {
	margin: 10px 0 0 0;
	font-size: 1.2em;
	display: block;
}
input {
	padding: 7px;
	border: 0;
	border-bottom: 1px solid #ccc;
	outline: none;
	font-size: 1.2em;
	width: 100%;
	transition: border-color .3s;
}
input:focus {
	border-color: black;
}
.btn {
	
	padding: 12px 50px;
	border-radius: 3px;
	font-size: 1.4em;
	cursor: pointer;
	margin: 20px 0;
	color: black;
	font-weight: bold;
	user-select: none;
	display: inline-block;
	transition: background .3s;
	border: solid 4px black;
}
.btn:hover {
	background: black;
	color: white;
}
.btn:active {
	box-shadow: inset 0 0 3px 4px rgba(0,0,0,.2);
}
</style>
</body>
</html>