<?php
$page = "home";
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        
        if (isset($_GET['category_id'])) {
            $categoryId = $_GET['category_id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);

            if (isset($_GET['product_id'])) {
                $productId = $_GET['product_id'];
                $product = getProduct($productId);
                $titleSuffix = ' | ' . $product->name;
                if(isset($_POST['name']) && isset($_POST['review'])) {
                    saveReview($_POST['name'],$_POST['review']);
                    $reviews=getReviews($productId);
                }
                // TODO Zorg dat je hier de product pagina laat zien
            } else {
                // TODO Zorg dat je hier alle producten laat zien van een categorie
            }
        } else {
            // TODO Toon de categorieen
            $categories = getCategories();
            include_once "categories.php";
        }
        break;
        
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
?>


<!DOCTYPE html>
    <html>
    <?php
    include_once('../Templates/defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('../Templates/defaults/header.php');
            include_once ('../Templates/defaults/menu.php');
            include_once ('../Templates/defaults/pictures.php');
            ?>

            <h4>Sportcenter HealthOne</h4>
            <p>
                Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is hiervoor de basis.
                Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt bij aan ontspanning van lichaam en geest.
                Sporten is goed voor sterkere spieren en voor de conditie. Sporcenter HealthOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie.
            </p>
            
            <hr>

            <?php
                include_once ('../Templates/defaults/footer.php');
            ?>
        </div>
    </body>
</html>

