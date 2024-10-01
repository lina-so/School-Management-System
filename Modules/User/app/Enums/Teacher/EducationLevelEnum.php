<?php declare(strict_types=1);

namespace Modules\School\Enums\Teacher;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EducationLevelEnum extends Enum
{
    const HighSchoolDiploma = 'High School Diploma';
    const AssociatesDegree = 'Associates Degree';
    const BachelorsDegree = 'Bachelors Degree';
    const MastersDegree = 'Masters Degree';
    const Doctorate = 'Doctorate (PhD)';
    const TechnicalDiploma = 'Technical Diploma';
    const VocationalTraining = 'Vocational Training';
    const NoFormalEducation = 'No Formal Education';
    const Other = 'Other';
}

