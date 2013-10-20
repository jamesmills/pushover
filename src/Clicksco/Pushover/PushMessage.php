<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jamesmills
 * Date: 20/10/2013
 * Time: 09:33
 * To change this template use File | Settings | File Templates.
 */

namespace Clicksco\Pushover;


class PushMessage implements PushMessageInterface
{

    protected $title;
    protected $message;
    protected $date;

    /**
     * @param mixed $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }



}
