@foreach($areas as $area)
    <tr>
        <td>{{$area->id}}</td>
        <td>{{$area->nombre}}</td>
        <td>{{$area->direccions->nombre}}</td>
    </tr>
@endforeach
