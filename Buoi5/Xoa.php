<?php
// Tạo kết nối
$conn = mysqli_connect("sql204.infinityfree.com","if0_37502648","Hoanghung20004","if0_37502648_b51_mysql");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công.<br>";
}

// Xóa nhân viên có id là 3
$sql_delete = "DELETE FROM MyGuests WHERE id = 3";

if (mysqli_query($conn, $sql_delete)) {
    echo "Xóa thành công.<br>";
} else {
    echo "Lỗi xóa: " . mysqli_error($conn);
}

// Hiển thị lại danh sách
$sql_select = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql_select);

echo "<h2>Danh sách nhân viên sau khi xóa</h2>";
echo "<table border='1'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Reg_Date</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["firstname"]. "</td>
        <td>" . $row["lastname"]. "</td>
        <td>" . $row["reg_date"]. "</td>
        </tr>";
    }
} else {
    echo "0 kết quả";
}

echo "</table>";

mysqli_close($conn);
?>