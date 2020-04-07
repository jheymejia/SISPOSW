-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 06:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisposw89`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `Id_admin` int(11) NOT NULL,
  `Persona` int(11) DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`Id_admin`, `Persona`, `Usuario`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(6) NOT NULL,
  `Nombre_Cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Nombre_Cat`) VALUES
(4, 'Accesorios'),
(8, 'AIO'),
(10, 'Audio'),
(1, 'Discos'),
(7, 'Escritorios'),
(2, 'Memorias'),
(9, 'Monitores'),
(6, 'NoteBooks'),
(3, 'Perifericos'),
(5, 'Routers');

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `IdCiudad` int(6) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`IdCiudad`, `Nombre`, `Departamento`) VALUES
(0, 'Otra', 'OTRO'),
(1000, 'OTRA', ' Otro'),
(5001, 'MEDELLÍN', 'Antioquia'),
(5002, 'ABEJORRAL', 'Antioquia'),
(5004, 'ABRIAQUÍ', 'Antioquia'),
(5021, 'ALEJANDRÍA', 'Antioquia'),
(5030, 'AMAGÁ', 'Antioquia'),
(5031, 'AMALFI', 'Antioquia'),
(5034, 'ANDES', 'Antioquia'),
(5036, 'ANGELÓPOLIS', 'Antioquia'),
(5038, 'ANGOSTURA', 'Antioquia'),
(5040, 'ANORÍ', 'Antioquia'),
(5042, 'SANTAFÉ DE ANTIOQUIA', 'Antioquia'),
(5044, 'ANZA', 'Antioquia'),
(5045, 'APARTADÓ', 'Antioquia'),
(5051, 'ARBOLETES', 'Antioquia'),
(5055, 'ARGELIA', 'Antioquia'),
(5059, 'ARMENIA', 'Antioquia'),
(5079, 'BARBOSA', 'Antioquia'),
(5086, 'BELMIRA', 'Antioquia'),
(5088, 'BELLO', 'Antioquia'),
(5091, 'BETANIA', 'Antioquia'),
(5093, 'BETULIA', 'Antioquia'),
(5101, 'CIUDAD BOLÍVAR', 'Antioquia'),
(5107, 'BRICEÑO', 'Antioquia'),
(5113, 'BURITICÁ', 'Antioquia'),
(5120, 'CÁCERES', 'Antioquia'),
(5125, 'CAICEDO', 'Antioquia'),
(5129, 'CALDAS', 'Antioquia'),
(5134, 'CAMPAMENTO', 'Antioquia'),
(5138, 'CAÑASGORDAS', 'Antioquia'),
(5142, 'CARACOLÍ', 'Antioquia'),
(5145, 'CARAMANTA', 'Antioquia'),
(5147, 'CAREPA', 'Antioquia'),
(5148, 'EL CARMEN DE VIBORAL', 'Antioquia'),
(5150, 'CAROLINA', 'Antioquia'),
(5154, 'CAUCASIA', 'Antioquia'),
(5172, 'CHIGORODÓ', 'Antioquia'),
(5190, 'CISNEROS', 'Antioquia'),
(5197, 'COCORNÁ', 'Antioquia'),
(5206, 'CONCEPCIÓN', 'Antioquia'),
(5209, 'CONCORDIA', 'Antioquia'),
(5212, 'COPACABANA', 'Antioquia'),
(5234, 'DABEIBA', 'Antioquia'),
(5237, 'DONMATÍAS', 'Antioquia'),
(5240, 'EBÉJICO', 'Antioquia'),
(5250, 'EL BAGRE', 'Antioquia'),
(5264, 'ENTRERRIOS', 'Antioquia'),
(5266, 'ENVIGADO', 'Antioquia'),
(5282, 'FREDONIA', 'Antioquia'),
(5284, 'FRONTINO', 'Antioquia'),
(5306, 'GIRALDO', 'Antioquia'),
(5308, 'GIRARDOTA', 'Antioquia'),
(5310, 'GÓMEZ PLATA', 'Antioquia'),
(5313, 'GRANADA', 'Antioquia'),
(5315, 'GUADALUPE', 'Antioquia'),
(5318, 'GUARNE', 'Antioquia'),
(5321, 'GUATAPE', 'Antioquia'),
(5347, 'HELICONIA', 'Antioquia'),
(5353, 'HISPANIA', 'Antioquia'),
(5360, 'ITAGUI', 'Antioquia'),
(5361, 'ITUANGO', 'Antioquia'),
(5364, 'JARDÍN', 'Antioquia'),
(5368, 'JERICÓ', 'Antioquia'),
(5376, 'LA CEJA', 'Antioquia'),
(5380, 'LA ESTRELLA', 'Antioquia'),
(5390, 'LA PINTADA', 'Antioquia'),
(5400, 'LA UNIÓN', 'Antioquia'),
(5411, 'LIBORINA', 'Antioquia'),
(5425, 'MACEO', 'Antioquia'),
(5440, 'MARINILLA', 'Antioquia'),
(5467, 'MONTEBELLO', 'Antioquia'),
(5475, 'MURINDÓ', 'Antioquia'),
(5480, 'MUTATÁ', 'Antioquia'),
(5483, 'NARIÑO', 'Antioquia'),
(5490, 'NECOCLÍ', 'Antioquia'),
(5495, 'NECHÍ', 'Antioquia'),
(5501, 'OLAYA', 'Antioquia'),
(5541, 'PEÑOL', 'Antioquia'),
(5543, 'PEQUE', 'Antioquia'),
(5576, 'PUEBLORRICO', 'Antioquia'),
(5579, 'PUERTO BERRÍO', 'Antioquia'),
(5585, 'PUERTO NARE', 'Antioquia'),
(5591, 'PUERTO TRIUNFO', 'Antioquia'),
(5604, 'REMEDIOS', 'Antioquia'),
(5607, 'RETIRO', 'Antioquia'),
(5615, 'RIONEGRO', 'Antioquia'),
(5628, 'SABANALARGA', 'Antioquia'),
(5631, 'SABANETA', 'Antioquia'),
(5642, 'SALGAR', 'Antioquia'),
(5647, 'SAN ANDRÉS DE CUERQUÍA', 'Antioquia'),
(5649, 'SAN CARLOS', 'Antioquia'),
(5652, 'SAN FRANCISCO', 'Antioquia'),
(5656, 'SAN JERÓNIMO', 'Antioquia'),
(5658, 'SAN JOSÉ DE LA MONTAÑA', 'Antioquia'),
(5659, 'SAN JUAN DE URABÁ', 'Antioquia'),
(5660, 'SAN LUIS', 'Antioquia'),
(5664, 'SAN PEDRO DE LOS MILAGROS', 'Antioquia'),
(5665, 'SAN PEDRO DE URABA', 'Antioquia'),
(5667, 'SAN RAFAEL', 'Antioquia'),
(5670, 'SAN ROQUE', 'Antioquia'),
(5674, 'SAN VICENTE', 'Antioquia'),
(5679, 'SANTA BÁRBARA', 'Antioquia'),
(5686, 'SANTA ROSA DE OSOS', 'Antioquia'),
(5690, 'SANTO DOMINGO', 'Antioquia'),
(5697, 'EL SANTUARIO', 'Antioquia'),
(5736, 'SEGOVIA', 'Antioquia'),
(5756, 'SONSON', 'Antioquia'),
(5761, 'SOPETRÁN', 'Antioquia'),
(5789, 'TÁMESIS', 'Antioquia'),
(5790, 'TARAZÁ', 'Antioquia'),
(5792, 'TARSO', 'Antioquia'),
(5809, 'TITIRIBÍ', 'Antioquia'),
(5819, 'TOLEDO', 'Antioquia'),
(5837, 'TURBO', 'Antioquia'),
(5842, 'URAMITA', 'Antioquia'),
(5847, 'URRAO', 'Antioquia'),
(5854, 'VALDIVIA', 'Antioquia'),
(5856, 'VALPARAÍSO', 'Antioquia'),
(5858, 'VEGACHÍ', 'Antioquia'),
(5861, 'VENECIA', 'Antioquia'),
(5873, 'VIGÍA DEL FUERTE', 'Antioquia'),
(5885, 'YALÍ', 'Antioquia'),
(5887, 'YARUMAL', 'Antioquia'),
(5890, 'YOLOMBÓ', 'Antioquia'),
(5893, 'YONDÓ', 'Antioquia'),
(5895, 'ZARAGOZA', 'Antioquia'),
(8001, 'BARRANQUILLA', 'Atlantico'),
(8078, 'BARANOA', 'Atlantico'),
(8137, 'CAMPO DE LA CRUZ', 'Atlantico'),
(8141, 'CANDELARIA', 'Atlantico'),
(8296, 'GALAPA', 'Atlantico'),
(8372, 'JUAN DE ACOSTA', 'Atlantico'),
(8421, 'LURUACO', 'Atlantico'),
(8433, 'MALAMBO', 'Atlantico'),
(8436, 'MANATÍ', 'Atlantico'),
(8520, 'PALMAR DE VARELA', 'Atlantico'),
(8549, 'PIOJÓ', 'Atlantico'),
(8558, 'POLONUEVO', 'Atlantico'),
(8560, 'PONEDERA', 'Atlantico'),
(8573, 'PUERTO COLOMBIA', 'Atlantico'),
(8606, 'REPELÓN', 'Atlantico'),
(8634, 'SABANAGRANDE', 'Atlantico'),
(8638, 'SABANALARGA', 'Atlantico'),
(8675, 'SANTA LUCÍA', 'Atlantico'),
(8685, 'SANTO TOMÁS', 'Atlantico'),
(8758, 'SOLEDAD', 'Atlantico'),
(8770, 'SUAN', 'Atlantico'),
(8832, 'TUBARÁ', 'Atlantico'),
(8849, 'USIACURÍ', 'Atlantico'),
(11001, 'BOGOTÁ, D.C.', 'Bogotá'),
(13001, 'CARTAGENA', 'Bolivar'),
(13006, 'ACHÍ', 'Bolivar'),
(13030, 'ALTOS DEL ROSARIO', 'Bolivar'),
(13042, 'ARENAL', 'Bolivar'),
(13052, 'ARJONA', 'Bolivar'),
(13062, 'ARROYOHONDO', 'Bolivar'),
(13074, 'BARRANCO DE LOBA', 'Bolivar'),
(13140, 'CALAMAR', 'Bolivar'),
(13160, 'CANTAGALLO', 'Bolivar'),
(13188, 'CICUCO', 'Bolivar'),
(13212, 'CÓRDOBA', 'Bolivar'),
(13222, 'CLEMENCIA', 'Bolivar'),
(13244, 'EL CARMEN DE BOLÍVAR', 'Bolivar'),
(13248, 'EL GUAMO', 'Bolivar'),
(13268, 'EL PEÑÓN', 'Bolivar'),
(13300, 'HATILLO DE LOBA', 'Bolivar'),
(13430, 'MAGANGUÉ', 'Bolivar'),
(13433, 'MAHATES', 'Bolivar'),
(13440, 'MARGARITA', 'Bolivar'),
(13442, 'MARÍA LA BAJA', 'Bolivar'),
(13458, 'MONTECRISTO', 'Bolivar'),
(13468, 'MOMPÓS', 'Bolivar'),
(13473, 'MORALES', 'Bolivar'),
(13490, 'NOROSÍ', 'Bolivar'),
(13549, 'PINILLOS', 'Bolivar'),
(13580, 'REGIDOR', 'Bolivar'),
(13600, 'RÍO VIEJO', 'Bolivar'),
(13620, 'SAN CRISTÓBAL', 'Bolivar'),
(13647, 'SAN ESTANISLAO', 'Bolivar'),
(13650, 'SAN FERNANDO', 'Bolivar'),
(13654, 'SAN JACINTO', 'Bolivar'),
(13655, 'SAN JACINTO DEL CAUCA', 'Bolivar'),
(13657, 'SAN JUAN NEPOMUCENO', 'Bolivar'),
(13667, 'SAN MARTÍN DE LOBA', 'Bolivar'),
(13670, 'SAN PABLO', 'Bolivar'),
(13673, 'SANTA CATALINA', 'Bolivar'),
(13683, 'SANTA ROSA', 'Bolivar'),
(13688, 'SANTA ROSA DEL SUR', 'Bolivar'),
(13744, 'SIMITÍ', 'Bolivar'),
(13760, 'SOPLAVIENTO', 'Bolivar'),
(13780, 'TALAIGUA NUEVO', 'Bolivar'),
(13810, 'TIQUISIO', 'Bolivar'),
(13836, 'TURBACO', 'Bolivar'),
(13838, 'TURBANÁ', 'Bolivar'),
(13873, 'VILLANUEVA', 'Bolivar'),
(13894, 'ZAMBRANO', 'Bolivar'),
(15001, 'TUNJA', 'Boyaca'),
(15022, 'ALMEIDA', 'Boyaca'),
(15047, 'AQUITANIA', 'Boyaca'),
(15051, 'ARCABUCO', 'Boyaca'),
(15087, 'BELÉN', 'Boyaca'),
(15090, 'BERBEO', 'Boyaca'),
(15092, 'BETÉITIVA', 'Boyaca'),
(15097, 'BOAVITA', 'Boyaca'),
(15104, 'BOYACÁ', 'Boyaca'),
(15106, 'BRICEÑO', 'Boyaca'),
(15109, 'BUENAVISTA', 'Boyaca'),
(15114, 'BUSBANZÁ', 'Boyaca'),
(15131, 'CALDAS', 'Boyaca'),
(15135, 'CAMPOHERMOSO', 'Boyaca'),
(15162, 'CERINZA', 'Boyaca'),
(15172, 'CHINAVITA', 'Boyaca'),
(15176, 'CHIQUINQUIRÁ', 'Boyaca'),
(15180, 'CHISCAS', 'Boyaca'),
(15183, 'CHITA', 'Boyaca'),
(15185, 'CHITARAQUE', 'Boyaca'),
(15187, 'CHIVATÁ', 'Boyaca'),
(15189, 'CIÉNEGA', 'Boyaca'),
(15204, 'CÓMBITA', 'Boyaca'),
(15212, 'COPER', 'Boyaca'),
(15215, 'CORRALES', 'Boyaca'),
(15218, 'COVARACHÍA', 'Boyaca'),
(15223, 'CUBARÁ', 'Boyaca'),
(15224, 'CUCAITA', 'Boyaca'),
(15226, 'CUÍTIVA', 'Boyaca'),
(15232, 'CHÍQUIZA', 'Boyaca'),
(15236, 'CHIVOR', 'Boyaca'),
(15238, 'DUITAMA', 'Boyaca'),
(15244, 'EL COCUY', 'Boyaca'),
(15248, 'EL ESPINO', 'Boyaca'),
(15272, 'FIRAVITOBA', 'Boyaca'),
(15276, 'FLORESTA', 'Boyaca'),
(15293, 'GACHANTIVÁ', 'Boyaca'),
(15296, 'GAMEZA', 'Boyaca'),
(15299, 'GARAGOA', 'Boyaca'),
(15317, 'GUACAMAYAS', 'Boyaca'),
(15322, 'GUATEQUE', 'Boyaca'),
(15325, 'GUAYATÁ', 'Boyaca'),
(15332, 'GÜICÁN', 'Boyaca'),
(15362, 'IZA', 'Boyaca'),
(15367, 'JENESANO', 'Boyaca'),
(15368, 'JERICÓ', 'Boyaca'),
(15377, 'LABRANZAGRANDE', 'Boyaca'),
(15380, 'LA CAPILLA', 'Boyaca'),
(15401, 'LA VICTORIA', 'Boyaca'),
(15403, 'LA UVITA', 'Boyaca'),
(15407, 'VILLA DE LEYVA', 'Boyaca'),
(15425, 'MACANAL', 'Boyaca'),
(15442, 'MARIPÍ', 'Boyaca'),
(15455, 'MIRAFLORES', 'Boyaca'),
(15464, 'MONGUA', 'Boyaca'),
(15466, 'MONGUÍ', 'Boyaca'),
(15469, 'MONIQUIRÁ', 'Boyaca'),
(15476, 'MOTAVITA', 'Boyaca'),
(15480, 'MUZO', 'Boyaca'),
(15491, 'NOBSA', 'Boyaca'),
(15494, 'NUEVO COLÓN', 'Boyaca'),
(15500, 'OICATÁ', 'Boyaca'),
(15507, 'OTANCHE', 'Boyaca'),
(15511, 'PACHAVITA', 'Boyaca'),
(15514, 'PÁEZ', 'Boyaca'),
(15516, 'PAIPA', 'Boyaca'),
(15518, 'PAJARITO', 'Boyaca'),
(15522, 'PANQUEBA', 'Boyaca'),
(15531, 'PAUNA', 'Boyaca'),
(15533, 'PAYA', 'Boyaca'),
(15537, 'PAZ DE RÍO', 'Boyaca'),
(15542, 'PESCA', 'Boyaca'),
(15550, 'PISBA', 'Boyaca'),
(15572, 'PUERTO BOYACÁ', 'Boyaca'),
(15580, 'QUÍPAMA', 'Boyaca'),
(15599, 'RAMIRIQUÍ', 'Boyaca'),
(15600, 'RÁQUIRA', 'Boyaca'),
(15621, 'RONDÓN', 'Boyaca'),
(15632, 'SABOYÁ', 'Boyaca'),
(15638, 'SÁCHICA', 'Boyaca'),
(15646, 'SAMACÁ', 'Boyaca'),
(15660, 'SAN EDUARDO', 'Boyaca'),
(15664, 'SAN JOSÉ DE PARE', 'Boyaca'),
(15667, 'SAN LUIS DE GACENO', 'Boyaca'),
(15673, 'SAN MATEO', 'Boyaca'),
(15676, 'SAN MIGUEL DE SEMA', 'Boyaca'),
(15681, 'SAN PABLO DE BORBUR', 'Boyaca'),
(15686, 'SANTANA', 'Boyaca'),
(15690, 'SANTA MARÍA', 'Boyaca'),
(15693, 'SANTA ROSA DE VITERBO', 'Boyaca'),
(15696, 'SANTA SOFÍA', 'Boyaca'),
(15720, 'SATIVANORTE', 'Boyaca'),
(15723, 'SATIVASUR', 'Boyaca'),
(15740, 'SIACHOQUE', 'Boyaca'),
(15753, 'SOATÁ', 'Boyaca'),
(15755, 'SOCOTÁ', 'Boyaca'),
(15757, 'SOCHA', 'Boyaca'),
(15759, 'SOGAMOSO', 'Boyaca'),
(15761, 'SOMONDOCO', 'Boyaca'),
(15762, 'SORA', 'Boyaca'),
(15763, 'SOTAQUIRÁ', 'Boyaca'),
(15764, 'SORACÁ', 'Boyaca'),
(15774, 'SUSACÓN', 'Boyaca'),
(15776, 'SUTAMARCHÁN', 'Boyaca'),
(15778, 'SUTATENZA', 'Boyaca'),
(15790, 'TASCO', 'Boyaca'),
(15798, 'TENZA', 'Boyaca'),
(15804, 'TIBANÁ', 'Boyaca'),
(15806, 'TIBASOSA', 'Boyaca'),
(15808, 'TINJACÁ', 'Boyaca'),
(15810, 'TIPACOQUE', 'Boyaca'),
(15814, 'TOCA', 'Boyaca'),
(15816, 'TOGÜÍ', 'Boyaca'),
(15820, 'TÓPAGA', 'Boyaca'),
(15822, 'TOTA', 'Boyaca'),
(15832, 'TUNUNGUÁ', 'Boyaca'),
(15835, 'TURMEQUÉ', 'Boyaca'),
(15837, 'TUTA', 'Boyaca'),
(15839, 'TUTAZÁ', 'Boyaca'),
(15842, 'UMBITA', 'Boyaca'),
(15861, 'VENTAQUEMADA', 'Boyaca'),
(15879, 'VIRACACHÁ', 'Boyaca'),
(15897, 'ZETAQUIRA', 'Boyaca'),
(17001, 'MANIZALES', 'Caldas'),
(17013, 'AGUADAS', 'Caldas'),
(17042, 'ANSERMA', 'Caldas'),
(17050, 'ARANZAZU', 'Caldas'),
(17088, 'BELALCÁZAR', 'Caldas'),
(17174, 'CHINCHINÁ', 'Caldas'),
(17272, 'FILADELFIA', 'Caldas'),
(17380, 'LA DORADA', 'Caldas'),
(17388, 'LA MERCED', 'Caldas'),
(17433, 'MANZANARES', 'Caldas'),
(17442, 'MARMATO', 'Caldas'),
(17444, 'MARQUETALIA', 'Caldas'),
(17446, 'MARULANDA', 'Caldas'),
(17486, 'NEIRA', 'Caldas'),
(17495, 'NORCASIA', 'Caldas'),
(17513, 'PÁCORA', 'Caldas'),
(17524, 'PALESTINA', 'Caldas'),
(17541, 'PENSILVANIA', 'Caldas'),
(17614, 'RIOSUCIO', 'Caldas'),
(17616, 'RISARALDA', 'Caldas'),
(17653, 'SALAMINA', 'Caldas'),
(17662, 'SAMANÁ', 'Caldas'),
(17665, 'SAN JOSÉ', 'Caldas'),
(17777, 'SUPÍA', 'Caldas'),
(17867, 'VICTORIA', 'Caldas'),
(17873, 'VILLAMARÍA', 'Caldas'),
(17877, 'VITERBO', 'Caldas'),
(18001, 'FLORENCIA', 'Caqueta'),
(18029, 'ALBANIA', 'Caqueta'),
(18094, 'BELÉN DE LOS ANDAQUÍES', 'Caqueta'),
(18150, 'CARTAGENA DEL CHAIRÁ', 'Caqueta'),
(18205, 'CURILLO', 'Caqueta'),
(18247, 'EL DONCELLO', 'Caqueta'),
(18256, 'EL PAUJIL', 'Caqueta'),
(18410, 'LA MONTAÑITA', 'Caqueta'),
(18460, 'MILÁN', 'Caqueta'),
(18479, 'MORELIA', 'Caqueta'),
(18592, 'PUERTO RICO', 'Caqueta'),
(18610, 'SAN JOSÉ DEL FRAGUA', 'Caqueta'),
(18753, 'SAN VICENTE DEL CAGUÁN', 'Caqueta'),
(18756, 'SOLANO', 'Caqueta'),
(18785, 'SOLITA', 'Caqueta'),
(18860, 'VALPARAÍSO', 'Caqueta'),
(19001, 'POPAYÁN', 'Cauca'),
(19022, 'ALMAGUER', 'Cauca'),
(19050, 'ARGELIA', 'Cauca'),
(19075, 'BALBOA', 'Cauca'),
(19100, 'BOLÍVAR', 'Cauca'),
(19110, 'BUENOS AIRES', 'Cauca'),
(19130, 'CAJIBÍO', 'Cauca'),
(19137, 'CALDONO', 'Cauca'),
(19142, 'CALOTO', 'Cauca'),
(19212, 'CORINTO', 'Cauca'),
(19256, 'EL TAMBO', 'Cauca'),
(19290, 'FLORENCIA', 'Cauca'),
(19300, 'GUACHENÉ', 'Cauca'),
(19318, 'GUAPI', 'Cauca'),
(19355, 'INZÁ', 'Cauca'),
(19364, 'JAMBALÓ', 'Cauca'),
(19392, 'LA SIERRA', 'Cauca'),
(19397, 'LA VEGA', 'Cauca'),
(19418, 'LÓPEZ', 'Cauca'),
(19450, 'MERCADERES', 'Cauca'),
(19455, 'MIRANDA', 'Cauca'),
(19473, 'MORALES', 'Cauca'),
(19513, 'PADILLA', 'Cauca'),
(19517, 'PAEZ', 'Cauca'),
(19532, 'PATÍA', 'Cauca'),
(19533, 'PIAMONTE', 'Cauca'),
(19548, 'PIENDAMÓ', 'Cauca'),
(19573, 'PUERTO TEJADA', 'Cauca'),
(19585, 'PURACÉ', 'Cauca'),
(19622, 'ROSAS', 'Cauca'),
(19693, 'SAN SEBASTIÁN', 'Cauca'),
(19698, 'SANTANDER DE QUILICHAO', 'Cauca'),
(19701, 'SANTA ROSA', 'Cauca'),
(19743, 'SILVIA', 'Cauca'),
(19760, 'SOTARA', 'Cauca'),
(19780, 'SUÁREZ', 'Cauca'),
(19785, 'SUCRE', 'Cauca'),
(19807, 'TIMBÍO', 'Cauca'),
(19809, 'TIMBIQUÍ', 'Cauca'),
(19821, 'TORIBIO', 'Cauca'),
(19824, 'TOTORÓ', 'Cauca'),
(19845, 'VILLA RICA', 'Cauca'),
(20001, 'VALLEDUPAR', 'Cesar'),
(20011, 'AGUACHICA', 'Cesar'),
(20013, 'AGUSTÍN CODAZZI', 'Cesar'),
(20032, 'ASTREA', 'Cesar'),
(20045, 'BECERRIL', 'Cesar'),
(20060, 'BOSCONIA', 'Cesar'),
(20175, 'CHIMICHAGUA', 'Cesar'),
(20178, 'CHIRIGUANÁ', 'Cesar'),
(20228, 'CURUMANÍ', 'Cesar'),
(20238, 'EL COPEY', 'Cesar'),
(20250, 'EL PASO', 'Cesar'),
(20295, 'GAMARRA', 'Cesar'),
(20310, 'GONZÁLEZ', 'Cesar'),
(20383, 'LA GLORIA', 'Cesar'),
(20400, 'LA JAGUA DE IBIRICO', 'Cesar'),
(20443, 'MANAURE', 'Cesar'),
(20517, 'PAILITAS', 'Cesar'),
(20550, 'PELAYA', 'Cesar'),
(20570, 'PUEBLO BELLO', 'Cesar'),
(20614, 'RÍO DE ORO', 'Cesar'),
(20621, 'LA PAZ', 'Cesar'),
(20710, 'SAN ALBERTO', 'Cesar'),
(20750, 'SAN DIEGO', 'Cesar'),
(20770, 'SAN MARTÍN', 'Cesar'),
(20787, 'TAMALAMEQUE', 'Cesar'),
(23001, 'MONTERÍA', 'Cordoba'),
(23068, 'AYAPEL', 'Cordoba'),
(23079, 'BUENAVISTA', 'Cordoba'),
(23090, 'CANALETE', 'Cordoba'),
(23162, 'CERETÉ', 'Cordoba'),
(23168, 'CHIMÁ', 'Cordoba'),
(23182, 'CHINÚ', 'Cordoba'),
(23189, 'CIÉNAGA DE ORO', 'Cordoba'),
(23300, 'COTORRA', 'Cordoba'),
(23350, 'LA APARTADA', 'Cordoba'),
(23417, 'LORICA', 'Cordoba'),
(23419, 'LOS CÓRDOBAS', 'Cordoba'),
(23464, 'MOMIL', 'Cordoba'),
(23466, 'MONTELÍBANO', 'Cordoba'),
(23500, 'MOÑITOS', 'Cordoba'),
(23555, 'PLANETA RICA', 'Cordoba'),
(23570, 'PUEBLO NUEVO', 'Cordoba'),
(23574, 'PUERTO ESCONDIDO', 'Cordoba'),
(23580, 'PUERTO LIBERTADOR', 'Cordoba'),
(23586, 'PURÍSIMA', 'Cordoba'),
(23660, 'SAHAGÚN', 'Cordoba'),
(23670, 'SAN ANDRÉS SOTAVENTO', 'Cordoba'),
(23672, 'SAN ANTERO', 'Cordoba'),
(23675, 'SAN BERNARDO DEL VIENTO', 'Cordoba'),
(23678, 'SAN CARLOS', 'Cordoba'),
(23682, 'SAN JOSÉ DE URÉ', 'Cordoba'),
(23686, 'SAN PELAYO', 'Cordoba'),
(23807, 'TIERRALTA', 'Cordoba'),
(23815, 'TUCHÍN', 'Cordoba'),
(23855, 'VALENCIA', 'Cordoba'),
(25001, 'AGUA DE DIOS', 'Cundinamarca'),
(25019, 'ALBÁN', 'Cundinamarca'),
(25035, 'ANAPOIMA', 'Cundinamarca'),
(25040, 'ANOLAIMA', 'Cundinamarca'),
(25053, 'ARBELÁEZ', 'Cundinamarca'),
(25086, 'BELTRÁN', 'Cundinamarca'),
(25095, 'BITUIMA', 'Cundinamarca'),
(25099, 'BOJACÁ', 'Cundinamarca'),
(25120, 'CABRERA', 'Cundinamarca'),
(25123, 'CACHIPAY', 'Cundinamarca'),
(25126, 'CAJICÁ', 'Cundinamarca'),
(25148, 'CAPARRAPÍ', 'Cundinamarca'),
(25151, 'CAQUEZA', 'Cundinamarca'),
(25154, 'CARMEN DE CARUPA', 'Cundinamarca'),
(25168, 'CHAGUANÍ', 'Cundinamarca'),
(25175, 'CHÍA', 'Cundinamarca'),
(25178, 'CHIPAQUE', 'Cundinamarca'),
(25181, 'CHOACHÍ', 'Cundinamarca'),
(25183, 'CHOCONTÁ', 'Cundinamarca'),
(25200, 'COGUA', 'Cundinamarca'),
(25214, 'COTA', 'Cundinamarca'),
(25224, 'CUCUNUBÁ', 'Cundinamarca'),
(25245, 'EL COLEGIO', 'Cundinamarca'),
(25258, 'EL PEÑÓN', 'Cundinamarca'),
(25260, 'EL ROSAL', 'Cundinamarca'),
(25269, 'FACATATIVÁ', 'Cundinamarca'),
(25279, 'FOMEQUE', 'Cundinamarca'),
(25281, 'FOSCA', 'Cundinamarca'),
(25286, 'FUNZA', 'Cundinamarca'),
(25288, 'FÚQUENE', 'Cundinamarca'),
(25290, 'FUSAGASUGÁ', 'Cundinamarca'),
(25293, 'GACHALA', 'Cundinamarca'),
(25295, 'GACHANCIPÁ', 'Cundinamarca'),
(25297, 'GACHETÁ', 'Cundinamarca'),
(25299, 'GAMA', 'Cundinamarca'),
(25307, 'GIRARDOT', 'Cundinamarca'),
(25312, 'GRANADA', 'Cundinamarca'),
(25317, 'GUACHETÁ', 'Cundinamarca'),
(25320, 'GUADUAS', 'Cundinamarca'),
(25322, 'GUASCA', 'Cundinamarca'),
(25324, 'GUATAQUÍ', 'Cundinamarca'),
(25326, 'GUATAVITA', 'Cundinamarca'),
(25328, 'GUAYABAL DE SIQUIMA', 'Cundinamarca'),
(25335, 'GUAYABETAL', 'Cundinamarca'),
(25339, 'GUTIÉRREZ', 'Cundinamarca'),
(25368, 'JERUSALÉN', 'Cundinamarca'),
(25372, 'JUNÍN', 'Cundinamarca'),
(25377, 'LA CALERA', 'Cundinamarca'),
(25386, 'LA MESA', 'Cundinamarca'),
(25394, 'LA PALMA', 'Cundinamarca'),
(25398, 'LA PEÑA', 'Cundinamarca'),
(25402, 'LA VEGA', 'Cundinamarca'),
(25407, 'LENGUAZAQUE', 'Cundinamarca'),
(25426, 'MACHETA', 'Cundinamarca'),
(25430, 'MADRID', 'Cundinamarca'),
(25436, 'MANTA', 'Cundinamarca'),
(25438, 'MEDINA', 'Cundinamarca'),
(25473, 'MOSQUERA', 'Cundinamarca'),
(25483, 'NARIÑO', 'Cundinamarca'),
(25486, 'NEMOCÓN', 'Cundinamarca'),
(25488, 'NILO', 'Cundinamarca'),
(25489, 'NIMAIMA', 'Cundinamarca'),
(25491, 'NOCAIMA', 'Cundinamarca'),
(25506, 'VENECIA', 'Cundinamarca'),
(25513, 'PACHO', 'Cundinamarca'),
(25518, 'PAIME', 'Cundinamarca'),
(25524, 'PANDI', 'Cundinamarca'),
(25530, 'PARATEBUENO', 'Cundinamarca'),
(25535, 'PASCA', 'Cundinamarca'),
(25572, 'PUERTO SALGAR', 'Cundinamarca'),
(25580, 'PULÍ', 'Cundinamarca'),
(25592, 'QUEBRADANEGRA', 'Cundinamarca'),
(25594, 'QUETAME', 'Cundinamarca'),
(25596, 'QUIPILE', 'Cundinamarca'),
(25599, 'APULO', 'Cundinamarca'),
(25612, 'RICAURTE', 'Cundinamarca'),
(25645, 'SAN ANTONIO DEL TEQUENDAMA', 'Cundinamarca'),
(25649, 'SAN BERNARDO', 'Cundinamarca'),
(25653, 'SAN CAYETANO', 'Cundinamarca'),
(25658, 'SAN FRANCISCO', 'Cundinamarca'),
(25662, 'SAN JUAN DE RÍO SECO', 'Cundinamarca'),
(25718, 'SASAIMA', 'Cundinamarca'),
(25736, 'SESQUILÉ', 'Cundinamarca'),
(25740, 'SIBATÉ', 'Cundinamarca'),
(25743, 'SILVANIA', 'Cundinamarca'),
(25745, 'SIMIJACA', 'Cundinamarca'),
(25754, 'SOACHA', 'Cundinamarca'),
(25758, 'SOPÓ', 'Cundinamarca'),
(25769, 'SUBACHOQUE', 'Cundinamarca'),
(25772, 'SUESCA', 'Cundinamarca'),
(25777, 'SUPATÁ', 'Cundinamarca'),
(25779, 'SUSA', 'Cundinamarca'),
(25781, 'SUTATAUSA', 'Cundinamarca'),
(25785, 'TABIO', 'Cundinamarca'),
(25793, 'TAUSA', 'Cundinamarca'),
(25797, 'TENA', 'Cundinamarca'),
(25799, 'TENJO', 'Cundinamarca'),
(25805, 'TIBACUY', 'Cundinamarca'),
(25807, 'TIBIRITA', 'Cundinamarca'),
(25815, 'TOCAIMA', 'Cundinamarca'),
(25817, 'TOCANCIPÁ', 'Cundinamarca'),
(25823, 'TOPAIPÍ', 'Cundinamarca'),
(25839, 'UBALÁ', 'Cundinamarca'),
(25841, 'UBAQUE', 'Cundinamarca'),
(25843, 'VILLA DE SAN DIEGO DE UBATE', 'Cundinamarca'),
(25845, 'UNE', 'Cundinamarca'),
(25851, 'ÚTICA', 'Cundinamarca'),
(25862, 'VERGARA', 'Cundinamarca'),
(25867, 'VIANÍ', 'Cundinamarca'),
(25871, 'VILLAGÓMEZ', 'Cundinamarca'),
(25873, 'VILLAPINZÓN', 'Cundinamarca'),
(25875, 'VILLETA', 'Cundinamarca'),
(25878, 'VIOTÁ', 'Cundinamarca'),
(25885, 'YACOPÍ', 'Cundinamarca'),
(25898, 'ZIPACÓN', 'Cundinamarca'),
(25899, 'ZIPAQUIRÁ', 'Cundinamarca'),
(27001, 'QUIBDÓ', 'Choco'),
(27006, 'ACANDÍ', 'Choco'),
(27025, 'ALTO BAUDÓ', 'Choco'),
(27050, 'ATRATO', 'Choco'),
(27073, 'BAGADÓ', 'Choco'),
(27075, 'BAHÍA SOLANO', 'Choco'),
(27077, 'BAJO BAUDÓ', 'Choco'),
(27099, 'BOJAYA', 'Choco'),
(27135, 'EL CANTÓN DEL SAN PABLO', 'Choco'),
(27150, 'CARMEN DEL DARIÉN', 'Choco'),
(27160, 'CÉRTEGUI', 'Choco'),
(27205, 'CONDOTO', 'Choco'),
(27245, 'EL CARMEN DE ATRATO', 'Choco'),
(27250, 'EL LITORAL DEL SAN JUAN', 'Choco'),
(27361, 'ISTMINA', 'Choco'),
(27372, 'JURADÓ', 'Choco'),
(27413, 'LLORÓ', 'Choco'),
(27425, 'MEDIO ATRATO', 'Choco'),
(27430, 'MEDIO BAUDÓ', 'Choco'),
(27450, 'MEDIO SAN JUAN', 'Choco'),
(27491, 'NÓVITA', 'Choco'),
(27495, 'NUQUÍ', 'Choco'),
(27580, 'RÍO IRÓ', 'Choco'),
(27600, 'RÍO QUITO', 'Choco'),
(27615, 'RIOSUCIO', 'Choco'),
(27660, 'SAN JOSÉ DEL PALMAR', 'Choco'),
(27745, 'SIPÍ', 'Choco'),
(27787, 'TADÓ', 'Choco'),
(27800, 'UNGUÍA', 'Choco'),
(27810, 'UNIÓN PANAMERICANA', 'Choco'),
(41001, 'NEIVA', 'Huila'),
(41006, 'ACEVEDO', 'Huila'),
(41013, 'AGRADO', 'Huila'),
(41016, 'AIPE', 'Huila'),
(41020, 'ALGECIRAS', 'Huila'),
(41026, 'ALTAMIRA', 'Huila'),
(41078, 'BARAYA', 'Huila'),
(41132, 'CAMPOALEGRE', 'Huila'),
(41206, 'COLOMBIA', 'Huila'),
(41244, 'ELÍAS', 'Huila'),
(41298, 'GARZÓN', 'Huila'),
(41306, 'GIGANTE', 'Huila'),
(41319, 'GUADALUPE', 'Huila'),
(41349, 'HOBO', 'Huila'),
(41357, 'IQUIRA', 'Huila'),
(41359, 'ISNOS', 'Huila'),
(41378, 'LA ARGENTINA', 'Huila'),
(41396, 'LA PLATA', 'Huila'),
(41483, 'NÁTAGA', 'Huila'),
(41503, 'OPORAPA', 'Huila'),
(41518, 'PAICOL', 'Huila'),
(41524, 'PALERMO', 'Huila'),
(41530, 'PALESTINA', 'Huila'),
(41548, 'PITAL', 'Huila'),
(41551, 'PITALITO', 'Huila'),
(41615, 'RIVERA', 'Huila'),
(41660, 'SALADOBLANCO', 'Huila'),
(41668, 'SAN AGUSTÍN', 'Huila'),
(41676, 'SANTA MARÍA', 'Huila'),
(41770, 'SUAZA', 'Huila'),
(41791, 'TARQUI', 'Huila'),
(41797, 'TESALIA', 'Huila'),
(41799, 'TELLO', 'Huila'),
(41801, 'TERUEL', 'Huila'),
(41807, 'TIMANÁ', 'Huila'),
(41872, 'VILLAVIEJA', 'Huila'),
(41885, 'YAGUARÁ', 'Huila'),
(44001, 'RIOHACHA', 'La Guajira'),
(44035, 'ALBANIA', 'La Guajira'),
(44078, 'BARRANCAS', 'La Guajira'),
(44090, 'DIBULLA', 'La Guajira'),
(44098, 'DISTRACCIÓN', 'La Guajira'),
(44110, 'EL MOLINO', 'La Guajira'),
(44279, 'FONSECA', 'La Guajira'),
(44378, 'HATONUEVO', 'La Guajira'),
(44420, 'LA JAGUA DEL PILAR', 'La Guajira'),
(44430, 'MAICAO', 'La Guajira'),
(44560, 'MANAURE', 'La Guajira'),
(44650, 'SAN JUAN DEL CESAR', 'La Guajira'),
(44847, 'URIBIA', 'La Guajira'),
(44855, 'URUMITA', 'La Guajira'),
(44874, 'VILLANUEVA', 'La Guajira'),
(47001, 'SANTA MARTA', 'Magdalena'),
(47030, 'ALGARROBO', 'Magdalena'),
(47053, 'ARACATACA', 'Magdalena'),
(47058, 'ARIGUANÍ', 'Magdalena'),
(47161, 'CERRO SAN ANTONIO', 'Magdalena'),
(47170, 'CHIVOLO', 'Magdalena'),
(47189, 'CIÉNAGA', 'Magdalena'),
(47205, 'CONCORDIA', 'Magdalena'),
(47245, 'EL BANCO', 'Magdalena'),
(47258, 'EL PIÑON', 'Magdalena'),
(47268, 'EL RETÉN', 'Magdalena'),
(47288, 'FUNDACIÓN', 'Magdalena'),
(47318, 'GUAMAL', 'Magdalena'),
(47460, 'NUEVA GRANADA', 'Magdalena'),
(47541, 'PEDRAZA', 'Magdalena'),
(47545, 'PIJIÑO DEL CARMEN', 'Magdalena'),
(47551, 'PIVIJAY', 'Magdalena'),
(47555, 'PLATO', 'Magdalena'),
(47570, 'PUEBLOVIEJO', 'Magdalena'),
(47605, 'REMOLINO', 'Magdalena'),
(47660, 'SABANAS DE SAN ANGEL', 'Magdalena'),
(47675, 'SALAMINA', 'Magdalena'),
(47692, 'SAN SEBASTIÁN DE BUENAVISTA', 'Magdalena'),
(47703, 'SAN ZENÓN', 'Magdalena'),
(47707, 'SANTA ANA', 'Magdalena'),
(47720, 'SANTA BÁRBARA DE PINTO', 'Magdalena'),
(47745, 'SITIONUEVO', 'Magdalena'),
(47798, 'TENERIFE', 'Magdalena'),
(47960, 'ZAPAYÁN', 'Magdalena'),
(47980, 'ZONA BANANERA', 'Magdalena'),
(50001, 'VILLAVICENCIO', 'Meta'),
(50006, 'ACACÍAS', 'Meta'),
(50110, 'BARRANCA DE UPÍA', 'Meta'),
(50124, 'CABUYARO', 'Meta'),
(50150, 'CASTILLA LA NUEVA', 'Meta'),
(50223, 'CUBARRAL', 'Meta'),
(50226, 'CUMARAL', 'Meta'),
(50245, 'EL CALVARIO', 'Meta'),
(50251, 'EL CASTILLO', 'Meta'),
(50270, 'EL DORADO', 'Meta'),
(50287, 'FUENTE DE ORO', 'Meta'),
(50313, 'GRANADA', 'Meta'),
(50318, 'GUAMAL', 'Meta'),
(50325, 'MAPIRIPÁN', 'Meta'),
(50330, 'MESETAS', 'Meta'),
(50350, 'LA MACARENA', 'Meta'),
(50370, 'URIBE', 'Meta'),
(50400, 'LEJANÍAS', 'Meta'),
(50450, 'PUERTO CONCORDIA', 'Meta'),
(50568, 'PUERTO GAITÁN', 'Meta'),
(50573, 'PUERTO LÓPEZ', 'Meta'),
(50577, 'PUERTO LLERAS', 'Meta'),
(50590, 'PUERTO RICO', 'Meta'),
(50606, 'RESTREPO', 'Meta'),
(50680, 'SAN CARLOS DE GUAROA', 'Meta'),
(50683, 'SAN JUAN DE ARAMA', 'Meta'),
(50686, 'SAN JUANITO', 'Meta'),
(50689, 'SAN MARTÍN', 'Meta'),
(50711, 'VISTAHERMOSA', 'Meta'),
(52001, 'PASTO', 'Nariño'),
(52019, 'ALBÁN', 'Nariño'),
(52022, 'ALDANA', 'Nariño'),
(52036, 'ANCUYÁ', 'Nariño'),
(52051, 'ARBOLEDA', 'Nariño'),
(52079, 'BARBACOAS', 'Nariño'),
(52083, 'BELÉN', 'Nariño'),
(52110, 'BUESACO', 'Nariño'),
(52203, 'COLÓN', 'Nariño'),
(52207, 'CONSACA', 'Nariño'),
(52210, 'CONTADERO', 'Nariño'),
(52215, 'CÓRDOBA', 'Nariño'),
(52224, 'CUASPUD', 'Nariño'),
(52227, 'CUMBAL', 'Nariño'),
(52233, 'CUMBITARA', 'Nariño'),
(52240, 'CHACHAGÜÍ', 'Nariño'),
(52250, 'EL CHARCO', 'Nariño'),
(52254, 'EL PEÑOL', 'Nariño'),
(52256, 'EL ROSARIO', 'Nariño'),
(52258, 'EL TABLÓN DE GÓMEZ', 'Nariño'),
(52260, 'EL TAMBO', 'Nariño'),
(52287, 'FUNES', 'Nariño'),
(52317, 'GUACHUCAL', 'Nariño'),
(52320, 'GUAITARILLA', 'Nariño'),
(52323, 'GUALMATÁN', 'Nariño'),
(52352, 'ILES', 'Nariño'),
(52354, 'IMUÉS', 'Nariño'),
(52356, 'IPIALES', 'Nariño'),
(52378, 'LA CRUZ', 'Nariño'),
(52381, 'LA FLORIDA', 'Nariño'),
(52385, 'LA LLANADA', 'Nariño'),
(52390, 'LA TOLA', 'Nariño'),
(52399, 'LA UNIÓN', 'Nariño'),
(52405, 'LEIVA', 'Nariño'),
(52411, 'LINARES', 'Nariño'),
(52418, 'LOS ANDES', 'Nariño'),
(52427, 'MAGÜI', 'Nariño'),
(52435, 'MALLAMA', 'Nariño'),
(52473, 'MOSQUERA', 'Nariño'),
(52480, 'NARIÑO', 'Nariño'),
(52490, 'OLAYA HERRERA', 'Nariño'),
(52506, 'OSPINA', 'Nariño'),
(52520, 'FRANCISCO PIZARRO', 'Nariño'),
(52540, 'POLICARPA', 'Nariño'),
(52560, 'POTOSÍ', 'Nariño'),
(52565, 'PROVIDENCIA', 'Nariño'),
(52573, 'PUERRES', 'Nariño'),
(52585, 'PUPIALES', 'Nariño'),
(52612, 'RICAURTE', 'Nariño'),
(52621, 'ROBERTO PAYÁN', 'Nariño'),
(52678, 'SAMANIEGO', 'Nariño'),
(52683, 'SANDONÁ', 'Nariño'),
(52685, 'SAN BERNARDO', 'Nariño'),
(52687, 'SAN LORENZO', 'Nariño'),
(52693, 'SAN PABLO', 'Nariño'),
(52694, 'SAN PEDRO DE CARTAGO', 'Nariño'),
(52696, 'SANTA BÁRBARA', 'Nariño'),
(52699, 'SANTACRUZ', 'Nariño'),
(52720, 'SAPUYES', 'Nariño'),
(52786, 'TAMINANGO', 'Nariño'),
(52788, 'TANGUA', 'Nariño'),
(52835, 'SAN ANDRES DE TUMACO', 'Nariño'),
(52838, 'TÚQUERRES', 'Nariño'),
(52885, 'YACUANQUER', 'Nariño'),
(54001, 'CÚCUTA', 'Norte de Santander'),
(54003, 'ABREGO', 'Norte de Santander'),
(54051, 'ARBOLEDAS', 'Norte de Santander'),
(54099, 'BOCHALEMA', 'Norte de Santander'),
(54109, 'BUCARASICA', 'Norte de Santander'),
(54125, 'CÁCOTA', 'Norte de Santander'),
(54128, 'CACHIRÁ', 'Norte de Santander'),
(54172, 'CHINÁCOTA', 'Norte de Santander'),
(54174, 'CHITAGÁ', 'Norte de Santander'),
(54206, 'CONVENCIÓN', 'Norte de Santander'),
(54223, 'CUCUTILLA', 'Norte de Santander'),
(54239, 'DURANIA', 'Norte de Santander'),
(54245, 'EL CARMEN', 'Norte de Santander'),
(54250, 'EL TARRA', 'Norte de Santander'),
(54261, 'EL ZULIA', 'Norte de Santander'),
(54313, 'GRAMALOTE', 'Norte de Santander'),
(54344, 'HACARÍ', 'Norte de Santander'),
(54347, 'HERRÁN', 'Norte de Santander'),
(54377, 'LABATECA', 'Norte de Santander'),
(54385, 'LA ESPERANZA', 'Norte de Santander'),
(54398, 'LA PLAYA', 'Norte de Santander'),
(54405, 'LOS PATIOS', 'Norte de Santander'),
(54418, 'LOURDES', 'Norte de Santander'),
(54480, 'MUTISCUA', 'Norte de Santander'),
(54498, 'OCAÑA', 'Norte de Santander'),
(54518, 'PAMPLONA', 'Norte de Santander'),
(54520, 'PAMPLONITA', 'Norte de Santander'),
(54553, 'PUERTO SANTANDER', 'Norte de Santander'),
(54599, 'RAGONVALIA', 'Norte de Santander'),
(54660, 'SALAZAR', 'Norte de Santander'),
(54670, 'SAN CALIXTO', 'Norte de Santander'),
(54673, 'SAN CAYETANO', 'Norte de Santander'),
(54680, 'SANTIAGO', 'Norte de Santander'),
(54720, 'SARDINATA', 'Norte de Santander'),
(54743, 'SILOS', 'Norte de Santander'),
(54800, 'TEORAMA', 'Norte de Santander'),
(54810, 'TIBÚ', 'Norte de Santander'),
(54820, 'TOLEDO', 'Norte de Santander'),
(54871, 'VILLA CARO', 'Norte de Santander'),
(54874, 'VILLA DEL ROSARIO', 'Norte de Santander'),
(63001, 'ARMENIA', 'Quindio'),
(63111, 'BUENAVISTA', 'Quindio'),
(63130, 'CALARCA', 'Quindio'),
(63190, 'CIRCASIA', 'Quindio'),
(63212, 'CÓRDOBA', 'Quindio'),
(63272, 'FILANDIA', 'Quindio'),
(63302, 'GÉNOVA', 'Quindio'),
(63401, 'LA TEBAIDA', 'Quindio'),
(63470, 'MONTENEGRO', 'Quindio'),
(63548, 'PIJAO', 'Quindio'),
(63594, 'QUIMBAYA', 'Quindio'),
(63690, 'SALENTO', 'Quindio'),
(66001, 'PEREIRA', 'Risaralda'),
(66045, 'APÍA', 'Risaralda'),
(66075, 'BALBOA', 'Risaralda'),
(66088, 'BELÉN DE UMBRÍA', 'Risaralda'),
(66170, 'DOSQUEBRADAS', 'Risaralda'),
(66318, 'GUÁTICA', 'Risaralda'),
(66383, 'LA CELIA', 'Risaralda'),
(66400, 'LA VIRGINIA', 'Risaralda'),
(66440, 'MARSELLA', 'Risaralda'),
(66456, 'MISTRATÓ', 'Risaralda'),
(66572, 'PUEBLO RICO', 'Risaralda'),
(66594, 'QUINCHÍA', 'Risaralda'),
(66682, 'SANTA ROSA DE CABAL', 'Risaralda'),
(66687, 'SANTUARIO', 'Risaralda'),
(68001, 'BUCARAMANGA', 'Santander'),
(68013, 'AGUADA', 'Santander'),
(68020, 'ALBANIA', 'Santander'),
(68051, 'ARATOCA', 'Santander'),
(68077, 'BARBOSA', 'Santander'),
(68079, 'BARICHARA', 'Santander'),
(68081, 'BARRANCABERMEJA', 'Santander'),
(68092, 'BETULIA', 'Santander'),
(68101, 'BOLÍVAR', 'Santander'),
(68121, 'CABRERA', 'Santander'),
(68132, 'CALIFORNIA', 'Santander'),
(68147, 'CAPITANEJO', 'Santander'),
(68152, 'CARCASÍ', 'Santander'),
(68160, 'CEPITÁ', 'Santander'),
(68162, 'CERRITO', 'Santander'),
(68167, 'CHARALÁ', 'Santander'),
(68169, 'CHARTA', 'Santander'),
(68176, 'CHIMA', 'Santander'),
(68179, 'CHIPATÁ', 'Santander'),
(68190, 'CIMITARRA', 'Santander'),
(68207, 'CONCEPCIÓN', 'Santander'),
(68209, 'CONFINES', 'Santander'),
(68211, 'CONTRATACIÓN', 'Santander'),
(68217, 'COROMORO', 'Santander'),
(68229, 'CURITÍ', 'Santander'),
(68235, 'EL CARMEN DE CHUCURÍ', 'Santander'),
(68245, 'EL GUACAMAYO', 'Santander'),
(68250, 'EL PEÑÓN', 'Santander'),
(68255, 'EL PLAYÓN', 'Santander'),
(68264, 'ENCINO', 'Santander'),
(68266, 'ENCISO', 'Santander'),
(68271, 'FLORIÁN', 'Santander'),
(68276, 'FLORIDABLANCA', 'Santander'),
(68296, 'GALÁN', 'Santander'),
(68298, 'GAMBITA', 'Santander'),
(68307, 'GIRÓN', 'Santander'),
(68318, 'GUACA', 'Santander'),
(68320, 'GUADALUPE', 'Santander'),
(68322, 'GUAPOTÁ', 'Santander'),
(68324, 'GUAVATÁ', 'Santander'),
(68327, 'GÜEPSA', 'Santander'),
(68344, 'HATO', 'Santander'),
(68368, 'JESÚS MARÍA', 'Santander'),
(68370, 'JORDÁN', 'Santander'),
(68377, 'LA BELLEZA', 'Santander'),
(68385, 'LANDÁZURI', 'Santander'),
(68397, 'LA PAZ', 'Santander'),
(68406, 'LEBRIJA', 'Santander'),
(68418, 'LOS SANTOS', 'Santander'),
(68425, 'MACARAVITA', 'Santander'),
(68432, 'MÁLAGA', 'Santander'),
(68444, 'MATANZA', 'Santander'),
(68464, 'MOGOTES', 'Santander'),
(68468, 'MOLAGAVITA', 'Santander'),
(68498, 'OCAMONTE', 'Santander'),
(68500, 'OIBA', 'Santander'),
(68502, 'ONZAGA', 'Santander'),
(68522, 'PALMAR', 'Santander'),
(68524, 'PALMAS DEL SOCORRO', 'Santander'),
(68533, 'PÁRAMO', 'Santander'),
(68547, 'PIEDECUESTA', 'Santander'),
(68549, 'PINCHOTE', 'Santander'),
(68572, 'PUENTE NACIONAL', 'Santander'),
(68573, 'PUERTO PARRA', 'Santander'),
(68575, 'PUERTO WILCHES', 'Santander'),
(68615, 'RIONEGRO', 'Santander'),
(68655, 'SABANA DE TORRES', 'Santander'),
(68669, 'SAN ANDRÉS', 'Santander'),
(68673, 'SAN BENITO', 'Santander'),
(68679, 'SAN GIL', 'Santander'),
(68682, 'SAN JOAQUÍN', 'Santander'),
(68684, 'SAN JOSÉ DE MIRANDA', 'Santander'),
(68686, 'SAN MIGUEL', 'Santander'),
(68689, 'SAN VICENTE DE CHUCURÍ', 'Santander'),
(68705, 'SANTA BÁRBARA', 'Santander'),
(68720, 'SANTA HELENA DEL OPÓN', 'Santander'),
(68745, 'SIMACOTA', 'Santander'),
(68755, 'SOCORRO', 'Santander'),
(68770, 'SUAITA', 'Santander'),
(68773, 'SUCRE', 'Santander'),
(68780, 'SURATÁ', 'Santander'),
(68820, 'TONA', 'Santander'),
(68855, 'VALLE DE SAN JOSÉ', 'Santander'),
(68861, 'VÉLEZ', 'Santander'),
(68867, 'VETAS', 'Santander'),
(68872, 'VILLANUEVA', 'Santander'),
(68895, 'ZAPATOCA', 'Santander'),
(70001, 'SINCELEJO', 'Sucre'),
(70110, 'BUENAVISTA', 'Sucre'),
(70124, 'CAIMITO', 'Sucre'),
(70204, 'COLOSO', 'Sucre'),
(70215, 'COROZAL', 'Sucre'),
(70221, 'COVEÑAS', 'Sucre'),
(70230, 'CHALÁN', 'Sucre'),
(70233, 'EL ROBLE', 'Sucre'),
(70235, 'GALERAS', 'Sucre'),
(70265, 'GUARANDA', 'Sucre'),
(70400, 'LA UNIÓN', 'Sucre'),
(70418, 'LOS PALMITOS', 'Sucre'),
(70429, 'MAJAGUAL', 'Sucre'),
(70473, 'MORROA', 'Sucre'),
(70508, 'OVEJAS', 'Sucre'),
(70523, 'PALMITO', 'Sucre'),
(70670, 'SAMPUÉS', 'Sucre'),
(70678, 'SAN BENITO ABAD', 'Sucre'),
(70702, 'SAN JUAN DE BETULIA', 'Sucre'),
(70708, 'SAN MARCOS', 'Sucre'),
(70713, 'SAN ONOFRE', 'Sucre'),
(70717, 'SAN PEDRO', 'Sucre'),
(70742, 'SAN LUIS DE SINCÉ', 'Sucre'),
(70771, 'SUCRE', 'Sucre'),
(70820, 'SANTIAGO DE TOLÚ', 'Sucre'),
(70823, 'TOLÚ VIEJO', 'Sucre'),
(73001, 'IBAGUÉ', 'Tolima'),
(73024, 'ALPUJARRA', 'Tolima'),
(73026, 'ALVARADO', 'Tolima'),
(73030, 'AMBALEMA', 'Tolima'),
(73043, 'ANZOÁTEGUI', 'Tolima'),
(73055, 'ARMERO', 'Tolima'),
(73067, 'ATACO', 'Tolima'),
(73124, 'CAJAMARCA', 'Tolima'),
(73148, 'CARMEN DE APICALÁ', 'Tolima'),
(73152, 'CASABIANCA', 'Tolima'),
(73168, 'CHAPARRAL', 'Tolima'),
(73200, 'COELLO', 'Tolima'),
(73217, 'COYAIMA', 'Tolima'),
(73226, 'CUNDAY', 'Tolima'),
(73236, 'DOLORES', 'Tolima'),
(73268, 'ESPINAL', 'Tolima'),
(73270, 'FALAN', 'Tolima'),
(73275, 'FLANDES', 'Tolima'),
(73283, 'FRESNO', 'Tolima'),
(73319, 'GUAMO', 'Tolima'),
(73347, 'HERVEO', 'Tolima'),
(73349, 'HONDA', 'Tolima'),
(73352, 'ICONONZO', 'Tolima'),
(73408, 'LÉRIDA', 'Tolima'),
(73411, 'LÍBANO', 'Tolima'),
(73443, 'SAN SEBASTIÁN DE MARIQUITA', 'Tolima'),
(73449, 'MELGAR', 'Tolima'),
(73461, 'MURILLO', 'Tolima'),
(73483, 'NATAGAIMA', 'Tolima'),
(73504, 'ORTEGA', 'Tolima'),
(73520, 'PALOCABILDO', 'Tolima'),
(73547, 'PIEDRAS', 'Tolima'),
(73555, 'PLANADAS', 'Tolima'),
(73563, 'PRADO', 'Tolima'),
(73585, 'PURIFICACIÓN', 'Tolima'),
(73616, 'RIOBLANCO', 'Tolima'),
(73622, 'RONCESVALLES', 'Tolima'),
(73624, 'ROVIRA', 'Tolima'),
(73671, 'SALDAÑA', 'Tolima'),
(73675, 'SAN ANTONIO', 'Tolima'),
(73678, 'SAN LUIS', 'Tolima'),
(73686, 'SANTA ISABEL', 'Tolima'),
(73770, 'SUÁREZ', 'Tolima'),
(73854, 'VALLE DE SAN JUAN', 'Tolima'),
(73861, 'VENADILLO', 'Tolima'),
(73870, 'VILLAHERMOSA', 'Tolima'),
(73873, 'VILLARRICA', 'Tolima'),
(76001, 'CALI', 'Valle'),
(76020, 'ALCALÁ', 'Valle'),
(76036, 'ANDALUCÍA', 'Valle'),
(76041, 'ANSERMANUEVO', 'Valle'),
(76054, 'ARGELIA', 'Valle'),
(76100, 'BOLÍVAR', 'Valle'),
(76109, 'BUENAVENTURA', 'Valle'),
(76111, 'GUADALAJARA DE BUGA', 'Valle'),
(76113, 'BUGALAGRANDE', 'Valle'),
(76122, 'CAICEDONIA', 'Valle'),
(76126, 'CALIMA', 'Valle'),
(76130, 'CANDELARIA', 'Valle'),
(76147, 'CARTAGO', 'Valle'),
(76233, 'DAGUA', 'Valle'),
(76243, 'EL ÁGUILA', 'Valle'),
(76246, 'EL CAIRO', 'Valle'),
(76248, 'EL CERRITO', 'Valle'),
(76250, 'EL DOVIO', 'Valle'),
(76275, 'FLORIDA', 'Valle'),
(76306, 'GINEBRA', 'Valle'),
(76318, 'GUACARÍ', 'Valle'),
(76364, 'JAMUNDÍ', 'Valle'),
(76377, 'LA CUMBRE', 'Valle'),
(76400, 'LA UNIÓN', 'Valle'),
(76403, 'LA VICTORIA', 'Valle'),
(76497, 'OBANDO', 'Valle'),
(76520, 'PALMIRA', 'Valle'),
(76563, 'PRADERA', 'Valle'),
(76606, 'RESTREPO', 'Valle'),
(76616, 'RIOFRÍO', 'Valle'),
(76622, 'ROLDANILLO', 'Valle'),
(76670, 'SAN PEDRO', 'Valle'),
(76736, 'SEVILLA', 'Valle'),
(76823, 'TORO', 'Valle'),
(76828, 'TRUJILLO', 'Valle'),
(76834, 'TULUÁ', 'Valle'),
(76845, 'ULLOA', 'Valle'),
(76863, 'VERSALLES', 'Valle'),
(76869, 'VIJES', 'Valle'),
(76890, 'YOTOCO', 'Valle'),
(76892, 'YUMBO', 'Valle'),
(76895, 'ZARZAL', 'Valle'),
(81001, 'ARAUCA', 'Arauca'),
(81065, 'ARAUQUITA', 'Arauca'),
(81220, 'CRAVO NORTE', 'Arauca'),
(81300, 'FORTUL', 'Arauca'),
(81591, 'PUERTO RONDÓN', 'Arauca'),
(81736, 'SARAVENA', 'Arauca'),
(81794, 'TAME', 'Arauca'),
(85001, 'YOPAL', 'Casanare'),
(85010, 'AGUAZUL', 'Casanare'),
(85015, 'CHAMEZA', 'Casanare'),
(85125, 'HATO COROZAL', 'Casanare'),
(85136, 'LA SALINA', 'Casanare'),
(85139, 'MANÍ', 'Casanare'),
(85162, 'MONTERREY', 'Casanare'),
(85225, 'NUNCHÍA', 'Casanare'),
(85230, 'OROCUÉ', 'Casanare'),
(85250, 'PAZ DE ARIPORO', 'Casanare'),
(85263, 'PORE', 'Casanare'),
(85279, 'RECETOR', 'Casanare'),
(85300, 'SABANALARGA', 'Casanare'),
(85315, 'SÁCAMA', 'Casanare'),
(85325, 'SAN LUIS DE PALENQUE', 'Casanare'),
(85400, 'TÁMARA', 'Casanare'),
(85410, 'TAURAMENA', 'Casanare'),
(85430, 'TRINIDAD', 'Casanare'),
(85440, 'VILLANUEVA', 'Casanare'),
(86001, 'MOCOA', 'Putumayo'),
(86219, 'COLÓN', 'Putumayo'),
(86320, 'ORITO', 'Putumayo'),
(86568, 'PUERTO ASÍS', 'Putumayo'),
(86569, 'PUERTO CAICEDO', 'Putumayo'),
(86571, 'PUERTO GUZMÁN', 'Putumayo'),
(86573, 'PUERTO LEGUÍZAMO', 'Putumayo'),
(86749, 'SIBUNDOY', 'Putumayo'),
(86755, 'SAN FRANCISCO', 'Putumayo'),
(86757, 'SAN MIGUEL', 'Putumayo'),
(86760, 'SANTIAGO', 'Putumayo'),
(86865, 'VALLE DEL GUAMUEZ', 'Putumayo'),
(86885, 'VILLAGARZÓN', 'Putumayo'),
(88001, 'SAN ANDRÉS', 'San Andres'),
(88564, 'PROVIDENCIA', 'San Andres'),
(91001, 'LETICIA', 'Amazonas'),
(91263, 'EL ENCANTO', 'Amazonas'),
(91405, 'LA CHORRERA', 'Amazonas'),
(91407, 'LA PEDRERA', 'Amazonas'),
(91430, 'LA VICTORIA', 'Amazonas'),
(91460, 'MIRITI - PARANÁ', 'Amazonas'),
(91530, 'PUERTO ALEGRÍA', 'Amazonas'),
(91536, 'PUERTO ARICA', 'Amazonas'),
(91540, 'PUERTO NARIÑO', 'Amazonas'),
(91669, 'PUERTO SANTANDER', 'Amazonas'),
(91798, 'TARAPACÁ', 'Amazonas'),
(94001, 'INÍRIDA', 'Guainia'),
(94343, 'BARRANCO MINAS', 'Guainia'),
(94663, 'MAPIRIPANA', 'Guainia'),
(94883, 'SAN FELIPE', 'Guainia'),
(94884, 'PUERTO COLOMBIA', 'Guainia'),
(94885, 'LA GUADALUPE', 'Guainia'),
(94886, 'CACAHUAL', 'Guainia'),
(94887, 'PANA PANA', 'Guainia'),
(94888, 'MORICHAL', 'Guainia'),
(95001, 'SAN JOSÉ DEL GUAVIARE', 'Guaviare'),
(95015, 'CALAMAR', 'Guaviare'),
(95025, 'EL RETORNO', 'Guaviare'),
(95200, 'MIRAFLORES', 'Guaviare'),
(97001, 'MITÚ', 'Vaupes'),
(97161, 'CARURU', 'Vaupes'),
(97511, 'PACOA', 'Vaupes'),
(97666, 'TARAIRA', 'Vaupes'),
(97777, 'PAPUNAUA', 'Vaupes'),
(97889, 'YAVARATÉ', 'Vaupes'),
(99001, 'PUERTO CARREÑO', 'Vichada'),
(99524, 'LA PRIMAVERA', 'Vichada'),
(99624, 'SANTA ROSALÍA', 'Vichada'),
(99773, 'CUMARIBO', 'Vichada');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Persona` int(11) NOT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Estado_Cliente` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Persona`, `Usuario`, `Estado_Cliente`) VALUES
(11, 10, 23, 1),
(17, 14, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` int(11) NOT NULL,
  `Persona` int(11) NOT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Estado_Empleado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Persona`, `Usuario`, `Estado_Empleado`) VALUES
