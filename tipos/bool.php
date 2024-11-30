<div class="titulo">Booleanos</div>

<?php 
echo TRUE;
echo '<br';
echo false;
echo '<br>';
echo '<br>'.var_dump(true);
echo '<br>'.var_dump(false);
echo '<br>'.var_dump('false');
echo '<br>'.is_bool(false);
echo '<br>'.is_bool('false');

// Regras de conversão

echo "<p> Regras: </p>";
echo '<br>'.var_dump((bool)0); // APENAS ZERO É FALSE
echo '<br>'.var_dump((bool)20);
echo '<br>'.var_dump((bool)0.0); //FALSE
echo '<br>'.var_dump((bool)0.000000000001);
echo '<br>'.var_dump((bool)-1);
echo '<br>'.var_dump((bool)''); //FALSE
echo '<br>'.var_dump((bool)' '); // RESTO RETORNO É TODO TRUE
echo '<br>'.var_dump((bool)'0');
echo '<br>'.var_dump((bool)'00');
echo '<br>'.var_dump((bool)'false');
echo '<br>'.var_dump(!!'false');