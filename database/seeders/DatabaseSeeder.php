<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();

        $this->call([
            PermissionsTableSeeder::class,
            UserSeeder::class,
            AccountsGroupsSeeder::class,
            AssociatedAccountsSeeder::class,
            BankCountriesSeeder::class,
            BanksSeeder::class,
            BusinessTypesSeeder::class,
            CurrenciesSeeder::class,
            DocumentsSeeder::class,
            FixedAssetsSeeder::class,
            FreightTransportsSeeder::class,
            FuelsSeeder::class,
            IntercompaniesSeeder::class,
            LeasesSeeder::class,
            MaintenancesSeeder::class,
            OfficialsEmployeesSeeder::class,
            OrganizationsSeeder::class,
            PaymentConditionsSeeder::class,
            PaymentMethodsSeeder::class,
            ProfessionalServicesSeeder::class,
            RawAnotherMaterialsSeeder::class,
            RawMaterialsSeeder::class,
            RawMeatMaterialsSeeder::class,
            RetentionCountriesSeeder::class,
            RetentionIndicatorsSeeder::class,
            RetentionTypesSeeder::class,
            ServicesSeeder::class,
            SocietiesSeeder::class,
            TaxesDutiesAccesoriesSeeder::class,
            ToleranceGroupsSeeder::class,
            FileSeeder::class,
            TreatmentsSeeder::class,
        ]);

        // Schema::enableForeignKeyConstraints();
    }
}
