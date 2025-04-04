<?php

declare(strict_types=1);

namespace Ps\Review\Plugin\Model;

class Review
{
    /**
     * Validate Nickname
     *
     * @param \Magento\Review\Model\Review $subject
     * @return array|true
     */
    public function afterValidate(\Magento\Review\Model\Review $subject)
    {
        if (substr_count($subject->getNickname(), '-') >= 1) {
            $errors[] = __('Dashes is not allowed in nickname');
        }

        if (empty($errors)) {
            return true;
        }
        return $errors;
    }
}
