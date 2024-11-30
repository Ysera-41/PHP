<div class="titulo">Desafio String</div>

<?php 

// Enunciado
// Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' retorne 1?
// !AbcaBcabc

echo strpos('!AbcaBcabc', 'abc').'<br>';
echo stripos('!AbcaBcabc', 'abc').'<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('abc'));
