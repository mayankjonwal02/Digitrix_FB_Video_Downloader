<?php
$cookie_name = "codehap_domain";
$cookie_value = $_SERVER['HTTP_HOST'];
setcookie("$cookie_name", $cookie_value, time() + (86400 * 30), "/"); 
if(!isset($_COOKIE[$cookie_name])) {
    setcookie("$cookie_name", $cookie_value, time() + (86400 * 30), "/");
} 

$title = "Free Online FaceBook Videos and Images Downloader";
$decription = "Download FaceBook Videos and Images Downloader";
include'header.php'?>

<!-- Hero section-->
<section class=" py-5" style="background-image: linear-gradient(90deg, rgba(0,212,255,1) 17%, rgba(9,9,121,1) 93%, rgba(2,0,36,1) 100%, rgba(2,0,36,1) 100%);">
   <div class="container pt-5">
      <div class="row">
         <div class="col-lg-9 mx-auto text-center">
            <h1 class="mb-0 text-black">Facebook Video Downloader</h1>
            <p class="mb-4 mt-2 text-black fs-5 ">Download Facebook Videos Online</p>
            <form class="p-2 rounded shadow-sm bg-white" id="videos">
               <div class="input-group">
                  <input class="form-control border-0 me-2 shadow-0" name="codehap_link" type="url" placeholder="Enter Facebook Video Link...." required>
                  <input type="hidden" name="codehap" value="true">
                  <div class="btn btn-primary rounded" type="submit" id="submit" onclick="hideDiv()" style="display:flex;flex-direction:row;justify-content:center;align-items:center">
                     <svg  width="33" height="33" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"/>
                     </svg>
                     <div class="ms-2">Download</div>
                  </div>
                 
               </div>
            </form>
            <!-- <div class="small text-muted">Ex. https://www.facebook.com/watch?v=554413541934974 <br> or https://fb.watch/kBjeMuKCCn/</div> -->
            
           
         </div>
      </div>
   </div>
</section>





 <div class="col-sm-5 m-auto">
 <div class="dl-loading-video mt-2" style="display:none;">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="246px" height="246px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                  <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#0D6EFD" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                     <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                  </circle>
                  <circle cx="50" cy="50" r="23" stroke-width="8" stroke="#383838" stroke-dasharray="36.12831551628262 36.12831551628262" stroke-dashoffset="36.12831551628262" fill="none" stroke-linecap="round">
                     <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;-360 50 50"></animateTransform>
                  </circle>
                  <!-- [ldio] generated by https://loading.io/ -->
               </svg>
            </div>
             <div class="dl-links-video"></div></div>
<div class="m-5">
   <div class=" text-center fs-2 fw-bold">How to Download video Facebook</div>
   <div class=" text-center">Facebook video downloader with best formats 1080p - 2K -4K for free</div>
</div>
<!-- Features section-->
<section class="container  p-3">
   <div class="text-center">
      <div class="row gy-4">
         <div class="col-lg-3">
            <!-- <h2 class="h5">Step 1</h2> -->
            <img src="/images/s1.webp"  loading="lazy" class="img-fluid border rounded shadow-sm"><br>
            <div class="text-muted text-sm mb-0 r" style="display:flex;flex-direction:row;align-items:center;justify-content:center"><div class="btn btn-primary me-2">1</div>Go To Facebook</div>
         </div>
         <div class="col-lg-3">
            <!-- <h2 class="h5">Step 2</h2> -->
            <img src="/images/s2.webp" loading="lazy" class="img-fluid border rounded shadow-sm"><br>
            <div class="text-muted text-sm mb-0" style="display:flex;flex-direction:row;align-items:center;justify-content:center"><div class="btn btn-primary me-2"> 2</div>Copy Facebook Video Url</div>
         </div>
         <div class="col-lg-3">
            <!-- <h2 class="h5">Step 3</h2> -->
            <img src="/images/s3.webp" loading="lazy" class="img-fluid border rounded shadow-sm"><br>
            <div class="text-muted text-sm mb-0" style="display:flex;flex-direction:row;align-items:center;justify-content:center"><div class="btn btn-primary me-2">3</div>Paste that Url into Box</div>
         </div>
         <div class="col-lg-3">
            <!-- <h2 class="h5">Step 4</h2> -->
            <img src="/images/s4.webp" loading="lazy" class="img-fluid border rounded shadow-sm"><br>
            <div class="text-muted text-sm mb-0" style="display:flex;flex-direction:row;align-items:center;justify-content:center"><div class="btn btn-primary me-2">4</div>Click Dwonload Button</div>
         </div>
      </div>
   </div>
