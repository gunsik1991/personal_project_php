<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>myPage</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        html,
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            overflow-x: hidden;
            margin: 0 auto;
        }
        /*헤더부분*/
        header {
            width: 100%;
            height: 110px;
            position: relative;
            z-index: 9999;
            transition: 0.8s;
            background-color: black;
        }
        .gnb {
            position: absolute;
            right: 0px;
            left: 300px;
            top: 60px;
            width: 1500px;
        }
        .gnb>ul {}
        .gnb>ul>li {
            float: left;
            margin: 0px 12px;
            resize: vertical;
        }
        .gnb>ul>li>a {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            padding: 5px 10px;
        }
        .sub {
            width: 180px;
            top: 22px;
            background-color: #ffffff;
            box-shadow: 0px 0px 3px #333;
            border-radius: 5px;
            position: absolute;
            display: none;
        }
        .sub>li {
            text-align: center;
            padding: 8px;
        }
        .sub li a {
            display: block;
            font-size: 13px;
            color: #999;
            padding: 8px;
        }
        .sub li a:hover {
            background-color: gray;
            color: #fff;
        }
        section {
            position: relative;
            margin-top: 0px;
            width: 100%;
        }
        section>article {
            width: 100%;
            height: 1200px;
            margin-bottom: 40px;
        }
          .image>img {
            height: 390px;
            width: 100%;
            margin-top: 0px;
        }
        .image>div h2{
            position: absolute;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            left: 750px;
            top: 15%;
            color: #fff;
        }
        .register_modify {
            width: 700px;
            border: 1px solid #444444;
            border-collapse: collapse;
            margin-left: 300px;
            margin-top: -310px;
            position: static;
        }
        .register_modify>tr>th{
            background-color:gainsboro;
        }
        td {
            border: 1px solid gray;
            padding: 40px;
        }
        .title {
            margin-top: 100px;
        }
        .title>h2 {
            font-size: 30px;
            font-size: #000;
            text-align: center;
        }
        .select_mypage {
            margin-top: 220px;
            margin-left: 80px;
            border: 2px solid #000;
            width: 200px;
        }
         #selection {
            padding: 10px 20px;
            margin-left: 705px;
            border-radius: 0px;
            margin-top:-490px;
           
           
        }
        .select_mypage>ul li {
            font-size: 20px;
            padding: 30px;
            cursor: pointer;
        }
        .table_register {
            margin-left: 250px;
        }
        .btn {
            margin-left: 500px;
            margin-top: 30px;
        }
        #modify,
        #back {
            padding: 20 30px;
            color: #fff;
            background-color: #000;
            margin-left: 30px;
            box-shadow: 0px;
            border-radius: 10px;
            border-top-width: 0.5px;
            border-bottom-width: 0.5px;
            border-left-width: 0.5px;
            border-right-width: 0.5px;
            outline: 0px;
            cursor: pointer;
            width: 200px;
        }
        #cus_name,
        #id,
        #emails,#birthday {
            padding: 10px 20px;
        }
         #datepicker
         {}
        #birth_yy,
        #birth_mm,
        #birth_dd {
            padding: 10px 40px;
            margin: 10px;
        }
       
        .hide {
            display: none;
            margin-left:800px;
          
        }
        
        .hide>h2{
            font-size:17px;
        }
       
        .table_register>ul>li>h2{
            font-size:17px;
            text-align: center;
            position: absolute;
            margin-top:0px;
            display: block;
            left:800px;
            
        }
        footer {
            width: 100%;
            height: 80px;
            background-color: #333;
        }
        footer address {
            line-height: 80px;
            text-align: center;
            color: #fff;
            font-style: normal;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            var m_menu = $('.gnb>ul>li>a');
            var topbutton = $('footer>i.fas');
            m_menu.hover(function() {
                $(this).next().css('display', 'block');
            }, function() {
                $(this).next().css('display', 'none');
            });
            $('.sub').hover(function() {
                $(this).css('display', 'block');
            }, function() {
                $(this).css('display', 'none');
            });
            $('#back').click(function() {
                location.href = 'mypage.php';
            });
            $('.select_mypage li').click(function(){
              
            var index=$('.select_mypage li').index(this);
            
            $('.contents div').css('display','none');
            $('.contents div').eq(index).css('display','block');
            
            $('.select_mypage li').removeClass('select');
            $(this).addClass('select');
        });
            
            $('#modify').click(function(){
                var name=$('input[id=cus_name]').val();
                var email=$('input[id=emails]').val();
                var birth=$('input[name=birthday]').val();
                  var regEx=/^[A-Za-z]{1}[a-zA-Z0-9]{4,10}$/;
                  var email_result=$('input[id=email_result]').text();
                  var hangulreg=/^[가-힣]+$/;
                 var EngregEx=/[a-zA-Z]/;
                  var email=$('input[id=emails]').val();
                 var email_select=$('select[id=email_selection] option:checked').val();
              var foreign_option=  $('select[id=selection] option:checked').val();
                
                if(!name){
                    alert('이름을 입력하세요');
                    return false;
                  
                }else{
                       if(foreign_option=='내국인'){
                if(!Hangulcheck(hangulreg,cus_name,"한글만 입력해주세요")){
                return false;
                }
            }
            if(foreign_option=='외국인'){
               if(!Engcheck(EngregEx,cus_name,"영어만 입력해주세요")){
                return false;
                } 
            }
                }
               
                 if(!email){
                    alert('이메일을 입력하세요');
                    return false;
                }
                if(!check(regEx,emails,"이메일이 올바르지 않습니다.")) {
                return false;
             }  
                
             email_result=email+"@"+email_select;
              
                 $('#email_result').val(email_result);
                
                
         function check(regEx, what, message) {
            if(regEx.test(what.value)) {
                return true;
            }
            alert(message);
            what.value = "";
            what.focus();
       //return false;
        }
                
                 
            
               
                   function Engcheck(EngregEx,what,message){
            if(EngregEx.test(what.value)){
                return true;
            }
            alert(message);
            what.value="";
            what.focus();
        }
            
         function Hangulcheck(hangulreg,what,message){
            if(hangulreg.test(what.value)){
                return true;
            }
            alert(message);
            what.value="";
            what.focus();
        }
                
            });
            
            $('#back').click(function(){
               location.href='index.php'; 
            });
            
            $('#birthday').datepicker({
                
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                /*minDate: 0,*/ // 오늘 이전 날짜 선택 불가
                maxDate: 30,
                  changeYear: true,
                 minDate: '-100y',
                yearRange: 'c-110:c+10',
                dateFormat: "yy/mm/dd"
              
            });
            
        });
        
    </script>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['id']!=null){
        /*  echo "<script>alert('로그인하여 주세요');</script>";*/
    ?>
   <form action="logout.php">
        <header>
       
            <nav class="gnb">
                <ul>
                    <li><a href="index.php" title="">메인페이지</a></li>
                    <li><a href="mypage.php?id=<?php echo $register_id?>" title="">마이페이지<i class="fas fa-angle-down"></i></a>
                        <ul class="sub">
                            <li><a href="#" title="">예약조회</a></li>
                            <li><a href="#" title="">예약변경/취소</a></li>
                        </ul>
                    </li>
                    <li><a href="#trip" title="">추천여행지</a></li>
                    <li><a href="#event" title="">이벤트<i class="fas fa-angle-down"></i></a>
                        <ul class="sub">
                            <li><a href="service_event.php" title="">이벤트 목록</a></li>
                        </ul>
                    </li>
                    <li><a href="#community" title="">커뮤니티<i class="fas fa-angle-down"></i></a>
                        <ul class="sub">
                           
                            <li><a href="review_board.php" title="">리뷰게시판</a></li>
                            <li><a href="question.php" title="">자주하는질문</a></li>
                        </ul>
                    </li>
                    <li><a href="notice.php" title="">공지사항</a></li>
                     <li> <a>
                            <?php  
        echo "(".$_SESSION['id'].")님 반갑습니다."?></a></li>
                    <li><a href="logout.php">로그아웃</a></li>
                </ul>

            </nav>
        </header>
    </form>
    <?php
    }
    ?>
    <section>
        
        <article class="mypage_content">
          <div class="image">
                <img src="./j17/img/Hotelrobi.jpg" alt="">
            <div class="jemok">
           <h2>마이페이지</h2>
            </div>
            </div>
            <div class="select_mypage">
                <ul class="menu">
                    <li class="select">회원정보</li>
                    <li>예약조회</li>
                    <li>예약취소/변경</li>
                </ul>
            </div>
            

 <?php
            $result_id=$_SESSION['id'];
           include 'database_manager.php';
           $sql="select name,id,birth,SUBSTRING_INDEX(email,'@',1) email from hotelcustomer where id='$result_id';";
           $select_result=mysqli_query($mydb,$sql);
         
            ?>

