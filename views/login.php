<!doctype html>
<html lang="en">
<head>
  <?php include ('../includes/head.php');?>
</head>

<body>

  <a onClick="submitLoginForm();"><img src="logo2.png" id="login-logo"></a>
  <div id="login-container">
    <p style="font-size: 35px">MOBILE DATA TERMINAL</p>
    <p style="font-size: 25px">LOG-ON</p>

    <div id="form-login-container">
      <form id="login-form" action="./includes/submitlogin.php" method="post">
        <p style="font-size: 22px">USERNAME</p><br>
        <input type="text" name="user">
        <p style="font-size: 22px; margin-top: 22px">PASSWORD</p><br>
        <input type="password" name="pass">
      </form>
    </div>
  </div>

  <div class="error-box" id="error-box">
    <p id="error-title">ERROR:</p>
    <p id="error-text">INVALID USER OR PASSWORD</p>
    <button onClick="closeErrorTab();"><span>OK</span></button>
  </div>

  <p style="font-size: 20px" class="cw">MOBILE DATA TERMINAL v0.0.1 ALPHA</p>

  <script src="./js/scripts.js"></script>
</body>
</html>