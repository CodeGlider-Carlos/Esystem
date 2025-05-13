CREATE TABLE ezsystem_docu_lin(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(150)null,
numeral            varchar(20)null,
macro            varchar(10)null,
medible            varchar(300)null,
idenfx            varchar(15)null,
enfoque            varchar(100)null,
alcance              varchar(100)null,
tipotxt                  varchar(15)null,
idlin                  varchar(10)null,
punto                  varchar(1)null,
num                  varchar(10)null,
sangria                  varchar(1)null,
lin                  varchar(2000)null,

CONSTRAINT ezsystem_docu_lin PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_docu_pro_px(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(500)null,
numnom            varchar(100)null,
modseg            varchar(20)null,
macro            varchar(20)null,
medible            varchar(100)null,
grupo            varchar(150)null,
enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
idrespaso              varchar(40)null,
tipopro              varchar(40)null,
dueno              varchar(40)null,
nombrepro            varchar(150)null,
tipotxt                  varchar(15)null,
idetapa            varchar(3)null,
etapa            varchar(150)null,

obs            varchar(1100)null,
bloque            varchar(1)null,
flecha            varchar(10)null,
idta                  varchar(3)null,
punto                  varchar(1)null,
idnum                  varchar(3)null,
tarea                  varchar(2000)null,
momento                  varchar(150)null,
docapli                  varchar(500)null,

idfalla            varchar(15)null,
fallapo                  varchar(500)null,
activ_falla            varchar(1)null,
activ_rutina            varchar(1)null,
activ_barrera            varchar(1)null,

resptask                  varchar(15)null,

resptask1                  varchar(15)null,
resptask2                  varchar(15)null,
resptask3                  varchar(15)null,
resptask4                  varchar(15)null,
resptask5                  varchar(15)null,
resptask6                  varchar(15)null,
resptask7                  varchar(15)null,
resptask8                  varchar(15)null,
resptask9                  varchar(15)null,
resptask10                  varchar(15)null,




CONSTRAINT ezsystem_docu_pro_px PRIMARY KEY (id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_docu_cat_pro(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
macro            varchar(20)null,

grupo            varchar(150)null,

enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
nombrepro            varchar(200)null,

elabora            varchar(100)null,
revisa            varchar(100)null,
autoriza1            varchar(100)null,
autoriza2            varchar(100)null,

versionpro            varchar(10)null,
revisionpro            varchar(10)null,
fecharev           date null,


useralta              varchar(20)null,
fechalta           date null,
userbaja              varchar(20)null,
fechabaja           date null,


CONSTRAINT ezsystem_docu_cat_pro PRIMARY KEY(id)
)ENGINE=InnoDb;





CREATE TABLE ezsystem_docu_cat_color(
id              int(2) auto_increment not null,
clave            varchar(20)null,
nombrepos            varchar(50)null,
color            varchar(30)null,



CONSTRAINT ezsystem_docu_cat_color PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_docu_pro_dir(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(500)null,
numnom            varchar(100)null,
modseg            varchar(20)null,
macro            varchar(20)null,
medible            varchar(100)null,
grupo            varchar(150)null,
enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
idrespaso              varchar(40)null,
tipopro              varchar(40)null,
dueno              varchar(40)null,
nombrepro            varchar(150)null,
tipotxt                  varchar(15)null,
idetapa            varchar(3)null,
etapa            varchar(150)null,

obs            varchar(1100)null,
bloque            varchar(1)null,
flecha            varchar(10)null,
idta                  varchar(3)null,
punto                  varchar(1)null,
idnum                  varchar(3)null,
tarea                  varchar(2000)null,
momento                  varchar(150)null,
docapli                  varchar(500)null,

idfalla            varchar(15)null,
fallapo                  varchar(500)null,
activ_falla            varchar(1)null,
activ_rutina            varchar(1)null,
activ_barrera            varchar(1)null,

resptask                  varchar(15)null,

resptask1                  varchar(15)null,
resptask2                  varchar(15)null,
resptask3                  varchar(15)null,
resptask4                  varchar(15)null,
resptask5                  varchar(15)null,
resptask6                  varchar(15)null,
resptask7                  varchar(15)null,
resptask8                  varchar(15)null,
resptask9                  varchar(15)null,
resptask10                  varchar(15)null,




CONSTRAINT ezsystem_docu_pro_dir PRIMARY KEY (id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_docu_pro_sqe(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(500)null,
numnom            varchar(100)null,
modseg            varchar(20)null,
macro            varchar(20)null,
medible            varchar(100)null,
grupo            varchar(150)null,
enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
idrespaso              varchar(40)null,
tipopro              varchar(40)null,
dueno              varchar(40)null,
nombrepro            varchar(150)null,
tipotxt                  varchar(15)null,
idetapa            varchar(3)null,
etapa            varchar(150)null,

obs            varchar(1100)null,
bloque            varchar(1)null,
flecha            varchar(10)null,
idta                  varchar(3)null,
punto                  varchar(1)null,
idnum                  varchar(3)null,
tarea                  varchar(2000)null,
momento                  varchar(150)null,
docapli                  varchar(500)null,

idfalla            varchar(15)null,
fallapo                  varchar(500)null,
activ_falla            varchar(1)null,
activ_rutina            varchar(1)null,
activ_barrera            varchar(1)null,

resptask                  varchar(15)null,

resptask1                  varchar(15)null,
resptask2                  varchar(15)null,
resptask3                  varchar(15)null,
resptask4                  varchar(15)null,
resptask5                  varchar(15)null,
resptask6                  varchar(15)null,
resptask7                  varchar(15)null,
resptask8                  varchar(15)null,
resptask9                  varchar(15)null,
resptask10                  varchar(15)null,




CONSTRAINT ezsystem_docu_pro_sqe PRIMARY KEY (id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_docu_pro_prov(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(500)null,
numnom            varchar(100)null,
modseg            varchar(20)null,
macro            varchar(20)null,
medible            varchar(100)null,
grupo            varchar(150)null,
enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
idrespaso              varchar(40)null,
tipopro              varchar(40)null,
dueno              varchar(40)null,
nombrepro            varchar(150)null,
tipotxt                  varchar(15)null,
idetapa            varchar(3)null,
etapa            varchar(150)null,

obs            varchar(1100)null,
bloque            varchar(1)null,
flecha            varchar(10)null,
idta                  varchar(3)null,
punto                  varchar(1)null,
idnum                  varchar(3)null,
tarea                  varchar(2000)null,
momento                  varchar(150)null,
docapli                  varchar(500)null,

idfalla            varchar(15)null,
fallapo                  varchar(500)null,
activ_falla            varchar(1)null,
activ_rutina            varchar(1)null,
activ_barrera            varchar(1)null,

resptask                  varchar(15)null,

resptask1                  varchar(15)null,
resptask2                  varchar(15)null,
resptask3                  varchar(15)null,
resptask4                  varchar(15)null,
resptask5                  varchar(15)null,
resptask6                  varchar(15)null,
resptask7                  varchar(15)null,
resptask8                  varchar(15)null,
resptask9                  varchar(15)null,
resptask10                  varchar(15)null,




CONSTRAINT ezsystem_docu_pro_prov PRIMARY KEY (id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_docu_pro_fin(
id              int(2) auto_increment not null,
region            varchar(20)null,
unidad            varchar(20)null,
nom            varchar(500)null,
numnom            varchar(100)null,
modseg            varchar(20)null,
macro            varchar(20)null,
medible            varchar(100)null,
grupo            varchar(150)null,
enfoque            varchar(100)null,
idpro            varchar(40)null,
idlin            varchar(40)null,
idrespaso              varchar(40)null,
tipopro              varchar(40)null,
dueno              varchar(40)null,
nombrepro            varchar(150)null,
tipotxt                  varchar(15)null,
idetapa            varchar(3)null,
etapa            varchar(150)null,

obs            varchar(1100)null,
bloque            varchar(1)null,
flecha            varchar(10)null,
idta                  varchar(3)null,
punto                  varchar(1)null,
idnum                  varchar(3)null,
tarea                  varchar(2000)null,
momento                  varchar(150)null,
docapli                  varchar(500)null,

idfalla            varchar(15)null,
fallapo                  varchar(500)null,
activ_falla            varchar(1)null,
activ_rutina            varchar(1)null,
activ_barrera            varchar(1)null,

resptask                  varchar(15)null,

resptask1                  varchar(15)null,
resptask2                  varchar(15)null,
resptask3                  varchar(15)null,
resptask4                  varchar(15)null,
resptask5                  varchar(15)null,
resptask6                  varchar(15)null,
resptask7                  varchar(15)null,
resptask8                  varchar(15)null,
resptask9                  varchar(15)null,
resptask10                  varchar(15)null,




CONSTRAINT ezsystem_docu_pro_fin PRIMARY KEY (id)
)ENGINE=InnoDb;

