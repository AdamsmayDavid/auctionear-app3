@extends('layouts.app')

@section('content')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        
        <style>
         
           
        </style>

                <div class="container" style="margin-top:100px;">
                    <h1 class=" text-primary">Create Auction</h1> 

                    <form id="auctionForm" action="{{ route('newAuction') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="mb-3">
                        <label for="itemName" class="form-label">Vehicle type</label>

                        <!-- <input type="text" class="form-control" id="itemName" placeholder="Enter item name" required> -->
                        
                        <select name="auto_id" class="form-select" aria-label="Default select example">
                            <option selected>What type of Vehicle is it?</option>
                                @foreach($autos as $auto)
                                    <option value="{{$auto->id}}">{{$auto->auto_type}}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter item description" required></textarea>
                    </div>

                    <div class="mb3">
                        <label for="datetime">End Date and Time:</label>
                        <input type="datetime-local" class="form-control" id="datetime" name="end_dt"  value="2024-04-04T15:40" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="startingPrice" class="form-label">Starting Price</label>
                        <input name="starting_price" type="number" class="form-control" id="startingPrice" placeholder="Enter starting price" required>
                    </div>

                    <!-- <div class="mb-3">
                        <label for="auctionDate" class="form-label">Auction Date</label>
                        <input name="auc_date" type="date" class="form-control" id="auctionDate" required>
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="auctionTime" class="form-label">Auction Time</label>
                        <input name="auc_time" type="time" class="form-control" id="auctionTime" required>
                    </div> -->


                    <div class="container">
                        <h2>Upload Images</h2>
                        <div class="form-group m-3">
                            <label for="image1">Image 1:</label>
                            <input type="file" class="form-control-file" id="image1" name="auctionImage1" required>
                        </div>
                        <div class="form-group m-3">
                            <label for="image2">Image 2:</label>
                            <input type="file" class="form-control-file" id="image2" name="auctionImage2" required>
                        </div>
                        <div class="form-group m-3">
                            <label for="image3">Image 3:</label>
                            <input type="file" class="form-control-file" id="image3" name="auctionImage3" required>
                        </div>
                        <div class="form-group m-3">
                            <label for="image4">Image 4:</label>
                            <input type="file" class="form-control-file" id="image4" name="auctionImage4" required>
                        </div>
                    </div>

                  

                    <button type="submit" class="btn btn-primary btn-lg col-12" >Post</button>
                    </form>
                </div>

                <!-- for images only 4 can upload -->
                <script>
                $(document).ready(function() {
                    $('#submitButton').click(function() {
                    // Get the value of the datetime input
                    var datetimeValue = $('#datetime').val();

                    // Split the date and time parts
                    var parts = datetimeValue.split('T');
                    var datePart = parts[0];
                    var timePart = parts[1];

                    // Reformat the date and time
                    var formattedDateTime = datePart + ' ' + timePart + ':00';

                    // Update the value of the datetime input
                    $('#datetime').val(formattedDateTime);

                    // Submit the form
                    $('#submit').submit();
                    });
                });
                </script>
            <script>
                // function validateFileUpload() 
                // {
                //     var input = document.getElementById('imageUpload');
                //     var files = input.files;

                //     if (files.length > 4) {
                //         alert('Please select up to 4 images.');
                //         input.value = '4';
                //     }
                //  }
            </script>
            <!-- script file -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
            
@endsection     
     