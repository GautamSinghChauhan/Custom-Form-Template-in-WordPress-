<?php
/*
Template Name: Netoyed Education Form
*/

get_header();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google School Reference</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"/>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Inter&family=Jost:wght@400;600&family=Source+Sans+3&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Inter&family=Jost:wght@400;600&family=Source+Sans+3&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Inter&family=Jost:wght@400;600&family=Source+Sans+3&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Inter&family=Jost:wght@400;600&family=Raleway&family=Source+Sans+3&display=swap");
      .navbar1 {
        position: fixed;
        min-width: 100%;
        z-index: 1;
      }
      .navbar2 {
        margin-top: 61.5px;
        position: fixed;
        min-width: 100%;
        box-shadow: 6px 6px 10px 0px rgba(0, 0, 0, 0.163);
        z-index: 1;
      }
      .navbar2 a {
        color: var(--Text, #4c4c5c);
        font-family: DM Sans;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 150% */
        text-decoration: none;
      }
      .side_part {
        position: relative;
        padding: 0;
        overflow: hidden;
        background-color: #ffd9d4;
      }

      .form_div {
        background-color: #fff;
        min-width: 50%;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
      }
      /* css for form */
      .form-floating .form-control {
        border: 0;
        border-radius: 0;
        border-bottom: 2px solid rgba(54, 54, 54, 0.103);
      }
      .form_div .tab h1 {
        color: #202033;
        text-align: center;
        font-family: Source Sans, sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 34px; /* 141.667% */
      }
      .form_div .tab h2 {
        color: #202033;
        text-align: center;
        font-family: Source Sans, sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 34px; /* 141.667% */
      }
      .division_line {
        height: 3px;
        left: 37.5%;
        position: relative;
        background: #bf3b2b;
      }

      .form-floating .form-control::placeholder {
        color: #c1c1c1;
        font-family: Source Sans, sans-serif;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
      }

      /* regform css */

      javascript:void(0) body {
        background-color: #f1f1f1;
      }

      #regForm {
        height: 100%;
        background-color: #ffffff;
        font-family: Raleway;
        padding: 40px;
      }
      h1 {
        text-align: center;
      }

      input {
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
      }

      input.invalid {
        background-color: #ffdddd;
      }

      /* Hide all steps by default: */
      .tab {
        display: none;
      }

      button {
        background-color: #aa2504;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
      }

      button:hover {
        opacity: 0.8;
      }
      #btnsubmit{
        margin-left: 10px;
      }

      #prevBtn {
        background-color: #bbbbbb;
      }

      /* Make circles that indicate the steps of the form: */
      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      }
      .check_box {
        text-align: start !important;
      }
      .step.active {
        opacity: 1;
      }

      /* Mark the steps that are finished and valid: */
      .step.finish {
        background-color: #aa2504;
      }

      /* progress bar css */

      .progress-container {
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 25px;
        height: 30px;
        position: relative;
      }

      .progress-bar {
        border-radius: 25px;
        height: 100%;
        background: linear-gradient(to right, #ffffff, #ff8331, #ff6600);
        width: 0;
        position: absolute;
        transition: width 0.3s ease;
        overflow: unset !important;
      }
      .progress-bubble {
        position: absolute;
        border-radius: 85px;
        top: 50%;
        right: 0%;
        transform: translate(0, -50%);
        background-color: #ff6600;
        color: white;
        padding: 29px;
        left: unset !important;
        font-size: 14px;
        white-space: nowrap;
      }

      .tab2 .progress-container {
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 25px;
        height: 30px;
        position: relative;
      }

      .tab2 .progress-bar {
        border-radius: 25px;
        height: 100%;
        background: linear-gradient(
          270deg,
          #0c8a2e 2.13%,
          #0c8a2e 2.15%,
          #e8ffee 113.47%
        );
        width: 0;
        position: absolute;
        transition: width 0.3s ease;
        overflow: unset !important;
      }
      .tab2 .progress-bubble {
        position: absolute;
        border-radius: 85px;
        top: 50%;
        right: 0%;
        transform: translate(0, -50%);
        background-color: #0c8a2e;
        color: white;
        padding: 29px;
        left: unset !important;
        font-size: 14px;
        white-space: nowrap;
      }
      .girl_image {
       
        object-fit: cover;
      }

      @media only screen and (max-width: 280px) {
        .two-div {
          display: flex;
          flex-direction: column;
          width: fit-content;
        }
        .left_heading {
          width: 104vw;
        }
        .girl_image {
          display: none;
        }
        .form_div {
          width: 100vw;
        }
      }
      /* css by gs */
      a.ast-custom-button-link.pum-trigger {
    text-decoration: none;
}

      @media screen and (min-width: 360px) and (max-width: 415px) {
        .two-div {
          display: flex;
          flex-direction: column;
          width: fit-content;
        }
        .left_heading {
          width: 102vw;
        }
        .girl_image {
          display: none;
        }
        .form_div {
          width: 100vw;
        }
        #regform {
          padding: 23px !important;
        }
      }
      .checkboxx {
        appearance: none;
        min-width: 22px; 
        height: 22px; 
        border: 2px solid #00000047; 
        border-radius: 3px; 
        margin-right: 10px;
        cursor: pointer; 
      }
      .checkboxx:checked::before {
        content: "\2713";
        font-size: 20px;
        color: #ff0000;
      }
      @media only screen and (min-width: 360px) {
        .girl_image {
          width: calc(100% - -42px);
          top: 65px;
        }
      }

      @media (max-width: 768px) {
        .progress-container {
          max-width: 100%; 
        }
        .progress-bubble {
          padding: 18px;
        }

        .tab2 .progress-container {
          max-width: 100%; 
        }
        .tab2 .progress-bubble {
          padding: 18px;
        }
      }

      /* css for check boxes */
    </style>
  </head>
  <body>
    <!-- <header>
      <div class="navbar1 bg-white border-bottom">
        <div class="row">
          <div class="col-sm-10 p-2 px-lg-5">
            <img src="./images/Layer_1.svg" />
          </div>
          <div class="col-sm-2">
            <img src="./images/google-education.png" />
          </div>
        </div>
      </div>

      <div class="navbar2 bg-white">
        <div class="row p-2">
          <div class="col-sm-1 text-center py-2"><a href="">About us</a></div>
          <div class="col-sm-2 text-center py-2">
            <a href="">Smart Campus</a>
          </div>
          <div class="col-sm-3 text-center py-2">
            <a href="">Chrome books & Google Solutions</a>
          </div>
          <div class="col-sm-1 text-center py-2"><a href="">Resources</a></div>
          <div class="col-sm-2 text-center py-2">
            <a href="">For Teachers</a>
          </div>
          <div class="col-sm-3">
            <div class="row float-end">
              <div class="col-sm-1 mx-2 py-1">
                <img src="./images/facebook.svg" />
              </div>
              <div class="col-sm-1 mx-2 py-1">
                <img src="./images/insta.svg" />
              </div>
              <div class="col-sm-1 mx-2 py-1">
                <img src="./images/linkdin.svg" />
              </div>
              <div class="col-sm-1 mx-2">
                <button type="button" class="btn btn-danger">Contact</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header> -->

    <!-- main body code start -->

    <div class="side_part">
      <div class="two-div row align-items-start">
        <div class="col-6 p-2">
          <div class="left_heading d-grid">
            <h1 class="text-center my-4">
              <span
                style="
                  color: #bf3b2b;
                  font-family: DM Sans;
                  font-size: 48px;
                  font-style: normal;
                  font-weight: 700;
                  line-height: 60px; /* 125% */
                "
                >Google</span
              >
              <span
                style="
                  color: #4c4c5c;
                  font-family: DM Sans;
                  font-size: 36px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: 60px;
                "
                >Reference School Audit</span
              >
            </h1>
            <p class="text-center my-2 px-5">
              <span
                style="
                  color: #202033;
                  font-family: Source Sans 3;
                  font-size: 19px;
                  font-style: normal;
                  font-weight: 300;
                  line-height: 34px;
                  text-align: left;
                "
                >To get yourself in the screening process and ultimately winning
                the Google Reference School badge, there are certain
                infrastructure and resource requirements that the school should
                fulfill.</span
              >
            </p>
          </div>
          <div class="imgeshow">
            <img
              class="girl_image position-relative"
              src="/wp-content/uploads/2023/11/girl_page1.png"
            />
          </div>
          <!-- <div  class="imgeshow"  >
  <img class="position-relative " src="./images/girl_page2.png" />
