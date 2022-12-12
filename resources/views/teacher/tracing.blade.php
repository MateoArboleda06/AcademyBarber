<x-app-layout>
    
    @if (is_null($traicing))

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'teacher.store']) !!}

                    <div class="form-group">
                        {!! Form::label('group', 'Group') !!}
                        {!! Form::text('group', $group->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_group', $group->id, array('id' => 'invisible_id_group')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('student', 'Student') !!}
                        {!! Form::text('student', $student->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_student', $student->id, array('id' => 'invisible_id_student')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('tracing', 'Tracing') !!}
                        {!! Form::text('tracing', null, ['class' => 'form-control', 'placeholder' => 'Tracing => 50 %', 'required']) !!}
                    </div>
                    <br>

                    @error('tracing')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    <div class="form-group">
                        {!! Form::label('partial_one', 'Partial One') !!}
                        {!! Form::text('partial_one', null, ['class' => 'form-control', 'placeholder' => 'Partial One => 25 %', 'required']) !!}
                    </div>
                    <br>

                    @error('partial_one')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    <div class="form-group">
                        {!! Form::label('partial_two', 'Partial Two') !!}
                        {!! Form::text('partial_two', null, ['class' => 'form-control', 'placeholder' => 'Partial Two => 25 %', 'required']) !!}
                    </div>
                    <br>

                    @error('partial_two')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    {!! Form::submit('Upload Notes', ['class' => 'btn btn-rounded btn-primary']) !!}

                    <button class="btn btn-rounded btn-success" id="notes_final" onclick="final({{ $student->id }}, {{ $group->id }})">Notes Final</button>
                {!! Form::close() !!}
            </div>
        </div>
        <x-slot:footer>
            <div class="grupo-2">
                <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
            </div>
        </x-slot:footer>
        
    @elseif (!is_null($traicing) && is_null($traicing->status))
        
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'tracingEdit']) !!}

                    <div class="form-group">
                        {!! Form::label('group', 'Group') !!}
                        {!! Form::text('group', $group->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_group', $group->id, array('id' => 'invisible_id_group')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('student', 'Student') !!}
                        {!! Form::text('student', $student->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_student', $student->id, array('id' => 'invisible_id_student')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('tracing', 'Tracing') !!}
                        {!! Form::text('tracing', $traicing->tracing, ['class' => 'form-control', 'placeholder' => 'Tracing => 50 %', 'required']) !!}
                    </div>
                    <br>

                    @error('tracing')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    <div class="form-group">
                        {!! Form::label('partial_one', 'Partial One') !!}
                        {!! Form::text('partial_one', $traicing->partial_one, ['class' => 'form-control', 'placeholder' => 'Partial One => 25 %', 'required']) !!}
                    </div>
                    <br>

                    @error('partial_one')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    <div class="form-group">
                        {!! Form::label('partial_two', 'Partial Two') !!}
                        {!! Form::text('partial_two', $traicing->partial_two, ['class' => 'form-control', 'placeholder' => 'Partial Two => 25 %', 'required']) !!}
                    </div>
                    <br>

                    @error('partial_two')
                        <span class="text-danger">{{ $message }}*</span>
                    @enderror

                    {!! Form::submit('Upload Notes', ['class' => 'btn btn-rounded btn-primary']) !!}

                    <button class="btn btn-rounded btn-success" id="notes_final" onclick="final({{ $student->id }}, {{ $group->id }})">Notes Final</button>
                {!! Form::close() !!}
            </div>
        </div>
        <x-slot:footer>
            <div class="grupo-2">
                <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
            </div>
        </x-slot:footer>
    
    @else

        <div class="card">
            <div class="card-body">

                    <div class="form-group">
                        {!! Form::label('group', 'Group') !!}
                        {!! Form::text('group', $group->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_group', $group->id, array('id' => 'invisible_id_group')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('student', 'Student') !!}
                        {!! Form::text('student', $student->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                        {{ Form::hidden('invisible_student', $student->id, array('id' => 'invisible_id_student')) }}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('tracing', 'Tracing') !!}
                        {!! Form::text('tracing', $traicing->tracing, ['class' => 'form-control', 'placeholder' => 'Tracing => 50 %', 'required', 'disabled']) !!}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('partial_one', 'Partial One') !!}
                        {!! Form::text('partial_one', $traicing->partial_one, ['class' => 'form-control', 'placeholder' => 'Partial One => 25 %', 'required', 'disabled']) !!}
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('partial_two', 'Partial Two') !!}
                        {!! Form::text('partial_two', $traicing->partial_two, ['class' => 'form-control', 'placeholder' => 'Partial Two => 25 %', 'required', 'disabled']) !!}
                    </div>
                    <br>

            </div>
        </div>
        <x-slot:footer>
            <div class="grupo-2">
                <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
            </div>
        </x-slot:footer>
    
    @endif
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>

    function final(studentID, groupID){

        event.preventDefault();

        var tracing = $('#tracing').val();
        var partialOne = $('#partial_one').val();
        var partialTwo = $('#partial_two').val();

        // console.log(tracing, partialOne, partialTwo);

        var final = (tracing*0.5)+(partialOne*0.25)+(partialTwo*0.25);

        var status = final >= 3 ? 'Aprobado': 'Reprobado';

        // console.log('La definitiva es: '+final, status);

        $.ajax({
                type: "POST",
                url: "{{ route('final') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "id_user": studentID,
                    "id_group": groupID,
                    "tracing": tracing,
                    "partial_one": partialOne,
                    "partial_two": partialTwo,
                    "final": final,
                    "status": status
                },
                dataType: "json",
                success: function(response){

                    if(response == 'success'){

                        window.location.reload();

                        return;
                    }

                }
            })
    }




</script>

<style>
    .hideme {
        display: none;
        visibility: hidden;
    }

    .body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
    }

    .dark {
        background: #1f1f1f;
        color: #f1eded;
        transition: all 1.5s ease;
    }

    .navi {
        background-color: #272727;
    }

    .barber {
        background: rgba(84, 49, 27);
    }

    .back {
        background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
    }

    .centering {
        text-align: center;
    }

    .anime {
        animation-duration: 3s;
        animation-name: slidein;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    .h1 {
        text-shadow:
            3px 3px 1px #272727,
            5px 5px 2px white,
            8px 8px 3px rgba(84, 49, 27);
        ;
    }

    .text-gradient {
        color: transparent;
        background-image: linear-gradient(to left, #272727, #3498db, rgba(84, 49, 27));
        background-clip: text;
        animation: color 5s linear infinite;
        background-size: 500%;
    }

    @keyframes color {
        from {
            background-position: 0% 50%;
        }

        to {
            background-position: 100% 50%;
        }
    }
</style>

    
