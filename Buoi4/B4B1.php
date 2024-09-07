<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        
      
*{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    position: relative;
 }
 body{
    background-color: #F3F8FF;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
 }
 form{
    background-color: #F3F8FF;
    display:grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 40px;
    border: 2px solid black;
    box-shadow: 2px 2px 10px #dcd9e07a;
    border-radius: 10px;
    position: relative;
 }
 div{
    width: 240px;
    padding-bottom: 20px;
 }
 h2{
    color: Black;
 }
 hr {
    border: 0;
    height: 2px;
    background: #dcd9e07a;
 }
 .title{
    color: Black;
    font-size: 20px;
 }
 .data{
    color: Black;
    font-size: 20px;
    padding-left: 10px;
 }
 tr td:first-child{
    text-align: right;
    font-weight: bold;
 }
 td{
    padding: 5px 0;
 }
 .formInput{
    width: 100%;
    height: 20px;
    border-radius: 5px;
    border: 1px solid Black;
    margin: 8px 0 6px 0;
 }
 p{
    font-size: 12px;
    color: black;
 }
 div.checkBox{
    padding: 8px 0;
    font-size: 12px;
    display: flex;
    align-items: center;
    width: 240px;
 }
 .checkmark {
    position: relative;
    height: 10px;
    width: 14px;
    background-color: #F3F8FF;
    border-radius: 4px;
    border: 1px solid Black;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
 }
 input[type="checkbox"]:checked +.checkmark {
    background-color: Black;
 }
  
 .checkmark::after {
    content: "";
    position: absolute;
    display: none;
 }
 
 input[type="checkbox"]:checked +.checkmark::after {
    display: block;
 }
 
 .checkmark::after {
    left: 5px;
    top: 2px;
    width: 3px;
    height: 5px;
    border: solid #F3F8FF;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
 }
 input[type="checkbox"] + .checkmark {
    cursor: pointer;
 }
 input[type="checkbox"]{
    cursor: pointer;
    opacity: 1;
    position: absolute;
    z-index: 1;
    opacity: 0;
 }
 input:focus{
    outline: solid Black;
 }
 label.check{
    font-size: 13px;
    padding-left: 10px;
    color: black;
    cursor: pointer;
 }
 #submitBtn{
    color: #F3F8FF;
    grid-column: span 2;
    height: 36px;
    background-color: Black;
    border: none;
    border-radius: 10px;
    font-weight: bold;
 }
 #z{
    color: #F3F8FF;
    grid-column: span 2;
    height: 36px;
    background-color: Black;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    margin-top: 20px;
    width: 100%;
 }
 #submitBtn:hover{
    background-color: #828282;
    transition: 0.4s;
 }
 #z:hover{
    background-color: black;
    transition: 0.4s;
 }
 input[type="text"], input[type="number"], input[type="mail"] {
    padding: 5px;
 }
 
 .file-upload input[type="file"] {
  text-align: center;
    display: none;
 }
 
 .file-upload {
    width: 70vh;
    grid-column: span 2;
    border: 2px dashed #828282;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    background-color: #F3F8FF;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 60px; 
 }
 .cloud-icon {
    font-size: 40px; 
    font-weight: bold; 
    text-align: center;
    color: #4CAF50; 
 }
 .upload-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 20px; 
 }
 .file-upload label {
    cursor: pointer;
    color: black;
    font-weight: bold;
    font-size: 22px; 
    margin-top: 10px; 
 }
 
 .file-upload input[type="file"] {
    display: none;
        }
 
 .file-upload p {
    text-align: center;
    color: #828282;
    font-size: 12px;
    margin-top: 10px;
 }
 textarea {
            width: 73vh;
            height: 30px;
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            resize: none;
            background-color: #F9FBFF;
            color: #333;
        }
 
        .form-hidden {
    display: none;
 }
 .result-hidden {
    display: none;
 }
 
 .show-result {
    display: block;
    width: 50%;
    padding: 20px;
    background-color: #F3F8FF;
    border: 2px solid black;
    border-radius: 10px;
    box-shadow: 2px 2px 10px #dcd9e07a;
    box-sizing: border-box;
 }
 
 .result-hidden {
    display: none;
 }
 
 
 .info-table .title {
    font-weight: bold;
    text-align: left;
    background-color: #F3F8FF;
 }
 
 .info-table .data {
    text-align: left;
 }
 .info-table img {
    max-width: 100%;
    height: auto;
 }
 .back-btn {
    display: block;
    width: 10%;
    padding: 10px;
    text-align: center;
    background-color: Black;
    color: #F3F8FF;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    margin-top: 20px;
    cursor: pointer;
 }
 .back-btn:hover {
    background-color: #828282;
    transition: 0.4s;
 } 
 
    </style>

