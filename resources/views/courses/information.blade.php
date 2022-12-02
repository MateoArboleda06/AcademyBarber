<x-app-layout>
    <h1 class="welcome">Courses Information {{ auth()->user()->name }}</h1>
    <br>


    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Viewed Courses</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Amount: </strong>{{ $cant_vistas }} Courses<br>
            <strong>Names: </strong> {{ $name_viwed1[0]->name }}, {{ $name_viwed2[0]->name }}<br>

        </div>
    </div>
    <br>

    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Missing Courses</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Amount: </strong>{{ $cant_faltantes }} Courses<br>
            @foreach ($names_missed as $missed)
                <strong>Name: </strong>{{ $missed->name }}<br>
            @endforeach
        </div>

    </div>

    <br>
    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Progress</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <div class="progress">
                <div class="navi progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20%</div>
            </div>
        </div>
    </div>

    <x-slot:footer>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
        </div>
    </x-slot:footer>
</x-app-layout>

<style>
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 26px;
    }

    .showinfo {
        color: black;
    }

    /*button*/
    .button {
        background: linear-gradient(to bottom right, rgba(164, 120, 93), rgba(28, 27, 23));
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .team {
        border-radius: 5px;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 50px;
        background-color: rgba(84, 49, 27);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }

    .info {
        background-color: rgba(84, 49, 27);
    }

    .descrip {
        background-color: rgba(164, 120, 93);
    }

    .text-2xl {
        color: white;
    }

    .navi {
        background-color: #603000;
    }
</style>
