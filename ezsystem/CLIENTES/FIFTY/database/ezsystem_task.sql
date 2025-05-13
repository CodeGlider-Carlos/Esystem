
CREATE TABLE ezsystem_task_namemin(
id              int(100) auto_increment not null,
region         varchar(20) null,
unidad         varchar(20) null,
yearfx         varchar(10) null,
mes         varchar(10) null,


tipo         varchar(20) null,
nombre           varchar(400) null,

useralta       varchar(15) null,
fechalta          date null,
CONSTRAINT ezsystem_task_namemin PRIMARY KEY(id)
)ENGINE=InnoDb;





