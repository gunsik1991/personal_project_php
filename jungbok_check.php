<?php
 
   $id_val=$_GET['id'];
   /*$name=$_SESSION['name'];
   $password=$_SESSION['password'];
   $repassword=$_SESSION['repassword'];
   $email_content=$_SESSION['email_content'];*/
   include 'database_manager.php';
    $sql="SELECT * FROM hotelcustomer WHERE id='$id_val';";

   $result=mysqli_query($mydb,$sql);
  
    if($result){
    
        while($row=mysqli_fetch_row($result)){
       
           if($row[0]==$id_val){
                echo "<script>alert('기존의 아이디가 존재합니다.'); window.close();</script>";
           }
   
        
          
        }
        
    }else{
      
    }

     echo "<script>alert('아이디를 사용할 수 있습니다.'); window.close();</script>";
 

?>