<script setup>
let props = defineProps(['form'])

defineEmits(['change'])
</script>

<template>
  <div>
    <h1 class="text-center text-md font-medium mb-4 text-gray-900 mt-10">得意分野です</h1>
    <div class="flex mx-auto">
      <textarea name="strong_point_1" v-model="props.form.strong_point_1" class="w-3/4 mx-3 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      <textarea name="strong_point_2" v-model="props.form.strong_point_2" class="w-3/4 mx-3 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      <textarea name="strong_point_3" v-model="props.form.strong_point_3" class="w-3/4 mx-3 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
    </div>
  </div>
</template>