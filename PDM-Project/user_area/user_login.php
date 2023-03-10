<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <style class="cp-pen-styles">html, body {
        border: 0;
        padding: 0;
        margin: 0;
        height: 100%;
      }
      
      body {
        background: tomato;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
      }
      
      form {
        background: white;
        width: 40%;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
        font-family: lato;
        position: relative;
        color: #333;
        border-radius: 10px;
      }
      form header {
        background: #FF3838;
        padding: 20px 20px;
        color: white;
        font-size: 1.2em;
        font-weight: 600;
        border-radius: 10px 10px 0 0;
      }
      form label {
        margin-left: 20px;
        display: inline-block;
        margin-top: 30px;
        margin-bottom: 5px;
        position: relative;
      }
      form label span {
        color: #FF3838;
        font-size: 2em;
        position: absolute;
        left: 2.3em;
        top: -10px;
      }
      form input {
        display: block;
        width: 78%;
        margin-left: 20px;
        padding: 5px 20px;
        font-size: 1em;
        border-radius: 3px;
        outline: none;
        border: 1px solid #ccc;
      }
      form .help {
        margin-left: 20px;
        font-size: 0.8em;
        color: #777;
      }
      form button {
        position: relative;
        margin-top: 30px;
        margin-bottom: 30px;
        left: 50%;
        transform: translate(-50%, 0);
        font-family: inherit;
        color: white;
        background: #FF3838;
        outline: none;
        border: none;
        padding: 5px 15px;
        font-size: 1.3em;
        font-weight: 400;
        border-radius: 3px;
        box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
        cursor: pointer;
        transition: all 0.15s ease-in-out;
      }
      form button:hover {
        background: #000000;
      }
      </style></head><body>
      
      <form>
        <header>Sign in</header>
        
            <div class="form-group">
              <input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="User Name" autocomplete="off" required = "required" tabindex="1">
            </div>
        
        
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2">
        </div>
          
        <div class="col-xs-12 col-md-6"><input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        <p style="text-align: center;font-size: 20px;">or if you don't hava an account</p>
        <button type="button" onclick="location.href='user_registration.php'">Register</button>
      </form>
</body>
</html>