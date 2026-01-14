<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Navigation extends Component
{
    public bool $mobileMenuOpen = false;
    public bool $scrolled = false;

    protected $listeners = ['scroll' => 'handleScroll'];

    public function toggleMobileMenu(): void
    {
        $this->mobileMenuOpen = !$this->mobileMenuOpen;
    }

    public function closeMobileMenu(): void
    {
        $this->mobileMenuOpen = false;
    }

    public function render()
    {
        return view('livewire.partials.navigation');
    }
}
