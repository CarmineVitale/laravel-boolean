<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean Careers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
    <header>
        <div class="title">
        <a href="{{ route('static-page.home')}}"><img src="https://www.boolean.careers/images/common/logo.png" alt="logo boolean"></a>
        </div>
        <div class="menu">
            <ul>
                <li> <a @if (Request::route()->getName() == 'static-page.home') class="active" @endif 
                    href="{{ route('static-page.home') }}">HOME</a> </li>
                <li> <a href="#">CORSO</a> </li>
                <li> <a @if (Request::route()->getName() == 'students.index') class="active" @endif
                     href="">DOPO IL CORSO</a> </li>
                <li> <a href="#">LEZIONE GRATUITA</a> </li>
                <li> <a href="#">ASSUMI I NOSTRI STUDENTI</a> </li>
                <li> <a href="#">CANDIDATI ORA</a> </li>
            </ul>
        </div>
    </header>