@extends('layouts.app')

@section('template_title')
Paciente
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Pacientes ingresados') }}
                        </span>
                        @role('admin')
                        <div class="float-right">
                            <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Nuevo Registro') }}
                            </a>
                        </div>
                        @endrole
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>N°</th>

                                    <th>Mascota</th>
                                    <th>fecha_de_nacimiento </th>
                                    <th>Genero</th>
                                    <th>Alergias</th>
                                    <th>Edad</th>
                                    <th>Propietario</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $paciente->mascota }}</td>
                                    <td>{{ $paciente->fecha_de_nacimiento }}</td>
                                    <td>{{ $paciente->genero }}</td>
                                    <td>{{ $paciente->alergias }}</td>
                                    <td>{{ $paciente->edad }}</td>
                                    <td>{{ $paciente->propietario }}</td>
                                    <td>{{ $paciente->telefono }}</td>
                                    <td>{{ $paciente->correo }}</td>

                                    <td>
                                        <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mirar') }}</a>
                                            @role('admin')
                                            <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            @endrole
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $pacientes->links() !!}
        </div>
    </div>
</div>
@endsection