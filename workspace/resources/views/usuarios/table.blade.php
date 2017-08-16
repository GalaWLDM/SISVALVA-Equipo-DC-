<table class="table">
    <thead>
    
			<th>Cod Estudiante</th>
			<th>Cédula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Semestre</th>
			
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
           
			<td>{!! $usuario->cod_usuario !!}</td>
			<td>{!! $usuario->cedula !!}</td>
			<td>{!! $usuario->nombre !!}</td>
			<td>{!! $usuario->apellido !!}</td>
			<td>{!! $usuario->semestre !!}</td>
			
            <td>
                <a href="{!! route('usuarios.edit', [$usuario->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('usuarios.delete', [$usuario->id]) !!}" onclick="return confirm('Are you sure wants to delete this Usuario?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
