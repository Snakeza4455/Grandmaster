<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandmaster Machine</title>

    <!-- โหลด Tailwind CSS ผ่าน CDN -->
    <script src="https://cdn.tailwindcss.com"></script> 

    <!-- CSS กลางของทั้งเว็บ -->
    <link rel="stylesheet" href="CSS/base.css">

    <!-- CSS เฉพาะหน้า index -->
    <link rel="stylesheet" href="CSS/index.css">

    <!-- CSS เฉพาะ Navbar -->
    <link rel="stylesheet" href="CSS/navbar.css">

    <!-- CSS เฉพาะ hero -->
    <link rel="stylesheet" href="CSS/hero.css">

</head>
<body> 

<nav class="navbar bg-white">
  <div class="max-w-7xl mx-auto px-4 lg:px-6">

    <div class="flex items-center justify-between h-[72px] lg:h-[90px]">

      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <a href="index.php">
          <img
            src="รูปภาพ/LOGO-GMM.png"
            alt="Grandmaster Machine Co., Ltd"
            class="h-[52px] lg:h-[72px] w-auto"
          >
        </a>
      </div>

      <!-- Menu -->
      <ul class="hidden lg:flex items-center gap-8">

        <li><a href="#" class="nav-link">หน้าแรก</a></li>
        <li><a href="#" class="nav-link">เกี่ยวกับเรา</a></li>

        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">
            เครื่องจักร <span class="arrow">▼</span>
          </a>
          <div class="dropdown-panel">
            <a href="#">เครื่องตัด CNC</a>
            <a href="#">เครื่องตัด Fiber Laser</a>
          </div>
        </li>

        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">
            อะไหล่เครื่องจักร <span class="arrow">▼</span>
          </a>
          <div class="dropdown-panel">
            <a href="#">อะไหล่เครื่อง CNC</a>
            <a href="#">อะไหล่เครื่อง Fiber Laser</a>
          </div>
        </li>

        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">
            สายไฟอุตสาหกรรม <span class="arrow">▼</span>
          </a>
          <div class="dropdown-panel">
            <a href="#">สายไฟคอนโทรล</a>
            <a href="#">สายไฟชิลด์</a>
            <a href="#">สายไฟฉนวนยาง</a>
          </div>
        </li>

        <li><a href="#" class="nav-link">บริการของเรา</a></li>
        <li><a href="#" class="nav-link">ติดต่อเรา</a></li>

      </ul>

      <!-- Mobile button -->
      <button class="lg:hidden text-2xl">☰</button>

    </div>
  </div>
</nav>

<!-- HERO SLIDER -->
<section class="hero relative w-full overflow-hidden">
  <div class="hero-slider h-[300px] sm:h-[380px] lg:h[520px]">

    <div class="hero-slide active" style="background-image:url('รูปภาพ/1.png')">
      <div class="hero-overlay">
        <h1>GRAND MASTER<br> MACHINE CO., LTD.</h1>
        <p>
          We import and supply CNC machines, gas, plasma and laser components,
          as well as high-quality industrial cables built to international standards.
        </p>
      </div>
    </div>

    <div class="hero-slide" style="background-image:url('รูปภาพ/2.png')">
      <div class="hero-overlay">
        <h1>CNC & LASER<br>SOLUTIONS</h1>
        <p>High performance machines with reliable after-sales service.</p>
      </div>
    </div>

    <div class="hero-slide" style="background-image:url('รูปภาพ/3.png')">
      <div class="hero-overlay">
        <h1>INDUSTRIAL<br>CABLE</h1>
        <p>International standard industrial cables for all applications.</p>
      </div>
    </div>

    <!-- Controls -->
    <button class="hero-btn prev">‹</button>
    <button class="hero-btn next">›</button>

  </div>
</section>
    
    <!--ดึงข้อมูลจากไฟล์ hero.js-->
    <script src="hero.js" defer></script> 

</body>
</html>