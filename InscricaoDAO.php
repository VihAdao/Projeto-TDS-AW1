<?php

require_once 'Conexao.php';


class InscricaoDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "inscricao";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela(nome,
            curso,
            periodo,
            comprovante_renda,
            numero_pessoas_residencia,
            situacao_residencia_aluno,
            programa_social_BF, 
            programa_social_LOAS,            
            programa_social_AR, 
            programa_social_JA,            
            programa_social_PM,
            programa_social_TS,
            numero_agencia,
            numero_conta,
            telefone,
            situacao_requerimento,
            auxilios_alimentacao,
            auxilios_transporte,
            auxilios_moradia,
            auxilios_saude,
            auxilios_creche,
            auxilios_material,
            imagem_RG,
            imagem_CPF,
            comprovante_residencia,
            RG_moradores_residencia,
            termo_compromisso) 
        values (
            :nome,
            :curso,
            :periodo,
            :comprovante_renda,
            :numero_pessoas_residencia,
            :situacao_residencia_aluno,
            :programa_social_BF, 
            :programa_social_LOAS,            
            :programa_social_AR, 
            :programa_social_JA,            
            :programa_social_PM,
            :programa_social_TS,
            :numero_agencia,
            :numero_conta,
            :telefone,
            :situacao_requerimento,
            :auxilios_alimentacao,
            :auxilios_transporte,
            :auxilios_moradia,
            :auxilios_saude,
            :auxilios_creche,
            :auxilios_material,
            :imagem_RG,
            :imagem_CPF,
            :comprovante_residencia,
            :RG_moradores_residencia,
            :termo_compromisso
        )";
        //echo"$this->sql";
        
        //print_r($dados);


        $this->resultado = $this->conexao->prepare($this->sql);

        //print_r($this->resultado);
        
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':curso', $dados->getCurso());
        $this->resultado->bindParam(':periodo', $dados->getPeriodo());
        $this->resultado->bindParam(':comprovante_renda', $dados->getIdcomprovanterenda());
        $this->resultado->bindParam(':numero_pessoas_residencia', $dados->getNumeroPessoas());        
        $this->resultado->bindParam(':situacao_residencia_aluno', $dados->getResidencia());       
        
        
        $this->resultado->bindParam(':programa_social_BF', $dados->getProgramaSociaisBF());
        $this->resultado->bindParam(':programa_social_LOAS', $dados->getProgramaSociaisLOAS());
        $this->resultado->bindParam(':programa_social_AR', $dados->getProgramaSociaisAR());
        $this->resultado->bindParam(':programa_social_JA', $dados->getProgramaSociaisJA());
        $this->resultado->bindParam(':programa_social_PM', $dados->getProgramaSociaisPM());
        $this->resultado->bindParam(':programa_social_TS', $dados->getProgramaSociaisTS());


        
        
        //$this->resultado->bindParam(':responsaveis', $dados->getResponsaveis());
        $this->resultado->bindParam(':numero_agencia', $dados->getNumeroagencia());
        $this->resultado->bindParam(':numero_conta', $dados->getNumeroconta());
        $this->resultado->bindParam(':telefone', $dados->getTelefone());
        $this->resultado->bindParam(':situacao_requerimento', $dados->getSituacao());

        $this->resultado->bindParam(':auxilios_alimentacao', $dados->getAuxiliosAlimentacao());
        $this->resultado->bindParam(':auxilios_transporte', $dados->getAuxiliosTransporte());
        $this->resultado->bindParam(':auxilios_moradia', $dados->getAuxiliosMoradia());
        $this->resultado->bindParam(':auxilios_saude', $dados->getAuxiliosSaude());
        $this->resultado->bindParam(':auxilios_creche', $dados->getAuxiliosCreche());
        $this->resultado->bindParam(':auxilios_material', $dados->getAuxiliosMaterial());

        $this->resultado->bindParam(':imagem_RG', $dados->getImagemRG());
        $this->resultado->bindParam(':imagem_CPF', $dados->getImagemCPF());
        $this->resultado->bindParam(':comprovante_residencia', $dados->getIdcomprovanteresidencia());
        $this->resultado->bindParam(':RG_moradores_residencia', $dados->getRgmoradores());
        $this->resultado->bindParam(':termo_compromisso', $dados->getTermocompromisso());
        //echo $dados->getNome();*/

        try
		{
			$this->resultado->execute();
		}
		catch (PDOException $e)
		{
			echo "Erro banco de dados: " . $e->getMessage() . "<br/>";
		}
      
    }
    /*

    public function listarTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarPorId($id) {
        $this->sql = "SELECT * FROM $this->tabela where ctg_id=:id";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':id', $id);
        $this->resultado->execute();
        return $this->resultado->fetch();
    }

    public function editar($dados) {

        $this->sql = "update $this->tabela set ctg_nome=:nome, ctg_descricao=:descricao 
        where ctg_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':descricao', $dados->getDescricao());
        $this->resultado->bindParam(':id', $dados->getId());
        
        $this->resultado->execute();
    }

    public function excluir($id) {
        $this->sql = "delete from $this->tabela where ctg_id=:id";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':id', $id);
        
        $this->resultado->execute();
    }
*/
}

?>
