<?php require_once 'config.php';
include 'php/inc/head.php';
?>

<body>
    <?php
    include 'php/inc/sidebar.php';
    ?>
    <div class="main-body" id="main">
        <?php include 'php/inc/header.php'; ?>
        <div class="page-content"><!--Everything under header -->
            <?php include 'php/pages/projects.php'; ?>
        </div>



        <!--Contact Form-->
        <div class="contact-container" id="contact">
            <?php include 'php/contact_email.php'; ?>

        </div>

        <?php include 'php/inc/footer.php'; ?>
</body>

</html>