@extends('layouts.master')



@section('title')
Servisec | Catigory 
@endsection


@section('content')

<div class="row">
      
    <div class="col-md-12">
      
      <div class="card">

        <div class="card-header">
          <h4 class="card-title">Servis Catigory - Add
            <a href="{{url('servis')}}">   <button type="button" class="btn btn-warning float-right py-2">Orqaga</button></a>
        </a>      
        </h4>
        </div>

        <div class="card-body">
           <form action="{{ url('sozdat') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Services Cate Name</label>
                        <input type="text" name="sername" class="form-control" placeholder="Enter Services Name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Services Cate Description </label>
                        <textarea type="text" name="serdes" class="form-control" placeholder="Enter Services Description"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
           </form>
        </div>
        
        <div class="card-header"> 

        </div>
      </div>
    </div>
</div>


@endsection