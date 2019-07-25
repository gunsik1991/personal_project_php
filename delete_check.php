<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>삭제확인</title>
</head>
<body>
    <?php
    $result_id=$_SESSION['id'];
    $page_no=$_GET['no'];
 $result_jemok=htmlspecialchars($_POST['review_content']);
   include 'database_manager.php';
    $sql="delete from reviewboard where no='$page_no';";
    $sql_sort="alter table reviewboard auto_increment=1;";
    
    
    $delete_result=mysqli_query($mydb,$sql);
    $sort_result=mysqli_query($mydb,$sql_sort);
    
    if($delete_result){
    if($page_no!=null){
        echo "<script>alert('게시글이 성공적으로 삭제되었습니다.');</script>";
        if($sort_result){
          echo "<script>location.href='review_board.php';</script>";
       }
       
    }else{
         echo "<script>alert('게시글이 삭제에 실패하였습니다.');</script>";
         echo "<script>location.href='review_board.php';</script>";
    }
    }
    
    
    ?>
</body>
</html>