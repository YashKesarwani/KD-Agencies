function searchClear() {
  if(document.frm.ss.value == 'Search Products/Services') {    
      document.frm.ss.placeholder = '';
      document.frm.ss.value = '';      
} 
}
function settext() {
  '' == document.frm.ss.value && (document.frm.ss.value = 'Search Products/Services')
}
function settextvalue() {
    if(document.frm.ss.value == ''){
//         document.frm.ss.value = 'Search Products/Services';
     document.frm.ss.placeholder = 'Search Products/Services';
    }
}
function searchCheck() {
  var e = '';
  if ('' == document.frm.ss.value || 'Search Products/Services' == document.frm.ss.value || document.frm.ss.value.match(/^\s+$/)) {
    return alert('Please enter some keyword to search.'),
    document.frm.ss.focus(),document.frm.ss.placeholder = '',
    document.frm.ss.value = '',
    !1
  }
  if (document.frm.ss.value.length < 3) {
    return alert('Please Enter atleast 3 character'),
    document.frm.ss.focus(),document.frm.ss.placeholder = '',
    document.frm.ss.value = '',
    !1
  }
  if (!document.frm.ss.value.match(/\w/)) {
    return alert('Enter at least one alphanumeric characters for search.'),
    document.frm.ss.focus(),document.frm.ss.placeholder = '',
    document.frm.ss.value = '',
    !1
  }
  if (document.frm.ss.value && document.frm.ss.value != "") {
    var t;
    t = document.frm.ss.value.replace(/^\s+/g, '').replace(/\s+$/g, ''),
    t = t.replace(/\+/g, ' '),
    t = t.replace(/\s+/g, '+'),
    t = t.replace(/%/g, '%25'),
    e += 'ss=' + t;
    try {
      _gaq.push(['b._trackEvent',
      'Body',
      'Searchbutton',
      'd0065'])
    } catch (n) {
    }
    return window.location = paidFreeurl + 'search.html?' + e,
    !1
  }
}
var Imgs = [
];
window.onscroll = CkTop;
var persistmenu = 'yes',
persisttype = 'sitewide';
var _FG_tracker = null,
timer,
ss = [
],
arr,
str;
function CkTop() {
  for (var e = 0; e < Imgs.length; e++) {
    zxcPos(Imgs[e].img) [1] < zxcWWHS() [1] + zxcWWHS() [3] && 0 == Imgs[e].opc && (Imgs[e].fade(), Imgs.splice(e, 1), e--)
  }
}
function zxcWWHS() {
  return window.innerHeight ? [
    window.innerWidth - 10,
    window.innerHeight - 10,
    window.pageXOffset,
    window.pageYOffset
  ] : document.documentElement.clientHeight ? [
    document.documentElement.clientWidth - 10,
    document.documentElement.clientHeight - 10,
    document.documentElement.scrollLeft,
    document.documentElement.scrollTop
  ] : [
    document.body.clientWidth,
    document.body.clientHeight,
    document.body.scrollLeft,
    document.body.scrollTop
  ]
}
function zxcPos(e) {
  for (var t = [
    0,
    0
  ]; e; ) {
    t[0] += e.offsetLeft,
    t[1] += e.offsetTop,
    e = e.offsetParent
  }
  return t
}
function Windowheight() {
  var e = 0,
  t = 0;
  return 'number' == typeof window.innerWidth ? (e = window.innerWidth, t = window.innerHeight)  : document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight) ? (e = document.documentElement.clientWidth, t = document.documentElement.clientHeight)  : document.body && (document.body.clientWidth || document.body.clientHeight) && (e = document.body.clientWidth, t = document.body.clientHeight),
  t
}
function offsettop(e) {
  core_strundefined = 'undefined';
  var t,
  n,
  o = {
    top: 0,
    left: 0
  },
  a = e,
  r = a && a.ownerDocument;
  if (r) {
    return t = r.documentElement,
    typeof a.getBoundingClientRect !== core_strundefined && (o = a.getBoundingClientRect()),
    n = getWindow(r),
    {
      top: o.top + (n.pageYOffset || t.scrollTop) - (t.clientTop || 0),
      left: o.left + (n.pageXOffset || t.scrollLeft) - (t.clientLeft || 0)
    }
  }
}
function getWindow(e) {
  return null != e && e == e.window ? e : 9 === e.nodeType ? e.defaultView || e.parentWindow : !1
}
function LoadImageinViewPort() {
  var e = void 0 != window.pageYOffset ? window.pageYOffset : window.document.documentElement.scrollTop;
  if ('undefined' == typeof jQuery) {
    var t = document.getElementsByTagName('img'),
    n = '';
    for (i = 0; i < t.length; i++) {
      n = '',
      parseInt(offsettop(t[i]).top) <= parseInt(e) + parseInt(Windowheight()) + 600 && parseInt(offsettop(t[i]).top) + parseInt(Windowheight()) + 600 > parseInt(e) && (null != t[i].getAttribute('data-dataimg') && '' != t[i].getAttribute('data-dataimg') ? n = t[i].getAttribute('data-dataimg')  : null != t[i].parentNode.getAttribute('data-dataimg') && '' != t[i].parentNode.getAttribute('data-dataimg') && (n = t[i].parentNode.getAttribute('data-dataimg')), '' != n && '' != t[i].src && (t[i].src = n))
    }
  } else {
    jQuery('img[data-dataimg]').each(function () {
      parseInt(jQuery(this).offset().top) < parseInt(e) + parseInt(jQuery(window).height()) + 600 && parseInt(jQuery(this).offset().top) + parseInt(jQuery(this).height()) + 600 > parseInt(e) && '' != this.getAttribute('data-dataimg') && this.src != this.getAttribute('data-dataimg') && (this.src = this.getAttribute('data-dataimg'))
    }),
    jQuery('a[data-dataimg] img').each(function () {
      parseInt(jQuery(this).offset().top) < parseInt(e) + parseInt(jQuery(window).height()) + 600 && parseInt(jQuery(this).offset().top) + parseInt(jQuery(this).height()) + 600 > parseInt(e) && jQuery(this).attr('src', jQuery(this).parent('a[data-dataimg]').attr('data-dataimg'))
    })
  }
  var o = document.getElementsByClassName('bckg_sec');
  for (i = 0; i < o.length; i++) {
    parseInt(offsettop(o[i]).top) <= parseInt(e) + parseInt(Windowheight()) + 600 && parseInt(offsettop(o[i]).top) + parseInt(Windowheight()) + 600 > parseInt(e) && (n = o[i].getAttribute('data-dataimg'), '' != n && '' == o[i].style.backgroundImage && (o[i].style.backgroundImage = 'url(\'' + n + '\')'))
  }
  window.addEventListener ? window.addEventListener('scroll', bindFunctionOnScroll, !1)  : window.attachEvent ? window.attachEvent('onscroll', bindFunctionOnScroll)  : window.onscroll = bindFunctionOnScroll,
  CkTop()
}


