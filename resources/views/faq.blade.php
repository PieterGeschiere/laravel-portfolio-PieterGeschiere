<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <link rel="stylesheet" href="/css/stylesheet.css" text="text/css">
</head>

<body>
    <nav>
        <div class="sidebar">
            <a href="/">Home</a>
            <a href="profile">Mijn profiel</a>
            <a href="blog">Blog</a>
            <a href="dashboard">Dashboard</a>
            <a class="active" href="faq">FAQ</a>
            <a href="school">School</a>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"> </a>
        </div>
    </nav>
</body>
<div class="content">
    <h1>FAQ</h1>
    <main>
        <button type="button" class="collapsible">Hoe print je een document hier op de HZ?</button>
        <div class="colcontent">
            <p>
                Ga naar de website <a href="http://print.hz.nl" target="_blank">print.hz.nl</a>
                Voer je gebruikersnaam & wachtwoord van de HZ in. Klik vervolgens op Aanmelden.
                Klik op Browse... en selecteer het bestand dat je wil afdrukken.
                Klik op Volgende. Herhaal de vorige stap als je meer documenten wil toevoegen.
                Wacht tot het document verwerkt is en vink de optie Geavanceerd aan om aan te geven of je dubbelzijdig
                wil afdrukken of in zwart/wit.
                Klik bij de opdracht(en) op de HZ printer of HZ plotter, hier wordt de opdracht heen gestuurd.
                Als de printopdracht gegeven is meld je jezelf aan op de TouchID naast de printer met behulp van de HZ
                pas.
                Kies vervolgens voor de optie Print / Afdrukken.
                Kies in het menu de printer of plotter waar de opdracht heen gestuurd is.
                Vervolgens krijg je te zien welke printopdrachten er gereed staan.
                Als er voldoende saldo op je printaccount staat worden de printopdrachten afgedrukt.
                Na het afdrukken druk op de TouchID op Stop en vervolgens Logout.
            </p>
        </div>

        <button type="button" class="collapsible">Hoe scan je een document en stuur je dit naar je laptop hier op de
            HZ?</button>
        <div class="colcontent">
            <p>
                Zorg ervoor dat je minimaal 0,07 euro tegoed hebt. Scannen is gratis maar dit bedrag (of hoger) moet op
                op je HZ pas staan.
                Meld jezelf aan op de TouchID naast de printer met behulp van de HZ pas.
                Kies in het TouchID menu voor de optie Scanning - Scan.
                Leg de originele(n) op de feeder of glazen plaat.
                Druk op Scan and Send.
                Druk op Scan to me.
                Druk op Yes.
                Druk op de Start knop.
                Het volgende scherm wordt weergegeven als er gescand wordt via de glazen plaat.
                Druk op de groene Start knop op de printer om pagina voor pagina te scannen.
                Als dit gereed is druk dan op Start Sending.
                Na het scannen druk op de TouchID op Stop en vervolgens Logout.
            </p>
        </div>

        <button type="button" class="collapsible">Wat moet je doen als je ziek bent of symptomen van het corona
            virus?</button>
        <div class="colcontent">
            <p>
                Wanneer je sympotomen van het corona virus hebt of ziek bent moet je thuis blijven.
                het is echter wel mogelijk om de lessen digitaal bij te wonen.
            </p>
        </div>

        <button type="button" class="collapsible">Hoe kun je een projectruimte boeken in 1 van de vleugels van het
            gebouw?</button>
        <div class="colcontent">
            <p>
                Met ingang van augustus 2018 is de Selfservice Portal beschikbaar voor meldingen, reserveringen
                eenaanvragen.
                De Selfservice is opgenomen als widget binnen MyHZ.
                In de Selfservice Portal is een onderverdeling gemaakt in Producten en Diensten, Overzichten en Contact
                & Feedback.
            </p>
        </div>

        <button type="button" class="collapsible">Wat zijn de instructies om je auto te parkeren op het HZ
            parkeerterrein?</button>
        <div class="colcontent">
            <p>
                Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg.
                Dit is op een paar minuten lopen afstand naar de HZ.
                Het is helaas niet mogelijk om direct bij het HZ-pand te parkeren.
                Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-autos.
            </p>
        </div>
    </main>
</div>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>

</html>
