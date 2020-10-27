@props(['options' => []])

<label {!! $attributes->tag('label')->merge(['class' => 'block font-medium text-sm text-gray-700', 'for' => $attributes->get('name')]) !!}>
    {{ $attributes->get('label') }}
</label>

<div class="flex">
    @foreach($options as $key => $option)
        <div class="mr-4">
            <input type="radio"
                   {!! $attributes->merge(['id' => 'locale_'.$key , 'value' => $key, 'class' => 'form-radio '.($errors->has($attributes->key()) ? config('components.error.class') : '')]) !!}
            @if(old($attributes->key(), $attributes->get('value')) == $option){{ 'checked' }}@endif>
            <label class="font-medium text-sm text-gray-700" for="locale_{{ $key }}">{{ $option }}</label>
        </div>
    @endforeach
</div>

@error($attributes->key())
    <p {{ $attributes->tag('error')->merge(['class' => 'text-sm text-red-600 mt-2']) }}>{{ $message }}</p>
@enderror
