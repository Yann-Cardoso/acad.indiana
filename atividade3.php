<?php
 $preco = 320;

 $preco_com_acrescimo = $preco * 1.12;

 $valor_parcela = $preco_com_acrescimo / 10;

 echo "Valor de cada parcela: " ($valor_parcela);
 echo "Valor total da compra: " ($preco_com_acrescimo);
 
