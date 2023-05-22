-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2023 a las 00:36:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `impresionismodigitaldb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrasgaleria`
--

CREATE TABLE `obrasgaleria` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `anio` varchar(50) NOT NULL,
  `tecnica` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obrasgaleria`
--

INSERT INTO `obrasgaleria` (`ID`, `titulo`, `autor`, `anio`, `tecnica`, `descripcion`, `imagen`, `usuario`) VALUES
(15, 'Puente de Argenteuil', 'MONET CLAUDE OSCAR', '1874', 'Oleo sobre lienzo', 'El tiempo que Monet pasó en Argenteuil fue muy productivo, realizando algunas de sus mejores obras. Según las teorías impresionistas, los objetos cambian dependiendo de cómo incida la luz y del momento en que sean captados. La culminación de estos planteamientos estará en manos de Claude con sus diferentes versiones de la catedral de Rouen. La fuerte luz del verano ilumina las barcas y la orilla del río mientras las sombras envuelven los ojos del puente. Los reflejos en el agua difuminan las formas, existiendo cierta anticipación a la abstracción. La iluminación refuerza las tonalidades azules y verdes, aplicadas con pequeños toques de pincel en forma de comas lo que provoca que los detalles desaparezcan. Estas imágenes ponen de manifiesto la filosofía impresionista, cuyo máximo representante será Monet.\r\n', 'imgs/galeria/MOP02174.jpg', 'robertito@gmail.com'),
(16, 'La cuna', 'MORISOT BERTHE', '1872', 'Oleo sobre lienzo', 'Dentro del Impresionismo, Morisot se especializará en los temas intimistas, protagonizados por mujeres. De esta manera parece congeniar más con Degas que con su maestro Manet. En La cuna observamos a una mujer vestida a la manera burguesa - traje negro con cuello y puños blancos de encaje y ajustado collar negro - contemplando a un bebé que duerme plácidamente en una cunita protegida por un mosquitero. La escena se desarrolla en una habitación, apreciándose las blancas cortinas al fondo y una pared entelada. El efecto atmosférico creado es sensacional, con un difuminado de los contornos que recuerda a la Escuela veneciana. El empleo del negro en contraste con el blanco está tomado de Manet, mientras que la luz penetrando a través de las cortinas enlaza con Degas. La pincelada empleada por Morisot es rápida y ligeramente empastada, sin dejar de lado el excelente dibujo que siempre exhibir', 'imgs/galeria/asdasd.jpg', 'robertito@gmail.com'),
(17, 'La Bombonoir  ', 'Pierre Marián ', '2022  ', 'AI  ', ' Una representacion del lugar que mas feliz me hace en el mundo :P', 'imgs/galeria/DALL·E 2022-11-17 20.41.58 - an impresionism oil painting of la bombonera.png', 'pedrofernandezmariano@gmail.com'),
(18, 'Le Sissy Chien  ', 'Pierre Marián ', '2022  ', 'AI  ', ' Una reperesentacion desde el fondo de mi corazon de mi perro toguito.', 'imgs/galeria/DALL·E 2022-11-17 20.54.48 - a claude monet style painting of  a gay siberian huskey with a gun.png', 'pedrofernandezmariano@gmail.com'),
(19, 'Liberté de Décapage', 'Le Calveaun ', '2022', 'AI', 'Esta obra representa la infancia del autor vivida en Washington DC entre el 2004 y 2010 tras los continuos castigos de su madre exiliandolo en el exterior, tras desnunarse en frente al cuerpo de su abuelo.', 'imgs/galeria/DALL·E 2022-11-17 21.04.18 - a claude monet style painting of a fat kid wearing a speedo running across the obelisc.png', 'calvinlutsch2000@gmail.com'),
(20, 'homme qui araignée', 'Le Calveaun ', '2022', 'AI', 'Un agradecimiento del autor a todas sus fuentes de inspiracion en su obra final previo a su suicidio. ', 'imgs/galeria/DALL·E 2022-11-17 21.17.32 - a claude monet style painting of a fat spiderman running a box of pizza.png', 'calvinlutsch2000@gmail.com'),
(21, 'El oso astronauta  ', 'Lucas Massaro ', '2022  ', 'AI  ', ' Un oso astronauta comiendo un bigmac.', 'imgs/galeria/DALL·E 2022-12-05 20.25.06 - An oil impressionism paint of Messi as an astronaut eating mcdonalds.png', 'Lucas@gmail.com'),
(25, 'Reveire', 'Juane', '2023', 'AI', 'Una pintura impresionista al óleo hecha por inteligencia artificial (Dalle-2), de el histórico pianista Claude Debussy. ', 'imgs/galeria/DALL·E 2023-05-22 19.33.26 - an impressionist oil painting  of claude debussy  playin reveire.png', 'juanimeliausa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(200) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Juan Melia', 'juanimeliausa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Roberto Aguirre', 'robertito@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Jorge', 'jorge@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'juanito10000', 'pedrofernandezmariano@gmail.com', '99c06033882e05355b414605af27b83d'),
(5, 'Le Calveaun', 'calvinlutsch2000@gmail.com', '19f12349191e8802c75442873a5d205b'),
(6, 'Agustin Larrea', 'agus@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Jero', 'jero.capo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Lucas', 'Lucas@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Lilly', 'lillycollins@disney.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Juanca Melia', 'juancamelia@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Eze', 'perezezequiel.a04@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obrasgaleria`
--
ALTER TABLE `obrasgaleria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obrasgaleria`
--
ALTER TABLE `obrasgaleria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