</section>
<div class="my-5 container shadow p-2 p-lg-5 rounded bg-white">
    <h2 class="h3">Free Facebook Videos and Images Downloader online Tool</h2>
   <p>
      FB Download Hub is a powerful online tool that allows you to download videos and images from Facebook with ease. Whether you want to save a video or image for personal use or to share it with your friends on other social media platforms, this tool makes it quick and easy.
   </p>
   <p>
      With FB Download Hub, you can simply copy and paste the URL of the video or image you want to download, and the tool will do the rest. It supports all kinds of video and image formats, so you can download anything you want in just a few clicks.
   </p>
   <p>
      Not only is FB Download Hub easy to use, but it's also completely free and doesn't require any installation or software downloads. So why wait? Start downloading your favorite Facebook videos and images today with FB Download Hub!
   </p>
   <p>Are you tired of trying to figure out how to download Facebook videos and images without any success? Look no further than FB Download Hub &ndash; the online tool that makes downloading Facebook content a breeze.</p>
   <p>Using FB Download Hub is simple. First, find the video or image you want to download on Facebook and copy the URL. Then, go to FB Download Hub and paste the URL into the designated box. Select the format you want to download &ndash; whether it's MP4, JPG, or PNG &ndash; and click the "Download" button. It's that easy!</p>
   <p>Not only is FB Download Hub free to use, but it also doesn't require any software installation. You can download any Facebook content you want in just a few clicks.</p>
   <p>One of the best things about FB Download Hub is its versatility. You can download videos and images from any Facebook page, including your own. This tool is great for anyone who wants to save Facebook content for personal use or share it with others on different social media platforms.</p>
   <p>Another benefit of using FB Download Hub is that it's a completely safe and reliable tool. There's no need to worry about malware or viruses infecting your computer while using this online tool.</p>
   <p>In conclusion, if you're looking for an easy-to-use and reliable way to download Facebook videos and images, look no further than FB Download Hub. This online tool is completely free, requires no software installation, and is a safe and reliable way to save your favorite Facebook content. Give it a try today!</p>
</div>

<div class="my-5 container shadow p-2 p-lg-5 rounded bg-white">
   <h2>Frequently Asked Questions</h2>
   <p>Q: Is FB Download Hub free to use?
      <br>
      A: Yes, FB Download Hub is completely free to use.
   </p>
   <p>Q: Do I need to download any software to use FB Download Hub?
      <br>
      A: No, FB Download Hub is an online tool and does not require any software installation.
   </p>
   <p>Q: Can I download videos and images from any Facebook page?  <br>A: Yes, you can download videos and images from any Facebook page, including your own.</p>
   <p>Q: What formats can I download videos and images in?   <br>A: FB Download Hub supports multiple formats including MP4, JPG, and PNG.</p>
   <p>Q: Is it safe to use FB Download Hub?   <br>A: Yes, FB Download Hub is completely safe and reliable to use. There's no need to worry about malware or viruses infecting your computer while using this online tool.</p>
   <p>Q: How long does it take to download a Facebook video or image using FB Download Hub?   <br>A: The time it takes to download a Facebook video or image depends on the size of the file and the speed of your internet connection. However, the process is usually quick and easy.</p>
</div>


<?php include'footer.php'?>