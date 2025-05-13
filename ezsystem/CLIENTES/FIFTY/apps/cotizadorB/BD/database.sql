



CREATE TABLE cat_cotizacion(
id            int(4) auto_increment not null,
empresa            varchar(40)null,   
medico            varchar(40)null,   
especialidad            varchar(40)null,
procedimiento            varchar(80)null,
 
CONSTRAINT cat_cotizacion PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_cotizacion_base(
id            int(4) auto_increment not null,
idco           varchar(5)null,  
cantidad            float null,
idsap            varchar(20)null,
artiser            varchar(80)null,
costo            float null,
factor            float null,
iva            float null,
preciove            float null,
fecha            date,

 
CONSTRAINT cat_cotizacion_base PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE cat_especialidades(
id            int(4) auto_increment not null,
        
especialidad            varchar(40)null,
CONSTRAINT cat_especialidades PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE cat_paquetes(
id            int(4) auto_increment not null,
empresa            varchar(40)null,   
especialidad            varchar(40)null,
procedimiento            varchar(80)null,
activo            varchar(2)null,   
fechalta             date null,   
fechamod            date null,     
useregistra            varchar(10)null,
CONSTRAINT cat_paquetes PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_coti_med(
id            int(4) auto_increment not null,
idpaqfifty varchar(5)null,  
idmed            varchar(40)null,   

especialidad            varchar(40)null,
procedimiento            varchar(80)null,
activo            varchar(2)null,   
fechalta             date null,   
useralta            varchar(10)null,
fechamod            date null,     
useraprueba            varchar(10)null,
fechaprueba            date null,   
usaerautoriza            varchar(10)null,
fechautoriza            varchar(10)null,
CONSTRAINT cat_coti_med PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE cat_paquetes_base(
id            int(4) auto_increment not null,
idpaq           varchar(5)null,  
tipo           varchar(40)null,  
cantidad            float null,
idsap            varchar(30)null,
artiser            varchar(80)null,
costo             float null,
preciosinfactor             float null,
factor             float null,
precioventa             float null,
useregistra            varchar(10)null,
activo            varchar(2)null,   
CONSTRAINT cat_paquetes_base PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_paquetes_med(
id            int(4) auto_increment not null,
region            varchar(10)null,
unidad            varchar(10)null,
red            varchar(20)null,
idpaq           varchar(5)null,  
tipo           varchar(40)null,  
cantidad            float null,
idsap            varchar(30)null,
artiser            varchar(80)null,
costo             float null,
preciosinfactor             float null,
factor             float null,
precioventa             float null,
useregistra            varchar(10)null,
activo            varchar(2)null,   
CONSTRAINT cat_paquetes_med PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE cat_procedimientos(
id            int(4) auto_increment not null,
        
especialidad            varchar(40)null,
idprod            varchar(2)null,
procedimiento            varchar(80)null,
CONSTRAINT cat_procedimientos PRIMARY KEY(id)
)ENGINE=InnoDb;



CREATE TABLE cat_promo(
id            int(4) auto_increment not null,
unidad            varchar(10)null,   
tipo            varchar(1)null,   
tipo            varchar(1)null,   
codsap            varchar(40)null,
porce                float null,
nombre            varchar(80)null,
CONSTRAINT cat_promo PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE plantilla_form(
id            int(4) auto_increment not null,
        
hasta10            varchar(10)null,
hasta20            varchar(10)null,
hasta30            varchar(10)null,
hasta40            varchar(10)null,


CONSTRAINT plantilla_form PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE cat_precios(
id            int(4) auto_increment not null,
        
region            varchar(10)null,
unidad            varchar(10)null,
red            varchar(20)null,
idsap            varchar(20)null,
descripcion            varchar(250)null,
costo             float null,
factor             float null,
precioventa            float null,
CONSTRAINT cat_precios PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE cat_utilidad(
id            int(4) auto_increment not null,
        
region            varchar(10)null,
unidad            varchar(10)null,
red            varchar(20)null,

utilidadmin             float null,
autoriza            varchar(30)null,
fechalta    date null,
CONSTRAINT cat_utilidad PRIMARY KEY(id)
)ENGINE=InnoDb;




CREATE TABLE sresuall(
id              int(4) auto_increment not null,
modulo       varchar(15),
tipouser       varchar(10),
region       varchar(40),
acroregion      varchar(10),
unidad         varchar(40),
acronu         varchar(10),
rol       varchar(10),
nombre      varchar(80),
usuario         varchar(20),
contrasena      varchar(10),
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








CREATE TABLE cat_cotizacion(
id            int(4) auto_increment not null,
empresa            varchar(40)null,   
medico            varchar(40)null,   
especialidad            varchar(40)null,
procedimiento            varchar(80)null,
 
CONSTRAINT cat_cotizacion PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE cat_cotizaciones(
id            int(4) auto_increment not null,
idtarjetamed          varchar(10)null,  
procedimiento          varchar(60)null, 
promocion          varchar(60)null, 
descuento            float null,
aumento            float null,
coso            float null,
covc            float null,
cot            float null,

costo            float null,
precio            float null,

preciometa     float null,

fechalta            date null,
useralta            varchar(15)null,

estatus          varchar(2)null, 
 
CONSTRAINT cat_cotizaciones PRIMARY KEY(id)
)ENGINE=InnoDb;







CREATE TABLE cat_promo(
id            int(4) auto_increment not null,
region            varchar(20)null, 
unidad            varchar(10)null,   
tipo            varchar(1)null,    
codsap            varchar(40)null,
porce                float null,
nombre            varchar(100)null,
autoriza            varchar(100)null,
useralta            varchar(20)null,
fechalta            date null,
activo            varchar(1)null,
CONSTRAINT cat_promo PRIMARY KEY(id)
)ENGINE=InnoDb;