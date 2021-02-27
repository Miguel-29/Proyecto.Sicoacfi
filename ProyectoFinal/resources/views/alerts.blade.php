@if ($message = Session::get('success'))
<div class="alert alert-success alert-block alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert">×</button>
    {{ $message }}
</div>
@endif 
@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert">×</button>
    {{ $message }}
</div>
@endif