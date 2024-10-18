INTEGRANTES: Suarez georgina naira -  Ferreyra zaira melina

Mi base de datos para el trabajo práctico de viajes se estructura en dos tablas relacionadas:
CATEGORIA:
Tabla Usuario: Esta tabla almacena información sobre los usuarios que realizan viajes. Las columnas que contiene son:
id_usuario: Un identificador único para cada usuario.
nombre: El nombre del usuario.
dni: El Documento Nacional de Identidad del usuario.
gmail: La dirección de correo electrónico del usuario.
ITEM:
Tabla Viajes: Esta tabla guarda los detalles de los viajes realizados por los usuarios. Las columnas son:
id_viaje: Un identificador único para cada viaje.
fecha: La fecha en la que se realizó el viaje.
hora: La hora en la que comenzó el viaje.
origen: El lugar de partida del viaje.
destino: El lugar de llegada del viaje.
id_usuario: Esta columna es la clave foránea que conecta cada viaje con un usuario específico, haciendo referencia al campo id_usuario de la tabla Usuario.

Relación entre las tablas:
La relación entre estas dos tablas es a través de la columna id_usuario en ambas tablas. Esto permite asociar cada viaje a un usuario, creando una relación de uno a muchos (un usuario puede tener varios viajes, pero un viaje pertenece a un solo usuario).
Este diseño permite almacenar la información de los usuarios y sus respectivos viajes de manera organizada y relacionada, facilitando consultas como "ver todos los viajes de un usuario específico" o "saber qué usuario realizó un determinado viaje".
