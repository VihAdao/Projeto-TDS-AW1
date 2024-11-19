CREATE DATABASE IF NOT EXISTS ppa_bdd;
  USE ppa_bdd;

  CREATE TABLE IF NOT EXISTS Usuarios(
    usuario VARCHAR(9) PRIMARY KEY NOT NULL,
    nome VARCHAR(200) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    email VARCHAR(100) NOT NULL,
    acesso_poder BOOLEAN NOT NULL
  );

  CREATE TABLE IF NOT EXISTS UsuariosPendentes(
    usuario VARCHAR(9) PRIMARY KEY NOT NULL,
    nome VARCHAR(200) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    email VARCHAR(100) NOT NULL,
    acesso_poder BOOLEAN NOT NULL
  );

  CREATE TABLE IF NOT EXISTS Prontuarios(
    usuario VARCHAR(9) PRIMARY KEY NOT NULL,
    inscrito BOOLEAN NOT NULL
  );

  INSERT IGNORE INTO Usuarios (usuario, nome, endereco, telefone, senha, email, acesso_poder) 
  VALUES ('BV1111111', 'Adm', 'Administração', '8638542954', 'adm', 'adm@gmail.com', true), 
  ('BV0000000', 'Aluno', 'Alunação', '7724114565', 'aluno', 'aluno@gmail.com', false);
  INSERT INTO Prontuarios (usuario, inscrito) VALUES
    ('BV1234567', FALSE),
    ('BV9876543', FALSE),
    ('BV5432167', FALSE),
    ('BV6789123', FALSE),
    ('BV4567891', FALSE),
    ('BV2345678', FALSE),
    ('BV8901234', FALSE),
    ('BV7654321', FALSE),
    ('BV3456789', FALSE),
    ('BV1122334', FALSE);
    
  CREATE TABLE IF NOT EXISTS Inscricao (
	curso VARCHAR(200) NOT NULL, 
	numero_pessoas_residencia INT NOT NULL, 
	comprovante_renda_bruta_familiar VARCHAR(200)  NOT NULL, 
	situacao_residencia_aluno  VARCHAR(200)  NOT NULL, 
	programa_social_beneficiado  VARCHAR(200)  NOT NULL, 
	comprovante_renda VARCHAR(200)  NOT NULL, 
	comprovante_residencia VARCHAR(200)  NOT NULL, 
	numero_agencia VARCHAR(6)  NOT NULL, 
	numero_conta VARCHAR(20)  NOT NULL, 
	imagem_RG VARCHAR(200)  NOT NULL, 
	imagem_CPF VARCHAR(200)  NOT NULL, 
	telefone VARCHAR(14)  NOT NULL, 
	RG_moradores_residencia VARCHAR(200)  NOT NULL, 
	termo_compromisso VARCHAR(200), 
	situacao_requerimento  VARCHAR(200)  NOT NULL, 
	auxilios_requeridos  VARCHAR(200)  NOT NULL, 
	ID_insricao INT NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(100)  NOT NULL , 
	usuario VARCHAR(9) PRIMARY KEY NOT NULL,
    CONSTRAINT fk_UsuInscricao FOREIGN KEY (nome) REFERENCES Usuarios (nome),
    CONSTRAINT fk_UsuInscricao FOREIGN KEY (usuario) REFERENCES Usuarios (usuario),
    CONSTRAINT fk_UsuInscricao FOREIGN KEY (telefone) REFERENCES Usuarios (telefone)
  );
