
<table border='1' cellspacing="0";>
<tr>
 
  <th>{{ trans('ID') }}</th>
  <th>{{ trans('firstName') }}</th>
  <th>{{ trans('lastName') }}</th>
  <th>{{ trans('email') }}</th>
  <th>{{ trans('subject') }}</th>
  <th>{{ trans('message') }}</th>
  <th>{{ trans('delete') }}</th>
  <th>{{ trans('edit') }}</th>
  
</tr>

@foreach($Contacts as $member)
<tr><td>{{$member['id']}}</td>
<td>{{$member['firstname']}}</td>
<td>{{$member['lastname']}}</td>
<td>{{$member['email']}}</td>
<td>{{$member['subject']}}</td>
<td>{{$member['message']}}</td>

<td><a href="{{'/delete/'.$member['id']}}">delete</a></td>
<td><a href="{{'/edit/' .$member['id']}}">edit</a></td>
<!-- <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Edit') }}" href="{{'/edit/' .$member['id']}}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 

 <a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" href="delete/{{ $member->id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a> -->

</tr>

@endforeach()
</table>