function bindFunctionOnScroll() {
  clearTimeout(timer),
  timer = setTimeout(LoadImageinViewPort, 150)
}
function finder(e, t) {
  for (var n = new Array, o = 0; o < e.length; o++) {
    var a = new RegExp(t, 'i');
    a.test(e[o]) && n.push({
      value: e[o],
      label: e[o]
    })
  }
  return n
}

function loadafterpage(){

if(fcp_flag == 2){
if(typeof(Suggester)=="function" && Suggester !='undefined'){
var sugg_prods = new Suggester({"element":"ss", "placeholder":"Search Products/Services", minStringLengthToDisplaySuggestion:0,defaultSuggChk: true , source:ss_mdc, autocompleteClass:"sug-ss", finder:finder, "onSelect":searchCheck, rowsToDisplay:15,"recentData":false});
}else{
$.getScript("//utils.imimg.com/suggest/js/suggest.js").done( function( ) {
var sugg_prods = new Suggester({"element":"ss", "placeholder":"Search Products/Services", minStringLengthToDisplaySuggestion:0,defaultSuggChk: true ,source:ss_mdc, autocompleteClass:"sug-ss", finder:finder, "onSelect":searchCheck, rowsToDisplay:15,"recentData":false});
});
}
}
var cent_blowupfcpmdc_spr=centpath+"/jpg/sprt.png";
var cent_blowupfcpmdc_tru=centpath+"/jpg/trst.png";
var backclass = '.sp,.FM_pAYi{ background-image:url('+cent_blowupfcpmdc_spr+') }';
backclass += '.ts{ background-image:url('+cent_blowupfcpmdc_tru+') }';
var styleele = document.createElement('style');
styleele.type = "text/css";
document.getElementsByTagName('head')[0].appendChild(styleele);
if(styleele.styleSheet){	styleele.styleSheet.cssText =backclass;	}
else	{		styleele.innerHTML = backclass;	}
setTimeout(function(){ LoadImageinViewPort();},200);
var pns_noDisplay = $(".header_pnsno").text();
if(pns_noDisplay != ""){
pns_noDisplay = '0'+pns_noDisplay;
if(cntry_iso_fcp != "IN") pns_noDisplay = '+91-'+pns_noDisplay;
$(".header_pnsno").html(pns_noDisplay);
}
if(page.pageType != "homepage" && page.pageType != "enquiry" && page.pageType != "search"){
var totalright_h = 0;
if(typeof(profNavHid) != "undefined"){ totalright_h = totalright_h + $('.profNavH').height(); }
if(typeof(rightAdHid) != "undefined") totalright_h = totalright_h + $('.rightAdH').height();
if(typeof(catindxHid) != "undefined") totalright_h = totalright_h + $('.catindxH').height();
var  stickY_heigt=0;
if(typeof(stickyFrm_hid) != "undefined")
{ 
  totalright_h = totalright_h + $('.stickyFrm_h').height();
  stickY_heigt = $('.stickyFrm_h').height();  
}
var doc_wind = $(document).height();
var diff_inheight = doc_wind-stickY_heigt;
document.getElementById('stickyFrm_hid').style.top = diff_inheight+'px';
var FM_PRD = $('.height_sectn ').height();
if(totalright_h > FM_PRD){    
    $('.height_sectn ').css('minHeight',totalright_h+'px');
}
}
var  stickY_heigt=0;
if(typeof(stickyFrm_hid) != "undefined"){ stickY_heigt = $('.stickyFrm_h').height();  
var doc_wind = $(window).height();
var diff_inheight = doc_wind-stickY_heigt-20;
if(document.getElementById('stickyFrm_hid') != "" && document.getElementById('stickyFrm_hid') != null){
document.getElementById('stickyFrm_hid').style.top = diff_inheight+'px';
}
}

}
//Google Adds JS starts
if(fcp_flag == 1){
    
// var googletag = googletag || {};
// googletag.cmd = googletag.cmd || [];		   
// function loadScript_all()
//     {
//         if(typeof(googletag) != "undefined")
//             {
//                      googletag.cmd.push(function() {
//                                
// if(currentPageType == "homepage"){                        
// //Home Page Below Product Unit.
// 
//     if(glidUSer == 4414485){
//         googletag.defineSlot('/3047175/FCP-HP-Below-Product-Unit-728-90', [992, 200], 'div-gpt-ad-1556862469642-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
//         
//     }else{
//     googletag.defineSlot('/3047175/FCP-HP-Below-Product-Unit-728-90', [728, 90], 'div-gpt-ad-1556862469642-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
//     }
//     
//     
// }
// if(currentPageType != "homepage"){               
// //Home Page Below About Us Unit.
// googletag.defineSlot('/3047175/FCP-HP-Above-Reachus-728-90', [728, 90], 'div-gpt-ad-1556862316806-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
// }
// //Beside BL form
// googletag.defineSlot('/3047175/FCP_BL-Form_Right-Bottom_All-Pages_300-250', [300, 250], 'div-gpt-ad-1533800617988-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
// // Between Recommended & Related Mcat
// 
// if(glidUSer == 4414485){
// googletag.defineSlot('/3047175/FCP_Product-Unit_Bottom_D-Rank_970-90', [[992, 200]], 'div-gpt-ad-1533801028954-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
//         
//     }else{
// googletag.defineSlot('/3047175/FCP_Product-Unit_Bottom_D-Rank_970-90', [[980, 90], [970, 90]], 'div-gpt-ad-1533801028954-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
//     }
// 
// // After Related Mcat
// googletag.defineSlot('/3047175/FCP_Above-Recently-View-Section_All-Pages_970-90', [[970, 90], [980, 90]], 'div-gpt-ad-1535449098114-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
// // Product Page Above We also Deal In
// googletag.defineSlot('/3047175/FCP-ABD-RIGHT-BELOW-BANNER', [300, 250], 'div-gpt-ad-1430200463720-0').setTargeting('mcatid',mcatid_ads).setTargeting('catid', catid_ads).addService(googletag.pubads());
// googletag.pubads().enableSingleRequest();
// googletag.enableServices();
// });
// googletag.cmd.push(function() 
// {  
// if(currentPageType == "homepage"){  
// googletag.display('div-gpt-ad-1556862469642-0');  //Home Page Below Product Unit.
// }
// if(currentPageType != "homepage"){             
// googletag.display('div-gpt-ad-1556862316806-0'); //Home Page Below About Us Unit.
// }
// googletag.display('div-gpt-ad-1533800617988-0'); // Beside BL form
// googletag.display('div-gpt-ad-1533801028954-0'); // Between Recommended & Related Mcat
// googletag.display('div-gpt-ad-1535449098114-0'); // After Related Mcat
// googletag.display('div-gpt-ad-1430200463720-0'); // Product Page Above We also Deal In
// });
//         }else{
//      setTimeout(function(){loadScript_all()}, 50);
//     }
// }
function show_rltd_adFCP()
{
if(typeof(adsbygoogle)!="undefined") 
{
try
{
    
// Sidebar_Top
//   rightAdHid  
//     Beside_Inline_Form
//     Below_Related_Products
//     Below_Featured_Products
//     Below_Our_Product
    
if(document.getElementById('Sidebar_Top') != "" && document.getElementById('Sidebar_Top')  != null ) (adsbygoogle = window.adsbygoogle || []).push({});

if(document.getElementById('rightAdHid') != "" && document.getElementById('rightAdHid') != null)  (adsbygoogle = window.adsbygoogle || []).push({});
   
if(document.getElementById('Beside_Inline_Form') != "" && document.getElementById('Beside_Inline_Form') != null) (adsbygoogle = window.adsbygoogle || []).push({});

if(document.getElementById('Below_Related_Products') != "" && document.getElementById('Below_Related_Products') != null) (adsbygoogle = window.adsbygoogle || []).push({});

if(document.getElementById('Below_Featured_Products') != "" && document.getElementById('Below_Featured_Products') != null) (adsbygoogle = window.adsbygoogle || []).push({});

if(document.getElementById('Below_Our_Product') != "" && document.getElementById('Below_Our_Product') != null) (adsbygoogle = window.adsbygoogle || []).push({});   
    
}
catch(ex){}
}
else
{
setTimeout(function(){show_rltd_adFCP()}, 50);
}
}

document.onreadystatechange = function () { if (document.readyState == "complete"){   
$.ajaxSetup({cache: false});
$.get("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js",{},function(data){setTimeout(function(){show_rltd_adFCP()},7);},'script');
}}

//Adds JS ends

    
}

