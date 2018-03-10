<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午11:43
 */

namespace beili\message;

class MarkDownMessage extends Message
{
    protected $markdown;
    protected $msgtype = 'markdown';

    /**
     * @param mixed $text
     * @return MarkDownMessage
     */
    public function setText($text)
    {
        $this->markdown['text'] = $text;
        return $this;
    }

    /**
     * @param mixed $title
     * @return MarkDownMessage
     */
    public function setTitle($title)
    {
        $this->markdown['title'] = $title;
        return $this;
    }

}