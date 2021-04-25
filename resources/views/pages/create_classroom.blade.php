@extends('pages/app')

@section('content')

<form action="/students/createstudent/create" method="POST"> 
   @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" name="name">
    </div> 
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection