<?php

namespace plyr1705\domain\model\project;

/**
 * Interface Project
 *
 * @package plyr1705\domain\model\project
 */
interface Project
{
    /**
     * Set the project content.
     *
     * @param Content $content
     */
    public function setContent( Content $content );

    /**
     * Get the project content.
     *
     * @return Content
     */
    public function getContent();

    /**
     * Set the project client.
     *
     * @param Client $client
     */
    public function setClient( Client $client );

    /**
     * Get the project client.
     *
     * @return Client
     */
    public function getClient();
}
