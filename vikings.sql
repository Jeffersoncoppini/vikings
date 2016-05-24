CREATE TABLE reserva(
	cpf varchar(20) NOT NULL,
	data date NOT NULL,
	nome varchar(50) NOT NULL,
	quantpessoas integer NOT NULL,
	hora time NOT NULL,
	constraint pk_reserva primary key(cpf,data)
);

CREATE TABLE evento(
	data date NOT NULL primary key,
	nomeevento varchar(30) NOT NULL,
	imagem varchar (30) NOT NULL,
	hora time NOT NULL
);

CREATE TABLE atracao(
	nomeatrac varchar(30) NOT NULL primary key,
	quantvotos integer,
	email varchar(30),
	telefone varchar(30) NOT NULL,
	tipo varchar(30) NOT NULL
);

CREATE TABLE evento_atracao(
	data date NOT NULL,
	nomeatrac varchar(30) NOT NULL,
	constraint pk_evento_atracao primary key(data,nomeatrac),
	constraint fk_evento_evento_atracao foreign key(data) references evento(data),
	constraint fk_atracao_evento_atracao foreign key(nomeatrac) references atracao(nomeatrac)
);

CREATE TABLE usuario(
	login varchar(30) NOT NULL primary key,
	senha varchar(30) NOT NULL,
	telefone varchar(30),
	email varchar(30),
	nivel integer NOT NULL
);

CREATE TABLE promocao(
	nomepromo varchar(30) NOT NULL,
	datainicio date NOT NULL,
	descri varchar(100),
	precopromo numeric NOT NULL,
	imagem varchar(30) NOT NULL,
	datafim date NOT NULL,
	constraint pk_promocao primary key(nomepromo,datainicio)
);

CREATE TABLE produto(
	codproduto serial NOT NULL primary key,
	nomeprod varchar(30) NOT NULL,
	descri varchar(30),
	un varchar(5) NOT NULL,
	preco numeric NOT NULL
);

CREATE TABLE promocao_produto(
	nomepromo varchar(30) NOT NULL,
	datainicio date NOT NULL,
	codproduto integer NOT NULL,
	constraint pk_promocao_produto primary key(nomepromo,datainicio,codproduto),
	constraint fk_promocao_promocao_produto foreign key(nomepromo,datainicio) references promocao(nomepromo,datainicio),
	constraint fk_produto_promocao_produto foreign key(codproduto) references produto(codproduto)
);
	
CREATE TABLE empresa(
	cnpj varchar(20) NOT NULL primary key,
	rsocial varchar(40) NOT NULL,
	nomefant varchar(40) NOT NULL,
	ie varchar(20),
	telefone varchar(30) NOT NULL,
	email varchar(30),
	avaliacao varchar(30),
	rua varchar(30) NOT NULL,
	bairro varchar(30) NOT NULL,
	num varchar(6) NOT NULL,
	compl varchar(30),
	cep varchar(15) NOT NULL,
	cidade varchar(30) NOT NULL,
	uf varchar(5) NOT NULL
);

CREATE TABLE anuncio(
	codanuncio serial NOT NULL,
	descricao varchar(50) NOT NULL,
	cnpj varchar(20) NOT NULL,
	constraint pk_anuncio primary key(codanuncio,cnpj),
	constraint fk_empresa_anuncio foreign key(cnpj) references empresa(cnpj)
);
