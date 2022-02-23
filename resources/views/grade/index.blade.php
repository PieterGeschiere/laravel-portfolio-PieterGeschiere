@extends ('layout')

@section ('content')
    <h1>GRADES</h1>
    <main>
        @foreach($grades as $grade)
            <button type="button" class="collapsible">{{$grade->course_name;}}</button>
            <div class="colcontent">
                <p>
                    {!!$grade->test_name;!!}
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
