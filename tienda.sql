DROP TABLE IF EXISTS articulos CASCADE;

CREATE TABLE articulos (
    id bigserial PRIMARY KEY,
    codigo varchar(13) NOT NULL UNIQUE,
    descripcion varchar(255) NOT NULL,
    precio numeric(7,2) NOT NULL
);

INSERT INTO articulos(codigo, descripcion, precio)
    VALUES('314643514654', 'Yogur macedonia', 200),
          ('314643514654', 'galletas', 15),
          ('314643514654', 'usb', 450),