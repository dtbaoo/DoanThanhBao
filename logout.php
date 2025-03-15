<?php
session_start();
session_destroy(); // Xóa session đăng nhập
header("Location: index.php"); // Chuyển hướng về trang đăng nhập
exit();
?>
