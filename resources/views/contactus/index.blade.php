@extends('layouts.prueba')

@section('title', 'Contact Us')

@section('content')
    <br>
    <h1 class="welcome">Contact Us</h1>

    <div style="text-align: center">
        <br>
        <form action="{{route('contactUs.store')}}" method="POST">

            @csrf

            <label>
                Name:
                <br>
                <input type="text" name="name">
            </label>
            <br>
            <br>
            <label>
                Mail:
                <br>
                <input type="text" name="mail">
            </label>
            <br>
            <br>
            <label>
                Message:
                <br>
                <textarea name="message" rows="4"></textarea>
            </label>
            <br>
            <br>
            <button class="button" type="submit">Send Message</button>
        </form>
    </div>
@endsection

<style>
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
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
</style>
