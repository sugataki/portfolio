<?php
function init_func()
{
  add_theme_support("title-tag");
}

add_action("init", "init_func");
