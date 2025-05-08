<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/HeaderFooter/service-header.php";
?>
    <style>
        .img_container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px;
            gap: 40px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 380px;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }
        .details {
            max-width: 350px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #0e1b4d;
        }
        .price-section {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #d32f2f;
        }
        .original-price {
            text-decoration: line-through;
            color: gray;
            font-size: 18px;
        }
        .sale-price {
            color: #f82249;
            font-size: 22px;
            font-weight: bold;
        }
        .discount-badge {
            background-color: #ff9800;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            margin-left: 10px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .buy-btn {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background-color: #f82249;
            color: white;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        .buy-btn:hover {
            background-color: #b71c1c;
        }
        
        /* Center the main image */
        .product {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    
        .main-image {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            transition: 0.3s;
        }
    
        /* Center thumbnails with wrapping */
        .thumbnail-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            padding: 10px;
        }
    
        .thumbnail {
            width: 60px;
            height: 60px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: 0.3s;
        }
    
        .thumbnail:hover, .thumbnail.active {
            border: 2px solid #007bff;
        }
    
        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .main-image {
                max-width: 300px;
            }
    
            .thumbnail {
                width: 50px;
                height: 50px;
            }
        }
    </style>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" style="background: url(../BG_Images/AR-Photoframe.png) top center; !important">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">AR Photoframe for special Gift</h1>
      <a href="https://www.youtube.com/watch?v=dc1IUwx3jaU" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <p style="text-align: center;">Experience the magic of your most cherished memories like never before with DuetVR's <strong>AR Photo Frame</strong>. This isn’t just a photo—it’s a living memory that comes to life with a simple scan. Watch your favorite moments transform into immersive videos, messages, or animations right from your device, creating an interactive experience that traditional photos just can’t capture. Perfect for weddings, anniversaries, or any special occasion, our AR Photo Frame offers a unique way to relive your story and share it with loved ones, blending nostalgia with cutting-edge technology. Let your memories do more than sit on a shelf—let them come alive with DuetVR.</p>
        </div>
      </div>
    </section>
    
    <!--===================== 
        Pricing Section
    ========================-->
        
    <section class="container-fluid p-3">
    <div class="row">
        <!-- Product and Details Section -->
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="product text-center">
                        <img id="displayImage" src="https://duetvr.com/services/images/img1.jpg" alt="AR Photoframe" class="img-fluid">
                    </div>
                    <div class="thumbnail-container">
                        <img src="https://duetvr.com/services/images/img1.jpg" class="thumbnail img-thumbnail" onclick="changeImage(this)">
                        <img src="https://duetvr.com/services/images/img2.jpg" class="thumbnail img-thumbnail" onclick="changeImage(this)">
                        <img src="https://duetvr.com/services/images/img3.jpg" class="thumbnail img-thumbnail" onclick="changeImage(this)">
                        <img src="https://duetvr.com/services/images/img4.jpg" class="thumbnail img-thumbnail" onclick="changeImage(this)">
                    </div>
                </div>
                <div class="col-12 col-sm-6 justify-content-center">
                    <div class="details text-center text-sm-start">
                        <h2 class="title fw-bold">Keep Your Memories Alive and Unforgettable...! | AR Photo Frame</h2>
                        <div class="price-section">
                            <span class="original-price text-decoration-line-through" id="originalPrice">₹439</span>
                            <span class="sale-price text-danger fw-bold" id="salePrice">₹360</span>
                            <span class="discount-badge bg-success text-white px-2 py-1 rounded">18% OFF</span>
                        </div>
                        <form action="payments/ar-photoframe/" method="POST">
                            <label for="color" class="d-block mt-2">Color:</label>
                            <select id="color" name="frame" class="form-select w-75 mx-auto mx-sm-0" onchange="updateImage()">
                                <option value="light">Light Wooden</option>
                                <option value="dark">Dark Wooden</option>
                                <option value="black">Black Wooden</option>
                            </select>
                            <label for="size" class="d-block mt-2">Size:</label>
                            <select id="size" name="size" class="form-select w-75 mx-auto mx-sm-0" onchange="updatePrice()"></select>
                            <div style="justify-items: center;">
                                <button class="buy-btn btn btn-primary w-75 mt-3" id="buyBtn" style="display: none;">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pincode Check Section -->
        <div class="col-12 col-md-4 mt-4 mt-md-0">
            <h2 class="text-center text-md-start">Check Pincode & Store Availability</h2>
            <div class="input-group mb-3 w-75 mx-auto mx-md-0">
                <input type="text" id="pincode" class="form-control" placeholder="Enter 6-digit Pincode">
                <button class="btn btn-primary" onclick="checkDelivery()">Check</button>
            </div>
            <div id="result" class="mt-3 text-center text-md-start"></div>
        </div>
    </div>
