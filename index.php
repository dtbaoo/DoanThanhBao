<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    header("Location: welcome.php"); // Nếu đã đăng nhập, chuyển hướng đến trang chính
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "12345") {
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username; // Lưu tên tài khoản
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Tài khoản" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
