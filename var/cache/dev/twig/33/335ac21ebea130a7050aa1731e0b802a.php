<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroTwigInspector/assets/dist/index.min.js */
class __TwigTemplate_a370917c44b642f6fe3a8b2fcb72f0e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTwigInspector/assets/dist/index.min.js", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTwigInspector/assets/dist/index.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTwigInspector/assets/dist/index.min.js"));

        // line 1
        echo "!function(){var h=document.getElementsByClassName(\"sf-toolbar\")[0];function f(t,e){this.name=t,this.link=e}function i(t,e,i){this.index=t,this.element=e,this.templates=i}i.prototype.toString=function(){for(var t=\"\",e=0;e<this.templates.length;e++){var i=this.templates[e];0<t.length&&(t+=\"<br/>\"),t+=i.name}return t};var t=document.getElementById(\"_twig_inspector__status\");if(t&&(t.addEventListener(\"click\",function(t){var e=!0===t.target.checked;document.cookie=\"twig_inspector_is_active=\"+e+\";path=/\",location.reload()}),!1!==t.checked)){var e=document.getElementById(\"_twig_inspector__icon\");e.addEventListener(\"click\",function(t){n.isEnabled?n.reset():n.enable()});var u=new function(){var r=[],d=[];this.collectData=function(){r=[],d=[];for(var t,e=document.createNodeIterator(document.body,NodeFilter.SHOW_COMMENT);t=e.nextNode();){var i=t.nodeValue.match(/^(\\s+[\\u250F\\u256D\\u2554\\u250E]([^\\s]?)+\\s)([^\\s]+)(\\s\\[)([^\\]]+)(\\]\\s#)(\\w+)/);if(null!==i)for(var n=i[7],s=i[3]+\" [\"+i[5].replace(/\\/_template\\//g,\"\")+\"]\",o=i[5],l=t.nextSibling;l&&(8!==l.nodeType||!l.nodeValue.match(new RegExp(\"^(\\\\s+[\\\\u2517\\\\u2570\\\\u255A\\\\u2516])([^#]+)(#\"+n+\")\$\",\"g\")));){if(1===l.nodeType&&-1===[\"SCRIPT\",\"STYLE\"].indexOf(l.tagName)&&!h.contains(l)&&\"none\"!==window.getComputedStyle(l).display){var a=u.findOrCreate(l),c=new f(s,o);u.addTemplate(a.index,c)}l=l.nextSibling}}},this.find=function(t){var e=r.indexOf(t);return e<0?null:new i(e,t,d[e])},this.create=function(t){var e=r.push(t)-1;return d[e]=[],new i(e,t,[])},this.findOrCreate=function(t){var e=this.find(t);return null===e&&(e=this.create(t)),e},this.addTemplate=function(t,e){d[t].push(e)},this.getTemplates=function(t){return d[t]}},n=new function(o,t){this.isEnabled=!1,this.block=document.createElement(\"DIV\"),this.block.id=\"_twig_inspector__overlay__block\",document.body.appendChild(this.block),this.info=document.createElement(\"DIV\"),this.info.id=\"_twig_inspector__overlay__info\",document.body.appendChild(this.info),this.hide=function(){this.info.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__visible\")},this.show=function(t){var e=t.element,i=e.offsetWidth,n=e.offsetHeight,s=e.getBoundingClientRect().left,o=e.getBoundingClientRect().top+window.scrollY;this.block.style.width=i+\"px\",null!==n&&(this.block.style.height=n+\"px\"),this.block.style.left=s+\"px\",this.block.style.top=o+\"px\",this.block.dataset.templateIndex=t.index,this.info.innerHTML=t.toString(),o+n+50<window.innerHeight+window.scrollY?this.info.style.top=o+n+2+\"px\":this.info.style.top=o-this.info.offsetHeight-2+\"px\",s+this.info.offsetWidth<window.innerWidth?(this.info.style.left=s+\"px\",this.info.style.right=\"auto\"):(this.info.style.left=\"auto\",this.info.style.right=0),this.block.classList.add(\"_twig_inspector__visible\"),this.info.classList.add(\"_twig_inspector__visible\")},this.freeze=function(){this.info.classList.remove(\"_twig_inspector__visible\"),document.body.removeEventListener(\"mousemove\",e)},this.enable=function(){document.body.addEventListener(\"mousemove\",e),this.isEnabled=!0,o.collectData(),t.classList.add(\"sf-toolbar-status-green\"),t.classList.remove(\"sf-toolbar-status-yellow\")},this.reset=function(){this.freeze(),this.info.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__overlay__block_static\"),this.block.innerHTML=\"\",t.classList.remove(\"sf-toolbar-status-green\"),t.classList.add(\"sf-toolbar-status-yellow\"),this.isEnabled=!1};var l,a=this,e=function(t){for(var e=document.elementsFromPoint(t.clientX,t.clientY),i=0;i<e.length;i++){var n=e[i];h.contains(n)&&a.hide();var s=o.find(n);if(null!==s){if(l===n)return;return l=n,a.show(s)}}a.hide()};this.block.addEventListener(\"click\",function(t){if(!a.block.classList.contains(\"_twig_inspector__overlay__block_static\")){var e=o.getTemplates(a.block.dataset.templateIndex);if(1===e.length)a.reset(),window.location.href=e[0].link,t.stopPropagation();else{for(var i=0;i<e.length;i++){var n=e[i],s=document.createElement(\"div\");s.dataset.href=n.link,s.innerText=n.name,s.addEventListener(\"click\",function(t){a.reset(),window.location.href=this.dataset.href,t.stopPropagation()}),a.block.appendChild(s),a.block.classList.add(\"_twig_inspector__overlay__block_static\")}a.block.style.left=t.clientX-20+\"px\",a.block.style.right=\"auto\",a.block.style.top=t.clientY+window.scrollY-20+\"px\"}a.freeze(),t.stopPropagation()}}),document.onkeydown=function(t){27===(t=t||window.event).keyCode&&n.reset()}}(u,e)}}();";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTwigInspector/assets/dist/index.min.js";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("!function(){var h=document.getElementsByClassName(\"sf-toolbar\")[0];function f(t,e){this.name=t,this.link=e}function i(t,e,i){this.index=t,this.element=e,this.templates=i}i.prototype.toString=function(){for(var t=\"\",e=0;e<this.templates.length;e++){var i=this.templates[e];0<t.length&&(t+=\"<br/>\"),t+=i.name}return t};var t=document.getElementById(\"_twig_inspector__status\");if(t&&(t.addEventListener(\"click\",function(t){var e=!0===t.target.checked;document.cookie=\"twig_inspector_is_active=\"+e+\";path=/\",location.reload()}),!1!==t.checked)){var e=document.getElementById(\"_twig_inspector__icon\");e.addEventListener(\"click\",function(t){n.isEnabled?n.reset():n.enable()});var u=new function(){var r=[],d=[];this.collectData=function(){r=[],d=[];for(var t,e=document.createNodeIterator(document.body,NodeFilter.SHOW_COMMENT);t=e.nextNode();){var i=t.nodeValue.match(/^(\\s+[\\u250F\\u256D\\u2554\\u250E]([^\\s]?)+\\s)([^\\s]+)(\\s\\[)([^\\]]+)(\\]\\s#)(\\w+)/);if(null!==i)for(var n=i[7],s=i[3]+\" [\"+i[5].replace(/\\/_template\\//g,\"\")+\"]\",o=i[5],l=t.nextSibling;l&&(8!==l.nodeType||!l.nodeValue.match(new RegExp(\"^(\\\\s+[\\\\u2517\\\\u2570\\\\u255A\\\\u2516])([^#]+)(#\"+n+\")\$\",\"g\")));){if(1===l.nodeType&&-1===[\"SCRIPT\",\"STYLE\"].indexOf(l.tagName)&&!h.contains(l)&&\"none\"!==window.getComputedStyle(l).display){var a=u.findOrCreate(l),c=new f(s,o);u.addTemplate(a.index,c)}l=l.nextSibling}}},this.find=function(t){var e=r.indexOf(t);return e<0?null:new i(e,t,d[e])},this.create=function(t){var e=r.push(t)-1;return d[e]=[],new i(e,t,[])},this.findOrCreate=function(t){var e=this.find(t);return null===e&&(e=this.create(t)),e},this.addTemplate=function(t,e){d[t].push(e)},this.getTemplates=function(t){return d[t]}},n=new function(o,t){this.isEnabled=!1,this.block=document.createElement(\"DIV\"),this.block.id=\"_twig_inspector__overlay__block\",document.body.appendChild(this.block),this.info=document.createElement(\"DIV\"),this.info.id=\"_twig_inspector__overlay__info\",document.body.appendChild(this.info),this.hide=function(){this.info.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__visible\")},this.show=function(t){var e=t.element,i=e.offsetWidth,n=e.offsetHeight,s=e.getBoundingClientRect().left,o=e.getBoundingClientRect().top+window.scrollY;this.block.style.width=i+\"px\",null!==n&&(this.block.style.height=n+\"px\"),this.block.style.left=s+\"px\",this.block.style.top=o+\"px\",this.block.dataset.templateIndex=t.index,this.info.innerHTML=t.toString(),o+n+50<window.innerHeight+window.scrollY?this.info.style.top=o+n+2+\"px\":this.info.style.top=o-this.info.offsetHeight-2+\"px\",s+this.info.offsetWidth<window.innerWidth?(this.info.style.left=s+\"px\",this.info.style.right=\"auto\"):(this.info.style.left=\"auto\",this.info.style.right=0),this.block.classList.add(\"_twig_inspector__visible\"),this.info.classList.add(\"_twig_inspector__visible\")},this.freeze=function(){this.info.classList.remove(\"_twig_inspector__visible\"),document.body.removeEventListener(\"mousemove\",e)},this.enable=function(){document.body.addEventListener(\"mousemove\",e),this.isEnabled=!0,o.collectData(),t.classList.add(\"sf-toolbar-status-green\"),t.classList.remove(\"sf-toolbar-status-yellow\")},this.reset=function(){this.freeze(),this.info.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__visible\"),this.block.classList.remove(\"_twig_inspector__overlay__block_static\"),this.block.innerHTML=\"\",t.classList.remove(\"sf-toolbar-status-green\"),t.classList.add(\"sf-toolbar-status-yellow\"),this.isEnabled=!1};var l,a=this,e=function(t){for(var e=document.elementsFromPoint(t.clientX,t.clientY),i=0;i<e.length;i++){var n=e[i];h.contains(n)&&a.hide();var s=o.find(n);if(null!==s){if(l===n)return;return l=n,a.show(s)}}a.hide()};this.block.addEventListener(\"click\",function(t){if(!a.block.classList.contains(\"_twig_inspector__overlay__block_static\")){var e=o.getTemplates(a.block.dataset.templateIndex);if(1===e.length)a.reset(),window.location.href=e[0].link,t.stopPropagation();else{for(var i=0;i<e.length;i++){var n=e[i],s=document.createElement(\"div\");s.dataset.href=n.link,s.innerText=n.name,s.addEventListener(\"click\",function(t){a.reset(),window.location.href=this.dataset.href,t.stopPropagation()}),a.block.appendChild(s),a.block.classList.add(\"_twig_inspector__overlay__block_static\")}a.block.style.left=t.clientX-20+\"px\",a.block.style.right=\"auto\",a.block.style.top=t.clientY+window.scrollY-20+\"px\"}a.freeze(),t.stopPropagation()}}),document.onkeydown=function(t){27===(t=t||window.event).keyCode&&n.reset()}}(u,e)}}();", "@OroTwigInspector/assets/dist/index.min.js", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/twig-inspector/Bundle/Resources/views/assets/dist/index.min.js");
    }
}
