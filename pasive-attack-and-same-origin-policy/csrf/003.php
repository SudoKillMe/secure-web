<?php
  function ex($s) {
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }

  session_start();
  $id = $_SESSION['id'];
  $pwd = $_POST['pwd'];
?>

<body>
  <?php ex($id);?>的密码已更改为 <?php echo $pwd?>
</body>