@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? "{{ __('Show') Paciente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mascota:</strong>
                            {{ $paciente->mascota }}
                        </div>
                        <div class="form-group">
                            <strong>Alergias:</strong>
                            {{ $paciente->alergias }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $paciente->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $paciente->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
