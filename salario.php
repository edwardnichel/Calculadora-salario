<!doctype html>
<html lang ="pt-br">
<head>
  <meta charset ="UTF-8">
  <title>Calculo salario</title>
</head>
<body>
<h3>Resultados salário:</h3>
<?php
  include ('functions.php');
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cargo = $_POST['cargo'];
    $filhos = $_POST['filhos'];
    $s_base = $_POST['s_base'];
    $d_nascimento = $_POST['d_nascimento'];
    $d_cadastro = $_POST['d_cadastro'];
    $v_hora = $_POST['v_hora'];
    $horas_t = $_POST['horas_t'];
    $ambiente = $_POST['ambiente'];
    $v_alimentacao = $_POST['v_alimentacao'];
    $adiantamento = $_POST['adiantamento'];
    $vt = $s_base * 0.06;
    $calculosalario = calculosalario($s_base);
    $salario = salario($horas_t,$v_hora,$ambiente,$calculosalario);
    $salario2 = $salario;
    $irrf = irrf($salario2);
    $inss = inss($s_base);
    $sal_filho =  sal_filho($salario,$filhos);
    $descontos = $adiantamento + $v_alimentacao + $v_alimentacao + $inss + $irrf;
    $salario_liquido = $s_base - $descontos;
    $fgts = $s_base * 0.05;
?>

   <fieldset class="col-auto rounded">
          <legend class="">Sua folha ponto é:</legend>

          <table class="table" >
            
            <tr>
              <th>Nome: </th>
              <td>
                <a> <?php echo $nome ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Idade: </th>
              <td>
                <a> <?php echo $idade ?>
                </a>          
              </td>
            </tr>
            
             <tr>
              <th>Email: </th>
              <td>
                <a> <?php echo $email ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Celular: </th>
              <td>
                <a> <?php echo $celular ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Data de Nascimento: </th>
              <td>
                <a> <?php echo $d_nascimento ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Filhos: </th>
              <td>
                <a> <?php echo $filhos ?>
                </a>          
              </td>
            </tr>
            
           

            <tr>
              <th>Cargo: </th>
              <td>
                <a> <?php echo $cargo ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Ingressou na empresa: </th>
              <td>
                <a> <?php echo $d_cadastro ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Salario Base: </th>
              <td>
                <a> <?php echo "R$: ".$s_base ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Horas Trabalhadas: </th>
              <td>
                <a> <?php echo $horas_t ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Ambiente de Trabalho: </th>
              <td>
                <a> <?php echo $ambiente ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Adiantamento: </th>
              <td>
                <a> <?php echo "R$: ".$adiantamento ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Vale Transporte: </th>
              <td>
                <a> <?php echo "R$: ".$vt ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>INSS: </th>
              <td>
                <a> <?php echo "R$: ".$inss ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Imposto de Renda Retido em Folha: </th>
              <td>
                <a> <?php echo "R$: ".$irrf ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Total de Descontos: </th>
              <td>
                <a> <?php echo "R$: ".$descontos ?>
                </a>          
              </td>
            </tr>

            <tr>
              <th>Salário Líquido: </th>
              <td>
                <a> <?php echo "R$: ".$salario_liquido ?>
                </a>          
              </td>
            </tr>

           <tr>
              <th>FGTS: </th>
              <td>
                <a> <?php echo "R$: ".$fgts ?>
                </a>          
              </td>
            </tr> 

          </table>
          </fieldset>




</body>
</html>
