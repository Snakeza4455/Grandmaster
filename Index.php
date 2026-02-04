<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Grandmaster Machine</title>

    <!-- โหลด Tailwind CSS ผ่าน CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS กลางของทั้งเว็บ -->
    <link rel="stylesheet" href="base.css">

    <!-- CSS เฉพาะหน้า index -->
    <link rel="stylesheet" href="index.css">
</head>
<body>

<nav class="navbar">
    <div class="max-w-7xl mx-auto px-6">
        <div class="navbar-inner">

            <!-- Logo -->
            <div class="navbar-logo">
                <a href="index.php">
                <img src="LOGO-GMM.png" alt="Grandmaster Machine Co., Ltd">
                </a>
            </div>

            <!-- Menu -->
            <div class="navbar-menu-wrapper">
                <ul class="navbar-menu">

                    <li class="nav-item">
                        <a href="#" class="nav-link">หน้าแรก</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">เกี่ยวกับเรา</a>
                    </li>

                    <!-- เครื่องจักร -->
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">
                            เครื่องจักร
                            <span class="arrow">▼</span>
                        </a>
                        <div class="dropdown-panel">
                            <a href="#">เครื่องตัด CNC</a>
                            <a href="#">เครื่องตัด Fiber Laser</a>
                        </div>
                    </li>

                    <!-- อะไหล่เครื่องจักร -->
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">
                            อะไหล่เครื่องจักร
                            <span class="arrow">▼</span>
                        </a>
                        <div class="dropdown-panel">
                            <a href="#">อะไหล่เครื่อง CNC</a>
                            <a href="#">อะไหล่เครื่อง Fiber Laser</a>
                        </div>
                    </li>

                    <!-- สายไฟอุตสาหกรรม -->
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">
                            สายไฟอุตสาหกรรม
                            <span class="arrow">▼</span>
                        </a>
                        <div class="dropdown-panel">
                            <a href="#">สายไฟคอนโทรล</a>
                            <a href="#">สายไฟชิลด์</a>
                            <a href="#">สายไฟฉนวนยาง ทนน้ำและน้ำมัน</a>
                            <a href="#">สายไฟสำหรับลิฟต์/เครน/รอกไฟฟ้า</a>
                            <a href="#">สายเชื่อม</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">บริการของเรา</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">ติดต่อเรา</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

</body>
</html>