<?php
namespace Tuyenlaptrinh\LaravelFields\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
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

    public function __construct(
        array $options = [],
        string $name = '',
        string $label = '',
        bool $required = false,
        bool $margin = true,
        string $className = '',
        string $id = '',
        $value = '',
        string $help = '',
        string $default = '',
        string $rootClass = ''
    )
    {
        $this->name = $name;
        $this->options = $options;
        $this->label = $label;
        $this->required = $required;
        $this->className = $className;
        $this->id = empty($id) ? 'field'.uniqid() : $id;
        $this->value = old($this->name,(empty($value) ? $default : $value));
        $this->help = $help;
        $this->default = $default;
        $this->margin = $margin;
        $this->rootClass = $rootClass;

    }

    public function render(): View|Closure|string
    {
        return view('laravel-fields::'.config('fields.library','bootstrap').'.checkbox');
    }
}
