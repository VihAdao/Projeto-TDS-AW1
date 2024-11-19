<?php
require_once "inscricao.php";

$nome = $_POST['nome'];
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$numeroPessoas = $_POST['numeroPessoas'];
$residencia = $_POST['residencia'];
$programaSociais = $_POST['programaSociais'];
$responsaveis = $_POST['responsaveis'];
$numeroagencia = $_POST['numeroagencia'];
$numeroconta = $_POST['numeroconta'];
$telefone = $_POST['telefone'];
$situacao = $_POST['situacao'];
$auxilios = $_POST['auxilios'];
$imagemRG = $_POST['imagemRG'];
$imagemCPF = $_POST['imagemCPF'];
$idcomprovanterenda = $_POST['idcomprovanterenda'];
$idcomprovanteresidencia = $_POST['idcomprovanteresidencia'];
$rgmoradores = $_POST['rgmoradores'];
$termocompromisso = $_POST['termocompromisso'];


$inscricao = new inscricao();
$inscricao->setNome($nome);
$inscricao->setCurso($curso);
$inscricao->setPeriodo($periodo);
$inscricao->setNumeroPessoas($numeroPessoas);
$inscricao->setResidencia($residencia);
$inscricao->setProgramaSociais($programaSociais);
$inscricao->setResponsaveis($responsaveis);
$inscricao->setProgramaSociais($programaSociais);
$inscricao->setNumeroagencia($numeroagencia);
$inscricao->setNumeroconta($numeroconta);
$inscricao->setTelefone($telefone);
$inscricao->setSituacao($situacao);
$inscricao->setAuxilios($auxilios);
$inscricao->setImagemRG($imagemRG);
$inscricao->setImagemCPF($imagemCPF);
$inscricao->setIdcomprovanterenda($idcomprovanterenda);
$inscricao->setIdcomprovanteresidencia($idcomprovanteresidencia);
$inscricao->setRgmoradores($rgmoradores);
$inscricao->setTermocompromisso($termocompromisso);


?>
