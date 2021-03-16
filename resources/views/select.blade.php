@props(['options' => []])
@php
    $config = config('components.select');
    if ($errors->has($attributes->key())) {
        $config['class'] = $config['class'].' '.$config['class_error'];
    }
@endphp

<label {!! $attributes->tag('label')->merge(array_merge($config['label'], ['for' => $attributes->get('name')])) !!}>
    {{ $attributes->get('label') }}
</label>

<div class="inline-block relative w-full">
    <select {!! $attributes->merge(['class' => $config['class'], 'id' => $attributes->get('name')]) !!}>
        <option></option>
        @foreach($options as $key => $option)
            <option value="{!! $key !!}">{!! $option !!}</option>
        @endforeach
    </select>
</div>


@error($attributes->key())
    <p {{ $attributes->tag('error')->merge($config['error']) }}>{{ $message }}</p>
@enderror
