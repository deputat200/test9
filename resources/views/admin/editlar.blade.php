@extends('layouts.master')



@section('title')
    About | Us | Edit
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>About Ust | Edit Data</h4>

                <form action="{{ url('update/'.$abaut->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                  
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Title:</label>
                          <input type="text" name="title" class="form-control" value="{{ $abaut->title }}" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
                            <input type="text" name="subtitle" value="{{ $abaut->subtitle }}" class="form-control" id="recipient-name">
                          </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Description:</label>
                          <textarea class="form-control" name="descrip" id="message-text">{{$abaut->descrip}}</textarea>
                        </div>
                     
                    </div>
                    <div class="modal-footer">
                   <a href="{{url('abauts')}}">   <button type="button" class="btn btn-secondary">Orqaga</button></a>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


