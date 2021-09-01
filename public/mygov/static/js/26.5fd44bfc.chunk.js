(this["webpackJsonputah-brands-inspection"]=this["webpackJsonputah-brands-inspection"]||[]).push([[26],{1628:function(e,a,t){"use strict";t.r(a);var n=t(405),l=t(406),r=t(408),c=t(407),s=t(0),m=t.n(s),o=t(427),i=t(122),d=t(42),u=t(689),p=t(1572),E=function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(){return Object(n.a)(this,t),a.apply(this,arguments)}return Object(l.a)(t,[{key:"render",value:function(){var e=this.props.data,a=new p.DataView;return a.source(e).transform({type:"percent",field:"value",dimension:"type",as:"percent"}),(new p.DataView).source(e).transform({type:"percent",field:"value",dimension:"name",as:"percent"}),m.a.createElement(u.Chart,{height:170,data:a.rows,autoFit:!0,scale:{percent:{formatter:function(e){return e=(100*e).toFixed(2)+"%"}}}},m.a.createElement(u.Coordinate,{type:"theta",radius:.5}),m.a.createElement(u.Axis,{visible:!1}),m.a.createElement(u.Legend,{visible:!1}),m.a.createElement(u.Tooltip,{showTitle:!1}),m.a.createElement(u.Interval,{position:"percent",adjust:"stack",color:["name",["#296F3E","#B7C04F","#111111","#62C2CE"]],"element-highlight":!0,style:{lineWidth:1,stroke:"#fff"}}))}}]),t}(m.a.Component);Object(u.registerShape)("interval","border-radius",{draw:function(e,a){var t=e.points,n=[];n.push(["M",t[0].x,t[0].y]),n.push(["L",t[1].x,t[1].y]),n.push(["L",t[2].x,t[2].y]),n.push(["L",t[3].x,t[3].y]),n.push("Z"),n=this.parsePath(n);var l=a.addGroup();return l.addShape("rect",{attrs:{x:n[1][1],y:n[1][2],width:5,height:n[0][2]-n[1][2],fill:"#296F3E",radius:0}}),l}});var h=function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(){return Object(n.a)(this,t),a.apply(this,arguments)}return Object(l.a)(t,[{key:"render",value:function(){return m.a.createElement(u.Chart,{height:275,padding:"auto",data:this.props.data,autoFit:!0},m.a.createElement(u.Interval,{position:"month*animalCount",color:"#5B8FF9",shape:["month*animalCount",function(e,a){if(0!==a)return"border-radius"}]}))}}]),t}(m.a.Component),v=function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(){return Object(n.a)(this,t),a.apply(this,arguments)}return Object(l.a)(t,[{key:"render",value:function(){return m.a.createElement(u.Chart,{scale:{value:{min:0}},padding:[10,20,50,40],autoFit:!0,height:302,data:this.props.data},m.a.createElement(u.Line,{shape:"smooth",position:"month*animalCount",color:this.props.color}))}}]),t}(m.a.Component),b=function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(e){var l;return Object(n.a)(this,t),(l=a.call(this,e)).state={beefPromotionfeesreport:[{month:"January",animalCount:38},{month:"February",animalCount:52},{month:"March",animalCount:61},{month:"April",animalCount:45},{month:"May",animalCount:48},{month:"June",animalCount:38},{month:"July",animalCount:38},{month:"August",animalCount:38},{month:"September",animalCount:38},{month:"Octomber",animalCount:46},{month:"November",animalCount:90},{month:"December",animalCount:100}],totalBrandInspection:[{month:"January",animalCount:38},{month:"February",animalCount:52},{month:"March",animalCount:61},{month:"April",animalCount:45},{month:"May",animalCount:48},{month:"June",animalCount:38},{month:"July",animalCount:38},{month:"August",animalCount:38},{month:"September",animalCount:38},{month:"Octomber",animalCount:46},{month:"November",animalCount:90},{month:"December",animalCount:100}],brandinspectionsGraphChart:[{value:235,type:"Today count",name:"Today count"},{value:4356,type:"This week count",name:"This week count"},{value:5667,type:"Last week count",name:"Last week count"},{value:450,type:"Last month count",name:"Last month count"}],beefPromotionfeesreportColor1:"#62C2CE",beefPromotionfeesreportColor2:"#296F3E",totalsNumberOfHorseTravelPermitsColor:"#B7C04F",totalBrandInspectionsColor:"#296F3E"},l}return Object(l.a)(t,[{key:"render",value:function(){return m.a.createElement(m.a.Fragment,null,m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-4 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard"},m.a.createElement("div",{className:"card-header panel-heading"},m.a.createElement("h2",null,"Brand inspections Graph")),m.a.createElement("div",{className:"card-body panel-body panel-body1 pb-10"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"box-number-row"},m.a.createElement("div",{className:"box-number"},m.a.createElement("h2",null,"$.260"),m.a.createElement("p",null,"Total funds collected")),m.a.createElement("div",{className:"box-number"},m.a.createElement("h2",null,"234"),m.a.createElement("p",null,"Total counts"))),m.a.createElement("div",{className:"graph-round-div"},m.a.createElement("div",{className:"grid-half-div order-list1"},m.a.createElement("ul",{className:"event-ul"},m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span1"})," ",m.a.createElement("span",{className:"text-span"},"Today count")," ",m.a.createElement("span",{className:"in-mobile"},"235")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span2"})," ",m.a.createElement("span",{className:"text-span"},"This week count")," ",m.a.createElement("span",{className:"in-mobile"},"4356")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span3"})," ",m.a.createElement("span",{className:"text-span"},"Last week count")," ",m.a.createElement("span",{className:"in-mobile"},"5667")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span4"})," ",m.a.createElement("span",{className:"text-span"},"Last month count")," ",m.a.createElement("span",{className:"in-mobile"},"45")," "))),m.a.createElement("div",{className:"grid-half-div order-list2"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(E,{data:this.state.brandinspectionsGraphChart}))))))))),m.a.createElement("div",{className:"col-lg-8 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard panel-dashboard-full"},m.a.createElement("div",{className:"card-header panel-heading d-flex-heading"},m.a.createElement("h2",null,"Totals number of brand inspections"),m.a.createElement("div",{className:"sorting-div"},m.a.createElement("div",{className:"form-group select-group mb-0"},m.a.createElement("div",{className:"selectbox-inline"},m.a.createElement("div",{className:"select-box select-common select-custom2"},m.a.createElement("select",{className:"js-select2"},m.a.createElement("option",null,"This year"),m.a.createElement("option",null,"2020"),m.a.createElement("option",null,"2019"))))))),m.a.createElement("div",{className:"card-body panel-body panel-body1"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"graph-full-div"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(h,{color:this.state.totalsNumberOfHorseTravelPermitsColor,data:this.state.totalBrandInspection})))))))),m.a.createElement("div",{className:"col-lg-6 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard panel-dashboard-full"},m.a.createElement("div",{className:"card-header panel-heading d-flex-heading"},m.a.createElement("h2",null,"Beef Promotion fees report"),m.a.createElement("div",{className:"sorting-div"},m.a.createElement("div",{className:"form-group select-group mb-0"},m.a.createElement("div",{className:"selectbox-inline"},m.a.createElement("div",{className:"select-box select-common select-custom2"},m.a.createElement("select",{className:"js-select2"},m.a.createElement("option",null,"This Month"),m.a.createElement("option",null,"January"),m.a.createElement("option",null,"February"),m.a.createElement("option",null,"March"),m.a.createElement("option",null,"April"),m.a.createElement("option",null,"May"))))))),m.a.createElement("div",{className:"card-body panel-body panel-body1"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"graph-full-div"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(v,{color:this.state.beefPromotionfeesreportColor1,data:this.state.beefPromotionfeesreport})))))))),m.a.createElement("div",{className:"col-lg-6 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard panel-dashboard-full"},m.a.createElement("div",{className:"card-header panel-heading d-flex-heading"},m.a.createElement("h2",null,"Beef Promotion fees report"),m.a.createElement("div",{className:"sorting-div"},m.a.createElement("div",{className:"form-group select-group mb-0"},m.a.createElement("div",{className:"selectbox-inline"},m.a.createElement("div",{className:"select-box select-common select-custom2"},m.a.createElement("select",{className:"js-select2"},m.a.createElement("option",null,"This Month"),m.a.createElement("option",null,"January"),m.a.createElement("option",null,"February"),m.a.createElement("option",null,"March"),m.a.createElement("option",null,"April"),m.a.createElement("option",null,"May"))))))),m.a.createElement("div",{className:"card-body panel-body panel-body1"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"graph-full-div"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(v,{color:this.state.beefPromotionfeesreportColor2,data:this.state.beefPromotionfeesreport})))))))),m.a.createElement("div",{className:"col-lg-4 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard"},m.a.createElement("div",{className:"card-header panel-heading"},m.a.createElement("h2",null,"Horse Travel permits Graph")),m.a.createElement("div",{className:"card-body panel-body panel-body1 pb-10"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"box-number-row"},m.a.createElement("div",{className:"box-number"},m.a.createElement("h2",null,"$.260"),m.a.createElement("p",null,"Total funds collected")),m.a.createElement("div",{className:"box-number"},m.a.createElement("h2",null,"234"),m.a.createElement("p",null,"Total counts"))),m.a.createElement("div",{className:"graph-round-div"},m.a.createElement("div",{className:"grid-half-div order-list1"},m.a.createElement("ul",{className:"event-ul"},m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span1"})," ",m.a.createElement("span",{className:"text-span"},"Today count")," ",m.a.createElement("span",{className:"in-mobile"},"235")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span2"})," ",m.a.createElement("span",{className:"text-span"},"This week count")," ",m.a.createElement("span",{className:"in-mobile"},"4356")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span3"})," ",m.a.createElement("span",{className:"text-span"},"Last week count")," ",m.a.createElement("span",{className:"in-mobile"},"5667")," "),m.a.createElement("li",null," ",m.a.createElement("span",{className:"dot-span dot-span4"})," ",m.a.createElement("span",{className:"text-span"},"Last month count")," ",m.a.createElement("span",{className:"in-mobile"},"45")," "))),m.a.createElement("div",{className:"grid-half-div order-list2"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(E,{data:this.state.brandinspectionsGraphChart}))))))))),m.a.createElement("div",{className:"col-lg-8 col-md-12 pr-10"},m.a.createElement("div",{className:"card panel panel-default panel-custom panel-dashboard panel-dashboard-full"},m.a.createElement("div",{className:"card-header panel-heading d-flex-heading"},m.a.createElement("h2",null,"Totals number of Horse Travel permits"),m.a.createElement("div",{className:"sorting-div"},m.a.createElement("div",{className:"form-group select-group mb-0"},m.a.createElement("div",{className:"selectbox-inline"},m.a.createElement("div",{className:"select-box select-common select-custom2"},m.a.createElement("select",{className:"js-select2"},m.a.createElement("option",null,"This year"),m.a.createElement("option",null,"2020"),m.a.createElement("option",null,"2019"))))))),m.a.createElement("div",{className:"card-body panel-body panel-body1"},m.a.createElement("div",{className:"row mr-minus-10"},m.a.createElement("div",{className:"col-lg-12 col-md-12 pr-10"},m.a.createElement("div",{className:"graph-full-div"},m.a.createElement("div",{className:"graph-thumb-div"},m.a.createElement(h,{color:this.state.totalsNumberOfHorseTravelPermitsColor,data:this.state.totalBrandInspection}))))))))))}}]),t}(s.Component),N=Object(d.f)(Object(i.b)((function(e){return{}}),(function(e){return{}}))(b)),f=(t(688),function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(){var e;return Object(n.a)(this,t),(e=a.call(this)).handleOpenNavBar=function(){e.setState({open:!e.state.open})},e.state={open:!1},e}return Object(l.a)(t,[{key:"render",value:function(){return m.a.createElement("div",{id:"wrapper",className:"wrapper"},m.a.createElement("div",{id:"st-container",className:this.state.open?"st-container st-effect-1 st-menu-open":"wrapper dashboard-wrapper st-container"},m.a.createElement(o.a,{header:"Live Stock Brand Inspection",openNavBar:this.handleOpenNavBar,open:this.state.open}),m.a.createElement("div",{className:"main-middle-area"},m.a.createElement("section",{className:"dashboard-brand-section"},m.a.createElement("div",{className:"dashboard-brand-inner"},m.a.createElement("div",{className:"container"},m.a.createElement(N,null)))))))}}]),t}(s.Component));a.default=f},418:function(e,a,t){e.exports=t.p+"static/media/logo.40b45ea8.svg"},427:function(e,a,t){"use strict";var n=t(405),l=t(406),r=t(408),c=t(407),s=t(0),m=t.n(s),o=t(418),i=t.n(o),d=t(428),u=t.n(d),p=t(91),E=function(e){Object(r.a)(t,e);var a=Object(c.a)(t);function t(){var e;Object(n.a)(this,t);for(var l=arguments.length,r=new Array(l),c=0;c<l;c++)r[c]=arguments[c];return(e=a.call.apply(a,[this].concat(r))).state={open:!1},e}return Object(l.a)(t,[{key:"render",value:function(){return m.a.createElement("header",null,m.a.createElement("div",{className:"header-div header-top-root clearfix"},m.a.createElement("div",{className:"inner-top-header-div clearfix"},m.a.createElement("div",{className:"container"},m.a.createElement("div",{className:"row"},m.a.createElement("div",{className:"col-lg-12 col-md-12"},m.a.createElement("div",{className:"header-container"},m.a.createElement("div",{className:"logo-div"},m.a.createElement("a",{className:"logo_link clearfix",href:"/"},m.a.createElement("img",{src:i.a,className:"img-fluid logo_img main-logo",alt:"logo"}))),m.a.createElement("div",{className:"center-nav-content-div display-desktop-center",id:"title-header-top"},m.a.createElement("div",{className:"title-div"},m.a.createElement("h1",null,this.props.header))),m.a.createElement("div",{className:"nav-right-div"},m.a.createElement("div",{className:"menu-trigger"},m.a.createElement("button",{className:"btn btn-menu",id:"btnopen-menu",onClick:this.props.openNavBar},m.a.createElement("img",{src:u.a,className:"menu-icon",alt:"menu"}))),m.a.createElement("div",{className:"navigation-menu"},m.a.createElement("nav",{className:"st-menu st-effect-1 ",id:"menu-1"},m.a.createElement("div",{className:"closemenu-div"},m.a.createElement("button",{className:"menu-close-btn",id:"closemenu",onClick:this.props.openNavBar},m.a.createElement("i",{className:"fe fe-x"}," "))),m.a.createElement("ul",{className:"ul-list"},m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/"},"Dashboard")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/inspection"},"Brand Inspection/List")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/livestock"}," Live Stock")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/horse-permanent-travel-permit"},"Horse Permanent Travel Permit")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/pre-sale-horse-permanent-travel-permit"},"Pre-Sale Horse Brand Inspection Form")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/counter"},"Counter")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/camera"},"Camera")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/gallery"},"Gallery")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/sketch"},"Sketch")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/bluetooth"},"Bluetooth")),m.a.createElement("li",null,m.a.createElement(p.b,{className:"nav-link",to:"/price-calculator"},"Price Calculator")))))))))))),m.a.createElement("div",{className:"navigation-tabs-root",style:{display:"block"}},m.a.createElement("ul",{className:"nav nav-tabs"},m.a.createElement("li",{className:"nav-item plan-nav-item"},m.a.createElement("a",{className:"nav-link active","data-toggle":"tab",href:"#plan-tab"}," ",m.a.createElement("span",{className:"round-outline plan-round-outline"})," Plan")),m.a.createElement("li",{className:"nav-item produce-nav-item"},m.a.createElement("a",{className:"nav-link","data-toggle":"tab",href:"#produce-tab"}," ",m.a.createElement("span",{className:"round-outline produce-round-outline"})," Produce")),m.a.createElement("li",{className:"nav-item publish-nav-item"},m.a.createElement("a",{className:"nav-link","data-toggle":"tab",href:"#publish-tab"}," ",m.a.createElement("span",{className:"round-outline publish-round-outline"})," Publish")),m.a.createElement("li",{className:"nav-item track-nav-item"},m.a.createElement("a",{className:"nav-link","data-toggle":"tab",href:"#track-tab"}," ",m.a.createElement("span",{className:"round-outline track-round-outline"})," Track")))))}}]),t}(s.Component);a.a=E},428:function(e,a,t){e.exports=t.p+"static/media/menu-white.2e203ecb.svg"},688:function(e,a,t){}}]);
//# sourceMappingURL=26.5fd44bfc.chunk.js.map