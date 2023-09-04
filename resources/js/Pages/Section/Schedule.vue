<script setup>
import { reactive } from 'vue'
let kao1 = 'kao1.png'
let kao2 = 'kao2.png'
let kao3 = 'kao3.png'
let kao4 = 'kao4.png'
let kao5 = 'kao5.png'

let form = reactive({
  busy: 3
})
</script>

<template>
  <div class="flex my-8 w-3/5 mx-auto">
    <label class="mx-auto">
      <div class="flex h-30 flex-col items-center mx-auto">
        <img :src="kao5" class="inline-block w-min">手伝ってほしい
        <input type="radio" name="schedule" value="1" v-model="form.busy">
      </div>
    </label>
    <label class="mx-auto">
      <div class="flex h-30 flex-col items-center mx-auto">
        <img :src="kao4" class="inline-block w-min">いそがしい
        <input type="radio" name="schedule" value="2" v-model="form.busy">
      </div>
    </label>
    <label class="mx-auto">
      <div class="flex h-30 flex-col items-center mx-auto">
        <img :src="kao3" class="inline-block w-min">余裕がない
        <input type="radio" name="schedule" value="3" v-model="form.busy">
      </div>
    </label>
    <label class="mx-auto">
      <div class="flex h-30 flex-col items-center mx-auto">
        <img :src="kao2" class="inline-block w-min">ふつう
        <input type="radio" name="schedule" value="4" v-model="form.busy">
      </div>
    </label>
    <label class="mx-auto">
      <div class="flex h-30 flex-col items-center mx-auto">
        <img :src="kao1" class="inline-block w-min">ゆとりがある
        <input type="radio" name="schedule" value="5" v-model="form.busy">
      </div>
    </label>
  </div>
</template>