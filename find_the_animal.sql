-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 04:42:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `find_the_animal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `Idanimal` int(11) NOT NULL,
  `Nombreanimal` varchar(50) NOT NULL,
  `Fotoanimal` varchar(50) NOT NULL,
  `Descrianimal` varchar(300) NOT NULL,
  `Idraza` int(11) NOT NULL,
  `Idestado` int(11) NOT NULL,
  `Idmunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`Idanimal`, `Nombreanimal`, `Fotoanimal`, `Descrianimal`, `Idraza`, `Idestado`, `Idmunicipio`) VALUES
(1, 'Candy', 'gato1.png', 'Tiene 2 años y es color naranja. Candy es una gata que me encontré por los lados de caldas bajando para la estrella. yo me estoy haciendo responsable de ella', 2, 2, 1),
(2, 'Bigote', 'gato2.png', 'Gato en adopción, su nombre es Bigotes y tiene 2 años de edad, es muy cariñoso y fiel. cualquier información al 3234579698', 2, 4, 2),
(3, 'Max', 'cockerspaniel.png', 'Tiene más o menos un año, y lo vi por prado centro, por el callejón de muebles y antigüedades, cualquier información ir por la zona', 5, 2, 3),
(4, 'Danna', 'Husky.png', 'Esta es mi mascota Danna, se me voló yendo por Copacabana, por favor cualquier información hacérmela saber, es una perrita muy miedosa y nerviosa', 4, 1, 7),
(5, 'Naya', 'Pastorovejero.png', 'Ella es Naya, se perdió por los lados del centro comercial puerta del norte, cualquier información que tengan de ella, por favor hacérmelo saber, soy su dueña y estoy muy angustiada', 3, 1, 4),
(7, 'Zeus', 'Pitbullfoto.jpg', 'Su nombre es Zeus, esta perdido ya que tiene placa pero no hay números de teléfono, lo encontré por los lados de Pompilio del norte. Si saben algo del paradero de sus dueños o alguien lo quiere adoptar, cualquier información escribirme', 1, 2, 7),
(8, 'Snoopie', 'Golden.jpg', 'Buenas tardes se me perdió el perrito por la estrella en horas de la mañana su nombre es Snoopie si lo han visto por favor llamar a estos números, muchas gracias', 55, 1, 2),
(9, 'Paco', 'Chihuahua.jpg', 'El es Paco, es un perrito chihuahua que no tiene mucho tiempo de nacido, no puedo tenerlo ya que me voy del país y no se cuando vuelva. Por favor alguien que le de un buen hogar, gracias', 61, 4, 8),
(10, 'Dolce', 'Terrier.jpg', 'Esta perrita esta perdida en la Parroquial de Divino Maestro o si esta abandonada alguien que la quiera adoptar, por favor ayuden a compartir.', 57, 4, 3),
(11, 'No tiene', 'Caniche.jpg', 'Este es uno de 6 cachorros que tuvo mi perrita, lo estoy dando en adopción ya que no puedo cuidarlo. Cualquier información, escribir al 3207634598', 56, 4, 6),
(12, 'Leoncito', 'cockerspaniel2.png', 'El es Leoncito, mi perrito, tiene 10 meses y es muy juguetón y amigable, se me perdió el día 7 de Junio por los lados de la estación de Niquia y hasta el momento no he sabido nada de el. Por favor si tienen cualquier información, hacérmela saber, el es muy importante para mi', 5, 1, 4),
(13, 'Perla', 'Oriental.jpeg', 'Ella es Perla, una gata oriental que tengo hace dos años, pero pronto me voy del país y no podre llevármela es una gata muy cariñosa y para nada dañina. Personas interesadas por favor darle un buen hogar', 80, 4, 8),
(14, 'No tiene', 'Vanturco.jpeg', 'Este es Un gato que me encontré cerca del parque de la estrella, es muy lindo, lo bañe y lo lleve al veterinario y esta libre de parásitos y sano. Cualquier información, escribirme ', 83, 2, 2),
(15, 'Michi', 'Persa.jpeg', 'El es Michi, lo perdí y me informaron que la ultima vez que fue visto en la calle fue por el centro comercial Mayorca. Por favor, cualquier información hacérmela saber, es un gatito muy tímido y asustadizo ya que es muy mayor', 71, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Idempresa` bigint(14) NOT NULL,
  `Descriempresa` varchar(300) NOT NULL,
  `Direcempre` varchar(50) NOT NULL,
  `Fotoempre` varchar(50) NOT NULL,
  `Encargadoempre` varchar(50) NOT NULL,
  `Telefonoempre` varchar(13) NOT NULL,
  `Correoempre` varchar(50) NOT NULL,
  `Contraseñaempre` varchar(50) NOT NULL,
  `IdTiempre` int(11) NOT NULL,
  `Nombrempre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Idempresa`, `Descriempresa`, `Direcempre`, `Fotoempre`, `Encargadoempre`, `Telefonoempre`, `Correoempre`, `Contraseñaempre`, `IdTiempre`, `Nombrempre`) VALUES
(18274634928376, 'Somos una clínica veterinaria que realiza todo tipo de cirugías de alto riesgo, y muchos servicios más\r\n ', 'Cl 65 #87-59', 'Veterinariarobledo.png', 'Manuel Duque', '3145672349', 'Vetrobledo@gmaail.com', 'Robledoveterinaria', 2, 'Veterinaria Robledo'),
(19338473624875, 'PET boutique es un spa para mascotas que presta todo tipo de servicios para le cuidado del pelaje y de la piel de tus peludos\r\n', 'Cl. 50 #47 15', 'PETboutique.png', 'Sandra Restrespo', '3675312345', 'PETboutique.spa@gmail.com', 'Spa2023', 1, 'PET Boutique'),
(28374651264783, 'Compra increíbles accesorios para tu mascota. Coll', 'Cl. 1A ##53-21', 'Supercan.png', 'Claudia Chavarría', '3876745627', 'Supercannegocio@gmail.com', 'Perritos123', 1, 'Super CAN'),
(38497562348576, 'Somos especialistas en artículos para mascotas. Aq', 'Dirección: Calle 48C # 66-62, 0500 Medellín, Antio', 'tienda1.jpg', 'Roberto Romero', '305 3617707', 'amiscotpet@gmail.com', '1234', 1, ''),
(38756473827450, 'Somos un grupo privado sin animo de lucro, dirigid', 'Caldas Sur', 'Losangeles.png', 'Angela Patricia Reyes', '3013936074', 'losangelescaninos@une.net.co', 'LosAngelesperritos', 3, 'Fundación Los Angeles Caninos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `Idestado` int(11) NOT NULL,
  `Descriestado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Idestado`, `Descriestado`) VALUES
(1, 'Perdido'),
(2, 'Encontrado'),
(3, 'En situación de calle'),
(4, 'En adopción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `Idmunicipio` int(11) NOT NULL,
  `Descrimuni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Idmunicipio`, `Descrimuni`) VALUES
(1, 'Caldas'),
(2, 'La Estrella'),
(3, 'Medellín'),
(4, 'Bello'),
(5, 'Barbosa'),
(6, 'Girardota'),
(7, 'Copacabana '),
(8, 'Envigado'),
(9, 'Itagüí'),
(10, 'Sabaneta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `Idpubli` int(11) NOT NULL,
  `Idusuario` int(11) NOT NULL,
  `Idanimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`Idpubli`, `Idusuario`, `Idanimal`) VALUES
