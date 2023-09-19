<script setup>
import { reactive } from 'vue';
import { Datetimepicker, Input, initTE } from "tw-elements";
import { onMounted } from 'vue'


let props = defineProps(['form', 'errors'])
let start_flg = reactive({ flg: true }) // 着手開始フラグ

// 表示内容を動的に変更するため Create か Edit かを判定
let currentPage = location.pathname.slice(0, 14) == '/MyPage/create' ? 'create' : 'edit'

// Create：　着手開始時間を form に代入 ===============
onMounted(() => {
    if(start_flg.flg) {
        let today = new Date();
        props.form.task_start = today.getFullYear() + '-' + today.getMonth() + '-' + today.getDate() + ' ' + ('0' + today.getHours()).slice(-2) + ':' + ('0' + today.getMinutes()).slice(-2)
    }
})
// ==================================================


// Edit：　着手開始時間のインプット要素の表示・非表示切り替え ============
let changeFlg = reactive({ flg: false })

// トグルの onChange
let toggleChange = () => {
    // input 要素の生成
    const pickerTimeOptions = document.querySelector('#datetimepicker-timeOptions');
    let date_time_picker = new Datetimepicker(pickerTimeOptions, {
        timepicker: { format24: true },
        datepicker: { format: 'yyyy-mm-dd'}
    });
    // デフォルト値のセット
    // date_time_picker._options.defaultDate = date
    // date_time_picker._options.defaultTime = time
}
// ==================================================================

</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">

        <!-- task content -->
        <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">今はなにをしていますか？</h1>

        <!-- エラー分 -->
        <div v-if="props.errors" class="text-red-600">{{ props.errors.task_content }}</div>

        <!-- 入力欄 -->
        <textarea
            name="task_content"
            v-model="props.form.task_content"
            class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        </textarea>
        <!-- task content -->




        <!-- 新規作成時のみ表示 -->
        <div v-if="currentPage == 'create'">

            <div>
                <!-- 着手時間 -->
                <div class="w-2/4">
                    <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">着手開始</h1>
                    <input
                        disabled
                        :value="start_flg.flg"
                        checked
                        class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                    />
                </div>
                <div v-if="start_flg.flg" class="mt-4">着手開始時間 : {{ props.form.task_start }}</div>
                <!-- 着手時間 -->
            </div>

        </div>
        <!-- 新規作成時のみ表示 -->





        <!-- 編集時のみ表示 -->
        <div v-if="currentPage == 'edit'">
            <!-- <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">着手開始時間</h1> -->
            <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">着手開始時間を編集しますか？</h1>

            <!-- トグル　※on になると終了時間の input を表示 -->
            <input
                v-model="changeFlg.flg"
                @change="toggleChange"
                class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                type="checkbox"
                role="switch"
                id="flexSwitchCheckDefault" />
            <!-- トグル -->

            <!-- DateTimePicker -->
            <div v-show="changeFlg.flg">


                <!-- 終了時間 -->
                <div>
                    <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">着手開始時間</h1>
                    <div v-if="props.errors.task_start" class="text-red-600">{{ props.errors.task_start }}</div>
                    <div
                        class="relative mb-3"
                        data-te-input-wrapper-init
                        id="datetimepicker-timeOptions">
                        <input
                            type="text"
                            name="task_start"
                            v-model="props.form.task_start"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="form9" />
                        <label
                            for="form9"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Select a time
                        </label>
                    </div>
                </div>
                <!-- 終了時間 -->





            </div>
            <!-- DateTimePicker -->

        </div>
        <!-- 編集時のみ表示 -->

    </div>
</template>