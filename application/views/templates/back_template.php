<?php
  $this->load->view('templates/back_header');
  $this->load->view('templates/back_nav');
?>

<section>
  <?php echo $the_view_content;?>
</section>

<?php
 $this->load->view('templates/back_foot');
?>
           
		