(3, 11, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `Id` int(2) NOT NULL,
  `Estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`Id`, `Estado`) VALUES
(0, 'Inactivo'),
(1, 'Activo');

-- --------------------------------------------------------

--
-- Table structure for table `identificacion`
--

CREATE TABLE `identificacion` (
  `id_identificacion` int(11) NOT NULL,
  `tipo_identificacion` int(11) NOT NULL,
  `numero_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identificacion`
--

INSERT INTO `identificacion` (`id_identificacion`, `tipo_identificacion`, `numero_identificacion`) VALUES
(1, 3, ''),
(2, 1, '0987654321'),
(16, 2, '123456789'),
(17, 1, '987654321'),
(21, 1, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id_persona`, `Nombre`, `Apellido`, `Direccion`, `Celular`, `Telefono`, `Identificacion`) VALUES
(1, '', '', '', '', '', 1),
(2, 'Camilo', 'Quiceno', 'cra 47c # 46-81', '3164189126', '3280510', 2),
(10, 'Cliente', 'Favorito', 'La casa del cliente', '3033033333', '3333333', 16),
(11, 'Empleado', 'Del Mes', 'Casa del Empleado', '3023023232', '3023232', 17),
(14, 'pepito', 'perez', '123 av', '12345', '12345', 21);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `ValorUnitario` float DEFAULT NULL,
  `id_categoria` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre`, `Descripcion`, `ValorUnitario`, `id_categoria`) VALUES
(6, 'Memoria ram', 'memoria ram de 512 mb', 10000, 2),
(7, 'monitor', 'monitor de 14\"', 14000, 9),
(8, 'mouse', 'mouse usb', 15000, 4),
(9, 'audifonos', 'audifonos marca asus', 20000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `Id_producto` int(11) DEFAULT NULL,
  `Id_Proveedor` varchar(20) DEFAULT NULL,
  `Nombre_Producto` varchar(20) DEFAULT NULL,
  `Nombre_Proveedor` varchar(20) DEFAULT NULL,
  `Cantidad` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `Id_Proveedor` varchar(20) NOT NULL,
  `Nombre_Prov` varchar(20) NOT NULL,
  `IdCiudad` int(6) NOT NULL,
  `Direccion` varchar(60) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefonos` varchar(50) NOT NULL,
  `Estado_Prov` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`Id_Proveedor`, `Nombre_Prov`, `IdCiudad`, `Direccion`, `Email`, `Telefonos`, `Estado_Prov`) VALUES
