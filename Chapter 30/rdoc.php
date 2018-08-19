<?php ## Документування

/**
 * Документування для наступної функції
 * (після /** не повинно бути пробілів!)
 */
function func()
{

}
$obj = new ReflectionFunction('func');
echo '<pre>'.$obj->getDocComment().'</pre>';