<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php

        $aluno = array("Azul ", "Azul ", "Azul ", "Preto", "Verde", "Roxo", "Amarelo", "Branco", "Marrom");
        

        print_r($aluno);

        echo "<br><br>";

        
          //não duplicar valor
        $result = array_unique($aluno);

         
        //reorganiza a estrutura em ordem crescente mantendo o índice
        

      array_push($result, "vermelho", "laranja", "lilás");
      array_pop($result);
      
       
      
      //repetição sem critério de parada, vai do início ao fim do array
        
        foreach($result as $n => $n_value){

           
           
            echo "Aluno (". $n .") " . $n_value . "<br>";
        } 
       
        
/*obs:
//**result - boas práticas -

**foreach - ele que controla o início e fim (diferentemente do for; while)
         n_value pega o valor dentro do indice, e o n pega apenas o índice

**sort muda o índice mas ainda ordena em ordem crescente
**asort reorganiza a estrutura em ordem crescente mantendo o índice

** array_push($array, "valor") adicionar valor no final da fila
**array_pop($result); retira o último valor da lista

**print_r imprimir
*/

    ?>

</body>
</html>