<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
</head>
<style>
    table {
            width: 400px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 3px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        input[type="submit"] {
            font-size: 15px; 
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #f0f0f0; 
            border: 1px solid;
        }
        input[type="submit"]:hover {
            background-color: #d1d1d1; 
            transform: scale(1.05); 
        }
</style>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td>Chọn phép tính:</td>
                <td>
                    <input type="radio" name="operation" value="add">Cộng<br>
                    <input type="radio" name="operation" value="subtract">Trừ<br>
                    <input type="radio" name="operation" value="multiply">Nhân<br>
                    <input type="radio" name="operation" value="divide">Chia<br>
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất:</td>
                <td><input type="text" name="number1"></td>
            </tr>
            <tr>
                <td>Số thứ hai (nếu cần):</td>
                <td><input type="text" name="number2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="calculate" value="Tính"></td>
                <td>
                    <?php
                    if (isset($_POST['calculate'])) { // Kiểm tra xem form đã được sumit chưa
                        $num1 = $_POST['number1'];
                        $num2 = $_POST['number2'];
                        $operation = $_POST['operation'];

                        if ($operation == 'add') {
                            $result = $num1 + $num2;
                            echo "Kết quả: $num1 + $num2 = $result";
                        } else if ($operation == 'subtract') {
                            $result = $num1 - $num2;
                            echo "Kết quả: $num1 - $num2 = $result";
                        } else if ($operation == 'multiply') {
                            $result = $num1 * $num2;
                            echo "Kết quả: $num1 * $num2 = $result";
                        } else if ($operation == 'divide') {
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                                echo "Kết quả: $num1 / $num2 = $result";
                            } else {
                                echo "Không thể chia cho 0!";
                            }
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <h2>KIỂM TRA SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td>Chọn phép kiểm tra:</td>
                <td>
                    <input type="radio" name="check" value="even_odd">Kiểm tra số chẵn/lẻ<br>
                    <input type="radio" name="check" value="prime">Kiểm tra số nguyên tố
                </td>
            </tr>
            <tr>
                <td>Số cần kiểm tra:</td>
                <td><input type="text" name="check_number"></td>
            </tr>
            <tr>
                <td><input type="submit" name="check_number_btn" value="Kiểm tra"></td>
                <td>
                    <?php
                        if (isset($_POST['check_number_btn'])) {// Kiểm tra xem form đã được submit hay chưa
                            $checkNumber = $_POST['check_number'];// lưu số nguyên mà người dùng ktra
                            $check = $_POST['check']; // check xem ktra số nguyên hay chẵn lẻ

                            if ($check == 'even_odd') {
                                if ($checkNumber % 2 == 0) {
                                    echo "$checkNumber là số chẵn.";
                                } else {
                                    echo "$checkNumber là số lẻ.";
                                }
                            } elseif ($check == 'prime') {
                                $isPrime = true;
                                if ($checkNumber < 2) {
                                    $isPrime = false;
                                } else {
                                    for ($i = 2; $i <= sqrt($checkNumber); $i++) {
                                        if ($checkNumber % $i == 0) {
                                            $isPrime = false;
                                            break;
                                        }
                                    }
                                }

                                if ($isPrime) {
                                    echo "$checkNumber là số nguyên tố.";
                                } else {
                                    echo "$checkNumber không phải là số nguyên tố.";
                                }
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
