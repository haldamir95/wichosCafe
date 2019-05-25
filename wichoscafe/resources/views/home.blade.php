<<<<<<< HEAD
@extends(
                    (Auth::user()->rol == 'trabajador' ? 'layouts.appTrabajador' : 
                        (Auth::user()->rol == 'cliente' ? 'layouts.appCliente' : 'layouts.appAdmin'))
    )
=======
@extends('layouts.Encabezado')
>>>>>>> d39d0b75fe85f78db98b50e2c78b25e5f4eb85c1

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>ESCOGE TU ROL DE HOY</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table style="width:100%">
                        <tr>
                            <td align="center">CAJA <br> <a href="#"><input type="image" src="\images\caja1.jpg" alt="Submit" width="100" height="100"></a></td>
                            <td align="center">BEBIDAS CALIENTES <br> <a href="#"><input type="image" src="\images\bebidacaliente1.jpg" alt="Submit" width="100" height="100"></a></td> 
                            <td align="center">PASTELES <br> <a href="#"><input type="image" src="\images\pastel1.jpg" alt="Submit" width="100" height="100"></a></td>
                        </tr>
                        <tr><td> </td><td> </td><td> </td></tr>
                        <tr>
                            <td align="center">MUFFINS <br> <a href="#"><input type="image" src="\images\mufin1.jpg" alt="Submit" width="100" height="100"></a></td>
                            <td align="center">BEBIDAS FRIAS <br> <a href="#"><input type="image" src="\images\NoImageFound.png" alt="Submit" width="100" height="100"></a></td> 
                            <td align="center">PLANCHA <br> <a href="#"><input type="image" src="\images\NoImageFound.png" alt="Submit" width="100" height="100"></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
