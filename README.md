# CMSimpleXH-Template-bootstrap_Acme
bootstrap(Responsive) Template for CMSimpleXH ,and Other.

Original Template : https://shapebootstrap.net/item/1524925-acme-free-responsive-corporate-template  

## Ver2.0  (Try Version)
* for CMSimple_XH (testing Ver.1.6.7)   

* Including
 * plugin/tinymce/init/init_bootstrap.js  
   including Simple style :Responsive images ,+roundedc,+circle and other.  
 * plugin/tinymce/plugins/  clear and syntaxhl
 * plugin/tinymce4/** (tinyMCE4CMSimple_XH:tinymce4.1.2.5  http://cmsimpleforum.com/viewtopic.php?f=12&t=7017)  
    including Simple template: columns set,tab,accodion  
    including Simple style :Responsive images ,+roundedc,+circle and other.  
    including TinyMCE-FontAwesome-Plugin Ver1.7.0  https://github.com/josh18/TinyMCE-FontAwesome-Plugin


## Instructions
1. Unzip  
2. Open bootstrap_Acme_CMSimpleXH  
3. Upload it to your cmsimpleXH site  
ex.  
   bootstrap_Acme_CMSimpleXH  
     -/tempalte/*  ---> (your cmsimple)/tempalte/*  
     -/plugins/tinymce/*  ---> (your cmsimple)/plugins/tinymce/*  
     -/plugins/tinymce4/*  ---> (your cmsimple)/plugins/tinymce4/*   
        .....  
4. Select, Admin > settings > CMS > Template    --> bsp_acme_Main  
   Select,your toppage Pagetemplate -->  bsp_acme_ForTop  
5. IF you use tinymce's new init  
   Select, Admin > plugins > tinymce > Config  > init --> bootstrap*  
    * if you use tinymce4, Admin > settings > CMS  Editor --> tinymce4  
      and select , tinymce4 > Config  > init --> bootstrap*  
      * Caution! tinyMCE4CMSimple_XH(tinymce4.1.2.5) requires PHP ≥ 5.3



:exclamation:  
"login Link" have only toppage(bsp_acme_ForTop) ,at the bottom right.  hiding in the same color  
  IF you lost "login Link" , Direct Access http://your cmsimle/&login
  
### has been found Failure :cry:
* Unstable operation of the Admin menu  
* Pagemanager(jstree): dnd(Drag & drop) is Shifts image.  
   CMSimple_XH is is not consider "position:relative"  
* tinymce: Fullscree don't work.  
