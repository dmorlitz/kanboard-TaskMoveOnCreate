<?php
namespace Kanboard\Plugin\TaskMoveOnCreate;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskMoveOnCreate\Action\TaskMoveOnCreate;
class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskMoveOnCreate($this->container));
    }
    public function getPluginName()
    {
        return 'TaskMoveOnCreate';
    }

    public function getPluginDescription()
    {
        return t('Move the task to another column when created and is a specific color');
    }

    public function getPluginAuthor()
    {
        return 'David Morlitz';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/dmorlitz/kanboard-TaskMoveOnCreate';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.44';
    }
}
