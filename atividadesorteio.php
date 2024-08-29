<?php
    
    echo "<h1>Sorteio</h1>";

    $mensagem = '';
    $numero = 0;

    switch($numero){
        case 1:
            $mensagem = 'Uma bicicleta';
            echo $mensagem;
            break;
        case 2:
            $mensagem = '20 mil reais em barras de ouro';
            echo $mensagem;
            break;
        case 3:
            $mensagem = 'Uma casa';
            echo $mensagem;
            break;
        case 4:
            $mensagem = 'Um conjunto de panelas';
            echo $mensagem;
            break;
        case 5:
            $mensagem = 'Um carro zero';
            echo $mensagem;
            break;
        default:
        $mensagem = 'Nada infelizmente';
        echo $mensagem;
    }
    echo "<br>";
        
        if ($numero > 0 && $numero <6){
            echo "<br>";
            echo "Parabéns o seu prêmio foi. ---| ".$mensagem." |---";
        }
        else {
            echo "<br>";
            echo "Você não foi prêmiado.";
        }

?>