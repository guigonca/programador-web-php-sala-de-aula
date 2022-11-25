use projeto;

RENAME TABLE produto TO produtos;
ALTER TABLE produtos ADD categoria varchar(30) AFTER tipo;
ALTER TABLE produtos ADD fabricante varchar(30) AFTER categoria;
ALTER TABLE estoque CHANGE valor valor_compra double;
ALTER TABLE estoque ADD valor_venda double AFTER valor_compra;

SELECT * FROM produtos 
LEFT JOIN estoque 
ON idproduto = Id_produto
WHERE idproduto = 3;