<?php
namespace WPStaging\Backend\Modules\Jobs;

// No Direct Access
if (!defined("WPINC"))
{
    die;
}

use WPStaging\Backend\Modules\Jobs\Interfaces\JobInterface;

/**
 * Class Data
 * @package WPStaging\Backend\Modules\Jobs
 */
class Data implements JobInterface
{

    public function __construct()
    {

    }

    /**
     * Start Module
     * @return bool
     */
    public function start()
    {
        // TODO: Implement start() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }
}