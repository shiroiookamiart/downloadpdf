@extends('sistema')

@section('content')
<br><br>
@if(\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Demo Subida Pdf</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('uploadpdf') }}" enctype="multipart/form-data">
                        @csrf
                        <input class="btn btn-info" type="File" name="file">
                        <button class="btn btn-default" submit >Subir</button>
                    </form>
                    <br>
                    <br>
                    <table class="table">
                        <tr>
                            <td>id</td>
                            <td>Nombre</td>
                            <td>Ruta</td>
                            <td>Acciones</td>
                        </tr>
                    </table>
                </div>        
            </div>
        </div>       
    </div>
</div> 
@endsection