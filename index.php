<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>에너자이조</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body style="padding-top: 0px">
    <?php include "header.php"; ?>
    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/main1.jpg" class="d-block w-100" alt="main01">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>경기도미래기술학교</h1>
                <p>클라우드 운영 및 DevOps 전문가 양성과정</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/main2.jpg" class="d-block w-100" alt="main02">
            <div class="container">
              <div class="carousel-caption">
                <h1>AWS, NAVER CLOUD PLATFORM 공인 교육</h1>
                <p>클라우드 인프라 설계 및 구축</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/main3.jpg" class="d-block w-100" alt="main03">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Terraform, AWS EKS, Cloud Native, CI/CD</h1>
                <p>유연하고 신뢰성 있는 클라우드 아키텍처 자동화 관리</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="/img/cloud.jpeg" width="250" height="180" style="padding-bottom: 10px">
            <h4><b>Cloud Automation</b></h4>
            <p>Terraform을 사용하여 AWS Cloud에서 EKS Cluster를 배포하고 CodeCommit, Codebuild, CodeDeploy, CodePipeline 서비스들을 사용하여 CI/CD 환경을 구성합니다.</p>
            <p><a class="btn btn-secondary" href="#">더 알아보기 &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img src="/img/hacking.jpeg" width="250" height="180" style="padding-bottom: 10px">
            <h4><b>DevOps</b></h4>
            <p>.애플리케이션 개발 팀(Dev)과 해당 IT 운영 팀(Ops) 팀 간의 원활하고 지속적인 커뮤니케이션, 협업, 통합, 가시성 및 투명성을 장려하여 애플리케이션 개발의 품질과 속도를 개선하고 신규 또는 수정된 소프트웨어 기능이나 제품의 릴리즈 주기 단축합니다.</p>
            <p><a class="btn btn-secondary" href="#">더 알아보기 &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img src="/img/network.jpeg" width="250" height="180" style="padding-bottom: 10px">
            <h4><b>FinOps</b></h4>
            <p>엔지니어링, 재무, 기술, 비즈니스 팀이 데이터 중심 지출 결정에 협력할 수 있도록 지원함으로써 조직이 비즈니스 가치를 극대화 할 수 있도록 지원합니다.</p>
            <p><a class="btn btn-secondary" href="#">더 알아보기 &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

      <!-- FOOTER -->
      <footer class="container">
        <?php include "footer.php"; ?>
      </footer>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>
