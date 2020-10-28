<html>

    <form action = "<?php echo FRONT_ROOT ?> Admin/Add" method = "POST">

        <label for = "cinema_name">Nombre</label>
        <input type = "text" name = "name" id = "cinema_name" required>

        <label for = "cinema_adress">Dirección</label>
        <input type = "text" name = "adress" id = "cinema_adress" required>

        <label for = "cinema_room">Cantidad de salas</label>
        <input type = "text" name = "room" id = "cinema_room" required>

        <label for = "cinema_price">Precio</label>
        <input type = "text" name = "price" id = "cinema_price" required>

        <button type = "submit">Agregar</button>
        <button type = "reset">Reset</button>
        
    </form>
</html>