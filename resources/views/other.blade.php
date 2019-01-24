<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

            

</head>
<body>
        <nav class="indigo">
            <div class="container">
                <div class="nav-wrapper">
                  <a href="#" class="brand-logo left">VishGyana</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/docs') }}">Docs</a></li>

                  </ul>
                </div>
            </div>
              </nav>
        <div class="container">

                @yield('content')
            </div>
        
        


        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
    <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    columnDefs: [
                        {
                            targets: [ 0, 1, 2 ],
                            className: 'mdl-data-table__cell--non-numeric'
                        }
                    ]
                } );
            } );
    </script>
    <script>
            $(document).ready(function(){
                $('select').formSelect();
              });
    </script>
</body>
</html>