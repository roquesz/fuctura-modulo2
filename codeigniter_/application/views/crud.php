 <?php
    $this->load->view('includes/header');
    $this->load->view('includes/menu');
    if ($tela != ''):
        $this->load->view('telas/'.$tela);
    endif;
    $this->load->view('includes/footer');
 ?>