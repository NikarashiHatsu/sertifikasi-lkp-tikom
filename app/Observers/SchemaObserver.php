<?php

namespace App\Observers;

use App\Models\Participant;
use App\Models\Schema;

class SchemaObserver
{
    /**
     * Handle the Schema "created" event.
     */
    public function created(Schema $schema): void
    {
        //
    }

    /**
     * Handle the Schema "updated" event.
     */
    public function updated(Schema $schema): void
    {
        //
    }

    /**
     * Handle the Schema "deleted" event.
     */
    public function deleted(Schema $schema): void
    {
        $schema->participants()->delete();
    }

    /**
     * Handle the Schema "restored" event.
     */
    public function restored(Schema $schema): void
    {
        $schema->participants()->restore();
    }

    /**
     * Handle the Schema "force deleted" event.
     */
    public function forceDeleted(Schema $schema): void
    {
        //
    }
}