</section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>FAQ</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">What is an AR Photo Frame?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      An AR (Augmented Reality) Photo Frame is a physical frame that combines traditional photos with interactive digital elements. By scanning the frame with a smartphone, you can watch photos come to life with videos, animations, or personalized messages.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">How does the AR Photo Frame work?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Simply scan the photo frame using your smartphone’s camera or a dedicated app, and watch your image transform with interactive content such as videos, animations, or sound that complements the photo.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">What devices support the AR Photo Frame?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      The AR Photo Frame is compatible with most iOS and Android smartphones and tablets. All you need is a device with a camera and an internet connection.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Do I need a special app to view the AR content?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Depending on the frame, you might need an app provided by DuetVR, or you can use your standard camera with a QR code. Our team will guide you on the best method for your specific frame.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Can I customize the AR content?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes! You can choose from various AR content options, such as adding video, sound clips, or animations to suit your event or personal preferences. We tailor the content to make each AR Photo Frame unique and meaningful.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Is the AR content permanent?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Absolutely. Once set, the AR content remains linked to the frame, allowing you to revisit your memories as often as you like. You can even update the content if desired for future events.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq7" class="collapsed">How durable is the AR Photo Frame?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq7" class="collapse" data-parent="#faq-list">
                    <p>
                      Our AR Photo Frames are crafted with high-quality materials to ensure they last. The digital content linked to each frame is also stored securely, so your memories are safe and accessible for years to come.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq8" class="collapsed">What kind of events is the AR Photo Frame best suited for?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq8" class="collapse" data-parent="#faq-list">
                    <p>
                      The AR Photo Frame is ideal for weddings, anniversaries, birthdays, and other special events where you want to capture and relive beautiful moments in a unique, interactive way.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq9" class="collapsed">How can I order an AR Photo Frame?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq9" class="collapse" data-parent="#faq-list">
                    <p>
                      You can place an order through our DuetVR website or contact our team for a custom design consultation. We’ll help you select the right frame and content to make your memories unforgettable.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq10" class="collapsed">How long does it take to receive my AR Photo Frame?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq10" class="collapse" data-parent="#faq-list">
                    <p>
                      After you place your order, our team typically takes 2-3 weeks to create and deliver your customized AR Photo Frame, depending on the specifics of your order.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq11" class="collapsed">Is there an advance payment required?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq11" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes, we require a 50% advance payment upon placing your order. This advance allows us to begin the customization and production process for your AR Photo Frame. The remaining balance is due upon completion and prior to delivery. We’ll keep you updated every step of the way to ensure your experience is seamless and satisfying.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>

      </div>

    </section>
    
    <!--==========================
      Testimonial
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Testimonial</h2>
          <!-- Carousel -->
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p style="text-align: center;">"The AR Photo Frame has completely transformed how we view our family photos! When I scan the frame, I get to relive the memories associated with each picture, complete with animations and music. It’s like stepping back in time! My kids love it, and it has sparked so many wonderful conversations about our family history. Highly recommend!"</p>
          	<p class="mb-3"><b>— Sneha K.</b></p>
              </div>
              <div class="carousel-item">
                <p style="text-align: center;">"I purchased the AR Photo Frame for my parents' anniversary, and it was a hit! They were amazed to see their wedding photos come to life with lovely music and special effects. It made the celebration so much more memorable and personal. Thank you, DuetVR, for creating such a unique and innovative product!"</p>
          	<p class="mb-3"><b>— Vikram P.</b></p>
              </div>
              <div class="carousel-item">
               	<p style="text-align: center;">"The AR Photo Frame is a fantastic way to keep our cherished memories alive! I love how easy it is to use, and the quality of the augmented reality is impressive. I often find myself smiling as I watch our family moments unfold right in front of me. This has become a centerpiece in our living room, and everyone who visits is captivated by it!"</p>
          	<p class="mb-3"><b>— Meera T.</b></p>
              </div>
            </div>
          </div>
          <!-- End of Carousel -->
        </div>
      </div>
    </section>
    
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                   
                </div>
                <div class="row container">
                    <div class="col-lg-6 mb-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d937.6452872385786!2d80.1947441859549!3d13.088655971605792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5264056ed11a4f%3A0x1e545a3434f86e82!2sDuetVR%20%7C%20Immersive%20Experiences%20for%20Special%20Events!5e1!3m2!1sen!2sin!4v1728905847079!5m2!1sen!2sin"
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                
                    <div class="col-lg-6">
                        <form action="contactform/contactEmail.php" method="POST" style="max-width: 100%;" id="myForm">
                            <h3 class="text-center">Contact Us</h3>
                            <div class="row mt-2">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email ID" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 form-group">
                                    <input type="tel" id="phone" class="form-control" name="mobile" placeholder="Mobile Number" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 form-group">
                                    <button class="g-recaptcha submitBtn btn btn-outline-success" 
                                            data-sitekey="6LfjRVoqAAAAAIGDTWFfTZMZmcXxbKAU5WYBRc-4" 
                                            data-callback="onSubmit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
  </main>
  
  <script>
        function checkDelivery() {
            let pincode = document.getElementById("pincode").value;
            let buyBtn = document.getElementById("buyBtn");
            let resultDiv = document.getElementById("result");
        
            if (!/^\d{6}$/.test(pincode)) {
                alert("Please enter a valid 6-digit pincode.");
                return;
            }
        
            fetch("https://duetvr.com/pincode/pincode_check.php?pincode=" + pincode)
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        let message = `<h3 class="text-success">Pincode Available ✅</h3>`;
                        message += `<p><b>Store Available:</b> ${data.store_available ? "Yes ✅" : "No ❌"}</p>`;
        
                        message += `<h3>Shipping Methods:</h3><ul class="list-group">`;
                        data.shipping_methods.forEach(method => {
                            message += `<li class="list-group-item">
                                <b>${method.method}</b> - ${method.location} ${method.delivery_dates} (${method.cost})
                            </li>`;
                        });
                        message += "</ul>";
        
                        resultDiv.innerHTML = message;
        
                        // ✅ Show the "Buy Now" button
                        buyBtn.style.display = "block"; 
                    } else {
                        resultDiv.innerHTML = `<p class='text-danger'>${data.message}</p>`;
        
                        // ❌ Hide the "Buy Now" button
                        buyBtn.style.display = "none"; 
                    }
                })
                .catch(error => {
                    console.error("Error fetching pincode data:", error);
                    buyBtn.style.display = "none"; // Keep button hidden in case of error
                });
        }

    </script>
  
  <script>
        const framePrices = [
            { size: "6X4", price: 210 }, { size: "8X6", price: 260 },
            { size: "10X8", price: 340 }, { size: "12X10", price: 450 },
            { size: "15X10", price: 510 }, { size: "15X12", price: 560 },
            { size: "18X12", price: 680 }, { size: "20X16", price: 930 },
            { size: "24X16", price: 1240 }, { size: "24X18", price: 1370 },
            { size: "20X24", price: 1670 }, { size: "30X20", price: 2110 },
            { size: "36X24", price: 2720 }
        ];
        function populateSizes() {
            let sizeDropdown = document.getElementById("size");
            framePrices.forEach(frame => {
                let option = document.createElement("option");
                option.value = frame.size;
                option.textContent = frame.size + " inches";
                sizeDropdown.appendChild(option);
            });
        }
        function updatePrice() {
            let selectedSize = document.getElementById("size").value;
            let salePriceElement = document.getElementById("salePrice");
            let originalPriceElement = document.getElementById("originalPrice");
            
            let selectedFrame = framePrices.find(frame => frame.size === selectedSize);
            if (selectedFrame) {
                let basePrice = selectedFrame.price;
                let finalPrice = basePrice + 150; // Adding ₹100 for AR
                let originalPrice = Math.round(finalPrice / 0.82); // Decrease by 18%
        
                salePriceElement.textContent = "₹" + finalPrice.toLocaleString();
                originalPriceElement.textContent = "₹" + originalPrice.toLocaleString();
            }
        }
        
        // Image sources mapped to select options
            const images = {
                light: "https://duetvr.com/services/images/img1.jpg",
                dark: "https://duetvr.com/services/images/img2.jpg",
                black: "https://duetvr.com/services/images/img3.jpg"
            };
        
            function updateImage() {
                let selectedValue = document.getElementById("color").value;
                let imgElement = document.getElementById("displayImage");
        
                // Update the image source based on selection
                imgElement.src = images[selectedValue];
            }
        
            // Set default image on page load
            document.addEventListener("DOMContentLoaded", () => {
                updateImage();
            });
        
        window.onload = function() {
            populateSizes();
        };
        
        function changeImage(element) {
            let mainImage = document.getElementById('displayImage');
            mainImage.src = element.src;
    
            // Highlight selected thumbnail
            document.querySelectorAll('.thumbnail').forEach(img => img.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
  
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        initialCountry: "in" // Set the default country code here
      });
      
      function onSubmit(token) {
            document.getElementById("myForm").submit();
        }
    </script>
  
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/HeaderFooter/footer.php";
?>