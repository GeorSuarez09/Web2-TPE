<?php
class model
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
        $this->deploy();
    }

    private function deploy()
    {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if (count($tables) == 0) {
            $sql = <<<SQL
            SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
            START TRANSACTION;
            SET time_zone = "+00:00";


            /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
            /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
            /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
            /*!40101 SET NAMES utf8mb4 */;

            --
            -- Base de datos: `viaje_at`
            --

            -- --------------------------------------------------------

            --
            -- Estructura de tabla para la tabla `usuario`
            --

            CREATE TABLE `usuario` (
            `ID_usuario` int(11) NOT NULL,
            `Nombre` varchar(45) NOT NULL,
            `DNI` int(20) NOT NULL,
            `Gmail` varchar(45) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

            --
            -- Volcado de datos para la tabla `usuario`
            --

            INSERT INTO `usuario` (`ID_usuario`, `Nombre`, `DNI`, `Gmail`) 
            VALUES
            (1, 'Melina', 22333456, 'zairamferreyra@gmail.com'),
            (2, 'Georgina', 33456782, 'suarezgeoor@gmail.com');

            -- --------------------------------------------------------

            --
            -- Estructura de tabla para la tabla `viaje`
            --

            CREATE TABLE `viaje` (
            `ID_viaje` int(11) NOT NULL,
            `Fecha` date NOT NULL,
            `Hora` time NOT NULL,
            `Origen` varchar(45) NOT NULL,
            `Destino` varchar(45) NOT NULL,
            `ID_usuario` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

            --
            -- Volcado de datos para la tabla `viaje`
            --

            INSERT INTO `viaje` (`ID_viaje`, `Fecha`, `Hora`, `Origen`, `Destino`, `ID_usuario`) 
            VALUES
            (3, '2024-09-18', '22:35:15', 'Tandil', 'Mar Del Plata', 1),
            (4, '2024-09-19', '17:35:15', 'Tandil', 'Villa Gesel', 2);

            --
            -- Índices para tablas volcadas
            --

            --
            -- Indices de la tabla `usuario`
            --
            ALTER TABLE `usuario`
            ADD PRIMARY KEY (`ID_usuario`);

            --
            -- Indices de la tabla `viaje`
            --
            ALTER TABLE `viaje`
            ADD PRIMARY KEY (`ID_viaje`),
            ADD KEY `ID_usuario` (`ID_usuario`);

            --
            -- AUTO_INCREMENT de las tablas volcadas
            --

            --
            -- AUTO_INCREMENT de la tabla `usuario`
            --
            ALTER TABLE `usuario`
            MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

            --
            -- AUTO_INCREMENT de la tabla `viaje`
            --
            ALTER TABLE `viaje`
            MODIFY `ID_viaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

            --
            -- Restricciones para tablas volcadas
            --

            --
            -- Filtros para la tabla `viaje`
            --
            ALTER TABLE `viaje`
            ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON UPDATE CASCADE;
            COMMIT;

            /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
            /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
            /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
            SQL;

            $this->db->exec($sql);
        }
    }
}
