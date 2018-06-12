<?php
 
// Configuration de la grille
 
$grid_width  = 21; // largeur de la grille
$grid_height = 21; // hauteur de la grille
$cell_width  = 25; // largeur d'une cellule
$cell_height = 25; // hauteur d'une cellule
$spacing      = 8;  // espacement des cellules
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ragnarok</title>
    <style type="text/css" media="screen">

    body {
        background-color: #000000;
        background-repeat:no-repeat;
        background-image: url(IMG/ecole3.png)
    }
 
    .grid .row {
        margin-left: -<?php echo $spacing?>px;
    }
 
    .grid .row:after {
        content: " ";
        visibility: hidden;
        display: block;
        height: 0;
        clear: both;
    }
 
    .grid .cell {
        display: block;
        float: left;
        margin-left: <?php echo $spacing?>px;
        margin-bottom: <?php echo $spacing?>px;
        width: <?php echo $cell_width?>px;
        height: <?php echo $cell_height?>px;
        border: 1px solid #ccc;
        border-top: none;
        border-left: none;
        cursor: pointer;
        background: RGBa;
        -webkit-transition: background 200ms linear;
        -moz-transition: background 200ms linear;
        -ms-transition: background 200ms linear;
        -o-transition: background 200ms linear;
        transition: background 200ms linear;
    }
 
    .grid .cell:hover {
        background-color: RED;
    }
    </style>
    </head>
<body>
    <div class="grid">
    <?php for ($w=0; $w<$grid_width; $w++): ?>
        <div class="row">
        <?php for ($h=0; $h<$grid_height; $h++): ?>
            <span class="cell"></span>
        <?php endfor ?>
        </div>
    <?php endfor ?>
    </div>



</body>
</html>