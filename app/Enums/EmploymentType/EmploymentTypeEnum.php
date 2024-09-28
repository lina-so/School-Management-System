<?php declare(strict_types=1);

namespace App\Enums\EmploymentType;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EmploymentTypeEnum extends Enum
{
    const FullTime = 'full-time';
    const PartTime = 'part-time';
    const Contract = 'contract';
}
