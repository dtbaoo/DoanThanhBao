<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: index.php"); // Nếu chưa đăng nhập, quay lại trang login
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chính</title>
</head>
<body>
    <h1>Chào mừng, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Bạn đã đăng nhập thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
