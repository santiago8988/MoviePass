<!--<html>
    
    <div>

        <a href = "<?php FRONT_ROOT?> Admin/adminCinemas">Administrar cines</a>

        <a href = "<?php FRONT_ROOT?> Admin/movieList">Listar peliculas</a>

    </div>

</html> -->

<?php require_once("nav.php")?>

<html>

        <?php  echo ROOT ?>;
        <form action="Admin/adminCinemas" method="get">

        <button type="submit">Administrar Cines</button>
        </form>


        <form action="<?php echo FRONT_ROOT?>Admin/movieList">

            <button type="submit">Listar Peliculas Cines</button>
        </form>
        

</html>
