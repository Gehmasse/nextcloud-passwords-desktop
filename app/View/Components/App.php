<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public function __construct(public bool $sidebar = true)
    {
        //
    }

    public function render(): View
    {
        return view('components.app');
    }
}
