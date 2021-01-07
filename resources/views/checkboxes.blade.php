@props(['options' => []])

<label {!! $attributes->tag('label')->merge(['class' => 'block font-medium text-sm text-gray-700', 'for' => $attributes->get('name')]) !!}>
    {{ $attributes->get('label') }}
</label>

<div class="flex">
    @foreach($options as $key => $option)
        <div class="mr-4">
            <input type="checkbox"
                {!! $attributes->merge(['id' => 'locale_'.$key , 'value' => $key, 'class' => 'form-checkbox '.($errors->has($attributes->key()) ? config('components.field.error.class') : '')]) !!}
            @if(old($attributes->key(), $attributes->get('value')) == $option){{ 'checked' }}@endif>
            <label class="font-medium text-sm text-gray-700" for="locale_{{ $key }}">{{ $option }}</label>
        </div>
    @endforeach
</div>

@error($attributes->key())
    <p {{ $attributes->tag('error')->merge(config('components.error')) }}>{{ $message }}</p>
@enderror
