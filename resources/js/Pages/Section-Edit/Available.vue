<script setup>
import { Input, Timepicker, initTE } from "tw-elements";
import { onMounted } from "vue";


let props = defineProps(['form'])

let times = {}
onMounted(() => {
  initTE({ Timepicker, Input })

  // available start
  const timepickerValue_start = document.querySelector("#timepicker-value-start");
  const tminputValue = new Timepicker(timepickerValue_start, {
    inline: true
  });

  timepickerValue_start.addEventListener("input.te.timepicker", (input) => {
    props.form.available_start = input.target.value
  });


  // available end
  const timepickerValue_end = document.querySelector("#timepicker-value-end");
  const tminputValue_end = new Timepicker(timepickerValue_end, {
    //TODO: 最小値を修正する。
    //minTime: `"${props.form.available_start}"`,
    inline: true
  });

  timepickerValue_end.addEventListener("input.te.timepicker", (input) => {
    props.form.available_end = input.target.value
  });

});

</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">
      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">都合がいい時間はありますか？</h1>


      <div class="flex">
        <!-- 時間１ -->
        <div id="timepicker-value-start" class="relative" data-te-input-wrapper-init>
          <input
            type="text"
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
            v-model="props.form.available_end"
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
      <textarea
        name="caution"
        v-model="props.form.caution"
        class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
      </textarea>
    </div>
</template>