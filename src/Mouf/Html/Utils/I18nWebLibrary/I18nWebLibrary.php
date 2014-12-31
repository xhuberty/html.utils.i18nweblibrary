<?php
namespace Mouf\Html\Utils\I18nWebLibrary;

use Mouf\Utils\I18n\Fine\Language\LanguageDetectionInterface;
use Mouf\Html\Utils\WebLibraryManager\WebLibrary;
use Mouf\Html\Utils\WebLibraryManager;

/**
 * @author Kevin
 */
class I18nWebLibrary extends WebLibrary{
	
	/**
	 * @var LanguageDetectionInterface
	 */
	public $languageDetection;
	
	/**
	 * (non-PHPdoc)
	 * Override the parent "getJSFiles"', by replacing the [lang] occurences depending on the detected Language
	 * @see WebLibrary::getJsFiles()
	 */
	public function getJsFiles(){
		$lang = $this->languageDetection->getLanguage();
		
		$files = array();
		foreach (parent::getJsFiles() as $file) {
			$files[] = str_replace("[lang]", $lang, $file);
		}
		
		return $files;
	}
	
}