@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class = 'alert alert-danger'>
            {{$error}}

        </div>
    @endforeach

@endif

@if(session('succes'))

        <div class = 'alert alert-sucess'>
            {{session('success')}}
            
        </div>

@endif


@if(session('error'))

        <div class = 'alert alert-danager'>
            {{session('error')}}
            
        </div>
@endif