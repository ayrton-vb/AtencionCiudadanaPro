@foreach($areas as $area)
    <tr>
        <td>{{$area->id}}</td>
        <td>{{$area->alias}}</td>
        <td>{{$area->direccions->alias}}</td>
    </tr>
    <br>
@endforeach
