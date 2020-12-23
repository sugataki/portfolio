<?php
function init_func()
{
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");

  register_post_type("works", [
    "labels" => [
      "name" => "作品",
      "singular_name" => "作品",
      "add_new" => "作品を追加",
      "add_new_item" => "作品を追加",
      "edit_item" => "作品を編集",
      "new_item" => "新しい作品",
      "all_items" => "すべての作品",
      "view_item" => "作品を見る",
      "search_items" => "作品を探す",
      "not_found" => "作品は見つかりませんでした",
      "not_found_in_trash" => "ごみ箱は空です",
      "parent_item_colon" => "",
      "menu_item" => "作品"
    ],
    "supports" => ["title", "editor", "thumbnail"],
    "public" => true,
    "has_archive" => false,
    "hierarchical" => false,
    "menu_position" => 5,
    "menu_icon" => ""
  ]);
}

add_action("init", "init_func");
