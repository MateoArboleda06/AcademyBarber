<x-app-layout>
    <h1 class="wel">Courses Information {{ auth()->user()->name }}</h1>
    <br>


    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Viewed Courses</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Amount: </strong>{{ $cant_vistas }} Courses<br>

            @foreach ($array_names_viewds as $array)
                <strong>Name: </strong>{{ $array->name }}<br>
            @endforeach

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
           {{--  @foreach ($names_missed as $missed)
                <strong>Name: </strong>{{ $missed->name }}<br>
            @endforeach --}}
        </div>

    </div>

    <br>
    {{--     <div class="card text-center">
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
    </div> --}}

{{--     <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Progress</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <div class="porcentaje">
                <div class="container">
                    <div class="box">
                        <div class="porcent">
                            <svg>
                                <circle cx="70" cy="70" r="70" />
                                <circle cx="70" cy="70" r="70" />
                            </svg>
                            <div class="number">
                                <h2>20<span>%</span></h2>
                            </div>
                            <h3 class="text">Html</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Progress</h2>
            </strong>
        </div>

        <div class="descrip card-body">
                <div class="container">
                    <div class="car">
                        <div class="percent" style="--clr:#04fc43;--num:{{$progress}};">
                            <div class="dot"></div>
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>{{$progress}}<span>%</span></h2>
                            </div>
                        </div>
                    </div>
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
/*     .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 26px;
    } */

    .wel {
        text-align: center;
        text-shadow: #603000 0.1em 0.1em 0.2em;
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

    /*Progress*/
    .container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container .car {
        position: relative;
        width: 220px;
        height: 250px;
        background: rgba(164, 120, 93);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container .car .percent {
        position: relative;
        width: 150px;
        height: 150px;
    }

    .container .car .percent svg {
        position: relative;
        width: 150px;
        height: 150px;
        transform: rotate(270deg);
    }

    .container .car .percent svg circle {
        width: 100%;
        height: 100%;
        fill: transparent;
        stroke-width: 2;
        stroke: #191919;
        transform: translate(5px,5px);
    }

    .container .car .percent svg circle:nth-child(2) {
        stroke: var(--clr);
        stroke-dasharray: 440;
        stroke-dashoffset: calc(440 - (440 * var(--num))/100);
        opacity: 0;
        animation: fadeIn 1s linear forwards;
        animation-delay: 2.5s;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .dot {
        position: absolute;
        inset: 5px;
        z-index: 10;
        /* 360deg / 100 = 3.6 */
        animation: animateDot 2s linear forwards;
    }

    @keyframes animateDot {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(calc(3.6deg * var(--num)));
        }
    }

    .dot::before {
        content: '';
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--clr);
        box-shadow: 0 0 10px var(--clr),
        0 0 30px var(--clr);
    }

    .number {
        position: absolute;
        inset: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        animation: fadeIn 1s linear forwards;
        animation-delay: 2.5s;
    }

    .number h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        Color: #fff;
        font-weight: 700;
        font-size: 2.5rem;
    }

    .number h2 span {
        font-weight: 300;
        color: #fff;
        font-size: 1.5rem;
    }

/*     .porcentaje {
        display: flex;
        justify-content: center;
        align-items: center;       
    }

    .container {
        position: relative;
        width: 960px;
        display: flex;
        justify-content: center;
    }

    .porcent {
        position: relative;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        box-shadow: inset 0 0 50px #fff;
        background: rgb(255, 255, 255);
        z-index: 1000;
    }

    .porcent .number {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .porcent .number h2 {
        color: #000;
        font-weight: 700;
        font-size: 40px;
        transition: 0.5s;
    }

    .card:hover .porcent .number h2 {
        color: rgb(0, 0, 0);
        font-size: 53px;
    }

    .porcent .number h2 span {
        color: rgb(0, 0, 0);
    }

    .text {
        position: relative;
        color: rgb(0, 0, 0);
        margin-top: 20px;
        font-weight: 700;
        font-size: 18px;
        letter-spacing: 2px;
        text-transform: uppercase;
        transition: 0.5s;
    }

    svg {
        position: relative;
        width: 150px;
        height: 150px;
        transform: rotate(-85deg) !important;
    }

    svg circle {
        width: 100%;
        height: 100%;
        fill: none;
        stroke: #603000;
        stroke-width: 10;
        stroke-linecap: round !important;
        transform: translate(5px, 5px);
    }

    /*Claculo para simular el porcent*/
/*     svg circle:nth-child(2) {
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
    }


    .card:nth-child(1) svg circle:nth-child(2) {
        stroke-dashoffset: calc(440 - (440 * 80)/100);
        stroke: rgb(255, 0, 0);
    }

    @media only screen and (max-width:600px) {
        .porcentaje {
            height: auto;
            margin-left: 30px;
            flex-flow: row wrap;
        }
    }

    @media screen and(max-width: 1068px) {
        .container {
            max-width: 80rem;
            min-width: 70rem;
        }

    }

    @media screen and (max-width: 868px) {

        .container {
            max-width: 80rem;
        }
    }

    @media screen and (max-width: 768px) {

        .container {
            padding: 2.5rem;
            flex-direction: column;
            margin-top: 20px;
        }
    } */
</style>
