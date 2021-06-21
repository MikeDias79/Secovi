/* nome, contato e endereço de somente pessoas que possuam contato independente de ter endereço ou não. */
SELECT p.nome AS Nome, DATE_FORMAT(p.DT_Insercao,'%d/%m/%Y') AS DT, c.email AS Email, e.endereco AS Endereco 
FROM tb_pessoas p 
RIGHT JOIN tb_contatos c ON p.ID_Pessoa = c.ID_Pessoa
LEFT JOIN tb_enderecos e ON p.ID_Pessoa = e.ID_Pessoa