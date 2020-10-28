<html>
    <div>
        <h2>Listado de Cines</h2>

        <table>
            <thead>
                <th>Name</th>
                <th>Duración</th>
                <th>Director</th>
                <th>Resumen</th>
                <th>Clasificación</th>
                <th>Votos promedios</th>
                <th>Cantidad de votos</th>
                <th>Idioma original</th>
                <th>Lanzamiento</th>
                <th>Gender</th>
            </thead>
            <tbody>
                <form action = "<?php echo FRONT_ROOT ?> Admin/MOVIELIST" method = "POST">
                    <?php
                        if(isset($arrayMovie)){
                            foreach($arrayMovie as $movie)
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $cinema->getMovieName(); ?></td>
                                        <td><?php echo $cinema->getDuration(); ?></td>
                                        <td><?php echo $cinema->getDirector(); ?></td>
                                        <td><?php echo $cinema->getoverView(); ?></td>
                                        <td><?php echo $cinema->getClassification(); ?></td>
                                        <td><?php echo $cinema->getVoteAverage(); ?></td>
                                        <td><?php echo $cinema->getVoteCount(); ?></td>
                                        <td><?php echo $cinema->getOriginalLanguage(); ?></td>
                                        <td><?php echo $cinema->getReleaseDate(); ?></td>
                                        <td><?php echo $cinema->getGender(); ?></td>
                                        <td>
                                            <button type = "submit" name = "remove" value = "<?php echo $movie->getName(); ?>">Eliminar</button>
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