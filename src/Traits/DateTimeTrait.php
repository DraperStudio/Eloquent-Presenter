<?php

namespace BrianFaust\Eloquent\Presenter\Traits;

use Carbon\Carbon;

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
