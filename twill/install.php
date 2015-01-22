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



$uncompress = "tar xvfz $installDir.$file";
exec($uncompress);



?>
