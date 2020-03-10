<?php
require_once "lib/autoload.php";

$imageLoader = $Container->getImageLoader();

$css = array( "style.css" );
$VS->BasicHead( $css );
?>
<body>

<div class="jumbotron text-center">
</div>

<div class="container">
    <div class="row">

        <?php
        $images = $Container->getImageLoader()->Load( $id = $_GET['id'] );
        $template = $VS->LoadTemplate("stad_form");
var_dump( $images );
        print $VS->ReplaceCities( $images, $template);

        $type = $images->getType();
        ?>

    </div>
</div>

</body>
</html>