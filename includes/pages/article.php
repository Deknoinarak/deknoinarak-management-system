<?php

?>

<h1><?php if(isset($_GET["title"])) {echo str_replace("-", " ", $_GET["title"]); echo " (Deknoinarak Management System)";} else { echo "No Article Name"; } ?></h1>
<p>Article ID: <?php if(isset($_GET["id"])) {echo $_GET["id"];} else { echo "No Article ID"; } ?></p>