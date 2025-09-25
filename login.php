<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="ar">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>تسجيل الدخول</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="form-box">
  <h2>تسجيل الدخول</h2>
  <form method="post">
    <input name="email" type="email" placeholder="البريد الإلكتروني" required>
    <input name="password" type="password" placeholder="كلمة المرور" required>
    <button class="btn" type="submit">دخول</button>
  </form>
</div>
</body>
</html>