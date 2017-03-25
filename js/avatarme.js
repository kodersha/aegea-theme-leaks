/*
 *  jQuery avatarMe 1.0
 *  http://github.com/lbphuc/jquery-avatarMe
 *
 *  Copyright (c) 2014 Le Bao Phuc
 *  http://lebaophuc.com/
 *
 *  Licensed under the MIT
 *  http://en.wikipedia.org/wiki/MIT_License
 */
(function(e,t,n,r){"use strict";function o(t,n){this.element=t;this.settings=e.extend({},s,n);this._defaults=s;this._name=i;this.init()}var i="avatarMe",s={className:"avatar-me",maxChar:3};e.extend(o.prototype,{init:function(){this.createAvatar(this.element,this.settings)},createAvatar:function(t,n){var r=e(t),i=e('<span class="'+n.className+'"></span>'),s=e('<div class="'+n.className+"-wrapper"+'"></div>'),o=r.html().replace(/[&\/\\#,+\-()$~%.'":*?<>{}]/g,"").split(" "),u="";s.insertAfter(r);i.appendTo(s);r.appendTo(s);if(o!==""){e.each(o,function(e,t){if(e<n.maxChar){u+=t[0]}})}else{u+="..."}i.html(u)}});e.fn[i]=function(t){this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new o(this,t))}});return this}})(jQuery,window,document);