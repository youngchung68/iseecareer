@extends('layouts.admin')


@section('content')
<div class="col-md-6 col-sm-12">


        <div class="formcontrol">
            <div id="subject">
                <h1>Create Users</h1>
            </div>
            {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store' ,'class'=>'form-horizontal', 'files'=>true]) !!}

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
                    {!! Form::select('is_active', [1=>'Active', 0=>'Not Active'], 0, ['class'=>'form-control']) !!}
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
                    {!! Form::submit('Create User',['class'=>'btn btn-primary  btn-lg  btnsubmit']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
</div>
@endsection
