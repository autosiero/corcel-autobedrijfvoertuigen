<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The kind of varnish on the outside of the car
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class VarnishType extends Enum
{
    public const BASIS = 'basis';
    public const METALLIC = 'metallic';
    public const MICA = 'mica';
    public const PARELMOER = 'parelmoer';
}
