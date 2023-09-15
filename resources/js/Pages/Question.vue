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
    件名（必須）<textarea name="title" v-model="form.title"></textarea>
    依頼したいこと（必須）<textarea name="requests" v-model="form.requests"></textarea>
    詳細<textarea name="detail" v-model="form.detail"></textarea>
    考えられる原因<textarea name="cause" v-model="form.cause"></textarea>
    試してみたこと・その他<textarea name="other" v-model="form.other"></textarea>

    <div><button type="submit">送信</button></div>
  </form>
  </div>
</template>