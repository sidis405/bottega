<?php

namespace Bottega\Handlers\Commands\News;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Bottega\Commands\News\UpdateNewsCommand;
use Bottega\Events\News\NewsWasUpdated;
use Bottega\Models\News;
use Bottega\Repositories\NewsRepo;


class UpdateNewsCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(NewsRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateNewsCommand  $command
     * @return void
     */
    public function handle(UpdateNewsCommand $command)
    {

        if($command->fixed === 'on')
        {
            $this->repo->unpinAllNews();
            $fixed = '1';
        }else{
            $fixed = '0';
        }

        if($command->published === 'on')
        {
            $published = '1';
        }else{
            $published = '0';
        }

        if($command->featured_image_id < 1)
        {
            $published = 0;
            $fixed = 0;
        }


        $news_object = News::edit(
            $command->news_id,
            $command->title,
            $command->subtitle,
            $command->news_id . '-' .str_slug($command->title),
            $command->excerpt,
            $command->body,
            $command->featured_image_id,
            $fixed,
            $published
            );

        $news = $this->repo->save($news_object);

        Event::fire(new NewsWasUpdated($news));

        return $news;
    }
}
