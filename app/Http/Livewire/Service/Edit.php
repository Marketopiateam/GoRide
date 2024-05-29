<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Edit extends Component
{
    public Service $service;

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.service.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->service->save();

        return redirect()->route('admin.services.index');
    }

    protected function rules(): array
    {
        return [
            'service.admin_commission' => [
                'string',
                'nullable',
            ],
            'service.enable' => [
                'boolean',
            ],
            'service.image' => [
                'string',
                'nullable',
            ],
            'service.intercity_type' => [
                'boolean',
            ],
            'service.km_charge' => [
                'string',
                'nullable',
            ],
            'service.offer_rate' => [
                'string',
                'nullable',
            ],
            'service.title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