(4, 115219895, 3),
(5, 115219895, 4),
(2, 1015187285, 2),
(3, 1023631837, 5),
(1, 1234567890, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `Idraza` int(11) NOT NULL,
  `Descriraza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`Idraza`, `Descriraza`) VALUES
(1, 'Pitbull'),
(2, 'Gato'),
(3, 'Pastor ovejero'),
(4, 'Husky'),
(5, 'Cocker spaniel'),
(8, 'Pastor Aleman'),
(9, 'Pitweiler'),
(10, 'Kai Ken'),
(11, 'Sabueso Polaco|'),
(12, 'Sabueso Español'),
(13, 'Pastor Bohemio (chodsky)'),
(14, 'Labradoodle'),
(15, 'Sabueso Fino Colombiano'),
(16, 'Sabueso de Transilvania'),
(17, 'Morkie'),
(18, 'Sabueso de Baviera'),
(19, 'Lucher'),
(20, 'Esquimal Canadiense'),
(21, 'Jack Russell Terrier'),
(22, 'Bulldog Francés'),
(23, 'Bulldog Continental'),
(24, 'Alaskan Klee Kai'),
(25, 'Esquimal Americano'),
(26, 'Pastor Alemán'),
(27, 'Volpino Italiano'),
(28, 'Pomerania'),
(29, 'Terrier Alemán'),
(30, 'Chihuahua'),
(31, 'Perdiguero Frisón'),
(32, 'Shih tzu'),
(33, 'Perdiguero de Burgos'),
(34, 'Perdiguero portugués'),
(35, 'Cobrador'),
(36, 'Cobrador pelo liso'),
(37, 'Silky Terrier Australiano'),
(38, 'Leonberger'),
(39, 'Braco de Weimar'),
(40, 'Braco de Borbón'),
(41, 'Beagle'),
(42, 'Border Collie'),
(43, 'Pastor Belga '),
(44, 'Pastor Inglés'),
(45, 'Fox terrier'),
(46, 'Whippet'),
(47, 'Braco Alemán '),
(48, 'Pinscher'),
(49, 'Bichón Maltés'),
(50, 'Manchester terrier'),
(51, 'Terrier Tibetano'),
(52, 'Lancashier'),
(53, 'Lobero Irlandés '),
(54, 'Perro Australiano'),
(55, 'Golden Retriver'),
(56, 'Caniche'),
(57, 'Yorkshire terrier'),
(58, 'Dálmata'),
(59, 'Criollo'),
(60, 'Boxer'),
(61, 'Chihuahua '),
(62, 'Bulldog Inglés '),
(63, 'Doberman'),
(64, 'San Bernardo'),
(65, 'Rottweilwer'),
(66, 'Labrador'),
(67, 'Jack Rusell Terrier'),
(68, 'Schnauzer'),
(70, 'Maine Coon'),
(71, 'gato Persa'),
(72, 'gato Siamés'),
(73, 'gato Bengalí'),
(74, 'gato Exótico'),
(75, 'gato Bosque de Noruega'),
(76, 'Gato Siberiano'),
(77, 'Gato Azul Ruso'),
(78, 'gato Ragdoll'),
(79, 'Británico de pelo corto'),
(80, 'gato Oriental'),
(81, 'Sagrado de Birmania'),
(82, 'Angora Turco'),
(83, 'Van Turco'),
(84, 'gato Himalayo'),
(85, 'gato Nebelung');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `IdTidocu` int(11) NOT NULL,
  `Descridocu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`IdTidocu`, `Descridocu`) VALUES
