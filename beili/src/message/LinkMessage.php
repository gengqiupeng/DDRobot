<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午11:43
 */

namespace beili\message;

class LinkMessage extends Message
{
    protected $link;
    protected $msgtype = 'link';

    /**
     * @param mixed $text
     * @return LinkMessage
     */
    public function setText($text)
    {
        $this->link['text'] = $text;
        return $this;
    }

    /**
     * @param mixed $title
     * @return LinkMessage
     */
    public function setTitle($title)
    {
        $this->link['title'] = $title;
        return $this;
    }

    /**
     * @param mixed $picUrl
     * @return LinkMessage
     */
    public function setPicUrl($picUrl)
    {
        $this->link['picUrl'] = $picUrl;
        return $this;
    }

    /**
     * @param mixed $messageUrl
     * @return LinkMessage
     */
    public function setMessageUrl($messageUrl)
    {
        $this->link['messageUrl'] = $messageUrl;
        return $this;
    }


}