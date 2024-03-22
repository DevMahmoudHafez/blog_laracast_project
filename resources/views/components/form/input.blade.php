@props(['name','type'=>'text'])
<div class="mb-6 center">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{$name}}" >
        {{ucwords($name)}}</label>
    <input class="border border-gray-600 p-2 w-full rounded-xl"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           {{ $attributes(['value'=>old($name)]) }}


           required>
    <x-form.error name="$name"></x-form.error>
</div>
