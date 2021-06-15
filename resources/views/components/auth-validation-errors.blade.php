@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="invalid-feedback d-block">
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <strong><li>{{ $error }}</li></strong>
                @endforeach
            </ul>
        </div>
    </div>
@endif
