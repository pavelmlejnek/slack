<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.7.16
 * Time: 16:44
 */

namespace Slack;


interface IMessage
{
    public function getChannel();

    public function getText();
}
