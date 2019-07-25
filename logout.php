<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    
    if($_SESSION['ids']==null){ 
        session_destroy();
    }
    echo "<script>location.href='index.php'</script>";
    ?>
</body>
</html>