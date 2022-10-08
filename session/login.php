<!DOCTYPE html>
<html>
  <head>
    <title>Simple registration form</title>

    <style>
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 5px 0;
      font-size: 20px;
      font-weight: 100;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 200px; 
      min-height: 100px; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }

      input[type=text], input[type=password] {
      width: 100%;
      height: 20px;
      margin: 5px 0 0 -5px;
      padding-left: 3px; 
      border-radius: 0 2px 2px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 2px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 5px;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 100%;
      padding: 5px 0;
      margin: 5px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 10px;
      font-weight: 200;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Registration</h1>
      <form action="/">
        <hr>

        <input type="text" name="uname" id="uname" placeholder="User Name" required/>
        <input type="password" name="pass" id="name" placeholder="Password" required/>
        <hr>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
      <?php
      session_start();
      if(isset($_POST['submit'])
      {
        $u_name= $_POST['uname'];
        $pass = $_POST['pass'];
        $_SESSION['uname']=$u_name;
        $_SESSION['pass']=$pass;
        echo "wellcome ". $_SESSION['uname'];
      }


      ?>
    </div>
  </body>
</html>