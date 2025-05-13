




CREATE TABLE ezsystem_assess_personal(
id              int(2) auto_increment not null,
activo            varchar(2)null,
region            varchar(15)null,
unidad            varchar(10)null,
dirger            varchar(10)null,
userjefe            varchar(20)null,
dep            varchar(15)null,
nombre            varchar(70)null,
area            varchar(70)null,
otro            varchar(70)null,
rol            varchar(40)null,
idtrab            varchar(10)null,
nombreco            varchar(200)null,
idpoa            varchar(8)null,
poasig            varchar(100)null,
usereg            varchar(20)null,
fechalta            varchar(15)null,
CONSTRAINT ezsystem_assess_personal PRIMARY KEY(id)
)ENGINE=InnoDb;


