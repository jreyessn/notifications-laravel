<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar los paises, estados y ciudades';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::unprepared(file_get_contents("database/countries-dumps/countries.sql"));
        DB::unprepared(file_get_contents("database/countries-dumps/states.sql"));
        DB::unprepared(file_get_contents("database/countries-dumps/cities.sql"));
    }
}
