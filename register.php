<?php include "database.php"; ?>
<?php session_start(); ?>

<?php
    
if (isset($_POST['register_btn'])) {
        $userID = mysql_real_escape_string($_POST['userID']);
        $userPassword = mysql_real_escape_string($_POST['userPassword']);
        
        switch ($_POST["institution"]) {
            case 1: $officeName == "서울특별시"; break;
            case 2: $officeName == "인천광역시"; break;
            case 3: $officeName == "대구광역시"; break;
            case 4: $officeName == "부산광역시"; break;
        }
        
        $sql = "INSERT INTO userTBL(userID, userPassword, addedPoint, userPoint)"
                . "VALUES('$userID', '$userPassword', NULL, NULL)";
        mysqli_query($mysqli, $sql);
        $_SESSION['message'] = "회원가입 되었습니다";
        $_SESSION['userID'] = $userID;
        header("location: index.html");
}

