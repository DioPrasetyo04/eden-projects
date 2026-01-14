<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Product;
use App\Models\MembershipPlan;
use App\Models\Testimonial;
use App\Models\ServiceCategory;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'services' => Service::with('category')
                ->where('is_active', true)
                ->where('is_featured', true)
                ->orderBy('created_at', 'desc')
                ->take(6)
                ->get(),
            'products' => Product::with(['category', 'images'])
                ->where('is_active', true)
                ->where('is_featured', true)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get(),
            'membershipPlans' => MembershipPlan::with('benefits')
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->take(3)
                ->get(),
            'testimonials' => Testimonial::where('is_approved', true)
                ->orderBy('created_at', 'desc')
                ->take(6)
                ->get(),
            'serviceCategories' => ServiceCategory::where('is_active', true)
                ->orderBy('sort_order')
                ->get(),
        ])->layout('components.layouts.app');
    }
}
