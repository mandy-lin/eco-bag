<!doctype html>
<html>
<head>
<title>查詢</title>
<meta charset=utf-8>
<link rel=stylesheet href=css/homepage.css>

</head>
<body>
    <?php include './PHP/inquire.php';?>
    <?php include './meauDiv.php';?>
    <?php include './loginDiv.php';?>
<div id=inquire>

<table class="table">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>
        <input name="keyword" type="text" placeholder="請輸入名稱" />
        <button class="btn" type="submit" >查詢</button> </p>
    </form>
<tr>
<th>袋子編號</th>
<th>袋子名稱</th>
<th>用途</th>
<th>大小</th>
<th>材質</th>
 <th>圖片</th>
</tr>
    
<?php echo $search; ?>
    
</table>
</div>
  


</body>
</html>