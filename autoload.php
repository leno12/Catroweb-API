<?php

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.26
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \OpenAPI\Server\Baz\Qux class
 * from /path/to/project/./Baz/Qux.php:
 *
 *      new \OpenAPI\Server\Baz\Qux;
 *
 * @param string $class the fully-qualified class name
 */
spl_autoload_register(function ($class)
{
  // project-specific namespace prefix
  $prefix = 'OpenAPI\\Server\\';

  // base directory for the namespace prefix
  $base_dir = __DIR__.'/./';

  // does the class use the namespace prefix?
  $len = strlen($prefix);
  if (0 !== strncmp($prefix, $class, $len))
  {
    // no, move to the next registered autoloader
    return;
  }

  // get the relative class name
  $relative_class = substr($class, $len);

  // replace the namespace prefix with the base directory, replace namespace
  // separators with directory separators in the relative class name, append
  // with .php
  $file = $base_dir.str_replace('\\', '/', $relative_class).'.php';

  // if the file exists, require it
  if (file_exists($file))
  {
    require $file;
  }
});
