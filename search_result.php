<?php
    $con = new PDO("mysqll:host=localhost;dbname=team5DB", 'root', '1234');
    
    if(isset($_POST["submit"])) {
        $str = $_POST["trash"];
        $sth = $con->prepare("SELECT * FROM 'trashListTBL' WHERE trashName = '$str'");
        
        $sth -> setFetchMode(PDO::FETCH_OBJ);
        $sth ->execute();
        if($row = $sth->fetch())
        {
            ?>
            <br><br><br>
            <table>
                <tr>
                <th>쓰레기 이름</th>
                <th>재활용 가능</th>
                <th>버리는 장소</th>
                </tr>
                <tr>
                    <td><?php echo $row-> trashName; ?></td>
                    <td><?php echo $row-> canBeRecycle; ?></td>
                    <td><?php echo $row -> dischargePlace; ?></td>
                </tr>
            </table>
<?php
        }

        else{
            echo "다시 입력해주세요";
        }
    }
    ?>
