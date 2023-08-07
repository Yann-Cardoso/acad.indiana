<?php

// Tamanho dos vetores
$tamanhoVetor = 10;

// Criar e preencher os dois vetores
$vetor1 = array();
$vetor2 = array();
$resultado = array();

// Preencher os vetores com valores aleatórios
for ($i = 0; $i < $tamanhoVetor; $i++) {
    $vetor1[$i] = rand(1, 100); // Preencha o vetor com valores aleatórios de 1 a 100 (ajuste conforme necessário)
    $vetor2[$i] = rand(1, 100);
    $resultado[$i] = $vetor1[$i] + $vetor2[$i];
}

// Imprimir os vetores
echo "Vetor 1: ";
for ($i = 0; $i < $tamanhoVetor; $i++) {
    echo $vetor1[$i] . " ";
}
echo "<br>";

echo "Vetor 2: ";
for ($i = 0; $i < $tamanhoVetor; $i++) {
    echo $vetor2[$i] . " ";
}
echo "<br>";

echo "Resultado: ";
for ($i = 0; $i < $tamanhoVetor; $i++) {
    echo $resultado[$i] . " ";
}
echo "<br>";

?>