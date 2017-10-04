@section('f_content')

<div class="panel">
    @foreach ($qualifications as $qual)
        <details>
            <summary>
            <ul>
                <li class="titleName"><h6>Winner of</h6></li>
                <li class="titleValue"><h3>{{$qual->title}} Award</h3></li>
                <li></li>
            </ul>
            </summary>
            <div class="content mdl-typography--text-center">
                <h2>{{$qual->winner->name}}</h2>   
                <h6>-- {{$qual->description}} --</h6>
            </div>
        </details>
    @endforeach
</div>

@endsection