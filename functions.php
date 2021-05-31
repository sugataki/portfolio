<?php
function init_func()
{
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");

  $skill = "スキル";
  register_post_type("skills", [
    "labels" => [
      "name" => $skill,
      "singular_name" => $skill,
      "add_new" => $skill . "を追加",
      "add_new_item" => $skill . "を追加",
      "edit_item" => $skill . "を編集",
      "new_item" => "新しい" . $skill,
      "all_items" => "すべての" . $skill,
      "view_item" => $skill . "を見る",
      "search_items" => $skill . "を探す",
      "not_found" => $skill . "は見つかりませんでした",
      "not_found_in_trash" => "ごみ箱は空です",
      "parent_item_colon" => "",
      "menu_item" => $skill
    ],
    "supports" => ["title", "editor", "thumbnail"],
    "public" => true,
    "has_archive" => false,
    "hierarchical" => false,
    "menu_position" => 5,
    "menu_icon" => "dashicons-welcome-widgets-menus"
  ]);

  $service = "サービス";
  register_post_type("service", [
    "labels" => [
      "name" => $service,
      "singular_name" => $service,
      "add_new" => $service . "を追加",
      "add_new_item" => $service . "を追加",
      "edit_item" => $service . "を編集",
      "new_item" => "新しい" . $service,
      "all_items" => "すべての" . $service,
      "view_item" => $service . "を見る",
      "search_items" => $service . "を探す",
      "not_found" => $service . "は見つかりませんでした",
      "not_found_in_trash" => "ごみ箱は空です",
      "parent_item_colon" => "",
      "menu_item" => $service
    ],
    "supports" => ["title", "editor", "thumbnail"],
    "public" => true,
    "has_archive" => false,
    "hierarchical" => false,
    "menu_position" => 6,
    "menu_icon" => "dashicons-welcome-widgets-menus"
  ]);

  $work = "作品";
  register_post_type("works", [
    "labels" => [
      "name" => $work,
      "singular_name" => $work,
      "add_new" => $work . "を追加",
      "add_new_item" => $work . "を追加",
      "edit_item" => $work . "を編集",
      "new_item" => "新しい" . $work,
      "all_items" => "すべての" . $work,
      "view_item" => $work . "を見る",
      "search_items" => $work . "を探す",
      "not_found" => $work . "は見つかりませんでした",
      "not_found_in_trash" => "ごみ箱は空です",
      "parent_item_colon" => "",
      "menu_item" => $work
    ],
    "supports" => ["title", "editor", "thumbnail"],
    "public" => true,
    "has_archive" => false,
    "hierarchical" => false,
    "menu_position" => 7,
    "menu_icon" => "dashicons-welcome-widgets-menus"
  ]);
}

add_action("init", "init_func");


function add_css_js()
{
  $version = "0.0.1";
  wp_enqueue_style("font-awesome", "https://use.fontawesome.com/releases/v5.15.1/css/all.css");
  wp_enqueue_script("adobe-fonts", get_template_directory_uri() . "/js/modules/adobe-fonts.js");

  wp_deregister_script("jquery");
  wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.5.1.js", "", "", true);
  wp_enqueue_script("modules", get_template_directory_uri() . "/js/modules/index.js", array("jquery"), $version, true);

  if (is_home()) {
    wp_enqueue_style("home", get_template_directory_uri() . "/css/main.min.css", array(), $version);
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array("jquery"), $version, true);
  }

  if (is_page()) {
    wp_enqueue_style("contact", get_template_directory_uri() . "/css/contact.min.css", array(),  $version);
    wp_enqueue_script("contact", get_template_directory_uri() . "/js/contact.js", array("jquery"),  $version, true);
  }

  if (is_singular("works")) {
    wp_enqueue_style("work", get_template_directory_uri() . "/css/work.min.css", array(),  $version);
    wp_enqueue_script("work", get_template_directory_uri() . "/js/work.js", array("jquery"),  $version);
  }
}

add_action("wp_enqueue_scripts", "add_css_js");
