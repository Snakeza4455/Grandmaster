<!DOCTYPE html>

<?php
require 'include/db.php';
$sql = "SELECT * FROM hero_slides
        WHERE is_active = 1
        ORDER BY sort_order ASC";

$result = $conn->query($sql);
?>

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

    <!-- CSS เฉพาะ Feature -->
    <link rel="stylesheet" href="css/feature.css">

    <!-- CSS เฉพาะ Service -->
    <link rel="stylesheet" href="css/service.css">

    <!-- CSS เฉพาะ Footer -->
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>

<?php include 'include/navbar.php';?>

<!-- HERO SLIDER -->
<section class="hero relative w-full overflow-hidden mb-24">
  <div class="hero-slider h-[300px] sm:h-[380px] lg:h-[520px]">

    <?php $i = 0; ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="hero-slide <?php echo $i === 0 ? 'active' : ''; ?>"
           style="background-image:url('รูปภาพ/<?php echo $row['image']; ?>')">

        <div class="hero-overlay">
          <h1><?php echo nl2br($row['title']); ?></h1>
          <p><?php echo $row['description']; ?></p>
        </div>

      </div>
      <?php $i++; ?>
    <?php endwhile; ?>

    <button class="hero-btn prev">‹</button>
    <button class="hero-btn next">›</button>

  </div>
</section>


<section class="machine-section max-w-7xl mx-auto px-4 lg:px-6 py-20 mb-24">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!-- 🔹 เนื้อหาซ้าย-รูปขวา -->
    <div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">
        Fiber Laser Machine
      </h3>

      <p class="text-gray-600 leading-relaxed mb-6">
        High-speed fiber laser cutting with excellent precision,
        suitable for industrial production lines.
      </p>

      <a href="machine-detail.php"
        class="inline-block text-white px-6 py-3
              text-sm font-medium hover:bg-red-700 transition">
        ดูรายละเอียด
      </a>
    </div>

    <!-- 🔹 รูปเครื่องจักร (ขวา) -->
    <div class="flex justify-center">
      <img
        src="รูปภาพ/4.png"
        alt="Fiber Laser Machine"
        class="w-full max-w-xl object-contain"
      >
    </div>

  </div>
</section>

<section class="machine-section max-w-7xl mx-auto px-4 lg:px-6 py-20 mb-24">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!--เนื้อหาขวา-รูปซ้าย)-->
    <div class="order-2 lg:order-1">

      <h2 class="text-2xl lg:text-3xl font-semibold mb-4"> 
        Fiber Laser Machine
      </h2>
      
      <p class="text-gray-600 mb-6 leading-relaxed">
        high-speed fiber laser cutting with excellent precision.
      </p>
      <a href="machine-detail.php" class="inline-block px-6 py-3 text-white">
        ดูรายละเอียด
      </a> 

    </div>
    
    <!--รูป (ขวาบน desktop)-->
    <div>
      <img
        src="รูปภาพ/5.png"
        alt="Fiber Laser Machine"
        class="w-full h-auto object-contain"
      >
    </div>

  </div>

</section>

<!-- ============= Feature Section ============= -->

<section class="feature-section">

  <div class="feature-container">

    <!--=========== ข้อความหัวข้อ ===========-->
    <div class="feature-header">
      <h2>Grandmaster Machine CO., LTD.</h2>
      <p>
        บริษัท แกรนด์มาสเตอร์ แมชชีน จำกัด<br>
        ผู้นำเข้าและจำหน่ายเครื่องจักร CNC และอุปกรณ์อุตสาหกรรม
      </p>
    </div>

    <!-- ===== การ์ด 4 ใบ ===== -->
    <div class="feature-grid">

      <!-- Card 1 -->
      <div class="feature-card">
         <div class="feature-icon">
          <img src="Icon/plug-zap.svg" alt="Universal Charging">
         </div>
         <h3>Universal Charging</h3>
         <p>รองรับระบบอุตสาหกรรมหลายหลายรูปแบบ</p>
      </div>

      <!-- Card 2 -->
      <div class="feature-card">
         <div class="feature-icon">
          <img src="Icon/shield-check.svg" alt="Smart Access">
         </div>
         <h3>Smart Access</h3>
         <p>ใช้งานง่าย เชื่อถือได้ มาตรฐานสากล</p>
      </div>

      <!-- Card 3 -->
      <div class="feature-card">
         <div class="feature-icon">
          <img src="icon/square-activity.svg" alt="Live Monitoring">
         </div>
         <h3>Live Monitoring</h3>
         <p>ตรวจสอบการสถานะเครื่องจักรแบบเรียลไทม์</p>
      </div>

      <!-- Card 4 -->
      <div class="feature-card">
         <div class="feature-icon">
          <img src="icon/leaf.svg" alt="Green Energy">
         </div>
         <h3>Green Energy</h3>
         <p>รองรับพลังงานอุตสาหกรรมอย่างยังยื่น</p>
      </div>

    </div>
  </div>
</section>   

<!-- ========== หน้าการให้บริการ ==========-->

<section class="service-section">
  <div class="service-container">
  
    <!--- หัวข้อ --->
    <div class="service-header">
      <center><h2>บริการ และงานติดตั้ง</h2>
      <p> Our Service</p>
      </center>
    </div>

    <!--- รายการบริการ--->
    <div class=" service-grid">

      <!--- Service Card--->
      <div class="service-card">
        <div class="service-image">
          <img src="รูปภาพ/11.jpg" alt="ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์">
        </div>

        <h3>ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ ขนาด 12000W</h3>

        <p class="service-desc">
          ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ พร้อมปรับจูนและทดสอบหน้างาน
        </p>

        <a href="service-detail.php?id=1" class="service-btn">
          Read More
        </a>
      </div>

      <!--- Service Card--->
      <div class="service-card">
        <div class="service-image">
          <img src="รูปภาพ/12.jpg" alt="ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์">
        </div>

        <h3>ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ ขนาด 12000W</h3>

        <p class="service-desc">
          ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ พร้อมปรับจูนและทดสอบหน้างาน
        </p>

        <a href="service-detail.php?id=1" class="service-btn">
          Read More
        </a>
      </div>

      <!--- Service Card--->
      <div class="service-card">
        <div class="service-image">
          <img src="รูปภาพ/13.jpg" alt="ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์">
        </div>

        <h3>ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ ขนาด 12000W</h3>

        <p class="service-desc">
          ติดตั้งเครื่องตัดไฟเบอร์เลเซอร์ พร้อมปรับจูนและทดสอบหน้างาน
        </p>

        <a href="service-detail.php?id=1" class="service-btn">
          Read More
        </a>
      </div>

    </div>
  </div>
</section>

    <!--ดึงข้อมูลจากไฟล์ hero.js-->
    <script src="hero.js" defer></script>
    <?php include 'include/footer.php';?>

</body>
</html>