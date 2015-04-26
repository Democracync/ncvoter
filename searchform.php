<form action="<?php echo home_url(); ?>/" method="get">
  <!-- <label for="s">Search NCVoter.org</label> -->
  <input onfocus="if(this.value == 'Search NCVoter.org') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search NCVoter.org'; }" type="text"type="text" name="s" id="s" value="Search NCVoter.org">
  <input type="submit" class="search-submit" value="Go!" />
</form>
