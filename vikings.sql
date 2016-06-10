CREATE TABLE reserva(
	cpf varchar(20) NOT NULL constraint pk_reserva primary key,
	datar date NOT NULL,
	nome varchar(50) NOT NULL,
	qtpessoas integer NOT NULL,
	hora time NOT NULL
);

CREATE TABLE evento(
	idevento serial NOT NULL constraint pk_evento primary key,
	dataevento date NOT NULL,
	nomeevento varchar(30) NOT NULL,
	imagem varchar (30) NOT NULL,
	hora time NOT NULL,
	pgini integer NOT NULL
);

CREATE TABLE atracao(
	idatracao serial NOT NULL constraint pk_atracao primary key,
	nomeatracao varchar(30) NOT NULL,
	qtvotos integer,
	email varchar(30),
	telefone varchar(30) NOT NULL,
	tipo varchar(30) NOT NULL
);

CREATE TABLE evento_atracao(
	idevento integer NOT NULL,
	idatracao integer NOT NULL,
	constraint pk_evento_atracao primary key(idevento,idatracao),
	constraint fk_evento_evento_atracao foreign key(idevento) references evento(idevento),
	constraint fk_atracao_evento_atracao foreign key(idatracao) references atracao(idatracao)
);

CREATE TABLE usuario(
	login varchar(30) NOT NULL primary key,
	senha varchar(30) NOT NULL,
	telefone varchar(30),
	email varchar(30),
	adm integer NOT NULL
);

CREATE TABLE promocao(
	nomepromo varchar(30) NOT NULL constraint pk_promocao primary key
,
	datainicio date NOT NULL,
	descricao varchar(100),
	precopromo numeric NOT NULL,
	imagem varchar(30) NOT NULL,
	datafim date NOT NULL,
	pgini integer NOT NULL
);

CREATE TABLE produto(
	codproduto serial NOT NULL primary key,
	nome varchar(30) NOT NULL,
	descricao varchar(30),
	un varchar(5) NOT NULL,
	preco numeric NOT NULL,
	tipo varchar(30) NOT NULL
);

CREATE TABLE promocao_produto(
	nomepromo varchar(30) NOT NULL,
	codproduto integer NOT NULL,
	constraint pk_promocao_produto primary key(nomepromo,codproduto),
	constraint fk_promocao_promocao_produto foreign key(nomepromo) references promocao(nomepromo),
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
	numero varchar(6) NOT NULL,
	complemento varchar(30),
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
