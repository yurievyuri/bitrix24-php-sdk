<?php

declare(strict_types=1);

namespace Bitrix24\SDK\Core\Result;

use Bitrix24\SDK\Core\Exceptions\BaseException;

/**
 * Class DeleteItemResult
 *
 * @package Bitrix24\SDK\Core\Result
 */
class DeleteItemResult extends AbstractResult
{
    /**
     * @return bool
     * @throws BaseException
     */
    public function isSuccess(): bool
    {
        return (bool)$this->getCoreResponse()->getResponseData()->getResult()->getResultData()[0];
    }
}