<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

<body>
    <header>
        <section>
            <selection>
                <tableborder="1">
                    <thead>
                        <tr>
                            <td>Fecha</td>
                            <td>DNI </td>
                            <td>Email</td>
                            <td>Telefono</td>
                            <td>Nombre</td>
                            <td>Apellidos</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form>
                            <input type="date" required placeholder="Fecha" />
                            <input type="text" placeholder="DIN" />
                            <input type="email" minlenght="11" maxlength="40" required placeholder="Email" />
                            <input type="tel" min="0" max="9" placeholder="tel." />
                            <input type="text" minlength="1" maxlength="20" required placeholder="Nombre" />
                            <input type="text" minlength="1" maxlength="30" required placeholder="Apellidos" />
                            <button type="submit">Enviar</button>
                        </form>
                    </tbody>
                    </thead>
                    </tableborder>
                    </sellection>
        </section>
</body>

</html>