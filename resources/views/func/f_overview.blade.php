
@section('f_content')

<!-- For the errors -->
<div class="mdl-typography--text-center">
        @if(count($errors->all()) > 0)
            <span class="mdl-color-text--pink-A400"><h5>Oups..</h5></span>
            @foreach($errors->all() as $error)
                <span class="mdl-color-text--pink-A400	"><h6>{{$error}}..</h6></span>
            @endforeach
        @endif
</div>
<div class="mdl-typography--text-center"> 
{!! Form::open(['url' => '/submit']) !!}
<!--delete this span once done-->
    <!--<span class="mdl-color-text--pink-A400">Building in progress...</span>-->
<!-- this one above needs to go -->
    <br/>
    <h5>Your Info:</h5>
    <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">E</span>
            <span class="mdl-chip__text">{{$student->studentEmail}}</span>
        </span>
        <span class="mdl-chip mdl-chip--contact">
            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">N</span>
            <span class="mdl-chip__text">{{$student->studentNr}}</span>
        </span>
        <br/>
         <h5>Your Responses:</h5>
         @for ($i = 0; $i < count($votes); $i++)

            <span class="mdl-chip mdl-chip--contact">
            <span id="abbr{{$i}}" class="mdl-chip__contact mdl-color--teal mdl-color-text--white">{{substr($quals[$i]->title,0,1)}}</span>
            <span class="mdl-chip__text">{{$votes[$i]['teacher']->name}} </span>
            <a href="/qual/{{$votes[$i]['vote']->q_id}}" class="mdl-chip__action"><i class="material-icons">replay</i></a>

            <!--tooltips-->
             <div class="mdl-tooltip" data-mdl-for="abbr{{$i}}">
                {{$quals[$i]->title}}
            </div>
            
            <br/>
            <br/>
        </span>
        
            <!--<h6>Vote:</h6>{{$votes[$i]['vote']}}-->
    <!--<div class="mdl-card">
  <div class="mdl-card__title">
    <!--<h6></h6>{{print_r($votes[$i])}}-->
    <!--<h2 class="mdl-card__title-text">{{$quals[$i]->title}}</h2>-->
  <!--</div>-->
  <!--<div class="mdl-card__supporting-text">-->
    <!--<b>Teacher:</b> {{$votes[$i]['teacher']->name}}-->
  <!--</div>
  <div class="mdl-card__actions">
    <a href="/qual/{{$votes[$i]['vote']->q_id}}">Change</a>
  </div>
</div>-->
    
         @endfor
         <br/>
    <!--<h6>{{$student->studentEmail}}</h6>-->
    <!--<h6>{{$student->studentNr}}</h6>-->
{!! Form::submit('Submit',["class"=>"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"]); !!}

            <br/>
            <br/>
{!! Form::close() !!}
</div>
@endsection
