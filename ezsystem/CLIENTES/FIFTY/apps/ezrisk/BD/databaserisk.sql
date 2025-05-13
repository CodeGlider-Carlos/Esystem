CREATE TABLE hist_tareas(
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,

tarea            varchar(500)null,

useresp            varchar(15)null,

fechapro            date null,
diapro            varchar(2)null,
mespro           varchar(2)null,
yearpro            varchar(2)null,



estatus            varchar(25)null,

fechacu            date null,
diacu            varchar(2)null,
mescu           varchar(2)null,
yearcu           varchar(2)null,



obs            varchar(3000)null,



useralta            varchar(15)null,
fechalta            varchar(15)null,
fechamod              varchar(15)null,
usermod                  varchar(15)null,
activo       varchar(1)null,
CONSTRAINT hist_tareas PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE hist_coment(
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,


coment            varchar(3000)null,


fechacoment            date null,
diapro            varchar(2)null,
mespro           varchar(2)null,
yearpro            varchar(2)null,


useralta            varchar(15)null,
fechalta            varchar(15)null,
fechamod              varchar(15)null,
usermod                  varchar(15)null,
activo       varchar(1)null,
CONSTRAINT hist_coment PRIMARY KEY(id)
)ENGINE=InnoDb;