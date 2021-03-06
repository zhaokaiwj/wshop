<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <title>三级分销</title>
    <link rel="shortcut icon" href="/one/images/favicon.ico" />
    
    <!-- Bootstrap -->
    <link href="/one/css/bootstrap.min.css" rel="stylesheet">
    <link href="/one/css/style.css" rel="stylesheet">
    <link href="/one/css/response.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond./one/js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="maincont">
     <header>
      <a href="javascript:history.back(-1)" class="back-off fl"><span class="glyphicon glyphicon-menu-left"></span></a>
      <div class="head-mid">
       <h1>抵用券</h1>
      </div>
     </header>
     <div class="head-top">
      <img src="/one/images/head.jpg" />
     </div><!--head-top/-->
     <div class="zhaieq">
      <a href="javascript:;" class="zhaiCur">已使用</a>
      <a href="javascript:;">未使用</a>
      <a href="javascript:;">已过期</a>
      <div class="clearfix"></div>
     </div><!--oredereq/-->
     
     <div class="jifen">
          <div class="jifenList">
           <dl class="jl1">
            <dt>100元购物抵用券</dt>
            <dd>有效期：自兑换日起3个月</dd>
            <div class="clearfix"></div>
           </dl><!--jl1/-->
           <dl class="jl2">
            <dt><img src="/one/images/jf1.jpg" width="103" height="150" /></dt>
            <dd>
             <div class="jl2Text">
              购买满100元可用，每个项目限用一个红包<br />
              数&nbsp;&nbsp;&nbsp;量： 1<br />
              需消耗：<strong class="red" style="font-size:16px;">1</strong> 个
             </div><!--jl2Text/-->
             <a class="ljdh" href="javascript:;">使用</a>
            </dd>
            <div class="clearfix"></div>
           </dl><!--jl2/-->
          </div><!--jifenList/-->
         
          <div class="clearfix"></div>
      </div><!--jifen/-->
     
     <div class="height1"></div>
          @include('Jewe.onefoot')
    </div><!--maincont-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/one/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/one/js/bootstrap.min.js"></script>
    <script src="/one/js/style.js"></script>
    <!--jq加减-->
    <script src="/one/js/jquery.spinner.js"></script>
   <script>
	$('.spinnerExample').spinner({});
   </script>
  </body>
</html>