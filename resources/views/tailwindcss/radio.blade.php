@aware(['group' => false])
@if(!$group)
    <div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
@endif
    @if(!empty($label) && !$group)
        <label class="mb-1 block cursor-pointer">{!! $label !!}</label>
    @endif
    @if(is_array($options) && count($options))
        <div class="flex items-centers">
        @foreach($options as $key=>$option)
            <div class="flex items-center me-3">
                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                       type="radio"
                       name="{!! $name !!}"
                       id="{!! $id !!}-{!! $key !!}"
                       value="{!! $key !!}"
                       {!! $value == $key ? 'checked':'' !!}
                    {!! $required ? 'required':'' !!}
                />
                <label class="ms-2 cursor-pointer" for="{!! $id !!}-{!! $key !!}">{!! $option !!}</label>
            </div>
        @endforeach
        </div>
    @endif
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
