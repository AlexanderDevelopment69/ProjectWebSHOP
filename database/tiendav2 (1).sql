-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 01:21:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendav2`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_categoria` (IN `nombreC` VARCHAR(50), `idCat` INT)  BEGIN
	update categorias set nombre=nombreC
    where id = idCat;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_pedidos` (IN `estadoI` VARCHAR(20), IN `idI` INT(255))  BEGIN
   UPDATE pedidos SET estado = estadoI WHERE id = idI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_productos` (IN `Icategoria_id` INT(255), IN `Inombre` VARCHAR(255), IN `Idescripcion` TEXT, IN `Iprecio` FLOAT(15,2), IN `Istock` INT(255), IN `Ioferta` VARCHAR(5), IN `Iimagen` VARCHAR(255), IN `Icolores` INT(11), IN `Iestado` INT(11), IN `Imarca` INT(11), IN `Iproveedor` INT(11), IN `Italla` INT(11), IN `Iid` INT(255))  BEGIN
	update productos set 
    categoria_id=Icategoria_id,
    nombre=Inombre,
    descripcion =Idescripcion,
    precio=Iprecio,
    stock=Istock,
    oferta=Ioferta,
    imagen=Iimagen,
    colores=Icolores,
    estado=Iestado,
    marca=Imarca,
    proveedor=Iproveedor,
    talla=Italla
    
    where id=Iid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_stock_producto` (IN `unidadesI` INT(255), IN `producto_idI` INT(255))  BEGIN
	UPDATE productos SET stock = (stock - unidadesI) WHERE id = producto_idI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_usuario` (IN `nombreI` VARCHAR(255), IN `apellidoI` VARCHAR(255), IN `correoI` VARCHAR(255), IN `contraI` VARCHAR(255), IN `idI` INT(255))  BEGIN

