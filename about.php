<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>We are a dedicated educational institution committed to nurturing student excellence through innovative programs and personalized support. Our mission is to empower individuals with the knowledge and skills needed to succeed in today's dynamic world. With a focus on holistic development and a welcoming, inclusive environment, we celebrate diversity and value each student's unique journey. Our passionate team of educators and staff are here to guide and inspire, creating a vibrant learning community where students can thrive and achieve their full potential. Join us in shaping a brighter future through the power of education.</p>
         <a href="courses.php" class="inline-btn">Our Courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>Online Courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>Brilliants Students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>Expert Teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Job Placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Student's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Enrolling here was the best decision I made. The personalized attention and innovative teaching methods helped me excel academically. The supportive environment and diverse community enhanced my learning experience. I highly recommend this institution to anyone seeking a top-notch education</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Priya Kumari</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I'm incredibly grateful for the opportunities this institution has provided. The engaging curriculum and hands-on learning approach have prepared me for real-world challenges. The faculty members are knowledgeable and supportive, fostering a positive learning environment. I'm proud to be a part of such a dynamic educational community</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Akash</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>This institution goes above and beyond to ensure student success. The resources and support services available are exceptional. The faculty members are dedicated and passionate about teaching. I've gained valuable skills and experiences that will benefit me in my future career. I couldn't be happier with my education here.</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Rohit</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Choosing this institution was a game-changer for me. The curriculum is relevant and up-to-date, preparing me for the demands of the workforce. The hands-on projects and internships provided practical experience. The friendly and inclusive atmosphere makes learning enjoyable. I highly recommend this institution to anyone seeking quality education.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Tushar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I've had an amazing experience at this institution. The faculty members are knowledgeable and supportive, always willing to go the extra mile for students. The campus environment is vibrant and diverse, offering numerous opportunities for personal and professional growth. I'm proud to be part of such an inspiring educational community.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Shivam</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I can't say enough good things about this institution. The academic programs are rigorous and challenging, pushing me to strive for excellence. The career services and networking opportunities have been invaluable in shaping my future. I feel well-prepared and confident as I embark on my professional journey. Thank you for an incredible education.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Sunaina</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->


<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>