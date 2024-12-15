<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $value;
    public $id;
    public $name;
    public $label;
    public $placeholder;
    public $cols;
    public $rows;


    public function __construct(
        $name,
        $label= '',
        $id = '',
        $placeholder = '', // Значение по умолчанию
        $cols = 30,        // Значение по умолчанию
        $rows = 10,        // Значение по умолчанию
        $value = ''        // Значение по умолчанию
    ) {
        $this->value = $value;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->cols = $cols;
        $this->rows = $rows;
    }

    public function onChange() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.textarea');
    }
}
