<?php
include "conx.php";
include "langc/lang$lang.php";
    $doHeader = '
	<link rel="stylesheet" href="../CSS/desplegable.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <header>
        <nav>
            <ul>
                <li><a href="'.$root.'/herramientas/index.php"><span class="primero"><i class="icon icon-menu"></i></span>'.$nvbarMod.'</a>
                    <ul>
                        <li><a href="'.$root.'/herramientas/add.php">'.$hrAddMod.'</a></li>
                        <li><a href="'.$root.'/herramientas/updt.php">'.$hrUpdMod.'</a></li>
                        <li><a href="'.$root.'/herramientas/del.php">'.$hrDelMod.'</a></li>
                    </ul>
                </li>
                <li><a href="'.$root.'/herramientas/index.php"><span class="primero"><i class="icon icon-menu"></i></span>'.$nvbarQuests.'</a>
                    <ul>
                        <li><a href="'.$root.'/herramientas/addQuest.php">'.$hrAddQuest.'</a></li>
                        <li><a href="'.$root.'/herramientas/updQuest.php">'.$hrUpdQuest.'</a></li>
                        <li><a href="'.$root.'/herramientas/delQuest.php">'.$hrDelQuest.'</a></li>
                    </ul>
                </li>
                <li><a href="'.$root.'/herramientas/index.php"><span class="primero"><i class="icon icon-menu"></i></span>'.$nvbarExtras.'</a>
                    <ul>
                        <li><a href="'.$root.'/herramientas/acc.php">'.$hrDelAcc.'</a></li>
                        <li><a href="'.$root.'/herramientas/dowYlks.php">'.$hrUpdDaL.'</a></li>
                    </ul>
                </li>
                <li><a href="'.$root.'/help/index.php"><span class="segundo"><i class="icon icon-info"></i></span>'.$information.'</a>
                    <ul>
                        <li><a target="_blank" href="'.$root.'/help/accs.php">'.$cuentas.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/assId.php">'.$assigns.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/mods.php">'.$moderators.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/roleid.php">'.$roles.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/lvls.php">'.$levels.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/users.php">'.$users.'</a></li>
                        <li><a target="_blank" href="'.$root.'/help/types.php">'.$type.'</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
  </header>';
?>