<?php
require_once "lib/autoload.php";

$imageLoader = $Container->getImageLoader();

$css = array( "style.css" );
$VS->BasicHead( $css );

$images = $Container->getImageLoader()->Load( $id = $_GET['id'] );
$template = $VS->LoadTemplate("stad_form");

$type = $images[0]->getType();

if ($type == 'City') {
          $country = "Country: " . $images[0]->getCountry();
          $continent = "Continent: " . $images[0]->getContinent();
} else {
          $animal = "Animal: " . $images[0]->getAnimal();
          $family = "Family: " . $images[0]->getFamily();
}

?>
<body>

<div class="jumbotron text-center">
<h1><?php echo $type ?></h1>
<p><?php echo $country; echo $animal ?></p>
<p><?php echo $continent; echo $family ?></p>

</div>
<div class="container">
    <div class="row">

        <?php
        print $VS->ReplaceCities( $images, $template);

        ?>

    </div>
</div>

</body>
</html>