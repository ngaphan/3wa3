<?php include "globals/header.php"; ?>

   
    <?php include "globals/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php include 'globals/sidebar.php'; ?>

            <div class="col-md-9">

                <?php include $view; ?>

            </div>

        </div>

    </div>
    

    <?php include 'globals/footer.php'; ?>