function eventListeners(){document.querySelector(".menu-movil").addEventListener("click",navegacionResponsive)}function navegacionResponsive(){document.querySelector(".navegacion");console.log("esto va")}
/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/document.addEventListener("DOMContentLoaded",(function(){eventListeners()})),function(e,n,A){function o(e,n){return typeof e===n}function t(e){var n=f.className,A=l._config.classPrefix||"";if(u&&(n=n.baseVal),l._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}l._config.enableClasses&&(n+=" "+A+e.join(" "+A),u?f.className.baseVal=n:f.className=n)}function a(e,n){if("object"==typeof e)for(var A in e)c(e,A)&&a(A,e[A]);else{var o=(e=e.toLowerCase()).split("."),i=l[o[0]];if(2==o.length&&(i=i[o[1]]),void 0!==i)return l;n="function"==typeof n?n():n,1==o.length?l[o[0]]=n:(!l[o[0]]||l[o[0]]instanceof Boolean||(l[o[0]]=new Boolean(l[o[0]])),l[o[0]][o[1]]=n),t([(n&&0!=n?"":"no-")+o.join("-")]),l._trigger(e,n)}return l}var i=[],s=[],r={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout((function(){n(A[e])}),0)},addTest:function(e,n,A){s.push({name:e,fn:n,options:A})},addAsyncTest:function(e){s.push({name:null,fn:e})}},l=function(){};l.prototype=r,l=new l;var c,f=n.documentElement,u="svg"===f.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;c=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),r._l={},r.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),l.hasOwnProperty(e)&&setTimeout((function(){l._trigger(e,l[e])}),0)},r._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout((function(){var e;for(e=0;e<A.length;e++)(0,A[e])(n)}),0),delete this._l[e]}},l._q.push((function(){r.addTest=a})),l.addAsyncTest((function(){function e(e,n,A){function o(n){var o=!(!n||"load"!==n.type)&&1==t.width;a(e,"webp"===e&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,(function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)}))})),function(){var e,n,A,t,a,r;for(var c in s)if(s.hasOwnProperty(c)){if(e=[],(n=s[c]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)1===(r=e[a].split(".")).length?l[r[0]]=t:(!l[r[0]]||l[r[0]]instanceof Boolean||(l[r[0]]=new Boolean(l[r[0]])),l[r[0]][r[1]]=t),i.push((t?"":"no-")+r.join("-"))}}(),t(i),delete r.addTest,delete r.addAsyncTest;for(var d=0;d<l._q.length;d++)l._q[d]();e.Modernizr=l}(window,document);
//# sourceMappingURL=bundle.js.map
