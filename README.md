INTEGRANTES
Suarez Georgina Naira 
Ferreyra Zaira Melina 

Descripcion del Proyecto
Nuestro sitio Web esta diseñada para:
📅 Gestionar reservas de viajes en una interfaz amigable y dinámica.
📋 Consultar información detallada de cada categoria y sus viajes.

La base de datos esta compuesta por:
1. Viajes: Informacion del viaje(Fecha, Hora, Origen Destino, ID_viaje y ID_categoria)
2. Categoria: Informacion detallada del viaje para el cliente (Temporada, Empresa, Comodidad y ID_categoria)
3. Usuario: Usuario pueda loguerase y desloguearse (Id, Gmail y password)
Realizamos la tabla Categoria porque sino la tabla Usuario tenia que cumplir el rol de poder loguerse y desloguarse, y al mismo tiempo cumplir con la funcion Categoria! 


---------------------------------
Acceso Público 🌐
Navegación libre para los usuarios.

🔗 Listado de Viajes: Muestra todos los viajes disponibles.
URL: /listarViajes

🔗 Detalle de Viaje: Información completa de cada viaje.
URL: /verMasViajes/:ID

🔗 Listado de Categorias: Visualización de las categorias registradas.
URL: /mostrarCategoria

🔗 Viajes por Categorias: Ver los viajes realizados incluyendo las categorias.
URL: /viajePorCategoria/:ID


----------------------------------
⚙️ Administración de Datos (ABM)
Administración de Viajes ⚙️
Listar Viajes: URL: /listarViajes
Agregar Viaje: URL: /formularioViajes
Editar Viaje: URL: /editarViaje/:ID
Eliminar Viaje: URL: /eliminarViaje/:ID

Administración de Categoria ⚙️
Listar Categoria: URL: /mostrarCategoria
Agregar Categoria: URL: /formularioCategoria
Editar Categoria: URL: /mostrarFormEditCategoria/:ID
Eliminar Categoria: URL: /eliminarCategoria/:ID