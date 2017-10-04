
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
{!! Form::open(['url' => '/record']) !!}
<!-- The techers list -->
<ul class="mdl-list">
    @foreach ($teachers as $teacher)
  <li class="mdl-list__item mdl-list__item--two-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>{{$teacher->name}}</span>
      <span class="mdl-list__item-sub-title"><a href="{{$teacher->link}}" target="_blank">more...</a></span>
    </span>
    <span class="mdl-list__item-secondary-action">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-a-option-{{$teacher->id}}">
        <input type="radio" id="list-a-option-{{$teacher->id}}" class="mdl-radio__button" name="teachers" value="{{$teacher->id}}"/>
      </label>
    </span>
  </li>
  @endforeach
</ul>
{!! Form::submit('Continue',["class"=>"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"]); !!}
{!! Form::close() !!}

@endsection

