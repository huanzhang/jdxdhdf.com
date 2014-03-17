<?php $title="京东兴达活动房"; include "include/header.php"?>

<?php include "include/top.php"?>

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
                <a href="#">文物保护传承专用装备产业技术...</a>
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
              <h6>
                <small><span class="glyphicon glyphicon-play"></span></small>
                <a href="#">文物保护传承专用装备产业技术...</a>
              </h6>
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
                <li><a href="#"><img src="/images/normal_1688.png"></a></li>
                <li><a href="#"><img src="/images/normal_3810.png"></a></li>
                <li><a href="#"><img src="/images/normal_511.png"></a></li>
                <li><a href="#"><img src="/images/normal_840.png"></a></li>
                <li><a href="#"><img src="/images/normal_1459.png"></a></li>
                <li><a href="#"><img src="/images/normal_234.png"></a></li>
                <li><a href="#"><img src="/images/normal_485.png"></a></li>
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
