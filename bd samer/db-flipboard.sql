-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2017 a las 20:37:05
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db-flipboard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `Codigo_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Noticia` int(11) NOT NULL,
  `Nombre_Categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Categoria`),
  KEY `fk_Tbl_Categorias_Tbl_Noticias1_idx` (`Codigo_Noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`Codigo_Categoria`, `Codigo_Noticia`, `Nombre_Categoria`) VALUES
(1, 1, 'deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario`
--

CREATE TABLE IF NOT EXISTS `tbl_comentario` (
  `Codigo_Comentario` int(11) NOT NULL AUTO_INCREMENT,
  `Texto_Comentario` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Comentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_comentario`
--

INSERT INTO `tbl_comentario` (`Codigo_Comentario`, `Texto_Comentario`) VALUES
(1, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compartir`
--

CREATE TABLE IF NOT EXISTS `tbl_compartir` (
  `Codigo_Compartir` int(11) NOT NULL AUTO_INCREMENT,
  `Url_Compartir` varchar(45) NOT NULL,
  `Usuario_Compartir` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Compartir`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_compartir`
--

INSERT INTO `tbl_compartir` (`Codigo_Compartir`, `Url_Compartir`, `Usuario_Compartir`) VALUES
(1, 'ss', 'ss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_generos`
--

CREATE TABLE IF NOT EXISTS `tbl_generos` (
  `Codigo_Generos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Genero` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Generos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_generos`
--

INSERT INTO `tbl_generos` (`Codigo_Generos`, `Nombre_Genero`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_likes_x_noticia`
--

CREATE TABLE IF NOT EXISTS `tbl_likes_x_noticia` (
  `Codigo_Like` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Tipo_Likes` int(11) NOT NULL,
  PRIMARY KEY (`Codigo_Like`),
  KEY `fk_Tbl_Likes_X_Noticia_Tbl_Tipo_Likes1_idx` (`Codigo_Tipo_Likes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_likes_x_noticia`
--

INSERT INTO `tbl_likes_x_noticia` (`Codigo_Like`, `Codigo_Tipo_Likes`) VALUES
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_lugares`
--

CREATE TABLE IF NOT EXISTS `tbl_lugares` (
  `Codigo_Lugar` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Lugar` varchar(45) NOT NULL,
  `Codigo_LugarPadre` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Lugar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_lugares`
--

INSERT INTO `tbl_lugares` (`Codigo_Lugar`, `Nombre_Lugar`, `Codigo_LugarPadre`) VALUES
(1, 'el paraiso', '0704'),
(2, 'tegucigalpa', '0801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

CREATE TABLE IF NOT EXISTS `tbl_noticias` (
  `Codigo_Noticia` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Comentario` int(11) NOT NULL,
  `Codigo_Compartir` int(11) NOT NULL,
  `Codigo_Usuario` int(11) NOT NULL,
  `Codigo_Like` int(11) NOT NULL,
  `Autor_Noticia` varchar(45) NOT NULL,
  `Foto_Noticia` varchar(45) NOT NULL,
  `Nombre_Noticia` varchar(200) NOT NULL,
  `Descripcion_Noticia` varchar(5000) NOT NULL,
  `Fecha_Noticia` date NOT NULL,
  `flipear` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Noticia`),
  KEY `fk_Tbl_Noticias_Tbl_Comentario1_idx` (`Codigo_Comentario`),
  KEY `fk_Tbl_Noticias_Tbl_Compartir1_idx` (`Codigo_Compartir`),
  KEY `fk_Tbl_Noticias_Tbl_Likes_X_Noticia1_idx` (`Codigo_Like`),
  KEY `fk_Tbl_Noticias_Tbl_Usuario1_idx` (`Codigo_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_noticias`
--

INSERT INTO `tbl_noticias` (`Codigo_Noticia`, `Codigo_Comentario`, `Codigo_Compartir`, `Codigo_Usuario`, `Codigo_Like`, `Autor_Noticia`, `Foto_Noticia`, `Nombre_Noticia`, `Descripcion_Noticia`, `Fecha_Noticia`, `flipear`) VALUES
(1, 1, 1, 1, 1, 's', 's', 's', 's', '2017-11-01', 's'),
(2, 1, 1, 1, 1, 'juan', 'C:\\fakepath\\Alfa-es-la-primera-letra-del-alfa', 's', 's', '0000-00-00', '1'),
(3, 1, 1, 1, 1, 'juan', 'C:\\fakepath\\Alfa-es-la-primera-letra-del-alfa', 's', 's', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notificaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_notificaciones` (
  `Codigo_Notificaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_De_Notificaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Codigo_Notificaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_notificaciones`
--

INSERT INTO `tbl_notificaciones` (`Codigo_Notificaciones`, `Fecha_De_Notificaciones`) VALUES
(1, 'sss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE IF NOT EXISTS `tbl_persona` (
  `Codigo_Persona` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Lugar` int(11) NOT NULL,
  `Codigo_Generos` int(11) NOT NULL,
  `Nombre_Persona` varchar(45) NOT NULL,
  `Correo_Persona` varchar(45) NOT NULL,
  `FechaDeNaciemiento` date NOT NULL,
  `Contrasena_Persona` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Persona`),
  KEY `fk_Tbl_Persona_Tbl_Lugares1_idx` (`Codigo_Lugar`),
  KEY `fk_Tbl_Persona_Tbl_Generos1_idx` (`Codigo_Generos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`Codigo_Persona`, `Codigo_Lugar`, `Codigo_Generos`, `Nombre_Persona`, `Correo_Persona`, `FechaDeNaciemiento`, `Contrasena_Persona`) VALUES
(1, 1, 1, 'samer morazan', 'samer@unah.hn', '2017-11-01', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_seguir`
--

CREATE TABLE IF NOT EXISTS `tbl_seguir` (
  `Codigo_Seguir` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Categoria` int(11) NOT NULL,
  PRIMARY KEY (`Codigo_Seguir`),
  KEY `fk_Tbl_Seguir_Tbl_Categorias1_idx` (`Codigo_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_seguir`
--

INSERT INTO `tbl_seguir` (`Codigo_Seguir`, `Codigo_Categoria`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipousuario`
--

CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `Codigo_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_TipoUsuario` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_TipoUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`Codigo_TipoUsuario`, `Nombre_TipoUsuario`) VALUES
(1, 'administrador'),
(2, 'usuario normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_de_notificacion`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_de_notificacion` (
  `Codigo_TipoNotificacion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_TipoNotificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_TipoNotificacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_tipo_de_notificacion`
--

INSERT INTO `tbl_tipo_de_notificacion` (`Codigo_TipoNotificacion`, `Nombre_TipoNotificacion`) VALUES
(1, 'comentario'),
(2, 'likes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_likes`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_likes` (
  `Codigo_Tipo_Likes` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_Like` varchar(50) NOT NULL,
  PRIMARY KEY (`Codigo_Tipo_Likes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_tipo_likes`
--

INSERT INTO `tbl_tipo_likes` (`Codigo_Tipo_Likes`, `Tipo_Like`) VALUES
(1, 'like'),
(2, 'dislike');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_red_social`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_red_social` (
  `Codigo_TipoRedSocial` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_RedSocial` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_TipoRedSocial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `Codigo_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_TipoUsuario` int(11) NOT NULL,
  `Codigo_Persona` int(11) NOT NULL,
  `Nombre_Usuario` varchar(45) NOT NULL,
  `Correo_Usuario` varchar(45) NOT NULL,
  `Contrasena_Usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`Codigo_Usuario`),
  UNIQUE KEY `Correo_Usuario_UNIQUE` (`Correo_Usuario`),
  KEY `fk_Tbl_Usuario_Tbl_TipoUsuario1_idx` (`Codigo_TipoUsuario`),
  KEY `fk_Tbl_Usuario_Tbl_Persona1_idx` (`Codigo_Persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`Codigo_Usuario`, `Codigo_TipoUsuario`, `Codigo_Persona`, `Nombre_Usuario`, `Correo_Usuario`, `Contrasena_Usuario`) VALUES
(1, 1, 1, 'samer', 'samer@unah.hn', '1234');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD CONSTRAINT `fk_Tbl_Categorias_Tbl_Noticias1` FOREIGN KEY (`Codigo_Noticia`) REFERENCES `tbl_noticias` (`Codigo_Noticia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_likes_x_noticia`
--
ALTER TABLE `tbl_likes_x_noticia`
  ADD CONSTRAINT `fk_Tbl_Likes_X_Noticia_Tbl_Tipo_Likes1` FOREIGN KEY (`Codigo_Tipo_Likes`) REFERENCES `tbl_tipo_likes` (`Codigo_Tipo_Likes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD CONSTRAINT `fk_Tbl_Noticias_Tbl_Comentario1` FOREIGN KEY (`Codigo_Comentario`) REFERENCES `tbl_comentario` (`Codigo_Comentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Noticias_Tbl_Compartir1` FOREIGN KEY (`Codigo_Compartir`) REFERENCES `tbl_compartir` (`Codigo_Compartir`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Noticias_Tbl_Likes_X_Noticia1` FOREIGN KEY (`Codigo_Like`) REFERENCES `tbl_likes_x_noticia` (`Codigo_Like`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Noticias_Tbl_Usuario1` FOREIGN KEY (`Codigo_Usuario`) REFERENCES `tbl_usuario` (`Codigo_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `fk_Tbl_Persona_Tbl_Lugares1` FOREIGN KEY (`Codigo_Lugar`) REFERENCES `tbl_lugares` (`Codigo_Lugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Persona_Tbl_Generos1` FOREIGN KEY (`Codigo_Generos`) REFERENCES `tbl_generos` (`Codigo_Generos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_seguir`
--
ALTER TABLE `tbl_seguir`
  ADD CONSTRAINT `fk_Tbl_Seguir_Tbl_Categorias1` FOREIGN KEY (`Codigo_Categoria`) REFERENCES `tbl_categorias` (`Codigo_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `fk_Tbl_Usuario_Tbl_TipoUsuario1` FOREIGN KEY (`Codigo_TipoUsuario`) REFERENCES `tbl_tipousuario` (`Codigo_TipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Usuario_Tbl_Persona1` FOREIGN KEY (`Codigo_Persona`) REFERENCES `tbl_persona` (`Codigo_Persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
