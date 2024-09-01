<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bai1_1</title>
    <style>
        form {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #EEEEEE;
            border: 2px solid black;
            border-radius: 10px;
            text-align: left;
        }

        form label {
            display: block;
            margin-bottom: 10px;
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
            background-color: #9C9C9C;
        }

        #error-message {
            color: red;
            margin-top: 10px;
        }

    </style>

</head>
<body>
<form id="myForm" action="Post.php" method="post" onsubmit="return validateForm()">
    <label>Tác giả</label>
    <input id="tentg" type="text" name="tentg">

    <br>
    <label>Tên sách</label>
    <input id="tensach" type="text" name="tensach">

    <br>
    <label>Nhà xuất bản</label>
    <input id="nhaxb" type="text" name="nhaxb">

    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb">
    <br>

    <p id="error-message"></p>
    <button type="submit" name="submit">Submit</button>

</form>

<!-- <form id="myForm" action="Post.php" method="get" onsubmit="return validateForm()">
    <label>Tác giả</label>
    <input id="tentg" type="text" name="tentg">
    <br>
    <label>Tên sách</label>
    <input id="tensach" type="text" name="tensach">
    <br>
    <label>Nhà xuất bản</label>
    <input id="nhaxb" type="text" name="nhaxb">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb">
    <br>
    <p id="error-message"></p>
    <button type="submit" "name="submit">Submit</button>

</form> -->
    <script src="B3B1.js"></script>

</body>
</html>