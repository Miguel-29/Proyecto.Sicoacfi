<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\asset;

use Barryvdh\DomPDF\Facade as PDF;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Reporte a inicio de mes de los activos fijos dados de baja el mes anterior
        $schedule->call(function () {
            $fecha = new Carbon('first day of last month');
            $fecha->toDateString();
            $fecha->format('Y-m-d');
            $fechados = new Carbon('last day of last month');
            $fechados->toDateString();
            $fechados->format('Y-m-d');
            $asset = asset::whereBetween('deleted_at', [$fecha, $fechados])
            ->orderBy('trademark','asc')
            ->get();
            $pdf = \PDF::loadView('reportes.activosFecha', compact('asset','fecha','fechados'));
            return $pdf->download('ReporteActivosFijos.pdf');  

        })->monthly();

        // Reporte a inicio de mes de los activos fijos agregados el mes anterior
        $schedule->call(function () {
            $fecha = new Carbon('first day of last month');
            $fecha->toDateString();
            $fecha->format('Y-m-d');
            $fechados = new Carbon('last day of last month');
            $fechados->toDateString();
            $fechados->format('Y-m-d');
            $asset = asset::whereBetween('created_at', [$fecha, $fechados])
            ->orderBy('trademark','asc')
            ->get();
            $pdf = \PDF::loadView('reportes.activosFecha', compact('asset','fecha','fechados'));
            return $pdf->download('ReporteActivosFijos.pdf');
        })->monthly();
              
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
