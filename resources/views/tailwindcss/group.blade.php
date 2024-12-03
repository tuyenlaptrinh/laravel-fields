<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
    @if(!empty($label))
        <label class="mb-1 block cursor-pointer">{!! $label !!}</label>
    @endif
    <div class="flex">
        {!! $slot !!}
    </div>
</div>
