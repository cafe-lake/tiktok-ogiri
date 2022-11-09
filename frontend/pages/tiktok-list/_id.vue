<template>
  <div>
    <div>選択した動画に大喜利するページ</div>
    {{ tiktokVideo }}
    <div><input v-model="ogiri" class="border" /></div>
    <button @click="onSubmitOgiri">投稿</button>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator'
import axios from 'axios'

@Component
export default class extends Vue {
  tiktokVideo = ''
  ogiri = ''

  mounted() {
    console.log('mounted')
    this.getData()
  }

  async getData() {
    const url = '/api/get-tiktok-video'
    const param = {
      id: this.$route.params.id,
    }
    const res = await axios.post(url, param)
    console.log(res)
    this.tiktokVideo = res.data.tiktokVideo
  }

  async onSubmitOgiri() {
    const url = '/api/post-ogiri'
    await axios.post(url)
    console.log('posted')
  }
}
</script>
