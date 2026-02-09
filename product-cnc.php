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

    <!-- CSS เฉพาะ Navbar -->
    <link rel="stylesheet" href="CSS/navbar.css">

    <!-- CSS เฉพาะ Feature -->
    <link rel="stylesheet" href="css/feature.css">

    <!-- CSS เฉพาะ Footer -->
    <link rel="stylesheet" href="css/footer.css">

    <!-- CSS เฉพาะ Product -->
    <link rel="stylesheet" href="css/product.css">

</head>
<body>

<?php include 'include/navbar.php';?>

<section class ="product-hero">
    <h1>เครื่องตัด CNC<h1>
    <p>เครื่องตัดแก๊ส และพลาสม่า สำหรับอุตสาหกรรม</p>
</section>

<section class ="product-section">
    <div class="product-container">
        <div class="product-grid">
            
            <!-- การ์ด 1 -->
            <div class="product-card">
            
                <!-- รูป -->
                <div class="product-image">
                    <img src="รูปภาพ/11.jpg" alt="TMT-1530">
                </div>

                <!-- เนื้อหา -->
                <div class="product-content">
                    <h3> TMT-1530 </h3>
                    <p>CNC Cutting Machine (Gas & Plasma)</p>

                    <a href="product-detail.php?id=1" class="product-btn">
                    รายละเอียดเพิ่มเติม
                    </a>
                </div>
            </div>

            <!-- การ์ด 2 -->
            <div class="product-card">
            
                <!-- รูป -->
                <div class="product-image">
                    <img src="รูปภาพ/12.jpg" alt="TMT-1530">
                </div>

                <!-- เนื้อหา -->
                <div class="product-content">
                    <h3> TMT-1530 </h3>
                    <p>CNC Cutting Machine (Gas & Plasma)</p>

                    <a href="product-detail.php?id=1" class="product-btn">
                    รายละเอียดเพิ่มเติม
                    </a>
                </div>
            </div>

            <!-- การ์ด 3 -->
            <div class="product-card">
            
                <!-- รูป -->
                    <div class="product-image">
                        <img src="รูปภาพ/13.jpg" alt="TMT-1530">
                    </div>

                <!-- เนื้อหา -->
                <div class="product-content">
                    <h3> TMT-1530 </h3>
                    <p>CNC Cutting Machine (Gas & Plasma)</p>

                    <a href="product-detail.php?id=1" class="product-btn">
                        รายละเอียดเพิ่มเติม
                    </a>
                </div>
            </div>
            
        </div>    
    </div>
</section>

<?php include 'include/footer.php';?> 
</body>
</html>