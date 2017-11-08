<template>
  <div class="content-wrap">
    <loading v-show="show"/>
    <router-view></router-view>
  </div>
</template>

<script>
  import { mapState } from 'vuex'
  import $ from 'jquery'
  import tool from './tool/throttle'

  export default {
    computed: {
      ...mapState([
        'show'
      ])
    },
    mounted () {
      window.hasAnimate = $('.k-animate:not(.into-k-animate),.k-animate-2:not(.into-k-animate)')
      var winHeight = $(window).height()
      var debounce = tool.debounce(function () {
        var scrollTop = $(window).scrollTop()
        window.hasAnimate.filter(function () {
          if ($(this).hasClass('into-k-animate no-animate')) {
            return false
          }
          if (scrollTop + winHeight > $(this).offset().top) {
            if ($(this).hasClass('no-all-animate')) {
              return false
            }
            $(this).addClass('into-k-animate')
            return false
          }
          return true
        })
      }, 30, 50)
      $(window).off('scroll.into.animate').on('scroll.into.animate', function () {
        debounce()
      }).trigger('scroll.into.animate')
    }
  }
</script>

<style lang="scss">
  $IMAGES_PATH: './style/images/';
  @import "./style/scss/app.scss";

  .content-wrap {
    font-weight: 300;
    font-family: "SF Pro SC", "HanHei SC", "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Apple Legacy Chevron", "PingFang SC", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
  }

  .k-animate {
    transition: all 1s;
    transform: translateY(px2rem(-50));
    opacity: 0;
  }

  .k-animate-2 {
    transition: all 1s;
    transform: translateY(px2rem(50));
    opacity: 0;
  }

  .into-k-animate {
    will-change: transform;
    transform: translateY(0);
    opacity: 1;
  }

  .swiper-button-prev, .swiper-button-next {
    position: absolute;
    top: 50%;
    width: px2rem(27) !important;
    height: px2rem(44) !important;
    margin-top: px2rem(-22) !important;
    z-index: 10;
    cursor: pointer;
    -moz-background-size: px2rem(27) px2rem(44) !important;
    -webkit-background-size: px2rem(27) px2rem(44) !important;
    background-size: px2rem(27) px2rem(44) !important;
    background-position: center;
    background-repeat: no-repeat;
  }
</style>
