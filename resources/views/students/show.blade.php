@extends('layout.main')

@section('content')
<h1>Dettagli studente:</h1>
<header>
    <img src="{{ $student['img']}}" alt="">
    <div class="bio">
        <h3>{{ $student['nome'] }} ({{ $student['eta']}} anni)</h3>
        <h4>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} da {{ $student['azienda']}} come {{ $student['ruolo']}}</h4>
    </div>
</header>
<p>{{ $student['descrizione']}}</p>
@endsection