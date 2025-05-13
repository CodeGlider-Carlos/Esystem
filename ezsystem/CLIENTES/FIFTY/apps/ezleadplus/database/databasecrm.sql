CREATE TABLE ezsystem_lead_users(
id                  int(2) auto_increment not null,
region           varchar(25)null,
unidad          varchar(25)null,
rol                 varchar(25)null,
nombre         varchar(100)null,
posicion        varchar(50)null,
user               varchar(10)null,
comision       varchar(2)null,
useralta        varchar(10)null,
fechalta        date null,
activo           varchar(1)null,

CONSTRAINT ezsystem_lead_users PRIMARY KEY(id)
)ENGINE=InnoDb;













CREATE TABLE ezsystem_lead_tarj_emp(
id                       int(2) auto_increment not null,
region                varchar(25)null,
unidad               varchar(25)null,
categoria           varchar(25)null,
idemp                varchar(5)null,
nombre              varchar(100)null,
red                      varchar(60)null,

valorestimado                   float null,
valorfin                   float null,
tipomo               varchar(5)null,


useralta                varchar(15)null,
fechalta                date null,
fechamod             date null,
usermod               varchar(15)null,

estatus                   varchar(1)null,
activo                   varchar(1)null,

CONSTRAINT ezsystem_lead_tarj_emp PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_lead_tarj_px(
id                       int(2) auto_increment not null,
region                varchar(25)null,
unidad               varchar(25)null,

idpx               varchar(5)null,
nombre              varchar(100)null,
procedimiento                      varchar(200)null,
especialidad                      varchar(200)null,

valorestimado                   float null,
valorfin                   float null,
tipomo               varchar(5)null,

useralta                varchar(15)null,
fechalta                date null,
fechamod             date null,
usermod               varchar(15)null,

estatus                   varchar(1)null,
activo                   varchar(1)null,

CONSTRAINT ezsystem_lead_tarj_px PRIMARY KEY(id)
)ENGINE=InnoDb;







CREATE TABLE ezsystem_lead_cat_precios(
id                                int(2) auto_increment not null,
region                        varchar(25)null,
unidad                       varchar(25)null,
especialidad              varchar(50)null,
procedimiento          varchar(100)null,
costo                           float null,
venta                          float null,
margenpo1                float null,
margenmo1               float null,
preciohosp                 float null,
margenpo2                float null,
margenmo2              float null,

CONSTRAINT ezsystem_lead_cat_precios PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_lead_hist_coment (
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,
etapa           varchar(2)null,
tipotarjeta            varchar(20)null,
idtarjeta            varchar(20)null,
coment           varchar(3000)null,
fechacoment            date null,
diapro            varchar(2)null,
mespro           varchar(2)null,
yearpro            varchar(2)null,





useralta            varchar(15)null,
fechalta            varchar(15)null,
fechamod              varchar(15)null,
usermod                  varchar(15)null,
activo       varchar(1)null,
nombrearchivo       varchar(500)null,
ruta       varchar(500)null,
CONSTRAINT ezsystem_lead_hist_coment PRIMARY KEY(id)
)ENGINE=InnoDb;





CREATE TABLE ezsystem_lead_prospectos_emp(
id                       int(3) auto_increment not null,
region               varchar(25)null,
unidad              varchar(25)null,
categoria          varchar(25)null,
tipoco               varchar(15)null,
nombreco        varchar(100)null,
acron               varchar(15)null,
especialidad     varchar(60)null,
tel1                    varchar(15)null,
nombrecontacto varchar(25)null,
tel2                     varchar(15)null,
email                  varchar(30)null,
valor                   float null,
tipomo                varchar(10)null,
fuente                 varchar(50)null,
finterna              varchar(50)null,
useresp               varchar(15)null,
obs                      varchar(2000)null,
estatus                varchar(20)null,
etapa                  varchar(20)null,
useralta              varchar(15)null,
fechalta              date null,
autoriza             varchar(15)null,
fechautoriza      date null,
autorizado         varchar(1)null,
activo                 varchar(1)null,

CONSTRAINT ezsystem_lead_prospectos_emp PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE ezsystem_lead_acuerdos(
id                              int(2) auto_increment not null,
region                      varchar(25)null,
unidad                     varchar(25)null,
idmod                         varchar(10)null,
idmod2                       varchar(10)null,
nombremod               varchar(100)null,
unmed                        varchar(5)null,
criterio                       varchar(1)null,
critmin                       float null,
valor                           float null,
autoriza                      varchar(100)null,
fechalta                       date null,
activo                          varchar(1)null,

CONSTRAINT ezsystem_lead_acuerdos PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE ezsystem_lead_acuerdos_bene(
id int(2)          auto_increment not null,
region             varchar(25)null,
unidad            varchar(25)null,
criterio           varchar(1)null,
idmod2           varchar(10)null,
unmed            varchar(10)null,
critmin           float null,
valor              float null,
bene               varchar(100)null,
user                varchar(10)null,
obs                 varchar(500)null,
autoriza        varchar(100)null,
fechalta         date null,
activo            varchar(1)null,

CONSTRAINT ezsystem_lead_acuerdos_bene PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_lead_prospectos_px(
id                       int(3) auto_increment not null,
region               varchar(25)null,
unidad              varchar(25)null,

nombre        varchar(100)null,
tel1        varchar(15)null,

procedimiento               varchar(150)null,
especialidad     varchar(60)null,

fuente     varchar(60)null,
useresp     varchar(15)null,
obs                 varchar(2000)null,
estatus                 varchar(20)null,
etapa                 varchar(20)null,

useralta              varchar(15)null,
fechalta              date null,


activo                 varchar(1)null,

CONSTRAINT ezsystem_lead_prospectos_px PRIMARY KEY(id)
)ENGINE=InnoDb;






CREATE TABLE ezsystem_lead_tareas(
id              int(100) auto_increment not null,
region        varchar(20)null,
unidad         varchar(20) null,
etapa         varchar(2) null,

tipotarj       varchar(15)null,
idtarj       varchar(15)null,
fechahoy       varchar(10)null,


tarea        varchar (3000)null,
prioridad        varchar (10)null,
responsabletarea         varchar (255)null,
fechaprogramada      date null, 
yearfinpro      varchar(4)null,
mesfinpro      varchar(2)null,
diafinpro      varchar(2)null,
observaciones         varchar(3000)null,
estatus          varchar(60) DEFAULT 'EN_CURSO',
fechacumple           date null, 
diacu              varchar(2)null,
mescu              varchar(2)null,
yearcu              varchar(2)null,


observacionescumple     varchar(3000)null,
usuarioregistra            varchar(10)null, 
usertask              varchar(20)null,
app             varchar(25)null,


activo            varchar(2)null,
CONSTRAINT ezsystem_lead_tareas PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE ezsystem_lead_hist_coment (
id              int(2) auto_increment not null,
region            varchar(25)null,
unidad            varchar(25)null,
etapa            varchar(2)null,
tipotarjeta           varchar(10)null,
idtarjeta           varchar(20)null,
tipocom           varchar(30)null,


coment           varchar(3000)null,
fechacoment            date null,
diapro            varchar(2)null,
mespro           varchar(2)null,
yearpro            varchar(2)null,





useralta            varchar(15)null,
fechalta            varchar(15)null,
fechamod              varchar(15)null,
usermod                  varchar(15)null,
activo       varchar(2)null,
nombrearchivo                 varchar(500)null,
ruta                 varchar(500)null,
CONSTRAINT ezsystem_lead_hist_coment PRIMARY KEY(id)
)ENGINE=InnoDb;
