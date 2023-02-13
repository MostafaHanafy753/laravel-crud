@extends('master')
@section("tittle")
Admins
@endsection
@section('content')
<div class="container mb-5 d-flex justify-content-center">
    <a type="button" class="btn btn-info " style="color:aliceblue" href="{{route('createIteams')}}">Add New</a>
</div>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Salary</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
<!-------------------------------------------->
    <tbody>
        @if (!@empty($data))
        @php
            $i=1;
        @endphp
            @foreach ($data as $info )
           
        <tr>
            <td >{{$i}}</td>
            <td>{{$info->name}}</td>
            <td>{{$info->salary}}</td>
            <td>
                @if ($info->active==1)
                    Active
                @else
                    Not Active
                @endif
            </td>
            @php
            $i++;
             @endphp
        </tr>
            @endforeach
        @endif
    </tbody>
  </table>
  <br>
  <div class="d-flex justify-content-center">
  {{$data->links()}}
  </div>
@endsection