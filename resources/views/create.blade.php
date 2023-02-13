@extends('master')
@section("tittle")
Create Items
@endsection
@section('content')
<form method="POST" action="{{route('storeIteams')}}">
    @csrf
  <div class="form-group" >
   
    <label for="name_admin">Name</label>
    <input type="text" value="{{old('name_admin')}}" class="form-control" name="name_admin" id="name_admin" aria-describedby="emailHelp" placeholder="Enter Name Of Admin">
  </div>
  @error('name_admin')
  <div class="shadow-sm p-3 mb-5 bg-white rounded">{{$message}}</div>
  @enderror
  <div class="form-group">
    <label for="salary_admin">salary</label>
    <input type="number" value='{{old('salary_admin')}}' class="form-control" name="salary_admin" id="salary_admin" placeholder="Enter Salary Of Admin">
  </div>
  @error('salary_admin')
  <div class="shadow-sm p-3 mb-5 bg-white rounded">{{$message}}</div>
  @enderror
    <div class="form-check mb-2">
        <input class="form-check-input"type="radio" name="active_admin" id="active_admin" value="0">
        <label class="form-check-label" for="flexRadioDefault1">
          NOT ACTIVE
        </label>
      </div>
      <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="active_admin" id="active_admin"  value="1">
        <label class="form-check-label" for="flexRadioDefault2">
            ACTIVE
        </label>
      </div>
      @error('active_admin')
     <div class="shadow-sm p-3 mb-5 bg-white rounded">{{$message}}</div>
        @enderror
      
  <button type="submit" class="btn btn-primary">Submit</button>
</form>@endsection
