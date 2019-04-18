<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The kind of vehicle this is, usually it's AUTO or BEDRIJF.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class VehicleKind extends Enum
{
    public const AUTO = 'AUTO';
    public const BEDRIJF = 'BEDRIJF';
    public const MOTOR = 'MOTOR';
    public const BROMFIETS = 'BROMFIETS';
    public const BROMMOBIEL = 'BROMMOBIEL';
    public const VRACHTWAGEN = 'VRACHTWAGEN';
    public const CAMPER = 'CAMPER';
    public const CARAVAN = 'CARAVAN';
    public const OPLEGGER = 'OPLEGGER';
    public const AANHANGER = 'AANHANGER';
    public const ONDERDEEL = 'ONDERDEEL';
    public const MACHINE = 'MACHINE';
    public const ATTACHMENT = 'ATTACHMENT';
    public const FIETS = 'FIETS';
    public const BUS = 'BUS';
    public const BOOT = 'BOOT';
    public const TREKKER = 'TREKKER';
    public const GEREEDSCHAP = 'GEREEDSCHAP';
    public const HULPMIDDEL = 'HULPMIDDEL';
    public const SCHIP = 'SCHIP';
}
