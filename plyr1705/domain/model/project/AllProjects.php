<?php

namespace plyr1705\domain\model\project;

/**
 * Interface AllProjects
 *
 * @package plyr1705\domain\model\project
 */
interface AllProjects
{
    /**
     * Get all recently placed projects.
     *
     * @return array
     */
    public function recentryPlaced();
}
