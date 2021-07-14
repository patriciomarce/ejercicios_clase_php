<?php include("datos.php");?>

include_once()
require("datos.php")
require_once()
<?php 
$titulo = "Home";
include("head.php");
?>
<body>
<?php include("header.php");?>
    <h1>Productos</h1>
        <section>
            <ul>
                 <?php foreach($productos as $producto) : ?>
                    <li>
                        <?=$producto?>
                    </li>
                 <?php endforeach;?>           
            </ul>
        </section>
        <?php include("footer.php");?>
</body>
</html>