<template>
  <div class="mask__box">
    <div class="video__item-box">
      <div class="video__item" v-for="item in video" @click="playVideo(item)">
        <iframe :src="item.url" class="iframe"></iframe>
        <div class="video__item-over"></div>
      </div>
    </div>
    <div class="video__item-mask" v-if="curr_url" @click="videoClose">
      <iframe :src="curr_url" class="iframe" :style="`height:${height}px`"></iframe>
      <div class="video__item-close" @click="videoClose">
        <img src="../style/images/icon-close@3x.png"/>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      video: {
        type: Array,
        default: function () {
          return [
            {
              url: 'http://player.youku.com/embed/XMjg2ODAxMzYyOA=='
            }, {
              url: 'http://player.youku.com/embed/XMjg5OTg1MDkyOA=='
            }, {
              url: 'http://player.youku.com/embed/XMjg2ODAwODU1Ng=='
            }, {
              url: 'http://v.qq.com/iframe/player.html?vid=e0540kzyfa0&auto=0'
            }
          ]
        }
      },
    },
    data () {
      return {
        curr_url: '',
        height: window.innerWidth * 2 / 3
      }
    },
    methods: {
      playVideo (item) {
        this.curr_url = item.url
      },
      videoClose () {
        this.curr_url = ''
      }
    }
  }
</script>

<style lang="less" rel="stylesheet/less" scoped>
  .iframe {
    border: none;
  }

  .video__item-box {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .video__item {
    width: 186px * 2;
    height: 102px * 2;
    margin-top: 6px;
    position: relative;

    .video__item-over {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
    }
  }

  .iframe {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
  }

  .video__item-mask {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 1);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 5;
  }

  .video__item-close {
    position: absolute;
    right: 20px;
    top: 20px;
    width: 40px;
    height: 40px;
    z-index: 5;
    padding: 20px;
    box-sizing: content-box;
    img {
      width: 100%;
      height: 100%;
    }
  }
</style>
