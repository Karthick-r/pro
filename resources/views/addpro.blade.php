@extends('other')

@section('content')


<div class="row" style="margin-top:40px">
        <form class="col s12" method="POST" action="{{ route('pro') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s12">
              <input name="name" type="text" class="validate" required>
              <label for="text">Project Name</label>
              <span class="helper-text" data-error="wrong" data-success="right">Add Project</span>
            </div>
            <center>
            <input type="submit" value="Add" class="btn pulse-effect ">
            </center>  
        </div>
        </form>
      </div>

@endsection