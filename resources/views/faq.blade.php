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
        @foreach($faqs as $faq)
            <button type="button" class="collapsible">{{$faq->question;}}</button>
            <div class="colcontent">
                <p>
                    {!!$faq->answer;!!}
                </p>
            </div>
        @endforeach
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
