{
  selector: "%SELECTOR%",
  theme: "modern",
  skin: "lightgray2",
  toolbar_items_size: "small",
  menubar:false,
//  language : "%LANGUAGE%",
  plugins: [
    "advlist anchor autolink autosave charmap contextmenu emoticons fullscreen hr",
    "image importcss insertdatetime link lists media nonbreaking paste template sh4tinymce",
    "save searchreplace table textcolor visualblocks visualchars wordcount compat3x clear yomigana fontawesome noneditable codemirror xh_emoji tiny_bootstrap_elements_light bootstrap_popover"
  ],
  toolbar1: "save | fullscreen code formatselect fontselect fontsizeselect | ruby | sh4tinymce",
  toolbar2: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify cut copy paste pastetext | bullist numlist outdent indent blockquote | clearleft clearright clearboth",
  toolbar3: "undo redo | link unlink anchor image media | hr nonbreaking removeformat visualblocks visualchars | forecolor backcolor | searchreplace | charmap",
  toolbar4: "tiny_bootstrap_elements_light | bootstrap_popover template styleselect xh_emoji fontawesome | emoticons subscript superscript | table inserttime help",
  image_advtab: true,
  image_title: true,
  extended_valid_elements: 'span[class|style]',
  file_browser_callback: "%FILEBROWSER_CALLBACK%",
//  content_css: "%STYLESHEET%" ,
  content_css: "%STYLESHEET% ,//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css",
//  content_css: "//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css , %STYLESHEET%",

  importcss_append:true,
  importcss_selector_filter: /(?:([a-z0-9\-_]+))(\.[a-z0-9_\-\.]+)$/i,
// %LANGUAGE% = language:"en" (fallback) or language_url = path to tinymce language file (in regard to the TinyMCE CDN Variant  
  %LANGUAGE%
  element_format: "%ELEMENT_FORMAT%",
// %PAGEHEADERS% = h1...hx for new pages, %NAMED_PAGEHEADERS% =  1. Level pageheader=h1 ...hx, %HEADERS% = remaining hy...h6
  block_formats: "%HEADERS%;p=p;div=div;%PAGEHEADERS%;code=code;pre=pre;dt=dt;dd=dd",
  "insertdatetime_formats": ["%H:%M:%S", "%d.%m.%Y", "%I:%M:%S %p", "%D"],
  relative_urls: true,
  convert_urls: false,
  entity_encoding: "raw",

//  fullscreen_new_window : true,
  style_formats_merge: true,
  style_formats: [
    {title: "Responsive", icon: "fa-compress" , items: [
      {title: "Image", icon: "image", items: [
        {title: "Normal", icon: "fa-compress", selector: 'img',classes: 'img-responsive'},
        {title: "  +Circle", icon: "fa-circle-o", selector: 'img',classes: 'img-circle img-responsive'},
        {title: "  +Rounded", icon: "fa-square-o", selector: 'img',classes: 'img-rounded img-responsive'},
        {title: "  +Thumbnail", icon: "fa-image", selector: 'img',classes: 'img-thumbnail img-responsive'}
      ]},
      {title: "Others", icon: "media",items: [
        {title: "Movie", icon: "fa-youtube", selector: 'div,p,span',classes: 'video-wrap'},
        {title: "GoogleMap", icon: "fa-map-marker", selector: 'div,p,span',classes: 'video-wrap'},
        {title: "PDF Etc.", icon: "fa-file-pdf-o", selector: 'div,p,span',classes: 'video-wrap'}
      ]},
    ]},
    {title: "Block Animate", icon: "fa-arrows", items: [
        {title: "FadeinUP", icon: "fa-arrow-up", selector: 'div,p,span',classes: 'fadeInUp animated'},
        {title: "FadeinDown", icon: "fa-arrow-down", selector: 'div,p,span',classes: 'fadeInDown animated'},
        {title: "FadeinLeft", icon: "fa-arrow-left", selector: 'div,p,span',classes: 'fadeInLeft animated'},
        {title: "FadeinRight", icon: "fa-arrow-light", selector: 'div,p,span',classes: 'fadeInRight animated'}
    ]},
    {title: "BlockBg", icon: "fa-paint-brush", items: [
        {title: "Gray", selector: 'div,p,span',classes: 'gray-bg'}
    ]}
  ],
  codemirror: {
    indentOnInit: true, // Whether or not to indent code on init. 
    path: 'CodeMirror', // Path to CodeMirror distribution
    config: {           // CodeMirror config object
       mode: 'application/x-httpd-php',
       lineNumbers: true
    },
    jsFiles: [          // Additional JS files to load
       'mode/clike/clike.js',
       'mode/php/php.js'
    ]
  },
  bootstrapLightConfig: {
    'overwriteValidElements': false
    // 'imagesPath': '/demo/img/' // localhost
  },
  template_popup_height:200,
  templates : [
      {
        title: "Colum 1/2 1/2",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_6_6.htm",
        description: "Colum 1/2 1/2"
      },
      {
        title: "Colum 1/3 1/3 1/3",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_4_4_4.htm",
        description: "Colum 1/2 1/2"
      },
      {
        title: "Colum 1/4 1/4 1/4 1/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_3_3_3_3.htm",
        description: "Colum 1/4 1/4 1/4 1/4"
      },
      {
        title: "Colum 1/4 3/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_3_9.htm",
        description: "Colum 1/4 3/4"
      },
      {
        title: "Colum 3/4 1/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_9_3.htm",
        description: "Colum 3/4 1/4"
      },
      {
        title: "Colum 1/3 2/3",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_4_8.htm",
        description: "Colum 1/3 2/3"
      },
      {
        title: "Colum 2/3 1/3",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_8_4.htm",
        description: "Colum 2/3 1/3"
      },
      {
        title: "Colum 2/4 1/4 1/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_6_3_3.htm",
        description: "Colum 2/4 1/4 1/4"
      },
      {
        title: "Colum 1/4 2/4 1/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_3_6_3.htm",
        description: "Colum 1/4 2/4 1/4"
      },
      {
        title: "Colum 1/4 1/4 2/4",
        url: "./templates/bsp_acme_Main/for_tinymce/template/clm_3_3_6.htm",
        description: "Colum 1/4 1/4 2/4"
      },
      {
        title: "Accordion Basic",
        url: "./templates/bsp_acme_Main/for_tinymce/template/accordion_basic.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
      {
        title: "Accordion OPEN",
        url: "./templates/bsp_acme_Main/for_tinymce/template/accordion_open_open.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
      {
        title: "Tabs Basic",
        url: "./templates/bsp_acme_Main/for_tinymce/template/tabs_basic.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
      {
        title: "Tabs Advance",
        url: "./templates/bsp_acme_Main/for_tinymce/template/tabs_advance.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
  ],
    font_formats:"明朝=\'ＭＳ Ｐ明朝\',\'ヒラギノ明朝 Pro W3\',serif;"+
        "角ゴシック=\'ＭＳ Ｐゴシック\',Osaka,\'ヒラギノ角ゴ Pro W3\',sans-serif;"+
        "丸ゴシック=\'ヒラギノ丸ゴ Pro W4\',\'ヒラギノ丸ゴ Pro\',Hiragino Maru Gothic Pro,\'HG丸ｺﾞｼｯｸM-PRO\',HGMaruGothicMPRO,\'メイリオ\',Meiryo,serif"+
        "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"
 }