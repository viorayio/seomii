    <?php require('views/partials/header.php'); // Header section?>
    <?php require('views/partials/nav.php'); // Our navigation section?>
  
      <section class="container pt-5 pb-4 pb-lg-0 my-md-2 my-lg-5">
        <div class="row pt-5 pb-4 pb-lg-5 mb-2 mt-1 mt-sm-2 my-xl-3">
          <div class="col-md-7">
            <h1 class="display-3 fw-medium text-uppercase mb-0">Blog about life, work and business</h1>
          </div>
          <div class="col-md-5 col-lg-4 offset-lg-1 pt-3 pt-md-2">
            <p class="mb-0">A lot of useful information about health, beauty, travel and life in our blog. Simple and accessible about all important aspects of life.</p>
          </div>
        </div>
        <hr>
      </section>

    <section class="container mt-2 mt-md-0 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <!-- Filters-->
        <div class="row align-items-center">
          <div class="col-sm-8 col-lg-4 col-xl-3 offset-xl-1 order-sm-2 mb-3 mb-sm-0">
            <div class="position-relative mb-lg-2"><i class="ai-search fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-pill ps-5" type="search" placeholder="Enter keywords..">
            </div>
          </div>
          <div class="col-sm-4 col-lg-8 order-sm-1">
            <!-- Visible on screens > 991px-->
            <div class="d-none d-lg-flex flex-wrap align-items-center">
              <h3 class="h6 mb-2 me-4">Topics:</h3><a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Nature</a><a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Design</a><a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Books</a><a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Fashion</a><a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Inspiration</a><a class="btn btn-outline-secondary px-4 rounded-pill mb-2" href="#">Psychology</a>
            </div>
            <!-- Visible on screens < 992px-->
            <div class="dropdown d-lg-none">
              <button class="btn btn-outline-secondary dropdown-toggle rounded-pill w-100" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Topics</button>
              <div class="dropdown-menu my-1"><a class="dropdown-item" href="#">Nature</a><a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Books</a><a class="dropdown-item" href="#">Fashion</a><a class="dropdown-item" href="#">Inspiration</a><a class="dropdown-item" href="#">Psychology</a></div>
            </div>
          </div>
        </div>
        <div class="row mt-sm-2 mt-lg-0 pt-4 pt-lg-5 pb-md-4">
          <div class="col-md-7 pb-2 pb-md-0 mb-4 mb-md-0">
            <!-- Article-->
            <article class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><a href="/view_post.php"><img class="rounded-5" src="assets/img/landing/blog/01.jpg" alt="Image"></a>
              <h2 class="h3 pt-3 mt-2 mt-md-3"><a href="blog-single-v1.html">The fashion for eco bags with vintage prints will still be relevant for more than one year</a></h2>
              <p>Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit...</p>
              <div class="d-flex flex-wrap align-items-center pt-1 mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">6<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">12<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">12 hours ago</span><span class="fs-xs opacity-20 mt-2 mx-3">|</span><a class="badge text-nav fs-xs border mt-2" href="#">Fashion</a></div>
            </article>
            <!-- Article-->
            <article class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><a href="blog-single-v1.html"><img class="rounded-5" src="assets/img/landing/blog/02.jpg" alt="Image"></a>
              <h2 class="h3 pt-3 mt-2 mt-md-3"><a href="blog-single-v1.html">How to look for inspiration for new goals in life and remember to give yourself a break?</a></h2>
              <p>Egestas in neque scelerisque semper sit at eu cursus faucibus velit cras at aliquam sed dictum at at orci curabitur dictumst viverra non pharetra etiam non, vitae tristique eu in morbi felis...</p>
              <div class="d-flex flex-wrap align-items-center pt-1 mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">13<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">8<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">9 days ago</span><span class="fs-xs opacity-20 mt-2 mx-3">|</span><a class="badge text-nav fs-xs border mt-2" href="#">Inspiration</a></div>
            </article>
            <!-- Article-->
            <article class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4"><a href="blog-single-v1.html"><img class="rounded-5" src="assets/img/landing/blog/03.jpg" alt="Image"></a>
              <h2 class="h3 pt-3 mt-2 mt-md-3"><a href="blog-single-v1.html">A session with a psychologist as a personal choice or a fashion trend in society</a></h2>
              <p>Purus lectus odio lacus nibh habitant ac sapien malesuada sed convallis adipiscing eget convallis amet enim diam tellus sodales ornare vitae molestie nulla tincidunt ac non facilisis faucibus...</p>
              <div class="d-flex flex-wrap align-items-center pt-1 mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">24<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">17<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">2 weeks ago</span><span class="fs-xs opacity-20 mt-2 mx-3">|</span><a class="badge text-nav fs-xs border mt-2" href="#">Psychology</a></div>
            </article>
            <!-- More articles button --><a class="btn btn-primary mt-n2 mt-sm-n1 mt-md-0" href="blog-list-sidebar.html">Read all articles</a>
          </div>
          <!-- Relevant articles sidebar-->
          <aside class="col-md-5 col-xl-4 offset-xl-1" style="margin-top: -115px;">
            <div class="position-sticky top-0 ps-md-4 ps-xl-0" style="padding-top: 125px;">
              <h2 class="h4">Relevant articles</h2>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3"><a href="blog-single-v1.html">Instagram trends that will definitely work and bring results in the new 2022</a></h3>
                <div class="d-flex flex-wrap align-items-center mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">4<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">6<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">9 hours ago</span></div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3"><a href="blog-single-v2.html">A session with a psychologist as a personal choice or a fashion trend in society</a></h3>
                <div class="d-flex flex-wrap align-items-center mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">7<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">12<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">2 days ago</span></div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3"><a href="blog-single-v2.html">Travel destinations to inspire and restore resources</a></h3>
                <div class="d-flex flex-wrap align-items-center mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">5<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">11<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">3 days ago</span></div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3"><a href="blog-single-v3.html">How to look for inspiration for new goals in life and remember to give yourself a break?</a></h3>
                <div class="d-flex flex-wrap align-items-center mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">18<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">26<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">July 13, 2022</span></div>
              </article>
              <article class="my-1 my-lg-0 py-2 py-lg-3">
                <h3 class="h6 mb-2 mb-lg-3"><a href="blog-single-v1.html">The 15 best books every person should read </a></h3>
                <div class="d-flex flex-wrap align-items-center mt-n2"><a class="nav-link text-muted fs-sm fw-normal p-0 mt-2 me-3" href="#">15<i class="ai-share fs-lg ms-1"></i></a><a class="nav-link text-muted fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">23<i class="ai-message fs-lg ms-1"></i></a><span class="fs-xs opacity-20 mt-2 mx-3">|</span><span class="fs-sm text-muted mt-2">May 25, 2022</span></div>
              </article>
            </div>
          </aside>
        </div>
      </section>
    
      <!-- Latest posts-->


  