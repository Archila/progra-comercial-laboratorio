-- Tabla de categorías
CREATE TABLE categoria (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT
);

-- Tabla de productos
CREATE TABLE producto (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    id_categoria INT,
    foto1 VARCHAR(255) DEFAULT NULL,
    foto2 VARCHAR(255) DEFAULT NULL,
    foto3 VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

-- Tabla de generalidades (información de la empresa)
CREATE TABLE generalidades (
    id_generalidad INT AUTO_INCREMENT PRIMARY KEY,
    clave VARCHAR(50) NOT NULL,
    valor TEXT NOT NULL
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    clave VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (nombre, clave) VALUES
('juan', '1234'),
('maria', 'abcd'),
('iesteban', 'admin123');

-- Insertar categorías
INSERT INTO categoria (nombre, descripcion) VALUES
('Sillas', 'Variedad de sillas de comedor, oficina y sala'),
('Mesas', 'Mesas de comedor, centro y auxiliares'),
('Sofás', 'Sillones y sofás de diferentes tamaños'),
('Camas', 'Camas individuales, matrimoniales y king size');

-- Insertar productos iniciales (con fotos NULL)
INSERT INTO producto (nombre, descripcion, precio, stock, id_categoria, foto1, foto2, foto3) VALUES
('Silla de madera', 'Silla clásica de madera con respaldo alto', 550.00, 20, 1, NULL, NULL, NULL),
('Silla ergonómica', 'Silla de oficina con soporte lumbar', 1200.00, 15, 1, NULL, NULL, NULL),
('Mesa de comedor 6 puestos', 'Mesa de madera para 6 personas', 3500.00, 5, 2, NULL, NULL, NULL),
('Mesa de centro moderna', 'Mesa de centro con vidrio templado', 1500.00, 8, 2, NULL, NULL, NULL),
('Sofá 3 plazas', 'Sofá cómodo de tres puestos', 4800.00, 4, 3, NULL, NULL, NULL),
('Cama matrimonial', 'Cama matrimonial con base de madera', 3200.00, 6, 4, NULL, NULL, NULL),
('Silla plegable metálica', 'Silla plegable ligera y resistente', 300.00, 30, 1, NULL, NULL, NULL),
('Silla tapizada de lujo', 'Silla de comedor con tapizado premium', 950.00, 12, 1, NULL, NULL, NULL),
('Mesa auxiliar redonda', 'Mesa pequeña ideal para sala o balcón', 850.00, 10, 2, NULL, NULL, NULL),
('Sofá reclinable', 'Sofá reclinable de dos puestos', 5200.00, 3, 3, NULL, NULL, NULL),
('Cama individual', 'Cama individual de madera con colchón incluido', 2500.00, 7, 4, NULL, NULL, NULL),
('Cama king size', 'Cama king size con cabecera de cuero', 6800.00, 2, 4, NULL, NULL, NULL);

-- Insertar generalidades
INSERT INTO generalidades (clave, valor) VALUES
('nombre_empresa', 'Muebles El Encanto'),
('mision', 'Ofrecer muebles de calidad a precios accesibles'),
('vision', 'Ser la tienda líder en diseño y confort de muebles en Guatemala'),
('telefono', '+502 1234-5678'),
('direccion', 'Zona 3, Quetzaltenango, Guatemala');