<?php

namespace Bottega\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use \Rutorika\Sortable\SortableTrait;

class News extends Model implements HasMedia
{
    use PresentableTrait, HasMediaTrait, SortableTrait;

    protected $presenter = 'Bottega\Presenters\NewsPresenter';

    protected $guarded = ['id', 'creted_at', 'updated_at'];

    public static function make()
    {
        $item = new static();

        return $item;
    }

    public static function edit($item_id, $title, $subtitle, $slug, $excerpt, $body, $tags, $featured_image_id, $fixed, $published)
    {
        $item = static::find($item_id);

        $item->title = $title;
        $item->subtitle = $subtitle;
        $item->slug = $slug;
        $item->excerpt = $excerpt;
        $item->body = $body;
        $item->tags = $tags;
        $item->featured_image_id = $featured_image_id;
        $item->fixed = $fixed;
        $item->published = $published;

        return $item;
    }

    public function featuredImage()
    {
        return $this->belongsTo('Bottega\Models\FeaturedImage', 'featured_image_id');
    }



}
