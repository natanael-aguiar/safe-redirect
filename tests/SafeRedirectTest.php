<?php

use PHPUnit\Framework\TestCase;
use SafeRedirect\SafeRedirect;

class SafeRedirectTest extends TestCase
{
    public function testRedirect(): void
    {
        $redirect = new SafeRedirect(301);
        ob_start();
        $redirect->to('https://example.com');
        $output = ob_get_clean();

        $this->expectOutputString('');
        $this->assertEmpty($output);
        $this->assertEquals(301, http_response_code());
    }
}
