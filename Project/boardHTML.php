<!doctype html>
<html>
<head>
<title>留言板</title>
<meta charset=utf-8>
<link rel=stylesheet href=css/homepage.css>

</head>
<body>
    <?php include './PHP/board.php';?>
    <?php include './meauDiv.php';?>
    <?php include './loginDiv.php';?>

<div id=board>
<h2>留言板</h2>
    
<form align=center action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div id=main>
    <p><input type="text" name="name" value="<?php echo $who; ?>" size="30"></p>
    <textarea name="comment" value="<?php echo $boardtext; ?>"  placeholder="留言~" rows="5" cols="45"></textarea>
    <p><input type="submit" value="確定">
    <input type="button" value="清除" onclick="location.href='boardHTML.php'"></p>
    </div>
</form>
    
    <h2 style="color:red;"><?php echo $stop; ?></h2>

    <div class='result'>
        <?php echo $search; ?>
    </div>   

</div>

    
</body>
</html>