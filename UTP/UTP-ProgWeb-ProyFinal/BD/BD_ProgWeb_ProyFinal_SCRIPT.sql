CREATE DATABASE sys_medicenter;

use sys_medicenter;

-- Tabla MEDICOS
create table tb_medico
(
    idMedico integer primary key AUTO_INCREMENT,
    nom_medico varchar(50) not null unique,
    ape_medico varchar(50) not null,   
    dni_medico integer not null
);

insert into tb_medico (nom_medico, ape_medico, dni_medico) values ('Alex','Valdiviezo', 12345678);
insert into tb_medico (nom_medico, ape_medico, dni_medico) values ('Cesar','Rosas', 87654321);

-- --Tabla ESPECIALIDADES
create table tb_especialidad
(
    idEspecialidad integer primary key AUTO_INCREMENT,
    nom_especialidad varchar(50) not null unique,
    idMedico integer null,
    FOREIGN KEY (idMedico) REFERENCES tb_medico (idMedico)
);
insert into tb_especialidad (nom_especialidad, idMedico) values ('Cardiologia','1');
insert into tb_especialidad (nom_especialidad, idMedico) values ('Oftalmologia','2');

select tb_especialidad.nom_especialidad as Especialidad, tb_medico.nom_medico as Medico 
from tb_especialidad 
	inner join tb_medico 
on tb_especialidad.idMedico = tb_medico.idMedico;

-- --Tabla USUARIOS
create table tb_usuario
(
    idUsuario integer primary key AUTO_INCREMENT,
    idMedico integer not null,       
    password varbinary(12) NOT NULL,
    FOREIGN KEY (idMedico) REFERENCES tb_medico (idMedico)
);
insert into tb_usuario (idMedico, password) values ('1','123456');


-- Tabla PACIENTES
create table tb_paciente
(
    idPaciente integer primary key AUTO_INCREMENT,
    nom_paciente varchar(50) not null unique,
    ape_paciente varchar(50) null,
    dni_paciente integer not null,
    fechNac_paciente date
);
insert into tb_paciente (nom_paciente, ape_paciente, dni_paciente, fechNac_paciente) values ('Lionel','Messi', 12345679,'1992-07-18');
insert into tb_paciente (nom_paciente, ape_paciente, dni_paciente, fechNac_paciente) values ('Cristiano', 'Dos Santos', 12345680,'1992-07-16');

-- Tabla CITAS
create table tb_cita
(
    idCita integer primary key AUTO_INCREMENT,
    idEspecialidad integer not null,
    idPaciente integer not null,
    fecha_cita date not null,
    hora_cita time not null,
    FOREIGN KEY (idEspecialidad) REFERENCES tb_especialidad (idEspecialidad),
    FOREIGN KEY (idPaciente) REFERENCES tb_paciente (idPaciente)
);
insert into tb_cita (idEspecialidad, idPaciente, fecha_cita, hora_cita) values ('1', '1', '2022-07-18','09:00:00');
insert into tb_cita (idEspecialidad, idPaciente, fecha_cita, hora_cita) values ('2', '2', '2022-07-18','12:00:00');



select * from tb_medico;
select * from tb_especialidad;
select * from tb_usuario;
select * from tb_paciente;
select * from tb_cita;


select tb_especialidad.nom_especialidad as Especialidad, tb_medico.nom_medico as Medico, tb_paciente.nom_paciente Paciente, tb_cita.fecha_cita, tb_cita.hora_cita
from tb_cita 
	inner join tb_especialidad 
on tb_cita.idEspecialidad = tb_especialidad.idEspecialidad 
	inner join tb_medico
on tb_especialidad.idMedico = tb_medico.idMedico
	inner join tb_paciente 
on tb_cita.idPaciente = tb_paciente.idPaciente;





