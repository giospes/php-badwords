<!DOCTYPE html>
<html>
<head>
	<title>Form con due campi di input testuale</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		input[type=text] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid gray;
			font-size: 16px;
		}

		input[type=submit] {
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper vh-100 d-flex align-items-center justify-content-center">
        <form action="response.php" method="GET">
            <label for="parola">Inserisci il testo</label>
            <input type="text" id="testo" name="testo" placeholder="Inserisci testo qui" required>

            <label for="parola">Inserisci la parola da censurare</label>
            <input type="text" id="parola" name="parola" placeholder="Inserisci testo qui" required>

            <input type="submit" value="Invia">
        </form>
    <div class="wrapper">
    
</body>
</html>




