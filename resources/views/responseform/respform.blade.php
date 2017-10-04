@section('response_form')
	{!! Form::open(['url' => '/newvote']) !!}
    {!! Form::token() !!}
    
    <div class="mdl-textfield mdl-js-textfield">
    {!!  Form::email('student_email', '', $attributes =  ['class' => 'mdl-textfield__input', 'id'=>'sample1']) !!}
    <!--{!! Form::text('text', '', ['class' => 'mdl-textfield__input', 'id'=>'sample1']) !!}-->
    <label class="mdl-textfield__label" for="sample1">Your Fontys email...</label>
    </div>
    
    <div class="mdl-textfield mdl-js-textfield">
    {!! Form::text('student_number', '', ['class' => 'mdl-textfield__input', 'id'=>'sample2','pattern'=>'-?[0-9]*(\.[0-9]+)?']) !!}
    <label class="mdl-textfield__label" for="sample2">Your student number...</label>
    <span class="mdl-textfield__error">Not a number!</span>
    </div>

    
    @if(count($errors->all()) > 0)
        @foreach($errors->all() as $error)
        <p>{{$error}}..</p>
        @endforeach
    @endif

    {!! Form::submit('Submit',["class"=>"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"]); !!}
    
    {!! Form::close() !!}
@endsection

<!-- a Form -->
        <!--<form action="{{ url('task') }}" method="POST" class="form-horizontal">-->
            <!--{{ csrf_field() }}-->

            <!-- Task Name -->
            <!--<div class="form-group">-->
                <!--<label for="task" class="col-sm-3 control-label">Task</label>-->

                <!--<div class="col-sm-6">-->
                    <!--<input type="text" name="name" id="task-name" class="form-control">-->
                <!--</div>-->
            <!--</div>-->

            <!-- Add Task Button -->
            <!--<div class="form-group">-->
                <!--<div class="col-sm-offset-3 col-sm-6">-->
                    <!--<button type="submit" class="btn btn-default">-->
                        <!--<i class="fa fa-plus"></i> Add Task-->
                    <!--</button>-->
                <!--</div>-->
            <!--</div>-->
        <!--</form>-->