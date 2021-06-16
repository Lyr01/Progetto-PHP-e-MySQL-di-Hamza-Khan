<!DOCTYPE html>
<html lang="it">
<head>
</head>
<body>
    <h1>Update Recycle</h1>
    <form action="/update" method="POST">
        @csrf
        <input type="hidden" name="id"  value="{{$data['id']}}" >
        <input type="hidden" name="day_id" placeholder="Numero Giorno" value="{{$data['day_id']}}" > <br> <br>

        <label for="cars">Scegli Tipo di Raccolta:</label>

        <select name="tipo_raccolta" >
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
        min="09:00" max="18:00" value="{{$data['inizio_raccolta']}}"> <br> <br>

        <label >Fine della Raccolta:</label>

        <input name="fine_raccolta" type="time"  
        min="09:00" max="18:00" value="{{$data['fine_raccolta']}}"> <br> <br>

        <button type="submit"> Update Recycle </button>
    </form>
</body>
<html>