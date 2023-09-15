<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3'

let props = defineProps(['members'])
</script>
<template>
  <AuthenticatedLayout>

    <!-- ヘッダー -->
    <template #header>
      <form @submit.prevent="submit">
        <header class="text-gray-600 body-font">
          <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">Members</h2>
            </a>
          </div>
        </header>
      </form>
    </template>
    <!-- ヘッダー -->


    <!-- 中身 -->
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <section class="text-gray-600 body-font">
              <div class="container px-5 py-8 mx-auto">

                <!-- title -->
                <div class="flex flex-col text-center w-full mb-8">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
                  <p class="lg:w-2/3 mx-auto leading-relaxed text-base">見たい人 or 報連相したい人を選んでください。</p>
                </div>
                <!-- title -->


                <!-- ユーザ -->
                <div class="flex">
                  <div v-for="(everyYear, idx) in props.members" :key="everyYear" class="basis-1/6">
                    <div class="mb-3 text-center" v-if="idx != 6">{{ idx }} 期生</div>
                    <div class="mb-3 text-center" v-else>達人</div>
                      <div class="w-full">
                        <div v-for="member in everyYear" :key="member" class="m-2">
                          <Link :href="route('my_page', { id: member.id })">
                            <div class="h-full border-gray-200 border p-4 rounded-lg">
                              <img alt="team" class="mx-auto w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full" src="https://dummyimage.com/80x80">
                              <!-- <p class="text-gray-900 text-center">役職名</p> -->
                              <h2 class="text-center text-gray-700">{{ member.name }}</h2>
                            </div>
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ユーザ -->

            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- 中身 -->


  </AuthenticatedLayout>
</template>