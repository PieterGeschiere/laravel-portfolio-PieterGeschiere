<?php

namespace Database\Seeders;
use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'Hoe print je een document hier op de HZ?',
                'answer' => 'Ga naar de website <a href="http://print.hz.nl" target="_blank">print.hz.nl</a>
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
                Na het afdrukken druk op de TouchID op Stop en vervolgens Logout.',
                'link' => ''
            ],
            [
                'question' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
                'answer' => 'Zorg ervoor dat je minimaal 0,07 euro tegoed hebt. Scannen is gratis maar dit bedrag (of hoger) moet op op je HZ pas staan. Meld jezelf aan op de TouchID naast de printer met behulp van de HZ pas. Kies in het TouchID menu voor de optie Scanning - Scan. Leg de originele(n) op de feeder of glazen plaat. Druk op Scan and Send. Druk op Scan to me. Druk op Yes. Druk op de Start knop. Het volgende scherm wordt weergegeven als er gescand wordt via de glazen plaat. Druk op de groene Start knop op de printer om pagina voor pagina te scannen. Als dit gereed is druk dan op Start Sending. Na het scannen druk op de TouchID op Stop en vervolgens Logout.',
                'link' => ''
            ],
            [
                'question' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
                'answer' => 'Wanneer je symptomen van het corona virus hebt of ziek bent moet je thuis blijven. het is echter wel mogelijk om de lessen digitaal bij te wonen.',
                'link' => ''
            ],
            [
                'question' => 'Hoe kun je een projectruimte boeken in 1 van de vleugels van het gebouw?',
                'answer' => 'Met ingang van augustus 2018 is de Selfservice Portal beschikbaar voor meldingen, reserveringen en aanvragen. De Selfservice is opgenomen als widget binnen MyHZ. In de Selfservice Portal is een onderverdeling gemaakt in Producten en Diensten, Overzichten en Contact & Feedback.',
                'link' => ''
            ],
            [
                'question' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
                'answer' => 'Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg. Dit is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct bij het HZ-pand te parkeren. Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-autos.',
                'link' => ''
            ],




        ];
        foreach($faqs as $faq) {
            $faq_class = new Faq($faq);
            $faq_class->save();
        }

    }
}
