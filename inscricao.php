<?php
    class Inscricao {
        private $nome;
        private $curso;
        private $periodo;
        private $numeroPessoas;
        private $residencia;
        private $programaSociais;
        private $responsaveis;
        private $numeroagencia;
        private $numeroconta;
        private $telefone;
        private $situacao;
        private $auxilios;
        private $imagemRG;
        private $imagemCPF;
        private $idcomprovanterenda;
        private $idcomprovanteresidencia;
        private $rgmoradores;
        private $termocompromisso;
    
        function __construct(){
            
        }
        //get&set
        function getNome(){
            return $this -> nome;
        }
        function setNome($nome){
            $this -> nome = $nome;
        }

        function getCurso(){
            return $this -> curso;
        }
        function setCurso($curso){
            $this -> curso = $curso;
        }

        function getPeriodo(){
            return $this -> periodo;
        }
        function setPeriodo($periodo){
            $this -> periodo = $periodo;
        }

        function getNumeroPessoas(){
            return $this -> numeroPessoas;
        }
        function setNumeroPessoas($numeroPessoas){
            $this -> numeroPessoas = $numeroPessoas;
        }

        function getResidencia(){
            return $this -> residencia;
        }
        function setResidencia($residencia){
            $this -> residencia = $residencia;
        }

        function getProgramaSociais(){
            return $this -> programaSociais;
        }
        function setProgramaSociais($programaSociais){
            $this -> programaSociais = $programaSociais;
        }
        
        function getResponsaveis(){
            return $this -> responsaveis;
        }
        function setResponsaveis($responsaveis){
            $this -> responsaveis = $responsaveis;
        }

        function getNumeroagencia(){
            return $this -> numeroagencia;
        }
        function setNumeroagencia($numeroagencia){
            $this -> numeroagencia = $numeroagencia;
        }

        function getNumeroconta(){
            return $this -> numeroconta;
        }
        function setNumeroconta($numeroconta){
            $this -> numeroconta = $numeroconta;
        }

        function getTelefone(){
            return $this -> telefone;
        }
        function setTelefone($telefone){
            $this -> telefone = $telefone;
        }

        function getSituacao(){
            return $this -> situacao;
        }
        function setSituacao($situacao){
            $this -> situacao = $situacao;
        }

        function getAuxilios(){
            return $this -> auxilios;
        }
        function setAuxilios($auxilios){
            $this -> auxilios = $auxilios;
        }

        function getImagemRG(){
            return $this -> imagemRG;
        }
        function setImagemRG($imagemRG){
            $this -> imagemRG = $imagemRG;
        }

        function getImagemCPF(){
            return $this -> imagemCPF;
        }
        function setImagemCPF($imagemCPF){
            $this -> imagemCPF = $imagemCPF;
        }

        function getIdcomprovanterenda(){
            return $this -> idcomprovanterenda;
        }
        function setIdcomprovanterenda($idcomprovanterenda){
            $this -> idcomprovanterenda = $idcomprovanterenda;
        }

        function getIdcomprovanteresidencia(){
            return $this -> idcomprovanteresidencia;
        }
        function setIdcomprovanteresidencia($idcomprovanteresidencia){
            $this -> idcomprovanteresidencia = $idcomprovanteresidencia;
        }

        function getRgmoradores(){
            return $this -> rgmoradores;
        }
        function setRgmoradores($rgmoradores){
            $this -> rgmoradores = $rgmoradores;
        }

        function getTermocompromisso(){
            return $this -> termocompromisso;
        }
        function setTermocompromisso($termocompromisso){
            $this -> termocompromisso = $termocompromisso;
        }
        //fim do get&set
    }
?>