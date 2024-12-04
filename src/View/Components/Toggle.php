<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Toggle extends Component
{
    public string $name;
    public string $label;
    public bool $required;
    public bool $margin;
    public string $className;
    public string $id;
    public $value;
    public string $default;
    public string $help;
    public string $rootClass;
    public bool $grid;
    public string $size;

    public function __construct(
        string $name = '',
        string $label = '',
        bool $required = false,
        bool $margin = true,
        string $className = '',
        string $id = '',
        $value = '',
        string $help = '',
        string $default = '',
        string $rootClass = '',
        bool $grid = false,
        string $size = '9'
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->className = $className;
        $this->id = empty($id) ? 'field'.uniqid() : $id;
        $this->value = old($this->name,(empty($value) ? $default : $value));
        $this->help = $help;
        $this->default = $default;
        $this->margin = $margin;
        $this->rootClass = $rootClass;
        $this->grid = $grid;
        $this->size = $size;

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.toggle');
    }
}
