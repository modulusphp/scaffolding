<?php

namespace Modulus\Scaffolding;

class Template
{
  /**
   * $assets
   *
   * @var undefined
   */
  public $assets;

  /**
   * __construct
   *
   * @return void
   */
  public function __construct()
  {
    $this->assets = __DIR__ . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR;
  }

  /**
   * Return assets path
   *
   * @return string
   */
  public static function assets() : string
  {
    return (new Template())->assets;
  }

  /**
   * Get asset content
   *
   * @param string $file
   * @return void
   */
  public static function asset(string $file)
  {
    $template = new Template();
    return file_get_contents($template->assets . $template->cleanPath($file));
  }

  /**
   * Remove ds
   *
   * @param string $file
   * @return void
   */
  public function cleanPath(string $file) : string
  {
    return (substr($file, 0, 1) == DIRECTORY_SEPARATOR ? substr($file, 1) : $file);
  }
}
