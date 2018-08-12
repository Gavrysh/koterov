<?php ##Багаторядковість
$str = file_get_contents(__FILE__);
echo '<pre>'.htmlspecialchars(preg_replace('#^#m', "\t", $str)).'</pre>';