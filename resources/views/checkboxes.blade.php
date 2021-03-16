@props(['options' => []])
@php
    $config = config('components.checkboxes');
    if ($errors->has($attributes->key())) {
        $config['class'] = $config['class'].' '.$config['class_error'];
    }
@endphp

<label {!! $attributes->tag('label')->merge(array_merge($config['label'], ['for' => $attributes->get('name')])) !!}>
    {{ $attributes->get('label') }}
</label>

<div class="flex">
    @foreach($options as $key => $option)
        <div class="mr-4">
            <input type="checkbox"
                {!! $attributes->merge(['id' => $attributes->get('name').'_'.$key , 'value' => $key, 'class' => $config['class'],]) !!}
            @if(old($attributes->key(), $attributes->get('value')) == $option){{ 'checked' }}@endif>
            <label class="font-medium text-sm text-gray-700" for="{{ $attributes->get('name').'_'.$key }}">{{ $option }}</label>
        </div>
    @endforeach
</div>

@error($attributes->key())
    <p {{ $attributes->tag('error')->merge($config['error']) }}>{{ $message }}</p>
@enderror
