<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午11:43
 */

namespace beili\message;

class TextMessage extends Message
{
    protected $text;
    protected $msgtype = 'text';

    /**
     * @param mixed $text
     * @return TextMessage
     */
    public function setText($text)
    {
        $this->text['content'] = $text;
        return $this;
    }

}