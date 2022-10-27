<?PHP
    require_once "funcoes.php";

    $matriz[0][0] = "0 0";
    $matriz[0][1] = "0 1";
    $matriz[0][2] = "0 2";

    $matriz[1][0] = "1 0";
    $matriz[1][1] = "1 1";
    $matriz[1][2] = "1 2";

    $matriz[2][0] = "2 0";
    $matriz[2][1] = "2 1";
    $matriz[2][2] = "2 2";



    $p = 1;
    $jogador = 1;
    imprimeMatriz($matriz);
    while ($p <= 9) {
        echo "Jogador numero $jogador" . PHP_EOL;
        echo "Digite a linha pressione ENTER e digite a coluna.".PHP_EOL;
        $linha = (int) fgets(STDIN);
        $coluna = (int) fgets(STDIN);
        
        if ($linha <= 2 && $coluna <= 2) {
            if ($matriz[$linha][$coluna] != "O" && $matriz[$linha][$coluna] != "X") {
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
                echo "--------------------------------------------".PHP_EOL;
                echo "Essa linha e essa coluna já foram preenchidas" . PHP_EOL;
                echo "--------------------------------------------".PHP_EOL;
            }
        } else {
            echo "--------------------------------------------".PHP_EOL;
            echo "Numero de colunas e linhas muito auto" . PHP_EOL;
            echo "--------------------------------------------".PHP_EOL;
        }
        
        imprimeMatriz($matriz);

        if (Diagonalsecundario($matriz) || Diagonalprincipal($matriz) || coluna($matriz) || linha($matriz)) {
            echo "--------------------------------------------".PHP_EOL;
            echo 'O jogador '.$jogador." foi derrotado" . PHP_EOL;
            echo "--------------------------------------------".PHP_EOL;
            break;
        }
    }
    
    if (!(Diagonalsecundario($matriz) || Diagonalprincipal($matriz) || coluna($matriz) || linha($matriz))) {
        echo "--------------------------------------------".PHP_EOL;
        echo "Deu velha".PHP_EOL;
        echo "--------------------------------------------".PHP_EOL;
    }
    
    
?>