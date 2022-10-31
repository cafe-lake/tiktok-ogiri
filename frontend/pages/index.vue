<template>
  <div>
    <div class="text-center mb-4 font-bold">TikTok大喜利</div>
    <div class="text-center mb-4">
      <button><NuxtLink to="/ranking">ランキングを見る</NuxtLink></button>
    </div>
    <div class="text-center mb-4">
      <button>
        <NuxtLink to="/tiktok-list"
          >大喜利するTikTok動画を一覧から選ぶ</NuxtLink
        >
      </button>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'IndexPage',
})
</script>
