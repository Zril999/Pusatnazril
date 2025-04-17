<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Curl Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-color: #f0f0f0;
      color: #212121;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #212121;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 20px;
      width: 300px;
      position: relative;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #ffffff;
    }

    input[type="text"] {
      border: none;
      border-bottom: 1px solid #9e9e9e !important;
      box-shadow: none !important;
      color: #ffffff !important;
    }

    label {
      color: #ffffff;
    }

    button {
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }

    .copyright {
      text-align: center;
      color: #000000;
      position: absolute;
      bottom: 10px;
      left: 0;
      width: 100%;
    }

    /* Added styles for anime theme */
    .container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 30px;
      width: 350px;
      background-image: url('https://i.supa.codes/mi-Hl6');
      background-size: cover;
      background-position: center;
    }

    h1 {
      color: #ffffff;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 30px;
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    input[type="text"] {
      background-color: rgba(255, 255, 255, 0.8);
      border: none;
      border-radius: 5px;
      box-sizing: border-box;
      color: #333333;
      font-size: 16px;
      padding: 15px;
      width: 100%;
    }

    label {
      color: #ffffff;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 10px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    button {
      background-color: #ff5e62;
      border: none;
      border-radius: 5px;
      color: #ffffff;
      font-size: 16px;
      font-weight: bold;
      padding: 15px;
      text-transform: uppercase;
    }

    button:hover {
      background-color: #e64b4f;
    }

    .copyright {
      color: #ffffff;
      font-size: 12px;
      position: static;
      text-align: center;
      width: 100%;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Add cURL</h1>
  <form id="addCurlForm">
    <div class="input-field">
      <input id="api" type="text" class="validate" required>
      <label for="api">API</label>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">BAKAR KONTOL MU</button>
  </form>
  <div class="copyright">
    <p>&copy; 👑NAZRIL NESIA👑</p>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js" defer></script>
</body>
</html>