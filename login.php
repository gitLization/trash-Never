<?php
    session_start();
    
    $connect = mysqli_connect('localhost', 'root', '1234', 'team5DB') or die("fail");
    
    $userID = $_POST['userID'];
    $userPassword = $_POST['userPassword'];
    $query = "select * from userTBL where userID = $userID";
    $result = $connect -> query($query);
    
    //비밀번호 검사
    if (mysqli_num_rows($result) == 1) {
        $row=mysqli_fetch_assoc($result);
 
            if($row['pw']==$pw){
                $_SESSION['userid']=$id;
                if(isset($_SESSION['userid'])){
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

