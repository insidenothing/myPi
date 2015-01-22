<?php
if(isset($_GET['still'])){

// -n no preview
// -o output file
$cmd = "raspistill -md 7 -o  cam.jpg";

$last_line = system($cmd, $retval);



}

?>
<img height="768" width="1024" src="cam.jpg" />
<meta http-equiv="refresh" content="60">
