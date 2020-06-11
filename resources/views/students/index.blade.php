@extends('layout.main')

@section('content')
<h1>I nostri ex studenti</h1>
<div class="students">
    @foreach($students as $student)
    <a href="" class="student">
        <header>
            <img src="{{ $student['img']}}" alt="">
            <div class="bio">
                <h3>{{ $student['nome'] }} ({{ $student['eta']}} anni)</h3>
                <h4>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} da {{ $student['azienda']}} come {{ $student['ruolo']}}</h4>
            </div>
        </header>
    <p>{{ $student['descrizione']}}</p>
    </a>
    @endforeach 
</div>

@endsection