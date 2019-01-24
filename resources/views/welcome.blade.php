@extends('other')


@section('content')
    

 <div class="container">
    
     <h3 class="teal-text center">Vishgyana Technology Solutions Api Documentation</h3>
     <div class="card blue" style="padding:30px">
         <center>            <div class="card-body  ">
     <a href="{{ url('/add') }}" class="btn black center white-text" style="" >Add Project</a>
     <a href="{{ url('/docs') }}" class=" btn black center white-text"> Add Documentation</a>

     <a href="{{ url('/projects') }}" class=" btn black center white-text" >All Projects</a>
 
    </div>
         </center>
     </div>
 </div>

        @endsection
