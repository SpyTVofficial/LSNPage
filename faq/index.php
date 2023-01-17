<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>FAQ</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='../assets/style.css'>
        <script src='../script.js'></script>
        <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

    </head>

    <body style="background-color: #eeeeee;">

        <?php include "../assets/header.php"; ?>
        <div class="faqinfo">
            <img src="../assets/images/docicon.png" id="pic">
            <p> Hier findest du einige der <br>am meist gestellten Fragen!</p>
        </div>
        <div class="faq">
            <div>
                <p class="q"><b>Wie kann man sich fürs Team bewerben?</b></p>
                <p class="a">Bewerben kann jeder sich auf dem Discord Server. Dazu eröffnest du einfach ein Ticket, und ein Teammitglied gibt dann alles an die Leitung weiter, welche sich dann an dich wenden wird. Hierzu gibt es jedoch auch ein paar Vorraussetzungen:

                    - Du musst mindestens 16 Jahre alt sein

                    - Ein funktionierendes Headset besitzen

                    - Maximal 1 Ban in den letzten 365 Tagen vor der Bewerbung haben

                    - Aktiv auf dem Netzwerk sein</p>
            </div>
            <div>
                <p class="q"><b>Was passiert, wenn ich auf dem Server gebannt werde?</b></p>
                <p class="a">Solltest du, sei es auf unserem Minecraft oder Multi Theft Auto: San Andreas, gebannt werden, kannst du ganz einfach auf unserem Discord Server einen Entbannungsantrag stellen. Dies kannst du im 'Ticket Öffnen' Kanal tun. Solltest du jedoch auf dem Discord Server gebannt werden, musst du jedoch abwarten, bis der Ban abgelaufen ist.</p>
            </div>
            <div>
                <p class="q"><b>Wie kann man das Team im Falle eines Problems erreichen?</b></p>
                <p class="a">In dem Fall hat der Spieler mehrere Möglichkeiten, wie z.B. über unseren Discord Server ein Ticket zu erstellen

                    oder über das unten rechts angezeigte Chatformular.</p>
            </div>
            <div>
                <p class="q"><b>Warum hosten wir privat? Ist das Sicher?</b></p>
                <p class="a">Wir hosten privat, um für den Anfang unser gesamtes Budget in die Entwicklung stecken können.

                    Unsere Server starten jeden Tag um 2:30 neu. Bei diesem Neustart werden zwei Backups erstellt, die lokal und außerhalb gesichert werden.</p>
            </div>
            <div>
                <p class="q"><b>Was ist, wenn der Minecraft Server offline ist?</b></p>
                <p class="a">Wenn der Minecraft Server Offline ist, kann das mehrere Ursachen haben.

                    Das Management Team wird jedoch versuchen, den Fehler so schnell wie möglich ausfindig zu machen und zu beheben.

                    Updates zu der Situation werden, wenn möglich, immer auf unserem Discord Server gepostet.</p>
            </div>
            <div>
                <p class="q"><b>Wie finanzieren wir uns?</b></p>
                <p class="a">Wir versuchen, die Serverkosten so niedrig wie möglich zu halten, ohne dass dies einen Einfluss auf das Spielerlebnis hat.

                    Ein großteil der Dienste, die unser Server benötigt, werden privat gehostet. Damit ermöglichen wir es, dass wir eine sehr stabile Performance haben, und im Fall der Fälle den Server entsprechend upgraden können und 100% der Kontrolle über den Server zu haben.</p>
            </div>
        </div>
        <?php include "../assets/footer.php"; ?>
        <style>
            .faq {
                top: 100px;
                left: 30%;
                width:60%;
                margin: 0 auto;
            }
            .faq div {
                border: 1px solid #000;
                margin: 5px 0px;
                background-color:#fff;
                border-radius: 20px;
            }
            .question {
                font-size:18px;
                background-color:#ddd;
                margin:0px;
                padding: 15px;
            }
            .answer {
                font-size:12px;
                margin:0px;
                padding: 0px 15px;
                line-height:2;
                max-height:0px;
                overflow:hidden;
                transition:2s;
            }
        </style>
    </body>

</html>