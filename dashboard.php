<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="ar">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>لوحة التحكم - OSR Charger</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header><h1>⚡ لوحة شحن OSR</h1> <a class="btn small" href="logout.php">تسجيل خروج</a></header>
<main class="dashboard">
  <h2>مواقف الشحن</h2>
  <div class="parking">
    <div class="slot">
      <h3>موقف 1 (يمين)</h3>
      <p id="status1">متاح ✅</p>
    </div>
    <div class="slot">
      <h3>موقف 2 (يسار)</h3>
      <p id="status2">متاح ✅</p>
    </div>
  </div>
</main>
</body>
</html>