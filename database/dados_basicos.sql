INSERT INTO qualidadeHP.pri_permissoes_usuario (pri_id,pri_nome) VALUES(1,'Visualizar');
INSERT INTO qualidadeHP.pri_permissoes_usuario (pri_id,pri_nome) VALUES(2,'Editar');
INSERT INTO qualidadeHP.pri_permissoes_usuario (pri_id,pri_nome) VALUES(3,'Cadastrar');
INSERT INTO qualidadeHP.pri_permissoes_usuario (pri_id,pri_nome) VALUES(4,'Excluir');

INSERT INTO qualidadeHP.pro_perfil_usuario (pro_id, pro_nome) VALUES(1,'Administrador');

INSERT INTO qualidadeHP.prr_permissao_perfil_usuario (prr_id, pri_id, pro_id) VALUES(1, 1, 1);
INSERT INTO qualidadeHP.prr_permissao_perfil_usuario (prr_id, pri_id, pro_id) VALUES(2, 2, 1);
INSERT INTO qualidadeHP.prr_permissao_perfil_usuario (prr_id, pri_id, pro_id) VALUES(3, 3, 1);
INSERT INTO qualidadeHP.prr_permissao_perfil_usuario (prr_id, pri_id, pro_id) VALUES(4, 4, 1);

INSERT INTO qualidadeHP.uso_usuario (uso_id, uso_nome, uso_login, uso_senha, pro_id) VALUES(1,'Administrador', 'admin', '$2y$11$5Am5/KPbjmCEFQEN8X5FKegFv.JHRzC33OgU6AxPE..wUU0jo3ifO', 1);