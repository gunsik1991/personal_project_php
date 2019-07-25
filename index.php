<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>숙박사이트 메인페이지 구현</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- <script src="//code.jquery.com/jquery.min.js"></script>-->

    <!-- <link rel="stylesheet" href="./j17/css/trip_modal.css" type="text/css">-->
    <style>
        /*해더영역의 슬라이드 css*/
        html,
        body {
            overflow-x: hidden;
            margin: 0;
        }

        header {
            width: 1950px;
            height: 150px;
            position: relative;
            z-index: 9999;
            transition: 0.8s;

        }

        .gnb {
            position: absolute;
            right: 40px;
            top: 60px;
            left:300px;
            width: 1700px;

        }

        .gnb>ul {}

        .gnb>ul>li {
            float: left;
            margin: 0px 12px;
        }

        .gnb>ul>li>a {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
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
        }

        section>article {
            width: 100%;
            height: 800px;
            margin-bottom: 50px;
            background-color: lightgray;
        }

        #visual {
           /* height: 100vh;*/
            overflow: hidden;
            position: relative;
             
        }

        #visual img {
            width: 100%;
            position: absolute;
            
        }

        .act_index {
            z-index: 1500 !important;
        }

        .slide>img:nth-child(2) {
            z-index: 500;
        }

        .slide>img:nth-child(3) {
            z-index: 300;
        }

        #visual>i.fas {
            position: absolute;
            top: 50%;
            font-size: 48px;
            padding: 10px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
            z-index: 1600;
        }

        #visual>i.fa-angle-right {
            right: 0px;
        }

        /*슬라이드 안쪽 검색창 */
        .search_in {
            position: absolute;
            width: 1100px;
            height: 90px;
            bottom: 45px;
            left: 20%;
            z-index: 1500;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .search_in>ul>li {
            display: inline-block;
            padding: 0px 6px;
            color: #fff;
        }

        .search_in>ul {
            margin-top: 18px;
        }

        #search_num,
        #adult_num,
        #children_num {
            position: relative;
            width: 40px;
            /* 너비설정 */
            border: 1px solid #999;
            /* 테두리 설정 */
            z-index: 1;
            border-radius: 2px;
            /* iOS 둥근모서리 제거 */
            padding-bottom: 4px;
            text-align: center;
        }

        .label {
            font-size: 15px;
            text-align: center;
        }

        #local {
            position: relative;
            width: 60px;
            text-align: center;
            border: 1px solid #999;
            border-radius: 4px;
            z-index: 1;
            padding-bottom: 10px;
            margin: 10px;
        }

        /* #fromDate,#toDate{
             width:100px;
             border-radius:4px;
             border:2px solid #000;
         }*/
        #search {
            padding: 10px 40px;
            background-color: bisque;
            border-radius: 2px;
            /*float: right;*/

        }

        #datepicker1,
        #datepicker2 {}

        /*컨트롤 버튼 영역*/
        .circle_btn {
            position: absolute;
            vertical-align: bottom;
            bottom: 10px;
            left: 50%;
            color: black;
            z-index: 1500;
        }

        .circle_btn>li {
            display: inline-block;
            margin: 0px 4px;
        }

        .circle_btn>li>i.fas {
            font-size: 15px;
            color: #fff;
            cursor: pointer;
        }

        .on {
            color: black !important;
        }

        /*맨 아래쪽*/
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

        footer>i.fas {
            font-size 30px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px 10px;
            position: fixed;
            right: 20px;
            bottom: 100px;
            cursor: pointer;
        }

        footer>.top_picture {
            width: 70px;
            bottom: 100px;
            cursor: pointer;
            padding: 5px 10px;
            position: fixed;
            right: 20px;
        }


        .act {
            position: fixed !important;
            background-color: black;
            height: 150px;
            top: 0px;
        }

        /*--------추천여행지 두번째 구간--------------*/
        h2 {
            text-align: center;
            font-size: 40px;
            
        }

        #trip_picture {
            width: 1600px;
            margin: 0px auto;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        #trip_picture>ul>li {
            float: left;
            width: 500px;
            height: 330px;
            position: relative;
            overflow: hidden;
        }

        #trip_picture>ul>li img {
            width: 100%;
            padding: 15px;
            margin-top: 1px;
        }

        #trip_picture li:hover p {
            bottom: 0px;
        }

        #trip_picture p {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            line-height: 30px;
            position: absolute;
            width: 100%;
            bottom: -40px;
            text-indent: 18px;
            transition: 0.5s;
            left: 3%;
        }

        /*이벤트 단 */
        .events {
            border: 3px solid #000;
            width: 400px;
            height: 200px;
            margin: 0px auto;
            position: relative;
            float: left;
            top: 100px;
            overflow: hidden;
            margin-left: 1020px;
        }

        .event_picture {
            width: 2160px;

        }

        .event_picture>div {
            float: left;
            width: 400px;
            height: 300px;
            margin-top: 0px;

        }

        .event_picture>div>img {
            width: 100%;
        }

        i.far {
            font-size: 30px;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            position: absolute;
            margin-top: 80px;
        }

        i.fa-arrow-alt-circle-left {
            left: 0px;
        }

        i.fa-arrow-alt-circle-right {
            right: 0px;
        }

        /*결제 이벤트 슬라이드 구현 css*/
        .pay_event {
            border: 2px solid #000;
            width: 207px;
            height: 220px;
            margin: 10px auto;
            position: absolute;
            float: right;
            margin-right: 420px;
            margin-top: -200px;
            margin-left: 1070px;
            overflow: hidden;
            z-index: 999;

        }

        .picture_tool {
            margin-left: 1080px;
            margin-top: 17px;
            width: 1280px;

        }

        i.second_left,
        i.second_right {
            color: #000;
            margin-top: 10px;
            position: static;
            cursor: pointer;
            margin-right: 0px;
        }

        i.fa-play-circle,
        i.fa-pause-circle {
            font-size: 30px;
            padding: 5px;
            position: static;
            cursor: pointer;
        }

        .pay_picture {
            width: 1200px;
        }

        .pay_picture>div {
            float: left;
            width: 227px;
            height: 213px;
            margin-top: 0px;
        }

        .pay_picture>div>img {
            width: 100%;
        }


        /*탭메뉴 콘텐츠 단 이벤트 구현*/
        .tab_wrap {
            width: 2000px;
            height: 490px;
            margin: 0px auto;
            margin-left: 120px;
            margin-top: 80px;
        }

        .tab_wrap>ul {
            width: 0%;
            height: 0%;
            position: relative;
            /*div박스를 배치하기 위한 기준을 정함*/
        }

        .tab_wrap>ul>li>a img {

            width: 180px;
            height: 120px;
            left: 0px;
            margin-top: -59px;

        }

        .tab_wrap>ul>li>a {
            /* display:block;*/
            height: 120px;
            padding-top: 126px;
            box-sizing: border-box;
            /*전체크기에 패딩, 테두리값을 포함하여 계산*/


        }

        .tab_content {
            position: absolute;
            top: 60px;
            left: 200px;
            display: none;
        }

        .tab_content>a>img {
            width: 580px;
            height: 500px;
            margin-top: 5px;

        }

        .activity {
            display: block !important;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
        moveTo(0, 0);
        resizeTo(1024,768);
        top.window.moveTo(0, 0);
        if (document.all) {
            top.window.resizeTo(screen.availWidth, screen.availHeight);
        } else if (document.layers || document.getElementById) {
            if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                top.window.outerHeight = screen.availHeight;
                top.window.outerWidth = screen.availWidth;
            }
        }

    </script>
    <script>
        $(document).ready(function() {

            var m_menu = $('nav>ul>li>a');
            var topbutton = $('footer>.top_picture');
            var gnb_menu = $('nav>ul>li:nth-child(3)');
            $('#fromDate').datepicker({
                /*showOn: "both",                     // 달력을 표시할 타이밍 (both: focus or button)
                   
                    buttonImageOnly : true,             // 버튼 이미지만 표시할지 여부
                    buttonText: "날짜선택",  */ // 버튼의 대체 텍스트
                dateFormat: "yy-mm-dd", // 날짜의 형식
                changeMonth: true, // 월을 이동하기 위한 선택상자 표시여부
                minDate: 0, // 선택할수있는 최소날짜, ( 0 : 오늘 이전 날짜 선택 불가)
                onClose: function(selectedDate) {
                    // 시작일(fromDate) datepicker가 닫힐때
                    // 종료일(toDate)의 선택할수있는 최소 날짜(minDate)를 선택한 시작일로 지정
                    $("#toDate").datepicker("option", "minDate", selectedDate);
                }
            });

            //종료일
            $('#toDate').datepicker({
                /*showOn: "both", 
                buttonImage: "images/calendar.gif", 
                buttonImageOnly : true,
                buttonText: "날짜선택",*/
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                minDate: 0, // 오늘 이전 날짜 선택 불가
                maxDate: 30,
                onClose: function(selectedDate) {
                    // 종료일(toDate) datepicker가 닫힐때
                    // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
                    $("#fromDate").datepicker("option", "maxDate", selectedDate);
                }
            });

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

            gnb_menu.click(function() {
                $('html,body').animate({
                    'scrollTop': $('#trip').offset().top
                }, 500);
            });


            topbutton.hide();

            $(window).scroll(function() {
                var scrollmove = $(window).scrollTop();
                if (scrollmove >= 700) {
                    topbutton.fadeIn();
                    $('header').addClass('act');
                } else {
                    topbutton.fadeOut();
                    $('header').removeClass('act');
                }
            });

            topbutton.click(function() {
                $('html,body').animate({
                    scrollTop: '0px'
                }, 500);
            });


            $('#visual').css('height', $('.slide img').height());

            $(window).resize(function() {
                $('#visual').css('height', $('.slide img').height());
            });


            var circle_btn = $('.circle_btn li i.fas');

            var num = $('.circle_btn li').index() - $('.circle_btn li').index(); //초기값0

            function autoMove() {
                $('.slide img').eq(num).stop().fadeOut();

                circle_btn.removeClass('on');

                if (num == 3) {
                    num = 0;
                    $('.slide img').eq(num).stop().fadeIn();
                } else {
                    num++;
                    $('.slide img').eq(num).stop().fadeIn();
                }
                circle_btn.eq(num).addClass('on');
            }

            function autoMove2() {
                $('.slide img').eq(num).stop().fadeOut();
                circle_btn.removeClass('on');
                if (num == 0) {
                    num = 3;
                    $('.slide img').eq(num).stop().fadeIn();
                } else {
                    num--;
                    $('.slide img').eq(num).stop().fadeIn();
                }
                circle_btn.eq(num).addClass('on');
            }

            var time = setInterval(autoMove, 3000);

            $('i.fa-angle-left,i.fa-angle-right,.circle_btn li').hover(function() {
                clearInterval(time);
            }, function() {
                time = setInterval(autoMove, 3000);
            });

            $('i.fa-angle-right').click(function() {
                autoMove();
            });

            $('i.fa-angle-left').click(function() {
                autoMove2();
            });

            $('.circle_btn li').click(function() {
                num = $(this).index();
                console.log(num);

                $('.slide img').stop().fadeOut();

                $('.slide img').eq(num).stop().fadeIn();

                circle_btn.removeClass('on');
                circle_btn.eq(num).addClass('on');
            });

            /*진행중인 이벤트 소형 이미지슬라이드 및 이벤트 기능 구현*/
            var tabmenu = $('.tab_wrap>ul>li>a');
            var tabcontents = $('.tab_wrap>ul>li div');
            $('.box01').addClass('activity');

            tabmenu.addClass('activity');
            tabmenu.click(function() {

                tabcontents.removeClass('activity');
                $(this).next().addClass('activity');
            });


            /*이벤트 단 소형 이미지 슬라이드 기능 구현*/
            var smallSlide = $('.event_picture');

            $('.event_picture>div:last-child').insertBefore('.event_picture>div:first-child');

            smallSlide.css('margin-left', '-400px');

            function leftmove() {
                smallSlide.animate({
                    'margin-left': '-800px'
                }, 500, function() {

                    $('.event_picture>div:first-child').insertAfter('.event_picture>div:last-child');

                    smallSlide.css('margin-left', '-400px');
                });
            }

            var Timer = setInterval(leftmove, 5000);

            function rightmove() {
                smallSlide.animate({
                    'margin-left': '0px'
                }, 500, function() {

                    $('.event_picture>div:last-child').insertBefore('.event_picture>div:first-child');

                    smallSlide.css('margin-left', '-400px');
                });
            }

            var leftbutton = $('i.banner_left');
            var rightbutton = $('i.banner_right');

            $('i.far').hover(function() {
                clearInterval(Timer);
            }, function() {
                Timer = setInterval(leftmove, 3000);
            });

            leftbutton.click(function() {

                leftmove();
            });

            rightbutton.click(function() {

                rightmove();
            });

            /*검색 폼 경고창*/
            $('#search').click(function() {
                var checkin = $('#fromDate').val();
                var checkout = $('#toDate').val();
                /*console.log(checkin);
                console.log(checkout);*/
                if (!checkin) {
                    alert('체크인 날짜를 선택하여 주세요');
                    return;
                }
                if (!checkout) {
                    alert('체크아웃 날짜를 선택하여 주세요');
                    return;
                }
                alert('개인프로젝트에 한계가 있는 부분입니다. 이 부분은 빅데이터 크롤링이 필요합니다.');
            });


            /*결제 이벤트 제이쿼리 구현*/
            var event_slide = $('.pay_picture');
            var event_circle_btn = $('.circle_btn_event li i.far');
            var num_index = $('circle_btn_event li').index() - $('circle_btn_event li').index();
            console.log(num_index);
            event_circle_btn.removeClass('on');


            $('.pay_picture>div:last-child').insertBefore('.pay_picture>div:first-child');

            event_slide.css('margin-left', '-227px');

            function rightmoving() {
                event_slide.animate({
                    'margin-left': '-227px'
                }, 500, function() {
                    $('.pay_picture>div:first-child').insertAfter('.pay_picture>div:last-child');
                });

                event_slide.css('margin-left', '-227px');
            }

            var timing = setInterval(rightmoving, 5000);

            function leftmoving() {
                event_slide.animate({
                    'margin-right': '0px'
                }, 500, function() {
                    $('.pay_picture>div:last-child').insertBefore('.pay_picture>div:first-child');

                    event_slide.css('margin-left', '-227px');
                });
            }

            var leftbtn = $('.picture_tool>i.second_left');
            var rightbtn = $('.picture_tool>i.second_right');

            leftbtn.click(function() {

                leftmoving();

            });

            rightbtn.click(function() {

                rightmoving();
            });

            function automoving() {
                /* $('.pay_picture img').eq(num_index).stop().fadeOut();*/

                event_circle_btn.removeClass('on');

                if (num_index == 3) {
                    num_index = 0;
                    /*  $('.pay_picture img').eq(num_index).stop().fadeIn();*/
                } else {
                    num_index++;
                    /* $('.pay_picture img').eq(num_index).stop().fadeIn();*/
                }
                event_circle_btn.eq(num_index).addClass('on');
            }

            function automoving2() {
                /* $('.pay_picture img').eq(num_index).stop().fadeOut();*/

                event_circle_btn.removeClass('on');

                if (num_index == 0) {
                    num_index = 3;
                    /* $('.pay_picture img').eq(num_index).stop().fadeIn();*/
                } else {
                    num_index--;
                    /* $('.pay_picture img').eq(num_index).stop().fadeIn();*/
                }
                event_circle_btn.eq(num_index).addClass('on');
            }


            $('.picture_tool>i.fa-play-circle').click(function() {
                timing = setInterval(rightmoving, 5000);

            });

            $('.picture_tool>i.fa-pause-circle').click(function() {

                clearInterval(timing);
            });

            /*-----------------JQuery END--------------------*/

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
        <article id="visual">
            <div class="slide">
                <img src="./j17/img/room1.jpeg" alt="" class="act_index">
                <img src="./j17/img/restaurant.jpeg" alt="">
                <img src="./j17/img/room2.jpeg" alt="">
                <img src="./j17/img/room3.jpeg" alt="">

            </div>
            <i class="fas fa-angle-left"></i>
            <i class="fas fa-angle-right"></i>

            <form action="search_result.jsp" name="search">
                <div class="search_in">
                    <ul>
                        <li class="label">지역
                            <select name="search_local" id="local">
                                <option value="서울">서울</option>
                                <option value="경기">경기</option>
                                <option value="강원">강원</option>
                                <option value="충북">충북</option>
                                <option value="충남">충남</option>
                                <option value="전북">전북</option>
                                <option value="전남">전남</option>
                                <option value="경북">경북</option>
                                <option value="경남">경남</option>
                                <option value="제주">제주</option>
                            </select>
                        </li>
                        <li class="label">체크인</li>
                        <li> <input type="text" id="fromDate" readonly></li>
                        <li class="label">체크아웃 </li>
                        <li><input type="text" id="toDate" readonly></li>
                        <li class="label">객실 수
                            <select name="search_num" id="search_num">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </li>
                        <li class="label">성인
                            <select name="adult_num" id="adult_num">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9~</option>
                            </select>
                        </li>
                        <li class="label">14세이하
                            <select name="children_num" id="children_num">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </li>
                        <li class="label"><input type="button" value="검색" id="search"></li>
                    </ul>
                </div>
            </form>

            <ul class="circle_btn">
                <li><i class="fas fa-circle on"></i></li>
                <li><i class="fas fa-circle"></i></li>
                <li><i class="fas fa-circle"></i></li>
                <li><i class="fas fa-circle"></i></li>
            </ul>
        </article>

        <article id="trip">
            <h2>추천여행지</h2>
            <div id="trip_picture">
                <ul>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/seoul.jpg" alt="">
                            <p>서울</p>
                        </a></li>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/pusan.jpg" alt="">
                            <p>부산</p>
                        </a></li>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/kyungju.jpg" alt="">
                            <p>경주</p>
                        </a></li>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/kangwon.jpg" alt="">
                            <p>강원</p>
                        </a></li>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/jeju.jpg" alt="">
                            <p>제주</p>
                        </a></li>
                    <li><a href="#" title="" onclick="return false;">
                            <img src="./j17/img2/chungnam.jpg" alt="">
                            <p>충남</p>
                        </a></li>
                </ul>
            </div>
        </article>
        <article class="event">
            <h2>현재 진행중인 이벤트</h2>
            <article class="events">
                <div class="event_picture">
                    <div><img src="./j17/event_img/banner01.jpg" alt=""></div>
                    <div><img src="./j17/event_img/banner02.jpg" alt=""></div>
                    <div><img src="./j17/event_img/banner03.jpg" alt=""></div>
                </div>
                <i class="far fa-arrow-alt-circle-left banner_left"></i>
                <i class="far fa-arrow-alt-circle-right banner_right"></i>
            </article>

            <article class="tab_wrap">
                <!--  ul>li*5>a[href=# title=도움말]+div.tab_content-->
                <ul>
                    <li>
                        <a href="#" title="20%특가" onclick="return false;"><img src="./j17/event_img/twe.jpg" alt=""></a>
                        <div class="tab_content box01"><a href="service_event.php"><img src="./j17/event_img/hotel001.png" alt=""></a></div>
                    </li>
                    <li>
                        <a href="#" title="30%특가" onclick="return false;"><img src="./j17/event_img/thr.jpg" alt=""></a>
                        <div class="tab_content box02" onclick="return false;"><a href="service_event.php"><img src="./j17/event_img/hotel002.png" alt=""></a></div>
                    </li>
                    <li>
                        <a href="#" title="40%특가" onclick="return false;"><img src="./j17/event_img/for.jpg" alt=""></a>
                        <div class="tab_content box03" onclick="return false;"><a href="service_event.php"><img src="./j17/event_img/hotel003.png" alt=""></a></div>
                    </li>
                    <li>
                        <a href="#" title="50%특가" onclick="return false;"><img src="./j17/event_img/fift.jpg" alt=""></a>
                        <div class="tab_content box04" onclick="return false;"><a href="service_event.php"><img src="./j17/event_img/hotel004.png" alt=""></a></div>
                    </li>

                </ul>
            </article>
            <!--소형이미지 슬라이드 -->

            <article class="pay_event">

                <div class="pay_picture">
                    <div><img src="./j17/event_img/pay_event01.jpg" alt=""></div>
                    <div><img src="./j17/event_img/pay_event02.jpg" alt=""></div>
                    <div><img src="./j17/event_img/pay_event03.jpg" alt=""></div>
                    <div><img src="./j17/event_img/pay_event04.jpg" alt=""></div>
                </div>
            </article>
            <div class="picture_tool">
                <i class="far fa-arrow-alt-circle-left second_left"></i>
                <i class="far fa-arrow-alt-circle-right second_right"></i>
                <i class="fas fa-play-circle"></i>
                <i class="fas fa-pause-circle"></i>
            </div>
        </article>

    </section>

    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
        <!--<i class="fas fa-angle-up"></i>-->
        <img src="./j17/img/top.jpg" alt="" class="top_picture">
    </footer>
</body>

</html>
