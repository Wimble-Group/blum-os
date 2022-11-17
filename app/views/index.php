<?php $this->view("head", $data); ?>

<div class="wrapp">
    <?php $this->view("header", $data);?>

  <div class="video-background">
    <video autoplay muted loop playsinline></video>
  </div>

  <div class="scroll-container">
    <section class="scroll-sequence__container apple-container">
      <div class="container">
        <div class="scroll-sequence__content">
          <div class="speak speak-trigger active banner">
            <div class="top">
              <div class="banner-logo"></div>
              <h1>New experiences. New interactions.<br> New environments.</h1>
            </div>

            <div class="bottom">
              <p>Scroll further</p>
            </div>
          </div>

          <div class="speak speak-trigger speak-avenues">
            <picture>
              <source srcset="<?=ASSETS?>img/home/new-avenues-mobile-3x.png?<?=TIMESTAMP?>" media="(max-width: 575px) and (-webkit-min-device-pixel-ratio: 3)">
              <source srcset="<?=ASSETS?>img/home/new-avenues-mobile-2x.png?<?=TIMESTAMP?>" media="(max-width: 575px)">
              <img loading="lazy" src="" alt="">
            </picture>

            <h2>New avenues</h2>
            <p>Bloom VR/XR headset is your provider to the world of fresh opportunities. It takes your daily routine to the next level. </p>
          </div>
          <div class="speak speak-trigger speak-list">
            <div class="list">
              <div class="item">
                <div class="icon icon-work"></div>
                <p>Work</p>
                <span>Everywhere, having your desktop with important apps and notes right in front of your eyes just by one click. Place yourself comfortably on a chair, sofa, floor or bench in the park and work. Your glasses will arrange your working space for you.</span>
              </div>

              <div class="item">
                <div class="icon icon-play"></div>
                <p>Play</p>
                <span>Your favorite games feeling every bit of them. You can literally attack with your hands, as a real warrior, move objects with your glance, as a magician, and use your voice to communicate with things and creatures.</span>
              </div>

              <div class="item">
                <div class="icon icon-create"></div>
                <p>Create</p>
                <span>New surroundings, pictures, games, music or whatever you want feeling fully engaged in creating. Bring your works of art to life, take them to another level. Make music on the street, paint the buildings, create a dragon on a statue of Liberty - no boundaries to your imagination.</span>
              </div>

              <div class="item">
                <div class="icon icon-learn"></div>
                <p>Learn</p>
                <span>A picture's worth a thousand words, so now you have it. Just think about it: you can take up any new skill by experiencing it from the beginning. A surgeon can learn how to do a surgery, a driver how to drive, a pilot how to fly a plane, and everything is without leaving the room.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="scroll-sequence apple-sequence"></div>
    </section>

    <section class="black-section collaborate">
      <div class="background-wrapp"></div>
      <div class="container">
        <div class="text-block revealator-slideup revealator-once revealator-delay1">
          <h2>Collaborate</h2>
          <p class="desc">In any of the experiences</p>
          <span>Synchronize your routines and feel next to your workmates or loved ones even being away. They will see what you see, and take control over all objects you have inside of your MR world.</span>
        </div>
      </div>
    </section>

    <section class="scroll-sequence__container tree-container">
      <div class="container">
        <div class="scroll-sequence tree-sequence"></div>

        <div class="scroll-sequence__content">
          <div class="speak revealator-slideup revealator-once revealator-delay1">
            <h2>No external devices needed</h2>
            <p class="desc">Bloom glasses are a full-fledged PC and equipped with everything you need just to put them on and enjoy your experience without connecting them to any other gadget. </p>
          </div>

          <div class="speak revealator-slideup revealator-once revealator-delay1">
            <img loading="lazy" src="<?=ASSETS?>img/home/icons/glasses-rotate-1.svg" alt="">
            <p>RGB cameras will provide you with 8-MP <br> pictures and 1080p video resolution.</p>
          </div>

          <div class="speak revealator-slideup revealator-once revealator-delay1">
            <img loading="lazy" src="<?=ASSETS?>img/home/icons/glasses-rotate-2.svg" alt="">
            <p>Communicate easily using speakers <br> and a built-in microphone.</p>
          </div>

          <div class="speak revealator-slideup revealator-once revealator-delay1">
            <img loading="lazy" src="<?=ASSETS?>img/home/icons/glasses-rotate-3.svg" alt="">
            <p>Stay online wherever you are since Bloom <br> headset is fitted with a SIM card slot.</p>
          </div>

          <div class="speak revealator-slideup revealator-once revealator-delay1">
            <span>Considering the variety of functions Bloom glasses can provide — you're able to use it instead of any other gadget, having everything you need in one</span>
          </div>
        </div>
      </div>
    </section>

    <section class="slider">
      <div class="slider-background">
        <video autoplay muted loop playsinline>
          <source src="<?=ASSETS?>video/slider/grid-wave-2.mp4?<?=TIMESTAMP?>" type="video/mp4">
        </video>
      </div>

      <div class="container">
        <div class="text-block revealator-slideup revealator-once revealator-delay1">
          <h2>Lightweight, portable, classy</h2>
          <p class="desc">Use Bloom headset wherever you want and as long as you wish. It doesn't matter what you're doing: ride a bike, walk around the city, work, study or drive.</p>
        </div>

        <div id="slider" class="glasses-slider">
          <div class="item" data-title="Anytime">
            <img loading="lazy" src="<?=ASSETS?>img/home/slider-1.png?<?=TIMESTAMP?>" alt="">
            <span>Bloom headset will complement your outfit as a pair of elegant glasses and due to the long-lasting battery, you don’t have to worry about having it turned off, and use it non-stop during the day.</span>
          </div>

          <div class="item" data-title="Anywhere">
            <img loading="lazy" src="<?=ASSETS?>img/home/slider-2.png?<?=TIMESTAMP?>" alt="">
            <span>You can use Bloom headset both outside and inside due to the front transitions lenses ability to adapt to the changing lighting and switch between colored and see-through lenses.</span>
          </div>

          <div class="item" data-title="Anyhow">
            <img loading="lazy" src="<?=ASSETS?>img/home/slider-3.png?<?=TIMESTAMP?>" alt="">
            <span>With an ability to switch between active and sleep mode, when it’s comfortably placed around your neck, you can take it with you everywhere.</span>
          </div>
        </div>
      </div>
    </section>

    <section class="black-section operating-system">
      <div class="background-wrapp"></div>
      <div class="container">
        <h2 class="revealator-slideup revealator-once revealator-delay1">Feel the next-gen <br> Operating System</h2>

        <picture>
          <source srcset="<?=ASSETS?>img/home/operating-system-mobile-3x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px) and (-webkit-min-device-pixel-ratio: 3)">
          <source srcset="<?=ASSETS?>img/home/operating-system-mobile-2x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px)">
          <img loading="lazy" class="device" src="" alt="">
        </picture>
        <div class="text-block revealator-slideup revealator-once revealator-delay1">
          <p class="desc">A different sensation level of physical and mental engagement. Bloom OS is the first system software that was specifically designed to fully experience virtual, augmented and mixed realities. It makes any device a platform to merge an outside world and your fantasy. You can place any virtual object into the real world and enjoy using while feeling it as a real one.</p>
          <a href="">Explore Bloom OS Features</a>
        </div>
      </div>
    </section>

    <section class="black-section merge-worlds">
      <div class="background-wrapp"></div>
    <div class="container">
        

        <div class="left revealator-slideup revealator-once revealator-delay1">
          <h2>Merge the worlds </h2>
          <span>
            Blur the lines between physical and virtual worlds. Bloom headset is able to read and map the environment, as well as your body position in it. You can merge the virtual objects with the real world, place and pin them on the surfaces of the meatspace, and rest assured that your device will follow you in every action and remember everything you do.
            <br>
            Manage your space, fulfill it with applications and items you need, and have your desktop look same even after restoration of a system from the sleep mode.
          </span>
        </div>

        <picture>
          <source srcset="<?=ASSETS?>img/home/merge-worlds-mobile-3x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px) and (-webkit-min-device-pixel-ratio: 3)">
          <source srcset="<?=ASSETS?>img/home/merge-worlds-mobile-2x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px)">
          <img loading="lazy" class="device" src="" alt="">
        </picture>

        <div class="right">
          <div class="text-block revealator-slideup revealator-once revealator-delay1">
            <h2>Speak, point, look </h2>
            <p>Take control over applications with your voice, gesture or even glance.</p>
            <span>Bloom headset uses AI to learn how you speak and gesticulate, so you can easily create your own way to communicate with the device.</span>
          </div>
            
        </div>
      </div>
      
    </section>

    <section class="take-programming piece-black-section">
      <div class="container">
        <div class="card revealator-fade revealator-once revealator-delay1">
          <picture>
            <source srcset="<?=ASSETS?>img/home/take-programming-mobile-3x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px) and (-webkit-min-device-pixel-ratio: 3)">
            <source srcset="<?=ASSETS?>img/home/take-programming-mobile-2x.jpg?<?=TIMESTAMP?>" media="(max-width: 575px)">
            <img loading="lazy" class="device" src="" alt="">
          </picture>

          <div class="text-block">
            <h3>Take programming <br> to a different level</h3>
            <p>
              Find plenty of opportunities and tools for app, web and game development. 
              <br> 
              Both 2D and 3D world support facilitate building and testing your own applications or websites.
              <br>  
              Feel fully immersed into the process of creating new digital experiences. 
            </p>

            <div class="button-group">
              <span>Devkit</span>
              <span>Coming soon</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pre-footer">
      <div class="container">
        <div class="text-block revealator-slideup revealator-once revealator-delay1">
          <h2>We don’t create new devices, we create a new world.</h2>
          <p class="desc">Humanity is on the cusp of an unprecedented technological transformation, and we want to be in the forefront. We strongly believe that we will give you a key to all doors, one gadget that can cover all your needs. The future is coming, and we're in standby to welcome it. </p>
        </div>
      </div>
    </section>
</div>

    <?php $this->view("footer",$data);?>
</div>

</body>

</html>