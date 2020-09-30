<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Bank::query()->delete();

        $data = [
            [
               "code" => "002",
               "description" => "Banco Nacional de México, S.A.",
            ], 
            
            [
               "code" => "012",
               "description" => "BBVA Bancomer, S.A.",
            ], 
            [
               "code" => "014",
               "description" => "Banco Santander, S.A.",
            ], 
            [
               "code" => "019",
               "description" => "Banco Nacional del Ejército, Fuerza Aérea y Armada, S.N.C.",
            ], 
            [
               "code" => "021",
               "description" => "HSBC México, S.A.",
            ], 
            [
               "code" => "022",
               "description" => "GE Money Bank, S.A.",
            ], 
            [
               "code" => "030",
               "description" => "Banco del Bajío, S.A.",
            ], 
            [
               "code" => "032",
               "description" => "IXE Banco, S.A.",
            ], 
            [
               "code" => "036",
               "description" => "Banco Inbursa, S.A.",
            ], 
            [
               "code" => "037",
               "description" => "Banco Interacciones, S.A.",
            ], 
            [
               "code" => "042",
               "description" => "Banca Mifel, S.A.",
            ], 
            [
               "code" => "044",
               "description" => "Scotiabank Inverlat, S.A.",
            ], 
            [
               "code" => "058",
               "description" => "Banco Regional de Monterrey, S.A.",
            ], 
            [
               "code" => "059",
               "description" => "Banco Invex, S.A.",
            ], 
            [
               "code" => "060",
               "description" => "Bansi, S.A.",
            ], 
            [
               "code" => "062",
               "description" => "Banca Afirme, S.A. AFIRME R",
            ], 
            [
               "code" => "072",
               "description" => "Banco Mercantil del Norte, S.A. BANORTE R",
            ], 
            [
               "code" => "102",
               "description" => "ABN AMRO Bank México, S.A. ABNAMRO RC",
            ], 
            [
               "code" => "103",
               "description" => "American Express Bank (México), S.A. AMERICAN EXPRESS R",
            ], 
            [
               "code" => "106",
               "description" => "Bank of America México, S.A. BAMSA RC",
            ], 
            [
               "code" => "108",
               "description" => "Bank of Tokyo-Mitsubishi UFJ (México), S.A. TOKYO RC",
            ], 
            [
               "code" => "110",
               "description" => "Banco J.P. Morgan, S.A. JP MORGAN RC",
            ], 
            [
               "code" => "112",
               "description" => "Banco Monex, S.A. BMONEX RC",
            ], 
            [
               "code" => "113",
               "description" => "Banco Ve por Mas, S.A. VE POR MAS R",
            ], 
            [
               "code" => "116",
               "description" => "ING Bank (México), S.A. ING RC",
            ], 
            [
               "code" => "124",
               "description" => "Deutsche Bank México, S.A. DEUTSCHE RC",
            ], 
            [
               "code" => "126",
               "description" => "Banco Credit Suisse (México), S.A. CREDIT SUISSE RC",
            ], 
            [
               "code" => "127",
               "description" => "Banco Azteca, S.A. AZTECA R",
            ], 
            [
               "code" => "128",
               "description" => "Banco Autofin México, S.A. AUTOFIN R",
            ], 
            [
               "code" => "129",
               "description" => "Barclays Bank México, S.A. BARCLAYS RC",
            ], 
            [
               "code" => "130",
               "description" => "Banco Compartamos, S.A. COMPARTAMOS R",
            ], 
            [
               "code" => "131",
               "description" => "Banco Ahorro Famsa, S.A. FAMSA R",
            ], 
            [
               "code" => "132",
               "description" => "Banco Multiva, S.A. BMULTIVA R",
            ], 
            [
               "code" => "133",
               "description" => "Prudencial Bank, S.A. PRUDENTIAL RC",
            ], 
            [
               "code" => "134",
               "description" => "Banco Wal Mart de México Adelante, S.A. WAL-MART R",
            ], 
            [
               "code" => "136",
               "description" => "Banco Regional, S.A. REGIONAL R",
            ], 
            [
               "code" => "137",
               "description" => "BanCoppel, S.A. BANCOPPEL R",
            ], 
            [
               "code" => "138",
               "description" => "Banco Amigo, S.A. AMIGO R",
            ], 
            [
               "code" => "139",
               "description" => "UBS Banco, S.A. UBS BANK R",
            ], 
            [
               "code" => "140",
               "description" => "Banco Fácil, S.A. FÁCIL R",
            ], 
            [
               "code" => "166",
               "description" => "Banco del Ahorro Nacional y Servicios Financieros, S.N.C.",
            ], 

        ];

        foreach ($data as $value) {
           Bank::create($value);
        }

      }
}
