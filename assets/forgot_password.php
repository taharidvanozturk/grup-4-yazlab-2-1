<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifremi Unuttum</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">-->
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        form label,
        form input[type="email"],
        form button {
            display: block;
            margin-bottom: 10px;
        }
        input[type="email"] {
            margin: 0 auto;
            text-align: center;
            width: calc(100% - 22px); 
        }
        button {
            background-color: red;
            color: black;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
            margin-left: 110px; 
        }
        button:hover {
            background-color: darkred;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" action="password_reset.php">
        <h1>Şifreni mi Unuttun?</h1>
        <label for="email">E-posta</label>
        <input type="email" name="email" id="email">
        <button>Gönder</button>
    </form>
</div>

</body>
</html>