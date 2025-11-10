<?php
    include 'header.php';
?>
    <section class="bg-f5">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title">
              <div class="widget-menu-link">
                <ul>
                  <li><a href="home-01.php">Home</a></li>
                  <li><a href="#">Modal</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="inner-review-section">
      <div class="tf-container st3">
        <div class="row">
          <div class="col-md-12">
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                Modal Basic</button>
            
            <!-- Modal -->
            <div class="modal fade" id="basicModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" data-bs-dismiss="modal">
                      <i class="fa-solid fa-xmark"></i>
                    </button>
                  </div>
                  <div class="modal-body">Modal body text goes here.</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 wow fadeInleft">
           
            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">&nbsp;id</span><span class="o">&nbsp;=</span><span class="s">"basicModal"&nbsp;</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn-close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa-solid"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
                    <span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;p&gt;</span>Modal body text goes here.<span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-danger light"</span> <span class="s">"button"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-primary"</span> <span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span></code></pre></figure>


          </div>
          
        </div>
      </div>
    </section>
    <section class="wd-banner-counter">
      <div class="tf-container st3">
        <div class="row">
          <div class="col-md-12 wow fadeInleft">
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                data-bs-target="#exampleModalCenter">Modal Centered</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" data-bs-dismiss="modal">
                      <i class="fa-solid fa-xmark"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Modal body text goes here</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">&nbsp;id</span><span class="o">&nbsp;=</span><span class="s">"exampleModalCenter"&nbsp;</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-dialog-centered"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn-close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa-solid"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
                    <span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;p&gt;</span>Modal body text goes here.<span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-danger light"</span> <span class="s">"button"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-primary"</span> <span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span></code></pre></figure>



          </div>
        </div>
      </div>
    </section>

    <!-- wd-icon-box style3 -->
    <section class="inner-review-section">
      <div class="tf-container st3">
        <div class="row">
          <div class="col-md-12">
            <!-- Large modal -->
              <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
              data-bs-target=".bd-example-modal-lg">
              Modal Large
            </button>
            
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" data-bs-dismiss="modal">
                      <i class="fa-solid fa-xmark"></i>
                    </button>
                  </div>
                  <div class="modal-body">Modal body text goes here.</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 wow fadeInleft">
            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-lg"</span> <span class="na">&nbsp;tabindex</span><span class="o">&nbsp;=</span><span class="s">"-1"&nbsp;</span><span class="na">role=</span><span class="s">"dialog"</span><span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-lg"</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn-close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa-solid"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
                    <span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;p&gt;</span>Modal body text goes here.<span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-danger light"</span> <span class="s">"button"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-primary"</span> <span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span></code></pre></figure>

          </div>
          
        </div>
      </div>
    </section>

    <section class="wd-banner-counter">
      <div class="tf-container st3">
        <div class="row">
          <div class="col-md-12 wow fadeInleft">
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                data-bs-target=".bd-example-modal-sm">
                Modal Small
              </button>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Modal title</h5>
                          <button class="btn-close" data-bs-dismiss="modal">
                              <i class="fa-solid fa-xmark"></i>
                          </button>
                      </div>
                      <div class="modal-body">Modal body text goes here.</div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          <div class="col-md-12">
            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-sm"</span> <span class="na">&nbsp;tabindex</span><span class="o">&nbsp;=</span><span class="s">"-1"&nbsp;</span><span class="na">role=</span><span class="s">"dialog"</span><span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-sm"</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn-close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa-solid"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
                    <span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;p&gt;</span>Modal body text goes here.<span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-danger light"</span> <span class="s">"button"</span> <span class="na">data-bs-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
                    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-primary"</span> <span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span></code></pre></figure>
          </div>
        </div>
      </div>
    </section>

    <section class="inner-review-section">
      <div class="tf-container st3">
        <div class="row">
          <div class="col-md-12">
            <!-- Large modal -->
            <div class="mb-4">
              <h6 class="mb-2">Modal popup auto</h6>
              <p><span class="using">Using:</span> Add class "tf-popup-auto" inside the body tag and add content popup to the page you need</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInleft">
            <figure class="highlight">
              <code class="language-html" data-lang="html"><span class="nt">&lt;body</span> <span class="na">class=</span><span class="s">"tf-popup-auto"</span> <span class="nt">&gt;</span>
             </code>
             <p class="c">&lt;!-- Content popup --&gt;</p>
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wd-popup-form"</span> <span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-menu__backdrop"</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-left"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"thumb"</span><span class="nt">&gt;</span><span class="nt">&lt;img</span><span class="na"> src=</span><span class="s">"images/review/bg-popup.jpg"</span> <span class="na"> src=</span><span class="s">"images"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
                    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-right"</span> <span class="nt">&gt;</span>
                      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"title-button-group"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-close"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
                      <span class="nt">&lt;/a&gt;</span>
                      <span class="nt">&lt;h6</span> <span class="nt">&gt;</span><span>Welcome to jobitex</span><span class="nt">&lt;/h6&gt;</span>
                      <span class="nt">&lt;p</span><span class="nt">&gt;</span><span>Sign up to get all the latest Jobitex news, website updates, offers and promos.</span><span class="nt">&lt;/p&gt;</span>
                      <span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"get"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;input</span><span class="nt">&gt;</span><span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"group-radio"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;input</span><span class="nt">&gt;</span><span class="na">type=</span><span class="s">"radio"</span> <span class="nt">&gt;</span> 
                                <span class="nt">&lt;label</span><span class="nt">&gt;</span><span></span>Prevent this Pop-up <span class="nt">&lt;/label&gt;</span> 
                          <span span class="nt">&lt;/div&gt;</span>
                      <span class="nt">&lt;/form&gt;</span>
                    <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
               </code></pre>
          </figure>

          </div>
          
        </div>
      </div>
    </section>

   <?php
        include 'footer.php';
   ?>