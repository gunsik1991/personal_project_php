<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>수정여부</title>
</head>
<body>
  <?php
    session_start();
    include 'database_manager.php';
    $board_selection=$_POST['selection']; 
      $title=$_POST['jemok'];
      $content=$_POST['content'];
      $ids=$_SESSION['id'];
      $page_no=$_GET['no'];
  
    
   /* echo "<script>console.log('$title');</script>";*/
    if($_SESSION['id']==null){
        echo "<script>alert('권한이 없습니다.');</script>";
        echo "<script>location.href='review_board.php';</script>";
    }else{
         if($board_selection=='리뷰게시판'){
           $sql_null="delete from reviewboard where id='';";
        $sql_modify="update reviewboard set review_title='$title',review_content='$content' where no='$page_no';";
        $result_null=mysqli_query($mydb,$sql_null);
        $result_modify=mysqli_query($mydb,$sql_modify);
             
           if($result_modify){
            
             echo "<script>alert('게시글에 수정');</script>";
             echo "<script>location.href='review_board.php';</script>";
        }else{
            echo "<script>alert('게시글 수정에 문제가 발생했습니다.잠시 후 다시 시도해 주세요');</script>";
            echo "<script>location.href='review_board.php';</script>";
        }
        
        if($result_null){
            echo "<script>alert('db데이터 널값 막는중');</script>";
        }
         }
    }
      echo "<script>alert('게시글 수정에 문제가 발생했습니다.잠시 후 다시 시도해 주세요');</script>";
            echo "<script>location.href='review_board.php';</script>";
    ?>
</body>
</html>