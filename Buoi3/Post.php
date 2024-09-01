
<?php 
    
    if(isset($_POST['submit'])) {
        echo "Tên tác giả: ". $tacgia = $_POST['tentg'];
        echo "<br>";
        echo "Tên sách: ". $sach = $_POST['tensach'];
        echo "<br>";
        echo "Nhà xuất bản: ". $nxb = $_POST['nhaxb'];
        echo "<br>";
        echo "Năm xuất bản: ". $namxb = $_POST['namxb'];
    }

?>
<!-- 
<?php 
    
    if(isset($_GET['submit'])) {
        echo "Tên tác giả: ". $tacgia = $_GET['tentg'];
        echo "<br>";
        echo "Tên sách: ". $sach = $_GET['tensach'];
        echo "<br>";
        echo "Nhà xuất bản: ". $nxb = $_GET['nhaxb'];
        echo "<br>";
        echo "Năm xuất bản: ". $namxb = $_GET['namxb'];
    }

?> -->
