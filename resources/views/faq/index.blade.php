@extends ('layout')

@section ('content')
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
@endsection