</head>
<body>
    <?php
    $errors = [];
    $first_name = $last_name = $email = $invoice_id = $additional_info = '';
    $pay_for = [];
    $file_upload = '';
    $upload_success = false;
    $show_result = false;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = test_input($_POST['first_name']);
        $last_name = test_input($_POST['last_name']);
        $email = test_input($_POST['email']);
        $invoice_id = test_input($_POST['invoice_id']);
        $pay_for = $_POST['pay_for'] ?? [];
        $additional_info = test_input($_POST['additional_info']);

        if (empty($first_name)) {
            $errors['first_name'] = "First Name is required.";
        }

        if (empty($last_name)) {
            $errors['last_name'] = "Last Name is required.";
        }

        if (empty($email)) {
            $errors['email'] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        }

        if (empty($invoice_id)) {
            $errors['invoice_id'] = "Invoice ID is required.";
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $invoice_id)) {
            $errors['invoice_id'] = "Invoice ID can only contain letters and numbers.";
        }

        if (empty($pay_for)) {
            $errors['pay_for'] = "Please select at least one item from 'Pay For'.";
        }

        if ($_FILES['payment_receipt']['error'] == UPLOAD_ERR_NO_FILE) {
            $errors['file'] = "Please upload your payment receipt.";
        } else {
            $file = $_FILES['payment_receipt'];
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $max_file_size = 1048576;

            if (!in_array($file['type'], $allowed_types)) {
                $errors['file'] = "Only JPG, PNG, and GIF files are allowed.";
            } elseif ($file['size'] > $max_file_size) {
                $errors['file'] = "File size must not exceed 1MB.";
            } else {
                $upload_dir = 'uploads/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                $target_file = $upload_dir . basename($_FILES["payment_receipt"]["name"]);

                if (move_uploaded_file($_FILES["payment_receipt"]["tmp_name"], $target_file)) {
                    $file_upload = $target_file;
                } else {
                    $errors['file'] = "An error occurred during file upload.";
                }
            }
        }

        // Nếu không có lỗi, hiển thị kết quả
        if (empty($errors)) {
            $show_result = true;
        }
    }
    ?>

    <!-- Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" class="<?php echo $show_result ? 'form-hidden' : ''; ?>">
        <h2 style="grid-column: span 2; text-align: center;">Payment Receipt Upload Form</h2>
        <hr style="grid-column: span 2; width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
        <label for="firstName" class="title" style="grid-column: span 2;">Name</label>
        <div>
            <input type="text" id="firstName" name="first_name" class="formInput" value="<?php echo htmlspecialchars($first_name); ?>">
            <span style="color:red;"><?php echo $errors['first_name'] ?? ''; ?></span>
        </div>
        <div>
            <input type="text" id="lastName" name="last_name" class="formInput" value="<?php echo htmlspecialchars($last_name); ?>">
            <span style="color:red;"><?php echo $errors['last_name'] ?? ''; ?></span>
        </div>
        <div>
            <label for="mail" class="title">Mail</label>
            <input type="mail" id="mail" name="email" class="formInput" value="<?php echo htmlspecialchars($email); ?>">
            <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
        </div>
        <div>
            <label for="invoiceId" class="title">Invoice ID</label>
            <input type="text" id="invoiceId" name="invoice_id" class="formInput" value="<?php echo htmlspecialchars($invoice_id); ?>">
            <span style="color:red;"><?php echo $errors['invoice_id'] ?? ''; ?></span>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;">
            <label class="title" style="margin-bottom: 10px; display: block;">Pay For</label>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); width: 550px; padding: 0;">
                <?php
                $items = [
                    "35K Category",
                    "15K Category",
                    "55K Category",
                    "75K Category",
                    "116K Category",
                    "Shuttle Two Ways",
                    "Shuttle One Way",
                    "Compressport T-Shirt Merchandise",
                    "Training Cap Merchandise",
                    "Buf Merchandise",
                    "Other"
                ];
                foreach ($items as $item) {
                    $checked = in_array($item, $pay_for) ? 'checked' : '';
                    echo "<div class='checkBox'>
                            <input type='checkbox' name='pay_for[]' value='$item' $checked>
                            <span class='checkmark'></span>
                            <label class='check'>$item</label>
                          </div>";
                }
                ?>
            </div>
            <span style="color:red;"><?php echo $errors['pay_for'] ?? ''; ?></span>
        </div>
        <div class="file-upload">
            <label for="file-upload-input">
                <div class="upload-box">
                    <span class="cloud-icon">☁️</span>
                    <p>Browse Files</p>
                </div>
            </label>
            <input type="file" id="file-upload-input" name="payment_receipt" accept="image/jpeg, image/png, image/gif">
            <p class="instructions">Drag and drop files here</p>
            <p class="file-types">jpg, jpeg, png, gif (1mb max.)</p>
            <span style="color:red;"><?php echo $errors['file'] ?? ''; ?></span>
        </div>
        <div class="additional-info">
            <label for="additional-info" class="title">Additional Information</label>
            <textarea id="additional-info" name="additional_info" placeholder="Type here..."><?php echo htmlspecialchars($additional_info); ?></textarea>
        </div>
        <input type="submit" id="submitBtn" name="submit" value="Submit">
    </form>

    <!-- Result -->
    <div class="<?php echo $show_result ? 'show-result' : 'result-hidden'; ?>">
    <form id="i">
        <h2 style="text-align: center;">Information</h2>
        <hr style="width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
        <table class="info-table">
            <tr>
                <td class="title">Name:</td>
                <td class="data"><?php echo htmlspecialchars("{$first_name} {$last_name}"); ?></td>
            </tr>
            <tr>
                <td class="title">Mail:</td>
                <td class="data"><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <td class="title">Invoice ID:</td>
                <td class="data"><?php echo htmlspecialchars($invoice_id); ?></td>
            </tr>
            <tr>
                <td class="title">Pay For:</td>
                <td class="data"><?php echo implode(', ', $pay_for); ?></td>
            </tr>
            <tr>
                <td class="title">Additional Information:</td>
                <td class="data"><?php echo htmlspecialchars($additional_info); ?></td>
            </tr>
            <tr>
                <td class="title">Payment Receipt:</td>
                <td class="data"><?php if ($file_upload) { echo "<img src='$file_upload' alt='Payment Receipt'>"; } ?></td>
            </tr>
        </table>
    </form>
    <button type="button" class="back-btn" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>';">Back to Form</button>

</div>
</body>
</html>
