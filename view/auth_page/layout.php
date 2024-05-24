<?php 
    $title = 'Angkasa Raya | Login & Registrasi';
    // $user = $_SESSION['user'];
?>

<?php
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>

<main class="container-content">
    <?php
        if (isset($url)) {
            include $url.'.php';
        }
        else {
            include 'home.php';
        }
    ?>
</main>
<?php $body = ob_get_clean(); ?>

<?php include 'view/master.php'; ?>