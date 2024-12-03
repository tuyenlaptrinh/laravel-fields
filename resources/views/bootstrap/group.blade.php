<div class="{!! ($margin ? 'mb-3': '').(!empty($rootClass) ? ' '.$rootClass: '') !!}">
    @if(!empty($label))
        <label class="form-label">{!! $label !!}</label>
    @endif
    <div class="input-group">
        {!! $slot !!}
    </div>
</div>
