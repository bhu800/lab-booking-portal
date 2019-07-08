@extends('layouts.dashboard')
@section('addToolactive', 'class=active')

@section('content')
<div class="container">
    <h1>New Tool Add Form</h1>  
  <form method="post" action="{{route('tools.store')}}" id="contact">
  @csrf
    <h3>Tool Name:</h3>
    <input type="text" name="tl_name" style="width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;" > <br>
    <h3>Color:</h3>
    <input type="color" name="color" style="
    border: 1px solid #ccc;
    {{-- background: #FFF; --}}
    {{-- margin: 0 0 5px; --}}
    padding: 0px;
    "><br><br>
    <h3>Tool Description</h3>
    <textarea id="summernote" name="tl_desc"></textarea>
    <input type="submit" style="
        cursor: pointer;
        width: 100%;
        border: none;
        background: #994512;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;">
  </form>

  <div class="card-header">
    <h3>Import/Export data via Excel Sheet</h3>
  </div>
  <div class="card-body">
    <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <br>
        <button class="btn btn-success">Import Tools Data</button>
        <a class="btn btn-warning" href="{{ url('export/xlsx') }}">Export Tools Data (xlsx)</a>
        <a class="btn btn-warning" href="{{ url('export/xls') }}">Export Tools Data (xls)</a>
        <a class="btn btn-warning" href="{{ url('export/csv') }}">Export Tools Data (csv)</a>
  </form>

@stop
@section('extrascript')
  <!-- <link rel="stylesheet" href="./css/style.css" type="text/css"> -->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
 
<script>
$(document).ready(function() {
        $('#summernote').summernote({
          height: 200,   //set editable area's height
  codemirror: { // codemirror options
    theme: 'monokai'
  }
        });
    });
</script>
@stop
