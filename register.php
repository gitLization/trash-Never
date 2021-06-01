<?php

$connect = mysqli_connect('localhost', 'root', '1234', 'team5DB') or die("fail");

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$officeName = $_POST['institution'];

switch ($_POST['institution']) {
    case 1: $officeName == "서울특별시"; break;
         case 2: $officeName == "인천광역시"; break;
              case 3: $officeName == "대구광역시"; break;
                   case 4: $officeName == "부산광역시"; break;
                       
}

$query = "insert into member (id, pw, mail, date, permit) values ('$id', '$pw', '$email', '$date', 0)";

$result = $connect->query($query);

//저장이 됬다면 (result = true) 가입 완료
if ($result) {
    ?>      
    <script>
        alert('가입 되었습니다.');
        location.replace("./login.php");
    </script>

<?php

} else {
    ?>              
    <script>alert("fail");</script>
<?php

}

?>

