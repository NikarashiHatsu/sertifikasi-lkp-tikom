<?php

namespace App\Http\Livewire;

use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ChartParticipants extends Component
{
    /** @var string $year */
    public $year;

    /** @var array $data */
    public $data = [];

    /**
     * Listen to the years change.
     *
     * @listener
     *
     * @return void
     */
    public function updatedYear(): void
    {
        $this->_get_chart_data();
        $this->emit('updateChart', $this->data);
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->year = now('Y');
        $this->_get_chart_data();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.chart-participants');
    }

    /**
     * Get the Chart data.
     *
     * @return void
     */
    public function _get_chart_data()
    {
        $months = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];

        $this->data = collect($months)
            ->map(function($month, $index) {
                return [
                    'count' => Participant::query()
                        ->whereYear('created_at', $this->year)
                        ->whereMonth('created_at', $index + 1)
                        ->count(),
                    'month' => $month,
                ];
            })
            ->toArray();
    }
}
