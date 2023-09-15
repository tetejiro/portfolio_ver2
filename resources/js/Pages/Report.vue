<script setup>
import { reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'


let props = defineProps(['id'])

let form = reactive({
  user_id: usePage().props.auth.user.id,
  target_user_id: props.id,
  is_question: false,
  title: null,
  detail: null,
  other: null,
  rsvp: null
})

let send = () => {
  router.post(route('sendMail'), form)
}

</script>

<template>
  <div>
    <form @submit.prevent="send">
      件名（必須）<textarea name="title" v-model="form.title"></textarea>
      詳細（必須）<textarea name="detail" v-model="form.detail"></textarea>
      その他<textarea name="other" v-model="form.other"></textarea>
      返答要・不要（必須）
      <label>返信必要<input type="radio" name="rsvp" v-model="form.rsvp" value=1></label>
      <label>分新不要<input type="radio" name="rsvp" v-model="form.rsvp" value=0></label>
      <div><button type="submit">送信</button></div>
    </form>
  </div>
</template>