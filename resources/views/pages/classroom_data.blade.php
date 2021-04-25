@extends('pages/app')

@section('title', 'Student') 
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px; padding-top:12px">Classroom List</p>
<script>
    $(document).ready(function() {
    $('#classroomtable').DataTable();
} );
    </script>
<table id="classroomtable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classrooms as $classroom)
        <tr>
            <td>{{ $classroom['id'] }}</td>
            <td>{{ $classroom['name'] }}</td>
            <td>{{ $classroom['description'] }}</td>
        </tr>
        @endforeach
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>description</th>
            </tr>
        </tfoot>
    </table>
@endsection