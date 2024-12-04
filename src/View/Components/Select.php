<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
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
    public array $options;
    public string $rootClass;
    public $placeholder;
    public bool $multiple;
    public bool $grid;
    public string $size;

    public function __construct(
        string $name = '',
        string $label = '',
        bool $required = false,
        bool $margin = true,
        $placeholder = '',
        string $className = '',
        string $id = '',
        $value = '',
        string $help = '',
        string $default = '',
        string $rootClass = '',
        bool $multiple = false,
        string $size = '9',
        bool $grid = false,
        array $options = []
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->className = $className;
        $this->id = empty($id) ? 'field'.uniqid() : $id;
        $this->value = old($this->name,(empty($value) ? $default : $value));
        $this->help = $help;
        $this->default = $default;
        $this->margin = $margin;
        $this->rootClass = $rootClass;
        $this->options = $options;
        $this->multiple = $multiple;
        $this->grid = $grid;
        $this->size = $size;

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.select');
    }
}
