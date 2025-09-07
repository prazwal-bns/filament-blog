<?php

namespace Firefly\FilamentBlog\Resources\ShareSnippets\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Firefly\FilamentBlog\Resources\ShareSnippets\ShareSnippetResource;
use Illuminate\Contracts\Support\Htmlable;

class ListShareSnippets extends ListRecords
{
    protected static string $resource = ShareSnippetResource::class;

    protected ?string $subheading = 'Please visit https://platform.sharethis.com to get the script code and html code for sharing snippets';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getTableDescription(): string|Htmlable|null
    {
        return 'Share Snippets';
    }
}
