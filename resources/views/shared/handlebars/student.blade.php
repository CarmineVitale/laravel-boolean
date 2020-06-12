
<script id="entry-template" type="text/x-handlebars-template">
    <div class="students">
    <a href="{{ url('students/show') }}/@{{ slug }}" class="student">
            <header>
                <img src="@{{ foto }}" alt="@{{ nome }} ">
                <div class="bio">
                    <h3>@{{ nome }} (@{{ eta }} anni)</h3>
                    <h4>@{{assunzione}} da @{{azienda}} come @{{ ruolo }}</h4>
                </div>
            </header>
            <p>@{{ descrizione }}</p>
        </a>
    </div>
</script>
  