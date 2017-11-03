<template>
  <div class="swiper__box">
    <swiper :options="swiperOption">
      <swiper-slide v-for="item in bannerData" :key="item.url">
        <common-item
          :title="item.title"
          :url="item.url"
          :cover="item.cover"
          class="swiper-slide"
        />
      </swiper-slide>
      <!--<div class="swiper-pagination" slot="pagination"></div>-->
    </swiper>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
  </div>
</template>

<script>
  import Vue from 'vue'
  import VueAwesomeSwiper from 'vue-awesome-swiper'
  Vue.use(VueAwesomeSwiper)

  import CommonItem from '../components/common-item.vue'
  import SwiperImgItem from '../style/public/img-15@3x.jpg'


  export default {
    props: {
      bannerData: {
        type: Array,
        default: function () {
          return [{
            'url': 'http://www.jiguo.com/event/index/1381.html',
            'cover': 'http://s1.jiguo.com/beecb74c-05c5-45e0-94c3-79b257c43ea7/640?imageView2/1/w/640/h/400/q/100',
            'title':'夏普旷视系列电视'
          }, {
            'url': 'http://www.jiguo.com/event/index/985.html',
            'cover': 'http://s1.jiguo.com/26ad56a4-a75d-4ba3-8253-d9f1ed38dcc6/640?imageView2/1/w/640/h/400/q/100',
            'title':'夏普50/60吋互联网电视'
          }]
        }
      },
      swiperOption: {
        type: Object,
        default: function () {
          return {
            prevButton: '.swiper-button-prev',
            nextButton: '.swiper-button-next',
//            pagination: '.swiper-pagination',
//            paginationClickable: true,
            loop: false,
          }
        }
      }
    },
    components: {
      CommonItem
    },
    mounted () {

    }
  }
</script>

<style lang="less" rel="stylesheet/less">
  @import "../style/less/_mixs.less";
  .swiper-pagination-bullet {
    height: 16 /@baseFontSize-v2 !important;
    width: 16 /@baseFontSize-v2 !important;
  }

  .swiper__box {
    position: relative;
  }

  .swiper-button {
    position: absolute;
    left: 20 /@baseFontSize-v2;
    top: 50%;
    transform: translateY(-50%);
    width: 16 * 2 /@baseFontSize-v2 !important;
    height: 32 * 2 /@baseFontSize-v2 !important;
    &.disabled {
      opacity: 0.5;
    }
    &.swiper-button-prev {

    }
    &.swiper-button-next {
      left: auto;
      right: 20 /@baseFontSize-v2;
    }
  }

  .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    background-image: url(../style/public/icon-swiper-left.svg) !important;
  }

  .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    background-image: url(../style/public/icon-swiper-right.svg) !important;
  }

  .swiper-slide img {
    width: 100%;
  }
  .mask__cover{

  }
</style>
