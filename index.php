<?php
session_start();

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['selectedHape'] = isset($_POST['hape']) ? $_POST['hape'] : array();
    if (count($_SESSION['selectedHape']) == 3) {
        header('Location: compare.php?hape[]=' . implode('&hape[]=', $_SESSION['selectedHape']));
        exit;
    }
}

$selectedHape = isset($_SESSION['selectedHape']) ? $_SESSION['selectedHape'] : array();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Toko Hape</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .left {
        width: 250px;
        background-color: #f8f8f8;
        padding: 20px;
        text-align: center;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        float: left;
        height: 100vh;
        position: fixed;
    }

    .left img {
        max-width: 100px;
    }

    .right {
        margin-left: 250px;
        padding: 20px;
        display: block;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: calc(25% - 20px);
        margin: 10px;
        float: left;
        box-sizing: border-box;
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card h2 {
        margin: 0;
        padding: 15px;
        font-size: 18px;
        background-color: #f0f0f0;
        text-align: center;
        width: 100%;
    }

    .card p {
        padding: 0 15px 15px;
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
        background-color: #aaa;
    }
    </style>
</head>

<body>
    <div class="left">
        <img src="logo.png" alt="Logo Toko">
        <h1>Nama Toko</h1>
    </div>
    <div class="right">
        <form method="POST">
            <?php foreach ($arrHape as $index => $hape) : ?>
            <div class="card">
                <img src="<?= $hape['url_gambar'] ?>" alt="<?= $hape['Model'] ?>">
                <h2><?= $hape['Merk'] ?> <?= $hape['Model'] ?></h2>
                <p>Harga: Rp <?= number_format($hape['Harga'], 0, ',', '.') ?></p>
                <input type="checkbox" name="hape[]" value="<?= $index ?>"
                    <?= count($selectedHape) == 3 && !in_array($index, $selectedHape) ? 'disabled' : '' ?>
                    <?= in_array($index, $selectedHape) ? 'checked' : '' ?> onchange="this.form.submit()">
            </div>
            <?php endforeach; ?>
            <button type="submit" class="compare-btn"
                <?= count($selectedHape) != 3 ? 'disabled' : '' ?>>Bandingkan</button>
        </form>
    </div>
</body>

</html>