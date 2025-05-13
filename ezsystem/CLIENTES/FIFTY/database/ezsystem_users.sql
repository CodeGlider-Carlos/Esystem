



CREATE TABLE ezsystem_all_sresuall(
id              int(50) auto_increment not null,
modulo       varchar(15),
tipouser       varchar(10),
region       varchar(40),
acroregion      varchar(10),
unidad         varchar(40),
acronu         varchar(10),
rol       varchar(10),
nombre      varchar(80),
dirger      varchar(20),
userjefe      varchar(20),
usuario         varchar(20),
deparea         varchar(50),
contrasena      varchar(10),
vigencia   date null,
activo      varchar(1),
CONSTRAINT ezsystem_all_sresuall PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_all_sresuall_sutatse(
id            int(100) auto_increment not null,
unidad        varchar(15)null,
nombre        varchar(255)null,
fechalogin         varchar(100)null,
usuario        varchar(20)null,
estatus      varchar(50)null,
fechalogout         varchar(30)null,
CONSTRAINT ezsystem_all_sresuall_sutatse PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_all_cat_clientes(
id            int(2) auto_increment not null,
region            varchar(40) null,
acroregion            varchar(10) null,

unidad            varchar(80) null,
acronu            varchar(10) null,
obs            varchar(400) null,
usereg            varchar(15) null,
fechalta            varchar(15) null,
sevemp       float null,
prev       float null,
activo            varchar(2) null,
usermod            varchar(15) null,
fechamod            varchar(15) null,
CONSTRAINT ezsystem_all_cat_clientes PRIMARY KEY(id)
)ENGINE=InnoDb;

