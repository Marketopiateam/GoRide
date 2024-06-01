<?php

namespace App\Http\Livewire\IntercityService;

use App\Models\IntercityService;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public IntercityService $intercityService;

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

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $this->intercityService->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    public function mount(IntercityService $intercityService)
    {
        $this->intercityService = $intercityService;
        $this->mediaCollections = [

            'intercity_service_image' => $intercityService->image,
        ];
    }

    public function render()
    {
        return view('livewire.intercity-service.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->intercityService->save();
        $this->syncMedia();

        return redirect()->route('admin.intercity-services.index');
    }

    protected function rules(): array
    {
        return [
            'intercityService.enable' => [
                'boolean',
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
            'mediaCollections.intercity_service_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.intercity_service_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
