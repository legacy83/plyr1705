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
     * Get the project content.
     *
     * @return Content
     */
    public function getContent();

    /**
     * Get the project client.
     *
     * @return Client
     */
    public function getClient();

    /**
     * Get the project thumbnail image.
     *
     * @return Image
     */
    public function getThumbnail();

    /**
     * Get the project featured image.
     *
     * @return Image
     */
    public function getFeatured();

    /**
     * Get the project images.
     *
     * @return array
     */
    public function getImages();
}
