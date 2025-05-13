
CREATE TABLE sresuall(
id              int(4) auto_increment not null,
modulo       varchar(15),
tipouser       varchar(10),
region       varchar(40),
acroregion      varchar(10),
unidad         varchar(40),
acronu         varchar(10),
rol       varchar(10),rol       varchar(10),
nombre      varchar(80),
usuario         varchar(20),
deparea         varchar(50),
contrasena      varchar1(0),
vigencia   date null,
activo      varchar(1),
CONSTRAINT sresuall PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE sresuall_sutatse(
id            int(100) auto_increment not null,
unidad        varchar(15)null,
nombre        varchar(255)null,
fechalogin         varchar(100)null,
usuario        varchar(20)null,
estatus      varchar(50)null,
fechalogout         varchar(30)null,
CONSTRAINT sresuall_estatus PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE plantilla_form(

id                           int(2) auto_increment not null,
hasta10 varchar(2)null,
hasta20 varchar(2)null,
hasta30 varchar(2)null,
hasta40 varchar(2)null,

CONSTRAINT plantilla_form PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE users_lead(

id                       int(2) auto_increment not null,
region               varchar(25)null,
unidad              varchar(25)null,

rol                     varchar(25)null,
nombre            varchar(100)null,
posicion           varchar(50)null,
user                   varchar(10)null,
comision           varchar(2)null,
useralta            varchar(10)null,
fechalta            date null,
activo                varchar(1)null,

CONSTRAINT users_lead PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_socios(


id              int(2) auto_increment not null,

region            varchar(25)null,
unidad            varchar(25)null,
idso                       varchar(5)null,
nombre                 varchar(100)null,
tel1                        varchar(20)null,
rol                         varchar(20)null,


CONSTRAINT cat_socios PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE cat_redes(
id                           int(2) auto_increment not null,
region                   varchar(25)null,
unidad                   varchar(25)null,
categoria              varchar(50)null,
nombre                 varchar(100)null,
acronimo               varchar(20)null,
useralta                 varchar(15)null,
fechalta                date null,

activo varchar(1)null,

CONSTRAINT cat_redes PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_promo(

id                           int(2) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,

tipo                       varchar(1)null,
codsap                  varchar(50)null,
porce                    float null,
nombre                 varchar(100)null,

autoriza               varchar(100)null,

useralta               varchar(15)null,
fechalta               varchar(15)null,

activo                  varchar(1)null,

CONSTRAINT cat_precios PRIMARY KEY(id)
)ENGINE=InnoDb;







CREATE TABLE cat_precios(

id                           int(2) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,

red                         varchar(60)null,
tipolista                 varchar(5)null,
idsap                     varchar(50)null,
descripcion           varchar(100)null,
costo                     float null,
factor                    float null,
precioventa          float null,

useralta            varchar(15)null,
fechalta            varchar(15)null,

activo               varchar(1)null,

CONSTRAINT cat_precios PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE cat_paquetes(

id                           int(2) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,

red                         varchar(60)null,
tipopaq                 varchar(15)null,
especialidad        varchar(100)null,
procedimiento     varchar(100)null,
useralta            varchar(15)null,
fechalta            varchar(15)null,

activo               varchar(1)null,

CONSTRAINT cat_paquetes PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE cat_paquetes_base(

id                           int(2) auto_increment not null,
idpaq                    varchar(10)null,
mod                       varchar(1)null,
categoria             varchar(1)null,
cantidad               float null,

idsap                     varchar(20)null,
artiser                   varchar(100)null,
costo                     float null,
preciosinfactor    float null,
factor                    float null,
precioventa          float null,

useralta            varchar(15)null,
fechalta            varchar(15)null,

activo               varchar(1)null,

CONSTRAINT cat_paquetes_base PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_acuerdos(

id                          int(2) auto_increment not null,
region                  varchar(25)null,
unidad                 varchar(25)null,


idmod                  varchar(10)null,
idmod2                  varchar(10)null,
nombremod         varchar(100)null,

unmed                 varchar(5)null,
criterio                varchar(1)null,
critmin                float null,

valor                      float null,

autoriza               varchar(100)null,

fechalta               date null,
activo                   varchar(1)null,

CONSTRAINT cat_acuerdos PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_acuerdos_bene(

id                          int(2) auto_increment not null,
region                  varchar(25)null,
unidad                 varchar(25)null,

tipo                       varchar(1)null,
bene                     varchar(100)null,
user                      varchar(10)null,
obs                      varchar(500)null,

autoriza               varchar(100)null,

fechalta               date null,
activo                   varchar(1)null,

CONSTRAINT cat_acuerdos_bene PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_acuerdos_emp(

id                          int(2) auto_increment not null,
region                  varchar(25)null,
unidad                 varchar(25)null,
idtarjemp            varchar(10)null,

idmod                  varchar(10)null,
idmod2                varchar(10)null,
nombremod         varchar(100)null,

unmed                 varchar(5)null,
criterio                varchar(1)null,
critmin                float null,

valor                      float null,

idbene                 varchar(20)null,

autoriza               varchar(100)null,

fechalta               date null,
activo                   varchar(1)null,

CONSTRAINT cat_acuerdos_emp PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE cat_procedimientos(

id                          int(2) auto_increment not null,
region                  varchar(25)null,
unidad                 varchar(25)null,

especialidad       varchar(100)null,
procedimiento    varchar(100)null,
precio venta       float null,

useralta            varchar(10)null,
fechalta            date null,
activo                varchar(1)null,

CONSTRAINT cat_procedimientos PRIMARY KEY(id)
)ENGINE=InnoDb;







CREATE TABLE cat_tarjetas_med(

id                       int(2) auto_increment not null,
region               varchar(25)null,
unidad              varchar(25)null,

categoria         varchar(25)null,
idmed               varchar(5)null,
titulo                 varchar(10)null,
nombre             varchar(60)null,
especialidad    varchar(60)null,
rol                     varchar(50)null,
valor                 float null,
tipomo              varchar(5)null,


redcatego        varchar(30)null,
red                    varchar(60)null,
estatus              varchar(1)null,

haycomision    varchar(2)null,
modcom1           varchar(10)null,
common1           float null,
idbene1                varchar(10)null,

modcom2          varchar(10)null,
common2          float null,
idbene2             varchar(10)null,

modco3             varchar(10)null,
common3          float null,
idbene3            varchar(10)null,

useralta            varchar(15)null,
fechalta            date null,

fechamod         date null,
usermod            varchar(15)null,



activo               varchar(1)null,

CONSTRAINT cat_tarjetas_med PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE cat_creden_med(

id                                 int(2) auto_increment not null,
region                          varchar(25)null,
unidad                          varchar(25)null,
categoria                     varchar(25)null,
idmedtratante             varchar(5)null,
titulo                            varchar(10)null,
nombre                        varchar(60)null,
especialidad               varchar(60)null,
rol                                varchar(50)null,

tituplomg                    varchar(2)null,
tituplomgruta             varchar(100)null,
cedulapmg                  varchar(2)null,
cedulapmgruta           varchar(100)null,
titulopes                      varchar(2)null,
titulopesruta               varchar(100)null,
cedulapes                    varchar(2)null,
cedulapesruta             varchar(100)null,
consejo                        varchar(2)null,
consejoruta                 varchar(100)null,
poliza                           varchar(2)null,
polizaruta                    varchar(100)null,
useralta                       varchar(15)null,
fechalta                      varchar(15)null,
fechamod                    varchar(15)null,
usermod                       varchar(15)null,
activo                           varchar(1)null,

CONSTRAINT cat_creden_med PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE cat_tarjetas_emp(

id                       int(2) auto_increment not null,
region               varchar(25)null,
unidad              varchar(25)null,

categoria         varchar(25)null,
idemp               varchar(5)null,
nombre             varchar(60)null,
red                    varchar(60)null,
valor                 float null,
tipomo              varchar(5)null,


estatus              varchar(1)null,

carac1               varchar(100)null,
carac2              varchar(100)null,
carac3              varchar(100)null,
carac4              varchar(100)null,
carac5              varchar(100)null,
carac6              varchar(100)null,
carac7              varchar(100)null,
carac8              varchar(100)null,
carac9              varchar(100)null,
carac10            varchar(100)null,
obs                    varchar(500)null,

useresp          varchar(2)null,

ac1                 varchar(10)null,
bene1             varchar(100)null,
ac2                 varchar(10)null,
bene2             varchar(100)null,
ac3                 varchar(10)null,
bene3            varchar(100)null,
numin            float null,
ac4                varchar(10)null,
bene4            varchar(100)null,





useralta            varchar(15)null,
fechalta            date null,

fechamod         date null,
usermod            varchar(15)null,



activo               varchar(1)null,

CONSTRAINT cat_tarjetas_emp PRIMARY KEY(id)
)ENGINE=InnoDb;





CREATE TABLE crm_prospectos_med(
id                           int(3) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,
categoria              varchar(25)null,

socio                      varchar(60)null,
titulo                      varchar(5)null,
nombre                  varchar(60)null,
especialidad         varchar(60)null,
rol                          varchar(25)null,
tel1                         varchar(15)null,
tel2                         varchar(15)null,
email                     varchar(30)null,
tipomo                   varchar(10)null,
fuente                    varchar(50)null,
finterna                  varchar(50)null,
useresp                   varchar(15)null,
obs                          varchar(2000)null,

estatus                  varchar(20)null,
etapa                   varchar(20)null,

useralta               varchar(15)null,
fechalta               date null,
activo                  varchar(1)null,

CONSTRAINT crm_prospectos_med PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE crm_prospectos_emp(
id                           int(3) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,
categoria              varchar(25)null,
tipoco                   varchar(15)null,
nombreco             varchar(100)null,
acron                    varchar(15)null,

especialidad         varchar(60)null,
tel1                         varchar(15)null,

nombrecontacto    varchar(25)null,

tel2                         varchar(15)null,
email                     varchar(30)null,
valor                      float null,
tipomo                   varchar(10)null,
fuente                    varchar(50)null,
finterna                 varchar(50)null,
useresp                  varchar(15)null,

carac1                  varchar(100)null,
carac2                  varchar(100)null,
carac3                  varchar(100)null,
carac4                  varchar(100)null,
carac5                  varchar(100)null,
carac6                  varchar(100)null,
carac7                  varchar(100)null,
carac8                  varchar(100)null,
carac9                 varchar(100)null,
carac10                  varchar(100)null,

obs                          varchar(2000)null,

estatus                  varchar(20)null,
etapa                   varchar(20)null,

useralta               varchar(15)null,
fechalta               date null,

autoriza                varchar(15)null,
fechautoriza         date null,
autorizado            varchar(1)null,


activo                   varchar(1)null,

CONSTRAINT crm_prospectos_emp PRIMARY KEY(id)
)ENGINE=InnoDb;







CREATE TABLE cat_coti_med(

id                           int(2) auto_increment not null,
region                   varchar(25)null,
unidad                  varchar(25)null,

red                         varchar(60)null,
idpaq                     varchar(15)null,
idmed                     varchar(15)null,
idtarjeta                varchar(15)null,

especialidad        varchar(100)null,
procedimiento     varchar(100)null,

useralta varchar(15)null,
fechalta varchar(15)null,

costo                     float null,
precio                   float null,
ajuste                    float null,
preciohosp           float null,
iva                         float null,
total                      float null,
utilidadpor           float null,
utilidadmo            float null,
namepromo          varchar(100)null,
promo                   float null,
comso                   float null,
comvic                  float null,
comotros               float null,
utiporfin                float null,
utimofin                 float null,

costofin                 float null,
preciofin                float null,
porceutifin             float null,
utifinmo                  float null,

satimed                  float null,
satihosp                 float null,
satipx                    float null,

useraltaco            varchar(15)null,
fechaltaco           date null,


fechacx                date null,
nombrepx             varchar(100)null,
dx                          varchar(100)null,
telpx                      varchar(20)null,

estatus                  varchar(20)null,

activo                    varchar(1)null,

CONSTRAINT cat_coti_med PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_paquetes_med(

id                           int(2) auto_increment not null,
idpaq                    varchar(10)null,
mod                       varchar(1)null,
idtarj                     varchar(10)null,
categoria             varchar(1)null,
cantidad               float null,

idsap                     varchar(20)null,
artiser                   varchar(100)null,
costo                     float null,
preciosinfactor    float null,
factor                    float null,
precioventa          float null,

useralta            varchar(15)null,
fechalta            varchar(15)null,

activo               varchar(1)null,

CONSTRAINT cat_paquetes_med PRIMARY KEY(id)
)ENGINE=InnoDb;





CREATE TABLE ezsystem_task_hist_acciones(
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,
idtarjeta            varchar(20)null,
enfoque            varchar(30)null,
accion            varchar(500)null,

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
CONSTRAINT ezsystem_task_hist_acciones PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_task_hist_coment(
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,
idtarjeta            varchar(20)null,

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
CONSTRAINT ezsystem_task_hist_coment PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE cat_comision(
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,
empresa            varchar(100)null,
criterioco           float null,
nombrebene            varchar(80)null,
unmed     varchar(20)null,
porce           float null,
monto           float null,


autoriza            varchar(80)null,
fechaalta            date null,
activo       varchar(1)null,
CONSTRAINT cat_comision PRIMARY KEY(id)
)ENGINE=InnoDb;