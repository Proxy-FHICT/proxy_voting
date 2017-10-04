

@section('teacher_list_b')

<ul class="mdl-list">
    @foreach ($teachers as $teacher)
  <li class="mdl-list__item mdl-list__item--two-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>{{$teacher->name}}</span>
      <span class="mdl-list__item-sub-title"><a href="{{$teacher->link}}" target="_blank">more...</a></span>
    </span>
    <span class="mdl-list__item-secondary-action">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-b-option-{{$teacher->id}}">
        <input type="radio" id="list-b-option-{{$teacher->id}}" class="mdl-radio__button" name="teachers" value="{{$teacher->id}}"/>
      </label>
    </span>
  </li>
  @endforeach
<!-- static example
  <li class="mdl-list__item mdl-list__item--three-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">person</i>
      <span>Bob Odenkirk</span>
    </span>
    <span class="mdl-list__item-secondary-action">
      <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option">
        <input type="radio" id="list-option" class="mdl-radio__button" name="options" value="2" />
      </label>
    </span>
  </li>-->

</ul>

@endsection
