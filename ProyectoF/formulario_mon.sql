drop schema if exists `formulario_mon`;

create schema  if not exists `formulario_mon` default  character set utf8 collate  utf8_spanish2_ci;
USE `formulario_mon`; 

CREATE TABLE `persona`(
	`num` int(11) NOT NULL,  
	`nombre` text not null,
    `apellido` text not null,
	`no_cuenta` int(10) not null,
	`ocupacion` text not null,
    `hobby` text not null,
	`email` text not null,
	`password` varchar (4) not null,
	`fecha_registro` datetime not null default current_timestamp,
	`permisos` int (11) not null default '2'
)engine=Innodb default charset=utf8;

select * from persona;
ALTER TABLE `formulario_mon`.`persona` 
CHANGE COLUMN `num` `num` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`num`);

insert into `persona` (`nombre`,`apellido`,`no_cuenta`,`ocupacion`,`hobby`,`email`,`password`,`fecha_registro`,`permisos`)values('Juan','Villagrana','156891011','Trabajador','caminar','juaan@hotmail.com','3645','2024-11-13 10:46:00',2);
insert into `persona` (`nombre`,`apellido`,`no_cuenta`,`ocupacion`,`hobby`,`email`,`password`,`fecha_registro`,`permisos`)values('Sandra','Jimenez','124513778','Comerciante','leer','sandy@gmail.com','2874','2024-11-15 11:09:54',2);