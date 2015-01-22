<?php
if(isset($_GET['still'])){
ob_start();
// -n no preview
// -o output file
$cmd = "raspistill -md 7 -o  cam.jpg";
// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system($cmd, $retval);

// Printing additional info
$debug = ob_get_clean();
}

?>
<img height="768" width="1024" src="cam.jpg" />
<meta http-equiv="refresh" content="60">
