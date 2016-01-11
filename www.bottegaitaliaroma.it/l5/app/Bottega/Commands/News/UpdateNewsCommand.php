<?php

namespace Bottega\Commands\News;

use Bottega\Commands\Command;

class UpdateNewsCommand extends Command
{

      public $title;
      public $subtitle;
      public $excerpt;
      public $body;
      public $tags;
      public $featured_image_id;
      public $news_id;
      public $fixed;
      public $published;
      public $seo_description;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $excerpt, $body, $featured_image_id, $news_id, $fixed = 0, $published = 0, $tags = [] , $seo_description = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->tags = $tags;
        $this->featured_image_id = $featured_image_id;
        $this->news_id = $news_id;
        $this->fixed = $fixed;
        $this->published = $published;
        $this->seo_description = $seo_description;
    }
}
