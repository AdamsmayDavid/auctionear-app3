
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Feedback</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <center>
  <div class="container p-5" style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <h1 style="font-size:50px;" class="text-primary"  href=""><b>Auctio<span style="color:#FF6C22;">near </span></b></h1>
        <h1 class="text-secondary">Share your Feedback</h1>
        <div class="">
          <label for="feedbackInput" class="form-label text-secondary">Tell us about your experience</label>
          <!-- <input type="text" class="form-control" id="feedbackInput" style="height:100px;"> -->

          <form class="" action="https://api.web3forms.com/submit" method="POST">
              <div class="row gy-4 gy-xl-5 p-xl-5 justify-content-center">
                <input type="hidden" name="access_key" value="8bdd62a2-c4f5-4441-88b3-d332b3f97342">
                </div>
                <div class="col-12 col-md-7">
                <div class="col-12">
                  <textarea id="body" class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid mt-3">
                    <button id="btnsubmit" style="background-color:#FF6C22;" class="btn btn-lg text-light" type="submit" onclick="sendEmail()" value="Send an Email">Submit Feedback</button>
                  </div>
                </div>
              </div>
          </form>
          </center>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional if you need JavaScript features from Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function submitFeedback() {
      // Get the feedback input value
      var feedback = document.getElementById('feedbackInput').value;

      // Check if feedback is provided
      if (feedback.trim() !== '') {
        // Display feedback message
        document.getElementById('feedbackMessage').innerHTML = '<div class="alert alert-success" role="alert">Thank you for your feedback!</div>';
        // Clear the feedback input
        document.getElementById('feedbackInput').value = '';
      } else {
        // If feedback is empty, display an error message
        document.getElementById('feedbackMessage').innerHTML = '<div class="alert alert-danger" role="alert">Please provide your feedback.</div>';
      }
    }
  </script>
</body>
</html>
