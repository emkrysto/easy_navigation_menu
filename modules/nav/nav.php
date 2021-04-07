<?php
include_once("classes/class.nav.php"); 

$nav = new nav();
$nav->_active_link_on = true;
$nav->addLink(1 , true, "home", "home", 0);
$nav->addLink(2 , true, "contact", "contact", 0);
$nav->addLink(16, true, "page", "page", 0);
$nav->addLink(14, true, "alert", "alert", 0);
$nav->addLink(15, true, "confirm", "confirm", 0);

$nav->addLink(3 , true, "page1", "#", 0);
$nav->addLink(4 , true, "page11", "#", 3);
$nav->addLink(5 , true, "page111", "page", 4);
$nav->addLink(6 , true, "page112", "#", 4);
$nav->addLink(7 , true, "page1121", "page1121", 6);

$nav->addLink(8 , true, "page2", "#", 0);
$nav->addLink(9 , true, "page21", "page21", 8);
$nav->addLink(10, true, "page22", "#", 8);
$nav->addLink(11, true, "page23", "page23", 8);
$nav->addLink(12, true, "page221", "page221", 10);
$nav->addLink(13, true, "page222", "page222", 10);
?>

<nav class="topnav responsive nav-normal">
	<?php 
		$default_link = $nav->_links[0]["link"];
		$active_link = (isset($_GET["m"])) ? $_GET["m"] : $default_link;
		$nav->viewNav($active_link); 
	?>
</nav>

<?php include_once(dirname(__FILE__).SP."js".SP."nav.js"); ?>
