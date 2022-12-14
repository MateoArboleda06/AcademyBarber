@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <br>
    <h1 class="welcome">Welcome to Courses</h1>
    <br>
    <div style="text-align: center">
        <a href="{{ route('course.create') }}">
            <button class="button">Create Course</button>
        </a>
    </div>

    {{--     @foreach ($courses as $course)
        <div class="card" style="width: 18rem;">
            <img src="bacedm.png" alt="" style="width:100%" class="card-img-top">
            <div class="card-body">
                <center>
                    <a href="{{ route('course.show', $course) }}"><button class="button">{{ $course->name }}</button></a>
                    <p class="title"><strong>Semester:</strong>{{ $course->semester }}</p>
                    <p class="card-text"><strong>Teacher: </strong>{{ $course->teacher }}</p>
                    <p class="card-text">{{ $course->description }}</p>
                </center>

            </div>
        </div>
    @endforeach --}}

    @foreach ($courses as $course)
        <div class="cont">
            <div class="cards" style="width: 18rem;">
                <div class="box">
                    <div class="content">
                        <img src="academ.png" alt="" style="width:100%" class="card-img-top">
                        <div class="card-body">
                            <center>
                                <a href="{{ route('course.show', $course) }}"><button
                                        class="button">{{ $course->name }}</button></a>
                                <p class="title"><strong>Semester:</strong>{{ $course->semester }}</p>
                                <p class="card-text"><strong>Teacher: </strong>{{ $course->teacher }}</p>
                                <p class="card-text">{{ $course->description }}</p>
                            </center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    {{-- {{ $courses->links() }} --}}
@endsection

<style>
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .card {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 50px;
        background-color:
    }

    .container {
        padding: 20px 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    /*Jose*/
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    /*     .button {
        position: relative;
        background-color: #0a0a23;
        color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 2px 2px rgb(0, 0, 0);
    } */

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

    /*Cards*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");

    body .cont .cards {
        position: relative;
        min-width: 320px;
        height: 440px;
        box-shadow: inset 5px 5px 5px rgba(242, 237, 237, 0.2),
            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
            5px 5px 15px rgba(243, 240, 240, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        margin: 30px;
        transition: 0.5s;
    }


    body .cont .cards .box {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: #d5d3d3;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: 0.5s;
    }

    body .cont .cards .box:hover {
        transform: translateY(-50px);
    }

    body .cont .cards .box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.03);
    }

    body .cont .cards .box .content {
        padding: 20px;
        text-align: center;
    }

    body .cont .cards .box .content h2 {
        position: absolute;
        top: -10px;
        right: 30px;
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.1);
    }

    body .cont .cards .box .content h3 {
        font-size: 1.8rem;
        color: #fff;
        z-index: 1;
        transition: 0.5s;
        margin-bottom: 15px;
    }

    body .cont .cards .box .content p {
        font-size: 1rem;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.9);
        z-index: 1;
        transition: 0.5s;
    }

    body .cont .cards .box .content a:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        background: #fff;
        color: #000;
    }
</style>
