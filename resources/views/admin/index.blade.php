@extends('layouts.master')



@section('title')
Servisec | Catigory 
@endsection


@section('content')

<div class="row">
      
    <div class="col-md-12">
      
      <div class="card">

        <div class="card-header">
          <h4 class="card-title">Servis Catigory
         <a href="{{ url('create') }}">
          <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</button>
        </h4></a>
        </div>
        
        <div class="card-header"> 

        </div>
      </div>
    </div>
</div>


@endsection