<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Blog;
use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()

                ->after(function (Blog $record) {
                    // delete single
                    if ($record->image) {
                        Storage::disk('public/blogs')->delete($record->image);
                    }
                    // delete multiple
                    // if ($record->galery) {
                    //     foreach ($record->galery as $ph) Storage::disk('public/blogs')->delete($ph);
                    // }
                }),
        ];
    }
}






// protected function getActions(): array
// {
//    return [
//      Actions\DeleteAction::make()
//        ->after(function (YourModel $record) {
//           // delete single
//           if ($record->photo) {
//              Storage::disk('public')->delete($record->photo);
//           }
//           // delete multiple
//           if ($record->galery) {
//              foreach ($record->galery as $ph) Storage::disk('public')->delete($ph);
//           }
//        }),
//     ];
// }