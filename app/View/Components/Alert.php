<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'info',
        public ?string $message = null,
        public ?string $title = null,
    ) {}

    /**
     * Determine the CSS class based on the alert type using PHP match expression.
     */
    public function cssClass(): string
    {
        return match ($this->type) {
            'success' => 'alert-success',
            'warning' => 'alert-warning',
            'danger'  => 'alert-danger',
            default   => 'alert-info',
        };
    }

    /**
     * Get a visual indicator symbol for the alert.
     */
    public function icon(): string
    {
        return match ($this->type) {
            'success' => '✓',
            'warning' => '⚠',
            'danger'  => '✕',
            default   => 'ℹ',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
