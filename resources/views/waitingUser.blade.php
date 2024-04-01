<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionear</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="assets/js/main.js"></script>
<!-- 
        <style>
            .page-loader{
                height:100vh !important;
                width:100% !important;
                background-size:cover !important;
                text-align:center !important;
                
            }
            .spinner-border{
              margin-top:50vh !important;
              position: relative;
              top:5px !important;
            }
        </style> -->

        </head>
        <body>
                    <!--begin::Page loading(append to body)-->
                    <!-- <div class="page-loader flex-column bg-secondary bg-opacity-25">
                        <span class="spinner-border text-primary" role="status"></span>
                        <span class="text-gray-800 fs-6 fw-semibold m-1">Please wait for account activation....</span>
                    </div> -->
                    <!--end::Page loading-->
                    <div class=" container mt-5">
                        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-xl-center">
                                <div class="col-12 col-lg-6">
                                    <img class="img-fluid rounde col-12 col-xl-12"  loading="lazy" src="/assets/images/waiting-room.png"  alt="">
                                </div>
                        
                                <div class="col-md-5">
                                    <div class="card">
                                            <div class="card-header text-dark"> <b>Hello!</b></div>
                                                    <small class="p-3 text-center     fs-3 text-secondary ">For account activation, kindly wait. <br> After your account has been activated, <br> you will receive an SMS. <span class="text-danger"> Thank you!</span></small>
                                                <div class="card-body">
                                                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                                        
                                                        </form>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                        </div>    
                    </div>

                    <script>
                        // Toggle
                                // const button = document.querySelector("#kt_page_loading_overlay");

                                // Handle toggle click event
                                // button.addEventListener("click", function() {
                                    // Populate the page loading element dynamically.
                                    // Optionally you can skipt this part and place the HTML
                                    // code in the body element by refer to the above HTML code tab.
                                    // const loadingEl = document.createElement("div");
                                    // document.body.prepend(loadingEl);
                                   // loadingEl.classList.add("page-loader");
                                    // loadingEl.classList.add("flex-column");
                                    // loadingEl.classList.add("bg-dark");
                                    // loadingEl.classList.add("bg-opacity-25");
                                    // loadingEl.innerHTML = `
                                        // <span class="spinner-border text-primary" role="status"></span>
                                        // <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
                                    // `;

                                    // Show page loading
                                    //  KTApp.showPageLoading();

                                    // Hide after 3 seconds
                                    // setTimeout(function() {
                                        // KTApp.hidePageLoading();
                                        // loadingEl.remove();
                                    // }, 3000);
                                // });
                    </script>
            
        </body>
</html>