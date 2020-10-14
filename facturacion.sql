-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 15:12:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE `bodega` (
  `idBodega` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` int(5) NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` bigint(20) NOT NULL,
  `nitProveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `document` bigint(12) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE `departaments` (
  `id_departaments` tinyint(2) NOT NULL,
  `name_departament` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`id_departaments`, `name_departament`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(33, 'Bogotá D.C.'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `idDetalle` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `precioU` bigint(20) NOT NULL,
  `precioT` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `nitTienda` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cellphoneTienda` bigint(20) NOT NULL,
  `idVendedor` bigint(12) DEFAULT NULL,
  `documentCliente` bigint(12) NOT NULL,
  `valorNeto` bigint(20) NOT NULL,
  `valorTotal` bigint(20) NOT NULL,
  `descuento` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipality`
--

CREATE TABLE `municipality` (
  `id_municipality` int(5) NOT NULL,
  `name_municipality` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_departaments` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `municipality`
--

INSERT INTO `municipality` (`id_municipality`, `name_municipality`, `id_departaments`) VALUES
(1, 'El Encanto', 1),
(2, 'La Chorrera', 1),
(3, 'La Pedrera', 1),
(4, 'La Victoria', 1),
(5, 'Leticia', 1),
(6, 'Mirití-Paraná', 1),
(7, 'Puerto Alegría', 1),
(8, 'Puerto Arica', 1),
(9, 'Puerto Nariño', 1),
(10, 'Puerto Santander', 1),
(11, 'Tarapacá', 1),
(12, 'Abejorral', 2),
(13, 'Abriaquí', 2),
(14, 'Alejandría', 2),
(15, 'Amagá', 2),
(16, 'Amalfi', 2),
(17, 'Andes', 2),
(18, 'Angelópolis', 2),
(19, 'Angostura', 2),
(20, 'Anorí', 2),
(21, 'Santa Fe de Antioquia', 2),
(22, 'Anzá', 2),
(23, 'Apartadó', 2),
(24, 'Arboletes', 2),
(25, 'Argelia', 2),
(26, 'Armenia', 2),
(27, 'Barbosa', 2),
(28, 'Bello', 2),
(29, 'Belmira', 2),
(30, 'Betania', 2),
(31, 'Betulia', 2),
(32, 'Briceño', 2),
(33, 'Buriticá', 2),
(34, 'Cáceres', 2),
(35, 'Caicedo', 2),
(36, 'Caldas', 2),
(37, 'Campamento', 2),
(38, 'Cañasgordas', 2),
(39, 'Caracolí', 2),
(40, 'Caramanta', 2),
(41, 'Carepa', 2),
(42, 'Carmen de Viboral', 2),
(43, 'Carolina del Príncipe', 2),
(44, 'Caucasia', 2),
(45, 'Chigorodó', 2),
(46, 'Cisneros', 2),
(47, 'Ciudad Bolívar', 2),
(48, 'Cocorná', 2),
(49, 'Concepción', 2),
(50, 'Concordia', 2),
(51, 'Copacabana', 2),
(52, 'Dabeiba', 2),
(53, 'Donmatías', 2),
(54, 'Ebéjico', 2),
(55, 'El Bagre', 2),
(56, 'El Peñol', 2),
(57, 'El Retiro', 2),
(58, 'El Santuario', 2),
(59, 'Entrerríos', 2),
(60, 'Envigado', 2),
(61, 'Fredonia', 2),
(62, 'Frontino', 2),
(63, 'Giraldo', 2),
(64, 'Girardota', 2),
(65, 'Gómez Plata', 2),
(66, 'Granada', 2),
(67, 'Guadalupe', 2),
(68, 'Guarne', 2),
(69, 'Guatapé', 2),
(70, 'Heliconia', 2),
(71, 'Hispania', 2),
(72, 'Itagüí', 2),
(73, 'Ituango', 2),
(74, 'Jardín', 2),
(75, 'Jericó', 2),
(76, 'La Ceja', 2),
(77, 'La Estrella', 2),
(78, 'La Pintada', 2),
(79, 'La Unión', 2),
(80, 'Liborina', 2),
(81, 'Maceo', 2),
(82, 'Marinilla', 2),
(83, 'Medellín', 2),
(84, 'Montebello', 2),
(85, 'Murindó', 2),
(86, 'Mutatá', 2),
(87, 'Nariño', 2),
(88, 'Nechí', 2),
(89, 'Necoclí', 2),
(90, 'Olaya', 2),
(91, 'Peque', 2),
(92, 'Pueblorrico', 2),
(93, 'Puerto Berrío', 2),
(94, 'Puerto Nare', 2),
(95, 'Puerto Triunfo', 2),
(96, 'Remedios', 2),
(97, 'Rionegro', 2),
(98, 'Sabanalarga', 2),
(99, 'Sabaneta', 2),
(100, 'Salgar', 2),
(101, 'San Andrés de Cuerquia', 2),
(102, 'San Carlos', 2),
(103, 'San Francisco', 2),
(104, 'San Jerónimo', 2),
(105, 'San José de la Montaña', 2),
(106, 'San Juan de Urabá', 2),
(107, 'San Luis', 2),
(108, 'San Pedro de los Milagros', 2),
(109, 'San Pedro de Urabá', 2),
(110, 'San Rafael', 2),
(111, 'San Roque', 2),
(112, 'San Vicente', 2),
(113, 'Santa Bárbara', 2),
(114, 'Santa Rosa de Osos', 2),
(115, 'Santo Domingo', 2),
(116, 'Segovia', 2),
(117, 'Sonsón', 2),
(118, 'Sopetrán', 2),
(119, 'Támesis', 2),
(120, 'Tarazá', 2),
(121, 'Tarso', 2),
(122, 'Titiribí', 2),
(123, 'Toledo', 2),
(124, 'Turbo', 2),
(125, 'Uramita', 2),
(126, 'Urrao', 2),
(127, 'Valdivia', 2),
(128, 'Valparaíso', 2),
(129, 'Vegachí', 2),
(130, 'Venecia', 2),
(131, 'Vigía del Fuerte', 2),
(132, 'Yalí', 2),
(133, 'Yarumal', 2),
(134, 'Yolombó', 2),
(135, 'Yondó', 2),
(136, 'Zaragoza', 2),
(137, 'Arauca', 3),
(138, 'Arauquita', 3),
(139, 'Cravo Norte', 3),
(140, 'Fortul', 3),
(141, 'Puerto Rondón', 3),
(142, 'Saravena', 3),
(143, 'Tame', 3),
(144, 'Baranoa', 4),
(145, 'Barranquilla', 4),
(146, 'Campo de La Cruz', 4),
(147, 'Candelaria', 4),
(148, 'Galapa', 4),
(149, 'Juan de Acosta', 4),
(150, 'Luruaco', 4),
(151, 'Malambo', 4),
(152, 'Manatí', 4),
(153, 'Palmar de Varela', 4),
(154, 'Piojó', 4),
(155, 'Polonuevo', 4),
(156, 'Ponedera', 4),
(157, 'Puerto Colombia', 4),
(158, 'Repelón', 4),
(159, 'Sabanagrande', 4),
(160, 'Sabanalarga', 4),
(161, 'Santa Lucía', 4),
(162, 'Santo Tomás', 4),
(163, 'Soledad', 4),
(164, 'Suán', 4),
(165, 'Tubará', 4),
(166, 'Usiacurí', 4),
(167, 'Achí', 5),
(168, 'Altos del Rosario', 5),
(169, 'Arenal', 5),
(170, 'Arjona', 5),
(171, 'Arroyohondo', 5),
(172, 'Barranco de Loba', 5),
(173, 'Brazuelo de Papayal', 5),
(174, 'Calamar', 5),
(175, 'Cantagallo', 5),
(176, 'Cartagena de Indias', 5),
(177, 'Cicuco', 5),
(178, 'Clemencia', 5),
(179, 'Córdoba', 5),
(180, 'El Carmen de Bolívar', 5),
(181, 'El Guamo', 5),
(182, 'El Peñón', 5),
(183, 'Hatillo de Loba', 5),
(184, 'Magangué', 5),
(185, 'Mahates', 5),
(186, 'Margarita', 5),
(187, 'María La Baja', 5),
(188, 'Montecristo', 5),
(189, 'Morales', 5),
(190, 'Norosí', 5),
(191, 'Pinillos', 5),
(192, 'Regidor', 5),
(193, 'Río Viejo', 5),
(194, 'San Cristóbal', 5),
(195, 'San Estanislao', 5),
(196, 'San Fernando', 5),
(197, 'San Jacinto', 5),
(198, 'San Jacinto del Cauca', 5),
(199, 'San Juan Nepomuceno', 5),
(200, 'San Martín de Loba', 5),
(201, 'San Pablo', 5),
(202, 'Santa Catalina', 5),
(203, 'Santa Cruz de Mompox', 5),
(204, 'Santa Rosa de Lima', 5),
(205, 'Santa Rosa del Sur', 5),
(206, 'Simití', 5),
(207, 'Soplaviento', 5),
(208, 'Talaigua Nuevo', 5),
(209, 'Tiquisio', 5),
(210, 'Turbaco', 5),
(211, 'Turbaná', 5),
(212, 'Villanueva', 5),
(213, 'Zambrano', 5),
(214, 'Almeida', 6),
(215, 'Aquitania', 6),
(216, 'Arcabuco', 6),
(217, 'Belén', 6),
(218, 'Berbeo', 6),
(219, 'Betéitiva', 6),
(220, 'Boavita', 6),
(221, 'Boyacá', 6),
(222, 'Briceño', 6),
(223, 'Buenavista', 6),
(224, 'Busbanzá', 6),
(225, 'Caldas', 6),
(226, 'Campohermoso', 6),
(227, 'Cerinza', 6),
(228, 'Chinavita', 6),
(229, 'Chiquinquirá', 6),
(230, 'Chíquiza', 6),
(231, 'Chiscas', 6),
(232, 'Chita', 6),
(233, 'Chitaraque', 6),
(234, 'Chivatá', 6),
(235, 'Chivor', 6),
(236, 'Ciénega', 6),
(237, 'Cómbita', 6),
(238, 'Coper', 6),
(239, 'Corrales', 6),
(240, 'Covarachía', 6),
(241, 'Cubará', 6),
(242, 'Cucaita', 6),
(243, 'Cuítiva', 6),
(244, 'Duitama', 6),
(245, 'El Cocuy', 6),
(246, 'El Espino', 6),
(247, 'Firavitoba', 6),
(248, 'Floresta', 6),
(249, 'Gachantivá', 6),
(250, 'Gámeza', 6),
(251, 'Garagoa', 6),
(252, 'Guacamayas', 6),
(253, 'Guateque', 6),
(254, 'Guayatá', 6),
(255, 'Güicán', 6),
(256, 'Iza', 6),
(257, 'Jenesano', 6),
(258, 'Jericó', 6),
(259, 'La Capilla', 6),
(260, 'La Uvita', 6),
(261, 'La Victoria', 6),
(262, 'Labranzagrande', 6),
(263, 'Macanal', 6),
(264, 'Maripí', 6),
(265, 'Miraflores', 6),
(266, 'Mongua', 6),
(267, 'Monguí', 6),
(268, 'Moniquirá', 6),
(269, 'Motavita', 6),
(270, 'Muzo', 6),
(271, 'Nobsa', 6),
(272, 'Nuevo Colón', 6),
(273, 'Oicatá', 6),
(274, 'Otanche', 6),
(275, 'Pachavita', 6),
(276, 'Páez', 6),
(277, 'Paipa', 6),
(278, 'Pajarito', 6),
(279, 'Panqueba', 6),
(280, 'Pauna', 6),
(281, 'Paya', 6),
(282, 'Paz de Río', 6),
(283, 'Pesca', 6),
(284, 'Pisba', 6),
(285, 'Puerto Boyacá', 6),
(286, 'Quípama', 6),
(287, 'Ramiriquí', 6),
(288, 'Ráquira', 6),
(289, 'Rondón', 6),
(290, 'Saboyá', 6),
(291, 'Sáchica', 6),
(292, 'Samacá', 6),
(293, 'San Eduardo', 6),
(294, 'San José de Pare', 6),
(295, 'San Luis de Gaceno', 6),
(296, 'San Mateo', 6),
(297, 'San Miguel de Sema', 6),
(298, 'San Pablo de Borbur', 6),
(299, 'Santa María', 6),
(300, 'Santa Rosa de Viterbo', 6),
(301, 'Santa Sofía', 6),
(302, 'Santana', 6),
(303, 'Sativanorte', 6),
(304, 'Sativasur', 6),
(305, 'Siachoque', 6),
(306, 'Soatá', 6),
(307, 'Socha', 6),
(308, 'Socotá', 6),
(309, 'Sogamoso', 6),
(310, 'Somondoco', 6),
(311, 'Sora', 6),
(312, 'Soracá', 6),
(313, 'Sotaquirá', 6),
(314, 'Susacón', 6),
(315, 'Sutamarchán', 6),
(316, 'Sutatenza', 6),
(317, 'Tasco', 6),
(318, 'Tenza', 6),
(319, 'Tibaná', 6),
(320, 'Tibasosa', 6),
(321, 'Tinjacá', 6),
(322, 'Tipacoque', 6),
(323, 'Toca', 6),
(324, 'Togüí', 6),
(325, 'Tópaga', 6),
(326, 'Tota', 6),
(327, 'Tunja', 6),
(328, 'Tunungua', 6),
(329, 'Turmequé', 6),
(330, 'Tuta', 6),
(331, 'Tutazá', 6),
(332, 'Úmbita', 6),
(333, 'Ventaquemada', 6),
(334, 'Villa de Leyva', 6),
(335, 'Viracachá', 6),
(336, 'Zetaquira', 6),
(337, 'Aguadas', 7),
(338, 'Anserma', 7),
(339, 'Aranzazu', 7),
(340, 'Belalcázar', 7),
(341, 'Chinchiná', 7),
(342, 'Filadelfia', 7),
(343, 'La Dorada', 7),
(344, 'La Merced', 7),
(345, 'Manizales', 7),
(346, 'Manzanares', 7),
(347, 'Marmato', 7),
(348, 'Marquetalia', 7),
(349, 'Marulanda', 7),
(350, 'Neira', 7),
(351, 'Norcasia', 7),
(352, 'Pácora', 7),
(353, 'Palestina', 7),
(354, 'Pensilvania', 7),
(355, 'Riosucio', 7),
(356, 'Risaralda', 7),
(357, 'Salamina', 7),
(358, 'Samaná', 7),
(359, 'San José', 7),
(360, 'Supía', 7),
(361, 'Victoria', 7),
(362, 'Villamaría', 7),
(363, 'Viterbo', 7),
(364, 'Albania', 8),
(365, 'Belén de los Andaquies', 8),
(366, 'Cartagena del Chairá', 8),
(367, 'Curillo', 8),
(368, 'El Doncello', 8),
(369, 'El Paujil', 8),
(370, 'Florencia', 8),
(371, 'La Montañita', 8),
(372, 'Morelia', 8),
(373, 'Puerto Milán', 8),
(374, 'Puerto Rico', 8),
(375, 'San José del Fragua', 8),
(376, 'San Vicente del Caguán', 8),
(377, 'Solano', 8),
(378, 'Solita', 8),
(379, 'Valparaíso', 8),
(380, 'Aguazul', 9),
(381, 'Chámeza', 9),
(382, 'Hato Corozal', 9),
(383, 'La Salina', 9),
(384, 'Maní', 9),
(385, 'Monterrey', 9),
(386, 'Nunchía', 9),
(387, 'Orocué', 9),
(388, 'Paz de Ariporo', 9),
(389, 'Pore', 9),
(390, 'Recetor', 9),
(391, 'Sabanalarga', 9),
(392, 'Sácama', 9),
(393, 'San Luis de Palenque', 9),
(394, 'Támara', 9),
(395, 'Tauramena', 9),
(396, 'Trinidad', 9),
(397, 'Villanueva', 9),
(398, 'Yopal', 9),
(399, 'Almaguer', 10),
(400, 'Argelia', 10),
(401, 'Balboa', 10),
(402, 'Bolívar', 10),
(403, 'Buenos Aires', 10),
(404, 'Cajibío', 10),
(405, 'Caldono', 10),
(406, 'Caloto', 10),
(407, 'Corinto', 10),
(408, 'El Tambo', 10),
(409, 'Florencia', 10),
(410, 'Guachené', 10),
(411, 'Guapí', 10),
(412, 'Inzá', 10),
(413, 'Jambaló', 10),
(414, 'La Sierra', 10),
(415, 'La Vega', 10),
(416, 'López de Micay', 10),
(417, 'Mercaderes', 10),
(418, 'Miranda', 10),
(419, 'Morales', 10),
(420, 'Padilla', 10),
(421, 'Páez', 10),
(422, 'Patía', 10),
(423, 'Piamonte', 10),
(424, 'Piendamó', 10),
(425, 'Popayán', 10),
(426, 'Puerto Tejada', 10),
(427, 'Puracé', 10),
(428, 'Rosas', 10),
(429, 'San Sebastián', 10),
(430, 'Santa Rosa', 10),
(431, 'Santander de Quilichao', 10),
(432, 'Silvia', 10),
(433, 'Sotará', 10),
(434, 'Suárez', 10),
(435, 'Sucre', 10),
(436, 'Timbío', 10),
(437, 'Timbiquí', 10),
(438, 'Toribío', 10),
(439, 'Totoró', 10),
(440, 'Villa Rica', 10),
(441, 'Aguachica', 11),
(442, 'Agustín Codazzi', 11),
(443, 'Astrea', 11),
(444, 'Becerril', 11),
(445, 'Bosconia', 11),
(446, 'Chimichagua', 11),
(447, 'Chiriguaná', 11),
(448, 'Curumaní', 11),
(449, 'El Copey', 11),
(450, 'El Paso', 11),
(451, 'Gamarra', 11),
(452, 'González', 11),
(453, 'La Gloria', 11),
(454, 'La Jagua de Ibirico', 11),
(455, 'La Paz', 11),
(456, 'Manaure Balcón del Cesar', 11),
(457, 'Pailitas', 11),
(458, 'Pelaya', 11),
(459, 'Pueblo Bello', 11),
(460, 'Río de Oro', 11),
(461, 'San Alberto', 11),
(462, 'San Diego', 11),
(463, 'San Martín', 11),
(464, 'Tamalameque', 11),
(465, 'Valledupar', 11),
(466, 'Acandí', 12),
(467, 'Alto Baudó', 12),
(468, 'Bagadó', 12),
(469, 'Bahía Solano', 12),
(470, 'Bajo Baudó', 12),
(471, 'Bojayá', 12),
(472, 'Cértegui', 12),
(473, 'Condoto', 12),
(474, 'Cantón de San Pablo', 12),
(475, 'El Atrato', 12),
(476, 'El Carmen de Atrato', 12),
(477, 'El Carmen del Darién', 12),
(478, 'El Litoral de San Juan', 12),
(479, 'Istmina', 12),
(480, 'Juradó', 12),
(481, 'Lloró', 12),
(482, 'Medio Atrato', 12),
(483, 'Medio Baudó', 12),
(484, 'Medio San Juan', 12),
(485, 'Nóvita', 12),
(486, 'Nuquí', 12),
(487, 'Quibdó', 12),
(488, 'Río Iró', 12),
(489, 'Río Quito', 12),
(490, 'Riosucio', 12),
(491, 'San José del Palmar', 12),
(492, 'Sipí', 12),
(493, 'Tadó', 12),
(494, 'Unguía', 12),
(495, 'Unión Panamericana', 12),
(496, 'Ayapel', 13),
(497, 'Buenavista', 13),
(498, 'Canalete', 13),
(499, 'Cereté', 13),
(500, 'Chimá', 13),
(501, 'Chinú', 13),
(502, 'Ciénaga de Oro', 13),
(503, 'Cotorra', 13),
(504, 'La Apartada', 13),
(505, 'Los Córdobas', 13),
(506, 'Momil', 13),
(507, 'Montelíbano', 13),
(508, 'Montería', 13),
(509, 'Moñitos', 13),
(510, 'Planeta Rica', 13),
(511, 'Pueblo Nuevo', 13),
(512, 'Puerto Escondido', 13),
(513, 'Puerto Libertador', 13),
(514, 'Purísima', 13),
(515, 'Sahagún', 13),
(516, 'San Andrés de Sotavento', 13),
(517, 'San Antero', 13),
(518, 'San Bernardo del Viento', 13),
(519, 'San Carlos', 13),
(520, 'San José de Uré', 13),
(521, 'San Pelayo', 13),
(522, 'Santa Cruz de Lorica', 13),
(523, 'Tierralta', 13),
(524, 'Tuchín', 13),
(525, 'Valencia', 13),
(526, 'Agua de Dios', 14),
(527, 'Albán', 14),
(528, 'Anapoima', 14),
(529, 'Anolaima', 14),
(530, 'Apulo', 14),
(531, 'Arbelaéz', 14),
(532, 'Beltrán', 14),
(533, 'Bituima', 14),
(534, 'Bogotá', 33),
(535, 'Bojacá', 14),
(536, 'Cabrera', 14),
(537, 'Cachipay', 14),
(538, 'Cajicá', 14),
(539, 'Caparrapí', 14),
(540, 'Cáqueza', 14),
(541, 'Carmen de Carupa', 14),
(542, 'Chaguaní', 14),
(543, 'Chía', 14),
(544, 'Chipaque', 14),
(545, 'Choachí', 14),
(546, 'Chocontá', 14),
(547, 'Cogua', 14),
(548, 'Cota', 14),
(549, 'Cucunubá', 14),
(550, 'El Colegio', 14),
(551, 'El Peñón', 14),
(552, 'El Rosal', 14),
(553, 'Facatativá', 14),
(554, 'Fómeque', 14),
(555, 'Fosca', 14),
(556, 'Funza', 14),
(557, 'Fúquene', 14),
(558, 'Fusagasugá', 14),
(559, 'Gachalá', 14),
(560, 'Gachancipá', 14),
(561, 'Gachetá', 14),
(562, 'Gama', 14),
(563, 'Girardot', 14),
(564, 'Granada', 14),
(565, 'Guachetá', 14),
(566, 'Guaduas', 14),
(567, 'Guasca', 14),
(568, 'Guataquí', 14),
(569, 'Guatavita', 14),
(570, 'Guayabal de Síquima', 14),
(571, 'Guayabetal', 14),
(572, 'Gutiérrez', 14),
(573, 'Jerusalén', 14),
(574, 'Junín', 14),
(575, 'La Calera', 14),
(576, 'La Mesa', 14),
(577, 'La Palma', 14),
(578, 'La Peña', 14),
(579, 'La Vega', 14),
(580, 'Lenguazaque', 14),
(581, 'Machetá', 14),
(582, 'Madrid', 14),
(583, 'Manta', 14),
(584, 'Medina', 14),
(585, 'Mosquera', 14),
(586, 'Nariño', 14),
(587, 'Nemocón', 14),
(588, 'Nilo', 14),
(589, 'Nimaima', 14),
(590, 'Nocaima', 14),
(591, 'Pacho', 14),
(592, 'Paime', 14),
(593, 'Pandi', 14),
(594, 'Paratebueno', 14),
(595, 'Pasca', 14),
(596, 'Puerto Salgar', 14),
(597, 'Pulí', 14),
(598, 'Quebradanegra', 14),
(599, 'Quetame', 14),
(600, 'Quipile', 14),
(601, 'Ricaurte', 14),
(602, 'San Antonio del Tequendama', 14),
(603, 'San Bernardo', 14),
(604, 'San Cayetano', 14),
(605, 'San Francisco', 14),
(606, 'San Juan de Rioseco', 14),
(607, 'Sasaima', 14),
(608, 'Sesquilé', 14),
(609, 'Sibaté', 14),
(610, 'Silvania', 14),
(611, 'Simijaca', 14),
(612, 'Soacha', 14),
(613, 'Sopó', 14),
(614, 'Subachoque', 14),
(615, 'Suesca', 14),
(616, 'Supatá', 14),
(617, 'Susa', 14),
(618, 'Sutatausa', 14),
(619, 'Tabio', 14),
(620, 'Tausa', 14),
(621, 'Tena', 14),
(622, 'Tenjo', 14),
(623, 'Tibacuy', 14),
(624, 'Tibirita', 14),
(625, 'Tocaima', 14),
(626, 'Tocancipá', 14),
(627, 'Topaipí', 14),
(628, 'Ubalá', 14),
(629, 'Ubaque', 14),
(630, 'Ubaté', 14),
(631, 'Une', 14),
(632, 'Útica', 14),
(633, 'Venecia', 14),
(634, 'Vergara', 14),
(635, 'Vianí', 14),
(636, 'Villagómez', 14),
(637, 'Villapinzón', 14),
(638, 'Villeta', 14),
(639, 'Viotá', 14),
(640, 'Yacopí', 14),
(641, 'Zipacón', 14),
(642, 'Zipaquirá', 14),
(643, 'Barrancominas', 15),
(644, 'Cacahual', 15),
(645, 'Inírida', 15),
(646, 'La Guadalupe', 15),
(647, 'Morichal Nuevo', 15),
(648, 'Pana Pana', 15),
(649, 'Puerto Colombia', 15),
(650, 'San Felipe', 15),
(651, 'Calamar', 16),
(652, 'El Retorno', 16),
(653, 'Miraflores', 16),
(654, 'San José del Guaviare', 16),
(655, 'Acevedo', 17),
(656, 'Agrado', 17),
(657, 'Aipe', 17),
(658, 'Algeciras', 17),
(659, 'Altamira', 17),
(660, 'Baraya', 17),
(661, 'Campoalegre', 17),
(662, 'Colombia', 17),
(663, 'Elías', 17),
(664, 'El Pital', 17),
(665, 'Garzón', 17),
(666, 'Gigante', 17),
(667, 'Guadalupe', 17),
(668, 'Hobo', 17),
(669, 'Íquira', 17),
(670, 'Isnos', 17),
(671, 'La Argentina', 17),
(672, 'La Plata', 17),
(673, 'Nátaga', 17),
(674, 'Neiva', 17),
(675, 'Oporapa', 17),
(676, 'Paicol', 17),
(677, 'Palermo', 17),
(678, 'Palestina', 17),
(679, 'Pitalito', 17),
(680, 'Rivera', 17),
(681, 'Saladoblanco', 17),
(682, 'San Agustín', 17),
(683, 'Santa María', 17),
(684, 'Suaza', 17),
(685, 'Tarqui', 17),
(686, 'Tello', 17),
(687, 'Teruel', 17),
(688, 'Tesalia', 17),
(689, 'Timaná', 17),
(690, 'Villavieja', 17),
(691, 'Yaguará', 17),
(692, 'Albania', 18),
(693, 'Barrancas', 18),
(694, 'Dibulla', 18),
(695, 'Distracción', 18),
(696, 'El Molino', 18),
(697, 'Fonseca', 18),
(698, 'Hatonuevo', 18),
(699, 'La Jagua del Pilar', 18),
(700, 'Maicao', 18),
(701, 'Manaure', 18),
(702, 'Riohacha', 18),
(703, 'San Juan del Cesar', 18),
(704, 'Uribia', 18),
(705, 'Urumita', 18),
(706, 'Villanueva', 18),
(707, 'Algarrobo', 19),
(708, 'Aracataca', 19),
(709, 'Ariguaní', 19),
(710, 'Cerro de San Antonio', 19),
(711, 'Chibolo', 19),
(712, 'Ciénaga', 19),
(713, 'Concordia', 19),
(714, 'El Banco', 19),
(715, 'El Piñón', 19),
(716, 'El Retén', 19),
(717, 'Fundación', 19),
(718, 'Guamal', 19),
(719, 'Nuava Granada', 19),
(720, 'Pedraza', 19),
(721, 'Pijiño del Carmen', 19),
(722, 'Pivijay', 19),
(723, 'Plato', 19),
(724, 'Pueblo Viejo', 19),
(725, 'Remolino', 19),
(726, 'Sabanas de San Ángel', 19),
(727, 'Salamina', 19),
(728, 'San Sebastián de Buenavista', 19),
(729, 'San Zenón', 19),
(730, 'Santa Ana', 19),
(731, 'Santa Bárbara de Pinto', 19),
(732, 'Santa Marta', 19),
(733, 'Sitionuevo', 19),
(734, 'Tenerife', 19),
(735, 'Zapayán', 19),
(736, 'Zona Bananera', 19),
(737, 'Acacías', 20),
(738, 'Barranca de Upía', 20),
(739, 'Cabuyaro', 20),
(740, 'Castilla La Nueva', 20),
(741, 'Cubarral', 20),
(742, 'Cumaral', 20),
(743, 'El Calvario', 20),
(744, 'El Castillo', 20),
(745, 'El Dorado', 20),
(746, 'Fuente de Oro', 20),
(747, 'Granada', 20),
(748, 'Guamal', 20),
(749, 'La Macarena', 20),
(750, 'La Uribe', 20),
(751, 'Lejanías', 20),
(752, 'Mapiripán', 20),
(753, 'Mesetas', 20),
(754, 'Puerto Concordia', 20),
(755, 'Puerto Gaitán', 20),
(756, 'Puerto Lleras', 20),
(757, 'Puerto López', 20),
(758, 'Puerto Rico', 20),
(759, 'Restrepo', 20),
(760, 'San Carlos de Guaroa', 20),
(761, 'San Juan de Arama', 20),
(762, 'San Juanito', 20),
(763, 'San Martín', 20),
(764, 'Villavicencio', 20),
(765, 'Vista Hermosa', 20),
(766, 'San José de Albán', 21),
(767, 'Aldana', 21),
(768, 'Ancuya', 21),
(769, 'Arboleda', 21),
(770, 'Barbacoas', 21),
(771, 'Belén', 21),
(772, 'Buesaco', 21),
(773, 'Chachagüí', 21),
(774, 'Colón', 21),
(775, 'Consacá', 21),
(776, 'Contadero', 21),
(777, 'Córdoba', 21),
(778, 'Cuaspud', 21),
(779, 'Cumbal', 21),
(780, 'Cumbitara', 21),
(781, 'El Charco', 21),
(782, 'El Peñol', 21),
(783, 'El Rosario', 21),
(784, 'El Tablón', 21),
(785, 'El Tambo', 21),
(786, 'Francisco Pizarro', 21),
(787, 'Funes', 21),
(788, 'Guachucal', 21),
(789, 'Guaitarilla', 21),
(790, 'Gualmatán', 21),
(791, 'Iles', 21),
(792, 'Imués', 21),
(793, 'Ipiales', 21),
(794, 'La Cruz', 21),
(795, 'La Florida', 21),
(796, 'La Llanada', 21),
(797, 'La Tola', 21),
(798, 'La Unión', 21),
(799, 'Leiva', 21),
(800, 'Linares', 21),
(801, 'Los Andes', 21),
(802, 'Magüí', 21),
(803, 'Mallama', 21),
(804, 'Mosquera', 21),
(805, 'Nariño', 21),
(806, 'Olaya Herrera', 21),
(807, 'Ospina', 21),
(808, 'Pasto', 21),
(809, 'Policarpa', 21),
(810, 'Potosí', 21),
(811, 'Providencia', 21),
(812, 'Puerres', 21),
(813, 'Pupiales', 21),
(814, 'Ricaurte', 21),
(815, 'Roberto Payán', 21),
(816, 'Samaniego', 21),
(817, 'San Bernardo', 21),
(818, 'San Lorenzo', 21),
(819, 'San Pablo', 21),
(820, 'San Pedro de Cartago', 21),
(821, 'Sandoná', 21),
(822, 'Santa Bárbara', 21),
(823, 'Santacruz', 21),
(824, 'Sapuyes', 21),
(825, 'Taminango', 21),
(826, 'Tangua', 21),
(827, 'Tumaco', 21),
(828, 'Túquerres', 21),
(829, 'Yacuanquer', 21),
(830, 'Ábrego', 22),
(831, 'Arboledas', 22),
(832, 'Bochalema', 22),
(833, 'Bucarasica', 22),
(834, 'Cáchira', 22),
(835, 'Cácota', 22),
(836, 'Chinácota', 22),
(837, 'Chitagá', 22),
(838, 'Convención', 22),
(839, 'Cúcuta', 22),
(840, 'Cucutilla', 22),
(841, 'Durania', 22),
(842, 'El Carmen', 22),
(843, 'El Tarra', 22),
(844, 'El Zulia', 22),
(845, 'Gramalote', 22),
(846, 'Hacarí', 22),
(847, 'Herrán', 22),
(848, 'La Esperanza', 22),
(849, 'La Playa de Belén', 22),
(850, 'Labateca', 22),
(851, 'Los Patios', 22),
(852, 'Lourdes', 22),
(853, 'Mutiscua', 22),
(854, 'Ocaña', 22),
(855, 'Pamplona', 22),
(856, 'Pamplonita', 22),
(857, 'Puerto Santander', 22),
(858, 'Ragonvalia', 22),
(859, 'Salazar de Las Palmas', 22),
(860, 'San Calixto', 22),
(861, 'San Cayetano', 22),
(862, 'Santiago', 22),
(863, 'Santo Domingo de Silos', 22),
(864, 'Sardinata', 22),
(865, 'Teorama', 22),
(866, 'Tibú', 22),
(867, 'Toledo', 22),
(868, 'Villa Caro', 22),
(869, 'Villa del Rosario', 22),
(870, 'Colón', 23),
(871, 'Mocoa', 23),
(872, 'Orito', 23),
(873, 'Puerto Asís', 23),
(874, 'Puerto Caicedo', 23),
(875, 'Puerto Guzmán', 23),
(876, 'Puerto Leguízamo', 23),
(877, 'San Francisco', 23),
(878, 'San Miguel', 23),
(879, 'Santiago', 23),
(880, 'Sibundoy', 23),
(881, 'Valle del Guamuez', 23),
(882, 'Villagarzón', 23),
(883, 'Armenia', 24),
(884, 'Buenavista', 24),
(885, 'Calarcá', 24),
(886, 'Circasia', 24),
(887, 'Córdoba', 24),
(888, 'Filandia', 24),
(889, 'Génova', 24),
(890, 'La Tebaida', 24),
(891, 'Montenegro', 24),
(892, 'Pijao', 24),
(893, 'Quimbaya', 24),
(894, 'Salento', 24),
(895, 'Apía', 25),
(896, 'Balboa', 25),
(897, 'Belén de Umbría', 25),
(898, 'Dosquebradas', 25),
(899, 'Guática', 25),
(900, 'La Celia', 25),
(901, 'La Virginia', 25),
(902, 'Marsella', 25),
(903, 'Mistrató', 25),
(904, 'Pereira', 25),
(905, 'Pueblo Rico', 25),
(906, 'Quinchía', 25),
(907, 'Santa Rosa de Cabal', 25),
(908, 'Santuario', 25),
(909, 'Providencia y Santa Catalina Islas', 26),
(910, 'Aguada', 27),
(911, 'Albania', 27),
(912, 'Aratoca', 27),
(913, 'Barbosa', 27),
(914, 'Barichara', 27),
(915, 'Barrancabermeja', 27),
(916, 'Betulia', 27),
(917, 'Bolívar', 27),
(918, 'Bucaramanga', 27),
(919, 'Cabrera', 27),
(920, 'California', 27),
(921, 'Capitanejo', 27),
(922, 'Carcasí', 27),
(923, 'Cepitá', 27),
(924, 'Cerrito', 27),
(925, 'Charalá', 27),
(926, 'Charta', 27),
(927, 'Chima', 27),
(928, 'Chipatá', 27),
(929, 'Cimitarra', 27),
(930, 'Concepción', 27),
(931, 'Confines', 27),
(932, 'Contratación', 27),
(933, 'Coromoro', 27),
(934, 'Curití', 27),
(935, 'El Carmen de Chucurí', 27),
(936, 'El Guacamayo', 27),
(937, 'El Peñón', 27),
(938, 'El Playón', 27),
(939, 'Encino', 27),
(940, 'Enciso', 27),
(941, 'Florián', 27),
(942, 'Floridablanca', 27),
(943, 'Galán', 27),
(944, 'Gámbita', 27),
(945, 'Guaca', 27),
(946, 'Guadalupe', 27),
(947, 'Guapotá', 27),
(948, 'Guavatá', 27),
(949, 'Güepsa', 27),
(950, 'Hato', 27),
(951, 'Jesús María', 27),
(952, 'Jordán', 27),
(953, 'La Belleza', 27),
(954, 'La Paz', 27),
(955, 'Landázuri', 27),
(956, 'Lebrija', 27),
(957, 'Los Santos', 27),
(958, 'Macaravita', 27),
(959, 'Málaga', 27),
(960, 'Matanza', 27),
(961, 'Mogotes', 27),
(962, 'Molagavita', 27),
(963, 'Ocamonte', 27),
(964, 'Oiba', 27),
(965, 'Onzaga', 27),
(966, 'Palmar', 27),
(967, 'Palmas del Socorro', 27),
(968, 'Páramo', 27),
(969, 'Piedecuesta', 27),
(970, 'Pinchote', 27),
(971, 'Puente Nacional', 27),
(972, 'Puerto Parra', 27),
(973, 'Puerto Wilches', 27),
(974, 'Rionegro', 27),
(975, 'Sabana de Torres', 27),
(976, 'San Andrés', 27),
(977, 'San Benito', 27),
(978, 'San Gil', 27),
(979, 'San Joaquín', 27),
(980, 'San José de Miranda', 27),
(981, 'San Juan de Girón', 27),
(982, 'San Miguel', 27),
(983, 'San Vicente de Chucurí', 27),
(984, 'Santa Bárbara', 27),
(985, 'Santa Helena del Opón', 27),
(986, 'Simacota', 27),
(987, 'El Socorro', 27),
(988, 'Suaita', 27),
(989, 'Sucre', 27),
(990, 'Suratá', 27),
(991, 'Tona', 27),
(992, 'Valle de San José', 27),
(993, 'Vélez', 27),
(994, 'Vetas', 27),
(995, 'Villanueva', 27),
(996, 'Zapatoca', 27),
(997, 'Buenavista', 28),
(998, 'Caimito', 28),
(999, 'Chalán', 28),
(1000, 'Colosó', 28),
(1001, 'Corozal', 28),
(1002, 'Coveñas', 28),
(1003, 'El Roble', 28),
(1004, 'Galeras', 28),
(1005, 'Guaranda', 28),
(1006, 'La Unión', 28),
(1007, 'Los Palmitos', 28),
(1008, 'Majagual', 28),
(1009, 'Morroa', 28),
(1010, 'Ovejas', 28),
(1011, 'San Antonio de Palmito', 28),
(1012, 'Sampués', 28),
(1013, 'San Benito Abad', 28),
(1014, 'San Juan de Betulia', 28),
(1015, 'San Marcos', 28),
(1016, 'San Onofre', 28),
(1017, 'San Pedro', 28),
(1018, 'Santiago de Tolú', 28),
(1019, 'Sincé', 28),
(1020, 'Sincelejo', 28),
(1021, 'Sucre', 28),
(1022, 'Tolú Viejo', 28),
(1023, 'Alpujarra', 29),
(1024, 'Alvarado', 29),
(1025, 'Ambalema', 29),
(1026, 'Anzoátegui', 29),
(1027, 'Armero', 29),
(1028, 'Ataco', 29),
(1029, 'Cajamarca', 29),
(1030, 'Carmen de Apicalá', 29),
(1031, 'Casabianca', 29),
(1032, 'Chaparral', 29),
(1033, 'Coello', 29),
(1034, 'Coyaima', 29),
(1035, 'Cunday', 29),
(1036, 'Dolores', 29),
(1037, 'Espinal', 29),
(1038, 'Falan', 29),
(1039, 'Flandes', 29),
(1040, 'Fresno', 29),
(1041, 'Guamo', 29),
(1042, 'Herveo', 29),
(1043, 'Honda', 29),
(1044, 'Ibagué', 29),
(1045, 'Icononzo', 29),
(1046, 'Lérida', 29),
(1047, 'Líbano', 29),
(1048, 'Mariquita', 29),
(1049, 'Melgar', 29),
(1050, 'Murillo', 29),
(1051, 'Natagaima', 29),
(1052, 'Ortega', 29),
(1053, 'Palocabildo', 29),
(1054, 'Piedras', 29),
(1055, 'Planadas', 29),
(1056, 'Prado', 29),
(1057, 'Purificación', 29),
(1058, 'Rioblanco', 29),
(1059, 'Roncesvalles', 29),
(1060, 'Rovira', 29),
(1061, 'Saldaña', 29),
(1062, 'San Antonio', 29),
(1063, 'San Luis', 29),
(1064, 'Santa Isabel', 29),
(1065, 'Suárez', 29),
(1066, 'Valle de San Juan', 29),
(1067, 'Venadillo', 29),
(1068, 'Villahermosa', 29),
(1069, 'Villarrica', 29),
(1070, 'Alcalá', 30),
(1071, 'Andalucía', 30),
(1072, 'Ansermanuevo', 30),
(1073, 'Argelia', 30),
(1074, 'Bolívar', 30),
(1075, 'Buenaventura', 30),
(1076, 'Buga', 30),
(1077, 'Bugalagrande', 30),
(1078, 'Caicedonia', 30),
(1079, 'Cali', 30),
(1080, 'Candelaria', 30),
(1081, 'Cartago', 30),
(1082, 'Dagua', 30),
(1083, 'Darién', 30),
(1084, 'El Águila', 30),
(1085, 'El Cairo', 30),
(1086, 'El Cerrito', 30),
(1087, 'El Dovio', 30),
(1088, 'Florida', 30),
(1089, 'Ginebra', 30),
(1090, 'Guacarí', 30),
(1091, 'Jamundí', 30),
(1092, 'La Cumbre', 30),
(1093, 'La Unión', 30),
(1094, 'La Victoria', 30),
(1095, 'Obando', 30),
(1096, 'Palmira', 30),
(1097, 'Pradera', 30),
(1098, 'Restrepo', 30),
(1099, 'Riofrío', 30),
(1100, 'Roldanillo', 30),
(1101, 'San Pedro', 30),
(1102, 'Sevilla', 30),
(1103, 'Toro', 30),
(1104, 'Trujillo', 30),
(1105, 'Tuluá', 30),
(1106, 'Ulloa', 30),
(1107, 'Versalles', 30),
(1108, 'Vijes', 30),
(1109, 'Yotoco', 30),
(1110, 'Yumbo', 30),
(1111, 'Zarzal', 30),
(1112, 'Carurú', 31),
(1113, 'Mitú', 31),
(1114, 'Pacoa', 31),
(1115, 'Papunaua', 31),
(1116, 'Taraira', 31),
(1117, 'Yavaraté', 31),
(1118, 'Cumaribo', 32),
(1119, 'La Primavera', 32),
(1120, 'Puerto Carreño', 32),
(1121, 'Santa Rosalía', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `idProveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idBodega` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `precioCompra` bigint(20) NOT NULL,
  `precioVenta` bigint(20) NOT NULL,
  `stock` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` int(5) NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `nitTienda` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` int(5) NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` bigint(20) NOT NULL,
  `idBodega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `nit` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` int(5) NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `document` bigint(12) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(33) COLLATE utf8_spanish_ci NOT NULL,
  `nitTienda` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(10) NOT NULL,
  `municipality` int(5) NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`idBodega`),
  ADD UNIQUE KEY `cellphone` (`cellphone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nitProveedor` (`nitProveedor`),
  ADD KEY `municipality` (`municipality`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`document`);

--
-- Indices de la tabla `departaments`
--
ALTER TABLE `departaments`
  ADD PRIMARY KEY (`id_departaments`),
  ADD UNIQUE KEY `name_departament` (`name_departament`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `idFactura` (`idFactura`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nitTienda` (`nitTienda`),
  ADD KEY `idVendedor` (`idVendedor`),
  ADD KEY `documentCliente` (`documentCliente`);

--
-- Indices de la tabla `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`id_municipality`),
  ADD KEY `id_departaments` (`id_departaments`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idBodega` (`idBodega`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nit`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cellphone` (`cellphone`),
  ADD KEY `municipality` (`municipality`),
  ADD KEY `municipality_2` (`municipality`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cellphone` (`cellphone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nitTienda` (`nitTienda`),
  ADD KEY `municipality` (`municipality`),
  ADD KEY `idBodega` (`idBodega`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`nit`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cellphone` (`cellphone`),
  ADD KEY `municipality` (`municipality`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`document`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nitTienda` (`nitTienda`),
  ADD KEY `municipality` (`municipality`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departaments`
--
ALTER TABLE `departaments`
  MODIFY `id_departaments` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipality`
--
ALTER TABLE `municipality`
  MODIFY `id_municipality` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD CONSTRAINT `bodega_ibfk_1` FOREIGN KEY (`nitProveedor`) REFERENCES `proveedor` (`nit`),
  ADD CONSTRAINT `bodega_ibfk_2` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`id_municipality`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`id`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`nitTienda`) REFERENCES `tienda` (`nit`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idVendedor`) REFERENCES `user` (`document`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`documentCliente`) REFERENCES `clientes` (`document`);

--
-- Filtros para la tabla `municipality`
--
ALTER TABLE `municipality`
  ADD CONSTRAINT `municipality_ibfk_1` FOREIGN KEY (`id_departaments`) REFERENCES `departaments` (`id_departaments`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`nit`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idBodega`) REFERENCES `bodega` (`idBodega`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`id_municipality`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`idBodega`) REFERENCES `bodega` (`idBodega`),
  ADD CONSTRAINT `sucursal_ibfk_2` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`id_municipality`),
  ADD CONSTRAINT `sucursal_ibfk_3` FOREIGN KEY (`nitTienda`) REFERENCES `tienda` (`nit`);

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `tienda_ibfk_2` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`id_municipality`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nitTienda`) REFERENCES `tienda` (`nit`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`municipality`) REFERENCES `municipality` (`id_municipality`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
