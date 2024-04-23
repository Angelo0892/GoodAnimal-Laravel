<table>
    <thead>
        <th>Nombre</th>
        <th>Email</th>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @can('admin.user.modify')
                <td><a href="{{route('admin.user.modify', $user->id)}}">Modificar</a></td>
            @endcan
            
            @can('admin.user.show')
                <td><a href="{{route('admin.user.show', $user->id)}}">Mostrar</a></td>
            @endcan
            
            @can('admin.user.destroy')
                <td>
                    <form action="{{route('admin.user.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            @endcan
        </tr>
        @endforeach
    </tbody>

</table>