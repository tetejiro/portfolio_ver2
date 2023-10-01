<script setup>
let kao1 = '/kao/kao1.png'
let kao2 = '/kao/kao2.png'
let kao3 = '/kao/kao3.png'
let kao4 = '/kao/kao4.png'
let kao5 = '/kao/kao5.png'

let props = defineProps(['form', 'errors'])

defineEmits(['change'])
</script>

<template>
  <div>
    <h1 class="required text-md font-medium mb-4 text-gray-900 mt-10 text-center">順調ですか？</h1>
    <div v-if="props.errors.schedule_status" class="text-red-600 text-center my-3">{{ props.errors.schedule_status }}</div>
    <div class="flex mt-4 mb-8 w-3/5 mx-auto">
      <label class="mx-auto">
        <div class="flex h-30 flex-col items-center mx-auto">
          <img :src="kao5" class="inline-block w-min">手伝ってほしい
          <input type="radio" name="schedule_status" value="1" v-model="props.form.schedule_status" >
        </div>
      </label>
      <label class="mx-auto">
        <div class="flex h-30 flex-col items-center mx-auto">
          <img :src="kao4" class="inline-block w-min">いそがしい
          <input type="radio" name="schedule_status" value="2" v-model="props.form.schedule_status" >
        </div>
      </label>
      <label class="mx-auto">
        <div class="flex h-30 flex-col items-center mx-auto">
          <img :src="kao3" class="inline-block w-min">余裕がない
          <input type="radio" name="schedule_status" value="3" v-model="props.form.schedule_status" >
        </div>
      </label>
      <label class="mx-auto">
        <div class="flex h-30 flex-col items-center mx-auto">
          <img :src="kao2" class="inline-block w-min">ふつう
          <input type="radio" name="schedule_status" value="4" v-model="props.form.schedule_status" >
        </div>
      </label>
      <label class="mx-auto">
        <div class="flex h-30 flex-col items-center mx-auto">
          <img :src="kao1" class="inline-block w-min">ゆとりがある
          <input type="radio" name="schedule_status" value="5" v-model="props.form.schedule_status" >
        </div>
      </label>
    </div>
  </div>
</template>