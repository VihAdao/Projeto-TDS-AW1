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

/*  INSERT IGNORE INTO Usuarios (usuario, nome, endereco, telefone, senha, email, acesso_poder) 
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
   */ 
  CREATE TABLE IF NOT EXISTS Inscricao (
	curso VARCHAR(200), 
	numero_pessoas_residencia INT, 
	situacao_residencia_aluno  VARCHAR(200),

	programa_social_BF  VARCHAR(200), 
  programa_social_LOAS  VARCHAR(200),
  programa_social_AR  VARCHAR(200),
  programa_social_JA  VARCHAR(200),
  programa_social_PM  VARCHAR(200),
  programa_social_TS  VARCHAR(200),

	comprovante_renda VARCHAR(200), 
	comprovante_residencia VARCHAR(200), 
	numero_agencia VARCHAR(6), 
	numero_conta VARCHAR(20), 
	imagem_RG VARCHAR(200), 
	imagem_CPF VARCHAR(200), 
	telefone VARCHAR(14), 
	RG_moradores_residencia VARCHAR(200), 
	termo_compromisso VARCHAR(200), 

	situacao_requerimento  VARCHAR(200), 
	auxilios_alimentacao  VARCHAR(200),
  auxilios_transporte  VARCHAR(200) ,
  auxilios_moradia  VARCHAR(200) ,
  auxilios_saude  VARCHAR(200) ,
  auxilios_creche  VARCHAR(200) ,
  auxilios_material  VARCHAR(200) ,
   
	ID_insricao INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(100), 
	/*usuario VARCHAR(9) NOT NULL,*/
  periodo  VARCHAR(200)
/*CONSTRAINT fk_UsuInscricao FOREIGN KEY (nome) REFERENCES Usuarios (nome),*/
/* CONSTRAINT fk_UsuInscricao FOREIGN KEY (usuario) REFERENCES Usuarios (usuario)*/
/*CONSTRAINT fk_UsuInscricao FOREIGN KEY (telefone) REFERENCES Usuarios (telefone)*/
  );
  
  
  
  
  insert into 
  inscricao (nome,
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
    values ("h",
    "p",
    "p",
    "p",
    1,
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    
    "p",
    "p",
    "p",
    "p",
    "p");
    
    
    
    insert into 
    inscricao(
    nome,
    curso,
    periodo,
    comprovante_renda,
    numero_pessoas_residencia,
    situacao_residencia_aluno,
    programa_social_BF, programa_social_LOAS,
    programa_social_AR, programa_social_JA,
    programa_social_PM, programa_social_TS,
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
    values 
    ("h",
    "p",
    "p",
    "p",
    1,
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    "p",
    
    "p",
    "p",
    "p",
    "p",
    "p");
    
    select * from inscricao;
