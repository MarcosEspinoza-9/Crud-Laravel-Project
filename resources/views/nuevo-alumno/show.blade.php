@extends('layouts.app')

@section('template_title')
    {{ $nuevoAlumno->name ?? "{{ __('Show') Nuevo Alumno" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nuevo Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nuevo-alumnos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $nuevoAlumno->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $nuevoAlumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $nuevoAlumno->fechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $nuevoAlumno->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronico:</strong>
                            {{ $nuevoAlumno->correoElectronico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
