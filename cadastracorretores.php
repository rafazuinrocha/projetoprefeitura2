<!DOCTYPE html>
<html lang="en">
    <?php
     session_start();
    ?>
    <head>
        <meta charset="utf-8" />
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
  
        
                      
                function mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
                }

                function execmascara(){
                v_obj.value=v_fun(v_obj.value)
                }


                function moeda(v){
                v=v.replace(/\D/g,"") // permite digitar apenas numero
                //  v=v.replace(/(\d{1})(\d{10})$/,"$1.$2") // coloca ponto antes dos ultimos 13 digitos
                //v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") // coloca ponto antes dos ultimos 10 digitos
                //v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") // coloca ponto antes dos ultimos 7 digitos
                v=v.replace(/(\d{1})(\d{1,2})$/,"$1.$2") // coloca virgula antes dos ultimos 2 digitos
                return v;
                }
            
            
                function soNumeros(v){
                return v.replace(/\D/g,"")
                }
            
            
            
            
                function telefone(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
                v=v.replace(/(\d{4})(\d)/,"$1 - $2") //Coloca hífen entre o quarto e o quinto dígitos
                return v
                }


                function cpf(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/(\d{3})(\d)/,"$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
                v=v.replace(/(\d{3})(\d)/,"$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
                //de novo (para o segundo bloco de números)
                v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
                return v
                }

                function cep(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/(\d{2})(\d)/,"$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
                v=v.replace(/(\d{3})(\d{1,3})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
                return v
                }

                function cnpj(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/^(\d{2})(\d)/,"$1.$2") //Coloca ponto entre o segundo e o terceiro dígitos
                v=v.replace(/^(\d{2}).(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
                v=v.replace(/.(\d{3})(\d)/,".$1/$2") //Coloca uma barra entre o oitavo e o nono dígitos
                v=v.replace(/(\d{4})(\d)/,"$1-$2") //Coloca um hífen depois do bloco de quatro dígitos
                return v
                }
            
                function data(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/^(\d{2})(\d)/,"$1/$2") //Coloca ponto entre o segundo e o terceiro dígitos
                v=v.replace(/.(\d{2})(\d)/,"/$1/$2") //Coloca uma barra entre o oitavo e o nono dígitos
                v=v.replace(/(\d{4})(\d)/,"$1/$2") //Coloca um hífen depois do bloco de quatro dígitos
                return v
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
           include 'anti_injection.php';
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
                         <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Corretores -  <?php echo $unidade; ?></h2>
                            <!-- Icon Divider-->


                        </div>
                    </header>

                     <!-- Sessão Sistema -->
                    <section class="page-section sistema" id="sistema">
                        <div class="container">
                             <h6 class="page-section-heading text-center text-uppercase text-secondary mb-0">CADASTRO REALIZADO -  <?php echo trata_injection($_POST["nome"]); ?></h6> 
                               <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                              </div>
                            <div class="row">
                             
                                <div class="col-lg-12 mx-auto">
                                    
                                    <?php

                                        include 'conecta.inc';
                                        
                      
                                            
                                        $nome = trata_injection($_POST["nome"]);
                                        $email =  strtolower($_POST["email"]);
                                        $cpf = trata_injection($_POST["cpf"]);
                                        $rg = trata_injection($_POST["rg"]);
                                        $celular= trata_injection($_POST["celular"]);
                                        $creci= trata_injection($_POST["creci"]);
                                        $endereco= trata_injection($_POST["endereco"]);
                                        $cidade= trata_injection($_POST["cidade"]);
                                        $banco =  trata_injection($_POST["banco"]);
                                        $agencia =  trata_injection($_POST["agencia"]);
                                        $conta =  trata_injection($_POST["conta"]);
                                        $tipopix =  trata_injection($_POST["tipopix"]);
                                        $pix =  strtolower($_POST["pix"]);
                                        $pix = str_replace("(", "", $pix);
                                        $pix = str_replace(")", "", $pix);
                                        $pix = str_replace(" ", "", $pix);
                                        $pix = str_replace("-", "", $pix);
                                        $unidade =  trata_injection($_POST["unidade"]);
                                        $mql =  trata_injection($_POST["mql"]);
                                        $status = 1;
                                      
                      
                      
                      
                                        $sql = "select * from tbcorretores where nome ='$nome' and cpf ='$cpf' and status='1'"; 
                      
                                        $resul = mysqli_query($con, $sql) or die ("Erro no select");
                                        $total = mysqli_num_rows($resul);
                                        if($total < 1)
                                        {                   



                                            $sql = "insert into tbcorretores (nome, email, rg, cpf,  celular, creci, endereco, cidade, banco, agencia, conta, tipopix, pix, unidade, mql, status) values ('$nome',  '$email', '$rg', '$cpf',  '$celular', '$creci', '$endereco', '$cidade', '$banco', '$agencia', '$conta', '$tipopix', '$pix', '$unidade', '$mql', '$status')"; 

                                            $resul = mysqli_query($con, $sql) or die ("Erro no cadastro");
                                        }
                                        else
                                        {

                                                  echo "<script>

                                                         alert('Já existia este corretor na base de dados. Faça uma consulta para checar inconsistencias!');
                                                         window.location.href='corretores.php';


                                                  </script>";
                                            
                                            
                                        }

                                    

                                ?>
                                </div> 
                                </div>
                                </div>
                                                         
                        
                            <div class="container">

                             <div class="row">
                                <div class="col-lg-8 mx-auto">
                       
                                     <div class="form-group"> <a href="corretores.php"> <button class="btn btn-dark btn-xl" id="sendMessageButton" type="submit">Cadastrar Novo Corretor</button></a></div> 
                                    <BR> <BR> 
                                                      
                                   
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
