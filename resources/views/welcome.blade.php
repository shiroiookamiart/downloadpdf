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
                            <td>Acciones</td>
                        </tr>
                        @if(isset($sql))
                            @if(count($sql) > 0)
                                @foreach($sql as $datos)
                                    <tr>
                                        <td>{{ $datos->id }}</td>
                                        <td>{{ $datos->name }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ $datos->dir }}">Ver</a>
                                            <a class="btn btn-warning" href="{{ url('downloadpdf/'.$datos->id) }}">Descargar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endif        
                    </table>
                </div>        
            </div>
        </div>       
    </div>
</div> 
@endsection