<?php declare(strict_types=1);

namespace Modules\School\Enums\SectionStatus;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SectionStatusEnum extends Enum
{
    const Active = 'active';
    const Inactive = 'inactive';
}

