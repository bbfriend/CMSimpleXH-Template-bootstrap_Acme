{
  selector: "%SELECTOR%",
  theme: "modern",
  skin: "lightgray",
  toolbar_items_size: "small",
  menubar:false,
//  language : "%LANGUAGE%",
  plugins: [
    "advlist anchor autolink autosave charmap code contextmenu emoticons fullscreen hr",
    "image importcss insertdatetime link lists media nonbreaking paste template",
    "save searchreplace table textcolor visualblocks visualchars wordcount compat3x clear fontawesome noneditable"
  ],
  toolbar1: "save | fullscreen code formatselect fontselect fontsizeselect styleselect | template",
  toolbar2: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify cut copy paste pastetext | bullist numlist outdent indent blockquote | clearleft clearright clearboth fontawesome",
  toolbar3: "undo redo | link unlink anchor image media | hr nonbreaking removeformat visualblocks visualchars | forecolor backcolor | searchreplace | charmap",
  toolbar4: "emoticons subscript superscript | table inserttime help",
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

  style_formats_merge: true,
  style_formats: [
    {title: "Image Reponsible", items: [
        {title: "Reponsible", selector: 'img',classes: 'img-responsive'},
        {title: " +Circle", selector: 'img',classes: 'img-circle img-responsive'},
        {title: " +Rounded", selector: 'img',classes: 'img-rounded img-responsive'},
        {title: " +Thumbnail", selector: 'img',classes: 'img-thumbnail img-responsive'}
    ]},
    {title: "Block Animate", items: [
        {title: "FadeinUP", selector: 'div,p,span',classes: 'fadeInUp animated'},
        {title: "FadeinDown", selector: 'div,p,span',classes: 'fadeInDown animated'},
        {title: "FadeinLeft", selector: 'div,p,span',classes: 'fadeInLeft animated'},
        {title: "FadeinRight", selector: 'div,p,span',classes: 'fadeInRight animated'}
    ]},
    {title: "blockBg", items: [
        {title: "Gray", selector: 'div,p,span',classes: 'gray-bg'}
    ]}
  ],
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
        title: "Tabs Basic",
        url: "./templates/bsp_acme_Main/for_tinymce/template/tabs_basic.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
      {
        title: "Tabs Advance",
        url: "./templates/bsp_acme_Main/for_tinymce/template/tabs_advance.htm",
        description: "The contents of the accordion is edited in the source code!"
      },
  ]

 }