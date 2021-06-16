<?php
    session_start();
    include "db.php";
    
    $userID = $_POST['userID'];
    $userPassword = $_POST['userPassword'];
    $query = "SELECT * FROM userTBL where userID = $userID";
    $conn = mysqli_connect('192.168.253.139', 'root', '', 'tema5DB');
    $result = $conn -> query($query);
    
    //비밀번호 검사
    if (mysqli_num_rows($result) == 1) {
        $row=mysqli_fetch_assoc($result);
 
            if($row['userPassword']==$userPasswrod){
                $_SESSION['userID']=$userID;
                if(isset($_SESSION['userID'])){
                 ?>      <script>
                            alert("로그인 되었습니다.");
                            location.replace("./index.php");
                          </script>
<?php
                }
            else{
                echo "session fail";
            }
            }
 
            else {
        ?>  <script>
                 alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                 history.back();
            </script>
        <?php
            }
 
        }
 
        else{
?>          <script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
<?php
        }
?>
}
