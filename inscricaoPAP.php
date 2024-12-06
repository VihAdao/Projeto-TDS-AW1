<?php
require_once "Inscricao.php";
require_once "controle/InscricaoDAO.php";


$nome = $_POST['nome'];
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$numeroPessoas = $_POST['numeroPessoas'];
$residencia = $_POST['residencia'];

//programaSociaisBF = $_POST['programaSociaisBF'];
//$programaSociaisLOAS = $_POST['programaSociaisLOAS'];
//$programaSociaisAR = $_POST['programaSociaisAR'];
//$programaSociaisJA = $_POST['programaSociaisJA'];
//$programaSociaisPM = $_POST['programaSociaisPM'];
//$programaSociaisTS = $_POST['programaSociaisTS'];

$programaSociaisBF = !empty($_POST['programaSociaisBF']) ? $_POST['programaSociaisBF'] : '';
$programaSociaisLOAS = !empty($_POST['programaSociaisLOAS']) ? $_POST['programaSociaisLOAS'] : '';
$programaSociaisAR = !empty($_POST['programaSociaisAR']) ? $_POST['programaSociaisAR'] : '';
$programaSociaisJA = !empty($_POST['programaSociaisJA']) ? $_POST['programaSociaisJA'] : '';
$programaSociaisPM = !empty($_POST['programaSociaisPM']) ? $_POST['programaSociaisPM'] : '';
$programaSociaisTS = !empty($_POST['programaSociaisTS']) ? $_POST['programaSociaisTS'] : '';


//echo"falhou";

$responsaveis = $_POST['responsaveis'];
$numeroagencia = $_POST['numeroagencia'];
$numeroconta = $_POST['numeroconta'];
$telefone = $_POST['telefone'];
$situacao = $_POST['situacao'];

//$auxiliosAlimentacao = $_POST['auxiliosAlimentacao'];
//$auxiliosTransporte = $_POST['auxiliosTransporte'];
//$auxiliosMoradia = $_POST['auxiliosMoradia'];
//$auxiliosSaude = $_POST['auxiliosSaude'];
//$auxiliosCreche = $_POST['auxiliosCreche'];
//$auxiliosMaterial = $_POST['auxiliosMaterial'];

$auxiliosAlimentacao = !empty($_POST['alimentacao']) ? $_POST['alimentacao'] : '';
$auxiliosTransporte = !empty($_POST['transporte']) ? $_POST['transporte'] : '';
$auxiliosMoradia = !empty($_POST['moradia']) ? $_POST['moradia'] : '';
$auxiliosSaude = !empty($_POST['saude']) ? $_POST['saude'] : '';
$auxiliosCreche = !empty($_POST['creche']) ? $_POST['creche'] : '';
$auxiliosMaterial = !empty($_POST['material']) ? $_POST['material'] : '';

$imagemRG = $_POST['imagemRG'];
$imagemCPF = $_POST['imagemCPF'];
$idcomprovanterenda = $_POST['idcomprovanterenda'];
$idcomprovanteresidencia = $_POST['idcomprovanteresidencia'];
$rgmoradores = $_POST['rgmoradores'];
$termocompromisso = $_POST['termocompromisso'];
//$usuario = $_POST['usuario'];

$inscricao = new inscricao();
$inscricao->setNome($nome);
$inscricao->setCurso($curso);
$inscricao->setPeriodo($periodo);
$inscricao->setNumeroPessoas($numeroPessoas);
$inscricao->setResidencia($residencia);


$inscricao->setProgramaSociaisBF($programaSociaisBF);
$inscricao->setProgramaSociaisLOAS($programaSociaisLOAS);
$inscricao->setProgramaSociaisAR($programaSociaisAR);
$inscricao->setProgramaSociaisJA($programaSociaisJA);
$inscricao->setProgramaSociaisPM($programaSociaisPM);
$inscricao->setProgramaSociaisTS($programaSociaisTS);
$inscricao->setResponsaveis($responsaveis);

$inscricao->setNumeroagencia($numeroagencia);
$inscricao->setNumeroconta($numeroconta);
$inscricao->setTelefone($telefone);
$inscricao->setSituacao($situacao);

$inscricao->setAuxiliosAlimentacao($auxiliosAlimentacao);
$inscricao->setAuxiliosTransporte($auxiliosTransporte);
$inscricao->setAuxiliosMoradia($auxiliosMoradia);
$inscricao->setAuxiliosSaude($auxiliosSaude);
$inscricao->setAuxiliosCreche($auxiliosCreche);
$inscricao->setAuxiliosMaterial($auxiliosMaterial);

$inscricao->setImagemRG($imagemRG);
$inscricao->setImagemCPF($imagemCPF);
$inscricao->setIdcomprovanterenda($idcomprovanterenda);
$inscricao->setIdcomprovanteresidencia($idcomprovanteresidencia);
$inscricao->setRgmoradores($rgmoradores);
$inscricao->setTermocompromisso($termocompromisso);

$dao = new InscricaoDAO();
//problema
$dao->cadastrar($inscricao);
//header("location:exibirInscricao.php");


?>
