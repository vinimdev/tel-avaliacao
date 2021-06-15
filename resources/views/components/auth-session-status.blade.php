@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success']) }}>
        <strong>Aviso!</strong><br>
        {{ $status }}
    </div>
@endif
