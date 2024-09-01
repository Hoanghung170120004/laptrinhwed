function validateForm() {
    var tentg = document.getElementById("tentg").value.trim();      // Author name
    var tensach = document.getElementById("tensach").value.trim();  // Book name
    var nhaxb = document.getElementById("nhaxb").value.trim();      // Publisher
    var namxb = document.getElementById("namxb").value.trim();      // Year of publication
    var errorMessage = document.getElementById("error-message");

    // Check if all fields are empty
    if (tentg === "" && tensach === "" && nhaxb === "" && namxb === "") {
        errorMessage.textContent = "Vui lòng điền tất cả thông tin.";
        return false;
    }

    // Check individual fields for empty values
    if (tentg === "") {
        errorMessage.textContent = "Vui lòng điền tên tác giả.";
        return false;
    }

    if (tensach === "") {
        errorMessage.textContent = "Vui lòng điền tên sách.";
        return false;
    }

    if (nhaxb === "") {
        errorMessage.textContent = "Vui lòng điền nhà xuất bản.";
        return false;
    }

    if (namxb === "") {
        errorMessage.textContent = "Vui lòng điền năm xuất bản.";
        return false;
    }

    // Check if 'namxb' is indeed a number and not empty
    if (isNaN(namxb)) {
        errorMessage.textContent = "Năm xuất bản phải là số.";
        return false;
    }

    // If all validations pass
    errorMessage.textContent = "";
    return true;
}
