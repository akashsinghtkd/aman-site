import{G as r,a}from"./Row.2d17f2cd.js";import{n as i}from"./vueComponentNormalizer.67c9b86e.js";var s=function(){var n=this,e=n.$createElement,t=n._self._c||e;return t("grid-row",{staticClass:"aioseo-settings-row",class:{"no-horizontal-margin":n.noHorizontalMargin,"no-vertical-margin":n.noVerticalMargin,"no-border":n.noBorder}},[n._t("header"),t("grid-column",{attrs:{md:n.leftSize}},[t("div",{staticClass:"settings-name"},[t("div",{staticClass:"name",class:[{align:n.align},{"align-small":n.alignSmall}]},[n._t("name",function(){return[n._v(" "+n._s(n.name)+" "),n.required?t("span",{staticClass:"required-field"},[n._v(" * ")]):n._e()]})],2),n.$slots.description?t("div",{staticClass:"aioseo-description"},[n._t("description")],2):n._e()])]),t("grid-column",{attrs:{md:n.rightSize}},[t("div",{staticClass:"settings-content"},[n._t("content")],2)])],2)},l=[];const c={components:{GridColumn:r,GridRow:a},props:{align:Boolean,alignSmall:Boolean,name:String,required:Boolean,noHorizontalMargin:{type:Boolean,default:!1},noVerticalMargin:{type:Boolean,default:!1},noBorder:{type:Boolean,default:!1},leftSize:{type:String,default(){return"3"}},rightSize:{type:String,default(){return"9"}}}},o={};var u=i(c,s,l,!1,_,null,null,null);function _(n){for(let e in o)this[e]=o[e]}const g=function(){return u.exports}();export{g as C};
