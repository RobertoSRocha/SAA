CREATE DATABASE db_saa;

use db_saa;

CREATE TABLE usuario(

	id INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100)  NOT NULL,
    matricula VARCHAR(25)  NOT NULL,
    email VARCHAR(100)  NOT NULL,
    senha VARCHAR(255)  NOT NULL,
    permissao int  NOT NULL,
    PRIMARY KEY (id)
    
    )ENGINE = InnoDB;

CREATE TABLE locais(
	id INT AUTO_INCREMENT NOT NULL,
    rua VARCHAR(255) NOT NULL,
    numero int NOT NULL,
    Bairro VARCHAR(100)  NOT NULL,
   	nome VARCHAR(255)  NOT NULL,

    PRIMARY KEY (id)
    
    )ENGINE = InnoDB;
    
    
CREATE TABLE setor(
	id INT AUTO_INCREMENT NOT NULL,
    local_id INT NOT NULL,
    numero int,
    nome VARCHAR(100)  NOT NULL,
   	usuario_id INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id),
    FOREIGN KEY (local_id) REFERENCES locais(id)
    
    )ENGINE = InnoDB;
    
    
CREATE TABLE patrimonio(
	id INT AUTO_INCREMENT NOT NULL,
    tombo VARCHAR(50) NOT NULL,
    especificacao TEXT NOT NULL,
    nome VARCHAR(100)  NOT NULL,
   	permissao INT NOT NULL,
    setor_id INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (setor_id) REFERENCES setor(id)
    
    )ENGINE = InnoDB;
    

CREATE TABLE emprestimo(
	user_realiza INT NOT NULL,
	user_adiquire INT NOT NULL,
    user_recebe INT NOT NULL,
    patrimonio_id INT NOT NULL,
    status_empre VARCHAR(30) NOT NULL,
    data_empre DATE NOT NULL,
   	data_decol DATE NOT NULL,

    FOREIGN KEY (user_realiza) REFERENCES usuario(id),
	FOREIGN KEY (user_adiquire) REFERENCES usuario(id),
    FOREIGN KEY (user_recebe) REFERENCES usuario(id),
    FOREIGN KEY (patrimonio_id) REFERENCES patrimonio(id)
    
    )ENGINE = InnoDB;

CREATE TABLE formGraduacao(
	id INT AUTO_INCREMENT NOT NULL,
    usuario_id INT NOT NULL,
    data_requerimento DATE NOT NULL,
    tipo_requisicao VARCHAR(100)  NOT NULL,
   	

    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
    
    )ENGINE = InnoDB;
    

