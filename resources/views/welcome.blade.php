@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>
            @guest

				{{ __('Bienvenido') }} {{ config('app.name', 'Laddravel') }} !!! </br>
				Comuníquese con el administrador para obtener sus credenciales de inicio de sesión o haga clic en "Iniciar sesión" para ir al listado de tareas

			@else
					Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            @endif
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
