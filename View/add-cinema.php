<html>

    <form action = "<?php echo FRONT_ROOT?>Add" method = "POST">

        <label for = "cinema_name">Nombre</label>
        <input type = "text" name = "name" id = "name" required>

        <label for = "cinema_adress">Dirección</label>
        <input type = "text" name = "adress" id = "adress" required>

        <label for = "cinema_room">Cantidad de salas</label>
        <input type = "text" name = "room" id = "room" required>

        <label for = "cinema_price">Precio</label>
        <input type = "text" name = "price" id = "price" required>

        <button type = "submit">Agregar</button>
        <button type = "reset">Reset</button>
        
    </form>
</html>