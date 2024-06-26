@extends("layouts.front")
@section("title" , "home")
@section('content')

  <!-- Banner section Start  -->
  <section class="banner-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ad-order-2">
          <h1 class="banner-heading"><span>Top AI Tool</span> For Sale (Free and Paid)</h1>
          <p class="banner-subheading">Lorem ipsum dolor sit amet consectetur. Faucibus sed velit volutpat commodo.
            Lorem ipsum dolor sit amet consectetur. Faucibus sed velit volutpat commodo. Lorem ipsum dolor sit amet
            consectetur. </p>
          <button class="button-shop">Shop Now</button>
          <a href="#tranding" class="Scroll-down destop">Scroll and find out more <br><svg xmlns="http://www.w3.org/2000/svg"
            width="14" height="56" viewBox="0 0 14 56" fill="none">
            <path
              d="M0.157631 49.0011C0.258693 48.9055 0.395688 48.8518 0.538523 48.8518C0.681358 48.8518 0.818353 48.9055 0.919415 49.0011L6.46749 54.2566L6.46749 0.510651C6.46749 0.375218 6.52427 0.245331 6.62536 0.149567C6.72644 0.0538031 6.86353 6.23889e-07 7.00648 6.11392e-07C7.14944 5.98895e-07 7.28653 0.0538031 7.38761 0.149567C7.48869 0.245331 7.54548 0.375218 7.54548 0.510651L7.54548 54.2566L13.0936 49.0011C13.1957 48.9109 13.3309 48.8618 13.4705 48.8641C13.6101 48.8665 13.7434 48.9201 13.8421 49.0136C13.9409 49.1072 13.9975 49.2334 13.9999 49.3657C14.0024 49.498 13.9505 49.626 13.8553 49.7228L7.38738 55.8507C7.28631 55.9463 7.14932 56 7.00649 56C6.86365 56 6.72666 55.9463 6.62559 55.8507L0.157631 49.7228C0.0566944 49.6271 3.85189e-07 49.4973 3.73359e-07 49.362C3.61528e-07 49.2266 0.0566944 49.0969 0.157631 49.0011Z"
              fill="white" />
          </svg></a>
        </div>
        <div class="col-lg-4 ad-order-1">
          <div class="unlock-outer">
            <img src="assets/images/about.webp" alt="about">
            <h2>Unlock the power of Copywriting AI and Create Content Faster</h2>
          </div>
        </div>
        <a href="#tranding" class="Scroll-down mobile">Scroll and find out more <br><svg xmlns="http://www.w3.org/2000/svg"
          width="14" height="56" viewBox="0 0 14 56" fill="none">
          <path
            d="M0.157631 49.0011C0.258693 48.9055 0.395688 48.8518 0.538523 48.8518C0.681358 48.8518 0.818353 48.9055 0.919415 49.0011L6.46749 54.2566L6.46749 0.510651C6.46749 0.375218 6.52427 0.245331 6.62536 0.149567C6.72644 0.0538031 6.86353 6.23889e-07 7.00648 6.11392e-07C7.14944 5.98895e-07 7.28653 0.0538031 7.38761 0.149567C7.48869 0.245331 7.54548 0.375218 7.54548 0.510651L7.54548 54.2566L13.0936 49.0011C13.1957 48.9109 13.3309 48.8618 13.4705 48.8641C13.6101 48.8665 13.7434 48.9201 13.8421 49.0136C13.9409 49.1072 13.9975 49.2334 13.9999 49.3657C14.0024 49.498 13.9505 49.626 13.8553 49.7228L7.38738 55.8507C7.28631 55.9463 7.14932 56 7.00649 56C6.86365 56 6.72666 55.9463 6.62559 55.8507L0.157631 49.7228C0.0566944 49.6271 3.85189e-07 49.4973 3.73359e-07 49.362C3.61528e-07 49.2266 0.0566944 49.0969 0.157631 49.0011Z"
            fill="white" />
        </svg></a>
      </div>
    </div>
  </section>
  <!-- Banner section End  -->

  <!-- Trending Category section start  -->
  <section class="trending-cetegory" > 
    <div class="container" id="tranding" >
      <h3 >Trending Category</h3>
      <div class="category-outer" >

        <div class="category-inner" >
          <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
            <path
              d="M32.5507 37.7271C32.4983 38.6473 32.4983 39.5697 32.5507 40.4899C33.3005 46.8964 26.8415 51.2337 20.5549 49.6405C17.4997 48.8645 15.2092 47.0914 14.0846 43.9837C13.9422 43.6088 13.0762 43.234 12.5589 43.234C8.10546 43.3876 4.15057 40.8535 3.13467 37.0898C2.98832 36.745 2.91554 36.3735 2.921 35.999C3.37834 33.4873 2.36618 31.5005 1.1516 29.345C-1.3038 24.9928 0.334381 19.4972 4.48045 16.6407C4.75771 16.4451 4.9926 16.1955 5.17104 15.9069C5.34948 15.6183 5.46778 15.2967 5.51884 14.9612C5.65005 9.64183 9.43249 5.537 14.8419 5.15089C16.1951 5.05717 17.0349 4.77602 17.7771 3.47147C19.4153 0.562474 23.4526 -0.652106 27.0289 0.3413C30.5039 1.31596 32.5095 3.99628 32.5507 7.65877C32.5507 9.20698 32.5507 10.7552 32.5507 12.2847C35.0511 12.9407 36.9667 12.6258 38.1738 10.2154C38.5824 9.39067 39.3359 8.73839 39.7745 7.92493C40.0843 7.37217 40.2153 6.73702 40.1494 6.1068C39.6733 3.21281 41.3152 0.689929 44.1567 0.108881C46.8633 -0.445927 49.3187 1.27473 49.9035 4.12749C50.0384 4.76847 50.0409 5.43026 49.9107 6.07223C49.7806 6.7142 49.5206 7.32279 49.1467 7.86062C48.7729 8.39846 48.293 8.85418 47.7365 9.19981C47.1801 9.54544 46.5589 9.77368 45.9111 9.8705C45.3618 9.91998 44.8338 10.1065 44.3753 10.413C43.9169 10.7196 43.5427 11.1362 43.287 11.6249C40.8953 15.5648 38.17 18.9011 32.6744 17.2479V22.4474C35.2048 22.4474 37.7389 22.4961 40.2656 22.4024C40.7079 22.4024 41.1615 21.8289 41.5514 21.4615C42.0184 20.9958 42.574 20.6282 43.1852 20.3805C43.7965 20.1327 44.4512 20.0097 45.1107 20.0188C45.7702 20.0279 46.4212 20.1688 47.0254 20.4333C47.6297 20.6978 48.1749 21.0806 48.6289 21.559C49.5268 22.4885 50.0286 23.7304 50.0286 25.0228C50.0286 26.3151 49.5268 27.557 48.6289 28.4866C46.912 30.3609 43.6094 30.5221 41.7088 28.6403C41.3344 28.2416 40.8743 27.9331 40.3632 27.7383C39.8521 27.5435 39.3034 27.4674 38.7586 27.5156C36.768 27.5794 34.7775 27.5156 32.6632 27.5156V32.4939C33.7878 32.4939 34.9724 32.4639 36.1345 32.4939C38.2488 32.5539 40.0032 33.2774 41.1503 35.193C41.6563 36.0477 42.3723 36.7749 42.8672 37.6371C43.2278 38.3396 43.7443 38.9504 44.3771 39.4227C45.0099 39.8951 45.7423 40.2165 46.5184 40.3624C49.0788 40.9285 50.4395 43.5301 49.8922 45.9855C49.3149 48.5496 46.972 50.2928 44.5578 49.9591C41.885 49.5843 39.6583 47.3763 40.1344 44.8796C40.5392 42.7391 39.3134 41.577 38.5224 40.0288C37.2703 37.5847 35.3773 36.9286 32.5507 37.7271ZM27.5799 28.6253C27.5799 21.529 27.6175 14.4777 27.55 7.4301C27.55 5.87813 26.3954 5.15463 24.8996 5.0984C23.4039 5.04217 22.0281 5.2521 21.6158 7.09646C20.8998 10.3166 20.6036 10.4478 17.1173 10.0579C15.048 9.82552 13.1475 10.3054 11.6367 11.8798C10.2347 13.3418 10.0098 15.2536 11.573 16.4795C12.8588 17.4991 14.572 18.0914 16.2101 18.5225C17.7509 18.9311 18.7743 19.5272 18.6655 21.2291C18.5568 22.931 17.3085 23.7744 15.8315 23.4371C13.5511 22.9683 11.3435 22.1967 9.26755 21.1428C7.94425 20.4306 7.24698 20.5918 6.42227 21.5477C4.37173 23.9394 4.70164 27.0358 7.31073 29.3338C8.64527 30.5071 9.47746 31.7067 8.46157 33.5323C7.38944 35.4554 7.8018 36.9699 9.89732 37.6559C11.3013 38.0785 12.795 38.1032 14.2121 37.7271C17.5859 36.7824 18.7105 37.446 18.748 40.9622C18.748 42.3942 19.1566 43.5451 20.4462 44.2611C21.2328 44.713 22.1192 44.9626 23.0261 44.9874C23.9329 45.0123 24.8317 44.8117 25.6419 44.4035C27.3363 43.6538 27.6662 42.1768 27.5687 40.5086C27.5387 40.0101 27.5687 39.5077 27.5687 39.0092C27.5687 34.6382 26.2267 33.075 21.8782 32.5801C20.21 32.3927 19.3665 31.5605 19.3778 29.9336C19.3778 28.4866 20.5024 27.5081 22.2043 27.6618C23.9062 27.8155 25.5894 28.2466 27.5799 28.6253Z"
              fill="url(#paint0_linear_339_329)" />
            <defs>
              <linearGradient id="paint0_linear_339_329" x1="25.0143" y1="0" x2="25.0143" y2="50"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
            </defs>
          </svg>
          <h4>AI</h4>
        </div>
        <div class="category-inner">
          <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
            <path
              d="M7.29753 42.3069L14.9102 37.7183L14.7526 37.3206C11.9837 37.9209 9.19977 38.4461 6.4571 39.1553C5.17394 39.4817 4.47608 39.2641 3.78197 38.0297C-0.979238 29.6666 -1.3732 21.146 3.33173 12.7566C8.09294 4.26226 15.6944 5.97339e-05 25.3744 5.97339e-05C38.8813 -0.0299558 50.0884 11.2559 50.0996 24.7103C50.0996 29.963 48.7152 34.9043 45.3834 39.4479C44.1978 36.9904 43.0797 34.713 42.0067 32.4205C38.3561 24.7103 34.7317 16.9851 31.0585 9.2861C29.5765 6.1795 26.8901 4.72375 23.9974 5.29779C22.8758 5.4727 21.8262 5.96052 20.9694 6.70518C20.1125 7.44985 19.4832 8.42115 19.1536 9.50747C18.7563 10.5709 18.676 11.7267 18.9224 12.8348C19.1688 13.943 19.7314 14.9558 20.5419 15.7507C26.3273 21.8939 32.1316 28.022 37.9546 34.1352C40.0557 36.3488 42.153 38.57 44.2353 40.7723C35.5646 52.3883 16.9325 53.1913 7.29753 42.3069ZM37.253 36.5552L37.4593 36.1124C31.3099 31.1411 25.1943 26.1323 18.9773 21.251C18.0169 20.5837 16.8572 20.2647 15.6906 20.3468C14.8087 20.4285 13.9846 20.8214 13.3659 21.4553C12.7472 22.0891 12.3742 22.9224 12.3139 23.8061C12.1375 25.7609 13.0267 27.3066 14.959 28.0645C18.6096 29.5053 22.294 30.8672 25.9634 32.2592L37.253 36.5552ZM25.8884 34.5967L25.9146 34.1164C21.0146 32.9646 16.1221 31.7639 11.2033 30.6909C9.22226 30.2594 7.82655 31.3325 7.7215 33.0884C7.61645 34.8443 8.82457 35.9661 10.8619 35.8948C12.5465 35.8386 14.2386 35.6622 15.9045 35.5196C19.2324 35.2007 22.5604 34.8856 25.8884 34.5779V34.5967Z"
              fill="url(#paint0_linear_339_314)" />
            <defs>
              <linearGradient id="paint0_linear_339_314" x1="25.0498" y1="0" x2="25.0498" y2="50"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
            </defs>
          </svg>
          <h4>Security by Avast</h4>
        </div>
        <div class="category-inner"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" viewBox="0 0 56 50"
            fill="none">
            <path d="M0 48.8426V0.00415039H20.4537C13.7207 16.3922 7.03774 32.655 0.358977 48.9177L0 48.8426Z"
              fill="url(#paint0_linear_339_318)" />
            <path d="M35.0427 0H55.4964V48.7967L55.1541 48.9386C48.4879 32.6967 41.8091 16.4506 35.0427 0Z"
              fill="url(#paint1_linear_339_318)" />
            <path
              d="M40.8824 49.9823C38.094 49.9823 35.6145 50.0491 33.1475 49.9239C32.68 49.903 32.0622 49.2101 31.8368 48.6716C30.8308 46.3215 29.8541 43.9506 29.0484 41.5253C28.631 40.2313 27.9631 39.8556 26.6483 39.9057C24.1437 40.0143 21.6392 39.9391 18.7631 39.9391L27.7753 18.3208L40.8824 49.9823Z"
              fill="url(#paint2_linear_339_318)" />
            <defs>
              <linearGradient id="paint0_linear_339_318" x1="10.2269" y1="0.00415039" x2="10.2269" y2="48.9177"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
              <linearGradient id="paint1_linear_339_318" x1="45.2696" y1="0" x2="45.2696" y2="48.9386"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
              <linearGradient id="paint2_linear_339_318" x1="29.8227" y1="18.3208" x2="29.8227" y2="50.0001"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
            </defs>
          </svg>
          <h4>Creativity by Adobe</h4>
        </div>
        <div class="category-inner"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50"
            fill="none">
            <path
              d="M39.889 50L0 39.7519C0.327669 38.4035 0.613901 37.1569 0.934037 35.9178C3.89184 24.4079 6.84716 12.8968 9.79994 1.38449C10.0523 0.39772 10.2594 -0.238785 11.4986 0.0851179C24.2061 3.38943 36.9174 6.6862 49.6324 9.97544C49.6814 9.97544 49.7191 10.0621 50.058 10.4161L39.889 50ZM27.931 29.7599C28.6127 27.0858 29.2529 24.5774 29.912 21.9862L22.1836 20.0014L20.1272 27.7637L27.931 29.7599Z"
              fill="url(#paint0_linear_339_325)" />
            <defs>
              <linearGradient id="paint0_linear_339_325" x1="25.029" y1="0" x2="25.029" y2="50"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#ADD8E6" />
                <stop offset="1" stop-color="#C4A484" />
              </linearGradient>
            </defs>
          </svg>
          <h4>Roblox games</h4>
        </div>
      </div>
      <div class="content-genreter">
        <div class="content-inner">
          <h5>Content<br> Generation</h5>
          <p>Right to find fault with man chooses to enjoy a pleasure that has annoying...</p>
          <a href="#" class="shop">Shop Now</a>
        </div>
        <div class="popular-tool">
          <p>[Tool]</p>
          <h3>Most Popular Tool</h3>
          <h6>Undertakes laborious physical exercise except to obtain some advantage from it?</h6>
          <button class="button-shop">View All Tool</button>


        </div>
        <div class="content-inner">
          <h5>Marketing <br>
            Communications</h5>
          <p>To the claims of duty or the obligations of business it will frequently occur...</p>
          <a href="#" class="shop">Shop Now</a>
        </div>
      </div>
      <div class="editing-outer" >
        <div class="editing-inner">
          <div class="editng-text">
            <h5>Marketing <br>
              Communications</h5>
            <p>To the claims of duty or the obligations of business it will frequently occur...</p>
            <a href="#" class="shop">Shop Now</a>
          </div>
          <div class="editing-image">
            <img src={{url("assets/images/editing-profe.webp")}} alt="">
          </div>
        </div>
        <div class="editing-inner">
          <div class="editng-text">
            <h5>Language<br>
              Localization</h5>
            <p>Foresee the pain and trou- ble that are bound to ensue and equal blame...</p>
            <a href="#" class="shop">Shop Now</a>
          </div>
          <div class="editing-image">
            <img src={{url("assets/images/globe.webp")}} alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Trending Category section end  -->

  <!-- Featured AI setion start  -->
  <section class="Featured-ai" >
    <h3 class="text-center">Featured AI Sales Tools</h3>
    <div class="container">
      <div class="featured-ai-outer">
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src= {{url("assets/images/featured-ai1.png")}} alt="">
            <h5>FullEnrich</h5>
          </div>
          <p>FullEnrich is a waterfall enrichment tool that finds emails & phone numbers.</p>
          <h6>Plans start at $29/mo</h6>
          <button>Buy Now</button>
        </div>
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src={{url("assets/images/featured-ai2.png")}} alt="">
            <h5>Prospeo</h5>
          </div>
          <p>Prospeo is a tool that helps you find, verify, and manage email addresses.</p>
          <h6>Plans start at $39/mo</h6>
          <button>Buy Now</button>
        </div>
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src={{url("assets/images/featured-ai3.png")}} alt="">
            <h5>Clay</h5>
          </div>
          <p>Clay finds data from 50+ sources and leverages GPT-4 to personalize emails.</p>
          <h6>Plans start at $129/mo</h6>
          <button>Buy Now</button>
        </div>
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src={{url("assets/images/featured-ai4.png")}} alt="">
            <h5>Smartlead</h5>
          </div>
          <p>Smartlead automates cold outreach and email warming with AI.</p>
          <h6>Plans start at $29/mo</h6>
          <button>Buy Now</button>
        </div>
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src={{url("assets/images/featured-ai5.png")}} alt="">
            <h5>HeyReach</h5>
          </div>
          <p>HeyReach lets you extract leads and automate unlimited LinkedIn outreach at one fixed cost.</p>
          <h6>Plans start at $79/mo</h6>
          <button>Buy Now</button>
        </div>
        <div class="featured-ai-inner">
          <div class="image-text">
            <img src={{url("assets/images/featured-ai6.png")}} alt="">
            <h5>Clay</h5>
          </div>
          <p>Sendspark automates personalized sales videos using AI for effective customer engagement at scale.</p>
          <h6>Sendspark</h6>
          <button>Buy Now</button>
        </div>
      </div>
      <div class="button-more-outer">
        <button class="view-more">View More</button>
      </div>

    </div>
  </section>
  <!-- Featured AI setion End  -->

  <!-- Business Software section start -->
  <section class="business-section">
    <div class="container">
      <div class="digital-signature-outer">
        <div class="Software-outer">
          <h3>Business Software</h3>
          <div class="products-outer">
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2"><span>Best Value</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/zoho.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Zoho Mail</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src= {{url("assets/images/cart.svg")}} alt="">
                </div>
              </div>
            </div>
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2 yellow"><span>Best seller</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/microsoft.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Microsoft 365 Business Basic</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <del>1,632.00</del>
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src={{url("assets/images/cart.svg" )}} alt="">
                </div>
              </div>
            </div>
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2 yellow"><span>Best seller</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/workspace.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Google Workspace</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src={{url("assets/images/cart.svg")}} alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="Software-outer">
          <h3>Software for Digital Signature</h3>
          <div class="products-outer">
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2"><span>Best Value</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/zoho.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Zoho Mail</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src={{url("assets/images/cart.svg")}} alt="">
                </div>
              </div>
            </div>
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2 yellow"><span>Best seller</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/microsoft.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Microsoft 365 Business Basic</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <del>1,632.00</del>
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src={{url("assets/images/cart.svg")}} alt="">
                </div>
              </div>
            </div>
            <div class="products-inner">
              <span class="re-ribbon-badge badge_2 yellow"><span>Best seller</span></span>
              <div class="text-center logo-product">
                <img src={{url("assets/images/workspace.webp")}} alt="">
              </div>
              <p>Business Software</p>
              <h5>Google Workspace</h5>
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="10" viewBox="0 0 66 10" fill="none">
                <path
                  d="M4.96341 0.498962L6.48993 3.59154L9.90362 4.0905L7.43351 6.49638L8.01646 9.89525L4.96341 8.28968L1.91035 9.89525L2.4933 6.49638L0.0231934 4.0905L3.43688 3.59154L4.96341 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M18.7583 0.498962L20.2849 3.59154L23.6985 4.0905L21.2284 6.49638L21.8114 9.89525L18.7583 8.28968L15.7053 9.89525L16.2882 6.49638L13.8181 4.0905L17.2318 3.59154L18.7583 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M32.5531 0.498962L34.0797 3.59154L37.4933 4.0905L35.0232 6.49638L35.6062 9.89525L32.5531 8.28968L29.5001 9.89525L30.083 6.49638L27.6129 4.0905L31.0266 3.59154L32.5531 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M46.3481 0.498962L47.8746 3.59154L51.2883 4.0905L48.8182 6.49638L49.4011 9.89525L46.3481 8.28968L43.295 9.89525L43.8779 6.49638L41.4078 4.0905L44.8215 3.59154L46.3481 0.498962Z"
                  fill="#FF8A00" />
                <path
                  d="M60.1429 0.498962L61.6694 3.59154L65.0831 4.0905L62.613 6.49638L63.1959 9.89525L60.1429 8.28968L57.0898 9.89525L57.6727 6.49638L55.2026 4.0905L58.6163 3.59154L60.1429 0.498962Z"
                  fill="#FF8A00" />
              </svg>
              <div class="price-cart">
                <div class="price">
                  <h4>₹708.00</h4>
                </div>
                <div class="cart">
                  <img src={{url("assets/images/cart.svg")}} alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Business Software section start -->

  <!-- Trending Tools section start  -->
  <section class="trending-toll">
    <div class="container">
      <div class="tranding-outer">
        <div class="tranding-text">
          <h3>Best Trending Tools</h3>
          <p>Link Airtable to your existing tools, connect
            important business processes, and build
            more powerful applications.</p>
          <a href="#" class="Explore-btn">Explore More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
              fill="none">
              <path d="M10.1622 1L15.2523 6.09009L10.1622 11.1802" stroke="black" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M15.2522 6.08984H1H15.2522Z" fill="black" />
              <path d="M15.2522 6.08984H1" stroke="black" stroke-linecap="round" />
            </svg></a>
        </div>
        <div class="tranding-image">
          <div class="marquee">
            <div class="marquee__group">
              <span><img src={{url('assets/images/link1.png')}} alt=''></span>
              <span><img src={{url('assets/images/link2.png')}} alt=''></span>
              <span><img src={{url('assets/images/link3.png')}} alt=''></span>
            </div>
          
            <div aria-hidden="true" class="marquee__group">
              <span><img src={{url('assets/images/link1.png')}} alt=''></span>
              <span><img src={{url('assets/images/link2.png')}} alt=''></span>
              <span><img src={{url('assets/images/link3.png')}} alt=''></span>
            </div>
          </div>
          
          <div class="marquee marquee--reverse">
            <div class="marquee__group">
              <span><img src={{url('assets/images/link44.png')}} alt=''></span>
              <span><img src={{url('assets/images/link5.png')}} alt=''></span>
              <span><img src={{url('assets/images/link6.png')}} alt=''></span>
            </div>
          
            <div aria-hidden="true" class="marquee__group">
              <span><img src={{url('assets/images/link44.png')}} alt=''></span>
              <span><img src={{url('assets/images/link5.png')}} alt=''></span>
              <span><img src={{url('assets/images/link6.png')}} alt=''></span>
            </div>
          </div>
        
          <div class="marquee">
            <div class="marquee__group">
              <span><img src={{url('assets/images/link3.png')}} alt=''></span>
              <span><img src={{url('assets/images/link2.png')}} alt=''></span>
              <span><img src={{url('assets/images/link1.png')}} alt=''></span>
              
              
            </div>
          
            <div aria-hidden="true" class="marquee__group">
              <span><img src={{url('assets/images/link3.png')}} alt=''></span>
              <span><img src={{url('assets/images/link2.png')}} alt=''></span>
              <span><img src={{url('assets/images/link1.png')}} alt=''></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Trending Tools section end  -->

  <!-- testimonial slider section start  -->
  <section class="clint-slider">
    <div class="container">
      <div class="testimonial-text text-center">
        <h3>The people who know products</h3>
        <p>Curating only the best in tech is literally what we do. All day. Every day. We're very good at it..</p>
      </div>
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <p>I tell everyone who I think would care about Product Hunt. It is literally the only 
              daily or weekly or monthly newsletter that I check out regularly. 
              And I save them if I can’t read them on the day of.</p>
            <div class="clint-data">
              <div class="clint-img">
                <img src={{url("assets/images/clint-1.webp")}} alt="clint-image">
              </div>
              <div class="clint-profile">
                <h5>Shelby Joy Scarbrough</h5>
                <p>Client</p>
              </div>
            </div>
            
          </div>
          <div class="item">
            <p>I tell everyone who I think would care about Product Hunt. It is literally the only daily or weekly or
               monthly newsletter that I check out regularly. And I save them if I can’t read them on the day of.</p>
            <div class="clint-data">
              <div class="clint-img">
                <img src={{url("assets/images/clint-2.webp")}} alt="clint-image">
              </div>
              <div class="clint-profile">
                <h5>Samin Chowdhury</h5>
                <p>Client</p>
              </div>
            </div>
            
          </div>
          <div class="item">
            <p>I tell everyone who I think would care about Product Hunt. It is literally the only 
              daily or weekly or monthly newsletter that I check out regularly. 
              And I save them if I can’t read them on the day of.</p>
            <div class="clint-data">
              <div class="clint-img">
                <img src={{url("assets/images/clint-1.webp")}} alt="clint-image">
              </div>
              <div class="clint-profile">
                <h5>Shelby Joy Scarbrough</h5>
                <p>Client</p>
              </div>
            </div>
            
          </div>
          <div class="item">
            <p>I tell everyone who I think would care about Product Hunt. It is literally the only daily or weekly or
               monthly newsletter that I check out regularly. And I save them if I can’t read them on the day of.</p>
            <div class="clint-data">
              <div class="clint-img">
                <img src={{url("assets/images/clint-2.webp")}} alt="clint-image">
              </div>
              <div class="clint-profile">
                <h5>Samin Chowdhury</h5>
                <p>Client</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial slider section end  -->

  <!-- Resources section start  -->
  <section class="resource">
    <div class="container">
      <h3 class="resourse-heading">Resources All for you</h3>
      <div class="resources-outer">
        <div class="resources-inner">
          <div class="alter-data">
            <img src={{url("assets/images/alternative.webp")}} alt="">
            <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="21"
                viewBox="0 0 20 21" fill="none">
                <rect width="20" height="20" transform="translate(0 0.280273)" fill="url(#pattern0_88_1443)" />
                <defs>
                  <pattern id="pattern0_88_1443" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_88_1443" transform="scale(0.05)" />
                  </pattern>
                  <image id="image0_88_1443" width="20" height="20"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACfklEQVQ4y+WUz4tNYRjHP9/3jpM595hk5tw79w5FY6yRX7GQWDEbSbOa/4EUkjSJRCmyoZRkY2Kl7CyUlFjY2DBNiRnnzj33Xsqde3Wvcx4LZzQxZKk8m3fxfnve5/k+7+eBfz30u4s15bK6na6PEQAegGEdcM1lnteaiWbsrxKWBkLPUoaB3YbtAEaAVZm2AUwJniE9BqYr9bizZMJyf1GpbLVZOo4xBhSBBAiBZZmsC1SBnuyclNMdifdRHBtADqDYHzqwzWZ2ETgEvBK6BrSBTQs6IEGaBN3KHjyEsdGMqRW9fqXZbplKYShLbIvBZWBQ4gqme0DOsPvArp9ceSJxGFOKOGxmR4EK6FjOuRcuTRk2mABKkk46525WGnGcmdGzhO89IFUaceycbko6AZTAJlJLRnJBr38W2CvpkuTuRrVqByDwg+53IdsWedgS3JZ41Gy3ks+t+aQvCKYzb8eAlbmg178OvANdqNSrjYUymu35pM/PvwYlwEqgIum2pBtRvfZpQfe5NZ8Evl8F9gFbHfAAWCdxoBSG3uLePtSqkZzOOef2O+cOSO78h1o1WqwphwUPNAqsBR6o2B+ux+wqsEHScTk9jOJq52+oKIcFL01t1MwuAa8lHcn1BfmPGG+AncBBw76s8PNvA7+v3Ww3l0w0VCgov7x3wIxxMzsNRBKncHqlhX8o2GRmZ7IhPBWaRLwAGhIdADM8YJXBNszGsiKeSzpr8HKuHqe/kpKm49nECsAcMAXUMtlAhmIRqAruIt3J4WZn63O2NMv9oWcwbGZ7gO2LWOYHy+IZ8FjSdFT7Dcu/+DQ4pK/dbh7SvFC2begINXv+sG3+w/gGE278ri7pcp4AAAAASUVORK5CYII=" />
                </defs>
              </svg> Guides and Playbooks</p>
            <h3>Protect Your Online Identity with Surfshark’s Alternative ID</h3>
            <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus cum phasellus odio.
              In elit vitae sagittis tincidunt. Tristique pharetra at adipiscing turpis. Vitae commodo vulputate.</p>
            <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                fill="none">
                <path d="M10.1622 1L15.2523 6.09009L10.1622 11.1802" stroke="black" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M15.2522 6.08984H1H15.2522Z" fill="black" />
                <path d="M15.2522 6.08984H1" stroke="black" stroke-linecap="round" />
              </svg></a>
          </div>
        </div>
        <div class="resources-inner">
          <div class="microsoft">
            <div class="micro-text">
              <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="21"
                viewBox="0 0 20 21" fill="none">
                <rect width="20" height="20" transform="translate(0 0.280273)" fill="url(#pattern0_88_1443)" />
                <defs>
                  <pattern id="pattern0_88_1443" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_88_1443" transform="scale(0.05)" />
                  </pattern>
                  <image id="image0_88_1443" width="20" height="20"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACfklEQVQ4y+WUz4tNYRjHP9/3jpM595hk5tw79w5FY6yRX7GQWDEbSbOa/4EUkjSJRCmyoZRkY2Kl7CyUlFjY2DBNiRnnzj33Xsqde3Wvcx4LZzQxZKk8m3fxfnve5/k+7+eBfz30u4s15bK6na6PEQAegGEdcM1lnteaiWbsrxKWBkLPUoaB3YbtAEaAVZm2AUwJniE9BqYr9bizZMJyf1GpbLVZOo4xBhSBBAiBZZmsC1SBnuyclNMdifdRHBtADqDYHzqwzWZ2ETgEvBK6BrSBTQs6IEGaBN3KHjyEsdGMqRW9fqXZbplKYShLbIvBZWBQ4gqme0DOsPvArp9ceSJxGFOKOGxmR4EK6FjOuRcuTRk2mABKkk46525WGnGcmdGzhO89IFUaceycbko6AZTAJlJLRnJBr38W2CvpkuTuRrVqByDwg+53IdsWedgS3JZ41Gy3ks+t+aQvCKYzb8eAlbmg178OvANdqNSrjYUymu35pM/PvwYlwEqgIum2pBtRvfZpQfe5NZ8Evl8F9gFbHfAAWCdxoBSG3uLePtSqkZzOOef2O+cOSO78h1o1WqwphwUPNAqsBR6o2B+ux+wqsEHScTk9jOJq52+oKIcFL01t1MwuAa8lHcn1BfmPGG+AncBBw76s8PNvA7+v3Ww3l0w0VCgov7x3wIxxMzsNRBKncHqlhX8o2GRmZ7IhPBWaRLwAGhIdADM8YJXBNszGsiKeSzpr8HKuHqe/kpKm49nECsAcMAXUMtlAhmIRqAruIt3J4WZn63O2NMv9oWcwbGZ7gO2LWOYHy+IZ8FjSdFT7Dcu/+DQ4pK/dbh7SvFC2begINXv+sG3+w/gGE278ri7pcp4AAAAASUVORK5CYII=" />
                </defs>
              </svg> Guides and Playbooks</p>
              <h3>Microsoft's photographic memory PC</h3>
              <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus cum phasellus odio.</p>
              <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                fill="none">
                <path d="M10.1622 1L15.2523 6.09009L10.1622 11.1802" stroke="black" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M15.2522 6.08984H1H15.2522Z" fill="black" />
                <path d="M15.2522 6.08984H1" stroke="black" stroke-linecap="round" />
              </svg></a>
            </div>
            <div class="micro-img">
              <img src={{url("assets/images/microsoftnew.webp")}} alt="">
            </div>
          </div>
          <div class="powered-ai">
            <img src={{url("assets/images/image14.png")}} alt="">
            <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="21"
              viewBox="0 0 20 21" fill="none">
              <rect width="20" height="20" transform="translate(0 0.280273)" fill="url(#pattern0_88_1443)" />
              <defs>
                <pattern id="pattern0_88_1443" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_88_1443" transform="scale(0.05)" />
                </pattern>
                <image id="image0_88_1443" width="20" height="20"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACfklEQVQ4y+WUz4tNYRjHP9/3jpM595hk5tw79w5FY6yRX7GQWDEbSbOa/4EUkjSJRCmyoZRkY2Kl7CyUlFjY2DBNiRnnzj33Xsqde3Wvcx4LZzQxZKk8m3fxfnve5/k+7+eBfz30u4s15bK6na6PEQAegGEdcM1lnteaiWbsrxKWBkLPUoaB3YbtAEaAVZm2AUwJniE9BqYr9bizZMJyf1GpbLVZOo4xBhSBBAiBZZmsC1SBnuyclNMdifdRHBtADqDYHzqwzWZ2ETgEvBK6BrSBTQs6IEGaBN3KHjyEsdGMqRW9fqXZbplKYShLbIvBZWBQ4gqme0DOsPvArp9ceSJxGFOKOGxmR4EK6FjOuRcuTRk2mABKkk46525WGnGcmdGzhO89IFUaceycbko6AZTAJlJLRnJBr38W2CvpkuTuRrVqByDwg+53IdsWedgS3JZ41Gy3ks+t+aQvCKYzb8eAlbmg178OvANdqNSrjYUymu35pM/PvwYlwEqgIum2pBtRvfZpQfe5NZ8Evl8F9gFbHfAAWCdxoBSG3uLePtSqkZzOOef2O+cOSO78h1o1WqwphwUPNAqsBR6o2B+ux+wqsEHScTk9jOJq52+oKIcFL01t1MwuAa8lHcn1BfmPGG+AncBBw76s8PNvA7+v3Ww3l0w0VCgov7x3wIxxMzsNRBKncHqlhX8o2GRmZ7IhPBWaRLwAGhIdADM8YJXBNszGsiKeSzpr8HKuHqe/kpKm49nECsAcMAXUMtlAhmIRqAruIt3J4WZn63O2NMv9oWcwbGZ7gO2LWOYHy+IZ8FjSdFT7Dcu/+DQ4pK/dbh7SvFC2begINXv+sG3+w/gGE278ri7pcp4AAAAASUVORK5CYII=" />
              </defs>
            </svg> Guides and Playbooks</p>
            <h3>This AI-powered tool will handle your meeting prep for you</h3>
            <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus cum phasellus odio.
              In elit vitae sagittis tincidunt. Tristique pharetra at adipiscing turpis. Vitae commodo vulputate.</p>
              <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                <path d="M10.1622 1L15.2523 6.09009L10.1622 11.1802" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.2522 6.08984H1H15.2522Z" fill="black"></path>
                <path d="M15.2522 6.08984H1" stroke="black" stroke-linecap="round"></path>
              </svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Resources section End  -->

@endsection