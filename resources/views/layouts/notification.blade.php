@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       <h4> <i class="fas fa-check-circle"></i>  {{ session('success') }}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <h4><i class="fas fa-times-circle"></i> {{ session('error') }}</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
