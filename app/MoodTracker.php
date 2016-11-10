<?php

namespace CMSilex\MoodTracker;

use CMSilex\Components\CMSEntity;
use CMSilex\MoodTracker\Entities\Thought;
use CMSilex\MoodTracker\Forms\Types\ThoughtType;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\BootableProviderInterface;
use Silex\Application;

class MoodTracker implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container $container)
    {
        $container->extend('orm.paths', function ($paths) {
            $paths = array_merge($paths, [
                __DIR__ . "/Entities"
            ]);
            return $paths;
        });
    }

    public function boot(Application $app)
    {
        $thoughtEntity = new CMSEntity(Thought::class, ThoughtType::class);
        $thoughtEntity->addColumn('Situation/Trigger', 'situation');
        $thoughtEntity->addColumn('Mood', 'mood');
        $thoughtEntity->addColumn('Time of day', function (Thought $thought) {
            return $thought->getTimeOfDay()->format('Y-m-d H:i:s');
        });

        $app['cms']->addCMSEntity($thoughtEntity);
    }
}