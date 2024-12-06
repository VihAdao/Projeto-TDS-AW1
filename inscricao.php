<?php
    class Inscricao {
        private $ID_inscricao;
        private $nome;
        private $curso;
        private $periodo;
        private $numeroPessoas;
        private $residencia;
        private $programaSociaisBF;
        private $programaSociaisLOAS;
        private $programaSociaisAR;
        private $programaSociaisJA;
        private $programaSociaisPM;
        private $programaSociaisTS;
        private $responsaveis;
        private $numeroagencia;
        private $numeroconta;
        private $telefone;
        private $situacao;
        private $auxiliosAlimentacao;
        private $auxiliosTransporte;
        private $auxiliosMoradia;
        private $auxiliosSaude;
        private $auxiliosCreche;
        private $auxiliosMaterial;
        private $imagemRG;
        private $imagemCPF;
        private $idcomprovanterenda;
        private $idcomprovanteresidencia;
        private $rgmoradores;
        private $termocompromisso;
    
        function __construct(){
            
        }
        //get&set

        function getIDinscricao() {
            return $this->ID_inscricao;
        }

        function setIDinscricao($ID_inscricao) {
            $this->ID_inscricao = $ID_inscricao;
        }

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

        function getProgramaSociaisBF(){
            return $this -> programaSociaisBF;
        }

        function setProgramaSociaisBF($programaSociaisBF){
            $this -> programaSociaisBF = $programaSociaisBF;
        }
        
        function getProgramaSociaisLOAS(){
            return $this -> programaSociaisLOAS;
        }
        function getProgramaSociaisAR(){
            return $this -> programaSociaisAR;
        }
        function getProgramaSociaisJA(){
            return $this -> programaSociaisJA;
        }
        function getProgramaSociaisPM(){
            return $this -> programaSociaisPM;
        }
        function getProgramaSociaisTS(){
            return $this -> programaSociaisTS;
        }

       
        
        function setProgramaSociaisLOAS($programaSociaisLOAS){
            $this -> programaSociaisLOAS = $programaSociaisLOAS;
        }

        function setProgramaSociaisAR($programaSociaisAR){
            $this -> programaSociaisAR = $programaSociaisAR;
        }

        function setProgramaSociaisJA($programaSociaisJA){
            $this -> programaSociaisJA = $programaSociaisJA;
        }
        function setProgramaSociaisPM($programaSociaisPM){
            $this -> programaSociaisPM = $programaSociaisPM;
        }
        function setProgramaSociaisTS($programaSociaisTS){
            $this -> programaSociaisTS = $programaSociaisTS;
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

        function getAuxiliosAlimentacao(){
            return $this -> auxiliosAlimentacao;
        }
        function getAuxiliosTransporte(){
            return $this -> auxiliosTransporte;
        }
        function getAuxiliosMoradia(){
            return $this -> auxiliosMoradia;
        }
        function getAuxiliosSaude(){
            return $this -> auxiliosSaude;
        }
        function getAuxiliosCreche(){
            return $this -> auxiliosCreche;
        }
        function getAuxiliosMaterial(){
            return $this -> auxiliosMaterial;
        }
        function setAuxiliosAlimentacao($auxiliosAlimentacao){
            $this -> auxiliosAlimentacao = $auxiliosAlimentacao;
        }
        function setAuxiliosTransporte($auxiliosTransporte){
            $this -> auxiliosTransporte = $auxiliosTransporte;
        }
        function setAuxiliosMoradia($auxiliosMoradia){
            $this -> auxiliosMoradia = $auxiliosMoradia;
        }
        function setAuxiliosSaude($auxiliosSaude){
            $this -> auxiliosSaude = $auxiliosSaude;
        }
        function setAuxiliosCreche($auxiliosCreche){
            $this -> auxiliosCreche = $auxiliosCreche;
        }
        function setAuxiliosMaterial($auxiliosMaterial){
            $this -> auxiliosMaterial = $auxiliosMaterial;
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
