<?php

class MessageFlash
{
  public function get($key)
  {
    if (isset($_SESSION[$key]))
    {
      $messages = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $messages;
    }

    return null;
  }

  public function set($key, $value)
  {
    if (is_array($value))
    {
      if (isset($_SESSION[$key]))
      {
        $_SESSION[$key] = array_merge($_SESSION[$key], $value);
      }
      else
      {
        $_SESSION[$key] = $value;
      }
    }
    else
    {
      $_SESSION[$key][] = $value;
    }
  }

}