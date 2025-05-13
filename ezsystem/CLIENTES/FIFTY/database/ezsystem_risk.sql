
CREATE TABLE ezsystem_risk_catcalc(
id              int(100) auto_increment not null,
region         varchar(20) null,
unidad         varchar(20) null,
yearfx         varchar(10) null,
mes         varchar(10) null,



macro           varchar(20) not null,

id_enfoque       varchar(20) null,
enfoque  varchar(1000)null,

id_falla            varchar(15) not null,
falla           varchar(1000) not null,

res_sev       float null,
res_prob       float null,
res_bar       float null,
res       float null,
costopro       float null,
total       float null,

evaluador       varchar(15) null,
fechaev          date null,
CONSTRAINT ezsystem_risk_catcalc PRIMARY KEY(id)
)ENGINE=InnoDb;





