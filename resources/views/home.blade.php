@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Acciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div><a href="/crearTicket">Crear un nuevo ticket</a></div>
                    <div><a href="/misTicket">Administrar mis tickets</a></div>
                    @if ($admin == true)
                        <div><a href="/todosTickets">Administrar todos los tickets</a></div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
