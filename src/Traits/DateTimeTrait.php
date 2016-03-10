<?php

/*
 * This file is part of Eloquent Presenter.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Presenter\Traits;

use Carbon\Carbon;

/**
 * Class DateTimeTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait DateTimeTrait
{
    /**
     * @param bool   $timeAgo
     * @param string $format
     *
     * @return string
     */
    public function createdAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->created_at) : $this->created_at->format($format);
    }

    /**
     * @param bool   $timeAgo
     * @param string $format
     *
     * @return string
     */
    public function updatedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->updated_at) : $this->updated_at->format($format);
    }

    /**
     * @param bool   $timeAgo
     * @param string $format
     *
     * @return string
     */
    public function deletedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->deleted_at) : $this->deleted_at->format($format);
    }

    /**
     * @param $dateTime
     *
     * @return string
     */
    public function getTimeAgo($dateTime)
    {
        return Carbon::createFromTimeStamp(strtotime($dateTime))->diffForHumans();
    }
}
