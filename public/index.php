<?php
require_once("../resources/config.php");
include(TEMPLATE_FRONT.DS."header.php");
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!--Side Nav Categories Here from "front/side_nav.php" file-->
            <?php include(TEMPLATE_FRONT.DS."side_nav.php"); ?>
            <div class="col-md-9">
                <div class="row carousel-holder"> 
                    <!--Page slider from "front/Slider.php-->  
                    <?php include(TEMPLATE_FRONT.DS."slider.php"); ?>
                </div>

                <div class="row">
                        <?php 
                        get_product();
                        ?>
                        
                </div> <!--Row ends here-->

            </div>

        </div>

    </div>
    <!--Footer-->
    <?php
    include(TEMPLATE_FRONT.DS."footer.php");
    ?>