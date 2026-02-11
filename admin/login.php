<?php 
session_start();
require '../include/db.php';

if ($_POST) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "
        SELECT * FROM admin_user
        WHERE username='$user' AND password='$pass'
    ";

    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $_SESSION['admin'] = $user;
        header("Location: index.php");
        exit;
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

<div class="login-container">
    <div class="login-card">

        <!-- ฝั่งซ้าย-->
        <div class="login-left ">
            <h2>เข้าสู่ระบบผู้ดูแล</h2>

            <?php if(isset($error)): ?>
                <div class="error"><?= $error ?></div>
            <?php endif; ?>
            
            <form method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
            </form>
        </div>
    
        <!-- ฝั่งขวา -->
        <div class="login-right">
            <h3>Grandmaster Machine</h3>
            <p>Admin Control Panel</p>
        </div>
    </div>
</div>

</body>
</html>

