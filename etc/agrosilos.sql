CREATE TABLE usuario
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(64),
	email VARCHAR(64),
	senha VARCHAR(64),
	propriedade VARCHAR(64),
    perfil VARCHAR(64),
	PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE TABLE calculos
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    numero_animais INTEGER DEFAULT 0,
    dias_fornecimento INTEGER DEFAULT 0,
    consumo_forragem FLOAT DEFAULT 0,
    altura_silo FLOAT DEFAULT 0,
    espessura_fatia FLOAT DEFAULT 0.0,
    densidade FLOAT DEFAULT 0,

    quantidade_silo FLOAT DEFAULT 0.0,
    volume_silo FLOAT DEFAULT 0.0,
    volume_dia FLOAT DEFAULT 0.0,
    area_secao FLOAT DEFAULT 0.0,
    base_menor FLOAT DEFAULT 0.0,
    base_maior FLOAT DEFAULT 0.0,
    comprimento_silo FLOAT DEFAULT 0.0,
    usuario_id INTEGER DEFAULT 0, 

    FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE,
	PRIMARY KEY (id)
) ENGINE=INNODB;

SELECT * FROM calculos; 


CREATE TABLE mensagem
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
    data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	nome VARCHAR(64),
	email VARCHAR(64),
	mensagem TEXT,
	PRIMARY KEY (id)
) ENGINE=INNODB;

INSERT INTO mensagem VALUES
    (DEFAULT, DEFAULT, 'Steve Jobs', 'steve@apple.com', 'Olá mundo.')
; 