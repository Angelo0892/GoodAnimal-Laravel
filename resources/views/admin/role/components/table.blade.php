<section>

    <table>
        <thead>
            <tr>
                <th>Rol</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>

                    @can('admin.role.modify')
                        <td><a href="{{route('admin.role.modify', $role->id)}}">Modificar</a></td>
                    @endcan
                    
                    <!--
                    @can('admin.role.show')
                        <td><a href="{{route('admin.role.show', $role->id)}}">Mostrar</a></td>
                    @endcan
                    --->

                    @can('admin.role.destroy')
                        <td>
                            <form method="POST" action="{{route('admin.role.destroy', $role->id)}}">
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
</section>