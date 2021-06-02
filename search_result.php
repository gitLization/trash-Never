<?php
    
    if(isset($_POST['search'])) {
        $str = $_POST['search'];
        require_once 'db.php';
        
        if($conn) {
            $sql = "SELECT * FROM `trashListTBL` WHERE LIKE '%".$str."%'";
            $result_query = mysql_query($sql);
            
            while($row = mysqli_fetch_array($result_query))
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
        }
    }
        ?>

