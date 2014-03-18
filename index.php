<?php $title="京东兴达活动房"; include "include/header.php"?>
<?php include "include/nav.php"?>


<!--== Carousel ==-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/images/slide1.png">
    </div>
    <div class="item">
      <img src="/images/slide2.png">
    </div>
    <div class="item">
      <img src="/images/slide3.png">
    </div>
  </div>
</div>
<!--== Carousel End ==-->

<!--== Content ==-->
<div class="row">
  <div class="col-xs-3">
    <div class="row myPanels">
       <div class="col-xs-12 leftPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">
                <span class="glyphicon glyphicon-expand"></span>
                <a href="#">新闻中心</a>
              </h3>
          </div>
          <div class="panel-body">
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">废旧集装箱的新应用</a>
              </h6>
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">集装箱活动房价格指数趋势</a>
              </h6>
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">集装箱活动房的优点</a>
              </h6>
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">活动房产业发展呈多元化趋势</a>
              </h6>
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">住人集装箱与活动房安全性比较</a>
              </h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row myPanels">
      <div class="col-xs-12 leftPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">
                <span class="glyphicon glyphicon-expand"></span>
                <a href="#">联系我们</a>
              </h3>
          </div>
          <div class="panel-body">
              <h6>联系人：张先生</h6>
              <h6>电 话：010-61419788</h6>
              <h6>传 真：010-61419788</h6>
              <h6>手 机：13366576929</h6>
              <h6>地 址：北京市顺义区杨镇下坡村，顺平路与木燕路交汇口，停车场东侧</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-9">
    <div class="row myPanels">
      <div class="col-xs-5 midPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-expand"></span>
              <a href="#">关于我们</a>
            </h3>
          </div>
          <div class="panel-body">
            <p>北京京东兴达集装箱活动房坐落于顺义区顺平路与木燕路交汇口，是京东地区最专业生产制造集装箱及活动房的。
京东兴达集装箱活动房专业从事箱式活动房的设计、生产、销售以及租赁一条龙服务，致力于为客户提供一个专业、安全、性价比高的购买及租赁平台。</p>
          </div>
        </div>
      </div>
      <div class="col-xs-7 rightPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-expand"></span>
              <a href="#">经典案例</a>
            </h3>
          </div>
          <div id="scrollbox" class="panel-body scroll-img">
            <ul>
                <li><a href="#"><img src="/images/box1.jpg"></a></li>
                <li><a href="#"><img src="/images/box2.jpg"></a></li>
                <li><a href="#"><img src="/images/box3.jpg"></a></li>
                <li><a href="#"><img src="/images/box4.jpg"></a></li>
                <li><a href="#"><img src="/images/box5.jpg"></a></li>
                <li><a href="#"><img src="/images/box6.jpg"></a></li>
                <li><a href="#"><img src="/images/box7.jpg"></a></li>
                <li><a href="#"><img src="/images/box8.jpg"></a></li>
            </ul>
          </div>
          <script src="/js/jquery.scrollbox.js"></script>
          <script>
              $(function() {
                  $('#scrollbox').scrollbox({
                        direction: 'h',
                        distance: 134,
                  });
              });
          </script>
        </div>
      </div>
    </div>
    <div class="row myPanels">
      <div class="col-xs-12 rightPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-expand"></span>
              <a href="#">产品展示</a>
            </h3>
          </div>
          <div class="panel-body autoHeight">
            <img class="img-thumbnail" src="/images/1.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/2.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/3.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/4.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/5.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/6.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/7.jpg" style="width: 167px; height: 167px;">
            <img class="img-thumbnail" src="/images/8.jpg" style="width: 167px; height: 167px;">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Content ==-->


<?php include "include/footer.php"?>
