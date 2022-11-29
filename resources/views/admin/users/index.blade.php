@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>List Users</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
      integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
@stop

@section('js')

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
    ></script>

    <!-- ✅ load DataTables ✅ -->
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
    integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>

    <script> 
    
        $(document).ready(function (){
            $("#users").DataTable({
                "order":[]
            });
        });
            

    </script>
@stop