<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Enum;

class EnvelopeStatusType
{
    const WYSLANY     = 'WYSLANY';
    const DOSTARCZONY = 'DOSTARCZONY';
    const PRZYJETY    = 'PRZYJETY';
    const WALIDOWANY  = 'WALIDOWANY';
    const BLEDNY      = 'BLEDNY';
}
