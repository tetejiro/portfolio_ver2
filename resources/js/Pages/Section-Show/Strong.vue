<script setup>
let props = defineProps(['form'])

defineEmits(['change'])
</script>

<template>
  <div>
    <h1 class="text-center text-md font-medium mb-4 text-gray-900 mt-10">得意分野</h1>
    <div class="flex mx-auto">
      <div class="break-words whitespace-pre-wrap w-3/4 mx-3 bg-gray-100 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        {{ props.form.strong_point_1 }}
      </div>
      <div class="break-words whitespace-pre-wrap w-3/4 mx-3 bg-gray-100 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        {{ props.form.strong_point_2 }}
      </div>
      <div class="break-words whitespace-pre-wrap w-3/4 mx-3 bg-gray-100 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
        {{ props.form.strong_point_3 }}
      </div>
    </div>
  </div>
</template>