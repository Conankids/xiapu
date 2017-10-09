<template>
  <div>
    <header-nav></header-nav>
    <div class="banner__box">
      <img src="../style/public/img-1@3x.jpg"/>
    </div>
    <common-title title="夏普双十一理想生活升级计划"/>
    <div>
      <common-item
        title="夏普电视"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-2@3x.jpg')}`"
      />
    </div>
    <div class="mgt4">
      <common-item
        title="夏普空气净化器"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-3@3x.jpg')}`"
      />
    </div>

    <div class="index__four-pox">
      <common-item
        title="夏普洗衣棒"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-4@3x.jpg')}`"
        type="small"
      />
      <common-item
        title="夏普冰箱"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-5@3x.jpg')}`"
        type="small"
      />
      <common-item
        title="夏普无水锅"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-6@3x.jpg')}`"
        type="small"
      />
      <common-item
        title="夏普洗衣机"
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-7@3x.jpg')}`"
        type="small"
      />
    </div>
    <div class="mgt4">
      <common-img
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-8@3x.jpg')}`"
      />
    </div>

    <common-title title="夏普双十一爆款产品免费体验"/>

    <div class="mgt4">
      <common-img
        url="http://m.jiguo.com/"
        :cover="`${require('../style/public/img-9@3x.jpg')}`"
      />
    </div>

    <div class="index__new-product">
      <common-title title="夏普热门新品"/>
      <div class="index__four-pox-type-2">
        <div class="index__four-item">
          <img src="../style/public/img-10@3x.jpg"/>
        </div>
        <div class="index__four-item">
          <img src="../style/public/img-11@3x.jpg"/>
        </div>
        <div class="index__four-item">
          <img src="../style/public/img-12@3x.jpg"/>
        </div>
        <div class="index__four-item">
          <img src="../style/public/img-13@3x.jpg"/>
        </div>
      </div>
    </div>

    <div class="index__blog-tyd">
      <common-title title="极果首席体验师热门体验报告"/>
      <div class="index__four-pox">
        <common-my-video />
      </div>
    </div>

    <div class="index__event-hg">
      <common-title title="夏普电视往期爆品试用活动回顾"/>
      <div class="index__event-hg-cover">
        <img src="../style/public/img-14@3x.jpg"/>
      </div>
    </div>

    <div class="index__event-swiper">
      <common-title title="夏普电视时尚体验趴回顾"/>
      <div class="index__footer-swiper">
        <common-footer-swiper/>
      </div>
    </div>

    <common-footer></common-footer>
  </div>
</template>

<script>

  import HeaderNav from '../components/header-nav.vue'
  import CommonTitle from '../components/common-title.vue'
  import CommonItem from '../components/common-item.vue'
  import CommonImg from '../components/common-img.vue'
  import CommonFooter from '../components/common-footer.vue'
  import CommonFooterSwiper from '../components/common-footer-swiper.vue'
  import CommonMyVideo from '../components/common-my-video.vue'

  export default {
    components: {
      HeaderNav,
      CommonTitle,
      CommonItem,
      CommonImg,
      CommonFooter,
      CommonMyVideo,
      CommonFooterSwiper
    }
  }
</script>

<style lang="less" rel="stylesheet/less">
  .banner__box {
    height: 272px * 2;
    img {
      height: 100%
    }
  }

  .index__four-pox {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    > div {
      margin-top: 8px;
    }
  }

  .index__four-pox-type-2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    > div {
      margin-top: 20px;
    }
    .index__four-item {
      width: 182px * 2;
      img {
        width: 100%;
      }
    }
  }

  .index__event-hg-cover {
    height: 183px * 2;
    overflow: hidden;
    img {
      height: 100%;
      width: 100%;
    }
  }
</style>
