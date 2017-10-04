@section('f_content')



<div class="f_content mdl-typography--text-center" style="margin-left:20px; margin-right:20px; margin-bottom:40px;">
{!! Form::open(['url' => '/voting']) !!}
    {!! Form::token() !!}
        <br/>
        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">E</span>
            <span class="mdl-chip__text"> - mail:</span>
        </span>
        <div class="mdl-textfield mdl-js-textfield">
            {!!  Form::email('student_email', '', $attributes =  ['class' => 'mdl-textfield__input', 'id'=>'sample1']) !!}
            <!--{!! Form::text('text', '', ['class' => 'mdl-textfield__input', 'id'=>'sample1']) !!}-->
            <label class="mdl-textfield__label" for="sample1">Your E-mail...</label>
        </div> 
        <br/> 

        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">N</span>
            <span class="mdl-chip__text">umber:</span>
        </span>

        <div class="mdl-textfield mdl-js-textfield">
            {!! Form::text('student_number', '', ['class' => 'mdl-textfield__input', 'id'=>'sample2','pattern'=>'-?[0-9]*(\.[0-9]+)?']) !!}
            <label class="mdl-textfield__label" for="sample2">Your Student Number...</label>
            <span class="mdl-textfield__error">Not a number!</span>
        </div>
        <br/>
        <br/>
        @if(count($errors->all()) > 0)
            @foreach($errors->all() as $error)
                <span class="mdl-color-text--pink-A400	"><p>{{$error}}..</p></span>
            @endforeach
        @endif
   {!! Form::submit('Proceed',["class"=>"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"]); !!}
{!! Form::close() !!}
<br/>
<span class="mdl-color-text--pink-A400	"><p>*: we use emails and student numbers only for verification, the votes remain anonymous :)</p></span>
</div>
@endsection
