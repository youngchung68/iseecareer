@extends('layouts.admin')

@section('content')

    <div class="col-md-3 col-sm-12 ">
        {{--'$user->gravatar  '--}}
        <img src="{!! $user->photo_id ? $user->photo->file : '/uploads/images/default.jpg' !!}" alt="" class="img-responsive img-rounded"  width="300">
    </div>
    
    <div class="col-md-6 col-sm-12">

        <div class="formcontrol">
            <div id="subject">
                <h1>Edit Users</h1>
            </div>
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id] ,'class'=>'form-horizontal', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::text('name',null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::email('email',null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::select('role_id',[''=>'- Choose Options -']+$roles, null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::select('is_active', [1=>'Active', 0=>'Not Active'], null , ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('avatar', 'Avatar:',['class'=>'col-sm-2']) !!}
                <div class="col-sm-10">
                    <div class="btn btn-warning">
                        {!! Form::file('avatar', null, ['class'=>'upload']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:',['class'=>'col-sm-2 ']) !!}

                <div class="col-sm-10">
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="pull-right">
                    {!! Form::submit('Edit User',['class'=>'btn btn-success  btn-lg  btnsubmit']) !!}
                </div>
            </div>
            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete User',['class'=>'btn btn-danger btnsubmit1' ]) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
