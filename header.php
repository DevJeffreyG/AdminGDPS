<?php
include "conx.php";
include "langc/lang$lang.php";
    $doHeader = '
	<link rel="stylesheet" href="../CSS/desplegable.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <header>
        <nav>
            <ul>
                <li><a href="'.$root.'/herramientas/index.php"><span class="primero"><i class="icon icon-menu"></i></span>'.$otherHerrs.'</a>
                    <ul>
                        <li><a href="'.$root.'/herramientas/add.php">'.$hrAddMod.'</a></li>
                        <li><a href="'.$root.'/herramientas/updt.php">'.$hrUpdMod.'</a></li>
                        <li><a href="'.$root.'/herramientas/del.php">'.$hrDelMod.'</a></li>
                        <li><a href="'.$root.'/herramientas/acc.php">'.$hrDelAcc.'</a></li>
                        <li><a href="'.$root.'/herramientas/dowYlks.php">'.$hrUpdDaL.'</a></li>
                    </ul>
                </li>
                <li><a href="'.$root.'/help/index.php"><span class="segundo"><i class="icon icon-info"></i></span>Información</a>
                    <ul>
                        <li><a href="'.$root.'/help/accs.php">'.$cuentas.'</a></li>
                        <li><a href="'.$root.'/help/assId.php">'.$assigns.'</a></li>
                        <li><a href="'.$root.'/help/mods.php">'.$moderators.'</a></li>
                        <li><a href="'.$root.'/help/roleid.php">'.$roles.'</a></li>
                        <li><a href="'.$root.'/help/lvls.php">'.$levels.'</a></li>
                        <li><a href="'.$root.'/help/users.php">'.$users.'</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
  </header>';
?>