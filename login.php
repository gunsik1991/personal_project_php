<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf8">
    <title>로그인창</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">
    <style>
        body{
           
           background-image: url(./j17/img/seoul_yagyoung.jpg);
            width:100%;
            
        }
        .login{
            text-align: center;
            padding-top: 200px;
        }
        label{
            font-size: 20px;
            color:#fff;
            
        }
        #id{
          margin: 10px;
          padding:10px 28px;
          box-sizing: border-box;
            border-radius: 3px;
            border:1px solid #000;
           
        }
        #password{
            margin: 10px;
            padding:10px 25px;
            box-sizing: border-box;
            border-radius: 3px;
            border:1px solid #000;
            
            
        }
        #login,#person_regist{
            margin:10px;
            padding:20px 200px;
            color:#fff;
            background-color:black;
            display:inline-block;
            border:none;
            
        }
        .regist_lost>ul{
            text-align: center;
            margin-top: 20px;
        }
          .regist_lost>ul>li{
            text-decoration: none;
            color:#fff; 
            border-left: none;
            display: inline;
            margin:10px;
            
        }
        
        .regist_lost>ul>li>a{
            font-size:20px;
            font-weight: bold;
            color:#fff;
            display: inline;
            
        }
        
    </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script>
    
        $(document).ready(function(){
           
           $('#login').click(function(){
         var form=document.login_form;
         var regEx=/^[A-Za-z]{1}[a-zA-Z0-9]{4,10}$/;
         
        if(!form.ids.value){
            alert('아이디를 입력하세요');
            return false;
        }
        if(!check(regEx,id,"아이디는 4~10자의 영문 대소문자와 숫자로만 입력")) {
           return false;
       }                 
        if(!form.password.value){
            alert('비밀번호를 입력하세요');
            return false;
        }
        if(form.password.value.length<6){
            alert('패스워드가 너무 짧습니다.6자리 이상 입력해주세요'); 
            return false;
        }
             /*  alert('이부분은 백엔드 부분입니다.');*/
        function check(regEx, what, message) {
            if(regEx.test(what.value)) {
           return true;
            }
            alert(message);
            what.value = "";
            what.focus();
       //return false;
   }            
        
           });
        
        });
    </script>
</head>
<body>
   <?
    session_start();
    if($_SESSION['id']==null){
    ?>
    <!--<h2 class="login_jemok">로그인</h2>-->
     <form action="login_check.php" method="post" name="login_form">
    <div class="login" >
    <label for="">아이디&nbsp;&nbsp;</label>
    <input type="text" name="ids" id="id" maxlength="10"><br>
    <label for="">비밀번호</label>
    <input type="password" name="password" id="password" maxlength="10"><br>
    <input type="submit" value="로그인" id="login" style="cursor:pointer">
    <!--<input type="submit" value="회원가입" id="person_regist" style="cursor:pointer">-->
    
     
    
    </div>
   <div class="regist_lost">
     <ul class="rl">
         <li><a href="#">아이디 찾기</a></li>
         <li><a href="#">비밀번호 찾기</a></li>
         <li><a href="register.php">회원 가입</a></li>
         <li><a href="index.php">메인페이지로</a></li>
     </ul>
    </div>
     </form>
    <?
    }
    ?>
</body>
</html>