

SELECT pessoa.*
 FROM pessoas pessoa
INNER JOIN coristas corista ON pessoa.id = corista.pessoa_id
INNER JOIN chamadas chamada ON chamada.corista_id = corista.id
INNER JOIN ensaios ensaio ON ensaio.id = chamada.ensaio_id
WHERE ensaio.id = 1;

SELECT pessoa.*, corista.id id_para_adicionar
 FROM pessoas pessoa
INNER JOIN coristas corista ON pessoa.id = corista.pessoa_id
WHERE corista.id NOT IN (
    SELECT chamada.corista_id
     FROM  chamadas chamada 
     INNER JOIN ensaios ensaio ON ensaio.id = chamada.ensaio_id
     WHERE ensaio.id = 1
);
