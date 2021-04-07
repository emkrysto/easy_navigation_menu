<?php 
$name = "pages/home.php"; // set default page

if(isset($_GET['m']))  {

	if(preg_match('/\s/',$_GET['m'])) { exit; }

	if(is_array($nav->_links)) 
	{
		$_GET['link'] = "";
		foreach($nav->_links as $n) 
		{
			if($n["active"] == true && $n["link"] == $_GET['m']) {
				$_GET['link'] .= json_encode($n)."<br \>"; // onnly to show array of links as a string on subpage
				$name = "pages/".$n["link"].".php"; 
			}
		}
	} 
} 

if(!empty($name) && file_exists($name)) { 
	include_once($name); 
} else {
	echo "<h1>page not found</h1>";
}
?>