<div>

   <div class="card ">
        <div class="card-header">
            <input wire:model="Buscar" class="form-control" placeholder="Ingrese el nombre o apellido">
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->dni }}</td>
                        <td>{{ $item->email }}</td>
                        <td width="10px">
                            <a class="btn btn-warning" href="{{ route('userRoles.edit', $item) }}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                
            </table>
            
        </div>

        {{ $users->links() }}
    </div> 
    
    
    {{-- <div class="container">
        @foreach ($users as $user)
            {{ $user->name }}
        @endforeach
    </div> --}}
     
    {{ $users->links() }}
    
</div>