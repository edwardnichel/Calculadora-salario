<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$filhos = $_POST['filhos'];
$salario_base = $_POST['salario-base'];
$data_nascimento = $_POST['data-nascimento'];
$horas_trabalhadas = $_POST['horas-trabalhadas'];
$valor_hora = $_POST['valor-hora'];
$ambiente = $_POST['ambiente'];
$vale_alimentacao = $_POST['vale-alimentacao'];
$adiantamento = $_POST['adiantamento'];
$data_cadastro = $_POST['data-cadastro'];


/*Calculos para o salário, seus descontos, adicionais etc..*/
$vt = $salario_base * 0.06;

if ($salario_base <= 1751) {
  $inss = $salario_base * 0.08;
} elseif ($salario_base >= 1752 or $salario_base <= 2919) {
  $inss = $salario_base * 0.09;
} elseif ($salario_base >= 2920 or $salario_base <= 5839) {
  $inss = $salario_base * 0.11;
}

$salario = ($horas_trabalhadas * $valor_hora);
if ($filhos > 0) {

  $salario = $salario + (45 * $filhos);
}

if ($ambiente == "insalubridade") {
  $salario_insalibridade = $salario_base * 0.3;
  $salario_base_com_insalubridade = $salario_base + $salario_insalibridade;
  $salario = $salario + $salario_insalibridade;
} else {
  $salario_periculosidade = $salario * 0.3;
  $salario = $salario + $salario_periculosidade;
}

if ($salario <= 1903) {
  $irrf = 0;
} elseif ($salario >= 1904 or $salario <= 2826) {
  $irrf = $salario * 0.075;
} elseif ($salario >= 2827 or $salario <= 3751) {
  $irrf = $salario * 0.15;
} elseif ($salario >= 3752 or $salario <= 4664) {
  $irrf = $salario * 0.22;
} elseif ($salario >= 4465) {
  $irrf = $salario * 0.27;
}


$descontos = $adiantamento + $vale_alimentacao + $vt + $inss + $irrf;
$salario_liquido = $salario_base - $descontos;
$fgts = $salario_base * 0.05;

?>

<html>
<title>Folha de Pagamento</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.min.css">

<body class="bg-info">
  <br>
  <div class="card text-center container-fluid form-group p-3 mb-5 bg-white rounded col-md-5">
    <h1 class="h1"> <b> Folha de Pagamento </b></h1>
  </div>
  <div class="container-fluid form-group shadow-lg p-3 mb-5 bg-white rounded col-md-5 table-responsive">

    <form action="resultado.php" method="POST">
      <fieldset class="col-auto rounded">
        <legend class="">Sua folha ponto é:</legend>

        <table class="table">

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
            <th>Data de Nascimento: </th>
            <td>
              <a> <?php echo $data_nascimento ?>
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
            <th>Email: </th>
            <td>
              <a> <?php echo $email ?>
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
              <a> <?php echo $data_cadastro ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Salario Base: </th>
            <td>
              <a> <?php echo "R$: " . $salario_base ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Horas Trabalhadas: </th>
            <td>
              <a> <?php echo $horas_trabalhadas ?>
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
              <a> <?php echo "R$: " . $adiantamento ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Vale Transporte: </th>
            <td>
              <a> <?php echo "R$: " . $vt ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>INSS: </th>
            <td>
              <a> <?php echo "R$: " . $inss ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Imposto de Renda Retido em Folha: </th>
            <td>
              <a> <?php echo "R$: " . $irrf ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Total de Descontos: </th>
            <td>
              <a> <?php echo "R$: " . $descontos ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>Salário Líquido: </th>
            <td>
              <a> <?php echo "R$: " . $salario_liquido ?>
              </a>
            </td>
          </tr>

          <tr>
            <th>FGTS: </th>
            <td>
              <a> <?php echo "R$: " . $fgts ?>
              </a>
            </td>
          </tr>

        </table>
      </fieldset>
      <div>

</html>