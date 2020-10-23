@props([])

<label {!! $attributes->tag('label')->merge(['class' => 'block font-medium text-sm text-gray-700', 'for' => $attributes->get('name')]) !!}>
    {{ $attributes->get('label') }}
</label>

<textarea {!! $attributes->merge(['class' => 'w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none '.($errors->has($attributes->key()) ? config('components.error.class') : ''), 'id' => $attributes->get('name')]) !!}>{!! old($attributes->key(), $attributes->get('value')) !!}</textarea>

@error($attributes->key())
    <p {{ $attributes->tag('error')->merge(['class' => 'text-sm text-red-600 mt-2']) }}>{{ $message }}</p>
@enderror
