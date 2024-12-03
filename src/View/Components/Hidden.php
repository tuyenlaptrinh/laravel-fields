<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hidden extends Component
{
    public string $name;
    public string $className;
    public string $id;
    public $value;
    public string $default;

    public function __construct(
        string $name = '',
        string $className = '',
        string $id = '',
        $value = '',
        string $default = ''
    )
    {
        $this->name = $name;
        $this->className = $className;
        $this->id = empty($id) ? 'field'.uniqid() : $id;
        $this->value = old($this->name,(empty($value) ? $default : $value));
        $this->default = $default;

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.hidden');
    }
}
