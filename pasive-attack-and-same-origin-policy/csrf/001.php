<?php
session_start();
$id = $_GET['id'];
if (!$id) {
  $id = 'fuck';
}
$_SESSION['id'] = $id;
?>

<body>
  已登录 ( id: <?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8');?> )  <br>
  <a href="002.php">修改密码</a>
</body>