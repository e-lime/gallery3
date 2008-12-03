<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2008 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */

class core_event_Core {
  public static function group_created($group) {
    access::add_group($group);
  }

  public static function group_before_delete($group) {
    access::remove_group($group);
  }

  public static function photo_created($photo) {
    access::add_item($photo);
  }

  public static function photo_before_delete($photo) {
    access::remove_item($photo);
  }

  public static function album_created($album) {
    access::add_item($album);
  }

  public static function album_before_delete($album) {
    access::remove_item($album);
  }
}