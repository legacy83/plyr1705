<?php

namespace plyr1705\domain\model\project;

use yii\base\Model;

/**
 * Class ProjectModel
 *
 * @package plyr1705\domain\model\project
 */
class ProjectModel extends Model implements Project
{
    /**
     * Get the project content.
     *
     * @return Content
     */
    public function getContent()
    {
        $content = new Content();
        $content->title = 'Project Title';
        $content->content = 'Project Content';

        return $content;
    }

    /**
     * Get the project client.
     *
     * @return Client
     */
    public function getClient()
    {
        $client = new Client();
        $client->name = 'Client Name';

        return $client;
    }

    /**
     * Get the project thumbnail image.
     *
     * @return Image
     */
    public function getThumbnail()
    {
        $image = new Image();
        $image->src = 'http://static.npress.com.br/plyr/assets/images/portfolio2-thumb1.jpg';
        $image->alt = 'Thumbnail Alt';

        return $image;
    }

    /**
     * Get the project featured image.
     *
     * @return Image
     */
    public function getFeatured()
    {
        $image = new Image();
        $image->src = 'http://static.npress.com.br/plyr/assets/images/single-work1.jpg';
        $image->alt = 'Featured Alt';

        return $image;
    }

    /**
     * Get the project images.
     *
     * @return array
     */
    public function getImages()
    {
        $image1 = new Image();
        $image1->src = 'http://static.npress.com.br/plyr/assets/images/single-work2.jpg';
        $image1->alt = 'Featured Alt';

        $image2 = new Image();
        $image2->src = 'http://static.npress.com.br/plyr/assets/images/single-work2.jpg';
        $image2->alt = 'Featured Alt';

        return [ $image1, $image2 ];
    }
}
