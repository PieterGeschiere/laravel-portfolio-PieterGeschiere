@extends ('layout')

@section ('content')
        <h1>Fireball</h1>
        <main>
            <p>
                De volgende grafiek toont gemelde vuurbalgebeurtenissen waarvoor geografische locatiegegevens zijn verstrekt. 
                De berekende totale impactenergie van elke gebeurtenis wordt aangegeven door de relatieve grootte en door een kleur.
                <div id="fireball"></div>
                <script src="./js/apis.js"></script>
            </p>
        </main>
@endsection
