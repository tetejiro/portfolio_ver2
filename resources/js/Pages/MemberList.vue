<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { router } from '@inertiajs/vue3'

let props = defineProps(['members'])

let moveToMyPage = id => {
  router.get(route('MyPage.show', id ))
}
</script>
<template>

  <Head title="社員一覧" />

  <AuthenticatedLayout>

    <!-- ヘッダー -->
    <template #header>
      <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Members</h2>
          </a>
        </div>
      </header>
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
                <div class="flex flex-col justify-center">
                  <div v-for="(everyYear, idx) in props.members" :key="everyYear">
                    <div class="flex flex-wrap items-center">
                      <div class="mb-3 text-center" v-if="idx != 6">{{ idx }} 期生</div>
                      <div class="mb-3 text-center w-11" v-else>達人</div>
                      <div v-for="user in everyYear" :key="user" class="m-2">
                        <div @click="moveToMyPage(user.id)">
                          <div>
                            <img alt="team" class="mx-auto w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full" src="https://dummyimage.com/80x80">
                            <!-- <p class="text-gray-900 text-center">役職名</p> -->
                            <h2 class="text-center text-gray-700">{{ user.name }}</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ユーザ -->


              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- 中身 -->


  </AuthenticatedLayout>
</template>