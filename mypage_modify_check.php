<?php

  session_start();
  $session_id=$_SESSION['id'];
  include "database_manager.php";
  $name=$_POST['name'];
  $birth=$_POST['birthday'];
  $email=$_POST['email_result'];
   $sql="update hotelcustomer set name='$name',birth='$birth',email='$email' where id='$session_id';";

    $update_result=mysqli_query($mydb,$sql);


   if($update_result){
        echo "<script>alert('정보 수정에 성공하였습니다.'); location.href='mypage.php?id=$session_id';</script>";
   }else{
        echo "<script>alert('정보 수정에 문제가 발생하였습니다.'); location.href='mypage.php?id=$session_id';</script>"; 
   }
                 
   
?>