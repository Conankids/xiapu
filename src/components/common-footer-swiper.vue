<template>
  <div class="swiper__box">
    <swiper :options="swiperOption">
      <swiper-slide v-for="item in bannerData">
        <common-item
          :title="item.title"
          :url="item.url"
          :cover="item.cover"
          class="swiper-slide"
        />
      </swiper-slide>
    </swiper>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
  </div>
</template>

<script>

  import CommonItem from '../components/common-item.vue'
  import SwiperImgItem from '../style/public/img-15@3x.jpg'

  import Cover47853 from '../style/footer_h/47853.jpg'
  import Cover47857 from '../style/footer_h/47857.jpg'
  import Cover48121 from '../style/footer_h/48121.jpg'
  import Cover48025 from '../style/footer_h/48025.jpg'
  import Cover47775 from '../style/footer_h/47775.jpg'
  import Cover47944 from '../style/footer_h/47944.jpg'
  import Cover47777 from '../style/footer_h/47777.jpg'
  import Cover47705 from '../style/footer_h/47705.jpg'
  import Cover47697 from '../style/footer_h/47697.jpg'
  import Cover48014 from '../style/footer_h/48014.jpg'
  import Cover47806 from '../style/footer_h/47806.jpg'
  import Cover47676 from '../style/footer_h/47676.jpg'
  import Cover47862 from '../style/footer_h/47862.jpg'
  import Cover47751 from '../style/footer_h/47751.jpg'
  import Cover47946 from '../style/footer_h/47946.jpg'
  import Cover47821 from '../style/footer_h/47821.jpg'
  import Cover47787 from '../style/footer_h/47787.jpg'
  import Cover48354 from '../style/footer_h/48354.jpg'
  import Cover47936 from '../style/footer_h/47936.jpg'
  import Cover47769 from '../style/footer_h/47769.jpg'
  import Cover47723 from '../style/footer_h/47723.jpg'
  import Cover47926 from '../style/footer_h/47926.jpg'
  import Cover47752 from '../style/footer_h/47752.jpg'
  import Cover47901 from '../style/footer_h/47901.jpg'
  import Cover47860 from '../style/footer_h/47860.jpg'
  import Cover47753 from '../style/footer_h/47753.jpg'
  import Cover47942 from '../style/footer_h/47942.jpg'
  import Cover47664 from '../style/footer_h/47664.jpg'
  import Cover47691 from '../style/footer_h/47691.jpg'
  import Cover47867 from '../style/footer_h/47867.jpg'
  import Cover47859 from '../style/footer_h/47859.jpg'
  import Cover47947 from '../style/footer_h/47947.jpg'
  import Cover47761 from '../style/footer_h/47761.jpg'

  export default {
    props: {
      bannerData: {
        type: Array,
        default: function () {
          return [{
            'title': '\u4e0d\u4e00\u6837\u7684\u7ebf\u4e0b\u6d3b\u52a8---AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47853.html',
            'cover': Cover47853
          }, {
            'title': '\u590f\u666e\u65f7\u89c6AQUOS\u7535\u89c6\uff0c\u4f60\u503c\u5f97\u4e00\u770b\uff01\uff01',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47857.html',
            'cover': Cover47857
          }, {
            'title': '\u4e00\u53f0\u7535\u89c6\u5c31\u662f\u4e00\u5957\u5bb6\u5ead\u5f71\u9662 | AQUOS \u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u65f6\u5c1a\u4f53\u9a8c\u8db4\u4f53\u9a8c',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/48121.html',
            'cover': Cover48121
          }, {
            'title': '\u6781\u679c\u7ebf\u4e0b\u722c\u68af\u4e4b\u590f\u666e\u65f7\u4e16\u7cfb\u5217\u7535\u89c6\u65f6\u5c1a\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/48025.html',
            'cover': Cover48025
          }, {
            'title': '\u738b\u8005\u5f52\u6765',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47775.html',
            'cover': Cover47775
          }, {
            'title': '\u6781\u679c\u7ebf\u4e0b\u8db4\u2014\u2014\u6b22\u4e50\u591a~AQUOS\u590f\u666e\u65f7\u89c6\u65b0\u54c1\u53d1\u5e03\u4f1a',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47944.html',
            'cover': Cover47944
          }, {
            'title': '\u5c3d\u4eab\u65f6\u5c1a\u3001\u8ffd\u5fc6\u8fc7\u53bb\u2014\u2014\u6781\u679c&AQUOS\u590f\u666e\u65f7\u4e16\u7cfb\u5217\u7535\u89c6\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47777.html',
            'cover': Cover47777
          }, {
            'title': '\u88ab\u6781\u81f4\u5916\u5f62\u5438\u5f15\uff0c\u88ab\u8272\u5f69\u548c\u97f3\u6548\u6253\u52a8\uff0c\u7535\u89c6\u5c31\u4e70\u8fd9\u6837\u7684',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47705.html',
            'cover': Cover47705
          }, {
            'title': '\u7f8e\u98df\u3001\u7f8e\u5973\u3001\u597d\u4ea7\u54c1\u4e00\u4e2a\u90fd\u4e0d\u80fd\u5c11\u2014\u2014\u8bb0\u6781\u679c\u9996\u6b21\u7ebf\u4e0b\u65f6\u5c1a\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47697.html',
            'cover': Cover47697
          }, {
            'title': '\u6781\u679c\u7ebf\u4e0b\u8db4\u2014\u6c47\u96c6\u591a\u4f4d\u5927\u5496 \u5e26\u4f60\u4f53\u9a8c\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u65b0\u54c1',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/48014.html',
            'cover': Cover48014
          }, {
            'title': '\u8eab\u4e34\u5176\u5883\u3001\u5b8c\u7f8e\u9082\u9005\u3002AQUOS\u590f\u666e\u65f7\u89c6S60\u7ebf\u4e0b\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47806.html',
            'cover': Cover47806
          }, {
            'title': '\u4f60\u7684\u5bb6\u503c\u5f97\u4e00\u53f0\u66f4\u597d\u7684\u7535\u89c6\uff0cAQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u6781\u679c\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47676.html',
            'cover': Cover47676
          }, {
            'title': '\u805a\u4f1a\uff0c\u89c1\u8bc1\u738b\u8005\u5f52\u6765',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47862.html',
            'cover': Cover47862
          }, {
            'title': '\u539f\u6765\u7535\u89c6\u591a\u5f97\u662f\u4f60\u4e0d\u77e5\u9053\u7684\u529f\u80fd\uff01AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47751.html',
            'cover': Cover47751
          }, {
            'title': '\u6781\u679c\u7ebf\u4e0b\u7b2c\u4e00\u8db4----AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47946.html',
            'cover': Cover47946
          }, {
            'title': '\u6781\u679c\u7684\u9996\u8db4\u2014\u2014\u679c\u771f\u65f7\u4e16\u4e0d\u6846\u89c6',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47821.html',
            'cover': Cover47821
          }, {
            'title': '\u96be\u5f97\u7684\u7ebf\u4e0b\u4f53\u9a8c\uff0c\u5404\u8def\u5927\u795e\u548c\u6781\u679c\u5c0f\u7f16\u73b0\u8eab',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47787.html',
            'cover': Cover47787
          }, {
            'title': 'AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u4f53\u9a8c\u8db4  \u4e00\u4e2a\u7f8e\u597d\u7684\u5468\u672b',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/48354.html',
            'cover': Cover48354
          }, {
            'title': '\u91cd\u8fd4\u90a3\u4e9b\u5e74\u2014\u2014\u6781\u679cAQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u4f53\u9a8c\u8db4\u56de\u987e',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47936.html',
            'cover': Cover47936
          }, {
            'title': '\u6781\u679c X AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47769.html',
            'cover': Cover47769
          }, {
            'title': 'AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6VS\u6781\u679c\uff0c\u5317\u4eac\u6781\u5ba2\u7ebf\u4e0bPARTY\uff08\u89c6\u9891\u82b1\u7d6e\uff09',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47723.html',
            'cover': Cover47723
          }, {
            'title': '\u6211\u4e0e\u6781\u679c\u541b\u7684\u65f7\u4e16\u4e4b\u7ea6',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47926.html',
            'cover': Cover47926
          }, {
            'title': '\u6211\u7684\u6781\u679c\u65f6\u5c1a\u4f53\u9a8c\u4e4b\u65c5',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47752.html',
            'cover': Cover47752
          }, {
            'title': '\u6781\u679c\u7ec4\u5c40\u7535\u89c6\u8db4 AQUOS\u590f\u666e\u5e26\u4f60\u4f53\u9a8c\u65f7\u4e16\u4e0d\u6846\u89c6',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47901.html',
            'cover': Cover47901
          }, {
            'title': '\u4e0e\u60c5\u6000\u76f8\u5173\uff1a\u90a3\u4e9b\u5e74\u6211\u4eec\u8ffd\u8fc7\u7684\u7535\u89c6\u5267 - AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47860.html',
            'cover': Cover47860
          }, {
            'title': '\u5168\u9762\u6ee1\u8db3\u5bb6\u7528\u53ca\u4e13\u4e1a\u9700\u6c42\u7684\u65d7\u8230\u7535\u89c6\u2014\u2014AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u6781\u679c\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47753.html',
            'cover': Cover47753
          }, {
            'title': '\u65f7\u4e16\u4e4b\u4f5c\uff0c\u5171\u4eab\u5f71\u97f3\u9955\u992e\u76db\u5bb4\uff01',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47942.html',
            'cover': Cover47942
          }, {
            'title': '\u6536\u83b7\u591a\uff1aAQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u6d3b\u52a8\uff0c\u5e72\u8d27\u548c\u7f8e\u5973\u4e00\u6837\u90fd\u4e0d\u5c11',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47664.html',
            'cover': Cover47664
          }, {
            'title': '\u6781\u679cAQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u65f6\u5c1a\u4f53\u9a8c\u8db4\uff0c\u7ed9\u4f60\u7535\u89c6\u60f3\u4e0d\u5230\u7684\u8584',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47691.html',
            'cover': Cover47691
          }, {
            'title': '\u6211\u6765\u5e1d\u90fd\u770b\u7535\u89c6----AQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u6781\u679c\u5927\u7f51\u7ebf\u4e0b\u9762\u57fa\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47867.html',
            'cover': Cover47867
          }, {
            'title': '\u4e00\u4e2a\u6ce8\u5b9a\u4e0d\u51e1\u7684\u5348\u540e\uff0c\u8df3\u51fa\u8fb9\u201c\u6846\u201d\u770b\u201c\u89c6\u201d\u754c\uff0c\u6781\u679cAQUOS\u590f\u666e\u65f7\u89c6\u7cfb\u5217\u7535\u89c6\u7ebf\u4e0b\u4f53\u9a8c\u6b22\u805a\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47859.html',
            'cover': Cover47859
          }, {
            'title': '\u7ec8\u4e8e\u7b49\u5230\u4f60\uff0c\u4e00\u573a\u4e45\u7b49\u7684\u7ebf\u4e0b\u4f53\u9a8c\u8db4',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47947.html',
            'cover': Cover47947
          }, {
            'title': '\u65f6\u5c1a\u4f53\u9a8c\u8db4\u55e8\u5230\u7206\uff01\u73af\u7403\u5c0f\u59d0\u52a0\u7279\u6797\u6012\u603c\u6e23\u7535\u89c6 | \u6781\u679c x \u590f\u666e',
            'url': 'http:\/\/www.jiguo.com\/article\/article\/47761.html',
            'cover': Cover47761
          }]
        }
      },
      swiperOption: {
        type: Object,
        default: function () {
          return {
            prevButton: '.swiper-button-prev',
            nextButton: '.swiper-button-next',
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
    &.disabled {
      opacity: 0.5;
    }
    &.swiper-button-prev {

    }
    &.swiper-button-next {
      left: auto;
      right: 20px;
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
