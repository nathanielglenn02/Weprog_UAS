<?php
$arrHape = array(
    array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "https://picsum.photos/175/100", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "https://picsum.photos/175/100", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Redmi Note 12", "Harga" => 6500000, "url_gambar" => "https://picsum.photos/175/100", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
    // Tambahkan data lainnya hingga mencapai 20 item
);

$selectedHape = isset($_GET['hape']) ? $_GET['hape'] : array();
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
        <?php foreach ($selectedHape as $index) : ?>
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
    </table>
</body>

</html>