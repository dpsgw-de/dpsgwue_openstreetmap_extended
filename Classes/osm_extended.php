<?php
namespace DpsgWue\DpsgWueOsmExtended;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Hilfsfunktionen zur Darstellung der OSM-Karten (Bezirke/Stämme)
 *
 * @author Fabian Lipp
 */

class osm_extended {
	/**
	* Reference to the parent (calling) cObject set from TypoScript
	*/
	private $cObj;

	public function setContentObjectRenderer(ContentObjectRenderer $cObj): void
	{
		$this->cObj = $cObj;
	}

	function extractPageFromGeoJson($content = '', $conf = array()) {
		//print_r($conf);
		//if (isset($conf['jsonString.'])) {
		//	$conf['jsonString'] = $this->cObj->stdWrap($conf['jsonString'], $conf['jsonString.']);
		//}
		$jsonString = $this->cObj->cObjGetSingle($conf['jsonString'], $conf['jsonString.']); // stdWrap for title
		$data = json_decode($jsonString);

		$page = $data->{'properties'}->{'page'};

		return $page;
	}
}


?>
