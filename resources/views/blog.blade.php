@extends ('layout')

@section ('content')
<main>
        <h1>Blog</h1>

        <button type="button" class="collapsible">Studiekeuze</button>
        <div class="colcontent">
            <p>
                Vorig Jaar heb ik fysiotherapie gedaan in breda, maar aan het eind van het jaar kwam ik er achter dat
                het toch niet iets voor mij was.
                Vervolgens ben ik gaan zoeken naar waar mijn interesses liggen en daar kwam eigenlijk uit dat ICT mij
                erg leuk leek om te doen.
                Dit kom waarschijnlijk omdat ik vaak achter mijn computer te vinden ben en dat al vanaf jonge leeftijd.
            </p>
        </div>

        <button type="button" class="collapsible">SWOT analyse</button>
        <div class="colcontent">
            <p>
                <img src="/pics/swot.PNG" alt="swot">
            </p>
        </div>

        <button type="button" class="collapsible">Programmeerervaring</button>
        <div class="colcontent">
            <p>
                Voordat ik met de opleiding begon had ik nog geen programmeerervaring.
            </p>
        </div>

        <button type="button" class="collapsible">Feedback</button>
        <div class="colcontent">
            <p>
                Als feedback heb ik te horen gekregen dat ik een lettertype moest gaan toevoegen en dat ik de text niet helemaal moest stretchen over het scherm.
                Ook kreeg ik tehoren dat ik mijn paginas zo consistent mogelijk moest maken en dat ik bij het presenteren wat meer enthousiast over de opleiding moest praten.
            </p>
        </div>

        <button type="button" class="collapsible">Artikel</button>
        <div class="colcontent">
            <p>
                <a href="https://www.computable.nl/artikel/blogs/security/7242389/5260614/ransomware-vormt-grootste-cyberrisico.html"
                    target="_blank">Klik hier voor het artikel</a>
            </p>
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
</main>
@endsection
