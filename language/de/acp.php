<?php
/**
*
* @package phpBB Extension - tas2580 privacyprotection
* @copyright (c) 2018 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'PRIVACY_SETTINGS'				=> 'Datenschutz-Einstellungen',
	'ACP_PRIVACY_URL'				=> 'URL zur Datenschutzerklärung',
	'ACP_PRIVACY_URL_EXPLAIN'		=> 'Gib eine URL zu deiner Datenschutzerklärung ein. Die URL überschreibt alle Links zur original Datenschutzerklärung.',
	'ACP_ANONYMIZE'					=> 'IP Adressen anonymisieren',
	'ACP_ANONYMIZE_EXPLAIN'			=> 'Wenn aktiviert speichert phpBB keine IP Adressen der Benutzer.',
	'UPDATE_PRIVACY'				=> 'Datenschutzerklärung aktualisieren',
	'UPDATE_PRIVACY_EXPLAIN'		=> 'Führe die Aktion aus nachdem du die Datenschutzerklärung aktualisiert hast. Alle Benutzer müssen dann der neuen Datenschutzerklärung zustimmen.',
	'PRIVACY_POLICE_UPDATED'		=> 'Die Datenschutzerklärung wurden auf das aktuelle Dateum gesetzt. Alle Benutzer müssen der neuen Datenschutzerklärung zustimen bevor sie das Forum benutzen können.',
	'DELETE_IP'						=> 'Alle IP Adressen anonymisieren',
	'DELETE_IP_EXPLAIN'				=> 'Führe die Aktion aus um alle IP Adressen zu anonymisieren.<br><strong>Die Aktion kann nicht rückgängig gemacht werden!</strong>',
	'IP_DELETE_SUCCESS'				=> 'Alle IP Adressen wurden anonymisiert.',
));