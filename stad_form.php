<?php
require_once "lib/autoload.php";

$imageLoader = $Container->getImageLoader();

$css = array( "style.css" );
$VS->BasicHead( $css );

$images = $Container->getImageLoader()->Load( $id = $_GET['id'] );
$template = $VS->LoadTemplate("stad_form");

$type = $images[0]->getType();

if ($type == 'City') {
          $one = "Country: " . $images[0]->getCountry();
          $two = "Continent: " . $images[0]->getContinent();
} else {
          $one = "Animal: " . $images[0]->getAnimal();
          $two = "Family: " . $images[0]->getFamily();
}

?>
<body>

<div class="jumbotron text-center">
<h1><?php echo $type ?></h1>
<p><?php echo $one ?></p>
<p><?php echo $two ?></p>

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