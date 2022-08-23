<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\User;
use Auth;

class DashboardListing extends Component
{

    public $totalUsers = 0;
    // public $currentAnnualEarning = 0;
    // public $currentMonthOrderNew = 0;
    // public $currentMonthOrderFinished = 0;


    public function mount()
    {
        $this->totalUsers = User::where('id' ,'!=' ,Auth::user()->id)->count();
        
    }

    public function render()
    {
        return view('livewire.backend.dashboard-listing');
    }

    
}
