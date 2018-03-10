<?php
/**
 * Created by IntelliJ IDEA.
 * User: beili
 * Date: 18-3-10
 * Time: 上午11:43
 */

namespace beili\message;

define('BTN_ORIENTATION_HORIZON', 1);
define('BTN_ORIENTATION_VECTOR', 0);
define('HIDE_AVATAR', 1);
define('HIDE_AVATAR_NO', 0);

class ActionCardMessage extends Message
{
    protected $actionCard;
    protected $msgtype = 'actionCard';

    /**
     * @param mixed $text
     * @return ActionCardMessage
     */
    public function setText($text)
    {
        $this->actionCard['text'] = $text;
        return $this;
    }

    /**
     * @param mixed $title
     * @return ActionCardMessage
     */
    public function setTitle($title)
    {
        $this->actionCard['title'] = $title;
        return $this;
    }

    public function setHideAvatar($hideAvatar)
    {
        $this->actionCard['hideAvatar'] = $hideAvatar;
        return $this;
    }

    public function setBtnOrientation($btnOrientation)
    {
        $this->actionCard['orientation'] = $btnOrientation;
        return $this;
    }

    public function setSingleTitle($title)
    {
        $this->actionCard['singleTitle'] = $title;
        return $this;
    }

    public function setSingleUrl($url)
    {
        $this->actionCard['singleURL'] = $url;
        return $this;
    }

}