import{o as c,f as i,u as s,t as p,g as f,b as e,d as a,k as n,m as u}from"./app-541e0e38.js";const k=e("h1",{class:"required text-md font-medium mb-4 text-gray-900 mt-10 text-center"},"順調ですか？",-1),v={key:0,class:"text-red-600 text-center my-3"},g={class:"flex mt-4 mb-8 w-3/5 mx-auto"},b={class:"mx-auto"},y={class:"flex h-30 flex-col items-center mx-auto"},V=["src"],w={class:"mx-auto"},U={class:"flex h-30 flex-col items-center mx-auto"},B=["src"],N={class:"mx-auto"},D={class:"flex h-30 flex-col items-center mx-auto"},S=["src"],q={class:"mx-auto"},C={class:"flex h-30 flex-col items-center mx-auto"},E=["src"],M={class:"mx-auto"},R={class:"flex h-30 flex-col items-center mx-auto"},T=["src"],A={__name:"Schedule",props:["form","errors"],emits:["change"],setup(d){const t=d;let m="/kao/kao1.png",r="/kao/kao2.png",_="/kao/kao3.png",h="/kao/kao4.png",x="/kao/kao5.png";return(j,l)=>(c(),i("div",null,[k,s(t).errors.schedule_status?(c(),i("div",v,p(s(t).errors.schedule_status),1)):f("",!0),e("div",g,[e("label",b,[e("div",y,[e("img",{src:s(x),class:"inline-block w-min"},null,8,V),a("手伝ってほしい "),n(e("input",{type:"radio",name:"schedule_status",value:"1","onUpdate:modelValue":l[0]||(l[0]=o=>s(t).form.schedule_status=o)},null,512),[[u,s(t).form.schedule_status]])])]),e("label",w,[e("div",U,[e("img",{src:s(h),class:"inline-block w-min"},null,8,B),a("いそがしい "),n(e("input",{type:"radio",name:"schedule_status",value:"2","onUpdate:modelValue":l[1]||(l[1]=o=>s(t).form.schedule_status=o)},null,512),[[u,s(t).form.schedule_status]])])]),e("label",N,[e("div",D,[e("img",{src:s(_),class:"inline-block w-min"},null,8,S),a("余裕がない "),n(e("input",{type:"radio",name:"schedule_status",value:"3","onUpdate:modelValue":l[2]||(l[2]=o=>s(t).form.schedule_status=o)},null,512),[[u,s(t).form.schedule_status]])])]),e("label",q,[e("div",C,[e("img",{src:s(r),class:"inline-block w-min"},null,8,E),a("ふつう "),n(e("input",{type:"radio",name:"schedule_status",value:"4","onUpdate:modelValue":l[3]||(l[3]=o=>s(t).form.schedule_status=o)},null,512),[[u,s(t).form.schedule_status]])])]),e("label",M,[e("div",R,[e("img",{src:s(m),class:"inline-block w-min"},null,8,T),a("ゆとりがある "),n(e("input",{type:"radio",name:"schedule_status",value:"5","onUpdate:modelValue":l[4]||(l[4]=o=>s(t).form.schedule_status=o)},null,512),[[u,s(t).form.schedule_status]])])])])]))}};export{A as default};
