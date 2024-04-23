<table class="table">
    <thead class="table-light">
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Fecha y hora</th>
        <th colspan="3">Acciones</th>
    </thead>

    <tbody>
        @foreach ($informations as $information)
        <tr>
            <td>{{$information->title}}</td>
            <td>{{$information->type}}</td>
            <td>{{$information->date_time}}</td>
            @can('admin.information.modify')
                <td><a href="{{route('admin.information.modify', $information->id)}}">Modificar</a></td>
            @endcan

            @can('admin.information.show')
                <td><a href="{{route('admin.information.show', $information->id)}}">Mostrar</a></td>
            @endcan
            
            @can('admin.information.destroy')
                <td>
                    <form action="{{route('admin.information.destroy', $information->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-link">Eliminar</button>
                    </form>
                </td>
            @endcan
            
        </tr>
            
        @endforeach
    </tbody>

</table>