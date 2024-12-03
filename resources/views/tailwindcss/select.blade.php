@aware(['group' => false])
@if(!$group)
<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label class="mb-1 block cursor-pointer" for="{!! $id !!}">{!! $label !!}</label>
    @endif
    <select
        class="border block rounded w-full p-2.5 @error($name) is-invalid @enderror"
        {!! $attributes !!}
        name="{!! $name !!}{!! $multiple ? '[]':'' !!}"
        {!! $multiple ? 'multiple':''!!}
        id="{!! $id !!}"
        {!! $attributes !!}
    >
        @if(!empty($placeholder))
            <option value="">{!! $placeholder !!}</option>
        @endif
        @if(is_array($options) && count($options))
            @foreach($options as $key=>$option)
                <option value="{!! $key !!}"{!! $key == $value ? ' selected':'' !!}>{!! $option !!}</option>
            @endforeach
        @endif
    </select>
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
