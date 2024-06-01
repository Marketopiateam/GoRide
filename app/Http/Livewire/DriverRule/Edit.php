<?php

namespace App\Http\Livewire\DriverRule;

use App\Models\DriverRule;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public DriverRule $driverRule;

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

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $this->driverRule->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    public function mount(DriverRule $driverRule)
    {
        $this->driverRule       = $driverRule;
        $this->mediaCollections = [

            'driver_rule_image' => $driverRule->image,
        ];
    }

    public function render()
    {
        return view('livewire.driver-rule.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->driverRule->save();
        $this->syncMedia();

        return redirect()->route('admin.driver-rules.index');
    }

    protected function rules(): array
    {
        return [
            'driverRule.enable' => [
                'boolean',
            ],
            'driverRule.is_deleted' => [
                'boolean',
            ],
            'driverRule.name' => [
                'string',
                'nullable',
            ],
            'mediaCollections.driver_rule_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.driver_rule_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
