CREATE TABLE flujo_proceso (
    flujo varchar(3),
    proceso varchar(3),
    tipo varchar(1),
    rol varchar(15),
    proceso_sig varchar(3),
    formulario varchar(15)
);
CREATE TABLE flujo_condicionante(
    proceso varchar(3),
    SI varchar(3),
    NO varchar(3)
);

INSERT INTO flujo_proceso VALUES ('F1', 'P1', 'I', 'usuario', 'P2', 'documentos');
INSERT INTO flujo_proceso VALUES ('F1', 'P2', 'P', 'usuario', 'P3', 'presentarDocs');
INSERT INTO flujo_proceso VALUES ('F1', 'P3', 'D', 'usuario', 'P4', 'cumplimientoReq');
INSERT INTO flujo_proceso VALUES ('F1', 'P4', 'C', 'CME', NULL, NULL);
INSERT INTO flujo_proceso VALUES ('F1', 'P5', 'P', 'CME', 'P6', 'pasosInscripcion');
INSERT INTO flujo_proceso VALUES ('F1', 'P6', 'P', 'CME', 'P7', 'controlDocs');
INSERT INTO flujo_proceso VALUES ('F1', 'P7', 'P', 'usuario', 'P8', 'certificadoHab');
INSERT INTO flujo_proceso VALUES ('F1', 'P8', 'P', 'CME', null, 'entregaCertific');
INSERT INTO flujo_proceso VALUES ('F1', 'P9', 'P', 'CME', null, 'deshabilitacion');

-- Inserción de flujo condicionante
INSERT INTO flujo_condicionante VALUES ('P4', 'P5', 'P9');

UPDATE flujo_proceso 
SET formulario = 'info'
WHERE proceso like 'P1'

UPDATE flujo_proceso 
SET formulario = 'entregaCertific'
WHERE proceso like 'P8'

DROP TABLE flujo_proceso

--- CREANDO LA TABLA DE LA BASE DE DATOS USUARIO
CREATE TABLE usuario (
    id integer, 
    usuario varchar(30),
    password varchar(15),
    tipo varchar(10),
    primary key(id) 
);
INSERT INTO usuario VALUES (1, 'leonel', 'leonel', 'usuario');
INSERT INTO usuario VALUES (2, 'ramiro', 'admin', 'CME');

CREATE TABLE documentos (
    carta varchar(50),
    programa varchar(50),
    plan varchar(50),
    nombreTra varchar(50),
    celular varchar(50),
    frente varchar(50),
    flujo varchar(50),
    proceso varchar(50)
);