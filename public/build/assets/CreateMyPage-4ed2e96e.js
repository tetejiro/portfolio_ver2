import{y as C,r as L,o as n,f as u,a as i,u as t,w,F as B,Z as j,b as e,t as y,g as b,e as $,n as _,d as p,c as f,k as v,l as g,z as h,O as z}from"./app-541e0e38.js";import{_ as A}from"./AuthenticatedLayout-b04fa17d.js";import N from"./Task-205b5dbc.js";import E from"./Schedule-4c32d50c.js";import P from"./Available-7a0a44f9.js";import S from"./Strong-8f933e96.js";import V from"./Record-81b60ebe.js";import"./ApplicationLogo-4f5d2085.js";import"./tw-elements.es.min-576c9c21.js";import"./dayjs.min-0e4f8541.js";const D={class:"text-gray-600 body-font"},F={class:"container mx-auto flex flex-wrap flex-col md:flex-row items-center"},O={class:"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"},T={key:0,class:"font-semibold text-xl text-gray-800 leading-tight"},H={key:1},I={class:"md:ml-auto flex flex-wrap items-center text-base justify-center"},K={key:0,class:"flex mr-5 hover:text-gray-900"},R=e("button",{class:"cursor-grabbing mr-5"},"保存",-1),Z=[R],q={class:"py-12"},G={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},J={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},Q={class:"p-6 text-gray-900"},U={key:0,class:"text-center bg-emerald-200 w-5/12 mx-auto py-1 rounded-md"},W={class:"text-gray-600 body-font"},X={class:"container px-5 py-3 mx-auto flex flex-wrap flex-col"},Y={class:"flex mx-auto flex-wrap"},ee=e("svg",{fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 mr-3 pointer-events-none"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"})],-1),te=e("svg",{fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 mr-3 pointer-events-none"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"}),e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"})],-1),se=e("svg",{fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 mr-3 pointer-events-none"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"})],-1),oe=e("svg",{fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 mr-3 pointer-events-none"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"})],-1),re=e("svg",{fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 mr-3 pointer-events-none"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"})],-1),fe={__name:"CreateMyPage",props:["user","rec","errors"],setup(M){const r=M;console.log("CreateMyPage.vue");let d=C(1),k=["sm:px-6","py-3","w-1/2","sm:w-auto","justify-center","sm:justify-start","border-b-2","title-font","font-medium","inline-flex","items-center","leading-none","tracking-wider","bg-gray-100","border-indigo-500","text-indigo-500","rounded-t","activeMark"],m=["sm:px-6","py-3","w-1/2","sm:w-auto","justify-center","sm:justify-start","border-b-2","title-font","font-medium","inline-flex","items-center","leading-none","tracking-wider","border-gray-200","hover:text-gray-900"];const c=(l,s)=>{let o=document.getElementsByClassName("activeMark")[0];o.classList.remove(...k),o.classList.add(...m),l.target.classList.remove(...m),l.target.classList.add(...k),d.value=s};console.log(r);let a=L({user_id:r.user[0].id,task_content:null,task_start:null,task_end:null,schedule_status:null,available_start:null,available_end:null,caution:null,strong_point_1:null,strong_point_2:null,strong_point_3:null}),x=()=>{console.log(a),a.task_start=document.getElementById("task_start").textContent,a.available_start=document.getElementsByName("available_start_time")[0].value,a.available_end=document.getElementsByName("available_end_time")[0].value,z.post(route("MyPage.store"),a)};return(l,s)=>(n(),u(B,null,[i(t(j),{title:"MyPage"}),i(A,null,{header:w(()=>[e("form",{onSubmit:s[0]||(s[0]=$((...o)=>t(x)&&t(x)(...o),["prevent"]))},[e("header",D,[e("div",F,[e("a",O,[l.$page.props.auth.user.id==t(r).user[0].id?(n(),u("h2",T,"MyPage")):(n(),u("h2",H,y(t(r).user[0].name)+" さんのページ",1))]),e("nav",I,[l.$page.props.auth.user.id==t(r).user[0].id?(n(),u("div",K,Z)):b("",!0)])])])],32)]),default:w(()=>[e("div",q,[e("div",G,[e("div",J,[e("div",Q,[l.$page.props.flash.message?(n(),u("div",U,y(l.$page.props.flash.message),1)):b("",!0),e("section",W,[e("div",X,[e("div",Y,[e("div",{onClick:s[1]||(s[1]=o=>c(o,1)),class:_(t(k))},[ee,p("Task ")],2),e("div",{onClick:s[2]||(s[2]=o=>c(o,2)),class:_(t(m))},[te,p("Schedule ")],2),e("div",{onClick:s[3]||(s[3]=o=>c(o,3)),class:_(t(m))},[se,p("Available time ")],2),e("div",{onClick:s[4]||(s[4]=o=>c(o,4)),class:_(t(m))},[oe,p("Strong ")],2),e("div",{onClick:s[5]||(s[5]=o=>c(o,5)),class:_(t(m))},[re,p("Record ")],2)]),(n(),f(h,null,[v(i(N,{form:t(a),errors:t(r).errors},null,8,["form","errors"]),[[g,t(d)==1]])],1024)),(n(),f(h,null,[v(i(E,{form:t(a),errors:t(r).errors},null,8,["form","errors"]),[[g,t(d)==2]])],1024)),(n(),f(h,null,[v(i(P,{form:t(a),errors:t(r).errors},null,8,["form","errors"]),[[g,t(d)==3]])],1024)),(n(),f(h,null,[v(i(S,{form:t(a),errors:t(r).errors},null,8,["form","errors"]),[[g,t(d)==4]])],1024)),(n(),f(h,null,[v(i(V,{rec:t(r).rec},null,8,["rec"]),[[g,t(d)==5]])],1024))])])])])])])]),_:1})],64))}};export{fe as default};
