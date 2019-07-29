<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시판 상세보기</title>
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
        
    
        .btn_box{
            margin-left:900px;
        }
        .btn_box>a{
             background-color: black;
            border: none;
            color: white;
            width: 100px;
            padding: 15px 12px;
            margin: 15px;
            box-shadow: 50px;
            margin-bottom: 10px;
            margin-top:50px;
            margin-left:0px;
            cursor: pointer;
            display:inline-block;
            text-align: center;
        }
        /*상세보기 시작*/
        .create_board{
            margin-left:300px;
            margin-top:90px;
        }
        
        input[type="text"]{
            height:40px;
            border 2px solid #000;
        }
        input[type="text"],textarea{
            margin:10px;
        }
        textarea{
            width:600 400px;
        }
       
        /*상세보기 끝*/
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
            
        
        $('#menu').click(function(){
           location.href='review_board.php'; 
        });
        
        $('#modify').click(function(){
           location.href=''; 
        });
        
       
        
        


    });
    </script>
</head>
<body>
       <?php
    session_start();
    if($_SESSION['id']==null){
         echo "<script>alert('권한이 없습니다.'); location.href='review_board.php';</script>";
    ?>
    <header>

        <nav class="gnb">
            <ul>
                <li><a href="index.php" title="">메인페이지</a></li>
                <li><a href="#mypage" title="" >마이페이지<i class="fas fa-angle-down"></i></a>
                    <ul class="sub">
                        <li><a href="#" title="">예약조회</a></li>
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
                <li><a href="mypage.php?id=<? echo $register_id?>" title="">마이페이지<i class="fas fa-angle-down"></i></a>
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
    <?php
 $result_id=$_SESSION['id'];
 
 $result_jemok=htmlspecialchars($_POST['review_content']);
    include 'database_manager.php';
    /*get으로 데이터베이스 값을 가져오는 변수*/
 $page_no=$_GET['no'];   
 $review_id=$_GET['id'];
 $review_title=$_GET['review_title'];
 $review_content=($_GET['review_content']);
    $sql="select review_id,review_title,review_content from reviewboard where no='$page_no';";
 
    
    $result_sql=mysqli_query($mydb,$sql);
 
   
?>
    <section>
      <article id="board_result">
            <div class="image">
                <img src="./j17/img/hotel007.jpg" alt="">
            </div>
            <div class="con_list">
                <p>상세보기</p>
            </div>
            <div class="clear"></div>
          
                 <?php
               if($result_sql){
                  ?>
               
                 <?php
                    while($row=mysqli_fetch_array($result_sql)){
                      ?>
                     <form action="review_board_check.php?no=<?php $page_no?>" method='get'>
                   <div class='create_board'>
                   <table id='result_board'>
                   <tr>
                   
                   <!--제목-->
                    <td><input type='text' size='45' maxlength='80' id='jemok' name='jemok' value="<?php echo $row[review_title] ?>" readonly></td>
                  </tr>
                  <tr>
                  <!--작성자(회원 아이디)-->
                  <td><input type='text'  size='20' id='register_id' name='register_id' value="<?php echo $row[review_id];?>" readonly></td>      
                  </tr>
                  <tr>
                     <!--글작성인 content내용이 들어가야한다-->
                      <td><textarea cols='140' rows='27' maxlength='300' name='content' style='resize:none; overflow-y:auto;'readonly><?php echo $row[review_content];?></textarea></td>
                  </tr>
                   </table>  
                   </div>
                   </form>
                      
                <?php  
                    }
                ?>
                  
                  <?php }?>
                  
             
                 
            <div class="btn_box">
           <!-- <input type="submit" value="수정" id="modify">
            <input type="submit" value="삭제" id="delete">
            <input type="button" value="목록보기" id="menu">-->
        
            <?php
                if($result_id==$review_id){
                if($result_sql){
                    echo "
             <a href='create.php?no=$page_no&review_title=$review_title&review_content=$review_content'>수정</a>
            <a href='delete_check.php?no=$page_no'> 삭제</a>
             <a href='review_board.php'>목록으로</a>   ";
                }
            }else{
               echo " <a href='review_board.php'>목록으로</a>";     
            }
            ?>
          
          </div>
           
          
          
        </article>   
    </section>
    
     <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>
</body>
</html>
