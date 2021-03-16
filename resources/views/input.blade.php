@props(['disabled' => false])
@php
$config = config('components.input');

if ($errors->has($attributes->key())) {
    $config['class'] = $config['class'].' '.$config['class_error'];
}

@endphp

<label {!! $attributes->tag('label')->merge(array_merge($config['label'], ['for' => $attributes->get('name')])) !!}>
    {{ $attributes->get('label') }}
</label>

<input value="{{ old($attributes->key(), $attributes->get('value')) }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $config['class'], 'type'=> 'text', 'id' => $attributes->get('name')]) !!}>


@error($attributes->key())
    <p {{ $attributes->tag('error')->merge($config['error']) }}>{{ $message }}</p>
@enderror

