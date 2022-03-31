<?php
session_name("futas");
session_start();
require "model/Jelentkezes.php";
require 'includes/db.inc.php';
$jelent = new Jelentkezes();
$idk = $jelent->listaz($conn);

// default oldal
$page = 'index';

// router
if(isset($_REQUEST['page'])) {
        if(file_exists('controller/'.$_REQUEST['page'].'.php')) {
                $page = $_REQUEST['page']; 
        }
}

$menupontok = array(    'index' => "Főoldal",
                        'register' => "Regisztrálás",
                );

include 'includes/htmlheader.inc.php';
?>
<body>
<?php

include 'includes/menu.inc.php';
if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        include 'controller/'.$page.'.php';
}

?>
</body>
</html>