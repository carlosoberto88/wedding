<div>
    @section('content')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Invitados</h2>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control mb-3" placeholder="Search Guests..."
                                wire:model.debounce.300ms="search">
                            <table class="table table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Invitado</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                        <th>Codigo</th>
                                        <th>Acompañantes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guests as $guest)
                                        <tr>
                                            <td>{{ $guest->first_name }} {{ $guest->last_name }}</td>
                                            <td>{{ $guest->phone }}</td>
                                            <td>{{ $guest->status }}</td>
                                            <td>{{ $guest->code }}</td>
                                            <td>{{ $guest->companion }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $guests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
