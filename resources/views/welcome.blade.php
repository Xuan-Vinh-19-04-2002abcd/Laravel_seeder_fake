<table>
    <tr>
        <th>id </th>
        <th>id </th>
        <th>id </th>
        <th>id </th>
     </tr>
    @if(!@empty($users))
        @foreach ($users as $key => $item )
        <tr>
        <td>{{$item->id_product}} </td>
         <td>{{$item->name_product}} </td>
          <td>{{$item->price_product}} </td>
           <td><img src={{$item->price_product}}/></td>
        </tr>
        @endforeach
    @endif
</table>