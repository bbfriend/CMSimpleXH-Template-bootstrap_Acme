/*
* Plugin Name: XH_Emoji
* Plugin URI: http://cmsimple-jp.org
* Version: 1.0.
* Icon Author: emojione
* Author URI: http://emojione.com/
*/
tinymce.PluginManager.requireLangPack('xh_emoji');
tinymce.PluginManager.add('xh_emoji', function(editor, url) {

    var translate = tinymce.util.I18n.translate;

	editor.addCommand('xh_emoji', function() {
		editor.windowManager.open({
			file : url + '/../../../../xh_emoji/popup.php',
			width : 630,
			height : 350,
			inline : 1
		}, {
			plugin_url : url // Plugin absolute URL
		});
	});

    // Add Button to Editor
    editor.addButton('xh_emoji', {
		title : translate('xh_emoji'),
		tooltip:translate('xh_emoji'),
		image: url + '/img/wp-emoji-icon.png',
		cmd : 'xh_emoji',
    });

});