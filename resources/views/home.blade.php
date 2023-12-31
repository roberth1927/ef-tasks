@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5><span class="text-center fa fa-home"></span> @yield('title')</h5>
                </div>
                <div class="card-body">
                    <h5>Hola <strong>{{ Auth::user()->name }},</strong> {{ __('Vista general de los usuarios y las tareas ') }}</h5>
                    <hr>
                    <div class="row w-100">
                        <div class="col-md-3" x-data="{ scale: 1 }">
                            <div class="card border-warning mx-sm-1 p-3"
                                 x-bind:style="{ transform: 'scale(' + scale + ')', transition: 'transform 0.3s ease' }"
                                 @mouseover="scale = 1.1"
                                 @mouseleave="scale = 1">
                                <div class="card border-warning text-warning p-3 my-card">
                                    <span class="text-center fa fa-users" aria-hidden="true"></span>
                                </div>
                                <div class="text-warning text-center mt-3"><h4>Users</h4></div>
                                <div class="text-warning text-center mt-2"><h1>{{ Auth::user()->count() }}</h1></div>
                            </div>
                        </div>
                        <div class="col-md-3" x-data="{ scale: 1 }">
                            <div class="card border-success mx-sm-1 p-3"
                                 x-bind:style="{ transform: 'scale(' + scale + ')', transition: 'transform 0.3s ease' }"
                                 @mouseover="scale = 1.1"
                                 @mouseleave="scale = 1">
                                <div class="card border-success text-success p-3 my-card">
                                    <span class="text-center fa fa-luggage-cart" aria-hidden="true"></span>
                                </div>
                                <div class="text-success text-center mt-3"><h4>Tareas Completadas</h4></div>
                                <div class="text-success text-center mt-2"><h1>{{ $completedTasksCount }}</h1></div>
                            </div>
                        </div>
                        <div class="col-md-3" x-data="{ scale: 1 }">
                            <div class="card border-danger mx-sm-1 p-3"
                                 x-bind:style="{ transform: 'scale(' + scale + ')', transition: 'transform 0.3s ease' }"
                                 @mouseover="scale = 1.1"
                                 @mouseleave="scale = 1">
                                <div class="card border-danger text-danger p-3 my-card">
                                    <span class="text-center fa fa-person-booth" aria-hidden="true"></span>
                                </div>
                                <div class="text-danger text-center mt-3"><h4>Tareas Pendientes</h4></div>
                                <div class="text-danger text-center mt-2"><h1>{{ $pendingTasksCount }}</h1></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
