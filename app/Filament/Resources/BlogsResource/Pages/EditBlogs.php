<?php

namespace App\Filament\Resources\BlogsResource\Pages;

use App\Models\Blog;
use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BlogsResource;

class EditBlogs extends EditRecord
{
    protected static string $resource = BlogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function (Blog $record) {
                    // delete single
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                    // delete multiple
                    // if ($record->galery) {
                    //     foreach ($record->galery as $ph) Storage::disk('public/blogs')->delete($ph);
                    // }
                }),
        ];
    }
}
