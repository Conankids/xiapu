<template>
  <div>
    <header-nav></header-nav>
    <div class="banner__box">
      <a href="javascript:;"><img src="../style/public/img-1@3x.jpg"/></a>
    </div>
    <common-title title="夏普双十一理想生活升级计划"/>
    <div>
      <common-item
        title="夏普电视"
        url="https://mall.jd.com/index-1000003257.html"
        :cover="`${require('../style/public/img-2@3x.jpg')}`"
      />
    </div>
    <div class="mgt4">
      <common-item
        title="夏普空气净化器"
        url="https://mall.jd.com/index-1000003200.html"
        :cover="`${require('../style/public/img-3@3x.jpg')}`"
      />
    </div>

    <div class="mgt4">
      <common-item
        title="夏普洗衣棒"
        url="https://sharp.tmall.com/search.htm?spm=a220m.1000858.1000725.7.3865a893siZLQz&user_number_id=2993567440&rn=910785fe7166b5d375015a9065ecb645&keyword=%CF%C4%C6%D5%CF%B4%D2%C2%B0%F4"
        :cover="`${require('../style/public/img-4@3x.jpg')}`"
        type="larg"
      />
    </div>
    <div class="mgt4">
      <common-item
        title="夏普冰箱"
        url="https://mall.jd.com/index-1000014146.html"
        :cover="`${require('../style/public/img-5@3x.jpg')}`"
        type="larg"
      />
    </div>
    <div class="mgt4">
      <common-item
        title="夏普无水锅"
        url="javascript:;"
        :cover="`${require('../style/public/img-6@3x.jpg')}`"
        type="larg"
      />
    </div>
    <div class="mgt4">
      <common-item
        title="夏普洗衣机"
        url="https://mall.jd.com/view_search-606768-4353456-1-0-20-1.html"
        :cover="`${require('../style/public/img-7@3x.jpg')}`"
        type="larg"
      />
    </div>
    <div class="mgt4">
      <common-img
        url="javascript:;"
        :cover="`${require('../style/public/img-8@3x.jpg')}`"
      />
    </div>

    <div class="mgt4">
      <common-title title="夏普双十一爆款产品免费体验"/>
      <common-img
        url="javascript:;"
        :cover="`${require('../style/public/img-40@3x.jpg')}`"
      />
    </div>

    <div class="index__new-product">
      <common-title title="夏普热门新品"/>
      <common-xinpin/>
    </div>

    <div class="index__blog-tyd">
      <common-title title="极果首席体验师热门体验报告"/>
      <div class="index__four-pox">
        <common-blog/>
      </div>
    </div>

    <div class="index__blog-tyd">
      <common-title title="夏普电视体验视频"/>
      <div class="index__four-pox">
        <common-my-video/>
      </div>
    </div>

    <div class="index__event-hg">
      <common-title title="夏普电视往期爆品试用活动回顾"/>
      <div class="index__footer-swiper">
        <common-swiper-2 />
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
  import CommonBlog from '../components/common-blog.vue'
  import CommonXinpin from '../components/common-xinpin.vue'
  import CommonSwiper2 from '../components/common-swiper-2.vue'

  export default {
    components: {
      HeaderNav,
      CommonTitle,
      CommonItem,
      CommonImg,
      CommonFooter,
      CommonMyVideo,
      CommonFooterSwiper,
      CommonBlog,
      CommonXinpin,
      CommonSwiper2
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

  .index__event-hg-cover {
    height: 183px * 2;
    overflow: hidden;
    img {
      height: 100%;
      width: 100%;
    }
  }
</style>
