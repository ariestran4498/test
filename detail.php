<?php
    include 'top.php';
    
?>

<div id="wrapper">
            <div id="left">
            <?php
            $sql = "SELECT * FROM TRUYEN WHERE IDTRUYEN=".$_GET['id'];
            if ($result = mysqli_query($connect, $sql)) {
                while ($row = mysqli_fetch_array($result)) {
                    echo"
                    <div id=news>
                        <img src=".$row['ANH']." alt=Li's Product Image>
                    <p href=>".$row['NOIDUNG']."</p>
                    <a href=>".$row['TIEUDE']."</a>
                    </div>";
                }
            } else
                //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($connect);
            //ngắt kết nối
            mysqli_close($connect);
            ?>
            <button class="btnDTruyen"><span>Đọc Truyện</span></button>
            </div>
        </div>
    </body>
</html>
