<?php

namespace Bottega\Repositories;

use Bottega\Models\FeaturedImage;
use Bottega\Models\News;
use DB;

class NewsRepo
{

    public function save(News $news)
    {
        $news->save();

        return $news;
    }

    public function unpinAllNews()
    {
        DB::table('news')->update(['fixed' => 0]);
    }

    public function getAll()
    {
        return News::with('featuredImage')->orderBy('fixed', 'desc')->orderBy('position')->get();
    } 

    public function getFromSlug($slug)
    {
        return News::with('featuredImage')->whereSlug($slug)->first();
    } 

    public function getPinnedNewsFront()
    {
        return News::with('featuredImage')->where('featured_image_id', '!=', '')->where('published', 1)->where('fixed', 1)->first();
    } 

    public function getNotPinnedFront()
    {
        return News::with('featuredImage')->where('featured_image_id', '!=', '')->where('published', 1)->where('fixed', 0)->orderBy('position', 'ASC')->get();
    } 


    public function getById($id)
    {
        return News::where('id', $id)->first();
    } 

    public function getBySlug($slug)
    {
        return News::where('slug', $slug)->first();
    } 

    public function getMediaForId($id)
    {
        $album = $this->getById($id);
        
        return $album->getMedia();
    }

    public function removeImage($id)
    {
        $image = FeaturedImage::find($id);
        $image->delete();

        return true;
    }
     public function remove($id)
    {
        $activity = News::find($id);
        $activity->delete();

        return true;
    }
}
