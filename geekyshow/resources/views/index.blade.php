@extends('parent')

@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>

 </tr>
 <a href="{{ route('crud.create') }}" class="btn btn-default">Add Data</a>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
    <a class="btn btn-primary" href="{{ route('crud.edit', $row->id) }}">Edit</a>
    <a class="btn btn-primary" href="{{ route('crud.show', $row->id) }}">Show </a>




    <a class="btn btn-danger" href="{{ route('delete', $row->id) }}">Delete </a>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection