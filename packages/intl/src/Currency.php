<?php

namespace Tempest\Intl;

use Stringable;
use TypeError;
use ValueError;

use function Tempest\Support\str;

/**
 * Represents an ISO-4217 currency.
 */
enum Currency: string
{
    case AED = 'AED';
    case AFN = 'AFN';
    case ALL = 'ALL';
    case AMD = 'AMD';
    case AOA = 'AOA';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AWG = 'AWG';
    case AZN = 'AZN';
    case BAM = 'BAM';
    case BBD = 'BBD';
    case BDT = 'BDT';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BIF = 'BIF';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case BTN = 'BTN';
    case BWP = 'BWP';
    case BYN = 'BYN';
    case BZD = 'BZD';
    case CAD = 'CAD';
    case CDF = 'CDF';
    case CHF = 'CHF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case COP = 'COP';
    case CRC = 'CRC';
    case CUP = 'CUP';
    case CVE = 'CVE';
    case CZK = 'CZK';
    case DJF = 'DJF';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case ERN = 'ERN';
    case ETB = 'ETB';
    case EUR = 'EUR';
    case FJD = 'FJD';
    case FKP = 'FKP';
    case GBP = 'GBP';
    case GEL = 'GEL';
    case GHS = 'GHS';
    case GIP = 'GIP';
    case GMD = 'GMD';
    case GNF = 'GNF';
    case GTQ = 'GTQ';
    case GYD = 'GYD';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HTG = 'HTG';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case ISK = 'ISK';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KGS = 'KGS';
    case KHR = 'KHR';
    case KMF = 'KMF';
    case KPW = 'KPW';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LAK = 'LAK';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case LRD = 'LRD';
    case LSL = 'LSL';
    case LYD = 'LYD';
    case MAD = 'MAD';
    case MDL = 'MDL';
    case MGA = 'MGA';
    case MKD = 'MKD';
    case MMK = 'MMK';
    case MNT = 'MNT';
    case MOP = 'MOP';
    case MRU = 'MRU';
    case MUR = 'MUR';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MXN = 'MXN';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NIO = 'NIO';
    case NOK = 'NOK';
    case NPR = 'NPR';
    case NZD = 'NZD';
    case OMR = 'OMR';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PGK = 'PGK';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case RWF = 'RWF';
    case SAR = 'SAR';
    case SBD = 'SBD';
    case SCR = 'SCR';
    case SDG = 'SDG';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case SHP = 'SHP';
    case SLE = 'SLE';
    case SOS = 'SOS';
    case SRD = 'SRD';
    case SSP = 'SSP';
    case STN = 'STN';
    case SVC = 'SVC';
    case SYP = 'SYP';
    case SZL = 'SZL';
    case THB = 'THB';
    case TJS = 'TJS';
    case TMT = 'TMT';
    case TND = 'TND';
    case TOP = 'TOP';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case UGX = 'UGX';
    case USD = 'USD';
    case UYU = 'UYU';
    case UYW = 'UYW';
    case UZS = 'UZS';
    case VED = 'VED';
    case VES = 'VES';
    case VND = 'VND';
    case VUV = 'VUV';
    case WST = 'WST';
    case XAF = 'XAF';
    case XCD = 'XCD';
    case XCG = 'XCG';
    case XOF = 'XOF';
    case XPF = 'XPF';
    case YER = 'YER';
    case ZAR = 'ZAR';
    case ZMW = 'ZMW';
    case ZWG = 'ZWG';

    /**
     * Parses the given value into a `Currency` instance.
     */
    public static function parse(mixed $currency): self
    {
        if ($currency instanceof self) {
            return $currency;
        }

        return self::from(str($currency)->trim()->upper()->toString());
    }
}
