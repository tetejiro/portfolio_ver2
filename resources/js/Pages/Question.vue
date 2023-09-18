<script setup>
import { reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'


let props = defineProps(['id'])

let form = reactive({
  user_id: usePage().props.auth.user.id,
  target_user_id: props.id,
  is_question: true,
  title: null,
  requests: null,
  detail: null,
  cause: null,
  other: null
})

let send = () => {
  router.post(route('sendMail'), form)
}

</script>

<template>
  <div>
    <form @submit.prevent="send">
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-4 mx-auto">
          <div class="flex flex-wrap -m-4">

            <!-- 件名 -->
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-white-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full border-zinc-700 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">
                    件名（必須）
                  </h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <textarea name="title" v-model="form.title" class="h-32 bg-gray-100"></textarea>
                  </p>
                </div>
              </div>
            </div>
            <!-- 件名 -->


            <!-- 依頼したいこと -->
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-white-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full border-zinc-700 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">
                    依頼したいこと（必須）
                  </h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <textarea name="requests" v-model="form.requests" class="h-32 bg-gray-100"></textarea>
                  </p>
                </div>
              </div>
            </div>
            <!-- 依頼したいこと -->


            <!-- 詳細 -->
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-white-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg--zinc-700 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">
                    詳細（必須）
                  </h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <textarea name="detail" v-model="form.detail" class="h-32 bg-gray-100"></textarea>
                  </p>
                </div>
              </div>
            </div>
            <!-- 詳細 -->


            <!-- 考えられる原因 -->
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-white-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg--zinc-700 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">
                    考えられる原因
                  </h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <textarea name="cause" v-model="form.cause" class="h-32 bg-gray-100"></textarea>
                  </p>
                </div>
              </div>
            </div>
            <!-- 考えられる原因 -->


            <!-- 試してみたこと・その他 -->
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-white-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg--zinc-700 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">
                    試してみたこと・その他
                  </h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <textarea name="other" v-model="form.other" class="h-32 bg-gray-100"></textarea>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 試してみたこと・その他 -->


          <!-- ボタン -->
          <button type="submit" class="flex mx-auto mt-5 text-white bg-emerald-400 border-0 py-2 px-8 focus:outline-none hover:bg-emerald-300 rounded text-lg">
            送信
          </button>
        </div>
      </section>
    </form>
  </div>
</template>