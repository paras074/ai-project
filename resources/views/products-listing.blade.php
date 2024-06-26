<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ai Home</title>

  <link href={{url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css")}} rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href={{url("assets/style.css")}}>
  <link rel="stylesheet" href={{url("assets/resposive.css")}}>
  <link rel="stylesheet"
    href={{url("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css")}}>
  <link rel="stylesheet"
    href={{url("//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css")}}>
</head>

<body>
  <!-- header start  -->
  <header class="w-100">
    <nav class="navbar navbar-expand-md navbar-dark  w-100  p-0">
      <div class="custom-container">
        <div class="outer-nav-bar">
          <a class="navbar-brand fw-bold" href="#">
            <img src="assets/images/logo.png" alt="logo">
          </a>
          <li class="nav-item mobile-icon">
            <a class="nav-link p-0 "><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.00041 9.8C4.98706 8.81988 5.7703 8.01426 6.75041 8H17.2504C18.2305 8.01426 19.0138 8.81988 19.0004 9.8V17.9C19.0277 19.8605 17.4609 21.472 15.5004 21.5H8.50041C6.53995 21.472 4.97316 19.8605 5.00041 17.9V9.8Z"
                  stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M15.5004 10.7V7.1C15.5277 5.13953 13.9609 3.52797 12.0004 3.5C10.04 3.52797 8.47316 5.13953 8.50041 7.1V10.7"
                  stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
          <li class="nav-item serch-icon mobile-icon">
            <a class="nav-link p-0 "><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                fill="none">
                <path
                  d="M20.6 20.6L15 15M9.4 17.8C8.2969 17.8 7.20459 17.5827 6.18546 17.1606C5.16632 16.7384 4.24032 16.1197 3.4603 15.3397C2.68029 14.5597 2.06155 13.6337 1.63941 12.6145C1.21727 11.5954 1 10.5031 1 9.4C1 8.2969 1.21727 7.20459 1.63941 6.18546C2.06155 5.16632 2.68029 4.24032 3.4603 3.4603C4.24032 2.68029 5.16632 2.06155 6.18546 1.63941C7.20459 1.21727 8.2969 1 9.4 1C11.6278 1 13.7644 1.885 15.3397 3.4603C16.915 5.03561 17.8 7.17218 17.8 9.4C17.8 11.6278 16.915 13.7644 15.3397 15.3397C13.7644 16.915 11.6278 17.8 9.4 17.8Z"
                  stroke="#C4A484" stroke-width="2" />
              </svg>
            </a>
          </li>
          <button class="toggle-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15" viewBox="0 0 30 15" fill="none">
              <rect width="30" height="3" rx="1.5" fill="#C4A484" />
              <rect y="6" width="30" height="3" rx="1.5" fill="#C4A484" />
              <rect y="12" width="30" height="3" rx="1.5" fill="#C4A484" />
            </svg>
          </button>
        </div>
        <div class="nav-bar">
          <ul class="navbar-nav  align-items-center  w-100 navigation-side bg-white">
            <button class="toggle-btn button-crose">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none">
                <rect width="23.6705" height="2.55553" rx="1.27777"
                  transform="matrix(-0.611949 0.790897 -0.882351 -0.470591 17.3706 1.25372)" fill="#C4A484" />
                <rect width="23.5951" height="2.56249" rx="1.28125"
                  transform="matrix(0.596904 0.802313 -0.889816 0.456319 3.24048 0)" fill="#C4A484" />
              </svg></button>
            <li class="nav-item">
              <a class="nav-link p-0" aria-current="page" href="#">Browse AI solutions and products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 " href="#">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 ">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 ">Support</a>
            </li>
            <div class="icon-lists">
              <li class="nav-item">
                <a class="nav-link p-0 "><svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M19.375 10.3333C19.375 12.4734 17.6401 14.2083 15.5 14.2083C13.3599 14.2083 11.625 12.4734 11.625 10.3333C11.625 8.19315 13.3599 6.45825 15.5 6.45825C16.5277 6.45825 17.5133 6.86651 18.24 7.59321C18.9667 8.31992 19.375 9.30554 19.375 10.3333Z"
                      stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M20.0208 18.0833H10.9792C9.19575 18.0833 7.75 19.529 7.75 21.3124C7.75 23.0958 9.19575 24.5416 10.9792 24.5416H20.0208C21.8043 24.5416 23.25 23.0958 23.25 21.3124C23.25 19.529 21.8043 18.0833 20.0208 18.0833V18.0833Z"
                      stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </li>
              <li class="nav-item destop-icon">
                <a class="nav-link p-0 "><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5.00041 9.8C4.98706 8.81988 5.7703 8.01426 6.75041 8H17.2504C18.2305 8.01426 19.0138 8.81988 19.0004 9.8V17.9C19.0277 19.8605 17.4609 21.472 15.5004 21.5H8.50041C6.53995 21.472 4.97316 19.8605 5.00041 17.9V9.8Z"
                      stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M15.5004 10.7V7.1C15.5277 5.13953 13.9609 3.52797 12.0004 3.5C10.04 3.52797 8.47316 5.13953 8.50041 7.1V10.7"
                      stroke="#C4A484" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </li>
              <li class="nav-item destop-icon serch-icon">
                <a class="nav-link p-0 "><svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" fill="#C4A484" />
                    <path
                      d="M37.3 37.3L31.7 31.7M26.1 34.5C24.9969 34.5 23.9046 34.2827 22.8855 33.8605C21.8663 33.4384 20.9403 32.8197 20.1603 32.0396C19.3803 31.2596 18.7616 30.3336 18.3394 29.3145C17.9173 28.2954 17.7 27.2031 17.7 26.1C17.7 24.9968 17.9173 23.9045 18.3394 22.8854C18.7616 21.8663 19.3803 20.9403 20.1603 20.1603C20.9403 19.3802 21.8663 18.7615 22.8855 18.3394C23.9046 17.9172 24.9969 17.7 26.1 17.7C28.3278 17.7 30.4644 18.5849 32.0397 20.1603C33.615 21.7356 34.5 23.8721 34.5 26.1C34.5 28.3278 33.615 30.4643 32.0397 32.0396C30.4644 33.615 28.3278 34.5 26.1 34.5Z"
                      stroke="white" stroke-width="2" />
                  </svg>
                </a>
              </li>

            </div>
          </ul>
        </div>
        <div class="search-bar">
          <input type="search" name="" placeholder="search" id="">
        </div>
      </div>
    </nav>
  </header>
  <!-- header end  -->

  <!-- Banner section Start  -->
  <section class="Products-Listing-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center ad-order-2">
          <h2 class="banner-heading-listing">Find & Buy the best software for your business</h2>
          <p class="banner-subheading-listing">Search, compare, and buy the right software with confidence.</p>
          <ul class="bread-crume">
            <li><a href="">Home /</a> </li>
            <li> <a href="">&nbspProducts Listing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner section End  -->

  <!-- product section start  -->
  <section class="filter-outer-section">
    <div class="container">
      <div class="product-filter">
        <div class="filters-side">
          <div class="search-filter-bar">
            <input type="text" name="" placeholder="Search by Products" id="">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
              <path
                d="M20.6 20.6L15 15M9.4 17.8C8.2969 17.8 7.20459 17.5827 6.18546 17.1606C5.16632 16.7384 4.24032 16.1197 3.4603 15.3397C2.68029 14.5597 2.06155 13.6337 1.63941 12.6145C1.21727 11.5954 1 10.5031 1 9.4C1 8.2969 1.21727 7.20459 1.63941 6.18546C2.06155 5.16632 2.68029 4.24032 3.4603 3.4603C4.24032 2.68029 5.16632 2.06155 6.18546 1.63941C7.20459 1.21727 8.2969 1 9.4 1C11.6278 1 13.7644 1.885 15.3397 3.4603C16.915 5.03561 17.8 7.17218 17.8 9.4C17.8 11.6278 16.915 13.7644 15.3397 15.3397C13.7644 16.915 11.6278 17.8 9.4 17.8Z"
                stroke="#C4A484" stroke-width="2"></path>
            </svg>
          </div>
          <div class="Industry">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#five" aria-expanded="true" aria-controls="five">
                    Prices
                  </button>
                </h2>
                <div id="five" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <form>
                      <p class="range-text">Range <span>$120 - $300</span></p>
                    </form>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Industry
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form>
                        @foreach($industries as $industry)
                        <div class="form-group">
                            <input type="checkbox" id="{{ $industry->name }}">
                            <label for="{{ $industry->name }}">{{ $industry->name }}</label>
                        </div>
                        @endforeach
                    </form>
                </div>
</div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Categories
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body ">
                    <form>
                      @foreach($categories as $category)
                        <div class="form-group">
                             <input type="checkbox" id="{{ $category->name }}">
                             <label for="{{ $category->name }}">{{ $category->name }}</label>
                        </div>
                      @endforeach
                    </form>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Sub Categories
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <form>
            @foreach($subcategories as $subcategory)
            <div class="form-group">
                <input type="checkbox" id="{{ $subcategory->name }}">
                <label for="{{ $subcategory->name }}">{{ $subcategory->name }}</label>
            </div>
            @endforeach
        </form>
    </div>
</div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                    data-bs-target="#four" aria-expanded="false" aria-controls="four">
                    Popular Tags
                  </button>
                </h2>
                <div id="four" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <div class="buttons">
            @foreach($allTags as $tag)
            <button>{{ $tag }}</button>
            @endforeach
        </div>
    </div>
</div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="products">
          <div class="filter-bar">
            <div class="product-size">
              <p>Showing all 6 results</p>
            </div>
            <div class="sorting-filter">
              <select name="" id="">
                <option value="">Default sorting</option>
                <option value="">Action</option>
              </select>
            </div>
          </div>
          <div class="productes-outer-filter">
    @foreach($defaultproducts as $product)
    <div class="featured-ai-inner">
        <div class="image-text">
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            @else
            <img src="{{ url('assets/images/default-image.png') }}" alt="Default Image"> <!-- Fallback image -->
            @endif
            <h5>{{ $product->name }}</h5>
        </div>
        <p>{{ $product->short_description }}</p>
        <h6>Plans start at ${{ $product->price }}/mo</h6>
        <button>Buy Now</button>
    </div>
    @endforeach
</div>
        </div>
       
    </div>
  </section>
  <!-- product section End  -->

  <!-- Best Sales setion start  -->
  <section class="Best-Sales">
    <p class="text-center ai-subheading">The must-haves in your outbound sales tool stack</p>
    <h3 class="text-center ai-hedaing">Best Sales Prospecting Tools</h3>
    <div class="container">
      <div class="featured-ai-outer">
        @foreach($products as $product)
      @if($product->is_best_selling)
      <div class="featured-ai-inner" data-aos="fade-up" data-aos-duration="500">
      <div class="image-text">
      @if ($product->image)
      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
    @else
      <p>No image available</p>
    @endif
      <h5>{{ $product->name }}</h5>
      </div>
      <p>{{ $product->short_description }}</p>
      <h6>Plans start at ${{ number_format($product->price, 2) }}/mo</h6>
      <button>Buy Now</button>
      </div>
    @endif
    @endforeach
      </div>
    </div>
  </section>
  <!-- Best Sales setion End  -->

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
            <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20" height="21" viewBox="0 0 20 21" fill="none">
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
            <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus cum
              phasellus odio.
              In elit vitae sagittis tincidunt. Tristique pharetra at adipiscing turpis. Vitae commodo vulputate.</p>
            <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12"
                viewBox="0 0 16 12" fill="none">
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
              <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="20" height="21" viewBox="0 0 20 21" fill="none">
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
              <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus
                cum phasellus odio.</p>
              <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12"
                  viewBox="0 0 16 12" fill="none">
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
            <p class="eye-pera"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20" height="21" viewBox="0 0 20 21" fill="none">
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
            <p class="pera-text">Lorem ipsum dolor sit amet consectetur. Eget molestie a vehicula convallis faucibus cum
              phasellus odio.
              In elit vitae sagittis tincidunt. Tristique pharetra at adipiscing turpis. Vitae commodo vulputate.</p>
            <a href="#" class="Explore-btn">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12"
                viewBox="0 0 16 12" fill="none">
                <path d="M10.1622 1L15.2523 6.09009L10.1622 11.1802" stroke="black" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M15.2522 6.08984H1H15.2522Z" fill="black"></path>
                <path d="M15.2522 6.08984H1" stroke="black" stroke-linecap="round"></path>
              </svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Resources section End  -->

  <!-- footer section start  -->
  <footer class=" footer">
    <div class="container">
      <div class="fotter-outer">
        <div class="footer-inner logo-text">
          <img src={{url("assets/images/logo.png")}} alt="">
          <p>We are at the forefront of AI chatbot development, revolutionizing the way businesses engage with their
            customers.</p>
        </div>
        <div class="footer-inner">
          <h3>Company</h3>
          <ul>
            <li><a href="#">About Rotar AI</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Demo</a></li>
          </ul>
        </div>
        <div class="footer-inner">
          <h3>Recources</h3>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Tool Library</a></li>
          </ul>
        </div>
        <div class="footer-inner">
          <h3>Legal</h3>
          <ul>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="socail-copyright">
        <div class="social-links">
          <a href="#">Instagram</a>
          <a href="#">LinkedIn</a>
          <a href="#">Twitter</a>
          <a href="#">Facebook</a>
        </div>
        <div class="copy-right">
          <img src={{url("assets/images/short-logo.svg")}} alt="logo">
          <p>logoipsum. all Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end  -->



  <script src={{url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js")}}
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src={{url("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js")}}></script>
  <script src={{url("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js")}}></script>
  <script src={{url("https://use.fontawesome.com/826a7e3dce.js")}}></script>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    })
  </script>
  <script>
    $(".toggle-btn").click(function () {
      $(".nav-bar").toggleClass("main");
    });
  </script>
  <script>
    $(function () {
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
          $("header").addClass("active");
        } else {
          //remove the background property so it comes transparent again (defined in your css)
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <script>
    $(".serch-icon").click(function () {
      $(".search-bar").toggleClass("show-bar");
    });
  </script>
</body>

</html>