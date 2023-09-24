<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Question from '@/Pages/Horenso/Question.vue'
import Report from '@/Pages/Horenso/Report.vue'

import { shallowRef } from 'vue';

let props = defineProps(['id', 'errors'])

let current = shallowRef(Question)

</script>

<template>
  <AuthenticatedLayout>

    <!-- ヘッダー -->
    <template #header>
      <form @submit.prevent="submit">
        <header class="text-gray-600 body-font">
          <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">報連相</h2>
            </a>
          </div>
        </header>
      </form>
    </template>
    <!-- ヘッダー -->


    <!-- content -->
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <section class="text-gray-600 body-font">
              <div class="container px-5 py-3 mx-auto flex flex-wrap">


                <!-- 中身 -->
                <label><input type="radio" name="type" v-model="current" :value="Question" class="mr-2">質問</label>
                <label><input type="radio" name="type" v-model="current" :value="Report" class="mr-2 ml-2">報告</label>

                <component :is="current" :id="props.id" :errors="props.errors"></component>
                <!-- 中身 -->


              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- content -->


  </AuthenticatedLayout>
</template>