@extends('layouts.admin')


@section('content')


    @if($users ->count())

        <h1>Users</h1>
     <table class="table">
         <thead>
           <tr>
             <th>Id</th>
               <th>Avatar</th>
             <th>Name</th>
             <th>Email</th>
               <th>Role</th>
               <th>Status</th>
               <th>Created_at</th>
               <th>Updated_at</th>
           </tr>
         </thead>
         <tbody>

             @foreach($users as $user)
               <tr>
                 <td>{{ $user->id }}</td>
                 <td><img src="{!! $user->photo_id ? $user->photo->file : $user->gravatar !!}" alt="" height="50"></td>
                   <td><a href="{{ route('admin.users.edit', $user->id) }}"> {{ $user->name }}</a></td>
                 <td>{{ $user->email }}</td>
                   <td>{{ $user->role->name }}</td>
                   <td>{{ $user->is_active == 1 ? 'Active':'Not Active'}}</td>
                   <td>{{ $user->created_at->diffForHumans() }}</td>
                   <td>{{ $user->updated_at->diffForHumans() }}</td>
               </tr>

             @endforeach

         </tbody>
      </table>
    @else

        <h1>No User Available</h1>

    @endif
@endsection