(1, 'Cédula'),
(2, 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempresa`
--

CREATE TABLE `tipoempresa` (
  `IdTiempre` int(11) NOT NULL,
  `DescriTiempre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoempresa`
--

INSERT INTO `tipoempresa` (`IdTiempre`, `DescriTiempre`) VALUES
(1, 'Tienda'),
(2, 'Veterinario'),
(3, 'Fundación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTiusua` int(11) NOT NULL,
  `Descriusua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTiusua`, `Descriusua`) VALUES
(1, 'Usuario'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Idusuario` int(11) NOT NULL,
  `Nombrecomple` varchar(50) NOT NULL,
  `Correousua` varchar(50) NOT NULL,
  `Contrausua` varchar(50) NOT NULL,
  `Telefonousua` varchar(13) NOT NULL,
  `IdTidocu` int(11) NOT NULL,
  `IdTiusua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Idusuario`, `Nombrecomple`, `Correousua`, `Contrausua`, `Telefonousua`, `IdTidocu`, `IdTiusua`) VALUES
(33816156, 'Dianeth Yamile León', 'dianethyamile@misena.edu.co', '1111', '3135417303', 1, 2),
(43605145, 'adriana giraldo', 'luzagiraldogoez@gmail.com', '12345', '3023592367', 1, 2),
(115219895, 'Kelly Tatiana Cañas Chavarría', 'Tati_1992@gmail.com', '2007', '3023598997', 2, 1),
(1011393073, 'Valentina García Rodriguez', 'Valentinagarciar24@gmail.com', 'AmoaNikolle', '3052418243', 1, 2),
(1015187285, 'Julieta Ruiz', 'julietaruiz@gmail.com', '2005', '3163088423', 1, 2),
(1023631837, 'Nikolle Hoyos Chavarria', 'Nikollechavarria13@gmail.com', '2003', '3167311232', 2, 1),
(1234567890, 'Rebeca Rodríguez', 'rebecarodriguez@gmail.com', '2005', '3026209075', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Idanimal`),
  ADD KEY `Idraza` (`Idraza`,`Idestado`,`Idmunicipio`),
  ADD KEY `Idestado` (`Idestado`),
  ADD KEY `Idmunicipio` (`Idmunicipio`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Idempresa`),
  ADD KEY `Idtipoempre` (`IdTiempre`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Idestado`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`Idmunicipio`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`Idpubli`),
  ADD KEY `Idusuario` (`Idusuario`,`Idanimal`),
  ADD KEY `Idanimal` (`Idanimal`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`Idraza`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`IdTidocu`);

--
-- Indices de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  ADD PRIMARY KEY (`IdTiempre`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTiusua`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Idusuario`),
  ADD KEY `IdTidocu` (`IdTidocu`,`IdTiusua`),
  ADD KEY `IdTiusua` (`IdTiusua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `Idanimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `Idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `Idmunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `Idpubli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `Idraza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `IdTidocu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  MODIFY `IdTiempre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTiusua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`Idestado`) REFERENCES `estado` (`Idestado`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`Idraza`) REFERENCES `raza` (`Idraza`),
  ADD CONSTRAINT `animal_ibfk_3` FOREIGN KEY (`Idmunicipio`) REFERENCES `municipio` (`Idmunicipio`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`IdTiempre`) REFERENCES `tipoempresa` (`IdTiempre`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuario` (`Idusuario`),
  ADD CONSTRAINT `publicacion_ibfk_2` FOREIGN KEY (`Idanimal`) REFERENCES `animal` (`Idanimal`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdTiusua`) REFERENCES `tipousuario` (`IdTiusua`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`IdTidocu`) REFERENCES `tipodoc` (`IdTidocu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
