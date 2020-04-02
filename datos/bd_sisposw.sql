/*
CREO LA BASE DE DATOS
*/
drop database sisposw89;
create database sisposw89;
/*
USO LA BASE DE DATOS
*/
use sisposw89;
/*Se realiza modificación general a la base de datos, se cambian tipos de datos INT por BIGINT y VARCHAR
se emparejan tipos de datos y se revisan primarias y foraneas-Jaime Salcedo 2020-03-12*/
	/*Creo tabla Administradores-Solicita Camilo Quiceno 2020-03-12*/
create table Administradores(Id int auto_increment primary key, Nombre varchar (50), Usuario varchar(50), Contraseña varchar(50));
	/*Creo las tablas necesarias*/
create table Clientes (Id_Cliente varchar (11)  primary key , Nombres varchar (50) UNIQUE not null, Apellidos Varchar (50) , Telefonos varchar (50), Celular varchar (20) , Email varchar (50) UNIQUE, Direccion varchar (60) , Pass varchar(30)  , Tipo Varchar (20)  );
create table Empleados(Id_Empleado varchar (11) primary key ,Nombres varchar (50) UNIQUE not null, Apellidos varchar (50), Telefonos varchar (50),Direccion varchar (60),Email varchar (50), Pass varchar(30)  , Tipo Varchar (20)  );
create table Usuarios (Id_User varchar (11)  primary key , Pass Varchar (30) , Nombres varchar (50) unique not null, Apellidos Varchar (50), Tipo Varchar (20) );
create table Categoria (Id_Categoria varchar (6) primary key not null, Nombre_Cat varchar (20));
	/*Se eliminan columnas Estado, Proveedor y Cantidad -Jaime salcedo 2020-03-12*/
create table Productos (Id_Producto varchar (6) primary key not null, Nombre varchar (50) not null, Descripcion Varchar (50), ValorUnitario float (11), Nombre_Cat varchar (20));
	/*Se agrega la columna Cantidad-Jaime Salcedo 2020-03-12*/
create table Producto_Proveedor (Id_producto varchar (6), Id_Proveedor varchar (20), Nombre_Producto varchar (20), Nombre_Proveedor varchar(20), Cantidad bigint(20));
create table Proveedores (Id_Proveedor varchar (20)primary key not null, Nombre_Prov varchar (20) unique not null, Direccion Varchar (60), Email varchar (50) unique not null, Telefonos varchar (50) not null);
	/*Agrego columna Factura*/
create table Venta_Cabecera (Id_Venta int auto_increment primary key not null,Id_Cliente varchar(11), fecha date, Factura varchar (20),forma_pago varchar (20),Total_Factura float(15));
	/*Agrego columnas Cantidad, Forma de pago*/
create table Venta_Detalle (Id_Venta int(11),Id_Producto varchar(6),Cantidad int(6), ValorUnitario float(15));

/* Elimino las tablas de compra, no hay modulo de compras-Jaime Salcedo 2020-03-12
create table Compra_Cabecera(Id_Compra int(11) primary key auto_increment not null, Id_Proveedor int(11),Fecha date);
 create table Compra_Detalle (Id_Compra int (11), Id_Producto int(6),Cantidad int(6), ValorUnitario float (11,2), Detalle_Producto varchar(50),Id_Proveedor int (11));
*/
	/*Creo los indices a usar-Cambio Crihstian Molina*/
alter table Categoria add index (Nombre_Cat);
alter table Proveedores add index (Nombre_Prov);
	/*Creo las relaciones*/
	/*Relacion añadidad por Crihstian Molina*/
alter table Productos add constraint Productos_NombreCat_fk foreign key (Nombre_Cat) references Categoria (Nombre_Cat);
alter table Producto_Proveedor add constraint Producto_Proveedor_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Producto_Proveedor add constraint Producto_Proveedor_Proveedores_fk foreign key (Id_Proveedor) references Proveedores (Id_Proveedor);

alter table Venta_Detalle add constraint Venta_Detalle_Venta_Cabecera_fk foreign key (Id_Venta) references Venta_Cabecera (Id_Venta);
alter table Venta_Detalle add constraint Venta_Detalle_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Venta_Cabecera add constraint Venta_cabecera_Cliente_fk foreign key (Id_Cliente) references Clientes (Id_Cliente);
/* Elimino las relaciones de compra, no hay modulo de compras-Jaime Salcedo 2020-03-12
alter table Compra_Detalle add constraint Compra_Detalle_Compra_Cabecera_fk foreign key (Id_Compra) references Compra_Cabecera (Id_Compra);
alter table Compra_Detalle add constraint Compra_Detalle_Producto_fk foreign key (Id_Producto) references Productos (Id_Producto);
alter table Compra_Detalle add constraint Compra_Detalle_Proveedor_fk foreign key (Id_Proveedor) references Proveedores (Id_Proveedor);
*/

/*
 LLeno las tablas para pruebas
*/
	/*Inserto proveedores*/
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('1','SanDisk','Milpitas, California, Estados Unidos','support@sandisk.com','888 527 1441');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('2','Kingston','Fountain Valley, California, Estados Unidos','support@kingston.com','7144452894');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('3','ADATA','Nuevo Taipéi, República de China','support@adata.com','9562112548');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('4','DELL','Round Rock, Texas, Estados Unidos','support@dell.com','8006249896');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('5','HP','Palo Alto, CA 94304 United States','support@hp.com','6508571501');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('6','Toshiba','Minato, Tokio, Japón','support@toshiba.com','2125960600');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('7','Lenovo','Quarry Bay, Hong Kong','support@lenovo.com','8552536686');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('8','JBL','San Francisco, CA','support@jbl.com','8245772351');
insert into Proveedores(Id_Proveedor,Nombre_Prov,Direccion,Email,Telefonos) values('9','SONY','San Francisco, CA','support@sonyes.com','9382815634');
	/*Insertar Categorias*/
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
	/*Insertar datos Productos*/
insert into Productos(Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat) values('1','Portatil i3','Core i3, 4GB Ram, Wi-Fi, 500GB HDD','1000000','NoteBooks');
insert into Productos(Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat) values('2','Portatil i5','Core i5, 8GB Ram, Wi-Fi, 240GB SSD','1550000','NoteBooks');
insert into Productos(Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat) values('3','JBL T450BT','Audifonos Inalámbricos, Manos Libres','150000','Audio');
insert into Productos(Id_Producto, Nombre, Descripcion, ValorUnitario, Nombre_Cat) values('4','Sony Mdr-xb550ap','Audífonos Sony Extra Bass Manos Libres, Cableados','120000','Audio');