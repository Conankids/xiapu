<template>
  <div class="mask__box">
    <div class="video__item-box">
      <div class="video__item k-animate-2" v-for="item in video" @click="playVideo(item)">
        <iframe :src="item.url" class="iframe"></iframe>
        <div class="video__item-over">
          <img class="cover" :src="item.cover" />
          <img class="video" :src="`${require('../style/public/icon-video.svg')}`" />
        </div>
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
              url: 'http://player.youku.com/embed/XMjg2ODAxMzYyOA==',
              cover: require('../style/public/img-30@3x.jpg')
            }, {
              url: 'http://player.youku.com/embed/XMjg5OTg1MDkyOA==',
              cover: require('../style/public/img-31@3x.jpg')
            }, {
              url: 'http://player.youku.com/embed/XMjg2ODAwODU1Ng==',
              cover: require('../style/public/img-32@3x.jpg')
            }, {
              url: 'http://v.qq.com/iframe/player.html?vid=e0540kzyfa0&auto=0',
              cover: require('../style/public/img-33@3x.jpg')
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
        this.curr_url = item.url;
        ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
          window.addEventListener(item, this._preventDefault, {passive: false})
        })
      },
      videoClose () {
        this.curr_url = '';
        ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
          window.removeEventListener(item, this._preventDefault)
        })
      },
      _preventDefault (e) {
        e.preventDefault()
        e.stopPropagation()
        return false
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
    width: 372px;
    height: 372px * 2 / 3;
    margin-top: 6px;
    position: relative;

    .video__item-over {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      .cover{
        min-width: 100%;
        min-height: 100%;
        width: 100%;
        height: 100%;
        display: block;
      }
      .video{
        width: 60px;
        height: 100%;
        display: block;
        position: absolute;
        top:50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
      }
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
