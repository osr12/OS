<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="ar">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>تسجيل جديد</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="form-box">
  <h2>تسجيل حساب جديد</h2>
  <form method="post">
    <input name="email" type="email" placeholder="البريد الإلكتروني" required>
    <input name="username" type="text" placeholder="اسم المستخدم" required>
    <input name="car_number" type="text" placeholder="رقم السيارة">
    <input name="phone" type="text" placeholder="رقم الهاتف">
    <input name="password" type="password" placeholder="كلمة المرور" required>
    <input name="password_confirm" type="password" placeholder="تأكيد كلمة المرور" required>
    <button type="submit" class="btn">تسجيل</button>
  </form>
</div>
</body>
</html>