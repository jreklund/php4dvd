<?php
/**
 * Activate Parental Guidance
 */
$settings["parental_guidance"]["mpaa"] = false;

/**
 * Select preferred rating system
 * If no information are available from your countries, it will select the first matching pair from IMDb
 * array('United States', 'Sweden', ...)
 */
$settings["parental_guidance"]["countries"] = array(
    'United States'
);

/**
 * If there are no valid information available the following age will be selected
 */
$settings["parental_guidance"]["age"] = 21;

/**
 * Parental Guidance that converts IMDb values into age
 * Based on https://en.wikipedia.org/wiki/Motion_picture_content_rating_system
 * These values are based on new standards and therefore some older movies will not have a matching pair
 * They haven't been validated at 100%, but some have been clearly marked as not validated
 */
$settings["parental_guidance"]["map"] = array(
	'Argentina' => array(
		'Atp'	=> 0,
		'13'	=> 13,
		'16'	=> 16,
		'18'	=> 18,
		'C'		=> 18 // Needs verification
	),
	'Australia' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'M'		=> 13,
		'MA15+'	=> 15,
		'MA15'	=> 15,
		'R18+'	=> 18,
		'R18'	=> 18,
		'X18+'	=> 18,
		'X18'	=> 18,
		'R'		=> 18,
		'RC'	=> 18,
		'X'		=> 18
	),
	'Austria' => array(
		'Unrestricted'	=> 0, // Needs verification
		'6+'			=> 6,
		'6'				=> 6,
		'10+'			=> 10,
		'10'			=> 10,
		'12+'			=> 12,
		'12'			=> 12,
		'14+'			=> 14,
		'14'			=> 14,
		'16+'			=> 16,
		'16'			=> 16
	),
	// Old rating n/a
	'Belgium' => array(
		'CAT.1'	=> 0, // Needs verification
		'CAT.2' => 16 // Needs verification
	),
	'Brazil' => array(
		'L'		=> 0,
		'Livre'	=> 0,
		'10'	=> 10,
		'12'	=> 12,
		'14'	=> 14,
		'16'	=> 16,
		'18'	=> 18
	),
	'Bulgaria' => array(
		'A'		=> 0,
		'B'		=> 7,
		'C'		=> 12,
		'D'		=> 16,
		'X'		=> 18
	),
	'Canada' => array(
		'G'			=> 0,
		'PG'		=> 7,
		'14A'		=> 14,
		'18A'		=> 16,
		'R'			=> 18,
		'A'			=> 18,
		'E'			=> 0,
		'13+'		=> 13,
		'13'		=> 13,
		'16+'		=> 16,
		'16'		=> 16,
		'18+'		=> 18,
		'18'		=> 18
	),
	'Chile' => array(
		'TE'	=> 0,
		'TE+7'	=> 7,
		'14'	=> 14,
		'18'	=> 18
	),
	// Everything allowed or banned
	'China' => array(),
	'Colombia' => array(
		'T'				=> 0, // Needs verification
		'7'				=> 7,
		'12'			=> 12,
		'15'			=> 15,
		'18'			=> 18,
		'X'				=> 18,
		'Prohibited'	=> 21 // Needs verification
	),
	'Denmark' => array(
		'A'		=> 0,
		'7'		=> 7,
		'11'	=> 11,
		'15'	=> 15,
		'F'		=> 0
	),
	'Estonia' => array(
		'PERE'	=> 0, // Needs verification
		'L'		=> 0,
		'MS-6'	=> 6,
		'MS-12'	=> 12,
		'K-12'	=> 12,
		'K-14'	=> 14,
		'K-16'	=> 16
	),
	'Finland' => array(
		'S'		=> 0,
		'7'		=> 7,
		'K-7'	=> 7,
		'12'	=> 12,
		'K-12'	=> 12,
		'16'	=> 16,
		'K-16'	=> 16,
		'18'	=> 18,
		'K-18'	=> 18
	),
	'France' => array(
		'U'				=> 0,
		'Tous publics'	=> 0,
		'12'			=> 12,
		'16'			=> 16,
		'18'			=> 18,
		'Interdiction'	=> 18, // Needs verification
		'X'				=> 18
	),
    'Germany' => array(
        '0'     => 0,
        '6'     => 6,
        '12'    => 12,
		'14'	=> 14,
        '16'    => 16,
        '18'    => 18
    ),
	'Greece' => array(
		'Unrestricted'	=> 0, // Needs verification
		'13'			=> 13,
		'17'			=> 17,
		'18'			=> 18
	),
	'Hong Kong' => array(
		'I'		=> 0,
		'IIA'	=> 7,
		'IIB'	=> 15,
		'III'	=> 18
	),
	'Hungary' => array(
		'KN'	=> 0,
		'6'		=> 6,
		'12'	=> 12,
		'16'	=> 16,
		'18'	=> 18,
		'X'		=> 18
	),
	'Iceland' => array(
		'L'		=> 0,
		'6'		=> 6,
		'9'		=> 9,
		'12'	=> 12,
		'16'	=> 16,
		'18'	=> 18
	),
	'India' => array(
		'U'		=> 0,
		'UA'	=> 12,
		'A'		=> 18,
		'S'		=> 18 // Needs verification
	),
	// Needs verification
	'Indonesia' => array(
		'SU'	=> 0,
		'13+'	=> 13,
		'13'	=> 13,
		'17+'	=> 17,
		'17'	=> 17,
		'21+'	=> 21,
		'21'	=> 21
	),
	'Ireland' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'12A'	=> 10,
		'12'	=> 12,
		'15A'	=> 13,
		'15'	=> 15,
		'16'	=> 16,
		'18'	=> 18
	),
	'Italy' => array(
		'T'		=> 0,
		'VM14'	=> 14,
		'14'	=> 14,
		'VM18'	=> 18,
		'18'	=> 18
	),
	'Jamaica' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'PG-13'	=> 12,
		'T-16'	=> 15,
		'A-18'	=> 18
	),
	'Japan' => array(
		'G'		=> 0,
		'PG-12'	=> 12,
		'R-15+'	=> 15,
		'R-15'	=> 15,
		'R18+'	=> 18,
		'R18'	=> 18
	),
	'Kazakhstan' => array(
		'K'		=> 0, // Needs verification
		'BA'	=> 12, // Needs verification
		'B14'	=> 14, // Needs verification
		'E16'	=> 16,
		'E18'	=> 18,
		'HA'	=> 21
	),
	'Latvia' => array(
		'U'		=> 0,
		'7+'	=> 7,
		'7'		=> 7,
		'12+'	=> 12,
		'12'	=> 12,
		'16+'	=> 16,
		'16'	=> 16,
		'18+'	=> 18,
		'18'	=> 18
	),
	'Malaysia' => array(
		'U'		=> 0,
		'P13'	=> 13,
		'18'	=> 18
	),
	'Maldives' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'12+'	=> 12,
		'12'	=> 12,
		'15+'	=> 15,
		'15'	=> 15,
		'18+'	=> 18,
		'18'	=> 18,
		'18+R'	=> 18,
		'PU'	=> 18 // Needs verification
	),
	'Malta' => array(
		'U'		=> 0,
		'PG'	=> 7,
		'12A'	=> 10,
		'12'	=> 12,
		'15'	=> 15,
		'18'	=> 18
	),
	'Mexico' => array(
		'AA'	=> 7,
		'A'		=> 0,
		'B'		=> 12,
		'B-15'	=> 15,
		'C'		=> 18,
		'D'		=> 18
	),
	'Netherlands' => array(
		'AL'	=> 0,
		'6'		=> 6,
		'9'		=> 9,
		'12'	=> 12,
		'16'	=> 16
	),
	'New Zealand' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'M'		=> 10,
		'R13'	=> 13,
		'R15'	=> 15,
		'R16'	=> 16,
		'R18'	=> 18,
		'RP13'	=> 13,
		'RP16'	=> 16,
		'RP18'	=> 18,
		'R'		=> 18
	),
	'Nigeria' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'12'	=> 12,
		'12A'	=> 10,
		'15'	=> 15,
		'18'	=> 18,
		'RE'	=> 18
	),
	'Norway' => array(
		'A'		=> 0,
		'6'		=> 6,
		'9'		=> 9,
		'12'	=> 12,
		'15'	=> 15,
		'18'	=> 18
	),
	'Philippines' => array(
		'G'		=> 0,
		'PG'	=> 10,
		'R-13'	=> 13, // Needs verification
		'PG-13'	=> 13,
		'R-16'	=> 16, // Needs verification
		'PG-16'	=> 16,
		'R-18'	=> 18, // Needs verification
		'PG-18'	=> 18,
		'X'		=> 18
	),
	// No information available 
	'Poland' => array(),
	// No information on PG-0
	'Portugal' => array(
		'M/3'	=> 3,
		'M/6'	=> 6,
		'M/12'	=> 12,
		'M/14'	=> 14,
		'M/16'	=> 16,
		'M/18'	=> 18,
		'P'		=> 18,
		'Q'		=> 18 // Needs verification
	),
	// Needs verification
	'Romania' => array(
		'AG'		=> 0,
		'AP-12'		=> 12,
		'N-15'		=> 15,
		'IM-18'		=> 18,
		'IM-18-XXX'	=> 18,
		'IC'		=> 18 
	),
	'Russia' => array(
		'0+'	=> 0,
		'0'		=> 0,
		'6+'	=> 6,
		'6'		=> 6,
		'12+'	=> 12,
		'12'	=> 12,
		'16+'	=> 16,
		'16'	=> 16,
		'18+'	=> 18,
		'18'	=> 18
	),
	'Singapore' => array(
		'G'		=> 0,
		'PG'	=> 7,
		'PG13'	=> 13,
		'NC16'	=> 16,
		'M18'	=> 18,
		'R21'	=> 21
	),
	'South Africa' => array(
		'A'			=> 0,
		'PG'		=> 7,
		'7-9PG'		=> 8, // Needs verification
		'10-12PG'	=> 11, // Needs verification
		'13'		=> 13,
		'16'		=> 16,
		'18'		=> 18,
		'X18'		=> 18,
		'XX'		=> 18
	),
	'South Korea' => array(
		'All'	=> 0,
		'12'	=> 12,
		'15'	=> 15,
		'18'	=> 18,
		'R'		=> 18, // Needs verification
		'RS'	=> 18 // Needs verification
	),
	'Spain' => array(
		'A/i'	=> 0,
		'7/i'	=> 7,
		'12'	=> 12,
		'16'	=> 16,
		'18'	=> 18,
		'X'		=> 18
	),
    'Sweden' => array(
        'Btl'   => 0,
        '7'     => 7,
        '11'    => 11,
        '15'    => 15
    ),
	// Same as Germany
	'Switzerland' => array(
        '0'     => 0,
        '6'     => 6,
        '12'    => 12,
		'14'	=> 14,
        '16'    => 16,
        '18'    => 18
	),
	// Needs verification
	'Taiwan' => array(
		'0+'	=> 0,
		'0'		=> 0,
		'R-0'	=> 0,
		'6+'	=> 6,
		'6'		=> 6,
		'R-6'	=> 6,
		'12+'	=> 12,
		'12'	=> 12,
		'R-12'	=> 12,
		'15+'	=> 15,
		'15'	=> 15,
		'R-15'	=> 15,
		'18+'	=> 18,
		'R-18'	=> 18,
		'18'	=> 18
	),
	'Thailand' => array(
		'P'			=> 0,
		'G'			=> 0,
		'13'		=> 13,
		'15'		=> 15,
		'18'		=> 18,
		'20'		=> 20,
		'Banned'	=> 20,
		'(Banned)'	=> 20
	),
	// Needs verification
	'Turkey' => array(
		'7+'	=> 7,
		'7A'	=> 5,
		'13+'	=> 13,
		'13A'	=> 11,
		'15+'	=> 15,
		'15A'	=> 13,
		'18+'	=> 18
	),
	// Needs verification
	'United Arab Emirates' => array(
		'G'		=> 0,
		'PG13'	=> 13,
		'PG15'	=> 15,
		'15+'	=> 15,
		'18+'	=> 18
	),
	'United Kingdom' => array(
		'Uc'	=> 0,
		'U'		=> 0,
		'PG'	=> 8,
		'12A'	=> 12,
		'12'	=> 12,
		'15'	=> 15,
		'18'	=> 18,
		'R18'	=> 18,
		'X'		=> 18
	),
    'United States' => array(
        'G'     => 0,
        'PG'    => 7,
        'PG-13' => 13,
        'R'     => 17,
        'NC-17' => 18,
		'X'		=> 18
    ),
	// Needs verification
	'Vietnam' => array(
		'P'		=> 0,
		'C13'	=> 13,
		'C16'	=> 16,
		'C18'	=> 18
	)
);