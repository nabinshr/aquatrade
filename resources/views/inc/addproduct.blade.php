@if(count($errors)>0){
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$erro}}
        </div>
        @endforeach
    @endif
@if(session('sucess'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif