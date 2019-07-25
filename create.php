<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>새글 작성</title>
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
            left:230px;
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
            height: 1500px;
            margin-bottom: 40px;
            /*  background-color:rgba(204,204,204,.8);*/
        }
         .image>img{
            height:400px;
            width:100%;
           /* margin-top:10px;*/
        }
        
         #new_board {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 1000px;
            position: absolute;
            top: 550px;
            left: 320px;
        }
        #new_board td,
        #new_board th {
            border: 2px solid #ddd;
            padding: 40px;
            
        }
        
        #new_board th {
            padding-top: 12px;
            padding-bottom: 15px;
            font-size:20px;
            
        }
        
         .btns {
            position: relative;
            left: 1300px;
            top: 200px;
        }

        #regist,#cancle,#back {
            background-color: black;
            border: none;
            font-weight: bold;
            color: white;
            width: 90px;
            padding:10px 20px;
            margin:5px;
            box-shadow: 50px;
            margin-bottom: 10px;
            margin-top:350px;
            
            cursor: pointer;
        }
        .buttons{
            margin-left:1000px;
            margin-top:500px;
        }
        
        #jemok,#password{
            padding:10px 20px;
        }
         #selection{
             padding: 10px 20px;
            cursor: pointer;
             
        }
        
       /*색션부분 종료*/
          /*footer부분시작*/
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
        
       


        /*footer부분 종료*/
    </style>
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
        
            $('#back').click(function(){
               location.href="review_board.php"; 
            });
            
          
        
            $('#regist').click(function(){
                var jemok=$('input[id=jemok]').val();
                var password=$('input[id=password]').val();
                var contents=$('textarea').val();
                 var select=$('select[id=selection] option:checked').val();
                if(!jemok){
                    alert('제목을 입력하세요');
                    return false;
                }
                if(!contents){
                    alert('내용을 입력하세요');
                    return false;
                }
                 if(select=='선택하세요'){
                    alert('항목을 선택하여 주세요 ');
                    return false;
                }
              /* location.href='create_check.php';*/
            });
    });
    </script>
</head>
<body>
   <?php
    session_start();
    if($_SESSION['id']==null){
         /* echo "<script>alert((".$_SESSION['id'].") login);</script>";*/
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
    <?php
    }else{  
    ?>
    <form action="logout.php">
     <header>

        <nav class="gnb">
            <ul>
                <li><a href="index.php" title="">메인페이지</a></li>
                <li><a href="#mypage" title="">마이페이지<i class="fas fa-angle-down"></i></a>
                    <ul class="sub">
                        <li><a href="#" title="" >예약조회</a></li>
                        <li><a href="#" title="" >예약변경/취소</a></li>
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
               <li> <a><?  
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
            <?php
         if($_SESSION['id']==null){
        echo "<script>alert('권한이 없습니다.');</script>";
        echo "<script>location.href='review_board.php';</script>";
    }else{
        ?>
        <?php
      
      include 'database_manager.php';
             
       $sql="select review_id,review_title,review_content from reviewboard where no='$page_no';";
        $result_modify=mysqli_query($mydb,$sql);
        $review_title=$_GET['review_title'];
        $review_content=$_GET['review_content'];
        $page_no=$_GET['no'];
        ?>
             <article id="create">
            <div class="image">
                <img src="./j17/img/board_hotel.jpg" alt="">
            </div>
             
              <?php if($review_title==null && $review_content==null){?>
             <form action="create_check.php" method="post" name="board_form">
            <div class="create_board">
              <table id="new_board">
                  <tr>
                      <th>제목</th><td><input type="text" size="45" maxlength="80" id="jemok" name="jemok"></td>
                  </tr>
                  <tr>
                      <th>내용</th>
                      <td><textarea cols="100" rows="20" maxlength="300" name="content" style="resize:none; overflow-y:auto"></textarea></td>
                  </tr>
                  <tr>
                    <th>게시판 종류</th>
                    <td> <select id="selection" name="selection">
                    <option>선택하세요</option>
                    <option value="리뷰게시판">리뷰게시판</option>
                </select></td>
                  </tr>
              </table> 
               </div>
                <div class="buttons">
               
                <input type="submit" value="등록" id="regist">
               
                <input type="reset" value="취소" id="cancle">
                <input type="button" value="뒤로가기" id="back">
               </div>
                  </form>   
              <?php }else{
          
                if($result_modify){
                    
                    echo "
                   <form action='modify_check.php?no=$page_no' method='post' name='board_form'>    
                    <div class='create_board'>
                  <table id='new_board'>
                  <tr>
                      <th>제목</th><td><input type='text' size='45' maxlength='80' id='jemok' name='jemok' value='$review_title'></td>
                  </tr>
                  <tr>
                      <th>내용</th>
                      <td><textarea cols='100' rows='20' maxlength='300' name='content' style='resize:none; overflow-y:auto'>$review_content</textarea></td>
                  </tr>
                  <tr>
                    <th>게시판 종류</th>
                    <td> <select id='selection' name='selection'>
                    <option>선택하세요</option>
                    <option value='리뷰게시판'>리뷰게시판</option>
                </select></td>
                  </tr>
              </table>
              </div>
              <div class='buttons'>
              
               <input type='submit' value='수정' id='regist'> 
                 <input type='reset' value='취소' id='cancle'>
                <input type='button' value='뒤로가기' id='back'>
              </div>
              </form>
                    ";
                ?>
               
            <?php }else{
                    echo "<script>alert('문제발생!!');</script>";
                }
        }?> 
                
                 
              
        </article>
        <?php
         }
        ?>
    </section>
    
     <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>
    
</body>
</html>