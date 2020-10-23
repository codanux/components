@props(['options' => []])

<label {!! $attributes->tag('label')->merge(['class' => 'block font-medium text-sm text-gray-700', 'for' => $attributes->get('name')]) !!}>
    {{ $attributes->get('label') }}
</label>
<div class="inline-block relative w-full">
    <select {!! $attributes->merge(['class' => 'block appearance-none w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none '.($errors->has($attributes->key()) ? config('components.error.class') : ''), 'id' => $attributes->get('name')]) !!}>
        <option></option>
        @foreach($options as $key => $option)
            <option value="{!! $key !!}">{!! $option !!}</option>
        @endforeach
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
</div>

@error($attributes->key())
    <p {{ $attributes->tag('error')->merge(['class' => 'text-sm text-red-600 mt-2']) }}>{{ $message }}</p>
@enderror
