<?php require 'templates/header.phtml'; ?>

<div>
    <h1>Listado de Viajes</h1>
    <table>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($viajes as $viaje): ?>
                <tr>
                    <td><?php echo $viaje->Origen; ?></td>
                    <td><?php echo $viaje->Destino; ?></td>
                    <td><?php echo $viaje->Fecha; ?></td>
                    <td><?php echo $viaje->Hora; ?></td>
                    <td>
                        <a href="editar/<?php echo $viaje->ID_viaje; ?>">Editar</a>
                        <a href="eliminar/<?php echo $viaje->ID_viaje; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require 'templates/footer.phtml'; ?>