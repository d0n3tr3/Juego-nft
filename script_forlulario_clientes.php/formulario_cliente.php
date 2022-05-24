<!DOCTYPE html>
<html>

<?php
include 'includes/head.php';
?>

<?php
include 'includes/header.php';
?>

<form action="insertar-client.html" method="POST">
           
                    <form>
                        <formfield>
                            <div>
                                <label>DNI</label>
                                <input type="text" name="DNI" required maxlength="12" minlength="6">
                            </div>
                            <div>
                                <label>Nombre</label>
                                <input type="text" name="nombre" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Pais</label>
                                <input type="text" name="Pais" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>CP</label>
                                <input type="date" name="CP">
                            </div>
                            <div>
                                <label>Password</label>
                                <input type="date" name="Password">
                            </div>
                            <div>
                                <label>Gmail</label>
                                <input type="date" name="Gmail">
                            </div>
                            <div>
                                <button type="submit">Enviar</button>
                            </div>
                        </formfield>
                    </form>

<div class="div-verd">
                <div>
                    <h1>Editar un cliente</h1>
                    <h2>H2</h2>
                </div>
                <div>
                    <form action="insertar-client.html" method="POST">
                        <formfield>
                        <div>
                                <label>DNI</label>
                                <input type="text" name="DNI" required maxlength="12" minlength="6">
                            </div>
                            <div>
                                <label>Nombre</label>
                                <input type="text" name="nombre" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Pais</label>
                                <input type="text" name="Pais" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>CP</label>
                                <input type="date" name="CP">
                            </div>
                            <div>
                                <label>Password</label>
                                <input type="date" name="Password">
                            </div>
                            <div>
                                <label>Gmail</label>
                                <input type="date" name="Gmail">
                            </div>
                            <div>
                                <button type="submit">Enviar</button>
                            </div>
                        </formfield>

                    </form>
                </div>