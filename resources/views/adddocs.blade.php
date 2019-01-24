@extends('other')

@section('content')


<div class="row" style="margin-top:40px">
        <form class="col s12" method="POST" action="{{ route('docs') }}">
          {{ csrf_field() }}
          <div class="row">
                <div class="input-field col s12">
                        <select name="project_id">
                            @foreach ($app as $pro)
                            <option value="{{ $pro->id }}">{{ $pro->name }}</option>

                            @endforeach
                        </select>
                        <label>Project</label>
                      </div>
                      <div class="input-field col s12">
                          <input name="explain" type="text" class="validate" required>
                          <label for="explain">Feature</label>
                          <span class="helper-text" data-error="wrong" data-success="right">Mention the route</span>
                        </div>
            <div class="input-field col s12">
              <input name="endpoint" type="text" class="validate" required>
              <label for="endpoint">Endpoint</label>
              <span class="helper-text" data-error="wrong" data-success="right">Add Endpoint</span>
            </div>
            <div class="input-field col s12">
                    <select name="method">
                      <option value="get">Get</option>
                      <option value="post">Post</option>
                    </select>
                    <label>Method</label>
                  </div>
                  <div class="input-field col s12">
                        <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                        <span class="helper-text" data-error="wrong" data-success="right">Add Parameters</span>
                        <label for="textarea">Parameters textarea</label>
                      </div>
                <center>
            <input type="submit" value="Add" class="btn pulse-effect ">
            </center>  
        </div>
        </form>
      </div>

@endsection

