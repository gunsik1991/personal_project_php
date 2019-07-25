<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    
  include 'database_manager.php';
    $board_selection=$_POST['selection']; 
      $title=$_POST['jemok'];
      $content=$_POST['content'];
      $ids=$_SESSION['id'];
   
   /* echo "<script>console.log('$title');</script>";*/
    if($_SESSION['id']==null){
        echo "<script>alert('권한이 없습니다.');</script>";
        echo "<script>location.href='review_board.php';</script>";
    }else{
 
    if($board_selection=='리뷰게시판'){
        /*리뷰 게시판 database를 만들고 처리할 부분*/
       
        $sql=" insert into reviewboard(review_id,review_title,review_content,review_date) values('$ids','$title','$content',now());";
        $sql_null="delete from reviewboard where id='';";
       
         $result=mysqli_query($mydb,$sql);
        $result_null=mysqli_query($sql_null,$mydb);
       
          if($result){
              echo "<script>alert('게시글에 성공');</script>";
             echo "<script>location.href='review_board.php';</script>";
        }else{
           echo "<script>alert('게시글에 문제가 발생했습니다.잠시 후 다시 시도해 주세요');</script>";
            echo "<script>location.href='review_board.php';</script>";
        }
        
        
        if($result_null){
            echo "<script>alert('db데이터 널값 막는중');</script>";
        }
       
        }
    }
    ?>
</body>

</html>
