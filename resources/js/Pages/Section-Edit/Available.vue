<script setup>
import { Input, Timepicker, initTE } from "tw-elements";
import { onMounted } from "vue";


let props = defineProps(['form', 'errors'])
let availableTimeAttention = false;

let times = {}
onMounted(() => {
  initTE({ Timepicker, Input })

  // available start を配置
  const timepickerValue_start = document.querySelector("#timepicker-value-start");
  const tminputValue_start = new Timepicker(timepickerValue_start, {
    inline: true
  });

  // available start の onChange
  timepickerValue_start.addEventListener("input.te.timepicker", (input) => {
    // 注意書きの表示
    availableTimeAttention = true

    // available end の入力欄の編集不可を外す
    let start = input.target.value
    if(document.getElementsByName('available_end_time')[0].readOnly) {
      document.getElementsByName('available_end_time')[0].readOnly == false
    }

    // available end の配置・最小時間を available start にセット
    const timepickerValue_end = document.querySelector("#timepicker-value-end");
      const tminputValue_end = new Timepicker(timepickerValue_end, {
        inline: true,
        minTime: start
      });
  });

});

</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">
      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">都合がいい時間はありますか？</h1>

      <!-- バリデーションエラー表示 -->
      <div class="flex">
      <div v-if="props.errors.available_start || props.errors.available_end" class="text-red-600">{{ props.errors.available_start }}</div>
      <div v-if="props.errors.available_start || props.errors.available_end" class="text-red-600">{{ props.errors.available_end }}</div>
      <div v-if="availableTimeAttention" class="text-sm">開始時間と終了時間の順番を逆にしないようにしてください。</div>
      </div>
      <!-- バリデーションエラー表示 -->

      <div class="flex">
        <!-- 時間１ -->
        <div id="timepicker-value-start" class="relative" data-te-input-wrapper-init>
          <input
            type="text"
            name="available_start_time"
            v-model="props.form.available_start"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            data-te-timepicker-format24="true"
            id="available-start" />
          <label
            for="available-start"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Select a time
          </label>
        </div>

        <div class="text-md font-medium mb-4 text-gray-900 mx-2">
          ～
        </div>

        <!-- 時間２ -->
        <div id="timepicker-value-end" class="relative" data-te-input-wrapper-init>
          <input
            type="text"
            readonly
            v-model="props.form.available_end"
            name="available_end_time"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            data-te-timepicker-format24="true"
            id="available-end" />
          <label
            for="available-end"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Select a time
          </label>
        </div>
      </div>

      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">質問するときの注意事項</h1>
      <div v-if="props.errors.caution" class="text-red-600">{{ props.errors.available_start }}</div>
      <textarea
        name="caution"
        v-model="props.form.caution"
        class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
      </textarea>
    </div>
</template>