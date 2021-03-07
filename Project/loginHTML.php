<!DOCTYPE HTML> 
<html>
    <head>
        <meta charset="utf-8">
        <title>登入頁面</title>
        <link rel=stylesheet href=css/homepage.css>
    </head>
    <body>  
        <?php include './PHP/login.php';?>
        <div id='main'>
            <br><br>
            <h3 style="color:green;"><a style="text-decoration: none;" href="indexHTML.php">回首頁</a></h3>
            <h2>登入</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                  <p>帳號: <input type="text" name="account" value="<?php echo $account;?>"></p>
                  <p>密碼: <input type="password" name="password" value="<?php echo $password;?>"></p>
                  <input type="submit" name="submit" value="送出">  
                <input type="button" name="" value="註冊" onclick=" location.href='add_memberHTML.php'">
            </form>
            
            <?php echo "<h4 class='error'>$suc</h4>";?>
        </div>
    </body>
</html>