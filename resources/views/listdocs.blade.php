@extends('other')


@section('content')
<div style="margin-top:30px;">
<table  id="example" class="mdl-data-table" style="width:100%; ">
  <thead>
      <tr>
          <th>For</th>
          <th>Api Route(End point)</th>
          <th>Method</th>
          <th>Parameters</th>
        
      </tr>
  </thead>
  <tbody style="border-left: 2px solid teal;">
      @foreach ($app->docs as $val)
<tr style="border: 2px solid teal;" >

  <td style="border-right: 2px solid teal;"> {{ $val->explain }}</td>
  <td style="border-right: 2px solid teal;"> {{ $val->endpoint }}</td>
  <td style="border-right: 2px solid teal;">               @if ($val->method == 'get')

    <button class="btn purple" >Get</button>
    @else

    <button class="btn green">Post</button>

@endif
  
  
  </td>
  <td style="border-right: 2px solid teal;"> {{ $val->description  }}</td>

</tr>
      @endforeach
    

  </tbody>
</table>
</div>
          

     
      
@endsection