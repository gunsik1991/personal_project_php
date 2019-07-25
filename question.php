<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>자주하는 질문</title>
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
        
        
    /*섹션부분*/
        section {
            position: relative;
            margin-top: 0px;
        }
        
        section {
            width: 100%;
            height: 1200px;
            margin-bottom: 40px;
            background-color:rgba(204,204,204,.8);
        }
        
       h2{
            position: absolute;
            font-size:50px;
           font-weight:bold;
           text-align: center; 
           width:600px;
           left:530px;
           top:150px;
           color:#000;
        }
          .question{
            width: 1000px;
            border-top:1px solid #333;
           /* border-bottom:1px solid #333;*/
            
        }
        .question>dl{
            margin-top:400px;
            margin-left:320px;
            width:100%;
        }
        /*질문서식*/
        .question>dl>dt{
            font-weight:bold;
            font-size: 10px 0px;
            margin: 25px 0px;
            cursor: pointer;
        }
        
        .question>dl>dt:before{ /*제목의 앞에 영역을 만듬*/
            content: "Q";
            color:#000;
            font-weight: bold;
            padding-right: 20px;
        }
        
        .question>dl>dt>i.fas{
            float:right;
            font-size: 20px;
            transform: rotate(0deg);
        }
        
        .question>dl>dd{
            background-color: #e6e5e5;
            margin:0px;
            padding:20px 10px;
            display:none; /*목록을 숨김*/
            
        }
        .question>dl>dd:before{
            content:"A";
            font-weight: bold;
            padding-right: 20px;
        }
     
        .line{
            background-color: #000;
            height: 1px;
            /*width:100%;*/
        }
        .acts{
            transform: rotate(180deg) !important;  /*중요한 서식일 경우*/
            /*transform-origin: bottom top;*/
        }
        .act{
            transform: rotate(180deg);
        }
    /*footer부분*/
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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
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
        
        $('dt').click(function(){
           $(this).find('i.fas').toggleClass('acts act');
            
            $(this).next().slideToggle().siblings('dd').find('i.fas').slideUp();
        });
    });
    </script>
</head>
<body>
   <?php
    session_start();
    if($_SESSION['id']==null){
        /*  echo "<script>alert((".$_SESSION['id'].") login);</script>";*/
    ?>
    <header>

        <nav class="gnb">
            <ul>
                <li><a href="index.php" title="">메인페이지</a></li>
                <li><a href="#mypage" title="" onclick="alert('로그인하여 주세요');">마이페이지<i class="fas fa-angle-down"></i></a>
                    <ul class="sub">
                        <li><a href="#" title="" onclick="alert('로그인하여 주세요');">예약조회</a></li>
                        <li><a href="#" title="" onclick="alert('로그인하여 주세요');">예약변경/취소</a></li>
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
                <li><a href="login.php">로그인</a></li>
                <li><a href="register.php">회원가입</a></li>
            </ul>

        </nav>
    </header>
    <?php
    }else{  
    ?>
    <form action="logout.php">
        <header>
        <?php $register_id=$_SESSION['id'];?>
            <nav class="gnb">
                <ul>
                    <li><a href="index.php" title="">메인페이지</a></li>
                    <li><a href="mypage.php?id='<?php echo $register_id ?>'" title="">마이페이지<i class="fas fa-angle-down"></i></a>
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
      <h2>FAQ 자주 하는 질문 목록</h2>
       <article class="question">
    <dl>
        <dt> 짐은 사전에 보낼 수 있습니까?<i class="fas fa-angle-down"></i></dt>
        <dd>사전에 호텔로 보내실 수 있습니다.
        받는 사람: 호텔 프랑크스 + 숙박자명 + 체크인 날짜</dd>
        <div class=line></div>
        <dt>회원가입은 어떻게 합니까?<i class="fas fa-angle-down"></i></dt>
        <dd>회원가입은 OO회원관리팀을 통해 가능합니다. 가입을 원하시는 고객께서는 아래 번호로 연락주시기 바랍니다.</dd>
          <div class=line></div>
        <dt>개인정보 수정은 어떻게 합니까?<i class="fas fa-angle-down"></i></dt>
        <dd>로그인 한 다음 마이페이지에 가셔서 비밀번호를 입력하고 개인정보를 수정해 주시면 됩니다.</dd>
          <div class=line></div>
        <dt>대여물품들은 어떤것들이 있습니까?<i class="fas fa-angle-down"></i></dt>
        <dd>호텔마다 다르니 고객님들의 해당하는 호텔에 문의하여 주시기바랍니다.</dd>
          <div class=line></div>
        <dt>호텔 내에 스파가 있습니까?<i class="fas fa-angle-down"></i></dt>
        <dd>호텔마다 다르니 고객님들의 해당하는 호텔에 문의하여 주시기바랍니다.</dd>
          <div class=line></div>
        <dt>가족 모임시 행사장 메뉴종류를 알고 싶습니다.<i class="fas fa-angle-down"></i></dt>
        <dd>가족 모임의 경우 다른 행사와 마찬가지로 인원에 따라 다양한 규모의 연회장이 준비되어 있으며 양식, 중식, 뷔페(50명 이상일 때 가능) 메뉴 중 선택 하실 수 있습니다. 가격은 인원 및 메뉴 종류에 따라 차이가 있으니 해당 호텔에 문의하여 주시기바랍니다. </dd>
          <div class=line></div>
        <dt>예약 취소는 언제 가능합니까?<i class="fas fa-angle-down"></i></dt>
        <dd>일반 예약은 체크인 1일전 15:00시 이전까지 연락 주시면 
    별도의 요금 지불 없이 취소 가능합니다만, 예약 조건에 따라 취소규정이 상이하므로 예약시
    확인 부탁드립니다.</dd>
          <div class=line></div>
        <dt>체크인과 체크아웃 시간은 언제입니까?<i class="fas fa-angle-down"></i></dt>
        <dd>호텔마다 다르니 고객님들의 해당하는 호텔에 문의하여 주시기바랍니다. </dd>
          <div class=line></div>
    </dl>
    </article>
    </section>
    
    <footer>
         <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>
</body>
</html>