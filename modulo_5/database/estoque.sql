create table produto (id integer primary key not null, descricao text,
estoque float, preco_custo float, preco_venda float, codigo_barras text, 
data_cadastro date, origem char(1));

create table venda (id integer PRIMARY KEY NOT NULL, data_venda date);

create table item_venda(id integer PRIMARY KEY NOT NULL, id_produto integer REFERENCES produto(id),
id_venda integer REFERENCES venda(id), quantidade float, preco float);