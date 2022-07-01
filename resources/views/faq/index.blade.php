@extends ('layout')

@section ('content')
    <h1>FAQ</h1>
    <a class="{{ Request::path() === '/faq/create' ? 'active' : ''}}" href="/faq/create">Create</a>
    <main>
        @foreach($faqs as $faq)
            <button type="button" class="collapsible">{{$faq->question;}}</button>
            <div class="colcontent">
                <p>
                    {!!$faq->answer;!!}
                    <a href="{{ route('faq.show', $faq)}}">Show</a>
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
