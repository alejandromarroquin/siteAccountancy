<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('accounts')->insert([
        'groupcode'=>'100',
        'accountname'=>'Activo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'101',
        'level'=>'1',
        'accountname'=>'Caja'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'102',
        'level'=>'1',
        'accountname'=>'Bancos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'103',
        'level'=>'1',
        'accountname'=>'Inversiones'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'104',
        'level'=>'1',
        'accountname'=>'Otros instrumentos financieros'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'105',
        'level'=>'1',
        'accountname'=>'Clientes'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'106',
        'level'=>'1',
        'accountname'=>'Cuentas y documentos por cobrar a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'107',
        'level'=>'1',
        'accountname'=>'Deudores diversos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'108',
        'level'=>'1',
        'accountname'=>'Estimación de cuentas incobrables'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'109',
        'level'=>'1',
        'accountname'=>'Pagos anticipados'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'110',
        'level'=>'1',
        'accountname'=>'Subsidio al empleo por aplicar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'111',
        'level'=>'1',
        'accountname'=>'Crédito al diésel por acreditar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'112',
        'level'=>'1',
        'accountname'=>'Otros estímulos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'113',
        'level'=>'1',
        'accountname'=>'Impuestos a favor'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'114',
        'level'=>'1',
        'accountname'=>'Pagos provisionales'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'115',
        'level'=>'1',
        'accountname'=>'Inventario'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'116',
        'level'=>'1',
        'accountname'=>'Estimación de inventarios obsoletos y de lento movimiento'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'117',
        'level'=>'1',
        'accountname'=>'Obras en proceso de inmuebles'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'118',
        'level'=>'1',
        'accountname'=>'Impuestos acreditables pagados'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'119',
        'level'=>'1',
        'accountname'=>'Impuestos acreditables por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'120',
        'level'=>'1',
        'accountname'=>'Anticipo a proveedores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'121',
        'level'=>'1',
        'accountname'=>'Otros activos a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'151',
        'level'=>'1',
        'accountname'=>'Terrenos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'152',
        'level'=>'1',
        'accountname'=>'Edificios'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'153',
        'level'=>'1',
        'accountname'=>'Maquinaria y equipo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'154',
        'level'=>'1',
        'accountname'=>'Automóviles, autobuses, camiones de carga, tractocamiones, montacargas y remolques'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'155',
        'level'=>'1',
        'accountname'=>'Mobiliario y equipo de oficina'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'156',
        'level'=>'1',
        'accountname'=>'Equipo de cómputo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'157',
        'level'=>'1',
        'accountname'=>'Equipo de comunicación'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'158',
        'level'=>'1',
        'accountname'=>'Activos biológicos, vegetales y semovientes'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'159',
        'level'=>'1',
        'accountname'=>'Obras en proceso de activos fijos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'160',
        'level'=>'1',
        'accountname'=>'Otros activos fijos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'161',
        'level'=>'1',
        'accountname'=>'Ferrocarriles'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'162',
        'level'=>'1',
        'accountname'=>'Embarcaciones'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'163',
        'level'=>'1',
        'accountname'=>'Aviones'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'164',
        'level'=>'1',
        'accountname'=>'Troqueles, moldes, matrices y herramental'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'165',
        'level'=>'1',
        'accountname'=>'Equipo de comunicaciones telefónicas'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'166',
        'level'=>'1',
        'accountname'=>'Equipo de comunicación satelital'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'167',
        'level'=>'1',
        'accountname'=>'Equipo de adaptaciones para personas con capacidades diferentes'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'168',
        'level'=>'1',
        'accountname'=>'Maquinaria y equipo de generación de energía de fuentes renovables o de sistemas de cogeneración de electricidad eficiente'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'169',
        'level'=>'1',
        'accountname'=>'Otra maquinaria y equipo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'170',
        'level'=>'1',
        'accountname'=>'Adaptaciones y mejoras'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'171',
        'level'=>'1',
        'accountname'=>'Depreciación acumulada de activos fijos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'172',
        'level'=>'1',
        'accountname'=>'Pérdida por deterioro acumulado de activos fijos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'173',
        'level'=>'1',
        'accountname'=>'Gastos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'174',
        'level'=>'1',
        'accountname'=>'Gastos pre operativos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'175',
        'level'=>'1',
        'accountname'=>'Regalías, asistencia técnica y otros gastos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'176',
        'level'=>'1',
        'accountname'=>'Activos intangibles'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'177',
        'level'=>'1',
        'accountname'=>'Gastos de organización'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'178',
        'level'=>'1',
        'accountname'=>'Investigación y desarrollo de mercado'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'179',
        'level'=>'1',
        'accountname'=>'Marcas y patentes'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'180',
        'level'=>'1',
        'accountname'=>'Crédito mercantil'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'181',
        'level'=>'1',
        'accountname'=>'Gastos de instalación'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'182',
        'level'=>'1',
        'accountname'=>'Otros activos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'183',
        'level'=>'1',
        'accountname'=>'Amortización acumulada de activos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'184',
        'level'=>'1',
        'accountname'=>'Depósitos en garantía'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'185',
        'level'=>'1',
        'accountname'=>'Impuestos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'186',
        'level'=>'1',
        'accountname'=>'Cuentas y documentos por cobrar a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'187',
        'level'=>'1',
        'accountname'=>'Participación de los trabajadores en las utilidades diferidas'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'188',
        'level'=>'1',
        'accountname'=>'Inversiones permanentes en acciones'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'189',
        'level'=>'1',
        'accountname'=>'Estimación por deterioro de inversiones permanentes en acciones'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'190',
        'level'=>'1',
        'accountname'=>'Otros instrumentos financieros'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'191',
        'level'=>'1',
        'accountname'=>'Otros activos a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'200',
        'accountname'=>'Pasivo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'201',
        'level'=>'1',
        'accountname'=>'Proveedores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'202',
        'level'=>'1',
        'accountname'=>'Cuentas por pagar a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'203',
        'level'=>'1',
        'accountname'=>'Cobros anticipados a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'204',
        'level'=>'1',
        'accountname'=>'Instrumentos financieros a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'205',
        'level'=>'1',
        'accountname'=>'Acreedores diversos a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'206',
        'level'=>'1',
        'accountname'=>'Anticipo de cliente'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'207',
        'level'=>'1',
        'accountname'=>'Impuestos trasladados'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'208',
        'level'=>'1',
        'accountname'=>'Impuestos trasladados cobrados'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'209',
        'level'=>'1',
        'accountname'=>'Impuestos trasladados no cobrados'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'210',
        'level'=>'1',
        'accountname'=>'Provisión de sueldos y salarios por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'211',
        'level'=>'1',
        'accountname'=>'Provisión de contribuciones de seguridad social por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'212',
        'level'=>'1',
        'accountname'=>'Provisión de impuesto estatal sobre nómina por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'213',
        'level'=>'1',
        'accountname'=>'Impuestos y derechos por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'214',
        'level'=>'1',
        'accountname'=>'Dividendos por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'215',
        'level'=>'1',
        'accountname'=>'PTU por pagar'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'216',
        'level'=>'1',
        'accountname'=>'Impuestos retenidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'217',
        'level'=>'1',
        'accountname'=>'Pagos realizados por cuenta de terceros'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'218',
        'level'=>'1',
        'accountname'=>'Otros pasivos a corto plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'251',
        'level'=>'1',
        'accountname'=>'Acreedores diversos a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'252',
        'level'=>'1',
        'accountname'=>'Cuentas por pagar a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'253',
        'level'=>'1',
        'accountname'=>'Cobros anticipados a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'254',
        'level'=>'1',
        'accountname'=>'Instrumentos financieros a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'255',
        'level'=>'1',
        'accountname'=>'Pasivos por beneficios a los empleados a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'256',
        'level'=>'1',
        'accountname'=>'Otros pasivos a largo plazo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'257',
        'level'=>'1',
        'accountname'=>'Participación de los trabajadores en las utilidades diferida'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'258',
        'level'=>'1',
        'accountname'=>'Obligaciones contraídas de fideicomisos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'259',
        'level'=>'1',
        'accountname'=>'Impuestos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'260',
        'level'=>'1',
        'accountname'=>'Pasivos diferidos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'300',
        'accountname'=>'Capital contable'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'301',
        'level'=>'1',
        'accountname'=>'Capital social'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'302',
        'level'=>'1',
        'accountname'=>'Patrimonio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'303',
        'level'=>'1',
        'accountname'=>'Reserva legal'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'304',
        'level'=>'1',
        'accountname'=>'Resultado de ejercicios anteriores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'305',
        'level'=>'1',
        'accountname'=>'Resultado del ejercicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'306',
        'level'=>'1',
        'accountname'=>'Otras cuentas de capital'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'400',
        'accountname'=>'Ingresos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'401',
        'level'=>'1',
        'accountname'=>'Ingresos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'402',
        'level'=>'1',
        'accountname'=>'Devoluciones, descuentos o bonificaciones sobre ingresos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'403',
        'level'=>'1',
        'accountname'=>'Otros ingresos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'500',
        'accountname'=>'Costos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'501',
        'level'=>'1',
        'accountname'=>'Costo de venta y/o servicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'502',
        'level'=>'1',
        'accountname'=>'Compras'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'503',
        'level'=>'1',
        'accountname'=>'Devoluciones, descuentos o bonificaciones sobre compras'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'504',
        'level'=>'1',
        'accountname'=>'Otras cuentas de costos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'505',
        'level'=>'1',
        'accountname'=>'Costo de activo fijo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'600',
        'accountname'=>'Gastos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'601',
        'level'=>'1',
        'accountname'=>'Gastos generales'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'602',
        'level'=>'1',
        'accountname'=>'Gastos de venta'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'603',
        'level'=>'1',
        'accountname'=>'Gastos de administración'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'604',
        'level'=>'1',
        'accountname'=>'Gastos de fabricación'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'605',
        'level'=>'1',
        'accountname'=>'Mano de obra directa'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'606',
        'level'=>'1',
        'accountname'=>'Facilidades administrativas fiscales'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'607',
        'level'=>'1',
        'accountname'=>'Participación de los trabajadores en las utilidades'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'608',
        'level'=>'1',
        'accountname'=>'Participación en resultados de subsidiarias'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'609',
        'level'=>'1',
        'accountname'=>'Participación en resultados de asociadas'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'610',
        'level'=>'1',
        'accountname'=>'Participación de los trabajadores en las utilidades diferida'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'611',
        'level'=>'1',
        'accountname'=>'Impuesto Sobre la renta'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'612',
        'level'=>'1',
        'accountname'=>'Gastos no deducibles para CUFIN'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'613',
        'level'=>'1',
        'accountname'=>'Depreciación contable'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'614',
        'level'=>'1',
        'accountname'=>'Amortización contable'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'700',
        'accountname'=>'Resultado integral de financiamiento'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'701',
        'level'=>'1',
        'accountname'=>'Gastos financieros'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'702',
        'level'=>'1',
        'accountname'=>'Productos financieros'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'703',
        'level'=>'1',
        'accountname'=>'Otros gastos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'704',
        'level'=>'1',
        'accountname'=>'Otros productos'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'800',
        'level'=>'1',
        'accountname'=>'Cuentas de orden'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'801',
        'level'=>'1',
        'accountname'=>'UFIN del ejercicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'802',
        'level'=>'1',
        'accountname'=>'CUFIN del ejercicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'803',
        'level'=>'1',
        'accountname'=>'CUFIN de ejercicios anteriores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'804',
        'level'=>'1',
        'accountname'=>'CUFINRE del ejercicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'805',
        'level'=>'1',
        'accountname'=>'CUFINRE de ejercicios anteriores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'806',
        'level'=>'1',
        'accountname'=>'CUCA del ejercicio'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'807',
        'level'=>'1',
        'accountname'=>'CUCA de ejercicios anteriores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'808',
        'level'=>'1',
        'accountname'=>'Ajuste anual por inflación acumulable'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'809',
        'level'=>'1',
        'accountname'=>'Ajuste anual por inflación deducible'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'810',
        'level'=>'1',
        'accountname'=>'Deducción de inversión'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'811',
        'level'=>'1',
        'accountname'=>'Utilidad o pérdida fiscal en venta y/o baja de activo fijo'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'812',
        'level'=>'1',
        'accountname'=>'Utilidad o pérdida fiscal en venta acciones o partes sociales'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'813',
        'level'=>'1',
        'accountname'=>'Pérdidas fiscales pendientes de amortizar actualizadas de ejercicios anteriores'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'814',
        'level'=>'1',
        'accountname'=>'Mercancías recibidas en consignación'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'815',
        'level'=>'1',
        'accountname'=>'Crédito fiscal de IVA e IEPS por la importación de mercancías para empresas certificadas'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'816',
        'level'=>'1',
        'accountname'=>'Crédito fiscal de IVA e IEPS por la importación de activos fijos para empresas certificadas'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'899',
        'level'=>'1',
        'accountname'=>'Otras cuentas de orden'
      ]);

      DB::table('accounts')->insert([
        'groupcode'=>'000',
        'accountname'=>'Código para uso exclusivo de contribuyentes del sector financiero'
      ]);
    }
}
