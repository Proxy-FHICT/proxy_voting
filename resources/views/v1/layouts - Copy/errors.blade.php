<!--// HELP NEEDED-->


@section('errors')

                
            
                <div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
                    <div id="errorflag">
                        {{$errors->count}}
                    </div>
                    <div class="mdl-snackbar__text"></div>
                    <!--@foreach ($errors->all() as $error)
                    <div class="mdl-snackbar__text_error">{{$error}}</div>
                    @endforeach-->
                </div>
<script>
(function() {
  'use strict';
  window['counter'] = 0;
  var errorCount = document.querySelector('#errorflag');
  console.dir(errorCount);
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo-show-toast');
  
    'use strict';
    var data = {message: 'Example Message # ' + ++counter};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  
}());
</script>


@endsection            