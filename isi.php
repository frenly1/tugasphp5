
<div class="container">
    <?php
    $data = $_GET['data'];
    if (!empty($data)) {
        include_once $menu_bawah[$data];
    } else {
        include_once "../navigasi/home.php";
    }
    ?>
</div>
