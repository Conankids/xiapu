<template>
  <div class="swiper__box">
    <swiper :options="swiperOption">
      <swiper-slide v-for="item in bannerData">
        <common-item
          :title="item.title"
          :url="item.url"
          :cover="item.cover"
        />
      </swiper-slide>
    </swiper>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
  </div>
</template>

<script>

  import CommonItem from '../components/common-item.vue'

  export default {
    data () {
      return {
        swiperOption: {
          prevButton: '.swiper-button-prev',
          nextButton: '.swiper-button-next',
          loop: true,
        },
        bannerData: [{
          title: '线下体验趴 - AQUOS夏普旷视系列电视',
          url: 'vv',
          cover: '/static/img/img-14@3x.9afe28c.jpg'
        }, {
          title: '线下体验趴 - AQUOS夏普旷视系列电视',
          url: 'dfb',
          cover: '/static/img/img-14@3x.9afe28c.jpg'
        }]
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
  .swiper-pagination-bullet {
    height: 16px !important;
    width: 16px !important;
  }

  .swiper__box {
    position: relative;
  }

  .swiper-button {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 16px * 2 !important;
    height: 32px * 2 !important;
    &.swiper-button-prev {

    }
    &.swiper-button-next {
      left: auto;
      right: 20px;
    }
  }
  .swiper-button-prev, .swiper-container-rtl .swiper-button-next{
    background-image: url(../style/public/icon-swiper-left.svg);
  }
  .swiper-button-next, .swiper-container-rtl .swiper-button-prev{
    background-image: url(../style/public/icon-swiper-right.svg);
  }
</style>
