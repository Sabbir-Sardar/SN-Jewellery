<div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a  call back</h2>
                     <p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="contact">
                     <form id="request" action="{{route('registration')}}" method="post">
                        @csrf 
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone Number" type="number" name="number">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="email" name="email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="rable-box">
                     <figure>
                     <img src="images/cac.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>