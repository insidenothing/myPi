<?PHP
// add security here

echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system('/usr/bin/sudo /root/wiringPi/gpio/gpio readall', $retval);

// Printing additional info
echo '</pre>';

function pin_out($pin,$power){
  $cmd = "/usr/bin/sudo /root/wiringPi/gpio/gpio -g write $pin $power";
  $last_line = system($cmd, $retval);
}


$pin = 17;
$on = 1;
$off = 0;
$x = 0;

if (isset($_GET['blink'])){
  $pin = 17;
  $init = "/usr/bin/sudo /root/wiringPi/gpio/gpio -g mode $pin out";
  $last_line = system($init, $retval);
  while ($x < 50){
    $x++;
    $power= ($x % 2 == 0) ? '0' : '1';
    pin_out($pin,$power);
  }
  header('Location: gpio.php');
}


?>

