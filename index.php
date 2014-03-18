<?php $title="京东兴达集装箱活动房"; include "include/header.php"?>

<?php include "include/nav.php"?>

<?php include "include/carousel.php"?>

<div class="row">
  <div class="col-xs-3">
    <?php include "include/sider1.php"?>
  </div>
  <div class="col-xs-9">
    <!--== Content ==-->
    <div class="row myPanels">
      <div id="aboutPanel" class="col-xs-5 midPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-expand"></span>
              <a href="/about.php">关于我们</a>
            </h3>
          </div>
          <div class="panel-body">
            <h5>北京京东兴达集装箱活动房坐落于顺义区顺平路与木燕路交汇口，
                是京东地区最专业集装箱活动房的生产厂商。</h5>
            <h5>京东兴达集装箱活动房专业从事箱式活动房的设计、生产、
                销售以及租赁一条龙服务，致力于为客户提供一个专业、安全、
                性价比高的购买及租赁平台。</h5>
          </div>
        </div>
      </div>
      <div class="col-xs-7 rightPanel">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-expand"></span>
              <a href="/cases.php">经典案例</a>
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
              <a href="/products.php">产品展示</a>
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
    <!--== End Content ==-->
  </div>
</div>

<?php include "include/footer.php"?>
