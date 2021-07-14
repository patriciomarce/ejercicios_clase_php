<header>
        <nav>
            <ul>
                <?php foreach($secciones as $seccion) : ?>
                    <li>
                       <?=$seccion?>
                    </li>
                <?php endforeach; ?>
                
            </ul>
        </nav>
        <?php if($nombre == NULL) : ?>
            <span>No esta logueado</span>
        <?php else : ?>
        
            <span><?=$nombre?></span>
        <?php endif;?>
                    

    </header>