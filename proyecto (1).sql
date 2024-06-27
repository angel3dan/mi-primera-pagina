-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 06:29:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `Codigo_Autor` int(11) NOT NULL,
  `Nombre(s)` text NOT NULL,
  `Apellido(s)` text NOT NULL,
  `Nacionalidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calfinal`
--

CREATE TABLE `calfinal` (
  `Calificacion_1` text NOT NULL,
  `Calificacion_2` text NOT NULL,
  `Calificacion_3` text NOT NULL,
  `Promedio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `Nombre(s)` text NOT NULL,
  `Apellido(s)` text NOT NULL,
  `Edad` text NOT NULL,
  `E-mail` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` text NOT NULL,
  `Genero` text NOT NULL,
  `Especialidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `Asignatura` text NOT NULL,
  `ISBN` text NOT NULL,
  `Genero_Literario` text NOT NULL,
  `Titulo` text NOT NULL,
  `Editorial` text NOT NULL,
  `Idioma` text NOT NULL,
  `Codigo_Autor` int(11) NOT NULL,
  `Numero_Paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Asignatura` text NOT NULL,
  `Usuario` int(11) NOT NULL,
  `Fecha_Prestamo` date NOT NULL,
  `Fecha_Devolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Numero_Usuario` int(11) NOT NULL,
  `Nombre(s)` text NOT NULL,
  `Apellido(s)` text NOT NULL,
  `Direccion` text NOT NULL,
  `Poblacion` text NOT NULL,
  `Codigo_Postal` text NOT NULL,
  `Telefono` text NOT NULL,
  `Fecha_De_Nacimiento` date NOT NULL,
  `Sancionado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
