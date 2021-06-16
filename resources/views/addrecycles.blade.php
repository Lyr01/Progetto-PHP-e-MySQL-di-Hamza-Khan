<!DOCTYPE html>
<html lang="it">
<head>
</head>
<body>
    <h1>Add Recycle</h1>
    <form action="addrecycles" method="POST">
        @csrf
        <input type="hidden" name="day_id" placeholder="Numero Giorno" value=<?php
                $url = URL::current();;
                echo basename(dirname($url));?> > <br> <br>

        <label for="cars">Scegli Tipo di Raccolta:</label>

        <select name="tipo_raccolta">
            <option value="Vetro" selected>Vetro</option>
            <option value="Plastica">Plastica</option>
            <option value="Alluminio e metalli">Alluminio e metalli</option>
            <option value="Carta e cartone" >Carta e cartone</option>
            <option value="Frazione umida o organica" >Frazione umida o organica</option>
            <option value="Secco indifferenziato" >Secco indifferenziato</option>
            <option value="Rifiuti ingombranti" >Rifiuti ingombranti</option>
            <option value="Rifiuti elettrici" >Rifiuti elettrici</option>
        </select> <br> <br>

        <label >Inizio della Raccolta:</label>

        <input name="inizio_raccolta" type="time"  
        min="09:00" max="18:00" > <br> <br>

        <label >Fine della Raccolta:</label>

        <input name="fine_raccolta" type="time"  
        min="09:00" max="18:00" > <br> <br>

        <button type="submit"> Add Recycle </button>
    </form>
</body>
<html>