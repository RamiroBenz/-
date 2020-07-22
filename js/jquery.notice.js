/**
*	$.noticeAdd() and $.noticeRemove()
*	These functions create and remove growl-like notices
*		
*   Copyright (c) 2009 Tim Benniks
*
*	Permission is hereby granted, free of charge, to any person obtaining a copy
*	of this software and associated documentation files (the "Software"), to deal
*	in the Software without restriction, including without limitation the rights
*	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*	copies of the Software, and to permit persons to whom the Software is
*	furnished to do so, subject to the following conditions:
*
*	The above copyright notice and this permission notice shall be included in
*	all copies or substantial portions of the Software.
*
*	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
*	THE SOFTWARE.
*	
*	@author 	Tim Benniks <tim@timbenniks.com>
* 	@copyright  2009 timbenniks.com
*	@version    $Id: jquery.notice.js 1 2009-01-24 12:24:18Z timbenniks $
**/
(function($)
{
	$.extend({			
		noticeAdd: function(options)
		{	
			var defaults = {
				inEffect: 			{opacity: 'show'},	// in effect
				inEffectDuration: 	600,				// in effect duration in miliseconds
				text: 				'',					// content of the item
				stay: 				false,				// should the notice item stay or not?
				timeout: 			2000,				// should the notice item stay or not?
				type: 				'notice' 			// could also be error, success
			};
			
			var options, noticeWrapAll, noticeItemOuter, noticeItemInner;
								
			options 		= $.extend({}, defaults, options);
			if ($('.notice-item')) {
				$('.notice-item').css('-moz-border-radius','0px 0px 0px 0px');
				$('.notice-item').css('border-radius','0px 0px 0px 0px');
			}
			noticeWrapAll	= (!$('.notice-wrap').length)?$('<div class="notice-wrap"></div>').appendTo('body'):$('.notice-wrap');
			noticeItemOuter	= $('<div class="notice-item-wrapper"></div>');
			noticeItemInner	= $('<div class="notice-item '+options.type+'"></div>').hide().appendTo(noticeWrapAll).html(options.text).animate(options.inEffect, options.inEffectDuration).wrap(noticeItemOuter);
			
			if (navigator.userAgent.match(/MSIE 6/i))
		    	noticeWrapAll.css({top: document.documentElement.scrollTop});
			
			if (!options.stay)
				setTimeout(function() {$.noticeRemove(noticeItemInner);}, options.timeout);
			
			return noticeItemInner;
		},
		
		noticeRemove: function(obj) {
			obj.animate({opacity: '0',marginTop: '-10px'}, 500, function() {
				obj.parent().animate({height: '0px'}, 250, function() {
					obj.parent().remove();
				});
			});
		}
	});
})($);