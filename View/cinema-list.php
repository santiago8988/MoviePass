<html>
    <div>
        <h2>Listado de Cines</h2>

        <table>
            <thead>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Salas</th>
                <th>Precio</th>
            </thead>
            <tbody>
                <form action = "<?php echo FRONT_ROOT ?> Admin/Remove" method = "POST">
                    <?php
                        if(isset($arryCinemas)){
                            foreach($arryCinemas as $cinema)
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $cinema->getName(); ?></td>
                                        <td><?php echo $cinema->getAdress(); ?></td>
                                        <td><?php echo $cinema->getRoom(); ?></td>
                                        <td><?php echo $cinema->getPrice(); ?></td>
                                        <td>
                                            <button type = "submit" name = "remove" value = "<?php echo $cinema->getName(); ?>">Eliminar</button>
                                        </td>
                                    </tr>
                                    
                                <?php
                            }
                        }
                    ?>
                </form>
            </tbody>
        </table>
    </div>
</html>