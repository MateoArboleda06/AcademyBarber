<x-app-layout>
    <h1 class="welcome">Schedule's Student {{ $user }}</h1>
    <br>

        
    <div class="card">
        <div class="card-header">
            <strong><h2>Mañana</h2></strong>
        </div>
        
        <div class="card-body">
            <li><strong>Course: </strong>{{ $courses1->name }} <br>
                <strong>Semester: </strong>{{ $courses1->semester }} <br>
                <strong>Teacher: </strong>{{ $course1[0]->teacher }} <br> 
                <strong>Group: </strong>{{ $course1[0]->name }}
            </li>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-header">
            <strong><h2>Tarde</h2></strong>
        </div>

        <div class="card-body">
            <li><strong>Course: </strong>{{ $courses2->name }} <br>
                <strong>Semester: </strong>{{ $courses2->semester }} <br>
                <strong>Teacher: </strong>{{ $course2[0]->teacher }} <br> 
                <strong>Group: </strong>{{ $course2[0]->name }}
            </li>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-header">
            <strong><h2>Noche</h2></strong>
        </div>

        <div class="card-body">
            <li><strong>Course: </strong>{{ $courses3->name }} <br>
                <strong>Semester: </strong>{{ $courses3->semester }} <br>
                <strong>Teacher: </strong>{{ $course3[0]->teacher }} <br> 
                <strong>Group: </strong>{{ $course3[0]->name }}
            </li>
        </div>
    </div>
        
   

    {{-- <div style="text-align: center">
        <br>
        <a href="{{ route('course.index') }}"><button class="button">Back to Courses</button></a>
        <br>
        <br>
        <p class="showinfo"><strong>Semester: </strong>{{ $course->semester }}</p>
        <p class="showinfo">{{ $course->description }}</p>
        <p class="showinfo"><strong>Teacher: </strong>{{ $course->teacher }}</p>
        <br>

        <a href="#"><button class="button">Seguimiento</button></a>
        <br>
        <br>
        <a href="#"><button class="button">Parcial 1</button></a>
        <br>
        <br>
        <a href="#"><button class="button">Parcial 2</button></a>

    </div> --}}
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
</style>