('1', 'SanDisk', 44279, 'Milpitas, California, Estados Unidos', 'support@sandisk.com', '888 527 1441', 1),
('16828164', 'RTDSFFSDF', 44279, 'fdfdgdfg', 'dfgdfgpojoi@lkjo.com', 'dffd43534', 1),
('2', 'Kingston', 44279, 'Fountain Valley, California, Estados Unidos', 'support@kingston.com', '7144452894', 1),
('3', 'ADATA', 44279, 'Nuevo Taipéi, República de China', 'support@adata.com', '9562112548', 1),
('4', 'DELL', 44279, 'Round Rock, Texas, Estados Unidos', 'support@dell.com', '8006249896', 1),
('5', 'HP', 44279, 'Palo Alto, CA 94304 United States', 'support@hp.com', '6508571501', 1),
('6', 'Toshiba', 44279, 'Minato, Tokio, Japón', 'support@toshiba.com', '2125960600', 1),
('7', 'Lenovo', 44279, 'Quarry Bay, Hong Kong', 'support@lenovo.com', '8552536686', 1),
('8', 'JBL', 44279, 'San Francisco, CA', 'support@jbl.com', '8245772351', 1),
('9', 'SONY', 44279, 'San Francisco, CA', 'support@sonyes.com', '9382815634', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administra'),
(2, 'empleado'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id_identificacion` int(11) NOT NULL,
  `identificacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`id_identificacion`, `identificacion`) VALUES
(1, 'CC'),
(2, 'TI'),
(3, 'CC');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `email`, `pass`, `rol`) VALUES
(1, 'juan@mail.com', '12345', 1),
(23, 'cliente@mail.com', '12345', 3),
(24, 'empleado@mail.com', '123456', 2),
(30, 'pepito@mail.com', '12345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `Id_Venta` int(11) NOT NULL,
  `Id_Cliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `Factura` varchar(20) DEFAULT NULL,
  `forma_pago` varchar(20) DEFAULT NULL,
  `Total_Factura` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `Id_Venta` int(11) DEFAULT NULL,
  `Id_Producto` int(11) DEFAULT NULL,
  `Cantidad` int(6) DEFAULT NULL,
  `ValorUnitario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id_admin`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`),
  ADD KEY `Nombre_Cat` (`Nombre_Cat`);

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`IdCiudad`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`),
  ADD KEY `Estado_Cliente` (`Estado_Cliente`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`),
  ADD KEY `Persona` (`Persona`),
  ADD KEY `Usuario` (`Usuario`),
  ADD KEY `Estado_Empleado` (`Estado_Empleado`) USING BTREE;

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `identificacion`
--
ALTER TABLE `identificacion`
  ADD PRIMARY KEY (`id_identificacion`),
  ADD KEY `tipo_identificacion` (`tipo_identificacion`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `Identificacion` (`Identificacion`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD KEY `Producto_Proveedor_Proveedores_fk` (`Id_Proveedor`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id_Proveedor`),
  ADD UNIQUE KEY `Nombre_Prov` (`Nombre_Prov`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Nombre_Prov_2` (`Nombre_Prov`),
  ADD KEY `CiudadProveedor` (`IdCiudad`),
  ADD KEY `Estado_Prov` (`Estado_Prov`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id_identificacion`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `rol` (`rol`);

--
-- Indexes for table `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Id_Cliente` (`Id_Cliente`);

--
-- Indexes for table `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD KEY `Venta_Detalle_Venta_Cabecera_fk` (`Id_Venta`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `identificacion`
--
ALTER TABLE `identificacion`
  MODIFY `id_identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id_identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administradores_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`),
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`Estado_Cliente`) REFERENCES `estado` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`),
  ADD CONSTRAINT `empleados_ibfk_3` FOREIGN KEY (`Estado_Empleado`) REFERENCES `estado` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `identificacion`
--
ALTER TABLE `identificacion`
  ADD CONSTRAINT `identificacion_ibfk_1` FOREIGN KEY (`tipo_identificacion`) REFERENCES `tipo_identificacion` (`id_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`Identificacion`) REFERENCES `identificacion` (`id_identificacion`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`Id_Categoria`);

--
-- Constraints for table `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `Producto_Proveedor_Proveedores_fk` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedores` (`Id_Proveedor`),
  ADD CONSTRAINT `producto_proveedor_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_Producto`);

--
-- Constraints for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `CiudadProveedor` FOREIGN KEY (`IdCiudad`) REFERENCES `ciudad` (`IdCiudad`),
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`Estado_Prov`) REFERENCES `estado` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD CONSTRAINT `venta_cabecera_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`Id_Cliente`);

--
-- Constraints for table `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `Venta_Detalle_Venta_Cabecera_fk` FOREIGN KEY (`Id_Venta`) REFERENCES `venta_cabecera` (`Id_Venta`),
  ADD CONSTRAINT `venta_detalle_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
