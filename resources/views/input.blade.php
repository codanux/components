@props(['disabled' => false])

<label {!! $attributes->tag('label')->merge(['class' => 'block font-medium text-sm text-gray-700', 'for' => $attributes->get('name')]) !!}>
    {{ $attributes->get('label') }}
</label>

<input value="{{ old($attributes->key(), $attributes->get('value')) }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 block w-full form-input rounded-md shadow-sm '.($errors->has($attributes->key()) ? config('components.field.error.class') : ''), 'id' => $attributes->get('name')]) !!}>


@error($attributes->key())
    <p {{ $attributes->tag('error')->merge(config('components.error')) }}>{{ $message }}</p>
@enderror

