I18nWebLibrary
==============

This special kind of [WebLibrary](http://mouf-php.com/packages/mouf/html.utils.weblibrarymanager/README.md)
will load different Javascript files based on the current locale.

How does it work?
-----------------

You simply put a [lang] placeholder in the file name you want to load.

For instance:

`javascript/messages-[lang].js`

If the current locale used is French, the file requested will be `javascript/messages-fr.js`.
If the current locale used is German, the file requested will be `javascript/messages-de.js`...
If the current locale used is the default one, the file requested will be `javascript/messages-default.js`.

The locale is decided thanks to the `$languageDetection` property of `I18nWebLibrary`.
This property must point to a class implementing [Fine's LanguageDetectionInterface interface](http://mouf-php.com/packages/mouf/utils.i18n.fine/doc/tutorial.md).