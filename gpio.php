<?PHP
// add security here


function pin_out($pin,$power){
  $cmd = "/root/wiringPi/gpio -g write $pin $power";
  $last_line = system($cmd, $retval);
}


$pin = 17;
$on = 1;
$off = 0;
$x = 0;


$init = "gpio -g mode $pin out";
$last_line = system($init, $retval);
while ($x < 10){
  $x++;
  $power= ($x % 2 == 0) ? '0' : '1';
  pin_out($pin,$power);
}



echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system('/root/wiringPi/gpio readall', $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>
