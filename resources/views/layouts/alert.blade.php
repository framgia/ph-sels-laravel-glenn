@if ($message = Session::get('success'))
<div class="row">
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif
