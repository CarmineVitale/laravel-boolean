@extends('layout.main')

@section('content')
<h1>I nostri ex studenti</h1>
<div class="box">
    @foreach($students as $student)
    <div class="students">
        <a href="{{ route('students.show',['id'=> $student['id']]) }}" class="student">
            <header>
                <img src="{{ $student['img']}}" alt="">
                <div class="bio">
                    <h3>{{ $student['nome'] }} ({{ $student['eta']}} anni)</h3>
                    <h4>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} da {{ $student['azienda']}} come {{ $student['ruolo']}}</h4>
                </div>
            </header>
            <p>{{ $student['descrizione']}}</p>
        </a>
    </div>
    @endforeach 
</div>


@endsection