<div class="titulo">Strings</div>

<?php 
echo 'Eu sou uma String';
echo '<br>';
var_dump('Eu também');
echo '<br>';

// concatenação 
echo "Nós também". ' Somos';
echo '<br>' , "também aceito", 'Virgulas';
echo '<br>';

echo "'Teste'". '" Teste';
echo '<br>';

print("<br> Também existe a FUNÇÃO print");
print "<br> Também existe a FUNÇÃO print";


// Algumas Funções

echo '<br>'.strtoupper('maximizado');
echo '<br>'.strtolower('maximizado');
echo '<br>'.ucfirst('maximizado');
echo '<br>'.ucwords('Todas as Palavras');
echo '<br>'.strlen('Todas as Palavras');
echo '<br>'.strlen('Eu também');
echo '<br>'.mb_strlen('Eu Também', "utf-8");
echo '<br>'.substr('Só uma Parte Mesmo', 7,6);
echo '<br>'.str_replace('isso','aquilo','Trocar isso isso');
