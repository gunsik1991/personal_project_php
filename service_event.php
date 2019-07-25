<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>진행중인 이벤트</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="quickpager2.jquery.js"></script>
    <style>
        html,body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            overflow-x: hidden;
            margin:0 auto;
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
            margin-top: -160px;
            width:100%;
        }

        section>article {
            width: 100%;
            height: 2000px;
            margin-bottom: 40px;
        }

        .act {
            position: fixed !important;
            background-color: black;
            height: 120px;
            top: 0px;
        }

        /*해더부분 종료*/
        /*색션부분 시작*/
       
        .image>img {
            height: 490px;
            width: 100%;
            margin-top: 80px;
        }

        h2 {
            position: absolute;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            left: 750px;
            top: 20%;
            color: #fff;
        }
        
        /*이벤트 콘텐츠부분*/
        .event_contents {
            width: 1810px;
            
            height:1070px;
           /* border: 1px solid #000;*/
            position: relative;
            margin-top: 180px;
           
            box-sizing: border-box;
            overflow: hidden;
            
        }

        .event_class {
            font-size: 20px;
            margin-left: 5%;
            position:relative;
            width:1500px;
        }

        .event>ul {
            background-color: gray;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .event_class>ul>li {
            float: left;
            width: 200px;
            height: 30px;
            margin-left: 350px;
            margin-top: -10px;
            padding: 8px;
            border: 1px solid #000;
            text-align: center;
            top:90px;
        }

        .event>ul;

        li a>img {
            height: 50px;
        }

        .event>ul>li>a {
            display: block;
            width: 100%;
            height: 80px;
            padding-top: 10px;
            box-sizing: border-box;
        }

        .event_class li.select {
            background-color: lightgray;
        }

        .event_class li.exit_select {
            background-color: #fff;
        }

        .act {
            display: block !important;
        }

        /*진행중인 이벤트 시작*/
        div>ul>li {
            float: left;
            width: 20px;
            height: 50px;
            position: relative;
            font-size: 20px;
            
            
        }

        div>ul>li img {
            
            padding: 10px;
            margin-top: 1px;
        }
        
        
       
         .customers p{
             background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            line-height: 30px;
            position: relative;
            width:100%;
            bottom: 0px;
            text-indent: 30px;
            transition: 0.5s; 
            text-align: center;
            font-size: 12px;
        }
       
        .customers td:hover p{
            bottom:33px;
        
        }
        /*진행중인 이벤트 사진크기 조절중*/
     
      
        /*----------*/
        ul.paging li {
            padding: 10px;
            background: #83bd63;
            font-family: georgia;
            font-size: 24px;
            color: #fff;
            line-height: 1;
            width: 180px;
            margin-bottom: 1px;
        }

        ul.pageNav li {
            display: block;
            floaT: left;
            padding: 14px;
            font-family: georgia;
        }

        ul.pageNav li a {
            color: #333;
            text-decoration: none;
        }

        li.currentPage {
            background: red;
            background: #b1b1b1;
            
        }

        ul.customers li.currentPage a {
            color: #fff;
        }

        table.customers {
           
           
            margin-left: 0px;
            margin-top:0px;
            width:80%;
            margin-left:2%;
        }
       

        table.customers td {
            border-collapse: collapse;
           
            height:40px;
            text-align: center;
            padding: 15px;
            font-size:15px;
            padding-top:3px;
            vertical-align: middle;
           
            
        }
       
        table.customers tr{
            background-color: #fff;
        }
        table.customers img{
            width:90%;
        }
        /*종료된 이벤트 테이블 객체*/
         ul.exit_customers li.currentPage a {
            color: #fff;
        }
           table.exit_customers {
            border-collapse: collapse;
          
            margin-left: 2%;
            margin-top:-70px;
            position:static;
            width:80%;
        }
       

        table.exit_customers td {
            border-collapse: collapse;
        
            height:40px;
            text-align: left;
            padding: 15px;
            font-size:15px;
            padding-top:3px;
            vertical-align: middle;
           /* width:100%;*/
           align-content: center;
            
        }
        
        table.exit_customers tr{
            background-color: #fff;
        }
         .exit_customers p{
             background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            line-height: 30px;
            position: static;
            width: 100%;
            bottom: 0px;
            text-indent: 30px;
            transition: 0.5s; 
             font-size:12px;
        }
       
        . exit_customers td:hover p{
            bottom:33px;
        
        }
        
        .exit_customers img{
            width:100%;
            align-content: center;
        }
         ul.exit_customers li.currentPage a {
            color: #fff;
        }
    
        table,
        div {
           /* display: block;*/
            clear: both;
            
        }
        table{
            width:1200px;
            position: absolute;
        }
        .pager{
            margin-top: 700px;
            font-size:20px;
           margin-left: 800px;
          position: absolute;
          width:280px;
        }
        .tabPage{
             margin-top: 700px;
            font-size:20px;
           margin-left: 900px;
          position: absolute;
          width:280px;
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
            
        /*-----------*/
        
        /*진행중인 이벤트 끝*/


        /*종료된 이벤트 시작*/
        .tabPage {
            display: none;
        }

        /*종료된 이벤트끝*/

        /*색션 종료*/
     
        /*footer*/
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

        /*footer*/
    </style>
   
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


            $(window).scroll(function() {
                var scrollmove = $(window).scrollTop();
                if (scrollmove >= 200) {
                    topbutton.fadeIn();
                    $('header').addClass('act');
                } else {
                    topbutton.fadeOut();
                    $('header').removeClass('act');
                }
            });

            /*--------------------------------------------*/


            $('.event_class li').click(function() {
                var index = $('.event_class li').index(this);
                console.log(index);

               $('.event_class li').removeClass('exit_select');
                $('.event_contents tbody').css('display', 'none');
                $('.event_contents tbody').eq(index).css('display', 'block');
                $('.event_contents .pager').css('display', 'none');
                $('.event_contents .pager').eq(index).css('display', 'block');
                 $('.event_contents .tabPage').css('display', 'none');
                $('.event_contents .tabPage').eq(index).css('display', 'block');
                $('.event_class li').removeClass('select');
                $('.event_class .select').css('background-color', '#fff');
                /*if(index==0){
                    $('.exit_select').css('background-color','#fff');
                }*/
                $(this).addClass('select');
            });


            $('.exit_event>a').click(function() {

                var index = $('.event_class li').index(this) + 2;
                console.log(index);
               
            
                $('.exit_select').css('background-color','lightgray');
                $('.event_class li').removeClass('select');
              
                $('.exit_customers tbody').css('display', 'none');
                $('.exit_customers tbody').eq(index).css('display', 'block');
                
                $('.event_class .exit_select').css('background-color', 'lightgray');

                $(this).addClass('exit_select');

            })/*.click(function(){
                $('.event_class .exit_select').css('background-color', 'lightgray');
                
                $('.event_class li').removeClass('select');

            });*/
            
              $('.customers tbody').quickPager({
                pageSize:2,
                naviSize: 3,
                currentPage: 1,
                holder: ".pager"
            });
            
            $('.exit_customers tbody').quickPager({
                 pageSize:2,
                naviSize: 3,
                currentPage: 1,
                holder: ".tabPage"
            });
            
            top.window.moveTo(0,0);
if (document.all) {
top.window.resizeTo(screen.availWidth,screen.availHeight);
}
else if (document.layers||document.getElementById) {
if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){
top.window.outerHeight = screen.availHeight;
top.window.outerWidth = screen.availWidth;
}
}
        
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
        <article class="event">
            <div class="image">
                <img src="./j17/img2/event0009.jpeg" alt="">
            <div class="jemok">
           <h2>이벤트</h2>
            </div>
            </div>
           

            <!--탭콘텐츠-->
           <div class="event_class">
                <ul>
                    <li class="select"><a href="
                     #" onclick="return false;">진행중인 이벤트</a>
                    </li>
                    <li class="exit_select"><a href="#" onclick="return false;">종료된 이벤트</a>
                    </li>
                </ul>
            </div>


            <!--진행중인 이벤트 종료된 이벤트 내용이 출력-->

           <div class="event_contents">
 
            <form action="" method="post" name="board">
            
                <table border="0"  cellpadding="3" cellspacing="3" class="customers">
                 
            
                    <tbody>
                       <tr>
                           <td>
                            <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel001.png" alt="">
                                <p>xx호텔 20%특가 할인 싱글패키지 2019년 6월 4일~2019년 7월 15일 </p>
                            </a>   
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel002.png" alt="">
                                <p>★★호텔 30%특가 가족패키지 조식 무료 2019년 6월 10일~2019년 8월 30일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel003.png" alt="">
                                <p>ㅁㅁ호텔 40%특가 할인 싱글,커플패키지 2019년 6월 8일~2019년 8월 15일</p>
                            </a>
                           </td>
                            
                       </tr>
                       <tr>
                           <td>
                            <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel004.png" alt="">
                                <p>@@호텔 50%특가 할인 싱글패키지 2019년 6월 6일~2019년 7월 18일 </p>
                            </a>   
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel005.png" alt="">
                                <p>ㄷㄷ호텔 30%특가 가족패키지  2019년 6월 12일~2019년 8월 23일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 10%특가 할인 커플패키지 2019년 6월 9일~2019년 7월 5일</p>
                            </a>
                           </td>
                           
                       </tr>
                   
                        <tr>
                             <td>
                            <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel008.png" alt="">
                                <p>**호텔 40%특가 할인 싱글,가족패키지 2019년 5월 30일~2019년 7월 1일 </p>
                            </a>   
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel009.png" alt="">
                                <p>※※호텔 50%특가 가족패키지 조식 무료 2019년 6월 19일~2019년 8월 13일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel010.png" alt="">
                                <p>■■호텔 30%특가 할인 싱글,커플패키지 2019년 6월 8일~2019년 8월 15일</p>
                            </a>
                           </td>
                        </tr>
                           <tr>
                             <td>
                            <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel011.png" alt="">
                                <p>◆◆호텔 20%특가 할인 여름방학 2019년 7월 15일~2019년 8월 15일 </p>
                            </a>   
                           </td>
                          <!-- <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel003.png" alt="">
                                <p>★★호텔 30%특가 가족패키지 조식 무료 2019년 6월 10일~2019년 8월 30일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel003.png" alt="">
                                <p>ㅁㅁ호텔 10%특가 할인 싱글,커플패키지 2019년 6월 8일~2019년 8월 15일</p>
                            </a>
                           </td>-->
                        </tr>
                                         
                    </tbody>
              
                </table>
            </form>
             <div class="pager"></div>
               <table border="0" width="400" cellpadding="3" cellspacing="3" class="exit_customers">
                 
            
                    <tbody>
                       <tr>
                           <td>
                          <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel003.png" alt="">
                                <p>ㅁㅁ호텔 10%특가 할인 싱글,커플패키지 2019년 3월 4일~2019년 5월 15일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel012.png" alt="">
                                <p>BB호텔 20%특가 할인 싱글,커플패키지 2019년 4월 15일~2019년 5월 25일</p>
                            </a>
                           </td>
                           <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                           <!--test-->
                       </tr>
                      <!-- <tr>
                            <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                            <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                            <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                       </tr>
                       <tr>
                            <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                            <td>
                               <a href="#" title="" onclick="return false;">
                                <img src="./j17/event_img/hotel007.png" alt="">
                                <p>OO호텔 30%특가 할인 싱글,커플패키지 2019년 5월 1일~2019년 6월 2일</p>
                            </a>
                           </td>
                       </tr>-->
                  </tbody>
                  
                  </table>
                 <div class="tabPage">
                </div>
            </div>
                      
        </article>
    </section>
    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>
</body></html>