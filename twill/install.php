<?PHP

$installDir = '/opt/twill';

if (!file_exists($installDir))
{
  mkdir ($installDir,0777);
  echo "<li>Install Folder Created</li>";
}else{
  echo "<li>Install Folder Ready</li>";
}




$file = "/twill-0.9.tar.gz";
$command = "wget -P $installDir http://darcs.idyll.org/~t/projects$file";
if (!file_exists($installDir.$file)){
  exec($command);
  echo "<li>$command Executed</li>";
  if (file_exists($installDir.$file)){
    echo "<li>File Downloaded</li>";
  }
}else{
  echo "<li>Downloded Ready</li>";
}



$uncompress = "tar -C $installDir xvfz $installDir.$file";


echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system($uncompress, $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;

?>
