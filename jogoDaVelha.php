<?PHP

    $matriz[0][0] = ".";
    $matriz[0][1] = ".";
    $matriz[0][2] = ".";

    $matriz[1][0] = ".";
    $matriz[1][1] = ".";
    $matriz[1][2] = ".";

    $matriz[2][0] = ".";
    $matriz[2][1] = ".";
    $matriz[2][2] = ".";


    function coluna($array)
    {
        $resultado = 0;
        for ($i = 0; $i < 1; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$i][$j] == 'O') {
                    $resultado += 1;
                }
            }
        }
        $resultado1 = 0;
        for ($i = 1; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$i][$j] == 'O') {
                    $resultado1 += 1;
                }
            }
        }
        $resultado2 = 0;
        for ($i = 2; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$i][$j] == 'O') {
                    $resultado2 += 1;
                }
            }
        }
        if ($resultado == 3 || $resultado1 == 3 || $resultado2 == 3) {
            return 1;
        }
        if ($resultado == 0 || $resultado1 == 0 || $resultado2 == 0) {
            return 0;
        } else {
            return 3;
        }
    }
    function linha($array)
    {
        $linha1 = 0;
        for ($i = 0; $i < 1; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$j][$i] == 'O') {
                    $linha1 += 1;
                }
            }
        }
        $linha2 = 0;
        for ($i = 1; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$j][$i] == 'O') {
                    $linha2 += 1;
                }
            }
        }
        $linha3 = 0;
        for ($i = 2; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($array[$j][$i] == 'O') {
                    $linha3 += 1;
                }
            }
        }
        if ($linha1 == 3 || $linha2 == 3 || $linha3 == 3) {
            return 1;
        }
        if ($linha1 == 0 || $linha2 == 0 || $linha3 == 0) {
            return 0;
        } else {
            return 3;
        }
    }
    function diagonalprincipal($array)
    {
        $diagonal = 0;
        for ($i = 0; $i < 3; $i++) {
            if ($array[$i][$i] == 'O') {
                $diagonal += 1;
            }
        }
        if ($diagonal == 3) {
            return 1;
        }
        if ($diagonal == 0) {
            return 0;
        } else {
            return 3;
        }
    }
    function diagonalsecundario($array)
    {
        $diagonal = 0;
        $conta = 2;
        for ($i = 0; $i < 3; $i++) {
            if ($array[$i][$conta] == 'O') {
                $diagonal += 1;
            }
            $conta--;
        }
        if ($diagonal == 3) {
            return 1;
        }
        if ($diagonal == 0) {
            return 0;
        } else {
            return 3;
        }
    }

    $p = 1;
    $jogador = 1;
    while ($p <= 9) {
        echo "Jogador numero $jogador" . PHP_EOL;
        echo "Qual linha?";
        $linha = (int) fgets(STDIN);

        echo "Qual coluna?";
        $coluna = (int) fgets(STDIN);

        if ($linha <= 2 && $coluna <= 2) {
            if ($matriz[$linha][$coluna] == ".") {
                if ($jogador == 1) {
                    $matriz[$linha][$coluna] = 'O';
                    $jogador = 2;
                    $p++;
                }
                else {
                    $matriz[$linha][$coluna] = 'X';
                    $jogador = 1;
                    $p++;
                }
            } 
            else {
                echo "Essa linha e essa coluna já foram preenchidas" . PHP_EOL;
            }
        } 
        else {
            echo "Numero de colunas e linhas muito auto" . PHP_EOL;
        }
    }

    if (Diagonalsecundario($matriz) == 1 || Diagonalprincipal($matriz) == 1 || coluna($matriz) == 1 || linha($matriz) == 1) {
        echo 'O jogador O ganhou!!' . PHP_EOL;
    }
    elseif (Diagonalsecundario($matriz) == 0 || Diagonalprincipal($matriz) == 0 || coluna($matriz) == 0 || linha($matriz) == 0) {
        echo 'O jogador X Ganhou!!' . PHP_EOL;
    }
    else{
        echo "Deu velha";
    }

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "  " . $matriz[$i][$j] . " ";
        }
        echo PHP_EOL;
    }
?>