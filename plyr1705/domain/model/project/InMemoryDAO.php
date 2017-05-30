<?php

namespace plyr1705\domain\model\project;

/**
 * Class InMemoryDAO
 *
 * @package plyr1705\domain\model\project
 */
class InMemoryDAO implements AllProjects
{
    /**
     * Get all recently placed projects.
     *
     * @return array
     */
    public function recentryPlaced()
    {
        $recentryPlaced = [];
        array_push( $recentryPlaced, new ProjectModel() );
        array_push( $recentryPlaced, new ProjectModel() );
        array_push( $recentryPlaced, new ProjectModel() );

        return $recentryPlaced;
    }
}
