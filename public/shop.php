<?php
require_once("../resources/config.php");
include(TEMPLATE_FRONT.DS."header.php");
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header >
            <h1>Show Now!</h1>
            </p>
        </header>

        <hr>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <?php 
                get_product_in_shop_page();
            ?>

        </div>
        <!-- /.row -->

        <!-- Footer -->
    <?php
    include(TEMPLATE_FRONT.DS."footer.php");
    ?>

    </div>
