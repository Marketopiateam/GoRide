<?php

namespace App\Http\Livewire\IntercityService;

use App\Models\IntercityService;
use Livewire\Component;

class Create extends Component
{
    public IntercityService $intercityService;

    public function mount(IntercityService $intercityService)
    {
        $this->intercityService             = $intercityService;
        $this->intercityService->enable     = false;
        $this->intercityService->offer_rate = false;
    }

    public function render()
    {
        return view('livewire.intercity-service.create');
    }

    public function submit()
    {
        $this->validate();

        $this->intercityService->save();

        return redirect()->route('admin.intercity-services.index');
    }

    protected function rules(): array
    {
        return [
            'intercityService.enable' => [
                'boolean',
            ],
            'intercityService.image' => [
                'string',
                'nullable',
            ],
            'intercityService.km_charge' => [
                'string',
                'nullable',
            ],
            'intercityService.admin_commission' => [
                'string',
                'nullable',
            ],
            'intercityService.offer_rate' => [
                'boolean',
            ],
            'intercityService.name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
