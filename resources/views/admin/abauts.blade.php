@extends('layouts.master')



@section('title')
About | Us
@endsection


@section('content')




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>


    <div class="row">
      
        <div class="col-md-12">
          
          <div class="card">
            
            <div class="card-header">
           
                

            
           
                <h4 class="card-title"> Abaut Us
                  <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">About | Us</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                       <form action="/saveabaut" method="POST">
                        @csrf
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Sub-Title:</label>
                            <input class="form-control" name="subtitle" id="message-text">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" name="descrip" id="message-text"></textarea>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary">SAVE</button>
                      </div>
                       </form>
                      </div>
                    </div>
                  </div>
             </h4>


             @if (session('status'))

             <div class="alert-alert-success" role="aler">
                 {{session('status')}}
             </div>
                 
             @endif
              
              
            </div>
            <style>
            </style>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table">
                  <thead class="text-warning">
                    <th class="hek">Id</th>
                    <th class="hek">Title</th>
                    <th class="hek">Sub-Title</th>
                    <th class="hek">Description</th>
                    
                    <th>Edit</th>
                    <th class="w-10p">Delete</th>
                  </thead>
                  <tbody>
                    {{$index = 0;}}
                    @foreach ($abauts as $data)
                        
                    
                    <tr style="width: 21%">
                      <td>{{ ++$index}}</td>
                      <td>{{ $data->title}}</td>
                      <td>{{ $data->subtitle}}</td>
                      <td>
                          {{ $data->descrip}}</td>
                      <td >
                      <a href="{{ url('editlar/'.$data->id) }}">  
                        <button type="submit" class="btn btn-success">Edit</button>
                      </a>
                      </td>
                      <td>
                       <form action="{{ url('abautdelete/'.$data->id) }}" method="POST">
                        @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            </div>
            </div>
              </div>
        </div>
      </div>

</body>
</html>
@endsection





@section('skrip')

<script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );  
</script>    
@endsection