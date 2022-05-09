<?php

declare(strict_types=1);

namespace Bitrix24\SDK\Services\UserConsent\Result;

use Bitrix24\SDK\Core\Result\AbstractItem;

/**
 * Class UserConsentAgreementItemResult
 *
 * @property-read int     $ID
 * @property-read string  $NAME
 * @property-read string  $LANGUAGE_ID
 * @property-read boolean $ACTIVE
 */
class UserConsentAgreementItemResult extends AbstractItem
{
    /**
     * @param int|string $offset
     *
     * @return bool|int|mixed|null
     */
    public function __get($offset)
    {
        switch ($offset) {
            case 'ID':
                if ($this->data[$offset] !== '' && $this->data[$offset] !== null) {
                    return (int)$this->data[$offset];
                }

                return null;
            case 'ACTIVE':
                return $this->data[$offset] === 'Y';
            default:
                return $this->data[$offset] ?? null;
        }
    }
}