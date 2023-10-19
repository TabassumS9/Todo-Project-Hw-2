@extends('layouts.fontendLayout')
@section('titel')
Home Page
@endsection
@section('missing')
<div class="card col-lg-8 mx-auto mt-5">
  <div class="card-header">Add Todo</div>
  <div class="card-body">
    <form action="{{ route('submit') }}" method="POST">
      @csrf
      <input name="name" type="text" value="{{ old('name') }}" class="form-control my-2" placeholder="Enter your Name">
      @error('name')
          <span class="text-danger">{{ $message }}</span>
      @enderror
      <input name="title" type="text" value="{{ old('title') }}" class="form-control my-2" placeholder="Enter your Title">
      @error('title')
        <span class="text-danger">{{ $message }}</span>
      @enderror
      <textarea name="detail" class="form-control my-2" placeholder="Enter your Detail">{{ old('detail') }}</textarea>
      @error('detail')
        <span class="text-danger">{{ $message }}</span><br><br>
      @enderror
      <button class="btn btn-primary">Submit</button>
    </form>
  </div>

</div>
@endsection
    
