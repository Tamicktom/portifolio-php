<?php

/**
 * Avatar component
 */

function avatar(String $src, String $alt)
{
  echo "<img src='$src' alt='$alt' class='size-32 rounded-full border border-gray-300 shadow-sm' />";
}
