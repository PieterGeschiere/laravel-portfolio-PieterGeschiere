@extends ('layout')

@section ('content')
        <h1>Fireball</h1>
        <main>
            <p>
                De volgende grafiek toont gemelde vuurbalgebeurtenissen waarvoor geografische locatiegegevens zijn verstrekt. 
                De berekende totale impactenergie van elke gebeurtenis wordt aangegeven door de relatieve grootte en door een kleur.
                <div id="fireball"></div>
                <script src="/js/api.js"></script>
            </p>
            <?PHP
                header('Access-Control-Allow-Origin: *');
            ?>
        </main>
@endsection