<div class="contents">
    <?php 
      if($select_result){
      while($row=mysqli_fetch_array($select_result)){
    ?>
 <div class="table_register">
             
               <ul>
                   <li>
               
                    <form action="mypage_modify_check.php" method="post">
                        <table class="register_modify">
                           
                            <tr>
                                <th>이름</th>
                                <td><input type="text" name="name" id="cus_name" value="<?php echo $row[name]; ?>"></td>
                                  <select name="foreign" id="selection">
                                        <option value="내국인">내국인</option>
                                        <option value="외국인" id="fore">외국인</option>
                                    </select>
                            </tr>
                            <tr>
                                <th>아이디</th>
                                <td><input type="text" name="id" id="id" value="<?php echo $row[id]; ?>" readonly></td>
                            </tr>
                            <tr>
                                <th>생년월일</th>
                                <td>
                               <input type="text" id="birthday" name="birthday" value="<?php echo $row[birth]; ?>" readonly>
                                </td>
                               
                            </tr>
                            <tr>
                                <th>이메일</th>

                                <td id="content"> <input type="text" id="emails" name="email_content" value="<?php echo $row[email]; ?>" maxlength="10">&nbsp;&nbsp;&nbsp;@
                                    <select name="email" id="email_selection">
                                        <option value="naver.com">naver.com</option>
                                        <option value="hanmail.com">hanmail.com</option>
                                        <option value="google.com">google.com</option>
                                        <option value="gmail.com">gmail.com</option>
                                    </select>
                                </td>
                                <input type="hidden" id="email_result" name="email_result">
                                <?php echo "<script>alert</script>"?>
                            </tr>
                            <tr>
                                <td colspan="2">
                             <input type="submit" value="수정완료" id="modify">
                            <input type="button" value="뒤로가기" id="back">
                                </td>
                            </tr>
                        </table>                     
                    </form>                    
                   </li>
               </ul>
              
            </div>
            <?php }}?>
<div class="hide"><h2>예약 내역이 없습니다.</h2></div>
<div class="hide"><h2>예약취소 및 변경 내역이 없습니다.</h2></div>
</div>

             
        </article>
    </section>

    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>

</body>

</html>