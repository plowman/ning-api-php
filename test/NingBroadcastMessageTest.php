<?php

require_once('NingTestHelper.php');

class NingBroadcastMessageTest extends PHPUnit_Framework_TestCase {

    public function testCreate() {
        $subject = "Here is the subject of a broadcast message. " . rand(1, 100000);
        $body = "Here is the body of a broadcast message.";
        $result = NingApi::instance()->broadcastMessage->createMessage($subject, $body);
        $this->assertTrue($result['success']);
    }

}

?>
