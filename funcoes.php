<?php
function coluna($matriz)
{
    $simbolosSeguidos = 1;
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 2; $j++){
            if($matriz[$j][$i] == $matriz[$j+1][$i]){
                $simbolosSeguidos++;
            }           
        }
        if($simbolosSeguidos == 3){
            return 1;
        }
        $simbolosSeguidos = 1;
    }
    return 0;


}
function linha($matriz)
{
    $simbolosSeguidos = 1;
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 2; $j++){
            if($matriz[$i][$j] == $matriz[$i][$j+1]){
                $simbolosSeguidos++;
            }           
        }
        if($simbolosSeguidos == 3){
            return 1;
        }
        $simbolosSeguidos = 1;
    }

    return 0;
}
function diagonalprincipal($matriz)
{
    $simbolosSeguidos = 1;
    for($i = 0; $i < 2; $i++){
        if($matriz[$i][$i] == $matriz[$i+1][$i+1]){
            $simbolosSeguidos++;
        }           
    }

    if($simbolosSeguidos == 3){
        return 1;
    }
    return 0;

}
function diagonalsecundario($matriz)
{
    $simbolosSeguidos = 1;
    for($i = 0; $i < 2; $i++){
        if($matriz[$i][2-$i] == $matriz[$i+1][1-$i]){
            $simbolosSeguidos++;
        }           
    }

    if($simbolosSeguidos == 3){
        return 1;
    }
    return 0;
}

function imprimeMatriz($matriz){
    echo "-----------------------".PHP_EOL;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "( " . $matriz[$i][$j] . " )";
        }
        echo PHP_EOL;
    }
    echo "-----------------------".PHP_EOL;
}

?>