<?php

$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);


$str = 'a1b2c3';
$result = preg_replace_callback('/\d+/', function($matches) {
    return $matches[0] ** 3; 
}, $str);
echo $result;

?>
<a href="index.php">
    <button>На главную</button>
</a>

