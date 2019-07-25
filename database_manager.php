<?php
  $mydb=mysqli_connect('localhost','Hotel','1234');
     if(!mysqli_select_db($mydb,'hotel')){
    die('데이터베이스에 연결할 수 없습니다.');
    }
?>