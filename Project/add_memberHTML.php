<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>註冊頁面</title>
    <link rel=stylesheet href=css/homepage.css>
  </head>
  <body>
      <?php include './PHP/addmen.php';?>
      <div id='main'>
          <br><br>
        <h2>註冊</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <p>姓名：<input type="text"name="name" value="<?php echo $name;?>" placeholder="輸入姓名"  required></p>
            <p>手機：<input type="text" name="Phone" value="<?php echo $Phone;?>" placeholder="輸入電話"required ></p>
            <p>信箱：<input type="email"name="email" value="<?php echo $email;?>" placeholder="輸入信箱" required></p>
            <p>帳號：<input type="text" name="account" value="<?php echo $account;?>" placeholder="輸入帳號" required></p>
            <p>密碼：<input type="password" name="Password" value=""panel placeholder="輸入密碼"></p>
            <p>確認密碼：<input type="password" name="PwCheck" value=""panel placeholder="再次輸入密碼"></p>
            <input type="submit" name="" value="註冊">
            <input type="button" name="" value="回登入頁面" onclick="location.href='loginHTML.php'">
        </form>
          <?php echo "<h4 class='error'>$suc</h4>";?>
        </div>
  </body>
</html>