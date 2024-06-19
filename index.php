<?php
    $arrHape = array(
        array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "assets\samsung_s22 - Copy.jpg", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
        array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "assets\xiaomi_mi11 - Copy.jpg", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
        array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Note 12", "Harga" => 6500000, "url_gambar" => "assets\xiaomi_redmi12.jpg", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
        array("SKU" => "CD345", "Merk" => "Oppo", "Model" => "Find X3", "Harga" => 12000000, "url_gambar" => "assets\oppo_findxpro.png", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "EF678", "Merk" => "Vivo", "Model" => "V21", "Harga" => 7000000, "url_gambar" => 'assets\vivo_v21.png', "spec" => array("8GB", "5G", "5000mAH", "128GB")),
        array("SKU" => "GH901", "Merk" => "Realme", "Model" => "8 Pro", "Harga" => 6000000, "url_gambar" => 'assets\realme_8pro.jpg', "spec" => array("6GB", "5G", "4500mAH", "128GB")),
        array("SKU" => "IJ234", "Merk" => "Apple", "Model" => "iPhone 13", "Harga" => 19000000, "url_gambar" => "assets\apple_iphone13.jpeg", "spec" => array("4GB", "5G", "3240mAH", "128GB")),
        array("SKU" => "KL567", "Merk" => "Sony", "Model" => "Xperia 1 III", "Harga" => 15000000, "url_gambar" => "assets\sony_xperia1III.jpg", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "MN890", "Merk" => "Huawei", "Model" => "P40 Pro", "Harga" => 13000000, "url_gambar" => "assets\huawei_p40pro.jpg", "spec" => array("8GB", "5G", "4200mAH", "256GB")),
        array("SKU" => "OP123", "Merk" => "Nokia", "Model" => "8.3", "Harga" => 8000000, "url_gambar" => 'assets\nokia_8.3.jpg', "spec" => array("8GB", "5G", "4500mAH", "128GB")),
        array("SKU" => "QR456", "Merk" => "OnePlus", "Model" => "9", "Harga" => 14000000, "url_gambar" => "assets\oneplus_9.png", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "ST789", "Merk" => "Asus", "Model" => "ROG Phone 5", "Harga" => 17000000, "url_gambar" => "assets\asus_rogphone5.jpg", "spec" => array("16GB", "5G", "6000mAH", "256GB")),
        array("SKU" => "UV012", "Merk" => "Motorola", "Model" => "Moto G100", "Harga" => 9000000, "url_gambar" => "assets\motorola_motog100.jpg", "spec" => array("8GB", "5G", "5000mAH", "128GB")),
        array("SKU" => "WX345", "Merk" => "Google", "Model" => "Pixel 6", "Harga" => 11000000, "url_gambar" => "assets\google_pixel6a.jpg", "spec" => array("8GB", "5G", "4600mAH", "128GB")),
        array("SKU" => "YZ678", "Merk" => "LG", "Model" => "LG Velvet", "Harga" => 10000000, "url_gambar" => "assets\lg_velvet.jpg", "spec" => array("6GB", "5G", "4300mAH", "128GB")),
        array("SKU" => "AB901", "Merk" => "Honor", "Model" => "Honor 50", "Harga" => 7000000, "url_gambar" => "assets\honor_50.jpg", "spec" => array("8GB", "5G", "4300mAH", "128GB")),
        array("SKU" => "CD234", "Merk" => "ZTE", "Model" => "Axon 30", "Harga" => 8000000, "url_gambar" => "assets\zte_axon30.jpg", "spec" => array("8GB", "5G", "4200mAH", "128GB")),
        array("SKU" => "EF567", "Merk" => "Lenovo", "Model" => "Legion Phone Duel", "Harga" => 12000000, "url_gambar" => "assets\lenovo_legionduel2.jpg", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
        array("SKU" => "GH890", "Merk" => "Meizu", "Model" => "18", "Harga" => 9500000, "url_gambar" => "assets\meizu_18.jpg", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
        array("SKU" => "IJ123", "Merk" => "Alcatel", "Model" => "Alcatel 5V", "Harga" => 3500000, "url_gambar" => "assets\alcatel_5v.png", "spec" => array("3GB", "4G", "4000mAH", "32GB"))
    );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Hape</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #02343F;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #F0EDCC;
            box-sizing: border-box;
            flex-grow: 1; 
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start; 
            overflow: auto;
        }
        
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 370px;
            background-color: #FFF;
            height: 470px;
            margin: 10px;
            float: left;
            box-sizing: border-box;
        }

        .card img {
            width: 80%;
            height: auto;
        }

        .card h3 {
            margin: 0;
            padding: 0;
            font-size: 18px;
            background-color: #f0f0f0;
            text-align: center;
            width: 100%;
        }

        .card p {
            padding: 0 5px 0;
            font-size: 16px;
            color: #333;
            text-align: center;
        }

        .card input {
            margin: 0 auto 15px;
            display: block;
        }

        .compare-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin: 20px auto;
        display: block;
        border-radius: 5px;
        clear: both;
        }
        .compare-btn:disabled {
                background-color: #cccccc;
                cursor: not-allowed;
        }
    </style>
    <script>
        function updateCheckboxes() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const checked = Array.from(checkboxes).filter(cb => cb.checked).length;
            const compareBtn = document.getElementById('compareBtn');
            
            compareBtn.disabled = checked !== 3;
            if (checked !== 3) {
                compareBtn.style.backgroundColor = '#cccccc';
                compareBtn.style.cursor = 'not-allowed';
            } else {
                compareBtn.style.backgroundColor = '#02343F';
                compareBtn.style.cursor = 'pointer';
            }
            
            checkboxes.forEach(cb => {
                if (!cb.checked) cb.disabled = checked >= 3;
            });
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <img src="assets\LOGO.png" alt="Logo Toko" style="width:100%;background-color:#02343F">
        <h2 style="text-align:center; color: white; font-weight:bold;">Dogon Arena</h2>
    </div>
    <div class="content">
        <form action="compare.php" method="POST">
        <?php
        foreach ($arrHape as $hape) {
            echo '<div class="card">';
            echo '<img src="'.$hape["url_gambar"].'" alt="'.$hape["Model"].'" style="width:100%;">';
            echo '<h3>'.$hape["Merk"].' '.$hape["Model"].'</h3>';
            echo '<p>Harga: Rp'.number_format($hape["Harga"]).'</p>';
            echo '<input type="checkbox" name="compare[]" value="'.$hape["SKU"].'" onchange="updateCheckboxes()">';
            echo '</div>';
        }
        ?>
        <div class="btn">
            <button id="compareBtn" class = "compare-btn" onclick="location.href='compare.php'" disabled>Compare</button>
        </div>
        </form>
    </div>
</body>
</html>
