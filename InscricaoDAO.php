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
        $this->tabela = "Inscricao";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela (ctg_nome, ctg_curso, ctg_periodo, ctg_numeroPessoas, ctg_residencia, ctg_programaSociais, ctg_responsaveis, ctg_numeroagencia, ctg_numeroconta, ctg_telefone, ctg_situacao, ctg_auxilios, ctg_imagemRG, ctg_imagemCPF, ctg_idcomprovanterenda, ctg_idcomprovanteresidencia, ctg_rgmoradores, ctg_termocompromisso) values (:nome,:curso,:periodo,:numeroPessoas,:residencia,:programaSociais,:responsaveis,:numeroagencia,:numeroconta,:telefone,:situacao,:auxilios,:imagemRG,:imagemCPF,:idcomprovanterenda,:idcomprovanteresidencia,:rgmoradores,:termocompromisso)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':curso', $dados->getCurso());
        $this->resultado->bindParam(':periodo', $dados->getPeriodo());
        $this->resultado->bindParam(':numeroPessoas', $dados->getNumeroPessoas());
        $this->resultado->bindParam(':residencia', $dados->getResidencia());
        $this->resultado->bindParam(':programaSociais', $dados->getProgramaSocias());
        $this->resultado->bindParam(':responsaveis', $dados->getResponsaveis());
        $this->resultado->bindParam(':numeroagencia', $dados->getNumeroagencia());
        $this->resultado->bindParam(':numeroconta', $dados->getNumeroconta());
        $this->resultado->bindParam(':telefone', $dados->getTelefone());
        $this->resultado->bindParam(':situacao', $dados->getSituacao());
        $this->resultado->bindParam(':auxilios', $dados->getAuxilios());
        $this->resultado->bindParam(':imagemRG', $dados->getImagemRG());
        $this->resultado->bindParam(':imagemCPF', $dados->getImagemCPF());
        $this->resultado->bindParam(':idcomprovanterenda', $dados->getIdcomprovanterenda());
        $this->resultado->bindParam(':idcomprovantereresidencia', $dados->getIdcomprovanteresidencia());
        $this->resultado->bindParam(':rgmoradores', $dados->getRgmoradores());
        $this->resultado->bindParam(':termocompromisso', $dados->getTermocompromisso());

        $this->resultado->execute();
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
