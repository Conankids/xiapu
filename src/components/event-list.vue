<template>
  <div class="event__list-wrap">
    <div class="event__list-item k-animate-2" v-for="item in event" :key="item.eventid">
      <a :href="item.url">
        <div class="event__img-wrap">
          <div class="event__img-box">
            <img :src="item.cover"/>
          </div>
          <div class="event__mask-cover"></div>
        </div>
        <div class="stream-bottom">
          <div class="stream-title">{{ item.title }}</div>
          <div class="stream-text">
            <span class="ft14"><em class="ft18 colfff mgr10">{{ item.follownum }}</em>人参与</span>
            <span :class="`ft14 fr mgt4`">{{ item.status.title }}</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</template>

<script>
  import $ from 'jquery'

  export default {
    data () {
      return {
        event: false
      }
    },
    created () {
      var _this = this
      $.get('http://www.jiguo.com/api/event/GetXiaPuEvent', function (replayData) {
        var event = []
        replayData.forEach((item) => {
          var status = {
            title: item.deadline_desc || ''
          }
          event.push({
            ...item,
            url: 'http://m.jiguo.com/mb/event/index/' + item.eventid + '.html',
            title: item.title,
            cover: `http://s1.jiguo.com/${item.fileid}/640?imageView2/1/w/${640}/h/${320}/q/100`,
            status: status
          })
        })
        _this.event = event
        _this.$nextTick(() => {
          window.hasAnimate = $('.k-animate:not(.into-k-animate),.k-animate-2:not(.into-k-animate)')
        })
      }, 'jsonp')
    },
    methods: {}
  }
</script>

<style lang="scss" scoped>

  @import "./../style/scss/include";
  .event__list-item {
    position: relative;
  }

  .event__img-box {
    width:px2rem( 750 );
    height:px2rem( 750/2 );
    overflow: hidden;
    img {
      width: 100%;
    }
  }

  .stream-bottom {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    padding:px2rem( 20 );
    padding-bottom:px2rem( 26 );
    color: #fff;
    .stream-title {
      height:px2rem( 60 );
      line-height:px2rem( 60 );
      font-size:px2rem( 36 );
      overflow: hidden;
    }
    .stream-text {
      color: #ccc;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
  }

  .event__mask-cover {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height:px2rem( 150 );
    background: linear-gradient(top, rgba(255, 255, 255, 0.02), rgba(35, 35, 35, 0.69));
  }

</style>
