<section>

    <table class="table table-responsive">
        <thead class="table-light">
            <tr>
                <th>Rol</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody class="change">
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
                                <button type="submit" class="btn btn-link">Eliminar</button>
                            </form>
                        </td>
                    @endcan
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="paginate-admin">
        {{ $roles->appends(['searchRole' => $searchRole])->links('pagination::bootstrap-4') }}
    </div>
</section>