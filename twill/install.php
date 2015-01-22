<?PHP

$installDir = '/opt/twill';
$file = "/twill-0.9.tar.gz";
$command = "wget -P $installDir http://darcs.idyll.org/~t/projects$file";
if (!file_exists($installDir.$file)){
  exec($command);
  echo "<li>$command Executed</li>";
  if (file_exists($installDir.$file)){
    echo "<li>File Downloaded</li>";
  }
}else{
  echo "<li>Already Downloded</li>";
}

?>
