<?php
/*
Template Name: Home
*/

get_header('home');
?>

<div class="main-wrapper home-wrapper">

  <header class="home-header">
    <h1 class="main-head">NC VOTER (.ORG)</h1>
    <h2 class="sub-head">Welcome to your source for voter information<br /> in North Carolina!</h2>

    <div class="home-head-search">
      <form action="">
        <input onfocus="if(this.value == 'Search NCVoter.org') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search NCVoter.org'; }" type="text"type="text" value="Search NCVoter.org">
        <button type="submit"><span class="icon icon-search"></span></button>
      </form>
    </div>

  </header>

  <!-- Slider starts here ********************************** -->

        <section class="slider">
  				<a href="#" class="slider-link">
  	        <h2 class="slider-head"><span>Official</span> 2014 Election Results</h2>
  	        <h3 class="slider-sub-head"><span>from the</span> State Board of Elections</h3>
  				</a>
        </section> <!-- end .slider -->

  <!-- Section with 6 boxes starts here ********************************** -->

        <section class="home-main-content">

          <div class="home-boxes-container">
            <div class="home-box">
              <span class="icon icon-user"></span>
              <h3 class="box-header">Who can Vote in Which Elections?</h3>
              <p class="box-content">Learn the requirements for voting; what if you’re a student, Unaffiliated, deaf, etc.?</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->

            <div class="home-box">
              <span class="icon icon-file-text"></span>
              <h3 class="box-header">Registering<br /> to Vote</h3>
              <p class="box-content">You must register before you vote! Learn about eligibility and the voter registration process.</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->

            <div class="home-box">
              <span class="icon icon-checkmark"></span>
              <h3 class="box-header">How do I <br />Vote?</h3>
              <p class="box-content">You can vote early or by mail or on Election Day; learn what to do if you’ve recently moved.</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->

            <div class="home-box">
              <span class="icon icon-location2"></span>
              <h3 class="box-header">Your Ballot <br />and Districts</h3>
              <p class="box-content">Make sure you know what to expect when you go vote! Learn who and what is on the ballot.</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->

            <div class="home-box">
              <span class="icon icon-bullhorn"></span>
              <h3 class="box-header">Do <br />More!</h3>
              <p class="box-content">There's a lot you can do to help increase voter turnout as an individual or as part of an organization.</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->

            <div class="home-box">
              <span class="icon icon-bubble"></span>
              <h3 class="box-header">Tell us Your <br />Voting Story</h3>
              <p class="box-content">Have you had a problem or an interesting experience while registering or voting? Share it with us!</p>
              <a href="#" class="box-more-button">Learn More</a>
            </div> <!-- end .home-box -->
          </div> <!-- end .home-boxes-container -->

        </section>

  <!-- Section with 2 links boxes starts here ********************************** -->

        <section class="links-boxes-container">

          <div class="home-page-links">
            <h2 class="links-boxes-header">
              Quick Links
            </h2>
          </div>

          <div class="home-page-links">
            <h2 class="links-boxes-header">
              Useful Links
            </h2>
          </div>
        </section>

  		</div> <!-- end .main-wrapper -->

<?php get_footer(); ?>
