<!-- CTA -->
<section id="cta" class="wrapper style4">
    <div class="inner">
        <header class="f3">
            <h2>Let's talk</h2>
            <p>Questions, comments, or just want to say hello, drop us a line and we’ll get back to you as soon as we can.</p>

        </header>
        {{--<ul class="actions vertical">--}}
            {{--<li><a href="#" class="button fit special">Activate</a></li>--}}
            {{--<li><a href="#" class="button fit">Learn More</a></li>--}}
        {{--</ul>--}}
        <div class="innerform">
            <div class="col-md-12">
            {!! Form::open() !!}


            <div class="form-group f1">
                {!! Form::text('fname',null, ['class'=>'form-control', 'placeholder'=>'First Name*']) !!}
            </div>


            <div class="form-group f1">
                 {!! Form::text('lname',null, ['class'=>'form-control','placeholder'=>'Last Name*']) !!}
            </div>

            <div class="form-group f1 f4">
                {!! Form::email('email',null, ['class'=>'form-control','placeholder'=>'Email*']) !!}
            </div>
            <div class="form-group f1 f4">
                 {!! Form::text('phone',null, ['class'=>'form-control','placeholder'=>'Phone*']) !!}
            </div>

            <div class="form-group f2 ">

                {!! Form::select('jobtype',['0' => 'I\'m looking for a job', '1' => 'I\'m  an employer', '2' => 'General inquiry'],null, ['class'=>'form-control','placeholder'=>'- Subject - ']) !!}

            </div>

            <div class="form-group f2">
                {!! Form::textarea('message',null, ['class'=>'form-control','placeholder'=>'Message...', 'rows'=>"6"]) !!}
            </div>
                <div class="form-group f2">
                    {!! Form::submit('Submit',['class'=>'btn btn-primary pull-right']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>