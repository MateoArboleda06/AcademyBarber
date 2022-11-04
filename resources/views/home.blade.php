@extends('layouts.plantillaHome')

@section('title', 'Home')

@section('content')

    <h1>Welcome to Barber Academy</h1>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <img src="{{asset('profile-pic.png')}}" alt="Mateo" style="width:100%">
                <div class="container">
                    <h2>Mateo Arboleda Vasco</h2>
                    <p class="title">Scrum Master</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>teo@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="/w3images/team2.jpg" alt="Jose" style="width:100%">
                <div class="container">
                    <h2>Jose chaverra</h2>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jose@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="/w3images/team3.jpg" alt="Juan" style="width:100%">
                <div class="container">
                    <h2>Juan Pablo Aguirre</h2>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>juan@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="/w3images/team3.jpg" alt="Fernando" style="width:100%">
                <div class="container">
                    <h2>Juan Fernando Carta</h2>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>fernando@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .card {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 100px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 100px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>
