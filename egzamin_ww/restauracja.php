<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Samki</title>

    <link rel="stylesheet" href="./styl_1.css">
</head>
<body>
    <div class="ytext" id="baner">
        <p>Witamy w restauracji "Wszystkie Smaki"</p>
    </div>
    <div id="flex">
        <img src="./menu.jpg" alt="Nasze Danie">
        <div id="prawy">
            <p>U nas dobrze zjesz</p>
            <ol type="1">
                <li>Obiady od 40 zł</li>
                <li>Przekąski od 10 zł</li>
                <li>Kolacje od 20 zł</li>
            </ol>
        </div>
    </div>
    <form action="index.php" id="dolny" method="POST">
        <p1>Zarezerwuj stolik on-line</p1>
        <p>Data (format rrrr-mm-dd):</p>
        <input name="data">
        <p>Twój numer telefonu:</p>
        <input name="numer">
        <div id="checkboxdiv">
            <input type="checkbox" name="zgoda" id="zgoda">
            <label for="checkbox">Zgadzam się na przetwarzanie moich danych osobowych</label>
        </div>
        <div id="btn">
            <button type="reset" form="dolny">WYCZYŚĆ</button>
            <button type="submit" form="dolny">REZERWUJ</button>
        </div>
    </form>
    <div class="ytext" id="stopka">
        Stronę internetową wykonał 00000000000
    </div>
</body>
</html>