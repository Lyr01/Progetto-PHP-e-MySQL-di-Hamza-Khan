<?php
use App\Models\Day;
date_default_timezone_set('Europe/Rome');

// prev e next mese
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // Questo mese
    $ym = date('Y-m');
}

// Controlla il formato
$timestamp = strtotime($ym . '-01');  // il primo giorno del mese
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Oggi (Format:2021-06-8)
$today = date('Y-m-j');
// Oggi (Format:8)
$Oggi = date('j');

// Titolo (Format:June, 2021)
$title = date('F, Y', $timestamp);


// Crea prev & next mese link
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// Numero dei giorni nel mese
$day_count = date('t', $timestamp);

// 1:Lun 2:Mar 3:Mer ... 7:Dom
$str = date('N', $timestamp);

// Array per il calendario
$weeks = [];
$week = '';

// Aggiungi celle vuote
$week .= str_repeat('<td></td>', $str - 1);

for ($days->id = 1; $days->id <= $day_count; $days->id++, $str++) {
    $date = $ym . '-' . $days->id;

    if ($today == $date) {
        $week .= '<td class="today">';
    } else {
        $week .= '<td>';
    }
    $week .= "<a href='/days/$days->id'>" . $days->id . '</a>' .'</td>';
               

    // Domenica o l'ultimo giorno del mese
    if ($str % 7 == 0 || $days->id == $day_count) {

        // Ultimo giorno del mese
        if ($days->id == $day_count && $str % 7 != 0) {
            // Aggiungi celle vuote
            $week .= str_repeat('<td></td>', 7 - $str % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .container{
            font-family: 'Montserrat', sans-serif;
            margin: 60px auto;
        }
        .list-inline{
            text-align: center;
            margin-bottom: 30px;
        }
        .title{
            font-weight: bold;
            font-size: 26px;
        }
        th{
            text-align: center;
        }
        td {
            height: 100px;
        }
        td:hover {
            background-color: silver;
        }
        th:nth-of-type(6), td:nth-of-type(6) {
            color: blue;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: red;
        }
        .today {
            background-color: darkgrey;
        }

    </style>
</head>
<body>
    <div class="container">
        <ul class="list-inline">
        <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
        </ul>
        <div style="overflow: hidden;">
            <p style="float: right;"><a href="/days/{{$Oggi}}">Today</a></p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Lun</th>
                    <th> Mar</th>
                    <th> Mer</th>
                    <th> Gio</th>
                    <th> Ven</th>
                    <th> Sab</th>
                    <th> Dom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($weeks as $week){
                        echo $week;
                        
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<html>
