<section id="tasks" class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i> Listado de tareas</h4>
                        </div>
                        @if (session()->has('message'))
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Filtrar Tareas">
                        </div>
                        <div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
                            <i class="fa fa-plus"></i>  Crear Tarea
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.tasks.modals')
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tasks as $row)
                                <tr x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" :class="{ 'bg-yellow-100': hover }">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td width="90" class="text-center">
                                        <div class="btn-group">
                                            @if ($row->status == 'pendiente')
                                            <a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="btn btn-sm btn-success margin-" wire:click="edit({{$row->id}})">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @endif
                                            <a class="btn btn-sm btn-danger " onclick="confirm('Confirm Delete Task id {{$row->id}}? \nDeleted Tasks cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="100%">No data Found </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-end">{{ $tasks->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection




