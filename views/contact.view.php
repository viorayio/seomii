<?php require ('views/partials/header.php')?>
<?php require ('views/partials/nav.php')?>
    <section class="bg-white pt-5 pb-4">
        <div class="container py-lg-2 py-xl-4 py-xxl-5">
          <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
            <div class="col-lg-5 mb-5 mb-lg-0">
              <h2 class="h1">Kontakt os</h2>
              <p class="pb-1 pb-md-0 mb-4 mb-md-5">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus.</p>
        
              <form class="needs-validation row g-4" novalidate>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="name">Name</label>
                  <input class="form-control form-control-lg" type="text" placeholder="Your name" required id="name">
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input class="form-control form-control-lg" type="email" placeholder="Email address" required id="email">
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
                <div class="col-lg-10">
                  <label class="form-label fs-base" for="message">Message</label>
                  <textarea class="form-control form-control-lg" placeholder="Your message" rows="4" required id="message"></textarea>
                  <div class="invalid-feedback">Please write your message!</div>
                </div>
                <div class="col-lg-10">
                  <button class="btn btn-primary" style="width: 100%;" type="submit">Send besked</button>
                </div>
              </form>
            </div>
            <div class="col-lg-7 col-xl-6 offset-xl-1">
              <div class="row row-cols-1 row-cols-sm-2">
                <div class="col">
                  <div class="card border-0 mb-4 bg-secondary">
                    <div class="card-body">
                      <h3 class="h4" style="max-width: 180px;">Time zones ain't no thing</h3>
                      <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                    </div>
                  </div>
                  <div class="card border-0 bg-primary dark-mode">
                    <div class="card-body">
                      <h3 class="h4" style="max-width: 180px;">Flexible work terms</h3>
                      <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column pt-4 mt-sm-3">
                  <div class="card border-0 bg-secondary order-sm-2 mb-4 mb-sm-0">
                    <div class="card-body">
                      <h3 class="h4" style="max-width: 180px;">Full spectrum of services</h3>
                      <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                    </div>
                  </div>
                  <div class="card border-0 bg-primary dark-mode order-sm-1 mb-sm-4">
                    <div class="card-body">
                      <h3 class="h4" style="max-width: 180px;">Impossible? We're on it</h3>
                      <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php require('views/partials/footer.php');?>