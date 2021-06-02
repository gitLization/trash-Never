
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trash NeVer</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          <a href="index.html" target="_self">
            <img src="images/project/logo_of_top.png" alt="Home tag" width="200" height="130">
          </a>
                        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="분리수거 물품검색">분리수거 물품검색</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="퀴즈 풀기">퀴즈 풀기</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="마이페이지">마이페이지</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="로그인/회원가입">로그인/회원가입</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT 분리수거 물품검색 -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-7 col-md-12 col-12 d-flex mx-auto align-items-center">
                  
                    <div class="about-text">
                      <div class="col-lg-14 mx-auto col-12">
                        <h2>분리수거에 관련된 것들을</h2>
                        <h2> 검색해보세요</h2>
                      </div>
                        <h1 class="animated animated-text">
                            <span class="mr-2"></span>
                                <div class="animated-info">
                                    <span class="animated-item">분리수거?</span> 
                                    <span class="animated-item">일반쓰레기?</span>
                                    <span class="animated-item">대형 폐기물?</span>
                                </div>
                        </h1>

                        <p>배출 방법이 궁금한 품목을 검색해보면 배출 방법을 알려드립니다.</p>
                        
                        <form action="search_result.php" method="post">
<!--                            <div class="search">
                              <input type="text" name="trash" placeholder="검색어를 입력해주세요.">
                            </div>

                            <div class="button">
                              <button>검색</button>
                            </div>-->
                            <div class="search">
                                <input type="text" name="string">
                                <input type="submit" name="submit">
                            </div>
                       </form>
                    </div>
                </div>

                

            </div>
        </div>
    </section>

       <!-- PROJECTS 퀴즈 풀기 -->

       <section class="project py-5" id="project">
        <div class="container">

            <div class="row">
                <div class="col-lg-11 text-center mx-auto col-12">

                    <div class="col-lg-8 mx-auto">
                        <h2>분리수거 관련 문제를 풀고 포인트를 얻어보세요!</h2>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-info">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <p> 1. 다음 중 고려시대 왕은?</p>
                                <form name="form">
                                 <input type="radio" name="kingName" value="v1">근초고왕<br>
                                 <input type="radio" name="kingName" value="v2">의자왕<br>
                                 <input type="radio" name="kingName" value="v3">충렬왕<br>
                                 <input type="radio" name="kingName" value="v4">성종<br>
                                 <input type="button" name="선택" value="정답확인" onclick="myFucntion()">
                                </form>
                                <p id="check"></p>
                                <script type="text/javascript">
                                 function myFucntion() {
                                  if(form.kingName[2].checked==true) document.getElementById("check").innerHTML="정답입니다.";
                                  else document.getElementById("check").innerHTML="오답입니다.";
                                 }
                                </script>
                                <!--img src="images/project/project-image01.png" class="img-fluid" alt="project image"-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <p> 1. 다음 중 고려시대 왕은?</p>
                                <form name="form">
                                 <input type="radio" name="kingName" value="v1">근초고왕<br>
                                 <input type="radio" name="kingName" value="v2">의자왕<br>
                                 <input type="radio" name="kingName" value="v3">충렬왕<br>
                                 <input type="radio" name="kingName" value="v4">성종<br>
                                 <input type="button" name="선택" value="정답확인" onclick="myFucntion()">
                                </form>
                                <p id="check"></p>
                                <script type="text/javascript">
                                 function myFucntion() {
                                  if(form.kingName[2].checked==true) document.getElementById("check").innerHTML="정답입니다.";
                                  else document.getElementById("check").innerHTML="오답입니다.";
                                 }
                                </script>
                                <!--img src="images/project/project-image02.png" class="img-fluid" alt="project image"-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <p> 1. 다음 중 고려시대 왕은?</p>
                                <form name="form">
                                 <input type="radio" name="kingName" value="v1">근초고왕<br>
                                 <input type="radio" name="kingName" value="v2">의자왕<br>
                                 <input type="radio" name="kingName" value="v3">충렬왕<br>
                                 <input type="radio" name="kingName" value="v4">성종<br>
                                 <input type="button" name="선택" value="정답확인" onclick="myFucntion()">
                                </form>
                                <p id="check"></p>
                                <script type="text/javascript">
                                 function myFucntion() {
                                  if(form.kingName[2].checked==true) document.getElementById("check").innerHTML="정답입니다.";
                                  else document.getElementById("check").innerHTML="오답입니다.";
                                 }
                                </script>
                                <!--img src="images/project/project-image03.png" class="img-fluid" alt="project image"-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <p> 1. 다음 중 고려시대 왕은?</p>
                                <form name="form">
                                 <input type="radio" name="kingName" value="v1">근초고왕<br>
                                 <input type="radio" name="kingName" value="v2">의자왕<br>
                                 <input type="radio" name="kingName" value="v3">충렬왕<br>
                                 <input type="radio" name="kingName" value="v4">성종<br>
                                 <input type="button" name="선택" value="정답확인" onclick="myFucntion()">
                                </form>
                                <p id="check"></p>
                                <script type="text/javascript">
                                 function myFucntion() {
                                  if(form.kingName[2].checked==true) document.getElementById("check").innerHTML="정답입니다.";
                                  else document.getElementById("check").innerHTML="오답입니다.";
                                 }
                                </script>
                                <!--img src="images/project/project-image04.png" class="img-fluid" alt="project image"-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <p> 1. 다음 중 고려시대 왕은?</p>
                                <form name="form">
                                 <input type="radio" name="kingName" value="v1">근초고왕<br>
                                 <input type="radio" name="kingName" value="v2">의자왕<br>
                                 <input type="radio" name="kingName" value="v3">충렬왕<br>
                                 <input type="radio" name="kingName" value="v4">성종<br>
                                 <input type="button" name="선택" value="정답확인" onclick="myFucntion()">
                                </form>
                                <p id="check"></p>
                                <script type="text/javascript">
                                 function myFucntion() {
                                  if(form.kingName[2].checked==true) document.getElementById("check").innerHTML="정답입니다.";
                                  else document.getElementById("check").innerHTML="오답입니다.";
                                 }
                                </script>
                                <!--img src="images/project/project-image05.png" class="img-fluid" alt="project image"-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES 마이페이지 -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">마이 페이지</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>ID</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>아이디</span></h3>
                                  <p><!--아이디 보여주는 부분--></p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>pw</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>비밀번호</span></h3>
                                <p><!--비밀번호 보여주는 부분--></p>
                            </div>
                        </div>

