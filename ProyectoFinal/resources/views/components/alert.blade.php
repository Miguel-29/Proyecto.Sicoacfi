@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <label class="text-danger">{{ $error }}</label>
        @endforeach
    </div>
@endif