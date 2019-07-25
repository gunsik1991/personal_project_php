<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php
  
    session_start();
     $id=$_POST['ids'];
     $pw=$_POST['password'];
    
    include 'database_manager.php';
    
    $sql="select *from hotelcustomer where id='$id' and password='$pw'";
     $result=mysqli_query($mydb,$sql);
    $row=mysqli_fetch_array($result);
    
   if($id==$row['id'] && $pw==$row['password']){ // id와 pw가 맞다면 login

   $_SESSION['id']=$row['id'];
   /*$_SESSION['pw']=$row['pw'];*/
   echo "<script>location.href='index.php';</script>";

}else{ // id 또는 pw가 다르다면 login 폼으로

   echo "<script>alert('잘못된 아이디 또는 비밀번호 입니다.'); </script>"; // 잘못된 아이디 또는 비빌번호 입니다
   echo "<script>location.href='login.php';</script>";

}
    ?>
</body>
</html>