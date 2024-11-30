<div class="titulo">Conversões PHP</div>

<?php
echo is_int(PHP_INT_MAX);

//int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);

// float para int

echo '<p>Float Para Int</p>';
var_dump((int)6.8);
echo '<br>';
var_dump(intval(2.8,10));
echo '<br>';
var_dump(round(2.8));

// operaçoes com string
echo '<p>Strings</>';
var_dump(3 + "2");
echo '<br>';
var_dump("3"+2);
echo '<br>';
var_dump("3". 2);
echo '<br>', is_string("3". 2);
echo '<br>', is_string("3"+ 2);
var_dump(1 + "5");
var_dump(1 + "2+5");