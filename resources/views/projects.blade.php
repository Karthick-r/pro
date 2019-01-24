@extends('layouts')
@section('content')
<div class="mt-3">
    <a href="{{ url('/') }}">Home</a>
</div>
<div class="mt-5">
    <table id="example" class="display" style="width:100%" style="margin-top:40px;">
                <thead>
                    <tr>
                        <th>Projects</th>
                        <th>Docs</th>
                        <th>Add Docs</th>

                    </tr>
                </thead>
              <tbody>
                  @foreach ($app as $pro)
                      
                  <tr>
                      <th>{{ $pro->name }}</th>
                      <th> <a href="{{ url('/list',['id' => $pro->id]) }}" class="btn btn-primary">Docs</a> </th>
                      <th> <a href="{{ url('/docs') }}" class="btn btn-secondary">Add Docs</a> </th>

                  </tr>

                  @endforeach



              </tbody>
            </table>
</div>
@endsection


     