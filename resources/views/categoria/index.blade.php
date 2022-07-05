@foreach($categorias as $categoria)
    <tr>
        <td>{{$categoria->id}} -</td>
        <td>{{$categoria->alias}} -</td>
        <td>{{$categoria->areas->alias}} -</td>
        <td>{{$categoria->areas->direccions->alias}} -</td>
    </tr>
    <br>
@endforeach
