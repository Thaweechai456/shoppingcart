<header class="py-3 sticky-top bg-light border-bottom shadow-sm">
    <div class="container">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link custom-nav-link" href="<?php echo $base_url; ?>/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" href="<?php echo $base_url; ?>/product-list.php">Product List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link" href="<?php echo $base_url; ?>/cart.php">Cart</a>
            </li>
        </ul>
    </div>
    <style>
        /* กำหนดสไตล์ลิงก์ */
        .custom-nav-link {
            color: black !important; /* ฟอนต์สีดำ */
            font-weight: 600; /* ทำให้ฟอนต์หนาขึ้น */
            border: 2px solid black; /* เส้นขอบสีดำ */
            border-radius: 10px; /* มุมโค้ง */
            padding: 10px 20px; /* เพิ่มพื้นที่ในกรอบให้กว้างขึ้น */
            background-color: white; /* พื้นหลังสีขาว */
            margin: 0 10px; /* เพิ่มระยะห่างระหว่างกรอบ */
            transition: all 0.3s ease; /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.15); /* เงาเบาๆ */
        }

        /* เมื่อโฮเวอร์ลิงก์ */
        .custom-nav-link:hover {
            background-color: black; /* เปลี่ยนพื้นหลังเป็นสีดำ */
            color: white !important; /* เปลี่ยนฟอนต์เป็นสีขาว */
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.3); /* เพิ่มเงา */
        }

        /* สำหรับลิงก์ active */
        .custom-nav-link.active {
            background-color: black; /* พื้นหลังสีดำสำหรับ active */
            color: white !important; /* สีตัวอักษรเป็นสีขาว */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4); /* เงาเข้มขึ้น */
        }

        /* เพิ่มเงาและมิติให้ header */
        header {
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(240, 240, 240, 1) 100%);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</header>
