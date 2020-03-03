/*
CREO LA BASE DE DATOS
*/
create schema sisposw89;
/*
USO LA BASE DE DATOS
*/
use sisposw89;
/*Creo las tablas necesarias*/
create table Clientes (Id_Cliente Int (11)  primary key , Nombres varchar (50) , Apellidos Varchar (50) , Telefonos varchar (50), Celular varchar (20) , Email varchar (50) , Direccion varchar (60) , Pass varchar(30)  , Tipo Varchar (20)  );
create table Empleados(Id_Empleado int (11) primary key auto_increment,Nombres varchar (50), Apellidos varchar (50), Telefonos varchar (50),Direccion varchar (60),Email varchar (50), Pass varchar(30)  , Tipo Varchar (20)  );
create table Usuarios (Id_User Int (11)  primary key , Pass Varchar (30) , Nombres varchar (50), Apellidos Varchar (50), Tipo Varchar (20) );
create table Categoria (Id_Categoria varchar (6) primary key not null, Nombre_Cat varchar (20));
create table Productos (Id_Producto Int (6) auto_increment primary key not null, Nombre varchar (20), Descripcion Varchar (50), ValorUnitario float (11,2), Nombre_Cat varchar (20), Proveedor varchar (20), Estado boolean, Existencias int (5));
create table Producto_Proveedor (Id_producto int (6), Id_Proveedor int(11), Nombre_Producto varchar (20), Nombre_Proveedor varchar(20));
create table Proveedores (Id_Proveedor int (11) auto_increment primary key not null, Nombre_Prov varchar (20), Direccion Varchar (60), Email varchar (50), Telefonos varchar (50));
create table Venta_Cabecera (Id_Venta int(11) auto_increment primary key not null,Id_Cliente int(11), fecha date,forma_pago varchar (20),Total_Factura float(13,2));
create table Venta_Detalle (Id_Venta int(11),Id_Producto int(6),Cantidad int(6), ValorUnitario float(11,2));
create table Compra_Cabecera(Id_Compra int(11) primary key auto_increment not null, Id_Proveedor int(11),Fecha date);
create table Compra_Detalle (Id_Compra int (11), Id_Producto int(6),Cantidad int(6), ValorUnitario float (11,2), Detalle_Producto varchar(50),Id_Proveedor int (11));

/*Creo los indices a usar*/
alter table Categoria add index (Nombre_Cat);
alter table proveedores add index (Nombre_Prov);
/*Creo las relaciones*/
alter table Productos add constraint Productos_NombreCat_fk foreign key (Nombre_Cat) references Categoria (Nombre_Cat);
alter table Productos add constraint Productos_Proveedor_fk foreign key (Proveedor) references Proveedores (Nombre_Prov);
alter table Producto_Proveedor add constraint Producto_Proveedor_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Producto_Proveedor add constraint Producto_Proveedor_Proveedores_fk foreign key (Id_Proveedor) references Proveedores (Id_Proveedor);
alter table Venta_Detalle add constraint Venta_Detalle_Venta_Cabecera_fk foreign key (Id_Venta) references Venta_Cabecera (Id_Venta);
alter table Venta_Detalle add constraint Venta_Detalle_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Venta_cabecera add constraint Venta_cabecera_Cliente_fk foreign key (Id_Cliente) references Clientes (Id_Cliente);
alter table Compra_Detalle add constraint Compra_Detalle_Compra_Cabecera_fk foreign key (Id_Compra) references Compra_Cabecera (Id_Compra);
alter table Compra_Detalle add constraint Compra_Detalle_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Compra_Detalle add constraint Compra_Detalle_Proveedor_fk foreign key (Id_Proveedor) references Proveedores (Id_Proveedor);

/*Insertar datos Proveedores*/

insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('1','SanDisk','Milpitas, California, Estados Unidos','support@sandisk.com','888 527 1441');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('2','Kingston','Fountain Valley, California, Estados Unidos','support@kingston.com','7144452894');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('3','ADATA','Nuevo Taipéi, República de China','support@adata.com','9562112548');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('4','DELL','Round Rock, Texas, Estados Unidos','support@dell.com','8006249896');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('5','HP','Palo Alto, CA 94304 United States','support@hp.com','6508571501');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('6','Toshiba','Minato, Tokio, Japón','support@toshiba.com','2125960600');
insert into proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('7','Lenovo','Quarry Bay, Hong Kong','support@lenovo.com','8552536686');


/*Insertar datos Categorias*/

insert into Categoria(Id_Categoria,Nombre_Cat) values('01','Discos');
insert into Categoria(Id_Categoria,Nombre_Cat) values('02','Memorias');
insert into Categoria(Id_Categoria,Nombre_Cat) values('03','Perifericos');
insert into Categoria(Id_Categoria,Nombre_Cat) values('04','Accesorios');
insert into Categoria(Id_Categoria,Nombre_Cat) values('05','Routers');
insert into Categoria(Id_Categoria,Nombre_Cat) values('06','NoteBooks');
insert into Categoria(Id_Categoria,Nombre_Cat) values('07','Escritorios');
insert into Categoria(Id_Categoria,Nombre_Cat) values('08','AIO');
insert into Categoria(Id_Categoria,Nombre_Cat) values('09','Monitores');
insert into Categoria(Id_Categoria,Nombre_Cat) values('10','Audio');