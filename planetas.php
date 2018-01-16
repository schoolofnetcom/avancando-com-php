<html>
    <head>
        <title>Lista de planetas</title>
    </head>
    <body>
        <?php
            $planetas = [
                "Mercúrio",
                "Vênus",
                "Terra",
                "Marte",
                "Júpiter",
                "Saturno",
                "Urano",
                "Netuno"
            ];
        ?>

        <ul>
            <?php foreach($planetas as $planeta):?>
                <li>
                    <a href="get.php?planeta=<?php echo $planeta?>"><?php echo $planeta?></a>
                </li>
            <?php endforeach;?>
        </ul>

    </body>
</html>