<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>管理員頁面</title>
    <link rel=stylesheet href=css/homepage.css>
  </head>
  <body>
      <?php include './PHP/deleteNum.php';?>
      <div id='main'>
          <br><br>
        <h2>移除會員資料</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            移除帳號：<input type="text" name="account" value="<?php echo $account;?>" placeholder="輸入帳號" ><br><br>
            <input type="submit" name="" value="確定"  onclick="return confirm('使否確定要執行這個動作？(刪除後將永久遺失)')">
            <input type="button" name="" value="回首頁" onclick="location.href='indexHTML.php'">
        </form>
          <?php echo "<h4 class='error'>$suc</h4>";?>
             <ul id=all>
                <?php
                    while( $row = sqlsrv_fetch_array( $test, SQLSRV_FETCH_ASSOC) ) {
                        if ($row['account'] == "admin123"){
                            echo "<p style='color:red'>管理員帳號：".$row['account'].",".$row['name'].",".$row['number']."</p>";    
                        }else{
                            echo "<p>會員帳號：".$row['account'].",".$row['name'].",".$row['number']."</p>";
                        }
                    }
                ?>
             </ul>
          
        </div>
  </body>
</html>