
<html lang="ko">

<head>
    <meta charset="utf8">
    <title>Hotel Homepage 회원가입</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">

    <style>
       html,
        body {
            font-family: "맑은 고딕"arial sans-serif;
            font-size: 12px;
            color: #333;
            overflow-x: hidden;
            margin:auto;
            
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
            left:300px;
            top: 60px;
           width: 1300px;
        }

        .gnb>ul {}

        .gnb>ul>li {
            float: left;
            margin: 0px 12px;
        }

        .gnb>ul>li>a {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            padding: 5px 9px;
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
            margin-top: -160px;
        }
        
         section>article {
            width: 100%;
            height: 1400px;
            margin-bottom: 40px;
        }

        /*해더부분 종료*/

        /*색션부분 시작*/
        p {
            position: absolute;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            left: 800px;
            top: 290px;
            color: #fff;
            width:400px
        }
        .image>img{
            height:400px;
            width:100%;
            margin-top:100px;
        }
        .table {
            /*div쪽*/
            margin-left: 200px;
            margin-top: 90px;
        }

        .register_result {
            margin-left: 750px;

        }

        table {
            width: 1200px;
            margin-left: 50px;
            border: 1px solid #444444;
            border-collapse: collapse;
        }

        td {
            border: 1px solid gray;
            padding: 40px;

        }

        #jemok {
            padding: 0px;
            background-color: gray;
            color: #fff;
            font-size:20px;
            font-weight: bold;
            text-align: center;
        }

        #ids,#cus_name,#passwords,
        #emails {
            padding: 15px 20px;
            margin:5px;
        }
        
        #repassword{
            padding: 15px 25px;
            margin-left:20px;
        }
       
        #birth_yy,#birth_mm,#birth_dd{
            padding:10px 40px;
            margin:10px;
        }

        #man,
        #woman {
            padding: 20px 30px;
            margin: 10px;
            margin-left: 20px;
            font-weight:bold;
            font-size:15px;
            background-color: #fff;
            box-shadow: 0px;
            border-top-width:0.5px;
            border-bottom-width: 0.5px;
            border-left-width: 0.5px;
            border-right-width: 0.5px;
            outline:0px;
            cursor: pointer;
            
        }
     
        #selection {
            padding: 10px 20px;
            margin-left: 15px;
            border-radius: 0px;
            background: url(https://img.icons8.com/metro/26/000000/expand-arrow.png) no-repeat 95% 50;
           
        }
        
        #email_selection{
            padding: 10px 20px;
            margin-left: 15px;
            border-radius: 0px;
            background: url("https://img.icons8.com/metro/26/000000/expand-arrow.png") no-repeat 95% 50;
        }

        #jungbok {
            padding: 10px 20px;
            margin-left: 20px;
            font-weight:bold;
            font-size:15px;
            border-radius:5px;
            border-top-width:0.5px;
            border-bottom-width: 0.5px;
            border-left-width: 0.5px;
            border-right-width: 0.5px;
            background-color:darkgray;
        }

        .register_result>#btn01 {
            padding: 30px 80px;
            margin-left: 10px;
            margin-top: 30px;
            font-weight:bold;
            font-size:15px;

        }
        #btn01{
            font-weight:bold;
            font-size:15px;
            background-color: darkgray;
            box-shadow: 0px;
            border-radius:10px;
            border-top-width:0.5px;
            border-bottom-width: 0.5px;
            border-left-width: 0.5px;
            border-right-width: 0.5px;
            outline:0px;
            cursor: pointer; 
            width:300px;
            
        }
        .act{
            background-color:darkgray !important;
        }
    
        .act01{
            background-color:#fff;
        }
        /*footer맨 아래쪽*/
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <!--제이쿼리 부분 -->
    <script>
        $(document).ready(function(){
           var m_menu = $('.gnb>ul>li>a');
            
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
            
            $('#man').addClass('act');
            
            /*성별 바꾸기*/
             $('#man').click(function(){
             $('#man').removeClass('act act01');
            $('#woman').removeClass('act act01');
            
           $('#man').toggleClass('act act01');
                
          console.log("남");
    
        });
            
      $('#woman').click(function(){
           $('#man').removeClass('act act01');
            
            $('#woman').toggleClass('act act01');
            console.log("여");
          
           
        });
            
        
        $('#btn01').click(function(){
            /* var select=$('select[id=selection] option:checked').text();*/
            var names=$('input[id=cus_name]').val();
            var id=$('input[id=ids]').val();
             var foreign_option=  $('select[id=selection] option:checked').val();
            var password=$('input[id=passwords]').val();
            var repass=$('input[id=repassword]').val();
            var email=$('input[id=emails]').val();
             var EngregEx=/[a-zA-Z]/;
           var regEx=/^[A-Za-z]{1}[a-zA-Z0-9]{4,10}$/;
            var hangulreg=/^[가-힣]+$/;
            var passwordreg=/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/;
            var email_select=$('select[id=email_selection] option:checked').val();
            var year=$('select[id=birth_yy] option:checked').text();
            var month=$('select[id=birth_mm] option:checked').text();
             var day=$('select[id=birth_dd] option:checked').text();
            var email_result=$('input[id=email_result]').text();
            var birth_result=$('input[id=birth_result]').text();
           
            if(!names){
                alert('이름을 입력하세요');
                return false;
            }
            /*내국인 외국인 이름 판별(내국인:한글만 외국인:영어로만 입력*/
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
            if(names.length<2){
                alert('이름이 짧습니다.');
                return false;
            }
            if(!id){
                alert('아이디를 입력해주세요');
                return false;
            }
            if(!check(regEx,ids,"아이디는 4~10자의 영문 대소문자와 숫자로만 입력")) {
                return false;
             }   
            if(!password){
                alert('패스워드를 입력해주세요');
                return false;
            }
             if(!check(passwordreg,passwords,"패스워드는 6~10자의 영문 대소문자와 숫자로만 입력")) {
                return false;
             }   
            if(password.length<6){
            alert('패스워드가 너무 짧습니다.6자리 이상 입력해주세요');
            return false;
            }
            if(!repass){
                alert('패스워드를  재확인해주세요');
                return false;
            }
            if(!check(passwordreg,repassword,"패스워드는 6~10자의 영문 대소문자와 숫자로만 입력")) {
                return false;
             }  
            if(repass.length<6){
               alert('패스워드가 너무 짧습니다.6자리 이상 입력해주세요');
            return false;
            }
            if(password!=repass){
                alert('패스워드가 같지 않습니다.');
                return false;
            }
            if(!email){
                alert('이메일을 입력해주세요');
                return false;
            }
            if(!check(regEx,emails,"이메일이 올바르지 않습니다.")) {
                return false;
             }       
           email_result=email+"@"+email_select;
            birth_result=year+"/"+month+"/"+day;
           
            $('#birth_result').val(birth_result);
            $('#email_result').val(email_result);
          /*form.submit();*/
        
            
        });
            
            $('#jungbok').click(function(){
               var id_val=$('input[id=ids]').val();
                 var regEx=/^[A-Za-z]{1}[a-zA-Z0-9]{4,10}$/;
               if(!id_val){
                    alert('아이디를 입력해주세요');
                    return false;
               }
                if(!check(regEx,ids,"아이디는 4~10자의 영문 대소문자와 숫자로만 입력")) {
                return false;
             } 
                
               /*location.href='jungbok_check.php?id='+id_val;*/
                window.open('jungbok_check.php?id='+id_val,'','width=500,height=300');
            });
            
            
            /*한글,영어를 정규표현식으로 표현해 놓은 함수들 입니다.*/
             function check(regEx, what, message) {
            if(regEx.test(what.value)) {
                return true;
            }
            alert(message);
            what.value = "";
            what.focus();
       //return false;
        }
            
           function passwordcheck(passwordreg, what, message) {
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
        /*setDate함수는 생년월일인데 2월에서 2016년 2012년이면 29일 그외에는 28일로 인식하고 31일 30일도 인식이 됩니다. */
    </script>
  <script>
        function setDate(FORM, year, month, day) {

            var current, year, month, day, days, i, j;
            current = new Date();
            year = (year) ? year : current.getFullYear();
            for (i=120, j=year-119; i >=1; i--, j++) FORM.year.options[i] = new Option(j, j);
            month = (month) ? month : current.getMonth()+1;
        for (i=0; i < 12; i++) {
                j = (i < 9) ? '0'+(i+1) : i+1;
        FORM.month.options[i] = new Option(j, j);
        }
            day = (day) ? day : current.getDate();
            days = new Date(new Date(year, month, 1)-86400000).getDate();
        FORM.day.length = 0;
            for (i=0, j; i < days; i++) {
        j = (i < 9) ? '0'+(i+1) : i+1;
        FORM.day.options[i] = new Option(j, j);
        }
        FORM.year.value = year;
        FORM.month.options[month-1].selected = true;
        FORM.day.options[day-1].selected = true;
            
        }
    
    </script>
</head>

<body onLoad="setDate(document.forms[0])">
    <header>
        <nav class="gnb">
            <ul>
                <li><a href="index.php" title="">메인페이지</a></li>
                <li><a href="#mypage" title="" >마이페이지<i class="fas fa-angle-down"></i></a>
                    <ul class="sub">
                        <li><a href="#" title="" >예약조회</a></li>
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
                      
                        <li><a href="review_board.php" title="" >리뷰게시판</a></li>
                        <li><a href="question.php" title="" >자주하는질문</a></li>
                    </ul>
                </li>
                <li><a href="notice.php" title="">공지사항</a></li>
                <li><a href="login.php">로그인</a></li>
                <li><a href="register.php">회원가입</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <article class="register_visual">
            <div class="image">
                <img src="./j17/img/register_image.jpg" alt="">
            </div>
            <div class="register_site">
                <p>회원 가입</p>
            </div>
            <form action="register_result.php" method="get"  name="register_form">
                <div class="table">
                    <table>
                        <tbody>
                            <tr>
                                <td id="jemok">이름</td>
                                <td id="content"><input type="text" id="cus_name" name="name" maxlength="10">
                                    <input type="button" value="남" id="man">
                                    <input type="button" value="여" id="woman">

                                   <select name="foreign" id="selection">
                                        <option value="내국인">내국인</option>
                                        <option value="외국인" id="fore">외국인</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td id="jemok">아이디</td>
                                <td id="content"><input type="text" id="ids" name="id" maxlength="10">
                                    <input type="button" value="중복확인여부" id="jungbok">
                                </td>
                            </tr>
                            <tr>
                                <td id="jemok">비밀번호</td>
                                <td id="content"><input type="password" id="passwords" name="password" maxlength="10">
                                    <input type="password"  id="repassword" maxlength="10">
                                </td>
                            </tr>
                            <tr >
                                <td id="jemok">생년월일</td>
                                <td id="content">
                            
                <SELECT name="year" id="birth_yy" onChange="setDate(this.form, this.value, this.form.month.value)">
                </SELECT>년
                <SELECT name="month" id="birth_mm" onChange="setDate(this.form, this.form.year.value, this.value)">
                </SELECT>월
                <SELECT name="day" id="birth_dd"></SELECT>일
                <input type="hidden" id="birth_result" name="birth">
                                </td>
                    
                <tr>
                    <td id="jemok">이메일</td>
                    <td id="content"> <input type="text" id="emails" name="email_content" maxlength="10">&nbsp;&nbsp;&nbsp;@
                    <select name="email" id="email_selection">
                                        <option value="naver.com">naver.com</option>
                                        <option value="hanmail.com">hanmail.com</option>
                                        <option value="google.com">google.com</option>
                                        <option value="gmail.com">gmail.com</option>
                                    </select>
                    </td>
                    <input type="hidden" id="email_result" name="email_result">
                </tr>
                                
                </tbody>
                </table>
                </div>
                <div class="register_result">
                    <input type="submit" value="회원가입" id="btn01">
                </div>
            </form>
        </article>
    </section>

    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>
</body>

</html>
