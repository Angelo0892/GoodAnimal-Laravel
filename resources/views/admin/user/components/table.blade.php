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
            <td><a href="{{route('admin.user.modify', $user->id)}}">Modificar</a></td>
            <td><a href="{{route('admin.user.show', $user->id)}}">Mostrar</a></td>
            <td>
                <form action="{{route('admin.user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>