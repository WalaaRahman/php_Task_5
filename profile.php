<?php

$file=fopen('form.txt','r') or die('error opening file');
echo    fread($file,filesize('form.txt'));

          while(!feof($file)) {
               echo  fgets($file).'<br>';
             //echo  fgetc($file).'<br>';

            }
         
fclose($file);

?>