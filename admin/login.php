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

<form method="post">
    <h2>Admin Login</h2>
    <?php if(isset($error)) echo $error; ?>
    <p><input name="username" placeholder="username"></p>
    <p><input name="password" type="password" placeholder="Password"></p>
    <button type="submit">Login</button>
</form>