/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	config.allowedContent = true;
	config.contentsCss = ['assets/plugins/ckeditor5/content.css?v=216', 'assets/plugins/ckeditor5/notas.css?v=216', 'assets/plugins/ckeditor5/style.css?v=216'];
	config.extraPlugins = 'templates';
	// config.extraPlugins = 'sourcedialog',
	// config.removePlugins = 'sourcearea',
	// config.extraPlugins = 'htmlwriter';
	config.templates_replaceContent = false;
	// config.forcePasteAsPlainText = true;
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

 

// CKEDITOR.on( 'instanceReady', function( ev ) {
//     // Ends self-closing tags the HTML4 way, like <br>.
//     ev.editor.dataProcessor.writer.selfClosingEnd = '>';
// 	ev.editor.dataProcessor.writer.indentationChars = '\t';
// 	ev.editor.dataProcessor.writer.lineBreakChars = '\n';
// 	ev.editor.dataProcessor.writer.setRules( 'p', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'span', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'ul', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'li', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'ol', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'div', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'b', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'strong', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'i', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// 	ev.editor.dataProcessor.writer.setRules( 'em', {
// 		// Indicates that this tag causes indentation on line breaks inside of it.
// 		indent: true,	
// 		// Inserts a line break before the <p> opening tag.
// 		breakBeforeOpen: true,	
// 		// Inserts a line break after the <p> opening tag.
// 		breakAfterOpen: true,	
// 		// Inserts a line break before the </p> closing tag.
// 		breakBeforeClose: true,	
// 		// Inserts a line break after the </p> closing tag.
// 		breakAfterClose: true
// 	} );
// });