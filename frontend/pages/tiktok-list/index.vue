<template>
  <div>
    <div>大喜利するTikTok動画を選ぶ</div>
    <div>
      <div v-for="n in 5" :key="n">
        <div>
          <NuxtLink to="/tiktok-list/{n}"
            >ここにAPIから取得した動画のサムネを見せるとか？</NuxtLink
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'IndexPage',
})
</script>
