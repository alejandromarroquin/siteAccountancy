<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddressSeeder::class);
        $this->call(PhonesSeeder::class);
        $this->call(EmailSeeder::class);
        $this->call(ContactlocationSeeder::class);
        $this->call(TaxinformationSeeder::class);
        $this->call(CompanieSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PersonalinformationsSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(AccountancySeeder::class);
        $this->call(PurchaserequestSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(AccountcatalogSeeder::class);
        $this->call(AccountancycatalogsSeeder::class);
        $this->call(UnitmeasurementSeeder::class);
        $this->call(MethodpaymentSeeder::class);
        $this->call(WaytopaySeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(StatementresultSeeder::class);
        $this->call(BalancesheetSeeder::class);
        $this->call(PeriodpoliciesSeeder::class);
        $this->call(CheckbalanceSeeder::class);

    }
}
