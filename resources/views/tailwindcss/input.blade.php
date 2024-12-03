@aware(['group' => false])
@if(!$group)
<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label class="mb-1 block cursor-pointer" for="{!! $id !!}">{!! $label !!}</label>
    @endif
    <input class="border w-full px-3 py-2.5 rounded focus:outline-none {!! $className !!} @error($name) is-invalid @enderror"
           type="{!! $type !!}"
           name="{!! $name !!}"
           id="{!! $id !!}"
           placeholder="{!! $placeholder !!}"
           value="{!! $value !!}"
           {!! $required ? 'required':'' !!}
        {!! $attributes !!}
    />
    @if(!$group)
        @error($name)
        <div class="text-red-500 text-sm">{!! $message !!}</div>
        @enderror
        @if(!$errors->has($name) && !empty($help))
            <div class="text-sm mt-1">{!! $help !!}</div>
        @endif
    @endif
@if(!$group)
</div>
@endif
