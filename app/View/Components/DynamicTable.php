<?php
namespace App\View\Components;

use Illuminate\View\Component;


use Illuminate\View\View;
class DynamicTable extends Component
{
    public $headers;
    public $donnee;
    public $columns;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers, $donnee, $columns)
    {
        $this->headers = $headers;
        $this->donnee = $donnee;
        $this->columns = $columns;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dynamic-table');
    }
}
