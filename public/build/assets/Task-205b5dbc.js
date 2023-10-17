import{r as u,A as x,o as s,f as c,u as e,t as p,g as n,k as _,v as g,b as t,d as y,J as w,l as v}from"./app-541e0e38.js";import{O as b}from"./tw-elements.es.min-576c9c21.js";const O={class:"flex flex-col w-3/5 mx-auto"},S=t("h1",{class:"required text-md font-medium mb-4 text-gray-900 mt-10"},"今はなにをしていますか？",-1),D={key:0,class:"text-red-600"},T={key:1},z={class:"w-2/4"},C=t("h1",{class:"text-md font-medium mb-4 text-gray-900 mt-10"},"着手開始",-1),M=["value"],V={key:0,class:"mt-4"},q={id:"task_start"},B={key:2},E=t("h1",{class:"text-md font-medium mb-4 text-gray-900 mt-10"},"実施時間を編集しますか？",-1),N={key:0,class:"text-red-600"},F=t("h1",{class:"text-md font-medium mb-4 text-gray-900 mt-10"},"着手開始時間",-1),P={key:1,class:"text-red-600"},U={class:"relative mb-3","data-te-input-wrapper-init":"","data-te-disable-future":"true",id:"datetimepicker-timeOptions_start"},A=["value"],H=t("label",{for:"form9",class:"pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"},"Select a time ",-1),J={key:0},Y={class:"relative mb-3","data-te-date-timepicker-init":"","data-te-input-wrapper-init":"","data-te-disable-future":"true",id:"datetimepicker-timeOptions_end"},j=["value"],G=t("label",{for:"form1",class:"pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"},"Select a time",-1),L={__name:"Task",props:["form","errors","taskTimeError"],setup(h){const r=h;let i=u({flg:!0}),k=u({task:!1}),f=location.pathname=="/MyPage/create"?"create":"edit";x(()=>{if(f=="create"&&i.flg){let a=new Date;r.form.task_start=a.getFullYear()+"-"+(a.getMonth()+1)+"-"+a.getDate()+" "+("0"+a.getHours()).slice(-2)+":"+("0"+a.getMinutes()).slice(-2)}});let l=u({flg:!1}),m=()=>{const a=document.querySelector("#datetimepicker-timeOptions_start");new b(a,{timepicker:{format24:!0},datepicker:{format:"yyyy-mm-dd",confirmDateOnSelect:!0}});const o=document.querySelector("#datetimepicker-timeOptions_end");new b(o,{timepicker:{format24:!0},datepicker:{format:"yyyy-mm-dd",confirmDateOnSelect:!0}})};return(a,o)=>(s(),c("div",O,[S,e(r).errors?(s(),c("div",D,p(e(r).errors.task_content),1)):n("",!0),_(t("textarea",{name:"task_content","onUpdate:modelValue":o[0]||(o[0]=d=>e(r).form.task_content=d),class:"break-words whitespace-pre-wrap bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"},`
        `,512),[[g,e(r).form.task_content]]),e(f)=="create"?(s(),c("div",T,[t("div",null,[t("div",z,[C,t("input",{disabled:"",value:e(i).flg,checked:"",name:"task_start_create",class:"mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]",type:"checkbox",role:"switch",id:"flexSwitchCheckDefault"},null,8,M)]),e(i).flg?(s(),c("div",V,[y("着手開始時間 : "),t("span",q,p(e(r).form.task_start),1)])):n("",!0)])])):n("",!0),e(f)=="edit"?(s(),c("div",B,[E,_(t("input",{"onUpdate:modelValue":o[1]||(o[1]=d=>e(l).flg=d),onChange:o[2]||(o[2]=(...d)=>e(m)&&e(m)(...d)),class:"mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]",type:"checkbox",role:"switch",id:"flexSwitchCheckDefault"},null,544),[[w,e(l).flg]]),_(t("div",null,[t("div",null,[e(r).taskTimeError?(s(),c("div",N,"開始時間と終了時間が逆です。")):n("",!0),F,e(r).errors.task_start?(s(),c("div",P,p(e(r).errors.task_start),1)):n("",!0),t("div",U,[t("input",{type:"text",name:"task_start",value:e(r).form.task_start,class:"peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",id:"form9"},null,8,A),H])]),e(k).task?(s(),c("div",J,"開始時間よりも遅い日時にしてください。")):n("",!0),t("div",Y,[t("input",{type:"text",name:"task_end",value:e(r).form.task_end,class:"peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",id:"form1"},null,8,j),G])],512),[[v,e(l).flg]])])):n("",!0)]))}};export{L as default};
