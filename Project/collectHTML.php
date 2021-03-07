<!doctype html>
<html>
<head>
<title>典藏</title>
<meta charset=utf-8>
<link rel=stylesheet href=css/homepage.css>

</head>
<body>
    <?php include './PHP/collect.php';?>
    <?php include './meauDiv.php';?>
    <?php include './loginDiv.php';?>
<div id=collect>

<table class=collect>
<p>
<tr>
<th>袋子編號</th>
<th>袋子名稱</th>
<th>用途</th>
<th>大小</th>
<th>材質</th>
 <th>圖片</th>
</tr>
    
<?php echo $search ?>
    
</table>
</div>
  


</body>
</html>