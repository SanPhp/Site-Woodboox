<?php $title = 'Contato Wood-Box'; ?>
<?php include 'header.php'; ?>

<body class="demas">

	<section id="all">
   	 <?php include 'menutop.php'; ?>
     
     	<section class="contato_titulo">
        	<h2>Contato</h2>
            <p>Para atendimento e esclarecimento de dúvidas, orçamentos ou pedidos, preencha o formulário               abaixo e logo entraremos em contato.</p>
        </section> <!--/CONTATO TITULO-->
     
       <section class="contato_form">
       
       <?php
if (isset($_POST['submit'])){	
$name = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$output_form = 'no';

if (empty($name) || empty($email) || empty($fone) || empty($assunto) || empty($mensagem)){
	echo '<p class="error">Por favor, preencha todos os campos do formulário!</p></br>';
	$output_form = 'yes';
  }
}
else {
	 $output_form = 'yes';
 }

if (!empty($name) && !empty($email) && !empty($fone) && !empty($assunto) && !empty($mensagem)) {
    $from = 'Indústría Wood Box';
	$to = 'woodbox@woodboxindustria.com.br';
	$subject = 'Contato Wood Box';
	$msg = "From: $from \n" .
	        "Nome: $name \n" .
	        "Email: $email \n" .
			"Fone: $fone \n" .
			"Assunto: $assunto \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			echo '<p class="error">Mensagem enviada com sucesso</p></br><center><a href="contato.php">Voltar</a></center>';
			$output_form = 'no';
			
			$name = '';
			$email = '';
			$fone = '';
			$assunto = '';
			$mensagem = '';
				
}	
if ($output_form == 'yes') {
?>
       
        	<table>
            	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                
                	<tr>
                    	<td class="vai"><input type="text" id="nome" name="nome" placeholder="Nome" value="<?php if (!empty($name)) echo $name ?>"></td>
                        <td class="vai"><input type="text" id="email" name="email" placeholder="Email" value="<?php if (!empty($email)) echo $email ?>"></td>
                        
                      </tr>
                      
                      <tr>
                        <td><input type="text" id="fone" name="fone" placeholder="Fone" value="<?php if (!empty($fone)) echo $fone ?>"></td>
                        <td><input type="text" id="assunto" name="assunto" placeholder="Assunto" value="<?php if (!empty($assunto)) echo $assunto ?>"></td>
                     </tr>
                     
                 <tr>
                 <td colspan="2"><textarea id="mensagem" name="mensagem" placeholder="Mensagem"><?php if (!empty($mensagem)) echo $mensagem ?></textarea></td>
                 </tr>
                 
                 <tr>
                 <td><input type="submit" id="submit" name="submit" value="Enviar"></td>
                 </tr>        
                                         
                   </tr>
                
                </form>
            </table>
       <?php } ?>
       </section><!--/CONTATO FORM-->
       
       <section class="contato_localizacao">
       <h2>Localização</h2>
       <p>A Wood Box Indústría está localizada na saída de Arapongas para Maringá na Rodovia PR-444 - KM-09</p>
       <span><iframe width="450" height="125" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;q=PR-444,+Arapongas+-+Paran%C3%A1&amp;aq=&amp;sll=-23.513025,-51.100451&amp;sspn=0.754296,0.883026&amp;ie=UTF8&amp;geocode=FRVZm_4dmYPv_A&amp;split=0&amp;hq=&amp;hnear=PR-444,+Arapongas+-+Paran%C3%A1&amp;t=m&amp;ll=-23.373538,-51.412067&amp;spn=0.009848,0.038538&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;q=PR-444,+Arapongas+-+Paran%C3%A1&amp;aq=&amp;sll=-23.513025,-51.100451&amp;sspn=0.754296,0.883026&amp;ie=UTF8&amp;geocode=FRVZm_4dmYPv_A&amp;split=0&amp;hq=&amp;hnear=PR-444,+Arapongas+-+Paran%C3%A1&amp;t=m&amp;ll=-23.373538,-51.412067&amp;spn=0.009848,0.038538&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small></span>
       </section><!--/CONTATO LOCALIZACAO-->
    
    </section> <!--/ALL-->
    
   <?php include 'footer.php'; ?>

</body>
</html>