</div>
<div class="imgeshow"  >
  <img class="position-relative " src="./images/girl_page3.png" />
</div>
<div  class="imgeshow" >
  <img class="position-relative " src="./images/girl_page4.png" /> -->
          <!-- </div>s -->
        </div>
        <div class="form-class col-6 text-center justify-content-center">
          <div class="form_div p-2">
            <form id="regForm" action="" method="POST">
              <!-- One "tab" for each step in the form: -->
              <div class="tab">
                <h1>Let's start your Google Reference</h1>
                <h2>School Journey</h2>
                <div class="division_line my-3 w-25"></div>
                <div class="form-floating mb-3">
                  <input
                    type="name"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Full Name" name="fname"
                    required
                  />
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Email Address"
                    required
                    name="email"
                  />
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="name"
                    class="form-control"
                    id="floatingInput"
                    placeholder="School Name"
                    required
                    name="school"
                  />
                </div>
                <div class="form-floating">
                  <input
                    type="number"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Phone Number"
                    !important
                    name="number"
                  />
                </div>
                <div class="lower_form d-grid"></div>
              </div>
              <div class="tab tab3">
                <h1>
                  <span
                    style="
                      color: #202033;
                      text-align: center;
                      font-family: Source Sans, sans-serif;
                      font-size: 24px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 34px; /* 141.667% */
                    "
                    >Here's a quick Google Reference Audit to help you
                    understand how you compare against other applicants:</span
                  >
                </h1>
                <div class="division_line my-4 w-25"></div>

                <!-- html for checkboxes  -->
                <div class="checks text-start">
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox1"
                      name="check1"
                      onclick="updateProgressBar()"
                    />
                    <span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Are you a K-12 institution ?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox2"
                      name="check2"
                      onclick="updateProgressBar()"
                    />
                    <span
                      class="ques px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Are you affiliated with a recognized education
                      board?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox3"
                      name="check3"
                      onclick="updateProgressBar()"
                    /><span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Do you have a sound & stable school WiFi?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox4"
                      name="check4"
                      onclick="updateProgressBar()"
                    /><span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Do you use Google Workspace for Education?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox3"
                      name="check5"
                      onclick="updateProgressBar()"
                    />
                    <span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Do you use Chromebooks in classroom learning?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox4"
                      name="check6"
                      onclick="updateProgressBar()"
                    /><span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Are at least 20% teachers in your school Level 1 Google
                      Educators?</span
                    >
                  </div>
                  <div class="check-text d-flex">
                    <input
                      class="checkboxx my-3"
                      type="checkbox"
                      id="checkbox3"
                      name="check7"
                      onclick="updateProgressBar()"
                    />
                    <span
                      class="px-1 py-2"
                      style="
                        color: #202033;
                        font-family: Source Sans, sans-serif;
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 188.889% */
                      "
                      >Are at least 5% teachers in your school Level 2 Google
                      Educators?</span
                    >
                  </div>
                </div>
              </div>
              <!-- percentage checkbox ticked html -->
              <div class="tab">
                <div class="tab1">
                  <h1>Only few more things to go!</h1>
                  <div class="division_line my-5 w-25"></div>

                  <div class="progress-container">
                    <div class="progress-bar" id="myProgressBarTab1">
                      <div class="progress-bubble" id="progressBubbleTab1">
                        0%
                      </div>
                    </div>
                  </div>
                  <h2 class="py-3">
                    <span
                      style="
                        color: #bf3b2b;
                        font-family: DM Sans, sans-serif;
                        font-size: 36px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: 60px; /* 166.667% */
                      "
                      >Google </span
                    ><span
                      style="
                        color: #4c4c5c;
                        font-family: DM Sans, sans-serif;
                        font-size: 24px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 60px;
                      "
                      >Reference School Progress Bar</span
                    >
                  </h2>
                  <h3>
                    <span
                      style="
                        color: #4c4c5c;
                        text-align: center;
                        font-family: Source Sans, sans-serif;
                        font-size: 22px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 154.545% */
                      "
                      >Book a free consultation with Sydney-based solution
                      architects to help you ace this journey</span
                    >
                  </h3>
                </div>
                <div class="tab2">
                  <h1>Only few more things to go!</h1>
                  <div class="division_line my-5 w-25"></div>

                  <div class="progress-container">
                    <div class="progress-bar" id="myProgressBarTab2">
                      <div class="progress-bubble" id="progressBubbleTab2">
                        0%
                      </div>
                    </div>
                  </div>
                  <h2 class="my-2">
                    <span
                      style="
                        color: #bf3b2b;
                        font-family: DM Sans, sans-serif;
                        font-size: 36px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: 60px; /* 166.667% */
                      "
                      >Google </span
                    ><span
                      style="
                        color: #4c4c5c;
                        font-family: DM Sans, sans-serif;
                        font-size: 24px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 60px;
                      "
                      >Reference School Progress Bar</span
                    >
                  </h2>
                  <h3>
                    <span
                      style="
                        color: #4c4c5c;
                        text-align: center;
                        font-family: Source Sans, sans-serif;
                        font-size: 22px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: 34px; /* 154.545% */
                      "
                      >Book a free consultation with Sydney-based solution
                      architects to help you ace this journey</span
                    >
                  </h3>
                </div>
              </div>
              <!-- button html -->
              <div style="overflow: auto">
                <div class="align-content-center py-4">
                  <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
                  <button
                    class="bg-danger px-5"
                    type="button"
                    id="nextBtn"
                    onclick="nextPrev(1)"
                  >
                    Take Test
                  </button>

                  <input type="submit" value="Submit" class="bg-danger px-5 py-2 " id="btnsubmit" name="insert">
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align: center; margin-top: 40px">
                <span class="step"></span>
                <span class="step"></span>
              </div>
              <img src="/wp-content/uploads/2023/11/reference_form.png" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- script for form -->
    <script>
      var imageUrls = [
        "/wp-content/uploads/2023/11/girl_page1.png",
        "/wp-content/uploads/2023/11/girl_page2.png",
        "/wp-content/uploads/2023/11/girl_page3.png",
        "/wp-content/uploads/2023/11/girl_page4.png",
      ];

      var currentTab = 0;
      showTab(currentTab);

      function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        var subbutton =  document.getElementById("btnsubmit")
        var nextbtn = document.getElementById("nextBtn");

        subbutton.style.display="none";

        if (n == x.length - 1) {
          document.getElementById("nextBtn").innerHTML = "Submit";
          subbutton.style.display="block";
          nextbtn.style.display="none";
        
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }

        if (storedProgressPercentage >= 50 && n === 3) {
          // Skip displaying tab1 and move to tab2
          n = 4; // Assuming tab2 is at index 1, adjust accordingly
        }

        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";

        if (n == x.length - 1) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }

        fixStepIndicator(n);
      }

      function fixStepIndicator(n) {
        // Check if storedProgressPercentage is greater than or equal to 50
        if (storedProgressPercentage >= 50) {
          // If stored progress percentage is more than 50, keep the active class on tab2 step
          document.querySelector(".step:nth-child(2)").className += " active";
        } else {
          // Otherwise, update step indicators based on the current step (tab)
          var i,
            x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          x[n].className += " active";
        }
      }

      function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;

        x[currentTab].style.display = "none";
        currentTab = currentTab + n;

        if (currentTab >= x.length) {
          var checkboxes = document.querySelectorAll('input[type="checkbox"]');
          var checkedCount = 0;

          checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
              checkedCount++;
            }
          });

          var percentageChecked = (checkedCount / checkboxes.length) * 100;
          var storedProgressPercentage = progressPercentage;
          console.log("Stored Progress Percentage:", storedProgressPercentage);
          console.log("Current Tab:", currentTab);
          console.log("Percentage Checked:", percentageChecked);

          // Check if storedProgressPercentage is greater than or equal to 50
          if (storedProgressPercentage >= 50) {
            console.log("Displaying tab2");
            document.querySelector(".tab2").style.display = "block";
            document.querySelector(".tab1").style.display = "none";
          } else {
            console.log("Displaying tab1");
            document.querySelector(".tab1").style.display = "block";
            document.querySelector(".tab2").style.display = "none";
          }

          if (currentTab >= x.length) {
            document.getElementById("regForm").submit();
            return false;
          }
        }

        if (currentTab < imageUrls.length) {
          document.querySelector(".imgeshow img").src = imageUrls[currentTab];
        } else {
          document.getElementById("regForm").submit();
          return false;
        }

        showTab(currentTab);
      }

      function updateProgressBar(tabId) {
        var progressBarId = "myProgressBar" + tabId;
        var progressBubbleId = "progressBubble" + tabId;

        var progressBar = document.getElementById(progressBarId);
        var progressBubble = document.getElementById(progressBubbleId);

        // ... (existing code for updating the progress bar)

        // Update the progress bar and bubblebubble
      }

      function validateForm() {
        var x,
          y,
          i,
          valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");

        for (i = 0; i < y.length; i++) {
          if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
          }
        }
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className +=
            " finish";
        }

        return valid;
      }


      // index script
      var currentStep = 1;
