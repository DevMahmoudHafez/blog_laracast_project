@props(['name'])
<div class="mb-6 center">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{$name}}" >
        {{ucwords($name)}}</label>
    <textarea
        class="border border-gray-600 p-2 w-full rounded-xl"
           name="{{$name}}"
           id="{{$name}}"
           required
    {{ $attributes }}
    >{{$slot??old($name)}}
    </textarea>
    <x-form.error name="$name"></x-form.error>
</div>
