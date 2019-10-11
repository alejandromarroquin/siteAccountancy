<?php

use Illuminate\Database\Seeder;

class AccountcatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'100',
        'code'=>'100.01',
        'accountName'=>'Activo a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'101',
        'level'=>'2',
        'code'=>'101.01',
        'accountName'=>'Caja y efectivo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'102',
        'level'=>'2',
        'code'=>'102.01',
        'accountName'=>'Bancos nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'102',
        'level'=>'2',
        'code'=>'102.02',
        'accountName'=>'Bancos extranjeros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'103',
        'level'=>'2',
        'code'=>'103.01',
        'accountName'=>'Inversiones temporales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'103',
        'level'=>'2',
        'code'=>'103.02',
        'accountName'=>'Inversiones en fideicomisos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'103',
        'level'=>'2',
        'code'=>'103.03',
        'accountName'=>'Otras inversiones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'104',
        'level'=>'2',
        'code'=>'104.01',
        'accountName'=>'Otros instrumentos financieros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'105',
        'level'=>'2',
        'code'=>'105.01',
        'accountName'=>'Clientes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'105',
        'level'=>'2',
        'code'=>'105.02',
        'accountName'=>'Clientes extranjeros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'105',
        'level'=>'2',
        'code'=>'105.03',
        'accountName'=>'Clientes nacionales parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'105',
        'level'=>'2',
        'code'=>'105.04',
        'accountName'=>'Clientes extranjeros parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.01',
        'accountName'=>'Cuentas y documentos por cobrar a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.02',
        'accountName'=>'Cuentas y documentos por cobrar a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.03',
        'accountName'=>'Cuentas y documentos por cobrar a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.04',
        'accountName'=>'Cuentas y documentos por cobrar a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.05',
        'accountName'=>'Intereses por cobrar a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.06',
        'accountName'=>'Intereses por cobrar a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.07',
        'accountName'=>'Intereses por cobrar a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.08',
        'accountName'=>'Intereses por cobrar a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.09',
        'accountName'=>'Otras cuentas y documentos por cobrar a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'106',
        'level'=>'2',
        'code'=>'106.10',
        'accountName'=>'Otras cuentas y documentos por cobrar a corto plazo parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'107',
        'level'=>'2',
        'code'=>'107.01',
        'accountName'=>'Funcionarios y empleados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'107',
        'level'=>'2',
        'code'=>'107.02',
        'accountName'=>'Socios y accionistas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'107',
        'level'=>'2',
        'code'=>'107.03',
        'accountName'=>'Partes relacionadas nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'107',
        'level'=>'2',
        'code'=>'107.04',
        'accountName'=>'Partes relacionadas extranjeros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'107',
        'level'=>'2',
        'code'=>'107.05',
        'accountName'=>'Otros deudores diversos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'108',
        'level'=>'2',
        'code'=>'108.01',
        'accountName'=>'Estimación de cuentas incobrables nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'108',
        'level'=>'2',
        'code'=>'108.02',
        'accountName'=>'Estimación de cuentas incobrables extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'108',
        'level'=>'2',
        'code'=>'108.03',
        'accountName'=>'Estimación de cuentas incobrables nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'108',
        'level'=>'2',
        'code'=>'108.04',
        'accountName'=>'Estimación de cuentas incobrables extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.01',
        'accountName'=>'Seguros y fianzas pagados por anticipado nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.02',
        'accountName'=>'Seguros y fianzas pagados por anticipado extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.03',
        'accountName'=>'Seguros y fianzas pagados por anticipado nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.04',
        'accountName'=>'Seguros y fianzas pagados por anticipado extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.05',
        'accountName'=>'Rentas pagados por anticipado nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.06',
        'accountName'=>'Rentas pagados por anticipado extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.07',
        'accountName'=>'Rentas pagados por anticipado nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.08',
        'accountName'=>'Rentas pagados por anticipado extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.09',
        'accountName'=>'Intereses pagados por anticipado nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.10',
        'accountName'=>'Intereses pagados por anticipado extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.11',
        'accountName'=>'Intereses pagados por anticipado nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.12',
        'accountName'=>'Intereses pagados por anticipado extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.13',
        'accountName'=>'Factoraje financiero pagados por anticipado nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.14',
        'accountName'=>'Factoraje financiero pagados por anticipado extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.15',
        'accountName'=>'Factoraje financiero pagados por anticipado nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.16',
        'accountName'=>'Factoraje financiero pagados por anticipado extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.17',
        'accountName'=>'Arrendamiento financiero pagados por anticipado nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.18',
        'accountName'=>'Arrendamiento financiero pagados por anticipado extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.19',
        'accountName'=>'Arrendamiento financiero pagados por anticipado nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.20',
        'accountName'=>'Arrendamiento financiero pagados por anticipado extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.21',
        'accountName'=>'Pérdida por deterioro de pagos anticipados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.22',
        'accountName'=>'Derechos fiduciarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'109',
        'level'=>'2',
        'code'=>'109.23',
        'accountName'=>'Otros pagos anticipados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'110',
        'level'=>'2',
        'code'=>'110.01',
        'accountName'=>'Subsidio al empleo por aplicar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'111',
        'level'=>'2',
        'code'=>'111.01',
        'accountName'=>'Crédito al diésel por acreditar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'112',
        'level'=>'2',
        'code'=>'112.01',
        'accountName'=>'Otros estímulos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.01',
        'accountName'=>'IVA a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.02',
        'accountName'=>'ISR a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.03',
        'accountName'=>'IETU a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.04',
        'accountName'=>'IDE a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.05',
        'accountName'=>'IA a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.06',
        'accountName'=>'Subsidio al empleo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.07',
        'accountName'=>'Pago de lo indebido'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'113',
        'level'=>'2',
        'code'=>'113.08',
        'accountName'=>'Otros impuestos a favor'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'114',
        'level'=>'2',
        'code'=>'114.01',
        'accountName'=>'Pagos provisionales de ISR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.01',
        'accountName'=>'Inventario'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.02',
        'accountName'=>'Materia prima y materiales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.03',
        'accountName'=>'Producción en proceso'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.04',
        'accountName'=>'Productos terminados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.05',
        'accountName'=>'Mercancías en tránsito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.06',
        'accountName'=>'Mercancías en poder de terceros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'115',
        'level'=>'2',
        'code'=>'115.07',
        'accountName'=>'Otros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'116',
        'level'=>'2',
        'code'=>'116.01',
        'accountName'=>'Estimación de inventarios obsoletos y de lento movimiento'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'117',
        'level'=>'2',
        'code'=>'117.01',
        'accountName'=>'Obras en proceso de inmuebles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'118',
        'level'=>'2',
        'code'=>'118.01',
        'accountName'=>'IVA acreditable pagado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'118',
        'level'=>'2',
        'code'=>'118.02',
        'accountName'=>'IVA acreditable de importación pagado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'118',
        'level'=>'2',
        'code'=>'118.03',
        'accountName'=>'IEPS acreditable pagado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'118',
        'level'=>'2',
        'code'=>'118.04',
        'accountName'=>'IEPS pagado en importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'119',
        'level'=>'2',
        'code'=>'119.01',
        'accountName'=>'IVA pendiente de pago'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'119',
        'level'=>'2',
        'code'=>'119.02',
        'accountName'=>'IVA de importación pendiente de pago'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'119',
        'level'=>'2',
        'code'=>'119.03',
        'accountName'=>'IEPS pendiente de pago'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'119',
        'level'=>'2',
        'code'=>'119.04',
        'accountName'=>'IEPS pendiente de pago en importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'120',
        'level'=>'2',
        'code'=>'120.01',
        'accountName'=>'Anticipo a proveedores nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'120',
        'level'=>'2',
        'code'=>'120.02',
        'accountName'=>'Anticipo a proveedores extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'120',
        'level'=>'2',
        'code'=>'120.03',
        'accountName'=>'Anticipo a proveedores nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'120',
        'level'=>'2',
        'code'=>'120.04',
        'accountName'=>'Anticipo a proveedores extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'121',
        'level'=>'2',
        'code'=>'121.01',
        'accountName'=>'Otros activos a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'151',
        'level'=>'2',
        'code'=>'151.01',
        'accountName'=>'Terrenos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'152',
        'level'=>'2',
        'code'=>'152.01',
        'accountName'=>'Edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'153',
        'level'=>'2',
        'code'=>'153.01',
        'accountName'=>'Maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'154',
        'level'=>'2',
        'code'=>'154.01',
        'accountName'=>'Automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'155',
        'level'=>'2',
        'code'=>'155.01',
        'accountName'=>'Mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'156',
        'level'=>'2',
        'code'=>'156.01',
        'accountName'=>'Equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'157',
        'level'=>'2',
        'code'=>'157.01',
        'accountName'=>'Equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'158',
        'level'=>'2',
        'code'=>'158.01',
        'accountName'=>'Activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'159',
        'level'=>'2',
        'code'=>'159.01',
        'accountName'=>'Obras en proceso de activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'160',
        'level'=>'2',
        'code'=>'160.01',
        'accountName'=>'Otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'161',
        'level'=>'2',
        'code'=>'161.01',
        'accountName'=>'Ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'162',
        'level'=>'2',
        'code'=>'162.01',
        'accountName'=>'Embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'163',
        'level'=>'2',
        'code'=>'163.01',
        'accountName'=>'Aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'164',
        'level'=>'2',
        'code'=>'164.01',
        'accountName'=>'Troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'165',
        'level'=>'2',
        'code'=>'165.01',
        'accountName'=>'Equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'166',
        'level'=>'2',
        'code'=>'166.01',
        'accountName'=>'Equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'167',
        'level'=>'2',
        'code'=>'167.01',
        'accountName'=>'Equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'168',
        'level'=>'2',
        'code'=>'168.01',
        'accountName'=>'Maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'169',
        'level'=>'2',
        'code'=>'169.01',
        'accountName'=>'Otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'170',
        'level'=>'2',
        'code'=>'170.01',
        'accountName'=>'Adaptaciones y mejoras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.01',
        'accountName'=>'Depreciación acumulada de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.02',
        'accountName'=>'Depreciación acumulada de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.03',
        'accountName'=>'Depreciación acumulada de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.04',
        'accountName'=>'Depreciación acumulada de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.05',
        'accountName'=>'Depreciación acumulada de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.06',
        'accountName'=>'Depreciación acumulada de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.07',
        'accountName'=>'Depreciación acumulada de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.08',
        'accountName'=>'Depreciación acumulada de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.09',
        'accountName'=>'Depreciación acumulada de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.10',
        'accountName'=>'Depreciación acumulada de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.11',
        'accountName'=>'Depreciación acumulada de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.12',
        'accountName'=>'Depreciación acumulada de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.13',
        'accountName'=>'Depreciación acumulada de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.14',
        'accountName'=>'Depreciación acumulada de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.15',
        'accountName'=>'Depreciación acumulada de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.16',
        'accountName'=>'Depreciación acumulada de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.17',
        'accountName'=>'Depreciación acumulada de adaptaciones y mejoras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'171',
        'level'=>'2',
        'code'=>'171.18',
        'accountName'=>'Depreciación acumulada de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.01',
        'accountName'=>'Pérdida por deterioro acumulado de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.02',
        'accountName'=>'Pérdida por deterioro acumulado de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.03',
        'accountName'=>'Pérdida por deterioro acumulado de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.04',
        'accountName'=>'Pérdida por deterioro acumulado de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.05',
        'accountName'=>'Pérdida por deterioro acumulado de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.06',
        'accountName'=>'Pérdida por deterioro acumulado de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.07',
        'accountName'=>'Pérdida por deterioro acumulado de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.08',
        'accountName'=>'Pérdida por deterioro acumulado de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.09',
        'accountName'=>'Pérdida por deterioro acumulado de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.10',
        'accountName'=>'Pérdida por deterioro acumulado de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.11',
        'accountName'=>'Pérdida por deterioro acumulado de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.12',
        'accountName'=>'Pérdida por deterioro acumulado de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.13',
        'accountName'=>'Pérdida por deterioro acumulado de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.14',
        'accountName'=>'Pérdida por deterioro acumulado de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.15',
        'accountName'=>'Pérdida por deterioro acumulado de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.16',
        'accountName'=>'Pérdida por deterioro acumulado de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.17',
        'accountName'=>'Pérdida por deterioro acumulado de adaptaciones y mejoras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'172',
        'level'=>'2',
        'code'=>'172.18',
        'accountName'=>'Pérdida por deterioro acumulado de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'173',
        'level'=>'2',
        'code'=>'173.01',
        'accountName'=>'Gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'174',
        'level'=>'2',
        'code'=>'174.01',
        'accountName'=>'Gastos pre operativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'175',
        'level'=>'2',
        'code'=>'175.01',
        'accountName'=>'Regalías, asistencia técnica y otros gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'176',
        'level'=>'2',
        'code'=>'176.01',
        'accountName'=>'Activos intangibles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'177',
        'level'=>'2',
        'code'=>'177.01',
        'accountName'=>'Gastos de organización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'178',
        'level'=>'2',
        'code'=>'178.01',
        'accountName'=>'Investigación y desarrollo de mercado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'179',
        'level'=>'2',
        'code'=>'179.01',
        'accountName'=>'Marcas y patentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'180',
        'level'=>'2',
        'code'=>'180.01',
        'accountName'=>'Crédito mercantil'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'181',
        'level'=>'2',
        'code'=>'181.01',
        'accountName'=>'Gastos de instalación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'182',
        'level'=>'2',
        'code'=>'182.01',
        'accountName'=>'Otros activos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.01',
        'accountName'=>'Amortización acumulada de gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.02',
        'accountName'=>'Amortización acumulada de gastos pre operativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.03',
        'accountName'=>'Amortización acumulada de regalías, asistencia técnica y otros gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.04',
        'accountName'=>'Amortización acumulada de activos intangibles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.05',
        'accountName'=>'Amortización acumulada de gastos de organización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.06',
        'accountName'=>'Amortización acumulada de investigación y desarrollo de mercado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.07',
        'accountName'=>'Amortización acumulada de marcas y patentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.08',
        'accountName'=>'Amortización acumulada de crédito mercantil'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.09',
        'accountName'=>'Amortización acumulada de gastos de instalación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'183',
        'level'=>'2',
        'code'=>'183.10',
        'accountName'=>'Amortización acumulada de otros activos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'184',
        'level'=>'2',
        'code'=>'184.01',
        'accountName'=>'Depósitos de fianzas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'184',
        'level'=>'2',
        'code'=>'184.02',
        'accountName'=>'Depósitos de arrendamiento de bienes inmuebles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'184',
        'level'=>'2',
        'code'=>'184.03',
        'accountName'=>'Otros depósitos en garantía'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'185',
        'level'=>'2',
        'code'=>'185.01',
        'accountName'=>'Impuestos diferidos ISR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.01',
        'accountName'=>'Cuentas y documentos por cobrar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.02',
        'accountName'=>'Cuentas y documentos por cobrar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.03',
        'accountName'=>'Cuentas y documentos por cobrar a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.04',
        'accountName'=>'Cuentas y documentos por cobrar a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.05',
        'accountName'=>'Intereses por cobrar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.06',
        'accountName'=>'Intereses por cobrar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.07',
        'accountName'=>'Intereses por cobrar a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.08',
        'accountName'=>'Intereses por cobrar a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.09',
        'accountName'=>'Otras cuentas y documentos por cobrar a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'186',
        'level'=>'2',
        'code'=>'186.10',
        'accountName'=>'Otras cuentas y documentos por cobrar a largo plazo parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'187',
        'level'=>'2',
        'code'=>'187.01',
        'accountName'=>'Participación de los trabajadores en las utilidades diferidas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'188',
        'level'=>'2',
        'code'=>'188.01',
        'accountName'=>'Inversiones a largo plazo en subsidiarias'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'188',
        'level'=>'2',
        'code'=>'188.02',
        'accountName'=>'Inversiones a largo plazo en asociadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'188',
        'level'=>'2',
        'code'=>'188.03',
        'accountName'=>'Otras inversiones permanentes en acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'189',
        'level'=>'2',
        'code'=>'189.01',
        'accountName'=>'Estimación por deterioro de inversiones permanentes en acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'190',
        'level'=>'2',
        'code'=>'190.01',
        'accountName'=>'Otros instrumentos financieros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'191',
        'level'=>'2',
        'code'=>'191.01',
        'accountName'=>'Otros activos a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'200',
        'code'=>'200.01',
        'accountName'=>'Pasivo a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'201',
        'level'=>'2',
        'code'=>'201.01',
        'accountName'=>'Proveedores nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'201',
        'level'=>'2',
        'code'=>'201.02',
        'accountName'=>'Proveedores extranjeros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'201',
        'level'=>'2',
        'code'=>'201.03',
        'accountName'=>'Proveedores nacionales parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'201',
        'level'=>'2',
        'code'=>'201.04',
        'accountName'=>'Proveedores extranjeros parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.01',
        'accountName'=>'Documentos por pagar bancario y financiero nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.02',
        'accountName'=>'Documentos por pagar bancario y financiero extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.03',
        'accountName'=>'Documentos y cuentas por pagar a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.04',
        'accountName'=>'Documentos y cuentas por pagar a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.05',
        'accountName'=>'Documentos y cuentas por pagar a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.06',
        'accountName'=>'Documentos y cuentas por pagar a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.07',
        'accountName'=>'Intereses por pagar a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.08',
        'accountName'=>'Intereses por pagar a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.09',
        'accountName'=>'Intereses por pagar a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.10',
        'accountName'=>'Intereses por pagar a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.11',
        'accountName'=>'Dividendo por pagar nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'202',
        'level'=>'2',
        'code'=>'202.12',
        'accountName'=>'Dividendo por pagar extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.01',
        'accountName'=>'Rentas cobradas por anticipado a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.02',
        'accountName'=>'Rentas cobradas por anticipado a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.03',
        'accountName'=>'Rentas cobradas por anticipado a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.04',
        'accountName'=>'Rentas cobradas por anticipado a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.05',
        'accountName'=>'Intereses cobrados por anticipado a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.06',
        'accountName'=>'Intereses cobrados por anticipado a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.07',
        'accountName'=>'Intereses cobrados por anticipado a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.08',
        'accountName'=>'Intereses cobrados por anticipado a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.09',
        'accountName'=>'Factoraje financiero cobrados por anticipado a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.10',
        'accountName'=>'Factoraje financiero cobrados por anticipado a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.11',
        'accountName'=>'Factoraje financiero cobrados por anticipado a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.12',
        'accountName'=>'Factoraje financiero cobrados por anticipado a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.13',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.14',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.15',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.16',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.17',
        'accountName'=>'Derechos fiduciarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'203',
        'level'=>'2',
        'code'=>'203.18',
        'accountName'=>'Otros cobros anticipados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'204',
        'level'=>'2',
        'code'=>'204.01',
        'accountName'=>'Instrumentos financieros a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.01',
        'accountName'=>'Socios, accionistas o representante legal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.02',
        'accountName'=>'Acreedores diversos a corto plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.03',
        'accountName'=>'Acreedores diversos a corto plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.04',
        'accountName'=>'Acreedores diversos a corto plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.05',
        'accountName'=>'Acreedores diversos a corto plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'205',
        'level'=>'2',
        'code'=>'205.06',
        'accountName'=>'Otros acreedores diversos a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'206',
        'level'=>'2',
        'code'=>'206.01',
        'accountName'=>'Anticipo de cliente nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'206',
        'level'=>'2',
        'code'=>'206.02',
        'accountName'=>'Anticipo de cliente extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'206',
        'level'=>'2',
        'code'=>'206.03',
        'accountName'=>'Anticipo de cliente nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'206',
        'level'=>'2',
        'code'=>'206.04',
        'accountName'=>'Anticipo de cliente extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'206',
        'level'=>'2',
        'code'=>'206.05',
        'accountName'=>'Otros anticipos de clientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'207',
        'level'=>'2',
        'code'=>'207.01',
        'accountName'=>'IVA trasladado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'207',
        'level'=>'2',
        'code'=>'207.02',
        'accountName'=>'IEPS trasladado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'208',
        'level'=>'2',
        'code'=>'208.01',
        'accountName'=>'IVA trasladado cobrado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'208',
        'level'=>'2',
        'code'=>'208.02',
        'accountName'=>'IEPS trasladado cobrado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'209',
        'level'=>'2',
        'code'=>'209.01',
        'accountName'=>'IVA trasladado no cobrado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'209',
        'level'=>'2',
        'code'=>'209.02',
        'accountName'=>'IEPS trasladado no cobrado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.01',
        'accountName'=>'Provisión de sueldos y salarios por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.02',
        'accountName'=>'Provisión de vacaciones por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.03',
        'accountName'=>'Provisión de aguinaldo por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.04',
        'accountName'=>'Provisión de fondo de ahorro por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.05',
        'accountName'=>'Provisión de asimilados a salarios por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.06',
        'accountName'=>'Provisión de anticipos o remanentes por distribuir'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'210',
        'level'=>'2',
        'code'=>'210.07',
        'accountName'=>'Provisión de otros sueldos y salarios por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'211',
        'level'=>'2',
        'code'=>'211.01',
        'accountName'=>'Provisión de IMSS patronal por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'211',
        'level'=>'2',
        'code'=>'211.02',
        'accountName'=>'Provisión de SAR por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'211',
        'level'=>'2',
        'code'=>'211.03',
        'accountName'=>'Provisión de infonavit por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'212',
        'level'=>'2',
        'code'=>'212.01',
        'accountName'=>'Provisión de impuesto estatal sobre nómina por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.01',
        'accountName'=>'IVA por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.02',
        'accountName'=>'IEPS por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.03',
        'accountName'=>'ISR por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.04',
        'accountName'=>'Impuesto estatal sobre nómina por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.05',
        'accountName'=>'Impuesto estatal y municipal por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.06',
        'accountName'=>'Derechos por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'213',
        'level'=>'2',
        'code'=>'213.07',
        'accountName'=>'Otros impuestos por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'214',
        'level'=>'2',
        'code'=>'214.01',
        'accountName'=>'Dividendos por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'215',
        'level'=>'2',
        'code'=>'215.01',
        'accountName'=>'PTU por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'215',
        'level'=>'2',
        'code'=>'215.02',
        'accountName'=>'PTU por pagar de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'215',
        'level'=>'2',
        'code'=>'215.03',
        'accountName'=>'Provisión de PTU por pagar'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.01',
        'accountName'=>'Impuestos retenidos de ISR por sueldos y salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.02',
        'accountName'=>'Impuestos retenidos de ISR por asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.03',
        'accountName'=>'Impuestos retenidos de ISR por arrendamiento'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.04',
        'accountName'=>'Impuestos retenidos de ISR por servicios profesionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.05',
        'accountName'=>'Impuestos retenidos de ISR por dividendos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.06',
        'accountName'=>'Impuestos retenidos de ISR por intereses'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.07',
        'accountName'=>'Impuestos retenidos de ISR por pagos al extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.08',
        'accountName'=>'Impuestos retenidos de ISR por venta de acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.09',
        'accountName'=>'Impuestos retenidos de ISR por venta de partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.10',
        'accountName'=>'Impuestos retenidos de IVA'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.11',
        'accountName'=>'Retenciones de IMSS a los trabajadores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'216',
        'level'=>'2',
        'code'=>'216.12',
        'accountName'=>'Otras impuestos retenidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'217',
        'level'=>'2',
        'code'=>'217.01',
        'accountName'=>'Pagos realizados por cuenta de terceros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'218',
        'level'=>'2',
        'code'=>'218.01',
        'accountName'=>'Otros pasivos a corto plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'200',
        'code'=>'200.02',
        'accountName'=>'Pasivo a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.01',
        'accountName'=>'Socios, accionistas o representante legal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.02',
        'accountName'=>'Acreedores diversos a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.03',
        'accountName'=>'Acreedores diversos a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.04',
        'accountName'=>'Acreedores diversos a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.05',
        'accountName'=>'Acreedores diversos a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'251',
        'level'=>'2',
        'code'=>'251.06',
        'accountName'=>'Otros acreedores diversos a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.01',
        'accountName'=>'Documentos bancarios y financieros por pagar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.02',
        'accountName'=>'Documentos bancarios y financieros por pagar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.03',
        'accountName'=>'Documentos y cuentas por pagar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.04',
        'accountName'=>'Documentos y cuentas por pagar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.05',
        'accountName'=>'Documentos y cuentas por pagar a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.06',
        'accountName'=>'Documentos y cuentas por pagar a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.07',
        'accountName'=>'Hipotecas por pagar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.08',
        'accountName'=>'Hipotecas por pagar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.09',
        'accountName'=>'Hipotecas por pagar a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.10',
        'accountName'=>'Hipotecas por pagar a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.11',
        'accountName'=>'Intereses por pagar a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.12',
        'accountName'=>'Intereses por pagar a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.13',
        'accountName'=>'Intereses por pagar a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.14',
        'accountName'=>'Intereses por pagar a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.15',
        'accountName'=>'Dividendos por pagar nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.16',
        'accountName'=>'Dividendos por pagar extranjeros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'252',
        'level'=>'2',
        'code'=>'252.17',
        'accountName'=>'Otras cuentas y documentos por pagar a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.01',
        'accountName'=>'Rentas cobradas por anticipado a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.02',
        'accountName'=>'Rentas cobradas por anticipado a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.03',
        'accountName'=>'Rentas cobradas por anticipado a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.04',
        'accountName'=>'Rentas cobradas por anticipado a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.05',
        'accountName'=>'Intereses cobrados por anticipado a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.06',
        'accountName'=>'Intereses cobrados por anticipado a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.07',
        'accountName'=>'Intereses cobrados por anticipado a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.08',
        'accountName'=>'Intereses cobrados por anticipado a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.09',
        'accountName'=>'Factoraje financiero cobrados por anticipado a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.10',
        'accountName'=>'Factoraje financiero cobrados por anticipado a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.11',
        'accountName'=>'Factoraje financiero cobrados por anticipado a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.12',
        'accountName'=>'Factoraje financiero cobrados por anticipado a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.13',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a largo plazo nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.14',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a largo plazo extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.15',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a largo plazo nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.16',
        'accountName'=>'Arrendamiento financiero cobrados por anticipado a largo plazo extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.17',
        'accountName'=>'Derechos fiduciarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'253',
        'level'=>'2',
        'code'=>'253.18',
        'accountName'=>'Otros cobros anticipados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'254',
        'level'=>'2',
        'code'=>'254.01',
        'accountName'=>'Instrumentos financieros a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'255',
        'level'=>'2',
        'code'=>'255.01',
        'accountName'=>'Pasivos por beneficios a los empleados a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'256',
        'level'=>'2',
        'code'=>'256.01',
        'accountName'=>'Otros pasivos a largo plazo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'257',
        'level'=>'2',
        'code'=>'257.01',
        'accountName'=>'Participación de los trabajadores en las utilidades diferida'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'258',
        'level'=>'2',
        'code'=>'258.01',
        'accountName'=>'Obligaciones contraídas de fideicomisos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'259',
        'level'=>'2',
        'code'=>'259.01',
        'accountName'=>'ISR diferido'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'259',
        'level'=>'2',
        'code'=>'259.02',
        'accountName'=>'ISR por dividendo diferido'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'259',
        'level'=>'2',
        'code'=>'259.03',
        'accountName'=>'Otros impuestos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'260',
        'level'=>'2',
        'code'=>'260.01',
        'accountName'=>'Pasivos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'301',
        'level'=>'2',
        'code'=>'301.01',
        'accountName'=>'Capital fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'301',
        'level'=>'2',
        'code'=>'301.02',
        'accountName'=>'Capital variable'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'301',
        'level'=>'2',
        'code'=>'301.03',
        'accountName'=>'Aportaciones para futuros aumentos de capital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'301',
        'level'=>'2',
        'code'=>'301.04',
        'accountName'=>'Prima en suscripción de acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'301',
        'level'=>'2',
        'code'=>'301.05',
        'accountName'=>'Prima en suscripción de partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'302',
        'level'=>'2',
        'code'=>'302.01',
        'accountName'=>'Patrimonio'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'302',
        'level'=>'2',
        'code'=>'302.02',
        'accountName'=>'Aportación patrimonial'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'302',
        'level'=>'2',
        'code'=>'302.03',
        'accountName'=>'Déficit o remanente del ejercicio'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'303',
        'level'=>'2',
        'code'=>'303.01',
        'accountName'=>'Reserva legal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'304',
        'level'=>'2',
        'code'=>'304.01',
        'accountName'=>'Utilidad de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'304',
        'level'=>'2',
        'code'=>'304.02',
        'accountName'=>'Pérdida de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'304',
        'level'=>'2',
        'code'=>'304.03',
        'accountName'=>'Resultado integral de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'304',
        'level'=>'2',
        'code'=>'304.04',
        'accountName'=>'Déficit o remanente de ejercicio anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'305',
        'level'=>'2',
        'code'=>'305.01',
        'accountName'=>'Utilidad del ejercicio'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'305',
        'level'=>'2',
        'code'=>'305.02',
        'accountName'=>'Pérdida del ejercicio'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'305',
        'level'=>'2',
        'code'=>'305.03',
        'accountName'=>'Resultado integral'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'306',
        'level'=>'2',
        'code'=>'306.01',
        'accountName'=>'Otras cuentas de capital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.01',
        'accountName'=>'Ventas y/o servicios gravados a la tasa general'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.02',
        'accountName'=>'Ventas y/o servicios gravados a la tasa general de contado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.03',
        'accountName'=>'Ventas y/o servicios gravados a la tasa general a crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.04',
        'accountName'=>'Ventas y/o servicios gravados realizados en zona fronteriza norte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.05',
        'accountName'=>'Ventas y/o servicios gravados realizados en zona fronteriza norte de contado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.06',
        'accountName'=>'Ventas y/o servicios gravados realizados en zona fronteriza norte a crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.07',
        'accountName'=>'Ventas y/o servicios gravados al 0%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.08',
        'accountName'=>'Ventas y/o servicios gravados al 0% de contado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.09',
        'accountName'=>'Ventas y/o servicios gravados al 0% a crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.10',
        'accountName'=>'Ventas y/o servicios exentos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.11',
        'accountName'=>'Ventas y/o servicios exentos de contado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.12',
        'accountName'=>'Ventas y/o servicios exentos a crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.13',
        'accountName'=>'Ventas y/o servicios gravados a la tasa general nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.14',
        'accountName'=>'Ventas y/o servicios gravados a la tasa general extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.15',
        'accountName'=>'Ventas y/o servicios gravados al 0% nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.16',
        'accountName'=>'Ventas y/o servicios gravados al 0% extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.17',
        'accountName'=>'Ventas y/o servicios exentos nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.18',
        'accountName'=>'Ventas y/o servicios exentos extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.19',
        'accountName'=>'Ingresos por servicios administrativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.20',
        'accountName'=>'Ingresos por servicios administrativos nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.21',
        'accountName'=>'Ingresos por servicios administrativos extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.22',
        'accountName'=>'Ingresos por servicios profesionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.23',
        'accountName'=>'Ingresos por servicios profesionales nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.24',
        'accountName'=>'Ingresos por servicios profesionales extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.25',
        'accountName'=>'Ingresos por arrendamiento'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.26',
        'accountName'=>'Ingresos por arrendamiento nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.27',
        'accountName'=>'Ingresos por arrendamiento extranjeros partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.28',
        'accountName'=>'Ingresos por exportación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.29',
        'accountName'=>'Ingresos por comisiones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.30',
        'accountName'=>'Ingresos por maquila'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.31',
        'accountName'=>'Ingresos por coordinados'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.32',
        'accountName'=>'Ingresos por regalías'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.33',
        'accountName'=>'Ingresos por asistencia técnica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.34',
        'accountName'=>'Ingresos por donativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.35',
        'accountName'=>'Ingresos por intereses (actividad propia)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.36',
        'accountName'=>'Ingresos de copropiedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.37',
        'accountName'=>'Ingresos por fideicomisos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.38',
        'accountName'=>'Ingresos por factoraje financiero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.39',
        'accountName'=>'Ingresos por arrendamiento financiero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.40',
        'accountName'=>'Ingresos de extranjeros con establecimiento en el país'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'401',
        'level'=>'2',
        'code'=>'401.41',
        'accountName'=>'Otros ingresos propios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'402',
        'level'=>'2',
        'code'=>'402.01',
        'accountName'=>'Devoluciones, descuentos o bonificaciones sobre ventas y/o servicios a la tasa general'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'402',
        'code'=>'402.02',
        'accountName'=>'Devoluciones, descuentos o bonificaciones sobre ventas y/o servicios en zona fronteriza norte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'402',
        'level'=>'2',
        'code'=>'402.03',
        'accountName'=>'Devoluciones, descuentos o bonificaciones sobre ventas y/o servicios al 0%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'402',
        'level'=>'2',
        'code'=>'402.04',
        'accountName'=>'Devoluciones, descuentos o bonificaciones sobre ventas y/o servicios exentos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'402',
        'level'=>'2',
        'code'=>'402.05',
        'accountName'=>'Devoluciones, descuentos o bonificaciones de otros ingresos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'403',
        'level'=>'2',
        'code'=>'403.01',
        'accountName'=>'Otros Ingresos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'403',
        'level'=>'2',
        'code'=>'403.02',
        'accountName'=>'Otros ingresos nacionales parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'403',
        'level'=>'2',
        'code'=>'403.03',
        'accountName'=>'Otros ingresos extranjeros parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'403',
        'level'=>'2',
        'code'=>'403.04',
        'accountName'=>'Ingresos por operaciones discontinuas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'403',
        'level'=>'2',
        'code'=>'403.05',
        'accountName'=>'Ingresos por condonación de adeudo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.01',
        'accountName'=>'Costo de venta'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.02',
        'accountName'=>'Costo de servicios (Mano de obra)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.03',
        'accountName'=>'Materia prima directa utilizada para la producción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.04',
        'accountName'=>'Materia prima consumida en el proceso productivo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.05',
        'accountName'=>'Mano de obra directa consumida'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.06',
        'accountName'=>'Mano de obra directa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.07',
        'accountName'=>'Cargos indirectos de producción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'501',
        'level'=>'2',
        'code'=>'501.08',
        'accountName'=>'Otros conceptos de costo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'502',
        'level'=>'2',
        'code'=>'502.01',
        'accountName'=>'Compras nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'502',
        'level'=>'2',
        'code'=>'502.02',
        'accountName'=>'Compras nacionales parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'502',
        'level'=>'2',
        'code'=>'502.03',
        'accountName'=>'Compras de Importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'502',
        'level'=>'2',
        'code'=>'502.04',
        'accountName'=>'Compras de Importación partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'503',
        'level'=>'2',
        'code'=>'503.01',
        'accountName'=>'Devoluciones, descuentos o bonificaciones sobre compras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.01',
        'accountName'=>'Gastos indirectos de fabricación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.02',
        'accountName'=>'Gastos indirectos de fabricación de partes relacionadas nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.03',
        'accountName'=>'Gastos indirectos de fabricación de partes relacionadas extranjeras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.04',
        'accountName'=>'Otras cuentas de costos incurridos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.05',
        'accountName'=>'Otras cuentas de costos incurridos con partes relacionadas nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.06',
        'accountName'=>'Otras cuentas de costos incurridos con partes relacionadas extranjeras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.07',
        'accountName'=>'Depreciación de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.08',
        'accountName'=>'Depreciación de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.09',
        'accountName'=>'Depreciación de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.10',
        'accountName'=>'Depreciación de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.11',
        'accountName'=>'Depreciación de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.12',
        'accountName'=>'Depreciación de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.13',
        'accountName'=>'Depreciación de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.14',
        'accountName'=>'Depreciación de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.15',
        'accountName'=>'Depreciación de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.16',
        'accountName'=>'Depreciación de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.17',
        'accountName'=>'Depreciación de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.18',
        'accountName'=>'Depreciación de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.19',
        'accountName'=>'Depreciación de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.20',
        'accountName'=>'Depreciación de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.21',
        'accountName'=>'Depreciación de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.22',
        'accountName'=>'Depreciación de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.23',
        'accountName'=>'Depreciación de adaptaciones y mejoras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.24',
        'accountName'=>'Depreciación de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'504',
        'level'=>'2',
        'code'=>'504.25',
        'accountName'=>'Otras cuentas de costos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'505',
        'level'=>'2',
        'code'=>'505.01',
        'accountName'=>'Costo por venta de activo fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'505',
        'level'=>'2',
        'code'=>'505.02',
        'accountName'=>'Costo por baja de activo fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.01',
        'accountName'=>'Sueldos y salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.02',
        'accountName'=>'Compensaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.03',
        'accountName'=>'Tiempos extras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.04',
        'accountName'=>'Premios de asistencia'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.05',
        'accountName'=>'Premios de puntualidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.06',
        'accountName'=>'Vacaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.07',
        'accountName'=>'Prima vacacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.08',
        'accountName'=>'Prima dominical'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.09',
        'accountName'=>'Días festivos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.10',
        'accountName'=>'Gratificaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.11',
        'accountName'=>'Primas de antigüedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.12',
        'accountName'=>'Aguinaldo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.13',
        'accountName'=>'Indemnizaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.14',
        'accountName'=>'Destajo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.15',
        'accountName'=>'Despensa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.16',
        'accountName'=>'Transporte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.17',
        'accountName'=>'Servicio médico'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.18',
        'accountName'=>'Ayuda en gastos funerarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.19',
        'accountName'=>'Fondo de ahorro'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.20',
        'accountName'=>'Cuotas sindicales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.21',
        'accountName'=>'PTU'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.22',
        'accountName'=>'Estímulo al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.23',
        'accountName'=>'Previsión social'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.24',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.25',
        'accountName'=>'Otras prestaciones al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.26',
        'accountName'=>'Cuotas al IMSS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.27',
        'accountName'=>'Aportaciones al infonavit'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.28',
        'accountName'=>'Aportaciones al SAR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.29',
        'accountName'=>'Impuesto estatal sobre nóminas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.30',
        'accountName'=>'Otras aportaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.31',
        'accountName'=>'Asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.32',
        'accountName'=>'Servicios administrativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.33',
        'accountName'=>'Servicios administrativos partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.34',
        'accountName'=>'Honorarios a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.35',
        'accountName'=>'Honorarios a personas físicas residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.36',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.37',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.38',
        'accountName'=>'Honorarios a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.39',
        'accountName'=>'Honorarios a personas morales residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.40',
        'accountName'=>'Honorarios a personas morales residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.41',
        'accountName'=>'Honorarios a personas morales residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.42',
        'accountName'=>'Honorarios aduanales personas físicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.43',
        'accountName'=>'Honorarios aduanales personas morales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.44',
        'accountName'=>'Honorarios al consejo de administración'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.45',
        'accountName'=>'Arrendamiento a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.46',
        'accountName'=>'Arrendamiento a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.47',
        'accountName'=>'Arrendamiento a residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.48',
        'accountName'=>'Combustibles y lubricantes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.49',
        'accountName'=>'Viáticos y gastos de viaje'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.50',
        'accountName'=>'Teléfono, internet'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.51',
        'accountName'=>'Agua'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.52',
        'accountName'=>'Energía eléctrica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.53',
        'accountName'=>'Vigilancia y seguridad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.54',
        'accountName'=>'Limpieza'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.55',
        'accountName'=>'Papelería y artículos de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.56',
        'accountName'=>'Mantenimiento y conservación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.57',
        'accountName'=>'Seguros y fianzas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.58',
        'accountName'=>'Otros impuestos y derechos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.59',
        'accountName'=>'Recargos fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.60',
        'accountName'=>'Cuotas y suscripciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.61',
        'accountName'=>'Propaganda y publicidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.62',
        'accountName'=>'Capacitación al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.63',
        'accountName'=>'Donativos y ayudas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.64',
        'accountName'=>'Asistencia técnica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.65',
        'accountName'=>'Regalías sujetas a otros porcentajes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.66',
        'accountName'=>'Regalías sujetas al 5%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.67',
        'accountName'=>'Regalías sujetas al 10%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.68',
        'accountName'=>'Regalías sujetas al 15%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.69',
        'accountName'=>'Regalías sujetas al 25%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.70',
        'accountName'=>'Regalías sujetas al 30%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.71',
        'accountName'=>'Regalías sin retención'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.72',
        'accountName'=>'Fletes y acarreos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.73',
        'accountName'=>'Gastos de importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.74',
        'accountName'=>'Comisiones sobre ventas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.75',
        'accountName'=>'Comisiones por tarjetas de crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.76',
        'accountName'=>'Patentes y marcas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.77',
        'accountName'=>'Uniformes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.78',
        'accountName'=>'Prediales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.79',
        'accountName'=>'Gastos generales de urbanización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.80',
        'accountName'=>'Gastos generales de construcción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.81',
        'accountName'=>'Fletes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.82',
        'accountName'=>'Recolección de bienes del sector agropecuario y/o ganadero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.83',
        'accountName'=>'Gastos no deducibles (sin requisitos fiscales)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'601',
        'level'=>'2',
        'code'=>'601.84',
        'accountName'=>'Otros gastos generales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.01',
        'accountName'=>'Sueldos y salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.02',
        'accountName'=>'Compensaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.03',
        'accountName'=>'Tiempos extras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.04',
        'accountName'=>'Premios de asistencia'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.05',
        'accountName'=>'Premios de puntualidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.06',
        'accountName'=>'Vacaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.07',
        'accountName'=>'Prima vacacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.08',
        'accountName'=>'Prima dominical'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.09',
        'accountName'=>'Días festivos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.10',
        'accountName'=>'Gratificaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.11',
        'accountName'=>'Primas de antigüedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.12',
        'accountName'=>'Aguinaldo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.13',
        'accountName'=>'Indemnizaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.14',
        'accountName'=>'Destajo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.15',
        'accountName'=>'Despensa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.16',
        'accountName'=>'Transporte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.17',
        'accountName'=>'Servicio médico'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.18',
        'accountName'=>'Ayuda en gastos funerarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.19',
        'accountName'=>'Fondo de ahorro'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.20',
        'accountName'=>'Cuotas sindicales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.21',
        'accountName'=>'PTU'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.22',
        'accountName'=>'Estímulo al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.23',
        'accountName'=>'Previsión social'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.24',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.25',
        'accountName'=>'Otras prestaciones al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.26',
        'accountName'=>'Cuotas al IMSS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.27',
        'accountName'=>'Aportaciones al infonavit'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.28',
        'accountName'=>'Aportaciones al SAR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.29',
        'accountName'=>'Impuesto estatal sobre nóminas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.30',
        'accountName'=>'Otras aportaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.31',
        'accountName'=>'Asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.32',
        'accountName'=>'Servicios administrativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.33',
        'accountName'=>'Servicios administrativos partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.34',
        'accountName'=>'Honorarios a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.35',
        'accountName'=>'Honorarios a personas físicas residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.36',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.37',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.38',
        'accountName'=>'Honorarios a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.39',
        'accountName'=>'Honorarios a personas morales residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.40',
        'accountName'=>'Honorarios a personas morales residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.41',
        'accountName'=>'Honorarios a personas morales residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.42',
        'accountName'=>'Honorarios aduanales personas físicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.43',
        'accountName'=>'Honorarios aduanales personas morales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.44',
        'accountName'=>'Honorarios al consejo de administración'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.45',
        'accountName'=>'Arrendamiento a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.46',
        'accountName'=>'Arrendamiento a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.47',
        'accountName'=>'Arrendamiento a residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.48',
        'accountName'=>'Combustibles y lubricantes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.49',
        'accountName'=>'Viáticos y gastos de viaje'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.50',
        'accountName'=>'Teléfono, internet'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.51',
        'accountName'=>'Agua'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.52',
        'accountName'=>'Energía eléctrica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.53',
        'accountName'=>'Vigilancia y seguridad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.54',
        'accountName'=>'Limpieza'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.55',
        'accountName'=>'Papelería y artículos de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.56',
        'accountName'=>'Mantenimiento y conservación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.57',
        'accountName'=>'Seguros y fianzas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.58',
        'accountName'=>'Otros impuestos y derechos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.59',
        'accountName'=>'Recargos fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.60',
        'accountName'=>'Cuotas y suscripciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.61',
        'accountName'=>'Propaganda y publicidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.62',
        'accountName'=>'Capacitación al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.63',
        'accountName'=>'Donativos y ayudas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.64',
        'accountName'=>'Asistencia técnica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.65',
        'accountName'=>'Regalías sujetas a otros porcentajes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.66',
        'accountName'=>'Regalías sujetas al 5%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.67',
        'accountName'=>'Regalías sujetas al 10%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.68',
        'accountName'=>'Regalías sujetas al 15%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.69',
        'accountName'=>'Regalías sujetas al 25%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.70',
        'accountName'=>'Regalías sujetas al 30%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.71',
        'accountName'=>'Regalías sin retención'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.72',
        'accountName'=>'Fletes y acarreos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.73',
        'accountName'=>'Gastos de importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.74',
        'accountName'=>'Comisiones sobre ventas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.75',
        'accountName'=>'Comisiones por tarjetas de crédito'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.76',
        'accountName'=>'Patentes y marcas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.77',
        'accountName'=>'Uniformes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.78',
        'accountName'=>'Prediales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.79',
        'accountName'=>'Gastos de venta de urbanización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.80',
        'accountName'=>'Gastos de venta de construcción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.81',
        'accountName'=>'Fletes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.82',
        'accountName'=>'Recolección de bienes del sector agropecuario y/o ganadero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.83',
        'accountName'=>'Gastos no deducibles (sin requisitos fiscales)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'602',
        'level'=>'2',
        'code'=>'602.84',
        'accountName'=>'Otros gastos de venta'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.01',
        'accountName'=>'Sueldos y salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.02',
        'accountName'=>'Compensaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.03',
        'accountName'=>'Tiempos extras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.04',
        'accountName'=>'Premios de asistencia'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.05',
        'accountName'=>'Premios de puntualidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.06',
        'accountName'=>'Vacaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.07',
        'accountName'=>'Prima vacacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.08',
        'accountName'=>'Prima dominical'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.09',
        'accountName'=>'Días festivos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.10',
        'accountName'=>'Gratificaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.11',
        'accountName'=>'Primas de antigüedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.12',
        'accountName'=>'Aguinaldo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.13',
        'accountName'=>'Indemnizaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.14',
        'accountName'=>'Destajo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.15',
        'accountName'=>'Despensa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.16',
        'accountName'=>'Transporte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.17',
        'accountName'=>'Servicio médico'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.18',
        'accountName'=>'Ayuda en gastos funerarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.19',
        'accountName'=>'Fondo de ahorro'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.20',
        'accountName'=>'Cuotas sindicales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.21',
        'accountName'=>'PTU'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.22',
        'accountName'=>'Estímulo al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.23',
        'accountName'=>'Previsión social'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.24',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.25',
        'accountName'=>'Otras prestaciones al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.26',
        'accountName'=>'Cuotas al IMSS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.27',
        'accountName'=>'Aportaciones al infonavit'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.28',
        'accountName'=>'Aportaciones al SAR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.29',
        'accountName'=>'Impuesto estatal sobre nóminas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.30',
        'accountName'=>'Otras aportaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.31',
        'accountName'=>'Asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.32',
        'accountName'=>'Servicios administrativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.33',
        'accountName'=>'Servicios administrativos partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.34',
        'accountName'=>'Honorarios a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.35',
        'accountName'=>'Honorarios a personas físicas residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.36',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.37',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.38',
        'accountName'=>'Honorarios a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.39',
        'accountName'=>'Honorarios a personas morales residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.40',
        'accountName'=>'Honorarios a personas morales residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.41',
        'accountName'=>'Honorarios a personas morales residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.42',
        'accountName'=>'Honorarios aduanales personas físicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.43',
        'accountName'=>'Honorarios aduanales personas morales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.44',
        'accountName'=>'Honorarios al consejo de administración'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.45',
        'accountName'=>'Arrendamiento a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.46',
        'accountName'=>'Arrendamiento a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.47',
        'accountName'=>'Arrendamiento a residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.48',
        'accountName'=>'Combustibles y lubricantes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.49',
        'accountName'=>'Viáticos y gastos de viaje'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.50',
        'accountName'=>'Teléfono, internet'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.51',
        'accountName'=>'Agua'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.52',
        'accountName'=>'Energía eléctrica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.53',
        'accountName'=>'Vigilancia y seguridad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.54',
        'accountName'=>'Limpieza'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.55',
        'accountName'=>'Papelería y artículos de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.56',
        'accountName'=>'Mantenimiento y conservación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.57',
        'accountName'=>'Seguros y fianzas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.58',
        'accountName'=>'Otros impuestos y derechos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.59',
        'accountName'=>'Recargos fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.60',
        'accountName'=>'Cuotas y suscripciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.61',
        'accountName'=>'Propaganda y publicidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.62',
        'accountName'=>'Capacitación al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.63',
        'accountName'=>'Donativos y ayudas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.64',
        'accountName'=>'Asistencia técnica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.65',
        'accountName'=>'Regalías sujetas a otros porcentajes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.66',
        'accountName'=>'Regalías sujetas al 5%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.67',
        'accountName'=>'Regalías sujetas al 10%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.68',
        'accountName'=>'Regalías sujetas al 15%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.70',
        'accountName'=>'Regalías sujetas al 30%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.71',
        'accountName'=>'Regalías sin retención'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.72',
        'accountName'=>'Fletes y acarreos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.73',
        'accountName'=>'Gastos de importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.74',
        'accountName'=>'Patentes y marcas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.75',
        'accountName'=>'Uniformes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.76',
        'accountName'=>'Prediales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.77',
        'accountName'=>'Gastos de administración de urbanización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.78',
        'accountName'=>'Gastos de administración de construcción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.79',
        'accountName'=>'Fletes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.80',
        'accountName'=>'Recolección de bienes del sector agropecuario y/o ganadero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.81',
        'accountName'=>'Gastos no deducibles (sin requisitos fiscales)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'603',
        'level'=>'2',
        'code'=>'603.82',
        'accountName'=>'Otros gastos de administración'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.01',
        'accountName'=>'Sueldos y salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.02',
        'accountName'=>'Compensaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.03',
        'accountName'=>'Tiempos extras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.04',
        'accountName'=>'Premios de asistencia'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.05',
        'accountName'=>'Premios de puntualidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.06',
        'accountName'=>'Vacaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.07',
        'accountName'=>'Prima vacacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.08',
        'accountName'=>'Prima dominical'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.09',
        'accountName'=>'Días festivos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.10',
        'accountName'=>'Gratificaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.11',
        'accountName'=>'Primas de antigüedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.12',
        'accountName'=>'Aguinaldo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.13',
        'accountName'=>'Indemnizaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.14',
        'accountName'=>'Destajo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.15',
        'accountName'=>'Despensa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.16',
        'accountName'=>'Transporte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.17',
        'accountName'=>'Servicio médico'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.18',
        'accountName'=>'Ayuda en gastos funerarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.19',
        'accountName'=>'Fondo de ahorro'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.20',
        'accountName'=>'Cuotas sindicales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.21',
        'accountName'=>'PTU'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.22',
        'accountName'=>'Estímulo al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.23',
        'accountName'=>'Previsión social'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.24',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.24',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.25',
        'accountName'=>'Otras prestaciones al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.26',
        'accountName'=>'Cuotas al IMSS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.27',
        'accountName'=>'Aportaciones al infonavit'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.28',
        'accountName'=>'Aportaciones al SAR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.29',
        'accountName'=>'Impuesto estatal sobre nóminas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.30',
        'accountName'=>'Otras aportaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.31',
        'accountName'=>'Asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.32',
        'accountName'=>'Servicios administrativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.33',
        'accountName'=>'Servicios administrativos partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.34',
        'accountName'=>'Honorarios a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.35',
        'accountName'=>'Honorarios a personas físicas residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.36',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.37',
        'accountName'=>'Honorarios a personas físicas residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.38',
        'accountName'=>'Honorarios a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.39',
        'accountName'=>'Honorarios a personas morales residentes nacionales partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.40',
        'accountName'=>'Honorarios a personas morales residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.41',
        'accountName'=>'Honorarios a personas morales residentes del extranjero partes relacionadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.42',
        'accountName'=>'Honorarios aduanales personas físicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.43',
        'accountName'=>'Honorarios aduanales personas morales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.44',
        'accountName'=>'Honorarios al consejo de administración'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.45',
        'accountName'=>'Arrendamiento a personas físicas residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.46',
        'accountName'=>'Arrendamiento a personas morales residentes nacionales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.47',
        'accountName'=>'Arrendamiento a residentes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.48',
        'accountName'=>'Combustibles y lubricantes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.49',
        'accountName'=>'Viáticos y gastos de viaje'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.50',
        'accountName'=>'Teléfono, internet'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.51',
        'accountName'=>'Agua'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.52',
        'accountName'=>'Energía eléctrica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.53',
        'accountName'=>'Vigilancia y seguridad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.54',
        'accountName'=>'Limpieza'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.55',
        'accountName'=>'Papelería y artículos de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.56',
        'accountName'=>'Mantenimiento y conservación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.57',
        'accountName'=>'Seguros y fianzas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.58',
        'accountName'=>'Otros impuestos y derechos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.59',
        'accountName'=>'Recargos fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.60',
        'accountName'=>'Cuotas y suscripciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.61',
        'accountName'=>'Propaganda y publicidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.62',
        'accountName'=>'Capacitación al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.63',
        'accountName'=>'Donativos y ayudas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.64',
        'accountName'=>'Asistencia técnica'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.65',
        'accountName'=>'Regalías sujetas a otros porcentajes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.66',
        'accountName'=>'Regalías sujetas al 5%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.67',
        'accountName'=>'Regalías sujetas al 10%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.68',
        'accountName'=>'Regalías sujetas al 15%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.69',
        'accountName'=>'Regalías sujetas al 25%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.70',
        'accountName'=>'Regalías sujetas al 30%'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.71',
        'accountName'=>'Regalías sin retención'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.72',
        'accountName'=>'Fletes y acarreos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.73',
        'accountName'=>'Gastos de importación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.74',
        'accountName'=>'Patentes y marcas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.75',
        'accountName'=>'Uniformes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.76',
        'accountName'=>'Prediales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.77',
        'accountName'=>'Gastos de fabricación de urbanización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.78',
        'accountName'=>'Gastos de fabricación de construcción'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.79',
        'accountName'=>'Fletes del extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.80',
        'accountName'=>'Recolección de bienes del sector agropecuario y/o ganadero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.81',
        'accountName'=>'Gastos no deducibles (sin requisitos fiscales)'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'604',
        'level'=>'2',
        'code'=>'604.82',
        'accountName'=>'Otros gastos de fabricación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.01',
        'accountName'=>'Mano de obra'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.02',
        'accountName'=>'Sueldos y Salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.03',
        'accountName'=>'Compensaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.04',
        'accountName'=>'Tiempos extras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.05',
        'accountName'=>'Premios de asistencia'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.06',
        'accountName'=>'Premios de puntualidad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.07',
        'accountName'=>'Vacaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.08',
        'accountName'=>'Prima vacacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.09',
        'accountName'=>'Prima dominical'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.10',
        'accountName'=>'Días festivos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.11',
        'accountName'=>'Gratificaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.12',
        'accountName'=>'Primas de antigüedad'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.13',
        'accountName'=>'Aguinaldo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.14',
        'accountName'=>'Indemnizaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.15',
        'accountName'=>'Destajo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.16',
        'accountName'=>'Despensa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.17',
        'accountName'=>'Transporte'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.18',
        'accountName'=>'Servicio médico'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.19',
        'accountName'=>'Ayuda en gastos funerarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.20',
        'accountName'=>'Fondo de ahorro'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.21',
        'accountName'=>'Cuotas sindicales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.22',
        'accountName'=>'PTU'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.23',
        'accountName'=>'Estímulo al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.24',
        'accountName'=>'Previsión social'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.25',
        'accountName'=>'Aportaciones para el plan de jubilación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.26',
        'accountName'=>'Otras prestaciones al personal'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.27',
        'accountName'=>'Asimilados a salarios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.28',
        'accountName'=>'Cuotas al IMSS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.29',
        'accountName'=>'Aportaciones al infonavit'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.30',
        'accountName'=>'Aportaciones al SAR'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'605',
        'level'=>'2',
        'code'=>'605.31',
        'accountName'=>'Otros costos de mano de obra directa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'606',
        'level'=>'2',
        'code'=>'606.01',
        'accountName'=>'Otros costos de mano de obra directa'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'606',
        'level'=>'2',
        'code'=>'606.01',
        'accountName'=>'Facilidades administrativas fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'607',
        'level'=>'2',
        'code'=>'607.01',
        'accountName'=>'Participación de los trabajadores en las utilidades'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'608',
        'level'=>'2',
        'code'=>'608.01',
        'accountName'=>'Participación en resultados de subsidiarias'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'609',
        'level'=>'2',
        'code'=>'609.01',
        'accountName'=>'Participación en resultados de asociadas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'610',
        'level'=>'2',
        'code'=>'610.01',
        'accountName'=>'Participación de los trabajadores en las utilidades diferida'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'611',
        'level'=>'2',
        'code'=>'611.01',
        'accountName'=>'Impuesto Sobre la renta'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'611',
        'level'=>'2',
        'code'=>'611.02',
        'accountName'=>'Impuesto Sobre la renta por remanente distribuible'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'612',
        'level'=>'2',
        'code'=>'612.01',
        'accountName'=>'Gastos no deducibles para CUFIN'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.01',
        'accountName'=>'Depreciación de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.02',
        'accountName'=>'Depreciación de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.03',
        'accountName'=>'Depreciación de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.04',
        'accountName'=>'Depreciación de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.05',
        'accountName'=>'Depreciación de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.06',
        'accountName'=>'Depreciación de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.07',
        'accountName'=>'Depreciación de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.08',
        'accountName'=>'Depreciación de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.09',
        'accountName'=>'Depreciación de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.10',
        'accountName'=>'Depreciación de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.11',
        'accountName'=>'Depreciación de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.12',
        'accountName'=>'Depreciación de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.13',
        'accountName'=>'Depreciación de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.14',
        'accountName'=>'Depreciación de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.15',
        'accountName'=>'Depreciación de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.16',
        'accountName'=>'Depreciación de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.17',
        'accountName'=>'Depreciación de adaptaciones y mejoras'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'613',
        'level'=>'2',
        'code'=>'613.18',
        'accountName'=>'Depreciación de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.01',
        'accountName'=>'Amortización de gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.02',
        'accountName'=>'Amortización de gastos pre operativos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.03',
        'accountName'=>'Amortización de regalías, asistencia técnica y otros gastos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.04',
        'accountName'=>'Amortización de activos intangibles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.05',
        'accountName'=>'Amortización de gastos de organización'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.06',
        'accountName'=>'Amortización de investigación y desarrollo de mercado'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.07',
        'accountName'=>'Amortización de marcas y patentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.08',
        'accountName'=>'Amortización de crédito mercantil'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.09',
        'accountName'=>'Amortización de gastos de instalación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'614',
        'level'=>'2',
        'code'=>'614.10',
        'accountName'=>'Amortización de otros activos diferidos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.01',
        'accountName'=>'Pérdida cambiaria'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.02',
        'accountName'=>'Pérdida cambiaria nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.03',
        'accountName'=>'Pérdida cambiaria extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.04',
        'accountName'=>'Intereses a cargo bancario nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.05',
        'accountName'=>'Intereses a cargo bancario extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.06',
        'accountName'=>'Intereses a cargo de personas físicas nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.07',
        'accountName'=>'Intereses a cargo de personas físicas extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.08',
        'accountName'=>'Intereses a cargo de personas morales nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.09',
        'accountName'=>'Intereses a cargo de personas morales extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.10',
        'accountName'=>'Comisiones bancarias'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'701',
        'level'=>'2',
        'code'=>'701.11',
        'accountName'=>'Otros gastos financieros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.01',
        'accountName'=>'Utilidad cambiaria'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.02',
        'accountName'=>'Utilidad cambiaria nacional parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.03',
        'accountName'=>'Utilidad cambiaria extranjero parte relacionada'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.04',
        'accountName'=>'Intereses a favor bancarios nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.05',
        'accountName'=>'Intereses a favor bancarios extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.06',
        'accountName'=>'Intereses a favor de personas físicas nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.07',
        'accountName'=>'Intereses a favor de personas físicas extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.08',
        'accountName'=>'Intereses a favor de personas morales nacional'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.09',
        'accountName'=>'Intereses a favor de personas morales extranjero'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'702',
        'level'=>'2',
        'code'=>'702.10',
        'accountName'=>'Otros productos financieros'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.01',
        'accountName'=>'Pérdida en venta y/o baja de terrenos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.02',
        'accountName'=>'Pérdida en venta y/o baja de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.03',
        'accountName'=>'Pérdida en venta y/o baja de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.04',
        'accountName'=>'Pérdida en venta y/o baja de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.05',
        'accountName'=>'Pérdida en venta y/o baja de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.06',
        'accountName'=>'Pérdida en venta y/o baja de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.07',
        'accountName'=>'Pérdida en venta y/o baja de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.08',
        'accountName'=>'Pérdida en venta y/o baja de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.09',
        'accountName'=>'Pérdida en venta y/o baja de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.10',
        'accountName'=>'Pérdida en venta y/o baja de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.11',
        'accountName'=>'Pérdida en venta y/o baja de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.12',
        'accountName'=>'Pérdida en venta y/o baja de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.13',
        'accountName'=>'Pérdida en venta y/o baja de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.14',
        'accountName'=>'Pérdida en venta y/o baja de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.15',
        'accountName'=>'Pérdida en venta y/o baja de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.16',
        'accountName'=>'Pérdida en venta y/o baja de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.17',
        'accountName'=>'Pérdida en venta y/o baja de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.18',
        'accountName'=>'Pérdida en venta y/o baja de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.19',
        'accountName'=>'Pérdida por enajenación de acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.20',
        'accountName'=>'Pérdida por enajenación de partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'703',
        'level'=>'2',
        'code'=>'703.21',
        'accountName'=>'Otros gastos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.01',
        'accountName'=>'Ganancia en venta y/o baja de terrenos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.02',
        'accountName'=>'Ganancia en venta y/o baja de edificios'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.03',
        'accountName'=>'Ganancia en venta y/o baja de maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.04',
        'accountName'=>'Ganancia en venta y/o baja de automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.05',
        'accountName'=>'Ganancia en venta y/o baja de mobiliario y equipo de oficina'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.06',
        'accountName'=>'Ganancia en venta y/o baja de equipo de cómputo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.07',
        'accountName'=>'Ganancia en venta y/o baja de equipo de comunicación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.08',
        'accountName'=>'Ganancia en venta y/o baja de activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.09',
        'accountName'=>'Ganancia en venta y/o baja de otros activos fijos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.10',
        'accountName'=>'Ganancia en venta y/o baja de ferrocarriles'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.11',
        'accountName'=>'Ganancia en venta y/o baja de embarcaciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.12',
        'accountName'=>'Ganancia en venta y/o baja de aviones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.13',
        'accountName'=>'Ganancia en venta y/o baja de troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.14',
        'accountName'=>'Ganancia en venta y/o baja de equipo de comunicaciones telefónicas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.15',
        'accountName'=>'Ganancia en venta y/o baja de equipo de comunicación satelital'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.16',
        'accountName'=>'Ganancia en venta y/o baja de equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.17',
        'accountName'=>'Ganancia en venta de maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.18',
        'accountName'=>'Ganancia en venta y/o baja de otra maquinaria y equipo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.19',
        'accountName'=>'Ganancia por enajenación de acciones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.20',
        'accountName'=>'Ganancia por enajenación de partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.21',
        'accountName'=>'Ingresos por estímulos fiscales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.22',
        'accountName'=>'Ingresos por condonación de adeudo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'704',
        'level'=>'2',
        'code'=>'704.23',
        'accountName'=>'Otros productos'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'801',
        'level'=>'2',
        'code'=>'801.01',
        'accountName'=>'UFIN'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'801',
        'level'=>'2',
        'code'=>'801.02',
        'accountName'=>'Contra cuenta UFIN'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'802',
        'level'=>'2',
        'code'=>'802.01',
        'accountName'=>'CUFIN'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'802',
        'level'=>'2',
        'code'=>'802.02',
        'accountName'=>'Contra cuenta CUFIN'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'803',
        'level'=>'2',
        'code'=>'803.01',
        'accountName'=>'CUFIN de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'803',
        'level'=>'2',
        'code'=>'803.02',
        'accountName'=>'Contra cuenta CUFIN de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'804',
        'level'=>'2',
        'code'=>'804.01',
        'accountName'=>'CUFINRE'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'804',
        'level'=>'2',
        'code'=>'804.02',
        'accountName'=>'Contra cuenta CUFINRE'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'805',
        'level'=>'2',
        'code'=>'805.01',
        'accountName'=>'CUFINRE de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'805',
        'level'=>'2',
        'code'=>'805.02',
        'accountName'=>'Contra cuenta CUFINRE de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'806',
        'level'=>'2',
        'code'=>'806.01',
        'accountName'=>'CUCA'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'806',
        'level'=>'2',
        'code'=>'806.02',
        'accountName'=>'Contra cuenta CUCA'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'807',
        'level'=>'2',
        'code'=>'807.01',
        'accountName'=>'CUCA de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'807',
        'level'=>'2',
        'code'=>'807.02',
        'accountName'=>'Contra cuenta CUCA de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'808',
        'level'=>'2',
        'code'=>'808.01',
        'accountName'=>'Ajuste anual por inflación acumulable'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'808',
        'level'=>'2',
        'code'=>'808.02',
        'accountName'=>'Acumulación del ajuste anual inflacionario'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'809',
        'level'=>'2',
        'code'=>'809.01',
        'accountName'=>'Ajuste anual por inflación deducible'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'809',
        'level'=>'2',
        'code'=>'809.02',
        'accountName'=>'Deducción del ajuste anual inflacionario'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'810',
        'level'=>'2',
        'code'=>'810.01',
        'accountName'=>'Deducción de inversión'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'810',
        'level'=>'2',
        'code'=>'810.02',
        'accountName'=>'Contra cuenta deducción de inversiones'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'811',
        'level'=>'2',
        'code'=>'811.01',
        'accountName'=>'Utilidad o pérdida fiscal en venta y/o baja de activo fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'811',
        'level'=>'2',
        'code'=>'811.02',
        'accountName'=>'Contra cuenta utilidad o pérdida fiscal en venta y/o baja de activo fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'812',
        'level'=>'2',
        'code'=>'812.01',
        'accountName'=>'Utilidad o pérdida fiscal en venta acciones o partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'812',
        'level'=>'2',
        'code'=>'812.02',
        'accountName'=>'Contra cuenta utilidad o pérdida fiscal en venta acciones o partes sociales'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'813',
        'level'=>'2',
        'code'=>'813.01',
        'accountName'=>'Pérdidas fiscales pendientes de amortizar actualizadas de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'813',
        'level'=>'2',
        'code'=>'813.02',
        'accountName'=>'Actualización de pérdidas fiscales pendientes de amortizar de ejercicios anteriores'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'814',
        'level'=>'2',
        'code'=>'814.01',
        'accountName'=>'Mercancías recibidas en consignación'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'814',
        'level'=>'2',
        'code'=>'814.02',
        'accountName'=>'Consignación de mercancías recibidas'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'815',
        'level'=>'2',
        'code'=>'815.01',
        'accountName'=>'Crédito fiscal de IVA e IEPS por la importación de mercancías'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'815',
        'level'=>'2',
        'code'=>'815.02',
        'accountName'=>'Importación de mercancías con aplicación de crédito fiscal de IVA e IEPS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'816',
        'level'=>'2',
        'code'=>'816.01',
        'accountName'=>'Crédito fiscal de IVA e IEPS por la importación de activo fijo'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'816',
        'level'=>'2',
        'code'=>'816.02',
        'accountName'=>'Importación de activo fijo con aplicación de crédito fiscal de IVA e IEPS'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'899',
        'level'=>'2',
        'code'=>'899.01',
        'accountName'=>'Otras cuentas de orden'
      ]);

      DB::table('accountcatalogs')->insert([
        'idgrouperaccount'=>'899',
        'level'=>'2',
        'code'=>'899.02',
        'accountName'=>'Contra cuenta otras cuentas de orden'
      ]);
    }
}
