<?php
$arrHape = array(
    array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "https://picsum.photos/seed/pic1/175/100", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "https://picsum.photos/seed/pic2/175/100", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Redmi Note 12", "Harga" => 6500000, "url_gambar" => "https://picsum.photos/seed/pic3/175/100", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
    array("SKU" => "CD345", "Merk" => "Oppo", "Model" => "Oppo Find X3", "Harga" => 12000000, "url_gambar" => "https://picsum.photos/seed/pic4/175/100", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "EF678", "Merk" => "Vivo", "Model" => "Vivo V21", "Harga" => 7000000, "url_gambar" => "https://picsum.photos/seed/pic5/175/100", "spec" => array("8GB", "5G", "5000mAH", "128GB")),
    array("SKU" => "GH901", "Merk" => "Realme", "Model" => "Realme 8 Pro", "Harga" => 6000000, "url_gambar" => "https://picsum.photos/seed/pic21/175/100", "spec" => array("6GB", "5G", "4500mAH", "128GB")),
    array("SKU" => "IJ234", "Merk" => "Apple", "Model" => "iPhone 13", "Harga" => 19000000, "url_gambar" => "https://picsum.photos/seed/pic7/175/100", "spec" => array("4GB", "5G", "3240mAH", "128GB")),
    array("SKU" => "KL567", "Merk" => "Sony", "Model" => "Xperia 1 III", "Harga" => 15000000, "url_gambar" => "https://picsum.photos/seed/pic8/175/100", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "MN890", "Merk" => "Huawei", "Model" => "P40 Pro", "Harga" => 13000000, "url_gambar" => "https://picsum.photos/seed/pic9/175/100", "spec" => array("8GB", "5G", "4200mAH", "256GB")),
    array("SKU" => "OP123", "Merk" => "Nokia", "Model" => "Nokia 8.3", "Harga" => 8000000, "url_gambar" => "https://picsum.photos/seed/pic10/175/100", "spec" => array("8GB", "5G", "4500mAH", "128GB")),
    array("SKU" => "QR456", "Merk" => "OnePlus", "Model" => "OnePlus 9", "Harga" => 14000000, "url_gambar" => "https://picsum.photos/seed/pic11/175/100", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "ST789", "Merk" => "Asus", "Model" => "ROG Phone 5", "Harga" => 17000000, "url_gambar" => "https://picsum.photos/seed/pic12/175/100", "spec" => array("16GB", "5G", "6000mAH", "256GB")),
    array("SKU" => "UV012", "Merk" => "Motorola", "Model" => "Moto G100", "Harga" => 9000000, "url_gambar" => "https://picsum.photos/seed/pic13/175/100", "spec" => array("8GB", "5G", "5000mAH", "128GB")),
    array("SKU" => "WX345", "Merk" => "Google", "Model" => "Pixel 6", "Harga" => 11000000, "url_gambar" => "https://picsum.photos/seed/pic14/175/100", "spec" => array("8GB", "5G", "4600mAH", "128GB")),
    array("SKU" => "YZ678", "Merk" => "LG", "Model" => "LG Velvet", "Harga" => 10000000, "url_gambar" => "https://picsum.photos/seed/pic15/175/100", "spec" => array("6GB", "5G", "4300mAH", "128GB")),
    array("SKU" => "AB901", "Merk" => "Honor", "Model" => "Honor 50", "Harga" => 7000000, "url_gambar" => "https://picsum.photos/seed/pic16/175/100", "spec" => array("8GB", "5G", "4300mAH", "128GB")),
    array("SKU" => "CD234", "Merk" => "ZTE", "Model" => "Axon 30", "Harga" => 8000000, "url_gambar" => "https://picsum.photos/seed/pic17/175/100", "spec" => array("8GB", "5G", "4200mAH", "128GB")),
    array("SKU" => "EF567", "Merk" => "Lenovo", "Model" => "Legion Phone Duel", "Harga" => 12000000, "url_gambar" => "https://picsum.photos/seed/pic18/175/100", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
    array("SKU" => "GH890", "Merk" => "Meizu", "Model" => "Meizu 18", "Harga" => 9500000, "url_gambar" => "https://picsum.photos/seed/pic19/175/100", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
    array("SKU" => "IJ123", "Merk" => "Alcatel", "Model" => "Alcatel 5V", "Harga" => 3500000, "url_gambar" => "https://picsum.photos/seed/pic20/175/100", "spec" => array("3GB", "4G", "4000mAH", "32GB"))
);

$selectedHape = isset($_POST['compare']) ? $_POST['compare'] : array();
print_r($selectedHape);
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
