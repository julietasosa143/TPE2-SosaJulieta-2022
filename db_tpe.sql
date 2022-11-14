-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 01:26:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'desodorantes', 'Son substancias que se aplican a la piel para reducir el mal olor producido por la degradación bacteriana de proteínas presentes en el sudor. Estas substancias contienen fragancias agradables que resultan más atractivas al olfato.'),
(2, 'body splash', 'El body splash o splash corporal tiene como función principal proporcionar esa sensación de frescura mientras deja un aroma suave y agradable. A pesar de que sus características pueden ser similares a las de un perfume, por ser un cosmético líquido y con aroma que puede utilizarse para oler bien, los body splash contienen una concentración mucho menor de fragancia, ya que su composición principal es agua, siendo esta última la encargada de dar esa sensación de frescura al aplicarlo.'),
(3, 'eau de parfum', 'Estos tienen la segunda concentración de fragancia más alta, siendo entre un 15-20%.Los Eau de parfum están hechos para durar en la piel sin causarle dolor de cabeza a las personas que se encuentran a su lado o que se transfieran al cuello de otra persona después de un abrazo. Estas son las categorías de fragancia más comunes. El olor será prominente desde la mañana hasta la noche, y aún debe ser detectable cuando se desviste por la noche.'),
(4, 'eau de toilette', 'Eau de toilette significa que la concentración de esencia varía entre el 4 y el 14%. Es un perfume ligeramente perfumado. También se las conoce como aguas aromáticas y tiene un alto contenido alcohólico. Se suele aplicar directamente sobre la piel después del baño o del afeitado. Se compone tradicionalmente de alcohol y varios aceites volátiles.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `contenido` varchar(10) NOT NULL,
  `precio` int(20) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id_item`, `nombre`, `marca`, `descripcion`, `contenido`, `precio`, `categoria`) VALUES
(3, 'Lady Million (pour femme)', 'Paco Rabanne', 'Las Notas de Salida son frambuesa, neroli y limón de Amalfi (lima de Amalfi); las Notas de Corazón son jazmín, flor del naranjo africano y gardenia; las Notas de Fondo son miel blanca, pachulí y ámbar.', '30ml', 15145, 3),
(4, 'Pure XS (pour homme)', 'Paco Rabanne', 'Las Notas de Salida son jengibre, tomillo, toronja (pomelo), bergamota y acordes verdes; las Notas de Corazón son vainilla, Licor, canela, cuero y manzana; las Notas de Fondo son mirra, azúcar, cedro, notas amaderadas, cachemira y pachulí.', '50ml', 14400, 3),
(5, 'Eternity Flame (pour femme)', 'Calvin Klein', 'Eternity Flame For Women de Calvin Klein es una fragancia de la familia olfativa Oriental Floral para Mujeres. Esta fragancia es nueva. Eternity Flame For Women se lanzó en 2019. La Nariz detrás de esta fragancia es Laurent Le Guernec. La Nota de Salida es mandarina; la Nota de Corazón es guisante de olor; la Nota de Fondo es ládano.', '100ml', 22525, 3),
(6, 'CK be (pour homme)', 'Calvin Klein', 'Las Notas de Salida son lavanda, notas verdes, bergamota, menta, enebro de Virginia y mandarina; las Notas de Corazón son hierba verde, durazno (melocotón), jazmín, fresia, magnolia y orquídea; las Notas de Fondo son almizcle, sándalo, cedro, vainilla, ámbar y opopónaco.', '200ml', 16607, 4),
(7, 'Be Delicious (pour femme)', 'DKNY', 'Las Notas de Salida son pepino, toronja (pomelo) y magnolia; las Notas de Corazón son manzana verde, lirio de los valles (muguete), nardos, violeta y rosa; las Notas de Fondo son notas amaderadas, sándalo y ámbar.', '100ml ', 19150, 3),
(8, 'MEN (pour homme)', 'DKNY', 'Las Notas de Salida son hierba, bergamota y toronja (pomelo); las Notas de Corazón son notas amaderadas, nuez moscada, azafrán, violeta y jazmín; las Notas de Fondo son azúcar, cuero, vainilla, gamuza, ámbar, madera de cachemira, sándalo, musgo de roble y vetiver.', '100ml', 22100, 3),
(9, 'Guilty (pour homme)', 'Gucci', 'Las Notas de Salida son lavanda y limón de Amalfi (lima de Amalfi); la Nota de Corazón es flor del naranjo africano; las Notas de Fondo son cedro de Virginia, pachulí y vainilla.', '90ml', 25500, 4),
(10, 'Bloom (pour femme)', 'Gucci', 'Las Notas de Salida son naranja y notas verdes; las Notas de Corazón son nardos, jazmín sambac (sampaguita) y madreselva; las Notas de Fondo son raíz de lirio, sándalo y vainilla.', '50ml', 22100, 3),
(11, 'Alive (pour femme)', 'Hugo Boss', 'Las Notas de Salida son vainilla de Madagascar, ciruela, manzana, canela y grosellas negras; las Notas de Corazón son jazmín sambac (sampaguita) y tomillo; las Notas de Fondo son notas amaderadas, sándalo, cedro y olivo', '80ml', 28500, 3),
(12, 'The Scent (pour homme)', 'Hugo Boss', 'Las Notas de Salida son jengibre, mandarina y bergamota; las Notas de Corazón son maninka y lavanda; las Notas de Fondo son cuero y notas amaderadas.', '50ml', 18400, 4),
(13, 'Rexona Clinical Women', 'Rexona', 'El desodorante antitranspirante Rexona Clinical Women en aerosol, brinda 3 veces mayor protección contra el sudor que un antitranspirante común. Su exclusiva tecnología forma un micro escudo de protección que dura por 96 horas.', '48gr.', 780, 1),
(14, 'Rexona Motion Sense', 'Rexona', 'La Tecnología MotionSense de Rexona contiene micro cápsulas que se rompen con la fricción a medida que te movés, liberando protección inmediata contra el mal olor y frescura. Antitranspirante con Intense Odor Control para controlar el mal olor, incluso durante deportes de alta intensidad.', '50ml', 340, 1),
(16, 'Dove Invisible Dry ', 'Dove', 'El antitranspirante se desliza sobre la piel, dándole 48 horas de protección para sentirse fresca y seca. Posee un suave aroma y cuida la delicada piel de las axilas.\r\n', '50ml', 299, 1),
(17, 'Pure Seduction', 'Victoria\'s Secret', 'Pure Seduction de Victoria`s Secret es una fragancia de la familia olfativa Floral Frutal para Mujeres. La fragrancia contiene fresia, ciruela y manzanilla.', '250ml', 7300, 2),
(18, 'Tododia: Frambuesa y Pimienta rosa', 'Natura', 'El spray perfumado de Tododia es una invitación a vestirte con un perfume suave. Combina el sedoso aroma a frambuesa y pimienta rosa en tu piel, hará que tenga una sensación irresistible, hidratada y refrescante. Siente la ligereza en tu cuerpo al usar el spray perfumado de Tododia al caminar por las calles.', '200ml', 1890, 2),
(19, 'Bare Vainilla', 'Victoria\'s Secret', 'Fresca perfecta para aportar un suave aroma a tu look diario con un perfume con olor a flor de vainilla y manzana batida que le gustará a las mujeres mas dulces. Es una fragancia floral. Las notas de salida son cítricos y manzana,las notas del corazón son rosa y orquídea, las notas de fondo son hiedra y notas amaneradas. Tipo de fragancia: floral Notas: Victoria, Lady Apple de rosas, hiedra', '250ml', 7855, 2),
(20, 'Dieciocho', 'Cher', 'El body splash Cher Dieciocho es una fragancia chipre floral. Sus notas de salida están integradas por gardenias y cítricos. Se combinan armoniosamente con acordes de miel y flores blancas, en el marco de su elegante y sensual envase de color rosa.', '100ml', 2390, 2),
(22, 'Magnolia', 'Fulton', 'Combinación de Magnolias principalmente con toques de ambar, musk y aceites esenciales hindúes.', '250ml', 3700, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `nombre`, `password`) VALUES
(1, 'princessconsuela@bananahammok.com', 'Princess Consuela Banana Hammok', '$2a$12$LFr9Sz2LuaXDii8PQ7aEQ.UeO0YyEILM/xAj2FSXTI9uu28iZdPbm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_categoria3` (`categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categories` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
