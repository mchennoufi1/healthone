<!DOCTYPE html>
<html>

<body>

<div class="container">

<?php
$page = "categories";

include_once('../Templates/defaults/header.php');
include_once('../Templates/defaults/head.php');
include_once ('../Templates/defaults/menu.php');
?>


    <div class="row gy-3 ">
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="categories/2">
                            <img class="product-img img-responsive center-block" src='img/categories/roeitrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Roeitrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="categories/2">
                            <img class="product-img img-responsive center-block" src='img/categories/crosstrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Crosstrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="categories/3">
                            <img class="product-img img-responsive center-block" src='img/categories/hometrainer.jpg'/>
                        </a>
                        <div class="card-title mb-3">Hometrainer</div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="categories/4">
                            <img class="product-img img-responsive center-block" src='img/categories/loopband.jpg'/>
                        </a>
                        <div class="card-title mb-3">Loopband</div>
                    </div>

                </div>
            </div>
    </div>

    <hr>

    <?php
    include_once('../Templates/defaults/footer.php');

    ?>
</div>

</body>
</html>

