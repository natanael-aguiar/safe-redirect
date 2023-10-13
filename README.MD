# Safe Redirect

**Safe Redirect** is a PHP package that provides a simple and safe way to perform HTTP redirects in your applications. It allows you to make redirects with customizable HTTP status codes, offering flexibility and security when handling user navigation.

## Instalação

You can install Safe Redirect via Composer. Run the following command in the terminal:

```sh
composer require seu-nome/safe-redirect
```

## Use

To use Safe Redirect in your application, first, import the `SafeRedirect` class and then create an instance of it. You can pass a custom HTTP status code when creating the instance, or use the default status code, which is 302 (Found).

```php
<?php

require_once 'vendor/autoload.php';

use SafeRedirect\SafeRedirect;

// Creating a SafeRedirect instance with custom status code (optional)
$redirect = new SafeRedirect(301);

// Redirecting to a specific URL
$redirect->to('https://example.com');
```

In the example above, a redirect to `https://example.com` is done with HTTP status code 301 (Moved Permanently).

Have fun!