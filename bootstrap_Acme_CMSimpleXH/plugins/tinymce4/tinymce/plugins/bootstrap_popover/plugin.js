/**
 * TinyMce Bootstrap Popover 
 * 
 * @version 1.1
 * ***********************************************************
 * 
 * https://cmsimple-jp.org
 * @version 1.1
 * @author Utaka http://u-tec.org
 *
 * ***********************************************************
 * @version 1.1 2015/11/3
 *
 */
tinymce.PluginManager.requireLangPack('bootstrap_popover');
tinymce.PluginManager.add('bootstrap_popover', function(editor, url) {


    editor.settings.content_css += ', '  + url + '/style.css';

    editor.addButton('bootstrap_popover', {
        title: 'Popover',
        tooltip:"Popover",
        image: url+'/img/popover.png',
//		stateSelector: 'span[data-toggle="popover"]',
        onclick: function() {
            editor.windowManager.open({
                title: 'Popover',
                body: [
/***
               {type   : 'container',
                name   : 'container',
                label  : 'container',
                html   : '<h1>container<h1> is <i>ANY</i> html i guess...<br/><br/><pre>but needs some styling?!?</pre>'
               },
***/
                    {type: 'listbox',
                        name: 'layout',
                        label: 'Layout',
                        'values': [
                            {text: 'Top', value: 'top'},
                            {text: 'Right', value: 'right auto'},
                            {text: 'Bottom', value: 'bottom'},
                            {text: 'Left', value: 'left auto'}
                        ]
                    },
                    {type: 'listbox',
                        name: 'trigger',
                        label: 'Trigger',
                        'values': [
                            {text: 'Hover', value: 'hover'},
                            {text: 'Click', value: 'click'}
                        ]
                    },
                    {
                        type: 'textbox',
                        name: 'title',
                        label: 'Title'
                    },
                    {
                        type: 'textbox',
                        name: 'content',
                        label: 'Content',
                        multiline: true,
                        minWidth: 300,
                        minHeight: 100
                    }

/**                 {type: 'listbox',
                        name: 'effect',
                        label: 'Effect',
                        'values': [
                            {text: 'FadeIN', value: 'animated fadeIn'},
                            {text: 'FadeInDown', value: 'animated fadeInDown'},
                            {text: 'Flip + Fade', value: '3'},
                            {text: 'Pop', value: '4'},
                            {text: 'Flip 90', value: '5'}
                        ] 
                    }****/
                ],
                onsubmit: function(e) {
                    editor.insertContent('<span class="bootstrap_popover" data-toggle="popover" data-html="true" data-placement="' + e.data.layout + '" data-trigger="' + e.data.trigger + '" data-title="' + e.data.title + '" data-content="' + e.data.content + '"><span class="bootstrap_popover_mark glyphicon glyphicon-question-sign"><span style="display: none;">' +  e.data.title + '</span></span></span>');
                }
            });
        }
    });
});