UPDATE `usuarios` SET `nombre` = nombreI, `apellido` = apellidoI, `email` = correoI, `password` = contraI WHERE `usuarios`.`id` = idI;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_categoria` (IN `idCat` INT)  BEGIN
	delete from categorias
    where id=idCat;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_productos` (IN `Iid` INT(255))  BEGIN
	delete from productos 
    where id=Iid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_usuario` (IN `idI` INT(255))  BEGIN
DELETE from usuarios where usuarios.id= idI ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAll` ()  BEGIN
	SELECT *
    FROM productos ORDER BY id DESC;
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllCategory` (IN `Icategoria_id` INT(255))  BEGIN
	SELECT p.*, c.nombre AS catNombre 
    FROM productos p INNER JOIN categorias c ON c.id = p.categoria_id WHERE p.categoria_id = Icategoria_id ORDER BY RAND(); 
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getOnePro` (IN `idP` INT)  BEGIN
	select * from productos where id=idP;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getOne_productos` (IN `Iid` INT(255))  BEGIN
	SELECT * FROM productos WHERE id = Iid; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getRandomPro` (IN `cant` INT)  BEGIN
	SELECT * FROM productos WHERE stock > 0 ORDER BY RAND() LIMIT cant;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_categoria` (IN `nombreC` VARCHAR(50))  BEGIN
	insert into categorias (nombre)
			values (nombreC);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_linea_pedidos` (IN `idI` INT(255), IN `pedido_idI` INT(255), IN `producto_idI` INT(255), IN `unidadesI` INT(255))  BEGIN
    INSERT INTO linea_pedidos VALUES(NULL,pedido_idI,producto_idI,unidadesI);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_pedidos` (IN `idI` INT(255), IN `usuario_idI` INT(255), IN `departamentoI` VARCHAR(255), IN `municipioI` VARCHAR(255), IN `direccionI` VARCHAR(255), IN `costoI` FLOAT(15,2), IN `estadoI` VARCHAR(20), IN `fechaI` DATE, IN `horaI` TIME)  BEGIN
    INSERT INTO pedidos (id, usuario_id, departamento, municipio, direccion, costo, estado, fecha, hora)
     VALUES (NULL,usuario_idI,departamentoI,municipioI, direccionI,costoI, estadoI, fechaI, horaI);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_productos` (IN `Icategoria_id` INT(255), IN `Inombre` VARCHAR(255), IN `Idescripcion` TEXT, IN `Iprecio` FLOAT(15,2), IN `Istock` INT(255), IN `Ioferta` VARCHAR(5), IN `Ifecha` DATE, IN `Iimagen` VARCHAR(255), IN `Icolores` INT(11), IN `Iestado` INT(11), IN `Imarca` INT(11), IN `Iproveedor` INT(11), IN `Italla` INT(11))  BEGIN
	insert into productos (categoria_id, nombre, descripcion, precio, stock, oferta,fecha, imagen, colores, estado, marca, proveedor, talla
    )
        values (Icategoria_id, Inombre, Idescripcion, Iprecio, Istock, Ioferta,Ifecha, Iimagen, Icolores, Iestado, Imarca, Iproveedor, Italla);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_usuario` (IN `nombreU` VARCHAR(255), IN `apellidoU` VARCHAR(255), IN `EmailU` VARCHAR(255), IN `PasswordU` VARCHAR(255))  BEGIN
	insert into usuarios (nombre,apellido,email,password,rol)
			values (nombreU,apellidoU,EmailU,PasswordU,'user');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_last_insert` ()  BEGIN
    SELECT LAST_INSERT_ID() AS pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login_usuario` (IN `EmailU` VARCHAR(255))  BEGIN
	SELECT * FROM usuarios WHERE email = EmailU;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_AllbyUser` (IN `user_idI` INT(255))  BEGIN
    SELECT * FROM pedidos WHERE usuario_id = user_idI ORDER BY id DESC ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_categorias` ()  BEGIN
        select id,
                nombre
        from categorias;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_colores` ()  BEGIN
	SELECT * FROM colores ORDER BY id ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_estados` ()  BEGIN
	SELECT * FROM estados ORDER BY id ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_getbyUser` (IN `user_idI` INT(255))  BEGIN
	SELECT * FROM pedidos WHERE usuario_id = user_idI ORDER BY id DESC LIMIT 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_getProductosbyPedidos` (IN `pedido_idI` INT(255))  BEGIN
    SELECT pr.*, lp.unidades FROM productos pr INNER JOIN linea_pedidos lp ON pr.id = lp.producto_id WHERE lp.pedido_id = pedido_idI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_marcas` ()  BEGIN
	SELECT * FROM marcas ORDER BY id ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_pedido` (IN `pedido_idI` INT(255))  BEGIN
    SELECT * FROM pedidos WHERE id = pedido_idI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_proveedores` ()  BEGIN
	SELECT * FROM proveedores ORDER BY id ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_tallas` ()  BEGIN
	SELECT * FROM tallas ORDER BY id ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_todos_pedidos` ()  BEGIN
   SELECT * FROM pedidos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_todos_usuarios` ()  BEGIN
SELECT * FROM usuarios;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(18, 'Polos'),
(19, 'Casacas'),
(21, 'Poleras'),
(37, 'Conjuntos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`) VALUES
(1, 'verde'),
(2, 'rojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_pedidos`
--

CREATE TABLE `linea_pedidos` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(1, 'Nike'),
(2, 'Adidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `costo` float(15,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float(15,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `colores` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `talla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`, `colores`, `estado`, `marca`, `proveedor`, `talla`) VALUES
(30, 21, 'C HOODY Rosado H11360 21 model', 'C HOODY Rosado H11360 21 model', 76.61, 19, '76.00', '2021-09-29', 'C_HOODY_Rosado_H11360_21_model.jpg', 1, 1, 1, 1, 1),
(32, 19, 'Casaca  Deportiva adidas Sportswear Woven3 Rayas Naranja GL5681 21 model', 'Casaca_Deportiva_adidas_Sportswear_Woven_3_Rayas_Naranja_GL5681_21_model.jpg', 58.80, 4, '57.00', '2021-09-29', 'Casaca_Deportiva_adidas_Sportswear_Woven_3_Rayas_Naranja_GL5681_21_model.jpg', 1, 1, 2, 2, 1),
(33, 19, 'Casaca Deportiva Ajustada AEROREADY Sereno Cut 3 Tiras Negro GT8803 21 model', 'Casaca_Deportiva_Ajustada_AEROREADY_Sereno_Cut_3_Tiras_Negro_GT8803_21_model.jpg', 54.50, 4, '54.00', '2021-09-29', 'Casaca_Deportiva_Ajustada_AEROREADY_Sereno_Cut_3_Tiras_Negro_GT8803_21_model.jpg', 1, 1, 2, 2, 1),
(34, 19, 'Casaca Deportiva Tiro Negro GS4725 21 model', 'Casaca_Deportiva_Tiro_Negro_GS4725_21_model.jpg', 46.60, 2, '46.00', '2021-09-29', 'Casaca_Deportiva_Tiro_Negro_GS4725_21_model.jpg', 1, 1, 2, 2, 1),
(39, 18, 'sweatpant w5', 'sweatpant-w.jpg', 60.00, -8, '55.00', '2021-09-29', 'sweatpant-w.jpg', 1, 1, 2, 2, 1),
(43, 21, 'POLERA CON CAPUCHA LOGO PLAY BLANCO H31319 211', 'POLERA CON CAPUCHA LOGO PLAY BLANCO H31319 21', 100.00, 8, '80', '2021-09-30', 'Polera_con_Capucha_Logo_Play_Blanco_H31319_21_model.jpg', 1, 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `correo` varchar(65) NOT NULL,
  `telefono` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `correo`, `telefono`) VALUES
(1, 'Nike', 'nike@nike.com', '987451245'),
(2, 'Adidas', 'adidas@adidas.com', '968545412');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `nombre`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `rol`, `imagen`) VALUES
(7, 'ADMIN', 'ADMIN', 'ADMIN@ADMIN.COM', '$2y$04$y56/cXettImv0t8xQ6LK/OI382QPi5voxyhZY3Y/vxsoPrhCLxV1u', 'admin', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_linea_pedidos` (`pedido_id`),
  ADD KEY `fk_linea_producto` (`producto_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedidos_usuario` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_categoria` (`categoria_id`),
  ADD KEY `costo` (`colores`,`estado`,`marca`,`proveedor`,`talla`),
  ADD KEY `proveedor` (`proveedor`),
  ADD KEY `talla` (`talla`),
  ADD KEY `marca` (`marca`),
  ADD KEY `estado` (`estado`),
  ADD KEY `colores` (`colores`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD CONSTRAINT `fk_linea_pedidos` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_linea_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`talla`) REFERENCES `tallas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`marca`) REFERENCES `marcas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`estado`) REFERENCES `estados` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`colores`) REFERENCES `colores` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
