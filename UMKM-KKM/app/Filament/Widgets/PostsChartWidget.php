<?php

namespace App\Filament\Widgets;

use App\Models\posts;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class PostsChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Grafik Postingan';

    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        // Get data for the last 7 days
        $data = [];
        $labels = [];
        
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $count = posts::whereDate('created_at', $date)->count();
            
            $data[] = $count;
            $labels[] = $date->format('d M');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Postingan',
                    'data' => $data,
                    'borderColor' => '#8b5cf6',
                    'backgroundColor' => 'rgba(139, 92, 246, 0.1)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
