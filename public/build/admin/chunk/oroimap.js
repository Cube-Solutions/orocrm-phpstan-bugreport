(globalThis.webpackChunk=globalThis.webpackChunk||[]).push([[853],{"../node_modules/@oroinc/oro-webpack-config-builder/loader/tpl-loader.js!./bundles/orosecurity/templates/organization-modal-content.html":(module,__unused_webpack_exports,__webpack_require__)=>{var _=__webpack_require__("./bundles/oroui/js/extend/underscore.js");module.exports=function(obj){var __t,__p="",__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,"")};with(obj||{})__p+="",paragraphs&&(__p+='\n<div class="organization-modal-content">\n    ',_.each(paragraphs,(function(e){__p+='\n        <p class="organization-modal-content__text">'+(null==(__t=e)?"":_.escape(__t))+"</p>\n    "})),__p+="\n</div>\n"),__p+="\n";return __p}},"./bundles/orocampaign/js/app/components/email-campaign-form.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/extend/underscore.js"),n=i("./bundles/oroui/js/extend/jquery.js"),o=i("./bundles/oroui/js/mediator.js");return function(e){const i=e._sourceElement.find(e.scheduleEl),s=e._sourceElement.find(e.scheduledForEl),a=e._sourceElement.find(e.transportEl),r=s.find("label"),l=e.hideOn||[],c=e.showOn||[];a.on("change",(function(){o.execute("showLoading");const e=a.closest("form"),t=e.serializeArray(),i=e.attr("action");t.push({name:"formUpdateMarker",value:1});const s={formEl:e,data:t,reloadManually:!0};o.trigger("integrationFormReload:before",s),s.reloadManually&&o.execute("submitPage",{url:i,type:e.attr("method"),data:n.param(t)})})),i.on("change",(function(){t.contains(l,n(this).val())&&(s.addClass("hide"),s.find("input").each((function(){n(this).rules("remove","NotBlank")})),r.hasClass("required")&&r.removeClass("required").find("em").html("&nbsp;")),t.contains(c,n(this).val())&&(s.removeClass("hide"),s.find("input").each((function(){n(this).removeClass("hide").rules("add","NotBlank")})),r.hasClass("required")||r.addClass("required").find("em").html("*"))}))}}.call(t,i,t,e))||(e.exports=n)},"./bundles/oromarketinglist/js/app/components/columns-component.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/extend/jquery.js"),n=i("./bundles/oroui/js/extend/underscore.js"),o=i("./bundles/oroui/js/mediator.js"),s=i("./bundles/fosjsrouting/js/router.js"),a={};let r,l;const c=function(e){!function(e){const i=t("<ul/>");n.each(e,(function(e){i.append(t("<li/>").html(e.label))})),l.html(i).closest(".alert").toggleClass("has-fields",e.length>0)}(e),function(e){n.each(e,(function(e){a[e.name]=e.contact_information_type}))}(e)},u=function(e,i,n){let o;if(n){"phone"===n?o="fa-phone":"email"===n&&(o="fa-envelope");const s=i.find('[data-cid="'+e.cid+'"] .name-cell');!s.hasClass("has-icon")&&o&&s.addClass("has-icon").prepend(t("<span></span>",{"aria-hidden":"true",class:"icon "+o}))}};return function(e){const i=t(e.formSelector);r=i.find(e.entityChoiceSelector),l=i.find(e.fieldsChoiceSelector),n.isEmpty(e.contactInformationFields)||c(e.contactInformationFields),r.on("change",(function(e){var i;(i=e.val)&&t.ajax({url:s.generate("oro_api_entity_marketinglist_contact_information_fields"),data:{entity:i},success:c})})),o.on("items-manager:table:add:item-container items-manager:table:change:item-container",(function(e,i,n){!function(e,i){const n=e.get("name");a.hasOwnProperty(n)?u(e,i,a[n]):n.indexOf(":")>-1&&t.ajax({url:s.generate("oro_api_contact_marketinglist_information_field_type"),data:{entity:r.select2("val"),field:n},success:function(t){a[n]=t,u(e,i,a[n])}})}(i,n)}))}}.call(t,i,t,e))||(e.exports=n)},"./bundles/oromarketinglist/js/app/components/grid-linker.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/extend/underscore.js"),n=i("./bundles/oroui/js/mediator.js");return function(e){t.each(e,(function(e){n.on("datagrid:afterRemoveRow:"+e.main,(function(){n.trigger("datagrid:doRefresh:"+e.secondary)}))}))}}.call(t,i,t,e))||(e.exports=n)},"./bundles/oromicrosoftintegration/js/app/components/enable-checkbox-component.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/extend/jquery.js"),n=i("./bundles/oroui/js/app/components/base/component.js").extend({constructor:function e(t){e.__super__.constructor.call(this,t)},initialize:function(e){t('form[name="microsoft_settings"] :input[id*="microsoft_settings_oro_microsoft_integration"]').on("change.microsoft_enable_oauth",(function(){let i=!1;const n=e._sourceElement.closest('form[name="microsoft_settings"]');(0===t.trim(n.find('input[id*="client_id"]').val()).length||0===t.trim(n.find('input[id*="client_secret"]').val()).length||0===t.trim(n.find('input[id*="tenant"]').val()).length)&&(i=!0),e._sourceElement.find("input[type=checkbox]:not(:checked)").prop("disabled",i)}))},dispose:function(){return t('form[name="microsoft_settings"] :input[id*="microsoft_settings_oro_microsoft_integration"]').off("change.microsoft_enable_oauth"),n.__super__.dispose.call(this)}});return n}.call(t,i,t,e))||(e.exports=n)},"./bundles/oronavigation/js/tools/routing.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/extend/underscore.js"),n=i("./bundles/fosjsrouting/js/router.js"),o=i("./bundles/oroui/js/error.js");return{getRouteRegExp:function(e,i){let s,a="";i=i||"gi";try{s=n.getRoute(e)}catch(e){return o.showErrorInUI(e),null}return t.each(s.tokens,(function(e){if("variable"===e[0]){if("_format"===e[3])return;a="("+e[2].replace("++","+").replace(/\//g,"\\$&")+")"+a}a=e[1].replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&")+a})),new RegExp(a,i)}}}.call(t,i,t,e))||(e.exports=n)},"./bundles/orosecurity/js/app/components/security-access-levels-component.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/app/components/base/component.js"),n=i("./bundles/fosjsrouting/js/router.js"),o=i("./bundles/oroui/js/extend/underscore.js"),s=i("./bundles/oroui/js/extend/jquery.js"),a=i("./bundles/oroui/js/mediator.js");i("./bundles/oroui/js/extend/select2.js");const r=t.extend({element:null,defaultOptions:{accessLevelFieldSelector:".access_level_value",accessLevelLinkSelector:".access_level_value a",selectDivSelector:".access_level_value_choice",linkDivSelector:"access_level_value_link",accessLevelRoute:"oro_security_access_levels",objectIdentityAttribute:"data-identity",selectorNameAttribute:"data-selector-name",selectorIdAttribute:"data-selector-id",valueAttribute:"data-value"},dataCache:null,options:{},constructor:function e(t){e.__super__.constructor.call(this,t)},initialize:function(e){const t=this;this.dataCache={},this.options=o.extend({},this.defaultOptions,e),this.element=e._sourceElement,this.element.find(this.options.accessLevelFieldSelector).each((function(){const e=s(this),i=e.find("input"),o=e.siblings("input").val(),r=e.attr(t.options.objectIdentityAttribute),l=n.generate(t.options.accessLevelRoute,{oid:r.replace(/\\/g,"_"),permission:o});i.inputWidget("create","select2",{initializeOptions:{initSelection:function(e,t){t({id:i.val(),text:i.data("valueText")})},query:t._select2Query.bind(t,l),minimumResultsForSearch:-1}}).on("change."+t.cid,(function(e){a.trigger("securityAccessLevelsComponent:link:click",{accessLevel:e.val,identityId:r,permissionName:o})}))}))},_select2Query:function(e,t){const i=this;e in this.dataCache?t.callback({results:this.dataCache[e]}):s.ajax({url:e,success:function(n){const s=[];o.each(o.omit(n,"template_name"),(function(e,t){s.push({id:t,text:e})})),i.dataCache[e]=s,t.callback({results:s})}})},dispose:function(){this.disposed||(this.element&&this.element.find(this.options.accessLevelFieldSelector).each((function(){s(this).find("input").off("change."+this.cid).inputWidget("dispose")})),r.__super__.dispose.call(this))}});return r}.call(t,i,t,e))||(e.exports=n)},"./bundles/orosecurity/js/app/components/switch-organization-component.js":(e,t,i)=>{var n;n=function(e,t,n){"use strict";const o=i("./bundles/oroui/js/app/services/module-config.js").Z(n.id),s=i("./bundles/oroui/js/extend/jquery.js"),a=i("./bundles/oroui/js/extend/underscore.js"),r=i("./bundles/orotranslation/js/translator.js"),l=i("./bundles/oroui/js/mediator.js"),c=i("./bundles/fosjsrouting/js/router.js"),u=i("./bundles/oronavigation/js/tools/routing.js"),h=i("../node_modules/@oroinc/oro-webpack-config-builder/loader/tpl-loader.js!./bundles/orosecurity/templates/organization-modal-content.html"),d=i("./bundles/oroui/js/app/components/base/component.js"),g=i("./bundles/oroui/js/modal.js"),p=i("./bundles/oroui/js/app/services/inter-window-mediator.js"),m=i("./bundles/oronavigation/js/app/services/page-state-checker.js"),f=i("./bundles/oroui/js/tools/highlighter/highlighter-favicon.js"),_=i("./bundles/oroui/js/tools/highlighter/highlighter-title.js"),v={switchOrganizationRoute:"oro_security_switch_organization",modalTitle:r("orosecurity.switch_organization_modal.title"),modalRemoteChangesText:r("orosecurity.switch_organization_modal.unsaved_data_text"),modalLocalChangesText:r("oro.ui.leave_page_with_unsaved_data_confirm"),modalNoChangesText:r("orosecurity.switch_organization_modal.saved_data_text"),modalQuestion:r("orosecurity.switch_organization_modal.question"),pollingIntervalTimeout:250,removeWindowDelay:100},b=d.extend({state:null,pollingIntervalId:null,highlighter:null,modal:null,constructor:function e(t){e.__super__.constructor.call(this,t)},delegateListeners:function(){b.__super__.delegateListeners.call(this),this.firstListenTo(l,"openLink:before",this.beforeOpenLink),this.listenTo(p,"organization:before-change",this.onRemoteBeforeOrganizationChange),this.listenTo(p,"organization:do-change",this.onRemoteDoOrganizationChange)},initialize:function(e){const t=a.keys(v);a.extend(this,v,a.pick(o,t),a.pick(e,t),a.pick(e,"currentOrganizationId")),b.__super__.initialize.call(this,e),this.matchingRouteRxp=u.getRouteRegExp(this.switchOrganizationRoute,"i"),this.setState(0)},onRemoteBeforeOrganizationChange:function(){0!==this.state&&this.cancelOrganizationChange(),this.mightEventualDataLoss()?(p.trigger("organization:prevent-change"),this.highlight()):this.unhighlight()},onRemoteDoOrganizationChange:function(e){m.ignoreChanges();const t=function(){const e={url:c.generate("oro_default")};l.execute("showLoading"),l.execute("redirectTo",e,{redirect:!0,fullRedirect:!0})};document.hidden?(s(document).off("visibilitychange."+this.cid),this.currentOrganizationId!==e?s(document).one("visibilitychange."+this.cid,t):m.notIgnoreChanges()):t()},setState:function(e){if(e===this.state)return;let t;switch(this.modal&&(this.modal.close(),this.modal=null),e){case 1:t={className:"modal oro-modal-danger",okButtonClass:"btn btn-danger",content:h({paragraphs:[this.modalLocalChangesText]}),attributes:{role:"alertdialog"}};break;case 2:t={className:"modal oro-modal-danger",okButtonClass:"btn btn-danger",content:h({paragraphs:[this.modalRemoteChangesText,this.modalQuestion]}),attributes:{role:"alertdialog"}};break;case 3:t={className:"modal modal-primary",content:h({paragraphs:[this.modalNoChangesText,this.modalQuestion]})}}t&&(this.modal=new g(a.extend({okText:r("Yes"),title:this.modalTitle},t)),this.modal.on("ok",this.switchOrganization.bind(this)),this.modal.on("cancel",this.cancelOrganizationChange.bind(this)),this.modal.open()),this.state=e},beforeOpenLink:function(e){const t=e.target.href;let i;if(void 0===this.matchingRouteRxp||null===(i=t.match(this.matchingRouteRxp)))return;const n=c.getRoute(this.switchOrganizationRoute).tokens.filter((function(e){return"variable"===e[0]})).reverse(),o=a.findIndex(n,(function(e){return"id"===e[3]}));e.prevented=!0,this.organizationUrl=t,this.organizationId=Number(i[o+1]),this.setState(0),this.beforeOrganizationChange(),this.pollingIntervalId=setInterval(this.beforeOrganizationChange.bind(this),this.pollingIntervalTimeout)},beforeOrganizationChange:function(){this.mightEventualDataLoss()?this.highlight():this.unhighlight();const e=a.delay(function(){p.off("organization:prevent-change",t),this.onNoRemoteChanges()}.bind(this),this.removeWindowDelay),t=this.onRemoteChanges.bind(this,e);p.once("organization:prevent-change",t),p.trigger("organization:before-change")},onRemoteChanges:function(e){clearInterval(e),4!==this.state&&this.setState(2)},onNoRemoteChanges:function(){4!==this.state&&(this.mightEventualDataLoss()?this.setState(1):0===this.state?this.switchOrganization():this.setState(3))},cancelOrganizationChange:function(){this.setState(4),this.stopBeforeChangePolling()},stopBeforeChangePolling:function(){this.pollingIntervalId&&(clearInterval(this.pollingIntervalId),this.pollingIntervalId=null)},switchOrganization:function(){this.setState(5),this.stopBeforeChangePolling(),m.ignoreChanges(),l.execute("showLoading");const e=l.execute("retrieveOption","headerId"),t=this.organizationId;s.get({url:this.organizationUrl,success:function(e){const i={url:e.location},n=a.omit(e,"location");p.trigger("organization:do-change",t),l.execute("redirectTo",i,n)},headers:a.object([e],[!0])}).fail((function(){m.notIgnoreChanges(),l.execute("hideLoading")}))},initHighlighter:function(){/(Chrome|Firefox|Opera)\/\d+\.\d+/.test(navigator.userAgent)&&!/(Edge|Trident)\/\d+\.\d+/.test(navigator.userAgent)?this.highlighter=new f:this.highlighter=new _},mightEventualDataLoss:function(){return m.isStateChanged()&&!m.hasChangesIgnored()},highlight:function(){this.disposed||(this.highlighter||this.initHighlighter(),this.highlighterTimeoutId&&(clearTimeout(this.highlighterTimeoutId),delete this.highlighterTimeoutId),this.highlighter.highlight(),this.highlighterTimeoutId=a.delay(this.unhighlight.bind(this),this.pollingIntervalTimeout))},unhighlight:function(){!this.disposed&&this.highlighter&&(this.highlighterTimeoutId&&(clearTimeout(this.highlighterTimeoutId),delete this.highlighterTimeoutId),this.highlighter.unhighlight())},dispose:function(){if(this.disposed)return!1;s(document).off("."+this.cid),b.__super__.dispose.call(this)}});return b}.call(t,i,t,e),void 0===n||(e.exports=n)},"./bundles/oroui/js/app/services/inter-window-mediator.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";return new(i("./bundles/oroui/js/app/services/inter-window-mediator/inter-window-mediator.js"))}.call(t,i,t,e))||(e.exports=n)},"./bundles/oroui/js/app/services/inter-window-mediator/inter-window-mediator.js":(e,t,i)=>{var n;void 0===(n=function(e){"use strict";const t=i("./bundles/oroui/js/base-class.js").extend({constructor:function e(){this.onStorageChange=this.onStorageChange.bind(this),e.__super__.constructor.call(this)},initialize:function(e){t.__super__.initialize.call(this,e),this.id=(Math.random().toString()+Date.now()).substr(2),window.addEventListener("storage",this.onStorageChange)},dispose:function(){this.disposed||(window.removeEventListener("storage",this.onStorageChange),t.__super__.dispose.call(this))},trigger:function(e,i){const n={targetId:this.id,args:i},o=t.NS+e;localStorage.setItem(o,JSON.stringify(n)),localStorage.removeItem(o)},onStorageChange:function(e){if(e.key.substring(0,t.NS.length)===t.NS&&null!==e.newValue&&""!==e.newValue){const i=e.key.substring(t.NS.length),n=JSON.parse(e.newValue);n.targetId!==this.id&&t.__super__.trigger.apply(this,[i].concat(n.args))}}},{NS:"inter-window-mediator:"});return t}.call(t,i,t,e))||(e.exports=n)},"./bundles/oroui/js/tools/highlighter/highlighter-favicon.js":(e,t,i)=>{var n;n=function(e,t,n){"use strict";const o=i("./bundles/oroui/js/app/services/module-config.js").Z(n.id),s=i("./bundles/oroui/js/extend/underscore.js"),a=i("./bundles/oroui/js/base-class.js"),r={faviconSelector:'link[rel*="icon"]',faviconSize:16,circleRadius:4,circleColor:"#FF0000"},l=a.extend({favicon:null,tempFavicon:null,constructor:function e(t){e.__super__.constructor.call(this,t)},initialize:function(e){const t=s.keys(r);s.extend(this,r,s.pick(o,t),s.pick(e,t)),this.favicon=document.querySelector(this.faviconSelector),l.__super__.initialize.call(this,e)},dispose:function(){this.disposed||(this.unhighlight(),delete this.tempFavicon,delete this.favicon,l.__super__.dispose.call(this))},highlight:function(){if(!this.favicon||!document.head.contains(this.favicon))return;const e=new Image;e.src=this.favicon.href,e.onload=function(){if(this.disposed||!this.favicon.parentNode)return;const t=this.faviconSize,i=this.circleRadius,n=this.circleColor,o=document.createElement("canvas");o.width=t,o.height=t;const s=o.getContext("2d");s.drawImage(e,0,0,t,t),s.beginPath(),s.arc(o.width-i,o.height-i,i,0,2*Math.PI),s.fillStyle=n,s.fill(),this.tempFavicon=document.createElement("link"),this.tempFavicon.type="image/x-icon",this.tempFavicon.rel="shortcut icon",this.tempFavicon.href=o.toDataURL("image/png").replace("image/png","image/x-icon"),this.favicon.parentNode.replaceChild(this.tempFavicon,this.favicon)}.bind(this)},unhighlight:function(){this.tempFavicon&&document.head.contains(this.tempFavicon)&&this.tempFavicon.parentNode.replaceChild(this.favicon,this.tempFavicon)}});return l}.call(t,i,t,e),void 0===n||(e.exports=n)},"./bundles/oroui/js/tools/highlighter/highlighter-title.js":(e,t,i)=>{var n;n=function(e,t,n){"use strict";const o=i("./bundles/oroui/js/app/services/module-config.js").Z(n.id),s=i("./bundles/oroui/js/extend/underscore.js"),a=i("./bundles/oroui/js/base-class.js"),r={prefix:"● "},l=a.extend({constructor:function e(t){e.__super__.constructor.call(this,t)},initialize:function(e){const t=s.keys(r);s.extend(this,r,s.pick(o,t),s.pick(e,t)),l.__super__.initialize.call(this,e)},dispose:function(){this.disposed||(this.unhighlight(),l.__super__.dispose.call(this))},highlight:function(){document.title.substr(0,this.prefix.length)!==this.prefix&&(document.title=this.prefix+document.title)},unhighlight:function(){document.title.substr(0,this.prefix.length)===this.prefix&&(document.title=document.title.substr(this.prefix.length))}});return l}.call(t,i,t,e),void 0===n||(e.exports=n)}}]);