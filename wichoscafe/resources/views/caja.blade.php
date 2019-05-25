@extends('layouts.Encabezado')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>PRODUCTOS</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table style="width:100%">
                        <tr>
                            <td align="center"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalBebidaPequeña">BEBIDA PEQUEÑA</button></td>
                            <td align="center"> <input type="image" src="\images\bebidacaliente1.jpg" width="100" height="100" data-toggle="modal" data-target="#modalBebidaPequeña"> </td> 
                            <td align="center"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalBebidaPequeña">PASTELES</button> </td>
                        </tr>
                        <tr><td> </td><td> </td><td> </td></tr>
                        <tr>
                            <td align="center">MUFFINS </td>
                            <td align="center">BEBIDAS FRIAS </td> 
                            <td align="center">PLANCHA <br> </a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div id="modalBebidaPequeña" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">BEBIDAS CALIENTES</h4>
        </div>
        <div class="modal-body">
            <table align="center">
                <tr>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">CAFE</button></td>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">TE</button></td>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">MOKA</button></td>
                </tr>
                <tr>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">CHAI</button></td>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">OTRA 1</button></td>
                    <td align="center"><button type="button" class="btn btn-info btn-lg">OTRA 2</button></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function prueba() {
    alert('caca');
}
</script>



@endsection



