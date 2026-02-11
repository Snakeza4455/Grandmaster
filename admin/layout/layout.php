<?php
require '../include/auth.php'
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>

<div class="admin-container">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="admin-main">
        
        <!-- Topnar -->
        <?php include 'topbar.php'?>
        
        <!-- Dynamic COntent -->
        <div class="admin-content">
            <?php
            if(isset($content)){
                include $content;
            }
            ?>
        </div>
    </div>         
</div>
</body>
</html>