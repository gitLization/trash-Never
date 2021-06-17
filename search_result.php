<?php
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['keyword']);
      $query ="SELECT * FROM trashListTBL WHERE trashName like '%" . $aKeyword[0] . "%'";
     
     for($i = 1; $i < count($aKeyword); $i++) {
		if(!empty($aKeyword[$i])) {
			$query .= " OR trashName like '%" . $aKeyword[$i] . "%'";
		}
      }
    
     $result = $mysqli->query($query);
     echo "<br>You have searched for keywords: " . $_POST['keyword'];
					
     if(mysqli_num_rows($result) > 0) {
		$row_count=0;
		echo "<br>Result Found: ";
		echo "<br><table border='1'>";
		While($row = $result->fetch_assoc()) {   
			$row_count++;						  
			echo "<tr><td> 연관 ".$row_count." </td><td>쓰레기 종류: ". $row['trashName'] . "</td><td> 버리는 곳: ". $row['dischargePlace'] . "</td></tr>";
		}
		echo "</table>";
    }
    else {
		echo "<br>Result Found: NONE";
    }
}
?>

