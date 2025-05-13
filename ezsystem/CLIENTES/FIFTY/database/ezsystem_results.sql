

CREATE TABLE ezsystem_results_plantgeneral(
id            int(10) auto_increment not null,
var1        varchar(1)null,
var2            int(1)null,


CONSTRAINT ezsystem_results_plantgeneral PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE ezsystem_results_muestra(
id            int(10) auto_increment not null,
unidad        varchar(50)null,
muestravigente            int(10)null,
fechactualizo        varchar(10)null,
usuarioactualizo     varchar(15)null,


CONSTRAINT ezsystem_results_muestra PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_results_estrategia(
id            int(10) auto_increment not null,
region            varchar(30)null,
unidad        varchar(30)null,
yearco          varchar(2)null,
mes            varchar(2)null,
estrategia        varchar(500)null,
obs        varchar(500)null,
useralta        varchar(20)null,
fechalta     date null,
activo        varchar(1)null,

CONSTRAINT ezsystem_results_estrategia PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_results_semaforo(
id              int(2) auto_increment not null,
region            varchar(30)null,
unidad            varchar(30)null,
ejercicio            varchar(4)null,
versei            varchar(10)null,
intervalo            varchar(1)null,
liminferior           float null,
limsuperior           float null,
fechact            varchar(10)null,
useralta            varchar(20)null,
CONSTRAINT ezsystem_results_semaforo PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_results_cat_userindica(
iduserindi            int(10) auto_increment not null,
region        varchar(20)null,
unidad        varchar(20)null,
rol            varchar(20)null,
tipouser            varchar(20)null,

pos        varchar(100)null,

CONSTRAINT ezsystem_results_cat_userindica PRIMARY KEY(iduserindi)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_results_estados(
id              int(4) auto_increment not null,
region          varchar(20)null,
unidad          varchar(20)null,
yearall          varchar(4)null,
yearco          varchar(2)null,
activo            varchar(2)null,
tipodato            varchar(20)null,
orden           float null,
concepto            varchar(80)null,
catcomment            varchar(20)null,
comment1          varchar(1000)null,
comment2          varchar(1000)null,
comment3          varchar(1000)null,
comment4          varchar(1000)null,
comment5          varchar(1000)null,
comment6          varchar(1000)null,
comment7          varchar(1000)null,
comment8          varchar(1000)null,
comment9          varchar(1000)null,
comment10          varchar(1000)null,
comment11          varchar(1000)null,
comment12          varchar(1000)null,
meta           float null,
ponde           float null,

unmed     varchar(25)null,

acumulado           float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,


CONSTRAINT ezsystem_results_estados PRIMARY KEY(id)
)ENGINE=InnoDb;








CREATE TABLE ezsystem_results_prod(
id              int(4) auto_increment not null,
region          varchar(20)null,
unidad          varchar(20)null,
yearall          varchar(4)null,
yearco          varchar(2)null,
activo            varchar(2)null,
tipodato            varchar(20)null,
orden           float null,
concepto            varchar(80)null,
catcomment            varchar(20)null,
comment1          varchar(1000)null,
comment2          varchar(1000)null,
comment3          varchar(1000)null,
comment4          varchar(1000)null,
comment5          varchar(1000)null,
comment6          varchar(1000)null,
comment7          varchar(1000)null,
comment8          varchar(1000)null,
comment9          varchar(1000)null,
comment10          varchar(1000)null,
comment11          varchar(1000)null,
comment12          varchar(1000)null,
meta           float null,
ponde           float null,

unmed     varchar(25)null,

acumulado           float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,


CONSTRAINT ezsystem_results_prod PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_results_objdirg (
idobdirg              int(4) auto_increment not null,
region          varchar(20)null,
unidad          varchar(20)null,
yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

nombre         varchar(350)null,
meta           float null,
pond           float null,
unmed            varchar(20)null,
tipodat             varchar(20)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_objdirg PRIMARY KEY(idobdirg)
)ENGINE=InnoDb;


CREATE TABLE ezsystem_results_objreg (
idobj              int(4) auto_increment not null,
idobdirg          varchar(20)null,
region          varchar(20)null,
unidad          varchar(20)null,
yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

nombre         varchar(350)null,
meta           float null,
pond           float null,
unmed            varchar(20)null,
tipodat             varchar(20)null,

fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_objreg PRIMARY KEY(idobj)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_results_indicas (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_indicas PRIMARY KEY(idindi)
)ENGINE=InnoDb;











CREATE TABLE ezsystem_results_ger (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,


region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_ger PRIMARY KEY(idindi)
)ENGINE=InnoDb;














CREATE TABLE ezsystem_results_gea (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_gea PRIMARY KEY(idindi)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_results_gem (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_gem PRIMARY KEY(idindi)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_results_enf (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_enf PRIMARY KEY(idindi)
)ENGINE=InnoDb;





CREATE TABLE ezsystem_results_far (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_far PRIMARY KEY(idindi)
)ENGINE=InnoDb;








CREATE TABLE ezsystem_results_ser (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_ser PRIMARY KEY(idindi)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_results_rh (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_rh PRIMARY KEY(idindi)
)ENGINE=InnoDb;





CREATE TABLE ezsystem_results_arp (
idindi              int(4) auto_increment not null,
idobdirg          varchar(20)null,
idobj          varchar(10)null,

region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_arp PRIMARY KEY(idindi)
)ENGINE=InnoDb;















CREATE TABLE ezsystem_results_ger (
idreg              int(4) auto_increment not null,
idobdirg          varchar(20)null,


region          varchar(20)null,
unidad          varchar(20)null,

yearini          varchar(4)null,
gerdir            varchar(8)null,
useresp            varchar(15)null,

tipoindi           varchar(35)null,
reg           varchar(35)null,
enfx1           varchar(60)null,


enfx2          varchar(60)null,

nombre         varchar(350)null,
meta             float null,
pond              float null,

unmed               varchar(25)null,
tipodat             varchar(20)null,
acumulado           float null,
promedio            float null,
cumple              float null,
resultado            float null,
m1           float null,
m2           float null,
m3           float null,
m4           float null,
m5           float null,
m6          float null,
m7           float null,
m8           float null,
m9           float null,
m10           float null,
m11           float null,
m12           float null,

obs1        varchar(350)null,
obs2        varchar(350)null,
obs3        varchar(350)null,
obs4        varchar(350)null,
obs5        varchar(350)null,
obs6        varchar(350)null,
obs7        varchar(350)null,
obs8        varchar(350)null,
obs9        varchar(350)null,
obs10        varchar(350)null,
obs11        varchar(350)null,
obs12        varchar(350)null,


fechalta              date null,
useralta             varchar(15)null,
vigencia              date null,
fechabaja              date null,
userbaja             varchar(15)null,
activo             varchar(2)null,
CONSTRAINT ezsystem_results_ger PRIMARY KEY(idreg)
)ENGINE=InnoDb;