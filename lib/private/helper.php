<?php
/**
 * ownCloud
 *
 * @author Frank Karlitschek
 * @author Jakob Sack
 * @copyright 2012 Frank Karlitschek frank@owncloud.org
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Collection of useful functions
 */
class OC_Helper {


	/**
	 * @brief get path to icon of file type
	 * @param string $mimetype mimetype
	 * @return string the url
	 *
	 * Returns the path to the image of this file type.
	 */
	public static function mimetypeIcon($mimetype) {
		if (isset($alias[$mimetype])) {
			$mimetype = $alias[$mimetype];
		}
		if (isset(self::$mimetypeIcons[$mimetype])) {
			return self::$mimetypeIcons[$mimetype];
		}
		// Replace slash and backslash with a minus
		$icon = str_replace('/', '-', $mimetype);
		$icon = str_replace('\\', '-', $icon);

		// Is it a dir?
		if ($mimetype === 'dir') {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder.png';
		}
		if ($mimetype === 'dir-shared') {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder-shared.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder-shared.png';
		}
		if ($mimetype === 'dir-external') {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder-external.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/folder-external.png';
		}

		// Icon exists?
		if (file_exists(OC::$SERVERROOT . '/themes/deic/core/img/filetypes/' . $icon . '.png')) {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/' . $icon . '.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/' . $icon . '.png';
		}

		// Try only the first part of the filetype
		$mimePart = substr($icon, 0, strpos($icon, '-'));
		if (file_exists(OC::$SERVERROOT . '/themes/deic/core/img/filetypes/' . $mimePart . '.png')) {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/' . $mimePart . '.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/' . $mimePart . '.png';
		} else {
			self::$mimetypeIcons[$mimetype] = OC::$WEBROOT . '/themes/deic/core/img/filetypes/file.png';
			return OC::$WEBROOT . '/themes/deic/core/img/filetypes/file.png';
		}
	}

}
