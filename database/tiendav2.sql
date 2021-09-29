-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2021 a las 17:21:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

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
(22, 'Conjuntos');

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
  `fecha` date NOT NULL,
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
(28, 22, 'Buzo adidas Essentials Azul GS0185 01 laydown', 'Buzo adidas_Essentials_Azul_GS0185_01_laydown', 78.90, 20, '75.00', '2021-09-29', 'Buzo_adidas_Essentials_Azul_GS0185_01_laydown.jpg', 2, 1, 2, 2, 1),
(29, 22, 'buzo adidas sportswear teamsport', 'buzo-adidas-sportswear-teamsport', 75.50, 15, '74.00', '2021-09-29', 'buzo-adidas-sportswear-teamsport.jpg', 2, 1, 2, 2, 1),
(30, 21, 'C HOODY Rosado H11360 21 model', 'C HOODY Rosado H11360 21 model', 76.60, 25, '76.00', '2021-09-29', 'C_HOODY_Rosado_H11360_21_model.jpg', 2, 1, 2, 2, 2),
(31, 18, 'Camiseta Local Oficial Real Madrid 2021 Blanco FM4736 21 model', 'Camiseta Local Oficial Real Madrid 2021 Blanco FM4736 21 model', 70.00, 10, '70.00', '2021-09-29', 'Camiseta_Local_Oficial_Real_Madrid_20-21_Blanco_FM4736_21_model.jpg', 1, 1, 2, 2, 1),
(32, 19, 'Casaca  Deportiva adidas Sportswear Woven3 Rayas Naranja GL5681 21 model', 'Casaca_Deportiva_adidas_Sportswear_Woven_3_Rayas_Naranja_GL5681_21_model.jpg', 58.80, 4, '57.00', '2021-09-29', 'Casaca_Deportiva_adidas_Sportswear_Woven_3_Rayas_Naranja_GL5681_21_model.jpg', 1, 1, 2, 2, 1),
(33, 19, 'Casaca Deportiva Ajustada AEROREADY Sereno Cut 3 Tiras Negro GT8803 21 model', 'Casaca_Deportiva_Ajustada_AEROREADY_Sereno_Cut_3_Tiras_Negro_GT8803_21_model.jpg', 54.50, 5, '54.00', '2021-09-29', 'Casaca_Deportiva_Ajustada_AEROREADY_Sereno_Cut_3_Tiras_Negro_GT8803_21_model.jpg', 1, 1, 2, 2, 1),
(34, 19, 'Casaca Deportiva Tiro Negro GS4725 21 model', 'Casaca_Deportiva_Tiro_Negro_GS4725_21_model.jpg', 46.60, 5, '46.00', '2021-09-29', 'Casaca_Deportiva_Tiro_Negro_GS4725_21_model.jpg', 1, 1, 2, 2, 1),
(35, 21, 'G SHMOO HOODIE Plomo GR8801 21 model', 'G_SHMOO_HOODIE_Plomo_GR8801_21_model.jpg', 70.60, 5, '70.00', '2021-09-29', 'G_SHMOO_HOODIE_Plomo_GR8801_21_model.jpg', 1, 1, 2, 2, 1),
(36, 21, 'Polera con Capucha Essentials Plomo GN4039 01 laydown', 'Polera_con_Capucha_Essentials_Plomo_GN4039_01_laydown.jpg', 76.00, 3, '75.00', '2021-09-29', 'Polera_con_Capucha_Essentials_Plomo_GN4039_01_laydown.jpg', 1, 1, 2, 2, 1),
(37, 18, 'Polo Trifolio Script Negro H31329 21 model', 'Polo_Trifolio_Script_Negro_H31329_21_model.jpg', 56.00, 4, '50.00', '2021-09-29', 'Polo_Trifolio_Script_Negro_H31329_21_model.jpg', 1, 1, 2, 2, 1),
(38, 18, 'polo adicolor classics 3 tiras', 'polo-adicolor-classics-3-tiras', 58.00, 3, '57.00', '2021-09-29', 'polo-adicolor-classics-3-tiras.jpg', 1, 1, 2, 2, 1),
(39, 18, 'sweatpant w', 'sweatpant-w.jpg', 60.00, 2, '55.00', '2021-09-29', 'sweatpant-w.jpg', 1, 1, 2, 2, 1);

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
(7, 'ADMIN', 'ADMIN', 'ADMIN@ADMIN.COM', '$2y$04$y56/cXettImv0t8xQ6LK/OI382QPi5voxyhZY3Y/vxsoPrhCLxV1u', 'admin', NULL),
(8, 'a', 'a', 'a@a.com', '$2y$04$fuCMFgNwgL0IGtb7rXblteAr./sozqGzy4BGGLh5sKchSa2UcLiqW', 'user', NULL);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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