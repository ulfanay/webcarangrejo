<?php

namespace App\Filament\Widgets;

use App\Models\posts;
use App\Models\categories;
use App\Models\albums;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', posts::count())
                ->description('Jumlah semua postingan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
                
            Stat::make('Total Kategori', categories::count())
                ->description('Jumlah kategori yang tersedia')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info')
                ->chart([3, 5, 2, 6, 4, 8, 5]),
                
            Stat::make('Total Album', albums::count())
                ->description('Jumlah album foto')
                ->descriptionIcon('heroicon-m-photo')
                ->color('warning')
                ->chart([2, 5, 4, 6, 7, 5, 8]),
                
            Stat::make('Pesan Masuk', Contact::count())
                ->description('Jumlah pesan dari pengunjung')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('danger')
                ->chart([1, 3, 5, 2, 4, 6, 8]),
        ];
    }
}
