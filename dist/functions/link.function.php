<?php

$function = new Twig_SimpleFunction(
    'link',
    function ($title, $url, $attributes = []) {
      $attributes['href'] = $url;
      $attr = [];
      foreach ($attributes as $key => $value) {
        $attr[] = sprintf(
          '%s="%s"',
          $key,
          is_array($value) ? implode(' ', $value) : $value
        );
      }

      return '<a ' . implode(' ', $attr) . '>' . $title . '</a>';
    },
    array('is_safe' => array('html'))
);
