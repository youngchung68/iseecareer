@extends('layouts.admin')


@section('content')
    <div class="col-md-6 col-sm-12">


        <div class="formcontrol">
            <div id="subject">
                <h1>Create Posts</h1>
            </div>
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store' ,'class'=>'form-horizontal', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::text('title',null, ['class'=>'form-control']) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('category_id', 'Category:',['class'=>'col-sm-2 ']) !!}
                <div class="col-sm-10">
                    {!! Form::select('category_id',[''=>'- Choose Options -']+$categories, null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:',['class'=>'col-sm-2']) !!}
                <div class="col-sm-10">
                    <div class="btn btn-warning">
                        {!! Form::file('photo_id', null, ['class'=>'upload']) !!}
                    </div>
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('body', 'Description:',['class'=>'col-sm-2 ']) !!}

                <div class="col-sm-10">
                    {!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>5]) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="pull-right">
                    {!! Form::submit('Create Post',['class'=>'btn btn-primary  btn-lg  btnsubmit']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
