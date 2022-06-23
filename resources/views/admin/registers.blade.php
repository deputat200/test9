@extends('layouts.master')



@section('title')
    Registratsiya Roles
@endsection



@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Registratsiya Roles</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Delete</th>
              <tbody>
                {{$index = 0;}}
                @foreach($data as $row)
                <tr>
                  <td>{{++$index}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->usertype}}</td>
                   <td>
                 <form action="/delete/{{$row -> id}}" method="post">
                  @csrf

                  
                      <button type="submit" class="btn btn-danger">Delete</button>
                  
                 </form>

                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection





@section('skrip')
    
@endsection