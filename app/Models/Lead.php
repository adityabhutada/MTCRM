<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'status',
    ];

    protected static function booted(): void
    {
        static::updated(function (self $lead) {
            if ($lead->isDirty('status') && in_array($lead->status, ['Qualified', 'Sale Made'])) {
                $webhook = config('services.slack.webhook_url');
                if ($webhook) {
                    Http::post($webhook, [
                        'text' => "Lead {$lead->id} status changed to {$lead->status}",
                    ]);
                }
            }
        });
    }
}
