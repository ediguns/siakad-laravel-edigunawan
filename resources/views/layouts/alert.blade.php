@if ($message = Session::get('success'))
<script>
    swal("Message","{{ Session::get('$message') }}", 'success',{
        button:true,
        button:"OK",
        timer:3000,
    });
</script>
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>x</span>
        </button>
        <p>{{ $message }}</p>
    </div>
</div>
@endif
