<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: rgb(28, 150, 155);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    form {
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(1 0, 0, 0.1);
      padding: 20px;
      width: 500px;
      padding: 50px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: white;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<form method="POST"  id="signinForm">
    <h1 style="text-align:center;">Sign-In:</h1>
    <label for="itemname">Email:</label>
    <input type="email" id="itemname" name="itemname">
    <label for="itemdesc">Password:</label>
    <input type="password" id="itemdesc" name="itemdesc">

    <button style="background-color:green; border-radius:15px; padding:15px; color:white; margin:10px; border:none;" type="submit" id="login">Login</button>
    <br>
    <a href="register.php" style="text-decoration:none;">Don't have Account? Register here</a>
  </form>

</body>
</html>
