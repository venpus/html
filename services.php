<?php
	include 'inc/define.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Labsemble - 당신의 멋진 꿈을 만들어 드리겠습니다.</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="icon" href="images/favicon-01.png"/>
		<link rel="apple-touch-icon" href="images/favicon-01.png"/>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Labsemble</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="services.php">프로젝트 문의</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                            <!--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li>-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">포트폴리오</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="portfolio-overview.html">전체 포트폴리오</a></li>
                                    <li><a class="dropdown-item" href="portfolio-item.html">개별 포트톨리오</a></li>
                                </ul>
                            </li>
							<li class="nav-item"><a class="nav-link" href=""></a></li>
							<li class="nav-item dropdown">
                                <?php
							if($status_login){
							?>							
								<a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">로그아웃</a>  
							<?php
							}
							else{
							?>							
								<a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log In</a>                           
							<?php
							}
							?>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="portfolio-overview.html">나의 계정</a></li>
                                    <li><a class="dropdown-item" href="portfolio-item.html">나의 프로젝트</a></li>
									<li><a class="dropdown-item" href="portfolio-item.html">로그아웃</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Service section-->
            <section class="bg-light py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Labsemble 만의 특별한 임베디드 서비스들이<br>당신의 소중한 선택을 기다립니다.</h1>
                        <!--<p class="lead fw-normal text-muted mb-0">With our no hassle pricing plans</p> -->
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Development Card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">개발 프로젝트</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            8비트/32비트 MCU 개발
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           임베디드 리눅스 플랫폼 개발
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            WIFI Soc 칩셋 응용 개발
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            BLE Soc 칩셋 응용 개발
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            각종 하드웨어 회로도/아트웍 개발
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            펌웨어 개발/유지보수
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            플러터/ 리액트 APP 개발
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            프론트엔드/백엔드/풀스택 웹 개발
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=1">시작하기</a>
									
									</div>
                                </div>
                            </div>
                        </div>
						<!-- Manufacture card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">생산 문의</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           	시제품/100대 이하 소량 생산
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           PCB만 별도 생산
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            대량생산
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            최신 AOI/검사장비사용,낮은 불량율
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            별도 QC 서비스 제공
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            생산후 펌웨어 Write 서비스
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            생산보고서/QC 보고서 제출
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            저렴한 생산원가(생산 수수료 5%)
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=2">시작하기</a></div>
                                </div>
                            </div>
                        </div>
						<!-- Component Market Card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">부품 주문 발주</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            필요한 양만큼 낱개주문 가능
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           시장 도매 원가 견적 제공
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            투명한 견적(구매 수수료 5%)
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            전셰계 어디서든 부품 수급
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            생산부품 대리 보관 서비스
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            BOM에 맞춘 견적 서비스
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            저항/캐패시터/메인칩/각종IC
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            세금계산서 및 외화 결제 지원
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=3">시작하기</a></div>
                                </div>
                            </div>
                        </div>
						
                    </div>
					<br>
					<div class="row gx-5 justify-content-center">
						
						
                       
                    </div>
					<div class="row gx-5 justify-content-center">
						 <!-- Enclosure Card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">기구 금형 설계</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            제품 디자인
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           PCB와 협업하는 기구설계
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            금형설계/제작 
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            각종 시방서 견적 제공
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            2년간 금형 보관서비스
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            워킹목업/3D 프린팅서비스
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            실크 및 레이저 각인 서비스
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            CNC / 프레스 가공 서비스
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=4">시작하기</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Special Component Card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">특수 부품 제작</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            각종 케이블류 제작
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           냉온 펠티어 특수제작
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            강화유리 특수제작
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            LCD 특수패널 제작
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            소형 DC모터 특수제작
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            커넥터류 특수제작
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            LED 조명 효과 특수제작
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=5">시작하기</a></div>
                                </div>
                            </div>
                        </div>
						<!-- Cetification Card-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-6">
                                    <!--<div class="small text-uppercase fw-bold text-muted">Free</div> -->
                                    <div class="mb-3">
                                        <span class="display-6 fw-bold">인증 및 시험</span>
                                        <!--<span class="text-muted">/ mo.</span>-->
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            KC 인증 대행서비스
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                           RoHS 시험 인증
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            각종 환경 테스트(국제기준)
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            KC PRE-TEST 및 디버깅
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            EMC/EMI 테스트 및 디버깅
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            국제 기준 인증 테스트
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            공인 시험연구소 협업
                                        </li>
										<li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            
                                        </li>
										<br>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-success" href="projects/request.php?category=6">시작하기</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Labsemble 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
