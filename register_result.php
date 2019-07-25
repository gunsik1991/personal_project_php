<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
  

    $id=$_GET['id'];
    $password=$_GET['password'];
    $name=$_GET['name'];
    $birth=$_GET['birth'];
    $email=$_GET['email_result'];
   /* echo ($id+'/'+$password+'/'+$name+'/'+$birth+'/'+$email);*/
    
    include 'database_manager.php';

    
    $sql="insert into hotelcustomer values('$id','$password','$name','$birth','$email');";
    $sql_null="delete from hotelcustomer where id='';";
    $sql_idcheck="select id from hotelcustomer where id='$id'";
  
    $result=mysqli_query($mydb,$sql);
    $result_null=mysqli_query($mydb,$sql_null);
    $result_idcheck=mysqli_query($mydb,$sql_idcheck);
   
    if($result){
        echo "<script>alert('회원가입이 성공되었습니다.');</script>";
         echo "<script>location.href='login.php';</script>";
    }else{
        echo mysqli_error($mydb);
    }
    
    if($result_null){
        echo "delete success";
    }
    
    if($result_idcheck){
        echo "<script>alert('기존에 있는 아이디가 존재합니다. 다시 시도해 주세요'); 
        location.href='register.php';
        </script>";
    }
    
   
    
    mysqli_close($mydb);
    
   
    ?>
</body>
</html>