@extends('pages/app')

@section('title', 'Student') 
@yield('script')
@section('content')
<p class="text-center" style="font-size: 36px">Student List</p>
<script>
    $(document).ready(function() {
    $('#studenttable').DataTable();
} );
    </script>
<table id="studenttable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['age'] }}</td>
        </tr>
        @endforeach
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </tfoot>
    </table>
@endsection

