--
-- Base de datos: `eusa15_bdphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE IF NOT EXISTS `jornadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE IF NOT EXISTS `jugadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `equipo_real` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `apellidos`, `equipo_real`, `id_usuario`) VALUES
(1, 'James', 'Rodriguez', 'Real Madrid', 1),
(2, 'Sergio', 'Ramos', 'Real Madrid', 1),
(3, 'Leo', 'Messi', 'Barcelona', 1),
(4, 'Gerard', 'Pique', 'Barcelona', 1),
(5, 'Ruben', 'Castro', 'Real Betis', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(250) NOT NULL,
  `valor` decimal(12,2) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuaciones`
--

CREATE TABLE IF NOT EXISTS `puntuaciones` (
  `id_jugador` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL,
  `valor` int(3) NOT NULL,
  PRIMARY KEY (`id_jugador`,`id_jornada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `user`, `pass`) VALUES
(1, 'computer', 'computer'),
(2, 'prueba1', 'prueba1'),
(3, 'prueba2', 'prueba2');
