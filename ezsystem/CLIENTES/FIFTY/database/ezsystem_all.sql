
CREATE TABLE ezsystem_all_ejercicio(
id              int(2) auto_increment not null,
num            varchar(2)null,
completo            varchar(4)null,

CONSTRAINT ezsystem_all_ejercicio PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_all_cat_macro(
id              int(2) auto_increment not null,
activo            varchar(2)null,
macro            varchar(15)null,
nombre            varchar(100)null,
useralta            varchar(15)null,
fechalta            varchar(15)null,
fechamod              varchar(15)null,
usermod                  varchar(15)null,
CONSTRAINT ezsystem_all_cat_macro PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_all_formato_cedulas(

id              int(2) auto_increment not null,
col1            varchar(1)null,
col2           varchar(1)null,
col3            varchar(1)null,
col4            varchar(1)null,
col5            varchar(1)null,
col6            varchar(1)null,
col7            varchar(1)null,
col8            varchar(1)null,
col9            varchar(1)null,
col10            varchar(1)null,
col11            varchar(1)null,
col12            varchar(1)null,
col13            varchar(1)null,
col14           varchar(1)null,
col15            varchar(1)null,

CONSTRAINT ezsystem_all_formato_cedulas PRIMARY KEY(id)

)ENGINE=InnoDb;



CREATE TABLE ezsystem_all_cat_pfuncional(
id            int(4) auto_increment not null,
activo            varchar(2)null,
unidad            varchar(10)null,
tipo     varchar(10)null,
nombre        varchar(150)null,
acronimo        varchar(30)null,
usereg            varchar(10)null,
fechalta           varchar(15)null,
CONSTRAINT ezsystem_all_cat_pfuncional PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_all_cat_pmisional(
id            int(4) auto_increment not null,
activo            varchar(2)null,
unidad            varchar(10)null,
userjefe     varchar(20)null,
acronimo        varchar(100)null,
nombre        varchar(150)null,
usereg            varchar(10)null,
fechalta           varchar(15)null,
CONSTRAINT ezsystem_all_cat_pmisional PRIMARY KEY(id)
)ENGINE=InnoDb;


