<?php

namespace App\View\Components;

use Closur;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $session;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$session)
    {
      $this->type    = $type;
      $this->session = $session;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
