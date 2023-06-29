CREATE TABLE pri_permissoes_usuario
(
    pri_id   smallint unsigned primary key auto_increment,
    pri_nome varchar(50) not null
);

CREATE TABLE pro_perfil_usuario
(
    pro_id   smallint unsigned primary key auto_increment,
    pro_nome varchar(50) not null
);

CREATE TABLE prr_permissao_perfil_usuario
(
    prr_id smallint unsigned primary key auto_increment,
    pri_id smallint unsigned not null,
    pro_id smallint unsigned not null
);

ALTER TABLE prr_permissao_perfil_usuario add constraint fk_prr_pri1 foreign key (pri_id) references pri_permissoes_usuario (pri_id);
ALTER TABLE prr_permissao_perfil_usuario add constraint fk_prr_pro1 foreign key (pro_id) references pro_perfil_usuario (pro_id);

CREATE TABLE uso_usuario
(
    uso_id    smallint unsigned primary key auto_increment,
    uso_nome  varchar(50)       not null,
    uso_login varchar(30)       not null,
    uso_senha varchar(100)      not null,
    pro_id    smallint unsigned not null
);

ALTER TABLE uso_usuario add constraint fk_uso_pro1 foreign key (pro_id) references pro_perfil_usuario (pro_id);

CREATE TABLE cro_cargo
(
    cro_id               smallint unsigned primary key auto_increment,
    cro_nome             varchar(50)       not null,
    uso_id_cadastro      smallint unsigned not null,
    cro_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    cro_data_atualizacao date
);

ALTER TABLE cro_cargo add constraint fk_cro_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE cro_cargo add constraint fk_cro_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE str_setor
(
    str_id              smallint unsigned primary key auto_increment,
    str_nome            varchar(50)       not null,
    uso_id_cadastro     smallint unsigned not null,
    str_data_cadastro   date              not null,
    uso_id_atualizacao  smallint unsigned,
    str_data_atualizacao date
);

ALTER TABLE str_setor add constraint fk_str_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE str_setor add constraint fk_str_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE clr_colaborador
(
    clr_id               smallint unsigned primary key auto_increment,
    clr_nome             varchar(50)       not null,
    clr_email            varchar(50)       not null,
    crl_ramal            int(8)            not null,
    cro_id               smallint unsigned not null,
    str_id               smallint unsigned not null,
    uso_id_cadastro      smallint unsigned not null,
    cro_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    cro_data_atualizacao date
);

ALTER TABLE clr_colaborador add constraint fk_clr_cro1 foreign key (cro_id) references cro_cargo (cro_id);
ALTER TABLE clr_colaborador add constraint fk_clr_str2 foreign key (str_id) references str_setor (str_id);
ALTER TABLE clr_colaborador add constraint fk_clr_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE clr_colaborador add constraint fk_clr_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE rno_reuniao
(
    rno_id               smallint unsigned primary key auto_increment,
    rno_titulo           varchar(50)       not null,
    rno_local            varchar(50),
    rno_link             varchar(300),
    rno_tipo             tinyint(1)        not null,
    rno_data_reuniao     date              not null,
    rno_responsavel      varchar(50)       not null,
    uso_id_cadastro      smallint unsigned not null,
    rno_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    rno_data_atualizacao date
);

ALTER TABLE rno_reuniao add constraint fk_rno_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE rno_reuniao add constraint fk_rno_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE lme_lembrete
(
    lme_id            smallint unsigned primary key auto_increment,
    lme_nome          varchar(50) not null,
    lme_email         varchar(50) not null,
    lme_setor         varchar(50) not null,
    lme_enviado       tinyint(1) DEFAULT 2,
    lme_data_cadastro date        not null,
    lme_data_envio    date
);

CREATE TABLE lmo_lembrete_reuniao
(
    lmo_id smallint unsigned primary key auto_increment,
    rno_id smallint unsigned not null,
    lme_id smallint unsigned not null
);

ALTER TABLE lmo_lembrete_reuniao add constraint fk_lmo_rno1 foreign key (rno_id) references rno_reuniao (rno_id);
ALTER TABLE lmo_lembrete_reuniao add constraint fk_lmo_lme1 foreign key (lme_id) references lme_lembrete (lme_id);

CREATE TABLE aro_arquivo
(
    aro_id               smallint unsigned primary key auto_increment,
    aro_nome             varchar(50)       not null,
    aro_identificador    varchar(50)       not null,
    aro_tipo             tinyint unsigned  not null,
    uso_id_cadastro      smallint unsigned not null,
    aro_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    aro_data_atualizacao date
);

ALTER TABLE aro_arquivo add constraint fk_aro_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE aro_arquivo add constraint fk_aro_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE cno_conteudo
(
    cno_id               smallint unsigned primary key auto_increment,
    cno_titulo           varchar(50)       not null,
    cno_descricao        text,
    cno_identificador    varchar(50)       not null,
    aro_id               smallint unsigned,
    uso_id_cadastro      smallint unsigned not null,
    cno_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    cno_data_atualizacao date
);

ALTER TABLE cno_conteudo add constraint fk_cno_aro1 foreign key (aro_id) references aro_arquivo (aro_id);
ALTER TABLE cno_conteudo add constraint fk_cno_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE cno_conteudo add constraint fk_cno_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE rlo_relatorio
(
    rlo_id               smallint unsigned primary key auto_increment,
    rlo_titulo           varchar(50)       not null,
    rlo_link             varchar(300)      not null,
    rlo_tipo             tinyint(1)        not null,
    rlo_senha_acesso     varchar(100)      not null,
    uso_id_cadastro      smallint unsigned not null,
    rlo_data_cadastro    date              not null,
    uso_id_atualizacao   smallint unsigned,
    rlo_data_atualizacao date
);

ALTER TABLE rlo_relatorio add constraint fk_rlo_uso1 foreign key (uso_id_cadastro) references uso_usuario (uso_id);
ALTER TABLE rlo_relatorio add constraint fk_rlo_uso2 foreign key (uso_id_atualizacao) references uso_usuario (uso_id);

CREATE TABLE eml_email
(
    eml_id                 smallint unsigned primary key auto_increment,
    eml_assunto            varchar(100) not null,
    eml_mensagem           text         not null,
    eml_nome_remetente     varchar(50)  not null,
    eml_email_remetente    varchar(50)  not null,
    eml_setor_remetente    varchar(50)  not null,
    eml_host_remetente     varchar(50)  not null,
    eml_ip_remetente       int          not null,
    eml_nome_destinatario  varchar(50)  not null,
    eml_email_destinatario varchar(50)  not null,
    eml_data_envio         datetime     not null
);