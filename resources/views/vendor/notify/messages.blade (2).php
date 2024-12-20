<div class="notify">
    @if (session('notify.message'))
        <div class="alert alert-{{ session('notify.type') }}">
            {{ session('notify.message') }}
        </div>
    @endif
</div>
