<?php
$now = time();
echo '<pre>';
// -n no preview
// -o output file
$cmd = "raspistill -md 7 -o  $now.jpg";
// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system($cmd, $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>
<img src="<?PHP echo $now;?>.jpg" />
