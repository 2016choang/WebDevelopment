<?php
//$start = shell_exec"('/usr/local/bin/matlab -nodisplay -r test');
putenv("USER=www-data");
putenv("HOME=/tmp");
$start = shell_exec('matlab -nodisplay');
$run = shell_exec('test')
echo $run;
?>