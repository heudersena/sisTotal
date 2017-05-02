
CREATE TABLE categoria(
	ca_id INT PRIMARY KEY AUTO_INCREMENT,
	ca_categoria VARCHAR(100) NOT NULL,
	
);
CREATE TABLE link(
	li_id INT PRIMARY KEY AUTO_INCREMENT,
	li_link TEXT() NOT NULL,
	li_descricao VARCHAR(50) NULL,
	fk_ca_categoria INT UNIQUE,
	FOREIGN KEY (fk_ca_categoria)
	REFERENCES categoria(ca_id)
);