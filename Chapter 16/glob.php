<?php ##Використання функції glob()
 echo '<pre>';
 print_r(glob('c:/windows/*/*.{exe,ini}', GLOB_BRACE));
 echo '</pre>';
