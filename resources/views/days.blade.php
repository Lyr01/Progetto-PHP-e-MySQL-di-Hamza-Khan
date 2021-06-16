<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    
</head>
<body>
    <h1>Lista Raccolta differenziata del giorno:</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Giorno</td>
            <td>Tipo di Raccolta</td>
            <td>Inizio della Raccolta</td>
            <td>Fine della Raccolta</td>
            <td>Elimina</td>
            <td>Aggiorna</td>
        </tr>
        @foreach ($recycles as $recycle)
        <tr>
            <td>{{$recycle['id']}}</td>
            <td>{{$recycle['day_id']}}</td>
            <td>{{$recycle['tipo_raccolta']}}</td>
            <td>{{$recycle['inizio_raccolta']}}</td>
            <td>{{$recycle['fine_raccolta']}}</td>
            <td><a href="destroy/{{$recycle['id']}}">Elimina</a></td>
            <td><a href="update/{{$recycle['id']}}">Aggiorna</a></td>
        </tr>
        @endforeach
    </table>


    <a href="/">Torna Indietro &nbsp;</a> 
    <a href="/days/{{ request()->segment(count(request()->segments())) }}/addrecycles">Aggiungi Raccolta</a>
    
</body>
<html>
