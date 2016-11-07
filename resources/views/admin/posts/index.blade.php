@extends('layouts.admin')


@section('content')



    @if($posts->count())

        <h1>Posts</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>title</th>
                <th>slug</th>
                <th>body</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img src="{!! $post->photo_id ? $post->photo->file : 'http://placehold.it/400x400' !!}" alt="" height="50"></td>
                    {{--<td><img src="{!! $user->photo_id ? $user->photo->file : $user->gravatar !!}" alt="" height="50"></td>--}}
                    {{--<td><a href="{{ route('admin.users.edit', $user->id) }}"> {{ $user->name }}</a></td>--}}
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category ? $post->category->name : 'Uncategorized'  }}</td>


                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug}}</td>
                    <td>{{ str_limit(strip_tags($post->body), 40) }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                {{ $posts->render() }}
            </div>
        </div>
    @else

        <h1>No Post Available</h1>

    @endif
@endsection