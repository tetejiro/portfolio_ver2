<script setup>
import { Input } from "tw-elements";
let props = defineProps(['form'])
</script>

<template>
    <div class="flex flex-col w-3/5 mx-auto">
      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">都合がいい時間はありますか？</h1>


      <div class="flex">
        <!-- 時間１ -->
        <div class="relative">
          {{ props.form.available_start }}
        </div>

        <div class="text-md font-medium mb-4 text-gray-900 mx-2">
          ～
        </div>

        <!-- 時間２ -->
        <div id="timepicker-value-end" class="relative" data-te-input-wrapper-init>
          {{ props.form.available_end }}
        </div>
      </div>

      <h1 class="text-md font-medium mb-4 text-gray-900 mt-10">質問するときの注意事項</h1>
      <div class="bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        {{ props.form.caution }}
      </div>
    </div>
</template>