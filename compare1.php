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

$selectedHape = isset($_POST['compare']) ? $_POST['compare'] : array();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perbandingan Hape</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .comparison-table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .comparison-table,
        .comparison-table th,
        .comparison-table td {
            border: 1px solid #ddd;
        }
        .comparison-table th,
        .comparison-table td {
            padding: 15px;
            text-align: center;
        }
        .comparison-table th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Perbandingan Hape</h1>
    <table class="comparison-table">
        <tr>
            <th>Gambar</th>
            <th>Merk & Model</th>
            <th>Harga</th>
            <th>Spesifikasi</th>
        </tr>
        <!-- <?php foreach ($selectedHape as $index) : ?>
        <?php $hape = $arrHape[$index]; ?>

        <tr>
            <td><img src="<?= $hape['url_gambar'] ?>" alt="<?= $hape['Model'] ?>" width="175"></td>
            <td><?= $hape['Merk'] ?> <?= $hape['Model'] ?></td>
            <td>Rp <?= number_format($hape['Harga'], 0, ',', '.') ?></td>
            <td>
                <ul style="list-style-type: none; padding: 0;">
                    <?php foreach ($hape['spec'] as $spec) : ?>
                    <li><?= $spec ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
        <?php endforeach; ?>
    </table> -->
    <?php foreach ($selectedHape as $sku) : ?>
        <?php foreach ($arrHape as $hape) : ?>
        <?php if ($hape['SKU'] == $sku) : ?>
        <tr>
            <td><img src="<?= $hape['url_gambar'] ?>" alt="<?= $hape['Model'] ?>" width="175"></td>
            <td><?= $hape['Merk'] ?> <?= $hape['Model'] ?></td>
            <td>Rp <?= number_format($hape['Harga'], 0, ',', '.') ?></td>
            <td>
                <ul style="list-style-type: none; padding: 0;">
                    <?php foreach ($hape['spec'] as $spec) : ?>
                    <li><?= $spec ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
