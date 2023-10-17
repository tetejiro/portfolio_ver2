import{o,c as u,w as c,b as t,f as r,j as a,k as _,l as y,F as i,u as n,t as s,g as x}from"./app-541e0e38.js";import{_ as m}from"./AuthenticatedLayout-b04fa17d.js";import"./ApplicationLogo-4f5d2085.js";const p=t("header",{class:"text-gray-600 body-font"},[t("div",{class:"container mx-auto flex flex-wrap flex-col md:flex-row items-center"},[t("a",{class:"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"},[t("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"},"History")])])],-1),h={class:"py-12"},b={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},f={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},w={class:"p-6 text-gray-900"},k={class:"text-gray-600 body-font"},v={class:"container px-5 pb-8 mx-auto"},B={class:"text-gray-600 body-font"},q={class:"container px-5 mx-auto"},j=t("div",{class:"flex items-center justify-evenly text-center w-full mb-4"},[t("h1",{class:"text-md font-medium text-gray-900 mt-10 w-auto"},"報連相の履歴")],-1),C={class:"lg:w-2/3 w-full mx-auto overflow-auto"},D={class:"w-full"},F=t("tr",null,[t("th",{class:"w-44 px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl"},"分類"),t("td",{class:"w-9/12 border-solid border border-gray-200 px-4 py-3"},"質問")],-1),H=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl"},"質問 相手",-1),N={key:0,class:"w-full h-full border-solid border-r border-l border-gray-200 px-4 py-3"},S=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"件名",-1),V={class:"border-solid border border-gray-200 px-4 py-3"},E=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"依頼したこと",-1),L={class:"border-solid border border-gray-200 px-4 py-3"},$=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"詳細",-1),z={class:"border-solid border border-gray-200 px-4 py-3"},A=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"考えられる原因",-1),G={class:"border-solid border border-gray-200 px-4 py-3"},I=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl"},"試してみたこと・その他",-1),J={class:"border-solid border border-gray-200 px-4 py-3"},K={class:"w-full"},M=t("tr",null,[t("th",{class:"w-44 px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl"},"分類"),t("td",{class:"w-9/12 border-solid border border-gray-200 px-4 py-3"},"報告・連絡・相談")],-1),O=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl"},"報連相 相手",-1),P={key:0,class:"w-full h-full border-solid border-r border-l border-gray-200 px-4 py-3"},Q=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"件名",-1),R={class:"border-solid border border-gray-200 px-4 py-3"},T=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"詳細",-1),U={class:"border-solid border border-gray-200 px-4 py-3"},W=t("th",{class:"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"},"その他",-1),X={class:"border-solid border border-gray-200 px-4 py-3"},ot={__name:"History",props:["recs","user"],setup(g){const l=g;return(Y,Z)=>(o(),u(m,null,{header:c(()=>[p]),default:c(()=>[t("div",h,[t("div",b,[t("div",f,[t("div",w,[t("section",k,[t("div",v,[t("section",B,[t("div",q,[j,t("div",C,[(o(!0),r(i,null,a(n(l).recs,e=>(o(),r("table",{class:"table-auto w-full text-left whitespace-no-wrap mt-4",key:e.id},[_(t("div",D,[F,t("tr",null,[H,(o(!0),r(i,null,a(n(l).user,d=>(o(),r("div",{key:d,class:"w-full h-full"},[e.target_user_id==d.id?(o(),r("div",N,s(d.name),1)):x("",!0)]))),128))]),t("tr",null,[S,t("td",V,s(e.title),1)]),t("tr",null,[E,t("td",L,s(e.request_for),1)]),t("tr",null,[$,t("td",z,s(e.detail),1)]),t("tr",null,[A,t("td",G,s(e.cause),1)]),t("tr",null,[I,t("td",J,s(e.other),1)])],512),[[y,e.is_question]]),_(t("div",K,[M,t("tr",null,[O,(o(!0),r(i,null,a(n(l).user,d=>(o(),r("div",{key:d,class:"w-full h-full"},[e.target_user_id==d.id?(o(),r("div",P,s(d.name),1)):x("",!0)]))),128))]),t("tr",null,[Q,t("td",R,s(e.title),1)]),t("tr",null,[T,t("td",U,s(e.detail),1)]),t("tr",null,[W,t("td",X,s(e.other),1)])],512),[[y,!e.is_question]])]))),128))])])])])])])])])])]),_:1}))}};export{ot as default};
