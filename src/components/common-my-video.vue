<style lang="less">
  .user__tys-show-modal-enter-active, .user__tys-show-modal-leave-active {
    transition: all .3s;
  }

  .user__tys-show-modal-enter, .user__tys-show-modal-leave-active {
    opacity: 0;
    transform: scale(1.5);
  }
</style>
<template>
  <div class="mask__box">
    <div class="video__item-box">
      <div class="video__item k-animate-2" v-for="item in video" @click="playVideo(item)">
        <iframe :src="item.url" class="iframe"></iframe>
        <div class="video__item-over">
          <img class="cover" :src="item.cover"/>
          <img class="video" :src="`${require('../style/public/icon-video.svg')}`"/>
          <div class="title">{{ item.title }}</div>
        </div>
      </div>
    </div>
    <transition name="user__tys-show-modal">
      <div class="video__item-mask" v-if="curr_url" @click="videoClose">
        <iframe :src="curr_url" class="iframe" :style="`height:${height}px`"></iframe>
        <div class="video__item-close" @click="videoClose">
          <img src="../style/images/icon-close@3x.png"/>
        </div>
        <div class="show-title">{{ curr_title }}</div>
      </div>
    </transition>
  </div>
</template>

<script>
  import $ from 'jquery'

  export default {
    props: {
      video: {
        type: Array,
        default: function () {
          return [
            {
              url: 'http://v.qq.com/iframe/player.html?vid=x0566c1wlw2&auto=0',
              cover: require('../style/public/img-71@3x.jpg'),
              title: 'AQUOS夏普旷视S60'
            }, {
              url: 'http://v.qq.com/iframe/player.html?vid=k0567c1i56m&auto=0',
              cover: require('../style/public/img-72@3x.jpg'),
              title: 'iPhone那么薄的电视'
            }, {
              url: 'http://v.qq.com/iframe/player.html?vid=z0566aq8fev&auto=0',
              cover: require('../style/public/img-73@3x.jpg'),
              title: '60英寸超窄边框电视'
            }, {
              url: 'http://v.qq.com/iframe/player.html?vid=e0540kzyfa0&auto=0',
              cover: require('../style/public/img-74@3x.jpg'),
              title: '极果夏普时尚体验趴'
            }
          ]
        }
      },
    },
    data () {
      return {
        curr_url: '',
        height: window.innerWidth * 2 / 3,
        curr_title: ''
      }
    },
    watch: {
      curr_url (newVal) {
        if (newVal) {
          ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
            window.addEventListener(item, this._preventDefault, {passive: false})
          })
          $(window).data('data-tempscrollTop', $(window).scrollTop())
          $(window).scrollTop(0)
        } else {
          ['mousewheel', 'DOMMouseScroll', 'touchmove'].forEach((item) => {
            window.removeEventListener(item, this._preventDefault)
          })
          $(window).scrollTop($(window).data('data-tempscrollTop') || 0)
        }
      }
    },
    methods: {
      playVideo (item) {
        this.curr_url = item.url
        this.curr_title = item.title

      },
      videoClose () {
        this.curr_url = ''
        this.curr_title = ''
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
  @import "../style/less/_mixs.less";

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
    width: 372 /@baseFontSize-v2;
    height: 372 * 2 / 3 /@baseFontSize-v2;
    margin-top: 6 /@baseFontSize-v2;
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
      .cover {
        min-width: 100%;
        min-height: 100%;
        width: 100%;
        height: 100%;
        display: block;
      }
      .video {
        width: 60 /@baseFontSize-v2;
        height: 100%;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
      }
    }
    .title {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      color: #fff;
      text-align: center;
      background: rgba(0, 0, 0, 0.5);
      font-size: 28 /@baseFontSize-v2;
      line-height: 50 /@baseFontSize-v2;
      height: 50 /@baseFontSize-v2;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
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

    .show-title {
      position: absolute;
      left: 24 /@baseFontSize-v2;
      top: 45 /@baseFontSize-v2;
      color: #fff;
      font-size: 28 /@baseFontSize-v2;
    }
  }

  .video__item-close {
    position: absolute;
    right: 20 /@baseFontSize-v2;
    top: 20 /@baseFontSize-v2;
    width: 40 /@baseFontSize-v2;
    height: 40 /@baseFontSize-v2;
    z-index: 5;
    padding: 20 /@baseFontSize-v2;
    box-sizing: content-box;
    img {
      width: 100%;
      height: 100%;
      display: block;
    }
  }
</style>
