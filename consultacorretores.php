<!DOCTYPE html>
<html lang="en">
    <?php
     session_start();
    ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Conexão Imobb</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


       
        <script language="javascript">
  
        
                      
              function selecao(frm){
                    var texto = document.getElementById("corretor").value;
                    if(texto === "<< Escolha o Corretor >>")
                    {
                        alert('Escolha o Corretor');
                         return false;
                    }
                    else
                    {
                  
                        frm.submit();
                    }
                    
                   
                }
                    

                    
            
                          
 
        </script>


    </head>
    
    <body id="page-top">
        
        <?php
         include 'conecta.inc';
    
         if(!ISSET($_SESSION['user']))
         {
           
              echo "<script>

                     alert('Faça Login para acessar esta área!');
                     window.location.href='index.php#login';
                     

              </script>";
           
         }
        else
        {
           $unidade = $_SESSION['unidade'];
           $nivel = $_SESSION['nivel'];
           if ($nivel == 1 )  
           {
               // AQUI NASCE A PÁGINA OFICIALMENTE
               
               
                        
                  if(ISSET($_SESSION['nivel']))
                   {
                    ?>
                     <!-- Navigation-->
                        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                            <div class="container">
                                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logook.png" width="300px" height="150px" class="img-fluid"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
                                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="corretores.php">Cadastro</a></li>
                                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="consultacorretores.php">Consulta</a></li>
                                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="relatoriocorretores.php">Relatórios</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav><br>



                    <header class="masthead1 bg-primary text-white text-center" id="about">
                        <div class="container d-flex align-items-center flex-column">
                         <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Consulta Corretores -  <?php echo $unidade; ?></h2>
                            <!-- Icon Divider-->


                        </div>
                    </header>

                     <!-- Sessão Sistema -->
                    <section class="page-section sistema" id="sistema">
                        <div class="container">
                             <h6 class="page-section-heading text-center text-uppercase text-secondary mb-0">CONSULTAS</h6> 
                               <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                               </div>
                                  

                             <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    
                       
                                    <div class="form-group">
                                        
                                     <form method="post" action="consultacorretores1.php" onsubmit="selecao(this); return false;">
                                        
                                        
                                         
                                       Escolha o Corretor:
                                                                           
                                      <select class="form-control w-75" id="corretor" name="corretor"  placeholder="Corretor:" required="required" data-validation-required-message="Por favor escolha uma opção">
                                          
                                          
                                      
                                       <?php
                                            
                                            $query = "SELECT nome from tbcorretores where unidade = '$unidade' and status='1' order by nome";
                                            $result = mysqli_query($con, $query) or die ("Erro no select ");
                                            $total=mysqli_num_rows($result);
                                            if ($total == 0)
                                            {
                                                ?>
                                                <script> 
                                                alert ("Não existem corretores cadastrados!");
                                                window.location.href="corretores.php"; </script>
                                                <?php
                                            }
                                            else
                                            {
                                                echo "<option><< Escolha o Corretor >></option>";
                                                while($row = $result->fetch_array())
                                                {
                                                    $nome=strtoupper($row[0]);
                                                    echo "<option> $nome</option>";

                                                }
                                            }
                                           mysqli_free_result($result);
                                     ?>
                                                             

                                        </select>
                                         <br>
                                                                                  
                                          <div id="success">
                                          <center> <div class="form-group 2"><button class="btn btn-primary btn-xl" id="enviar" name="enviar" type="submit">Consultar</button></div></center>  
                                         </div>
                                        
                                   </form>
                                    
                                   
                                </div>
                           </div>  
                         </div>
                        </div>        
                 </section>






                    <!-- Footer-->
                    <footer class="footer text-center">
                        <div class="container">
                            <div class="row">
                                <!-- Footer Location-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <h4 class="text-uppercase mb-4">Unidades</h4>
                                    <p class="lead mb-0">Unidades: Indaiatuba,  Itu e Sorocaba </p>
                                </div>
                                <!-- Footer Social Icons-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <h4 class="text-uppercase mb-4">Imobb na Web</h4>
                                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/conexaoimobb/"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/belonconsultor"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://br.linkedin.com/in/alessandro-belon"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/conexaoimobb/"><i class="fab fa-fw fa-instagram"></i></a>
                                </div>
                                <!-- Footer About Text-->
                                <div class="col-lg-4">
                                    <h4 class="text-uppercase mb-4">Conexão Imobb </h4>
                                    <p class="lead mb-0">Rede de Franquias Imobiliárias, criada em 2015 por Alessandro Belon <br>(11) 97356-1342<br><a href="http://conexaoimobb.com.br">Visite nossa página</a></p>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Copyright Section-->
                    <section class="copyright py-4 text-center text-white">
                        <div class="container"><small>Copyright © Conexão Imobb 2021 --- Web Developer: Profa. Me. Adriana </small></div>
                    </section>
                    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
                    <div class="scroll-to-top d-lg-none position-fixed">
                        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
                    </div>




                    <!-- Bootstrap core JS-->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                    <!-- Third party plugin JS-->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                    <!-- Contact form JS-->
                    <script src="assets/mail/jqBootstrapValidation.js"></script>
                    <script src="assets/mail/contact_me.js"></script>
                    <!-- Core theme JS-->
                    <script src="js/scripts.js"></script>


                 <?php

                  }

               
           }
           else
           {
                echo "<script>

                     alert('Esta área é restrita aos gestores!');
                     window.location.href='index.php';

              </script>";
           }
 
           
        }
        mysqli_close($con);
    
        ?>
             
        
 
        
     
        
        <!--BOTÃO WHATSAPP -->
       
        
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://wa.me/5511945426288?text=Olá ... Estou acessando a Plataforma de Gestão Imobb e preciso de ajuda!" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank">
            <i style="margin-top:16px" class="fab fa-whatsapp"></i>
            

            
  
    </body>
                         
            
                        
   
</html>
