<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>
<div class="mt-3"></div>
<body>
    <header>
        <section>
            <selection>
                <table>
                    <h1>Registrate </h1>
                    <div class="mt-3"></div>
                    <tbody>
                        <form>
                            <input type="text" minlength="1" maxlength="20" required placeholder="Nombre" />
                            <input type="text" minlength="1" maxlength="30" required placeholder="Apellidos" />
                            <input type="text" placeholder="DNI" />
                            <input type="text" placeholder="DIN" />
                            <input type="date" required placeholder="Fecha" />
                            <input type="email" minlenght="11" maxlength="40" required placeholder="Email" />
                            <input type="tel" min="0" max="9" placeholder="tel." />
                            <button type="submit">Enviar</button>
                        </form>
                    </tbody>
                    </thead>
                </table>
            </selection>
        </section>
    </header>
</body>

</html>