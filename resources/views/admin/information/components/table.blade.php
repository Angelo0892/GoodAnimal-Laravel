<table>
    <thead>
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Fecha y hora</th>
    </thead>

    <tbody>
        @foreach ($informations as $information)
        <tr>
            <td>{{$information->title}}</td>
            <td>{{$information->type}}</td>
            <td>{{$information->date_time}}</td>
            <td><a href="{{route('admin.information.modify', $information->id)}}">Modificar</a></td>
            <td><a href="{{route('admin.information.show', $information->id)}}">Mostrar</a></td>
            <td>
                <form action="{{route('admin.information.destroy', $information->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>

</table>