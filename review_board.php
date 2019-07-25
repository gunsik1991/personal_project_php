<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel-숙박 후기 리뷰 게시판</title>
    <link rel="stylesheet" href="./j17/css/reset.css" type="text/css">
    <link rel="stylesheet" href="./j17/css/base.css" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="quickpager2.jquery.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */

        $(document).ready(function() {
            $(".customers tbody").quickPager({
                pageSize:15,
                naviSize: 3,
                currentPage: 1,
                holder: ".pager"
            });
            /*4,3,1->5,5,1->5,6,1->5,4,1*/
              var m_menu = $('.gnb>ul>li>a');
            
              m_menu.hover(function() {

                $(this).next().css('display', 'block');
            }, function() {

                $(this).next().css('display', 'none');
            });
            
             $(window).resize(function() {
                $('#visual').css('height', $('.slide img').height());
            });



            $('.sub').hover(function() {

                $(this).css('display', 'block');

            }, function() {
                $(this).css('display', 'none');
            });
            
               $('#create').click(function(){
                location.href="create.php";
            });
            
            $('.search>#search').click(function(){
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
              /* location.href='review_board.php';*/
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
     

        .search {
            position: absolute;
            top: 410px;
            left: 800px;
            width:1000px;
        }
       
        input[type="button"] {
       
            background-color: black;
            border: none;
            color: white;
            width: 140px;
            padding: 10px 20px;
            margin: 15px;
            box-shadow: 50px;
            margin-bottom: 10px;
            margin-top:170px;
            margin-left:0px;
            cursor: pointer;
            display:inline-block;
            
       
       }
       input[type="submit"] {
       
            background-color: black;
            border: none;
            color: white;
            width: 140px;
            padding: 10px 20px;
            margin: 15px;
            box-shadow: 50px;
            margin-bottom: 10px;
            margin-top:170px;
            margin-left:0px;
            cursor: pointer;
            display:inline-block;
            
       
       }

       .search #selection {
            padding: 10px 30px;
            cursor: pointer;
            margin-top:160px;
        }

        #search_text {
            position: relative;
            bottom: 3.0px;
            padding: 10px;
            margin: 22px;
            border: 10px 25px;
            /*top: 0.5px;*/
            margin-top:190px;
            
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
            margin-left: 35px;
            margin-top:280px;
            
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
                <li><a href="mypage.php?id=<?echo $register_id?>" title="">마이페이지<i class="fas fa-angle-down"></i></a>
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
               <li> <a><?php  
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
        
        include 'database_manager.php';
        
          $sql="select no,review_id,review_title,review_date,review_date,review_content from reviewboard order by no desc;";
         $review_id=$_POST['search_text'];
         $review_content=$_POST['search_text'];
          $search_text=$_POST['search_text'];
        $sequnce_return="alter table reviewboard auto_increment=1;";
        $sql_review_id="SELECT *FROM reviewboard WHERE review_id LIKE '%$search_text%';";
         $sql_review_content="SELECT *FROM reviewboard WHERE review_title LIKE  '%$search_text%';";
       /* $sql_null="delete from reviewboard where review_id='';";*/

      
        
          $result_all=mysqli_query($mydb,$sql);
          $result_id=mysqli_query($mydb,$sql_review_id);
          $result_content=mysqli_query($mydb,$sql_review_content);
          $result_sequence=mysqli_query($mydb,$sequnce_return);
        /*  $row=mysql_fetch_row($sql_review_id);
          $row2=mysql_fetch_row($sql_review_content);*/
        //$result_null=mysqli_query($mydb,$sql_null);
         $selection_name=$_POST['selection_check']; 
       
        ?>
        <article id="board">
            <div class="image">
                <img src="./j17/img/hotel007.jpg" alt="">
            </div>
            <div class="con_list">
                <p>숙박 후기 리뷰 게시판</p>
            </div>
           

            <div class="clear"></div>
            <form action="review_board.php" method="post" name="board">
                <div class="search">
                    <select id="selection" name="selection_check">
                        <option>선택하세요</option>
                        <option>회원아이디</option>
                        <option>제목</option>
                    </select>
                        
                    <input type="text" id="search_text" name="search_text">
                    <a href=""></a>
                  <!--   <div class="btns">-->
                <input type="submit" value="검색" id="search">
                <input type="button" value="글작성"  id="create">
           <!-- </div>-->
                </div>
            </form>
               <form action="board_result.php" method="get" name="board_content">
                <table border="0" width="400" cellpadding="3" cellspacing="3" class="customers">
                    <thead>
                         <tr>
                           
                            <th>No</th>
                            <th>회원아이디</th>
                            <th>제목</th>
                            <th>날짜</th>
                           
                        </tr>
                   </thead>
                    <?php
                    if($search_text==null){
                    if($result_all){?>
                    <tbody>
                           
                     <?php
                          while($row_all=mysqli_fetch_array($result_all)){
                          
                          if($row_all!=null){
                          echo "
                           <tr>
                           
                            <td name='num'>$row_all[no]</td>
                            <td>$row_all[review_id]</td>
                            <td name='review_content'><a href='board_result.php?no=$row_all[no]&id=$row_all[review_id]&review_title=$row_all[review_title]&review_content=$row_all[review_content]' name='review_contents'>$row_all[review_title]</a></td>
                            <td>$row_all[review_date]</td>
                          
                        </tr>
                          <input type='hidden' value='$row_all[review_content]' name='result_content'>
                          ";
                        echo "<script>console.log($row_all[review_content]);</script>";
                          }else{
                             
                              break;
                          }
                          
                      }
                        
                        
                            if($result_sequence){
                       echo "<script>console.log('시퀀스 성공 초기화 중');</script>";
                   }else{
                       echo"<script>console.log('시퀀스 에러');</script>";
                   }
                                 
                    ?>
                                     
                    </tbody>
                <?php }}
                  
                    ?>
                       
                <?php if($selection_name=='제목'){?>
            
                 <?php
                   if($result_content){
                            while($row_content=mysqli_fetch_array( $result_content)){
                               
                                if($row_content!=null){
                                       echo "
                              <tbody>
                              <tr>
                           
                            <td>$row_content[no]</td>
                            <td>$row_content[review_id]</td>
                            <td name='review_content'><a href='board_result.php?no=$row_content[no]&id=$row_content[review_id]&review_title=$row_content[review_title]&review_content=$row_content[review_content]' name='review_contents'>$row_content[review_title]</a></td>
                            <td>$row_content[review_date]</td>
                          
                        </tr>
                        </tbody>
                              "; 
                                    
                                  
                                }else{
                                echo "<script>alert('검색결과를 찾을 수 없습니다.');</script>";
                                break; 
                                }
                            }
                           
                        }else{
                            
                             echo "<script>alert('검색에 문제가 발생');</script>";
                            echo mysql_error();
                    
                        }
                 ?>
           
                 <?php }?>
                 
                   <?php if($selection_name=='회원아이디'){?>
                   <?
                    if($result_id){
                        while($row_id=mysqli_fetch_array( $result_id)){
                               
                                if($row_id!=null){
                                       echo "
                              <tbody>
                              <tr>
                           
                            <td>$row_id[no]</td>
                            <td>$row_id[review_id]</td>
                            <td name='review_content'><a href='board_result.php?no=$row_id[no]&id=$row_id[review_id]&review_title=$row_id[review_title]&review_content=$row_id[review_content]' name='review_contents'>$row_id[review_title]</a></td>
                            <td>$row_id[review_date]</td>
                          
                        </tr>
                        </tbody>
                              "; 
                                    
                                  
                                }else{
                                echo "<script>alert('검색결과를 찾을 수 없습니다.');</script>";
                                break; 
                                }
                            }
                           
                        }else{
                            
                             echo "<script>alert('검색에 문제가 발생');</script>";
                            echo mysql_error();
                    
                        }
                    ?>
                   <?php }?>       
                </table>
                
                <div class="pager"></div>
               
            </form>
        </article>
    </section>

    <footer>
        <address>copyright&copy;2019 Hotels allrights Reserved</address>
    </footer>

</body></html>
