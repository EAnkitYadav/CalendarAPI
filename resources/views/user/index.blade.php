@extends('layouts.app')
@section('content')
<div class="container">
<div class="mb-1">
<a href="{{route('users.create')}}" class="btn btn-success">Add New User</a>
</div>
<table class="table table-borderd shadow text-center table-stripes">
<thead>
<tr>
{{-- <td>  ID </td> --}}
<td> Name </td>
<td>  Email </td>
<td> Password </td>
<td> UserType </td>
</tr>
</thead>
@foreach($users as $user)
        <tr>
            {{-- <td>{{$user->id}}</td> --}}
            <td>
            <a href="{{ route('users.show',  $user->id)}}">{{$user->name}}</a>
            </td>
           <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->user_type}}</td>
          <td >
            <form action="{{ route('users.edit',  $user->id)}}" method="GET">
             @csrf
             <button class="btn btn-primary" type="submit">Edit</button>
           </form>
         </td>
          <td >
            <form action="{{ route('users.show',  $user->id)}}" method="GET">
             @csrf
             <button class="btn btn-success" type="submit">Show</button>
           </form>
     </td>
     <td >
        <form action="{{ route('users.destroy', $user->id)}}" method="post">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger" type="submit">Delete</button>
       </form>
 </td>
  </tr>
@endforeach
</tbody>
</table>
@endsection


