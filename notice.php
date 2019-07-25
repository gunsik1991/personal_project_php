<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel-자유 게시판</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="quickpager2.jquery.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
 
        $(document).ready(function() {
            $(".customers tbody").quickPager({
                pageSize: 5,
                naviSize: 3,
                currentPage: 1,
                holder: ".pager"
            });
            
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
            
               $('#create').click(function(){
                location.href="create.html";
                   
            });
            
            $('.btns>#search').click(function(){
               var info=$('input[id=search_text]').val();
                var select=$('select[id=selection] option:checked').val();
                console.log(select);
                if(!info){
                    alert('검색어를 입력해 주세요');
                    return;
                }
                if(select=='선택하세요'){
                    alert('항목을 선택하여 주세요 ');
                    return;
                }
                alert('이부분은 게시판 백엔드 페이지 입니다.');
               
            
            });
        });

        /* ]]> */
    </script>
   <style type="text/css">
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

        /*해더부분 종료*/

        /*색션부분시작*/
        /* #board{
            height:100vh;
        }*/
        section {
            position: relative;
            margin-top: 0px;
        }

        section {
            width: 100%;
            height: 1200px;
            margin-bottom: 40px;
            /*  background-color:rgba(204,204,204,.8);*/
        }

        .image>img {
            height: 400px;
            width: 100%;
            /* margin-top:10px;*/
        }

        p {
            position: absolute;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            left: 680px;
            top: 180px;
            color: #fff;
            width:400px
        }

        /*게시판 버튼 및 검색 기능 */
        .btns {
            position: relative;
            left: 1310px;
            top: 213px;
        }

        .btns input[type="button"] {
            background-color: black;
            border: none;
            color: white;
            width: 100px;
            padding: 10px 20px;
            margin: 8px;
            box-shadow: 50px;
            margin-bottom: 10px;
            margin-top:20px;
            cursor: pointer;
        }

        .search {
            position: absolute;
            top: 610px;
            left: 920px;
            width:400px;
        }

        #selection {
            padding: 10px 30px;
            cursor: pointer;

        }

        #search_text {
            position: relative;
            bottom: 3.0px;
            padding: 10px;
            margin: 22px;
            border: 10px 25px;
            top: 0.5px;
        }


        p {
            margin-bottom: 1px;
            margin-top: 0px;
        }

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
            border-collapse: collapse;
            border: 2px solid #ccc;
            margin-left: 30px;
            margin-top:250px;
            
        }
       

        table.customers td {
            border-collapse: collapse;
            border: 1px solid #ccc;
            height:40px;
            text-align: center;
            padding: 1px;
            font-size:15px;
            padding-top:3px;
            vertical-align: middle;
            
        }
        
        table.customers th{
            background-color: gray;
            font-weight: bold;
            color:#fff;
            font-size:13px;
            padding:8px;
        }
        
        table.customers tr{
            background-color: #fff;
        }
        
        table.customers tr:hover{
            background-color: #e2e2e2;
        }

        table,
        div {
           /* display: block;*/
            clear: both;
            
        }
        table{
            width:1500px;
            position: absolute;
        }
        .pager{
            margin-top: 560px;
            font-size:20px;
           margin-left: 800px;
          position: absolute;
          width:1000px;
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
        <article id="board">
            <div class="image">
                <img src="./j17/img/hotel007.jpg" alt="">
            </div>
            <div class="con_list">
                <p>공지 사항</p>
            </div>
            <div class="btns">
                <input type="button" value="검색" id="search">
               <!-- <input type="button" value="삭제" id="delete">
                <input type="button" value="글작성" onclick="addInsert()" id="create">-->
            </div>

            <div class="clear"></div>
            <form action="" method="post" name="board">
                <div class="search">
                    <select id="selection">
                        <option>선택하세요</option>
                        <option>회원아이디</option>
                        <option>제목</option>
                    </select>

                    <input type="text" id="search_text">
                </div>
                <table border="0" width="400" cellpadding="3" cellspacing="3" class="customers">
                   <thead>
                         <tr>
                            <th width="5">
                                <input type="checkbox">
                            </th>
                            <th>No</th>
                            <th>회원아이디</th>
                            <th>제목</th>
                            <th>날짜</th>
                            <th>Info</th>
                        </tr>
                   </thead>
            
                    <tbody>
                       
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>8</td>
                            <td>admin001</td>
                            <td>호텔 불편사항에 대한 개선점들</td>
                            <td>2019-04-29</td>
                            <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>7</td>
                            <td>admin001</td>
                            <td>경기도 호텔 일부 공사예정 목록</td>
                            <td>2019-04-25</td>
                            <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>6</td>
                            <td>admin001</td>
                            <td>서비스 업데이트 점검 진행에 대한 안내</td>
                            <td>2019-04-20</td>
                            <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>5</td>
                            <td>admin001</td>
                            <td>특가 진행에 대한 오류알림</td>
                            <td>2019-04-17</td>
                            <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>4</td>
                            <td>admin001</td>
                            <td>서비스 사항 변경안내</td>
                            <td>2019-04-16</td>
                           <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>3</td>
                            <td>admin001</td>
                            <td>고객센터에 대한 개선점</td>
                            <td>2019-04-15</td>
                           <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>2</td>
                            <td>admin001</td>
                            <td>강원도 호텔 숙박 예약에 대한 안내</td>
                            <td>2019-04-15</td>
                          <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>1</td>
                            <td>admin001</td>
                            <td>이용시 주의사항</td>
                            <td>2019-04-15</td>
                            <td>
                                <input type="button" value="상세보기" style="border: none; background-color: #B1B1B1; color: white; width: 100%; height: 41px;" onclick="infoShow()" />
                            </td>
                        </tr>
                        
                       

                    </tbody>

                </table>
                <div class="pager"></div>
            </form>
        </article>
    </section>

    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>

</body></html>