<!--                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>office</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>선택한 공공기관명</h3>
                                <p>공공기관 이름 보여주는 부분</p>
                            </div>
                        </div>-->
                                      
                    </div>
                </div>

                
                
            </div>
        </div>
    </section>

  <!-- CONTACT 로그인/회원가입 -->

  <section class="contact py-5" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-12">
          <div class="contact-form">
            <h2 class="mb-4">Log In</h2>

            <form action="login.php" method="POST">
              <div class="row">
                <div class="col-lg-6 col-12">
                  아이디: <input type="text" class="form-control" name="userID" placeholder="ID">
                </div>
                <br>

                <div class="col-lg-6 col-12">
                  패스워드: <input type="text" class="form-control" name="userPassword" placeholder="password"><br>
                </div>

                <div class="ml-lg-auto col-lg-5 col-12">
                  <button type="submit" class="form-control submit-btn" value="LogIn">
                </div>
              </div>
            </form>
          </div>
        </div>


        <!-- 회원가입   -->
        <div class="col-lg-6 col-12">
          <div class="contact-form">
              <h2 class="mb-4">Register</h2>

              <form action="register.php" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    아이디: <input type="text" class="form-control" name="userID" placeholder="ID"><br>
                  </div>

                  <div class="col-lg-6 col-12">
                    패스워드: <input type="text" class="form-control" name="userPassword" placeholder="Password">
                  </div>

                  <div class="col-lg-6 col-12">
                    기관 고르기: 
                      <select name=institution SIZE=1 class="form-control">
                          <option value=1>서울특별시</option>
                          <option value=2>인천광역시</option>
                          <option value=3>대구광역시</option>
                          <option value=4>부산광역시</option>
                      </select>
                    
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="register">
                  </div>
                </div>
              </form>
          </div>
        </div>

      </div>
    </div>
  </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                        <p class="copyright-text text-center">Edited by 김윤지, 김지은, 최인우, 탁영진</p>
                        <p class="copyright-text text-center">GitHub Link <a rel="nofollow" href="https://github.com/trash-NeVer">TrashNeVer</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>