<script setup>
import { Input, Timepicker, initTE } from "tw-elements";
import { onMounted } from "vue";


onMounted(() => {
  initTE({ Input, Timepicker })

  const pickerInline2_start = document.querySelector("#timepicker-inline-24-start");
  const pickerInline2_end = document.querySelector("#timepicker-inline-24-end");


  new Timepicker(
    pickerInline2_start, {
      format24: true,
      inline: true
    }
  );

  new Timepicker(
    pickerInline2_end, {
      format24: true,
      inline: true
    }
  );

});


</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">
      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">都合がいい時間はありますか？</h1>


      <div class="flex">
        <!-- 時間１ -->
        <div
          class="relative"
          id="timepicker-inline-24-start"
          data-te-input-wrapper-init>
          <input
            type="text"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="available_start" />
          <label
            for="available_start"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Select a time
          </label>
        </div>
        <div class="text-md font-medium mb-4 text-gray-900 mx-2">
          ～
        </div>

        <!-- 時間２ -->
        <div
          class="relative"
          id="timepicker-inline-24-end"
          data-te-input-wrapper-init>
          <input
            type="text"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="available_end" />
          <label
            for="available_end"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Select a time
          </label>
        </div>
      </div>

      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">質問するときの注意事項</h1>
      <textarea name="caution" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
    </div>
</template>