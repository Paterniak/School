<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblicz datę Wielkanocy</title>
</head>
<body>
    <h1>Oblicz datę Wielkanocy</h1>
    <form method="POST">
        <label for="year">Podaj rok (1900-2099): </label>
        <input type="number" id="year" name="year" min="1900" max="2099" required>
        <input type="submit" value="Oblicz">
    </form>
    <?php
if (isset($_POST)) {
    $year = $_POST['year'];


    if ($year < 1900 || $year > 2099) {
        echo "Podaj liczbę z przedziału 1900-2099";
        return;
    }

    $p = 24;
    $q = 5;

    $a = $year % 19;
    $b = $year % 4;
    $c = $year % 7;
    $d = (19 * $a + $p) % 30;
    $e = (2 * $b + 4 * $c + 6 * $d + $q) % 7;

    $dni = 22 + $d + $e;

    if ($dni > 31) {
        $dni -= 31;
        if ($dni > 25) {
            $dni -= 7;
        }
        echo "Wielkanoc w roku " . $year . "wypada na " .  $dni . " kwietnia.";
    } else {
        echo "Wielkanoc w roku " . $year .  "przypada na " . $dni .  "marca.";
    }
}
?>
</body>
</html>