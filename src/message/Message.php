<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午11:41
 */

namespace beili\message;

define("MESSAGE_TEXT", "text");
define("MESSAGE_LINK", "link");

abstract class  Message
{
    protected $msgtype;
    protected $at;


    /**
     * @param mixed $atAll
     * @return Message
     */
    public function setAtAll($atAll)
    {
        $this->at['isAtAll'] = $atAll;
        return $this;
    }

    /**
     * @param mixed $at
     * @return Message
     */
    public function setAt($at)
    {
        $this->at['atMobiles'] = $at;
        return $this;
    }

    public function getMessage()
    {
        return json_encode(get_object_vars($this));
    }
}