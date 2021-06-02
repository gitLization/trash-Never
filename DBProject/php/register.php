<?php
include "./db.php";

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];
$officeName = $_POST['institution'];

switch ($_POST['institution']) {
    case 1: $officeName == "서울특별시"; break;
    case 2: $officeName == "인천광역시"; break;
    case 3: $officeName == "대구광역시"; break;
    case 4: $officeName == "부산광역시"; break;
                       
}

$result = mysqli_query($conn, "INSERT INTO 
userTBL(userID, userPassword, addedPoint, userPoint) 
VALUES('$userID', '$userPassword', 0, 0)");

echo("<script>alert('회원가입이 되었습니다!'); location.href='./index.php'; </script>");

?>