if(page.pageType == "category" || page.pageType == "search"){
var actlink = 0;
function getComputedTranslateX(e) {
    if (window.getComputedStyle) {
        var t = getComputedStyle(e)
          , a = t.transform || t.webkitTransform || t.mozTransform || t.msTransform
          , n = a.match(/^translate\((.+)\)$/);
        return n ? parseFloat(n[1].split(", ")[12]) : (n = a.match(/^matrix\((.+)\)$/),
        n ? parseFloat(n[1].split(", ")[4]) : 0)
    }
}
function getComputedTranslateY(e) {
    if (window.getComputedStyle) {
        var t = getComputedStyle(e)
          , a = t.transform || t.webkitTransform || t.mozTransform || t.msTransform
          , n = a.match(/^translate\((.+)\)$/);
        return n ? parseFloat(n[1].split(", ")[13]) : (n = a.match(/^matrix\((.+)\)$/),
        n ? parseFloat(n[1].split(", ")[5]) : 0)
    }
}   
function slide(id, stype, direction) {
    
    var ul = document.getElementById(id).getElementsByTagName("ul")[0]
      , li = ul.getElementsByTagName("li").length
      , SlideLength = 40;
    
      li > 7 && (window.lilength = parseInt(li - 7) * SlideLength);
        var xval = getComputedTranslateX(ul);
      
    "right" == stype ? (li - 1 > actlink && actlink++,
    -window.lilength < parseInt(xval) && actlink > 4 && (xval = parseInt(xval - SlideLength))) : (actlink > 0 && actlink--,
    0 != parseInt(xval) && li - 7 > actlink && (xval = parseInt(xval + SlideLength)));
    
    var thmb = document.getElementById(id);
    var elem = thmb.getElementsByTagName("img")[actlink];
    var liele = thmb.getElementsByTagName("li")[actlink];
    
    eval(liele.getAttribute("onmouseover"));
    
    document.getElementById(id).getElementsByTagName("ul")[0].style.msTransform = "translate(0px," + xval + "px)";
    document.getElementById(id).getElementsByTagName("ul")[0].style.transform = "translate(0px," + xval + "px)"; 
    
    if(actlink > 4){
        var a_actlink=(actlink-4)*40;
        document.getElementById(id).getElementsByTagName("ul")[0].style.transform = "translate(-" + a_actlink + "px,0px)";
        document.getElementById(id).getElementsByTagName("ul")[0].style.msTransform = "translate(-" + a_actlink + "px,0px)";
    }else{
        document.getElementById(id).getElementsByTagName("ul")[0].style.transform = "translate(0px,0px)";
        document.getElementById(id).getElementsByTagName("ul")[0].style.msTransform = "translate(0px,0px)";
        
        }
    }    
}
function openSitemapDIV(profID,catgID){
   var pCrCl = document.getElementById(profID).className;
   var prCrCl = document.getElementById(catgID).className;
if(pCrCl.includes("hideNav") && !prCrCl.includes("hideNav") ){
   $('#'+profID).removeClass('hideNav');
   $('#'+catgID).addClass('hideNav'); 
}else if(!pCrCl.includes("hideNav") && prCrCl.includes("hideNav") ){
   $('#'+catgID).removeClass('hideNav');
   $('#'+profID).addClass('hideNav'); 
}    
}
// About Us Page.
function lightbox_open(img){
if(typeof($('#img_popProf')) == "object"){
$('#img_popProf').html('<div class="pup FM_ps_t FM_ps_b FM_ps_l FM_ps_r FM_bg0 FM_pa"><img id="zoom_img" src="'+img+'"><span class="close-thik FM_cp" onclick="lightbox_close();"></span></div>');
$('#img_popProf').removeClass('FM_ds4');
$('#img_popProf').addClass('FM_Db');
}
if(typeof($('#html_job')) == "object"){
$('#html_job').css("overflow","hidden");
}
$(document).on('keydown', function(event) { if (event.key == "Escape") { lightbox_close(); } });
}
function lightbox_close(){
if(typeof($('#html_job')) == "object"){
$('#html_job').css("overflow","auto");
}
if(typeof($('#img_popProf')) == "object"){
$('#img_popProf').html('');
$('#img_popProf').addClass('FM_ds4');
}
}

// Read More for Products.
var list_prod_descDIV = $("div[id^='desc_']");
var const_divID='';
var const_divID_h=0;
var viewmore_id='';
var heght_take=217;
if(window.screen.width > 1600) heght_take=297;
if(list_prod_descDIV.length > 0){
for(var len_ar=0;len_ar< list_prod_descDIV.length;len_ar++){
 const_divID=list_prod_descDIV[len_ar].id;
 const_divID_h = $('#'+const_divID).height();
 viewmore_id = const_divID.replace("desc_", "");
    if(const_divID_h > heght_take){
        $('#viewmore_'+viewmore_id).removeClass('FM_ds4');
        $('#'+const_divID).addClass('FM_cntnt');
    }
}
}
