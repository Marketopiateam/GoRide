<?php

namespace App\Jobs;

use App\Models\Marketopia\MarketopiaState;
use Datlechin\GoogleTranslate\Facades\GoogleTranslate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class TranslateStateName implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function handle()
    {
        try {
            // Translate state name
            $result = GoogleTranslate::withSource('en')
                ->withTarget('ar')
                ->translate($this->state['name']);

            // Update the state name in the database
            MarketopiaState::find($this->state['id'])->update([
                'ar' => [
                    'name' => $result->getAlternativeTranslations()[0],
                ]
            ]);
        } catch (\Exception $e) {
            // Log any errors for debugging
            Log::error("Failed to translate and update state: " . $e->getMessage());
        }
    }
}
