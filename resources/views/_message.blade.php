<div class="clear-both"></div>

@if(!empty(session('success')))
    <div class="alert alert-success alert-dismissibile face in" role="alert">
        {{session('success')}}
    </div>
</div>
@endif


@if(!empty(session('error')))
    <div class="alert alert-danger alert-dismissibile face in" role="alert">
    {{session('error')}}
    </div>

@endif