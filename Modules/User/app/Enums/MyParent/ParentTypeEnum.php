<?php declare(strict_types=1);

namespace Modules\School\Enums\MyParent;


use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ParentTypeEnum extends Enum
{
    const Mother = 'mother';
    const Father = 'father';
}
