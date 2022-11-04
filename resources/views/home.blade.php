@extends('layouts.plantillaHome')

@section('title', 'Home')

@section('content')

    <h1 class="welcome">Welcome to Barber Academy</h1>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="col-6">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('profile-pic.png') }}" alt="Mateo" style="width:100%">
                    <h3>Mateo Arboleda</h3>
                    <p class="title">Scrum Master</p>
                </div>
                <div class="face back">
                    <h3>Mateo Arboleda</h3>
                    <p class="title">Scrum Master</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mateo@example.com</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>
        </div>

        {{--         <div class="col-6">
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
        </div> --}}
        <div class="col-6">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('jose.png') }}" alt="Jose" style="width:100%">
                    <h3>Jose chaverra</h3>
                    <p class="title">Desarrollador</p>
                </div>
                <div class="face back">
                    <h3>Jose chaverra</h3>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jose@example.com</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('juan.png') }}" alt="Juan" style="width:100%">
                    <h3>Juan Aguirre</h3>
                    <p class="title">Desarrollador</p>
                </div>
                <div class="face back">
                    <h3>Juan Aguirre</h3>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>juan@example.com</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('jose.png') }}" alt="Fernando" style="width:100%">
                    <h3>Fernando Carta</h3>
                    <p class="title">Desarrollador</p>
                </div>
                <div class="face back">
                    <h3>Fernando Carta</h3>
                    <p class="title">Desarrollador</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>fernando@example.com</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
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
        /* background-color: #474e5d; */
        background: linear-gradient(0deg, rgba(164, 120, 93) 0%, rgba(28, 27, 23) 100%);
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
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

    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    /*Styles Cards*/
    .cards {
        position: relative;
        width: 500px;
        height: 500px;
        margin: 100px;
    }

    .cards .face {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
        transition: .60s;
    }

    .cards .front {
        transform: perspective(600px) rotateY(0deg);
        box-shadow: 0 5px 10px #000;
    }

    .cards .front img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cards .front h3 {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 45px;
        line-height: 45px;
        color: #fff;
        background: rgba(0, 0, 0, .4);
        text-align: center;
    }

    .cards .back {
        transform: perspective(600px) rotateY(180deg);
        background: linear-gradient(0deg, rgba(164, 120, 93) 0%, rgba(28, 27, 23) 100%);
        padding: 15px;
        color: #f3f3f3;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        box-shadow: 0 5px 10px #000;
    }

    .cards .back .link {
        border-top: solid 1px #f3f3f3;
        height: 50px;
        line-height: 50px;
    }

    .cards .back .link a {
        color: #f3f3f3;
    }

    .cards .back h3 {
        font-size: 30px;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    .cards .back p {
        letter-spacing: 1px;
    }

    .cards:hover .front {
        transform: perspective(600px) rotateY(180deg);
    }

    .cards:hover .back {
        transform: perspective(600px) rotateY(360deg);
    }
</style>
