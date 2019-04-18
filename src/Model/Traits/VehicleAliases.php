<?php

declare(strict_types=1);

namespace Siero\Corcel\Model\Traits;

use Corcel\Concerns\Aliases;
use Siero\Corcel\Enums\VehicleKind;
use Siero\Corcel\Enums\Transmission;
use Siero\Corcel\Enums\Fuel;
use Siero\Corcel\Enums\TaxType;
use Siero\Corcel\Enums\BaseColor;
use Siero\Corcel\Enums\VarnishType;
use Siero\Corcel\Enums\LiningType;
use Siero\Corcel\Enums\EnergyRating;
use Siero\Corcel\Enums\EmissionRating;

/**
 * All vehicle aliases
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
trait VehicleAliases
{
    use Aliases;

    /**
     * @var array
     */
    protected static $aliases = [
        'hexonId' => 'voertuignr_hexon',
        'brand' => 'merk',
        'vehicleType' => 'voertuigsoort',
        'bodyStyle' => 'carrosserie',
        'doorCount' => 'aantal_deuren',
        'fuelKind' => 'brandstof',
        'transmission' => 'transmissie',
        'gearCount' => 'aantal_versnellingen',
        'taxType' => 'btw_marge',
        'baseColor' => 'basiskleur',
        'varnishType' => 'laksoort',
        'constructionYear' => 'bouwjaar',
        'apkAtHandoff' => 'apk_bij_aflevering',
        'weight' => 'massa',
        'cylinderCount' => 'cilinder_aantal',
        'cylinderContents' => 'cilinder_inhoud',
        'powerKw' => 'vermogen_motor_kw',
        'powerHp' => 'vermogen_motor_pk',
        'seatCount' => 'aantal_zitplaatsen',
        'bpmPrice' => 'bpm_bedrag',
        'coating' => 'bekleding',
        'napWeblabel' => 'nap_weblabel',
        'maintenanceLogs' => 'onderhoudsboekjes',
        'roadworthyCost' => 'kosten_rijklaar',
        'averageConsumption' => 'gemiddeld_verbruik',
        'damagedVehicle' => 'schadevoertuig',
        'consignment' => 'consignatie',
        'wheelBase' => 'wielbasis',
        'energyLabel' => 'energielabel',
        'modelDateStart' => 'modeldatum_vanaf',
        'modelDateEnd' => 'modeldatum_tot',
        'entryDate' => 'invoerdatum',
        'e10Ready' => 'e10_geschikt',
        'arrivalDate' => 'datum_binnenkomst',
        'classic' => 'klassieker',
        'country' => 'land',
        'topSpeed' => 'topsnelheid',
        'tankCapacity' => 'tankinhoud',
        'acceleration' => 'acceleratie',
        'consumptionCity' => 'verbruik_stad',
        'consumptionHighway' => 'verbruik_snelweg',
        'co2Emission' => 'co2_uitstoot',
        'currency' => 'munteenheid',
        'roadTaxMin' => 'wegenbelasting_kwartaal_min',
        'roadTaxMax' => 'wegenbelasting_kwartaal_max',
        'sold' => 'verkocht',
        'expected' => 'verwacht',
        'reserved' => 'gereserveerd',
        'license' => 'kenteken',
        'date1' => 'datum_deel_1',
        'date1a' => 'datum_deel_1a',
        'date1b' => 'datum_deel_1b',
        'apkExpire' => 'apk_tot',
        'maxPull' => 'max_trekgewicht',
        'maxLoad' => 'laadvermogen',
        'length' => 'lengte',
        'width' => 'breedte',
        'height' => 'hoogte',
        'vin' => 'vin',
        'emissionRate' => 'emissieklasse',
        'additionPercentage' => 'bijtelling_pct',
        'maxPullUnrestrained' => 'max_trekgewicht_ongeremd',
        'axleCount' => 'aantal_assen',
        'axlePowered' => 'assen_aangedreven',
        'extended' => 'verlengd',
        'heightened' => 'verhoogd',
        'color' => 'kleur',
        'keyCount' => 'aantal_sleutels',
        'bedCount' => 'aantal_slaapplaatsen',
        'codeKeyCard' => 'code_pas_sleutel',
        'handTransmitterCount' => 'aantal_handzenders',
        'interiorColor' => 'interieurkleur',
        'suffix' => 'toevoeging',
        'particulateEmission' => 'fijnstof_uitstoot'
    ];

    /**
     * Casts for Laravel and enums
     *
     * @var array
     */
    protected $casts = [
        'wordpress_id' => 'int',
        'id' => 'int',
        'voertuignr_hexon' => 'int',
        'voertuigsoort' => VehicleKind::class,
        'aantal_deuren' => 'int',
        'brandstof' => Fuel::class,
        'transmissie' => Transmission::class,
        'aantal_versnellingen' => 'int',
        'btw_marge' => TaxType::class,
        'nieuw_voertuig' => 'bool',
        'basiskleur' => BaseColor::class,
        'laksoort' => VarnishType::class,
        'bouwjaar' => 'int',
        'apk_bij_aflevering' => 'bool',
        'massa' => 'int',
        'cilinder_aantal' => 'int',
        'cilinder_inhoud' => 'int',
        'vermogen_motor_kw' => 'int',
        'vermogen_motor_pk' => 'int',
        'aantal_zitplaatsen' => 'int',
        'bpm_bedrag' => 'int',
        'bekleding' => LiningType::class,
        'nap_weblabel' => 'bool',
        'onderhoudsboekjes' => 'string',
        'kosten_rijklaar' => 'int',
        'gemiddeld_verbruik' => 'decimal',
        'schadevoertuig' => 'bool',
        'consignatie' => 'bool',
        'demovoertuig' => 'bool',
        'wielbasis' => 'int',
        'energielabel' => EnergyRating::class,
        'modeldatum_vanaf' => 'hexon-date',
        'modeldatum_tot' => 'hexon-date',
        'oldtimer' => 'bool',
        'bieden_vanaf' => 'int',
        'invoerdatum' => 'hexon-date',
        'e10_geschikt' => 'bool',
        'datum_binnenkomst' => 'hexon-date',
        'verhuur' => 'verhuur',
        'klassieker' => 'bool',
        'topsnelheid' => 'int',
        'tankinhoud' => 'int',
        'acceleratie' => 'decimal',
        'verbruik_stad' => 'decimal',
        'verbruik_snelweg' => 'decimal',
        'co2_uitstoot' => 'decimal',
        'autotrust_garantie' => 'bool',
        'vakgarant_premium_occasion' => 'bool',
        'vwe_occasion_garant_plan' => 'bool',
        'cargarantie' => 'bool',
        'bovag_garantie' => 'int',
        'wegenbelasting_kwartaal_min' => 'int',
        'wegenbelasting_kwartaal_max' => 'int',
        'verkocht' => 'bool',
        'verwacht' => 'bool',
        'gereserveerd' => 'bool',
        'datum_deel_1' => 'hexon-date',
        'datum_deel_1a' => 'hexon-date',
        'datum_deel_1b' => 'hexon-date',
        'apk_tot' => 'hexon-date',
        'max_trekgewicht' => 'int',
        'laadvermogen' => 'int',
        'gvw' => 'int',
        'lengte' => 'int',
        'breedte' => 'int',
        'hoogte' => 'int',
        'emissieklasse' => EmissionRating::class,
        'prijs_nieuw_herberekend' => 'int',
        'nieuwprijs' => 'int',
        'netto_catalogusprijs' => 'int',
        'bijtelling_pct' => 'int',
        'max_trekgewicht_ongeremd' => 'int',
        'aantal_assen' => 'int',
        'assen_aangedreven' => 'int',
        'fabrieksgarantie_tot' => 'hexon-date',
        'verlengd' => 'bool',
        'verhoogd' => 'bool',
        'aantal_sleutels' => 'int',
        'aantal_slaapplaatsen' => 'int',
        'code_pas_sleutel' => 'code_pas_sleutel',
        'aantal_handzenders' => 'int',
        'opknapkosten' => 'int',
        'cabine_lengte' => 'int',
        'fijnstof_uitstoot' => 'int',
    ];
}