var totalSteps = document.querySelectorAll('.step').length;

function showStep(stepNumber) {
  document.querySelectorAll('.step').forEach(function (step) {
    step.classList.remove('active');
  });

  var currentStepElement = document.getElementById('step' + stepNumber);
  if (currentStepElement) {
    currentStepElement.classList.add('active');
  }
}

function nextStep() {
  if (currentStep < totalSteps) {
    currentStep++;
    showStep(currentStep);
  }
}

function prevStep() {
  if (currentStep > 1) {
    currentStep--;
    showStep(currentStep);
  }
}


// progress script
function updateProgressBar() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');

  var progressPercentage = (checkedCheckboxes.length / checkboxes.length) * 100;

  // Store progressPercentage in a variable
  var storedProgressPercentage = progressPercentage;
  const tab1 = document.querySelector('.tab1');
  const tab2 = document.querySelector('.tab2');

  if(storedProgressPercentage<=50){
    var progressBar = document.getElementById('myProgressBarTab1');
  var progressBubble = document.getElementById('progressBubbleTab1');
  tab1.style.display = 'block';
      tab2.style.display = 'none';
  }
  else{
    var progressBar = document.getElementById('myProgressBarTab2');
    var progressBubble = document.getElementById('progressBubbleTab2');
    tab1.style.display = 'none';
      tab2.style.display = 'block';
  }

  // Check if progressBar is not null before accessing its style property
  if (progressBar) {
    progressBar.style.width = storedProgressPercentage + '%';
  }

  // Check if progressBubble is not null before accessing its style property
  if (progressBubble) {
    progressBubble.style.left = progressBar.offsetWidth - progressBubble.offsetWidth + 'px';
    progressBubble.innerText = storedProgressPercentage.toFixed(0) + '%';
  }

  // Now you can use storedProgressPercentage as needed in your code

}
</script>
  </body>
