<?php
// Adapter pattern PHP: An adapter helps two incompatible interfaces to work together. This is the real world definition for an adapter. The adapter design pattern is used when you want two different classes with incompatible interfaces to work together. Interfaces may be incompatible but the inner functionality should suit the need. The Adapter pattern allows otherwise incompatible classes to work together by converting the interface of one class into an interface expected by the clients. See Wikipedia.

class Facebook
{
    public function postToWall($msg)
    {
        echo "Posting message....";
    }
}

interface SocialMediaAdpter
{
    public function post($msg);
}

class FacebookAdapter implements SocialMediaAdpter
{
    private $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post($msg)
    {
        $this->facebook->postToWall($msg);
    }
}

function getMessageFromUser()
{
    return "hello world!";
}

$facebook = new FacebookAdapter(new Facebook());
$msg = getMessageFromUser();
$facebook->post($msg);

?>