<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Service $service;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $this->service->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    public function mount(Service $service)
    {
        $this->service                 = $service;
        $this->service->enable         = false;
        $this->service->intercity_type = false;
    }

    public function render()
    {
        return view('livewire.service.create');
    }

    public function submit()
    {
        $this->validate();

        $this->service->save();
        $this->syncMedia();

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
            'mediaCollections.service_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.service_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
