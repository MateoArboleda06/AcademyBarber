<x-app-layout>

    <h1 class="welcome">Welcome to Group {{ $group->name }}</h1>

    <div style="text-align: center">
        <br>
        <a href="{{ route('group.index') }}"><button class="button">Back to Groups</button></a>
        <br>
        <br>
        <a href="{{ route('group.edit', $group->id) }}"><button class="button">Edit Group</button></a>
        <br>
        <br>
        <a href="{{ route('group.assignmentTeacher', $group->id) }}"><button class="button">Assignment Teacher</button></a>
        <a href="{{-- {{ route('group.assignment', $group->id) }} --}}"><button class="button">Assignment Students</button></a>
        <br>
        <br>
        <p class="showinfo"><strong>Teacher: </strong>{{ $group->teacher }}</p>
        <p class="showinfo"><strong>Students: </strong>{{ $group->students }}</p>

        <form action="{{ route('group.destroy', $group) }}" method="POST">
            @csrf
            @method('delete')
            <button class="button" type="submit">Delete</button>
        </form>
    </div>

</x-app-layout>

<style>
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    .showinfo {
        color: white;
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
