
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>

        form {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #EEEEEE;
            border: 2px solid black;
            border-radius: 10px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        form input[type="text"],form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid black;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #828282;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form button[type="submit"]:hover {
            background-color: #9c9c9c;
        }

        #error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
    $error_message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tentg = trim($_POST["tentg"]);
        $tensach = trim($_POST["tensach"]);
        $nhaxb = trim($_POST["namexb"]);
        $namxb = trim($_POST["namxb"]);
        

        if (empty($tentg) && empty($tensach) && empty($nhaxb) && empty($namxb)) {
            $error_message = "Vui lòng điền tất cả thông tin.";
        }
        else if (empty($tentg)) {
            $error_message = "Vui lòng điền tên tác giả.";
        }
        else if (empty($tensach)) {
            $error_message = "Vui lòng điền tên sách.";
        }
        else if (empty($nhaxb)) {
            $error_message = "Vui lòng điền nhà xuất bản.";
        }
        else if (empty($namxb)) {
            $error_message = "Vui lòng điền năm xuất bản.";
        }
        else if (!is_numeric($namxb)) {
            $error_message = "Năm xuất bản phải là số.";
        }
        else {
            echo "<h2>Thông tin về sách đã nhập:</h2>";
            echo "Tên tác giả: " . htmlspecialchars($tentg) . "<br>";
            echo "Tên sách: " . htmlspecialchars($tensach) . "<br>";
            echo "Nhà xuất bản: " . htmlspecialchars($nhaxb) . "<br>";
            echo "Năm xuất bản: " . htmlspecialchars($namxb) . "<br>";
            exit;
        }
    }
?>


<form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Tác giả</label>
    <input id="tentg" type="text" name="tentg" value="<?php echo isset($tentg) ? htmlspecialchars($tentg) : ''; ?>">
    <br>
    <label>Tên sách</label>
    <input id="tensach" type="text" name="tensach" value="<?php echo isset($tensach) ? htmlspecialchars($tensach) : ''; ?>">
    <br>
    <label>Nhà xuất bản</label>
    <input id="namexb" type="text" name="namexb" value="<?php echo isset($nhaxb) ? htmlspecialchars($nhaxb) : ''; ?>">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb" value="<?php echo isset($namxb) ? htmlspecialchars($namxb) : ''; ?>">
    <br>
    <p id="error-message"><?php echo $error_message; ?></p>
    <button type="submit" name="submit">Submit</button>

</form>

</body>
</html>