</html>



<?php
            $servername = "127.0.0.1:3306";
            $username = "bn_wordpress";
            $password = "2870a23530152153acd00dc194c102742c079e4646861dec766585bb00d6cfd3";
            $dbname = "bitnami_wordpress";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            if (isset($_POST['insert'])) {
                $n = $_POST['fname'];
                $c = $_POST['email'];
                $m = $_POST['school'];
                $x = $_POST['number'];
                $c1 = isset($_POST['check1']) ? 1 : 0;
                $c2 = isset($_POST['check2']) ? 1 : 0;
                $c3 = isset($_POST['check3']) ? 1 : 0;
                $c4 = isset($_POST['check4']) ? 1 : 0;
                $c5 = isset($_POST['check5']) ? 1 : 0;
                $c6 = isset($_POST['check6']) ? 1 : 0;
                $c7 = isset($_POST['check7']) ? 1 : 0;
            
                // Use prepared statements to prevent SQL injection
                $stmt = $conn->prepare("INSERT INTO wp_netoyedrecord (name, email, school, number, checkbox1, checkbox2, checkbox3, checkbox4, checkbox5, checkbox6, checkbox7) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssiiiiiii", $n, $c, $m, $x, $c1, $c2, $c3, $c4, $c5, $c6, $c7);
            
                // Execute the query
                if ($stmt->execute()) {
                    $message = "Data Inserted Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    echo "Failed to insert data: " . $stmt->error;
                    echo "<br>SQL Query: " . $stmt->sqlstate; // Echo the SQL query for debugging
                }
            
                // Close the prepared statement
                $stmt->close();
            }
            
            get_footer(); // Include the footer
            
            // Close the database connection
            $conn->close();
        ?> 

