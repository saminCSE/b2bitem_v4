$(document).ready(function(){let windowWidth=$(window).width();$('[data-toggle="tooltip"]').tooltip();$('[data-toggle="popover"]').popover();$(".custom-file-input").on("change",function(){var fileName=$(this).val().split("\\").pop();$(this).siblings(".custom-file-label").addClass("selected").html(fileName);});$.fn.stickyNavbar=function(){let releaseHeight=$(this).outerHeight();if($(window).scrollTop()>=releaseHeight){$(this).addClass('sticky-lg-shadow after-scroll-header');}else{$(this).removeClass('sticky-lg-shadow after-scroll-header');}};if(windowWidth>=992){$('.biz-header').stickyNavbar();}
$(window).scroll(function(){if(windowWidth>=992){$('.biz-header').stickyNavbar();}});$.fn.xplacement=function(){let windowsWidth=$(window).width();let thisWidth=$(this).outerWidth();let offsetLeft=$(this).offset().left;let position=parseInt(windowsWidth-offsetLeft);let thisPos=parseInt(thisWidth+offsetLeft);if(thisPos>windowsWidth){$(this).css({left:'auto',right:0,});}else{$(this).css({left:0,right:'auto'});}};$('.auto-place').each(function(){$(this).on('mouseover',function(){$(this).find('.x-placement').xplacement();});$(this).on('mouseout',function(){$(this).find('.x-placement').xplacement();});});$.fn.autoscrollBottom=function(){let totalHeight=0;$(this).children().each(function(){totalHeight=parseFloat(totalHeight+$(this).outerHeight(true));});$(this).scrollTop(totalHeight);};$(".attach-file").find('input').on("change",function(){let fileName=$(this).val().split("\\").pop();$(this).parents('.attach-file').find("label").addClass("selected").find('span').html(fileName);});$('.toggler').on('click',function(e){e.preventDefault();let delayTime=300;$(this).parents('.toggle-box').find('.togglable').stop().slideToggle(delayTime);$(this).parents('.toggle-box').delay(delayTime).queue(function(){$(this).stop().toggleClass("active").dequeue();});});$(document).on('click','[data-toggle="aside"]',function(e){e.preventDefault();let target=$(this).attr('data-target');let closeBtnLength=$(target).find('.close-aside').length;if(closeBtnLength<1){$(target).append('<a href="#" class="btn btn-sm close-aside"><i class="fa fa-close"></i></a>')}else{$('.close-aside').remove();}
$(target).stop().toggleClass('aside-show');$('body').stop().toggleClass('overflow-hidden');if($('.aside-backdrop').length<1){$('body').append('<div class="aside-backdrop"></div>')}});$(document).on('click','.close-aside, .close-aside-link',function(e){e.preventDefault();$(this).parents('.panel-aside').removeClass('aside-show');$(this).parents('.aside-on-responsive').removeClass('aside-show');$('body').removeClass('overflow-hidden');$(this).remove();$('.close-aside').remove();$('.aside-backdrop').remove();});$(document).on('click','.can-close-aside',function(e){$('.panel-aside').removeClass('aside-show');$('.aside-on-responsive').removeClass('aside-show');$('body').removeClass('overflow-hidden');$('.aside-backdrop').remove();$('.close-aside').remove();});$(document).on('click','.aside-backdrop',function(){$('.panel-aside').removeClass('aside-show');$('.aside-on-responsive').removeClass('aside-show');$('body').removeClass('overflow-hidden');$('.close-aside').remove();$(this).remove();});$(document).ready(function(){if($('.aside-on-responsive').length<1)
{$('.show-when-aside-present').remove();}});$(document).on('click','.remove-item',function(e){e.preventDefault();$(this).parents('.removable-item').remove();});$('textarea , input').each(function(){$(this).data('holder',$(this).attr('placeholder'));$(this).focusin(function(){$(this).attr('placeholder','');});$(this).focusout(function(){$(this).attr('placeholder',$(this).data('holder'));});});var a=0;$.fn.counterUpAnimation=function(){var oTop=$(this).offset().top-window.innerHeight;if(a==0&&$(window).scrollTop()>oTop){$(this).find('.counter-value').each(function(){var $this=$(this),countTo=$this.attr('data-count');$({countNum:$this.text()}).animate({countNum:countTo},{duration:2000,easing:'swing',step:function(){$this.text(Math.floor(this.countNum));},complete:function(){$this.text(this.countNum);}});});a=1;}};$('.counter').each(function(){$(this).counterUpAnimation();});$(window).on('scroll',function(){$('.counter').each(function(){$(this).counterUpAnimation();});});$('.slide-toggler').on('click',function(e){e.preventDefault();let delayable=300;$('.slide-toggle-item').not($(this).parents('.slide-toggle-item')).find('.slide-togglable').slideUp(300);$('.slide-toggle-item').not($(this).parents('.slide-toggle-item')).delay(delayable).queue(function(){$(this).removeClass("show").dequeue();});$(this).parents('.slide-toggle-item').find('.slide-togglable').stop().slideToggle(delayable);$(this).parents('.slide-toggle-item').delay(delayable).queue(function(){$(this).stop().toggleClass("show").dequeue();});});$('.single-slide-toggler').on('click',function(e){e.preventDefault();let delayable=300;$(this).parents('.slide-toggle-item').find('.slide-togglable').stop().slideToggle(delayable);$(this).parents('.slide-toggle-item').delay(delayable).queue(function(){$(this).stop().toggleClass("show").dequeue();});});$('[data-toggle="smoth-anchor"]').on('click',function(event){event.preventDefault();let dataOffsetTopVal=parseFloat($(this).attr('data-offset-top'));let offsetTopAttrName=$(this).attr('data-offset-top');var defaultAnchorOffset=0;var $anchor=$($(this).data('target'));$anchor.addClass('show');$anchor.find('.slide-togglable').show();var anchorOffset=$anchor.attr('data-scroll-offset');if(!anchorOffset)
anchorOffset=defaultAnchorOffset;if(typeof offsetTopAttrName!==typeof undefined&&offsetTopAttrName!==false){$('html,body').animate({scrollTop:$anchor.offset().top-dataOffsetTopVal},500);}else{$('html,body').animate({scrollTop:$anchor.offset().top-130},500);}});$('.secondary-img-item').on('click',function(e){e.preventDefault();let getImg=$(this).find('img').attr('src');$('#primaryImg').attr('src',getImg);});var lazyItem=4;$('.lazy-list li').slice(0,4).show();$('.lazy-item-toggler').on('click',function(e){e.preventDefault();lazyItem=lazyItem+4;$(this).parents('.lazy-load-box').find('.lazy-list li').slice(0,lazyItem).show();if($(this).parents('.lazy-load-box').find('.lazy-list li:hidden').length<=0)
{$('.lazy-removable-btn-parent').remove();}});$('.lazy-all-load').on('click',function(e){e.preventDefault();$(this).parents('.lazy-load-box').find('.lazy-list li').show();$('.lazy-removable-btn-parent').remove();$(this).remove();});$('.self-remove').on('click',function(){$(this).remove();});$('.self-hide').on('click',function(){$(this).hide();});$('.hide-parent').on('click',function(){$(this).parents('.toggleable-item').addClass('hide');});$('.toggle-parent').on('click',function(){$(this).parents('.toggleable-item').toggledClass('hide');});if(windowWidth<992)
{$('.video-list>*').hide().slice(0,4).show();}});$('.show-hide-list').each(function(){showList=$(this).attr('data-show');$(this).children().slice(showList).hide();length=$(this).children().length;if(length<=showList){$(this).parents('.show-hide-list-box').find('.show-more').hide();}else{$(this).parents('.show-hide-list-box').find('.show-more').show();}});$(document).on('click','.show-more',function(){$(this).children('span').text($(this).children('span').text()=='Show More +'?'Less More -':'Show More +');lengthShow=$(this).parents('.show-hide-list-box').find('.show-hide-list').attr('data-show');$(this).parents('.show-hide-list-box').find('.show-hide-list').children().slice(lengthShow).toggle();});$('.show-hide-content-toggler').on('click',function(e){e.preventDefault();$(this).parents('.show-hide-content-box').find('.show-hide-content').toggleClass('show');$(this).hide();});$('.item-toggler').on('click',function(e){e.preventDefault();let delayable=200;$(this).parents('.toggle-box').find('.toggle-item').not($(this).parents('.toggle-item')).removeClass("active");$(this).parents('.toggle-item').stop().toggleClass("active");$(this).parents('.toggle-box').find('.toggle-item').not($(this).parents('.toggle-item')).find('.togglable-content').slideUp(delayable).delay(delayable).queue(function(){$(this).removeClass("show").dequeue();});$(this).parents('.toggle-item').find('.togglable-content').stop().slideToggle(delayable).delay(delayable).queue(function(){$(this).stop().toggleClass("show").dequeue();});$(this).parents('.toggle-box').find('.toggle-item').not($(this).parents('.toggle-item')).find('.item-toggler').removeClass("active");$(this).stop().toggleClass("active");});$('.with-footer-content').each(function(){let height=$(this).find('.footer-content').outerHeight();$(this).css({'padding-bottom':height+'px',});});$(window).on('resize',function(){$('.with-footer-content').each(function(){let height=$(this).find('.footer-content').outerHeight();$(this).css({'padding-bottom':height+'px',});});});$('.content-limit-toggler').on('click',function(e){e.preventDefault();$(this).parents('.content-limit-with-box').not(this).find('.content-limit').addClass('show');$(this).hide();});$(function(){if($('.error').length>0)
{var $anchor=$('.error');$('html,body').animate({scrollTop:$anchor.offset().top-200},500);}});$('.nav-search-btn').on('click',function(e){e.preventDefault();e.stopPropagation();$('.mw-nav-search-effect').addClass('show');});$('.mw-nav-search-effect').on('click',function(e){e.stopPropagation();});$('body').on('click',function(){$('.mw-nav-search-effect').removeClass('show');});$('[data-toggle="submit"]').on('change',function(){if($(this).is(':checked'))
{$(this).parents('form').find('button[type="submit"]').removeAttr("disabled");}else{$(this).parents('form').find('button[type="submit"]').attr("disabled","disabled");}});$('[data-toggle="submit"]').each(function(){if($(this).is(':checked'))
{$(this).parents('form').find('button[type="submit"]').removeAttr("disabled");}else{$(this).parents('form').find('button[type="submit"]').attr("disabled","disabled");}});$('.btn-animated').each(function(){let initWidth=$(this).outerWidth();$(this).css({width:initWidth+40+'px',});});$('.target-toggle').on('click',function(){let target=$(this).data('target');let targetHide=$(this).attr('data-hide');$(target).show();$(targetHide).removeClass('show');});$('[data-toggle="collapse"]').on('click',function(){let target=$(this).attr('data-hide');$(target).removeClass('show');});$('.pagination').each(function(){let pageItem=0;if($(window).width()<992)
{if($(this).find('li.active').index()>=4){$(this).find('li.page-item:gt(3) > .page-link').css({'padding-left':'.35rem','padding-right':'.35rem'});}}
if($(this).find('li.page-item').length>10){$(this).find('li').first().hide();$(this).find('li').last().hide();let currentPage=$(this).find('li.active').index();}
if($(this).find('li.disabled').last().index()>7)
{$(this).find('li.disabled').last().hide().nextAll().hide();}});$('.guide-sublist > li').on('click',function(){$(this).siblings().removeClass('active');$(this).addClass('active');});$('.faq-active-me').on('click',function(e){e.preventDefault();let getUrl=$(this).attr('href');});$.fn.numericOnly=function(){return this.each(function(){$(this).keydown(function(e){let key=e.which||e.keyCode;if(!e.shiftKey&&!e.altKey&&!e.ctrlKey&&key>=48&&key<=57||key>=96&&key<=105||key==8||key==9||key==13||key==35||key==36||key==37||key==38||key==39||key==40||key==46||key==45)
{$(this).siblings('.error').remove();return true;}else if(key==17&&key==65||key==67||key==86||key==88||key==90)
{return true;}
else{if($(this).siblings('.error').length<1)
{if(!$(this).val()=='')
{$(this).after("<span class='error'></span>");}}
var withText='Number Only';if(key==32)
{withText='<i class=\'fa fa-warning\'></i> No Space Allow';}else{withText='<i class=\'fa fa-warning\'></i> Number Only';}
$(this).siblings('.error').html(withText);}
return false;});$(this).on('paste',function(event){if(event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)){event.preventDefault();}});})};$('.numeric-only').numericOnly();$.fn.forceNumeric=function(){return this.each(function(){$(this).keydown(function(e){let key=e.which||e.keyCode;if(!e.shiftKey&&!e.altKey&&!e.ctrlKey&&key>=48&&key<=57||key>=96&&key<=105||key==190||key==188||key==109||key==110||key==8||key==9||key==13||key==35||key==36||key==37||key==39||key==46||key==45)
return true;return false;});});};$(".float-number").forceNumeric();$('.force-alphabet').keypress(function(e){let self=$(this);let errorFor=$(this).attr('name');var regex=new RegExp("^[a-zA-Z/\\s/g]+$");var str=String.fromCharCode(!e.charCode?e.which:e.charCode);if(regex.test(str)){$('[data-error-name='+errorFor+']').hide();return true;}else
{e.preventDefault();$('[data-error-name='+errorFor+']').show().empty().html('<i class="fa fa-warning"></i> Enter alphabet text only');return false;}});$('.target-scroll-top').on('click',function(){let target='';if(typeof $(this).data('target')!=='undefined'&&$(this).data('target')!==false){target=$($(this).attr('data-target'));}else{target=$($(this).attr('href'));}
$(target).delay(300).queue(function(){$('html,body').animate({scrollTop:target.offset().top-150},100);});});$('.ordering-tab').each(function(){$(this).children('.nav-item').each(function(){let inditIndex=$(this).index();$(this).attr('data-init-order',inditIndex);$(this).css({'order':inditIndex});});$(this).children().on('click',function(){$(this).parents('.ordering-tab').find('.order-position-content').css({'order':$(this).data('init-order'),});});});var hash=location.hash.replace(/^#/,'');if(hash){if($('.hash-item-show').length>0){$('#'+hash).addClass('show');}
$('html,body').animate({scrollTop:$('#'+hash).offset().top-160},10);window.location.hash='';}
$("#country").on("change",function(){var country_id=$(this).val();$('.prevent-first-zero').attr('data-country-code',country_id);$('.prevent-first-zero').each(function(){let length=$(this).val().length;if(country_id==1){for(let i=0;i<length;i++){if(/^0/.test(this.value)){this.value=this.value.replace(/^0/,"")}
for(let i=0;i<length;i++){if(/^0/.test(this.value)){this.value=this.value.replace(/^0/,"")}}}}});});$(document).on('keyup keydown focusout','.prevent-first-zero',function(e){let str=$(this).val();let length=str.length;let attr=$(this).attr('data-country-code');if(typeof attr!=='undefined'&&attr!==false)
{let countryCode=parseFloat(attr);if(countryCode==1){if(/^0/.test(this.value)){this.value=this.value.replace(/^0/,"")}
for(let i=0;i<length;i++){if(/^0/.test(this.value)){this.value=this.value.replace(/^0/,"")}}}}});$(document).on('paste','.prevent-first-zero',function(){let self=$(this);let length=self.val().length;let attr=$(this).attr('data-country-code');if(typeof attr!=='undefined'&&attr!==false)
{let countryCode=parseFloat(attr);if(countryCode==1){$(self).delay(500).queue(function(){$(this).dequeue(function(){for(let i=0;i<length;i++)
{if(/^0/.test(self.value)){self.value=self.value.replace(/^0/,"")}}});});}}});$('.content-toggler').on('click',function(e){e.preventDefault();let self=$(this);$(self).parents('.toggle-item').find('.toggleable-content').slideToggle(200).queue(function(){$(this).parents('.toggle-item').toggleClass('show');$(self).find('.toggler-icon').toggleClass('fa-angle-down fa-angle-up');$(this).dequeue();});});$('.mw-dropdown-menu-with-search').on('click',function(e){e.stopPropagation();});$(document).on('click',".load-more-data",function(){let self=$(this);let next_page_number=self.attr('data-next-page-number');let next_page_url=self.attr('data-next-page-url');$('.load-more-data').parent().remove();$('.load-spinner-btn').removeClass('d-none');$.get(next_page_url,function(data){console.log();$('#loadData').append(data);$('.load-spinner-btn').addClass('d-none');});});$(document).on('click','.popup-chatbox-toggler',function(e){e.preventDefault();$('#popupChatBox').stop().toggleClass('show');popupChatBox();});const popupChatBox=function(selector){if($('#popupChatBox').hasClass('show')){$('.popup-chatbox-toggler').addClass('opened');}else{$('.popup-chatbox-toggler').removeClass('opened');}}
popupChatBox();var popupContactInfoFormStep=1;var nextStepInput='<input type="hidden" name="next_step" value="step_2" class="next_step" />';$(document).on('submit','#submitContactInfoFromPopup',function(e){e.preventDefault();let form=$(this);let jsSelf=this;let url=form.attr('action');form.find('.preloader').addClass('show');$.ajax({type:'post',url:url,data:form.serialize(),success:function(info){if(info=='init_step_fail')
{startStepInit(form);failPopupFormSubmit(form);}
if(info=='init_step_success')
{startStepSecond(form);form.find('.text-error').html('');}
if(info=='success')
{startStepInit(form);form.find('.popup-chatbox-body').append(`
                    <div class="alert px-3 py-4 alert-dismissible position-absolute text-center bg-white cover">
                        <div class="mb-2">
                            <i class="icofont-check text-business-primary fa-2x"></i>
                        </div>
                        <h5 class="text-center text-theme my-3">We have got your message</h5>
                        <p class="text-center text-theme text-muted text-14">Check your email for our response. It usually takes up to 48 hours for us to answer.</p>
                    </div>
                `);form.find('.preloader').removeClass('show');}},error:function(xhr){let requestResponse=JSON.parse(xhr.responseText);$.each(requestResponse.errors,function(key,value){form.find('.'+key).html("<i class='fa fa-warning'></i>"+value);});form.find('.preloader').removeClass('show');}});});function startStepInit(form){form.find('.init-content').removeClass('collapse');form.find('.next-content').addClass('collapse');form.find('.next_step').remove();form.trigger('reset');}
function startStepSecond(form){form.find('.popup-contact-form-fail-alert').remove();form.find('.init-content').addClass('collapse');form.find('.next-content').removeClass('collapse');form.append(nextStepInput);form.trigger('reset');form.find('.preloader').removeClass('show');}
function failPopupFormSubmit(form){form.find('.popup-contact-form-fail-alert').remove();form.find('.popup-chatbox-body').prepend(`
        <div class="popup-contact-form-fail-alert alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Opps!</strong> Something went wrong.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    `);form.find('.preloader').removeClass('show');}
function reloadCaptcha(targetPushCaptcha)
{console.log(targetPushCaptcha);$.ajax({type:'GET',url:base_url+'/reload-captcha',success:function(data){if(typeof targetPushCaptcha!='undefined'&&targetPushCaptcha!=false)
{targetPushCaptcha.html(data);}else{$('.captcha-image').html(data);}}});}
$('.clean-link').delay('100').queue(function(){let self=$(this);self.find('a[href]').each(function(){let getHtml=$(this).html();$(this).after('<span>'+getHtml+'</span>');$(this).remove();});self.dequeue();});