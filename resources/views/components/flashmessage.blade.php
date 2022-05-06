
@if(\Session::has('success') || \Session::has('fail'))
<div class='flash_message alert alert-{{ \Session::has("success") ? "success" : "danger" }}'>
    {{ \Session::has('success') ? \Session::get('success') : \Session::get('fail') }}
</div>
@endif