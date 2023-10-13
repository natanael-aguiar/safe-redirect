<?php

namespace SafeRedirect;

/**
 * SafeRedirect class for safe redirects.
 *
 * This class provides methods to perform secure redirects with customizable status codes.
 *
 * @package SafeRedirect
 */
class SafeRedirect
{
    /**
     * The HTTP status code for the redirect.
     *
     * @var int
     */
    protected int $statusCode;

    /**
     * SafeRedirect class constructor.
     *
     * @param int $statusCode The HTTP status code of the redirect (default is 302).
     */
    public function __construct(int $statusCode = 302)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * Performs a redirect to the specified URL.
     *
     * @param string $url The URL where the redirection should occur.
     * @return void
     */
    public function to(string $url): void
    {
        header("Location: $url", true, $this->statusCode);
        exit();
    }
}
