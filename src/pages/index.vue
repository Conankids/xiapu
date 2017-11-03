<template>
  <div style="background-color: #fff;" id="index">
    <header-nav class="element-bg"></header-nav>
    <div class="banner__box k-animate element-bg">
      <a href="javascript:;"><img :src="headerBanner"/></a>
    </div>
    <div class="k-animate-2 element-bg" ref="element-body" style="overflow: hidden">
      <div class="k-animate-2" id="sjjh">
        <common-title title="夏普双十一理想生活升级计划"/>
        <common-item
          title="夏普电视"
          url="https://mall.jd.com/index-1000003257.html"
          :cover="`${require('../style/public/img-2@3x.jpg')}`"
        />
      </div>
      <!--<div class="mgt4 k-animate-2">-->
        <!--<common-item-->
          <!--title="夏普空气净化器"-->
          <!--url="https://mall.jd.com/index-628105.html"-->
          <!--:cover="`${require('../style/public/img-3@3x.jpg')}`"-->
        <!--/>-->
      <!--</div>-->
      <div class="mgt4 k-animate-2">
        <common-item
          title="夏普冰箱"
          url="https://mall.jd.com/index-628105.html"
          :cover="`${require('../style/public/img-5@3x.jpg')}`"
          type="larg"
        />
      </div>
      <div class="mgt4 k-animate-2">
        <common-item
          title="夏普洗衣机"
          url="https://mall.jd.com/index-628105.html"
          :cover="`${require('../style/public/img-7@3x.jpg')}`"
          type="larg"
        />
      </div>
      <div class="mgt4 k-animate-2">
        <common-img
          url="javascript:;"
          :cover="`${require('../style/public/img-60@3x.jpg')}`"
        />
      </div>

      <div class="mgt4" id="sqty">
        <common-title title="夏普双十一爆款产品免费体验"/>
        <event-list />
      </div>

      <div class="index__new-product k-animate-2" id="rmxp">
        <common-title title="夏普热门新品"/>
        <common-xinpin/>
      </div>

      <div class="index__blog-tyd k-animate-2" id="tybg">
        <common-title title="极果首席体验师热门体验报告"/>
        <div class="index__four-pox">
          <common-blog/>
        </div>
      </div>

      <div class="index__blog-tyd" id="tysp">
        <common-title title="夏普电视体验视频" class="k-animate-2"/>
        <div class="index__four-pox">
          <common-my-video/>
        </div>
      </div>

      <div class="index__event-hg k-animate-2" id="hdhg">
        <common-title title="夏普电视往期爆品试用活动回顾"/>
        <div class="index__footer-swiper">
          <common-swiper-2/>
        </div>
      </div>

      <div class="index__event-swiper k-animate-2">
        <common-title title="夏普电视时尚体验趴回顾"/>
        <div class="index__footer-swiper">
          <common-footer-swiper/>
        </div>
      </div>

      <common-footer></common-footer>
    </div>
  </div>
</template>

<script>

  import $ from 'jquery'
  import { mapActions } from 'vuex'
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
  import headerBanner from '../style/public/img-1@3x.jpg'
  import EventList from '../components/event-list.vue'

  export default {
    data () {
      return {
        headerBanner
      }
    },
    created () {
      var img = new Image()
      img.onload = () => {
        this.hidePageLoading()
        $(window).on('scroll', () => {
          if( !$(this.$refs['element-body']).hasClass('k-animate-2') ){
            return;
          }
          setTimeout(()=>{
            $(this.$refs['element-body']).removeClass('k-animate-2').removeClass('into-k-animate').addClass('no-animate').addClass('no-all-animate')
          },500)
        })
      }
      img.src = headerBanner
    },
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
      CommonSwiper2,
      EventList
    },
    methods: {
      ...mapActions([
        'hidePageLoading'
      ])
    }
  }
</script>

<style lang="less" rel="stylesheet/less">
  @import "./../style/less/_mixs.less";
  .element-bg {
    background-color: #F0EAE8;
  }

  .banner__box {
    width: 100%;
    img {
      width: 100%
    }
  }

  .index__four-pox {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    > div {
      margin-top: 8 /@baseFontSize-v2;
    }
  }

  .index__event-hg-cover {
    height: 183 * 2 /@baseFontSize-v2;
    overflow: hidden;
    img {
      height: 100%;
      width: 100%;
    }
  }
</style>
