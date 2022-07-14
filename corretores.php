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
    
        
            
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>

       
        <script language="javascript">
  
            
            
          /*
            function MostrarParcelas(){
                

                var x = document.getElementById("campoparcela");
               
                           
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                
              
            }
            
  
      */
            
             
                      
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
            
            
                function numero(v){
                    var txt =  document.getElementById("parcelas").value;  
                    var tamanho   =  txt.length;
        
                    if(tamanho > 2 || txt > 12)
                    { 
                       alert("O número máximo de parcelas é 12");
                       return v.replace(v,"");
                    }
                    
                   return v.replace(/\D/g,"")
                }
            
            
                function numerico(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                return v
                }

            
            
                function telefone(v){
                v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
                v=v.replace(/(\d{5})(\d)/,"$1 - $2") //Coloca hífen entre o quarto e o quinto dígitos
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
            
                    
                    
                        
                function Verificapix(frm){
                    var tipopix = document.getElementById("tipopix").value;
                    var cpf = document.getElementById("cpf").value;
                    var email = document.getElementById("email").value;
                    var celular = document.getElementById("celular").value;
                    var banco = document.getElementById("banco").value;
                    var agencia = document.getElementById("agencia").value;
                    var conta = document.getElementById("conta").value;
                                     
                    if(tipopix === "cpf")
                   
                       document.getElementById('pix').value = cpf;
                
                    else if(tipopix === "banco, agência, conta e CPF")
                   
                        var texto = "Banco = "+banco+", Agência = "+agencia+", Conta = "+conta+", CPF = "+cpf;
                    
                    else if(tipopix === "email")
                    
                        document.getElementById('pix').value = email;
                   
                    else if(tipopix === "celular")
                    
                        document.getElementById('pix').value = celular;
                    
                    else 
                        
                        document.getElementById('pix').value = "";
                }
               
            
               function Verificaemail(frm){
                 if(document.getElementById('email').value== "" || document.getElementById('email').value.indexOf('@')==-1 || document.getElementById('email').value.indexOf('.')==-1)
                 {
                    alert( "Email inválido. Por favor, informe um E-MAIL válido!" );
                    document.getElementById("email").style.background = "#ffccaa";
                 }
                 else
                   document.getElementById("email").style.background = "#ffffff";
               }
            
            
            
            
                function Verificacpf(frm){
                    var cpf = document.getElementById("cpf").value;
                    var resul ="";
                    
                   var numeros, digitos, soma, i, resultado, digitos_iguais;
                   digitos_iguais = 1;
                   if (cpf.length < 11)
                   {
                       alert("CPF inválido");
                       document.getElementById("cpf").style.background = "#ffccaa";
                       
                                      
                   }
                   else
                   {
                       for (i = 0; i < cpf.length - 1; i++)
                            if (cpf.charAt(i) != cpf.charAt(i + 1))
                                  {
                                  digitos_iguais = 0;
                                  break;
                                  }
                      if (!digitos_iguais)
                      {
                            numeros = cpf.substring(0,9);
                            digitos = cpf.substring(9);
                            soma = 0;
                            for (i = 10; i > 1; i--)
                                  soma += numeros.charAt(10 - i) * i;
                            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                            if (resultado != digitos.charAt(0))
                            {
                                 resul = "invalido";
                            }
                            numeros = cpf.substring(0,10);
                            soma = 0;
                            for (i = 11; i > 1; i--)
                                  soma += numeros.charAt(11 - i) * i;
                            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                            if (resultado != digitos.charAt(1))
                            {
                                 resul = "invalido";
                               

                            }
                          
                           if(resul === "invalido")
                           {
                               alert ("CPF Inválido");
                               document.getElementById("cpf").style.background = "#ffccaa";
                               
                           }
                           else
                           {

                             document.getElementById("cpf").style.background = "#ffffff";   
                           }

                       }
                       else
                       {
                          alert("CPF inválido");
                           document.getElementById("cpf").style.background = "#ffccaa";
                        

                       }
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
                         <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Corretores -  <?php echo $unidade; ?></h2>
                            <!-- Icon Divider-->


                        </div>
                    </header>

                     <!-- Sessão Sistema -->
                    <section class="page-section sistema" id="sistema">
                        <div class="container">
                             <h6 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro</h6>
                               <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                              </div>
                            <div class="row">
                             
                                <div class="col-lg-8 mx-auto">
                                     <form method="POST" action="cadastracorretores.php">

                                            <div class="control-group">
                                            
                                                <label for="nome">Nome:</label>
                                                    <input class="form-control w-75" id="nome" name="nome" type="text" placeholder="NOME" required="required" data-validation-required-message="Por favor digite o nome do Corretor" maxlength="100" /> 
                                                
                                                                                        
                                                
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                         
                                             <div class="control-group">
                                            
                                                <label for="email">Email:</label>
                                                    <input class="form-control w-75" id="email" name="email" type="email" placeholder="EMAIL" required="required" data-validation-required-message="Por favor digite o email do Corretor"  onBlur="Verificaemail(this)" maxlength="100" /> 
                                                
                                                                                        
                                                
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                         
                                         
                                         
                                            
                                             <div class="control-group">
                                                <label for="rg">RG  (sem espaços, pontos, traços ou vírgulas)</label>
                                                                                            
                                                <input class="form-control w-75" id="rg" name="rg" type="text" placeholder="RG" required="required" data-validation-required-message="Por favor digite o rg"  onkeypress="mascara(this,numerico)" maxlength="18" />
                                                <p class="help-block text-danger"></p>
                                               
                                             </div>
                                         
                                            <div class="control-group">
                                                <label for="cpf">CPF (sem espaços, pontos, traços ou vírgulas) </label>
                                                                                            
                                                <input class="form-control w-75" id="cpf" name="cpf" type="text" placeholder="CPF" required="required" data-validation-required-message="Por favor digite o cpf"  onkeypress="mascara(this,numerico)" onBlur="Verificacpf(this)"  maxlength="11" required/>
                                                <p class="help-block text-danger"></p>
                                               
                                             </div>
                                         
                                            <div class="control-group">
                                                    <label for="celular">Celular:</label>
                                                                                                
                                                    <input type="text" class="form-control w-50" id="celular" name="celular" placeholder="(99) 99999-9999" required="required"       onkeypress="mascara(this,telefone)" maxlength="18"/>
                                                                                 
                                                    <p class="help-block text-danger"></p>
                                            </div>
                                         
                                              <div class="control-group">
                                                    <label for="creci">Creci:</label>
                                                                                                
                                                <input class="form-control w-75" id="creci" name="creci" type="text" placeholder="CRECI"  maxlength="15" />
                                                <p class="help-block text-danger"></p>
                                               
                                                                                 
                                                    <p class="help-block text-danger"></p>
                                            </div>
                                         
                                            <div class="control-group">
                                                    <label for="endereco">Endereço:</label>
                                                                                                
                                                <input class="form-control w-75" id="endereco" name="endereco" type="text" placeholder="ENDEREÇO"  maxlength="70" />
                                                <p class="help-block text-danger"></p>
                                               
                                                                                 
                                                    <p class="help-block text-danger"></p>
                                            </div>
                                                    
                                            <div class="control-group">
                                                    <label for="cidade">Cidade:</label>
                                                                                                
                                                <input class="form-control w-75" id="cidade" name="cidade" type="text" placeholder="CIDADE"  maxlength="70" />
                                                <p class="help-block text-danger"></p>
                                               
                                                                                 
                                                    <p class="help-block text-danger"></p>
                                            </div>
                                         
                                         
                                              <div class="control-group">
                                            
                                                <label for="banco">Banco:</label>
                                                    <input class="form-control w-75" id="banco" name="banco" type="text" placeholder="BANCO" required="required" data-validation-required-message="Por favor digite o Banco" maxlength="70" /> 
                                                
                                                                        
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                         
                                              <div class="control-group">
                                            
                                                <label for="agencia">Agência:</label>
                                                    <input class="form-control w-75" id="agencia" name="agencia" type="text" placeholder="AGENCIA" required="required" data-validation-required-message="Por favor digite a Agência" maxlength="20" /> 
                                                
                                                                        
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                         
                                              <div class="control-group">
                                            
                                                <label for="conta">Conta:</label>
                                                    <input class="form-control w-75" id="conta" name="conta" type="text" placeholder="CONTA" required="required" data-validation-required-message="Por favor digite a Conta" maxlength="20" /> 
                                                                             
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                                    
                                        
                                                      
                                             <div class="control-group">
                                             <label for="tipopix">Tipo de Pix: </label>
                                                
                                                          <select class="form-control" id="tipopix" name="tipopix"  placeholder="TIPO DE PIX" required="required" data-validation-required-message="Por favor escolha tipo de pix" onBlur="Verificapix(this)" >
                                                            
                                                            <option selected><< Escolha o Tipo de Pix >></option>
                                                                
                                                                <option>aleatório </option>
                                                                <option>banco, agência, conta e CPF</option>
                                                                <option>celular </option>
                                                                <option>cpf </option>
                                                                <option>cnpj </option>
                                                                <option>email </option>
                                                                
                                                            </select>
                                                         

                                                             <p class="help-block text-danger"></p>
                                         
                                           </div>
                                         
                                             <div class="control-group">
                                            
                                                <label for="pix">Pix: (Digite sem espaços e caracteres especiais)</label>
                                                    <input class="form-control w-75" id="pix" name="pix" type="text" placeholder="PIX" required="required" data-validation-required-message="Por favor digite o Pix" maxlength="100" /> 
                                                                             
                                                    <p class="help-block text-danger"></p>
                                             </div>
                                         
                                         
                                             <div class="control-group">
                                             <label for="unidade">Unidade: </label>
                                                
                                                          <select class="form-control" id="unidade" name="unidade"  placeholder="UNIDADE" required="required" data-validation-required-message="Escolha a Unidade">
                                                            <?php
                                                                    if($unidade == "BARUERI")
                                                                    {
                                                                    ?>                       
                                                                        <option><< Escolha a Unidade >></option>
                                                                        <option selected>Barueri</option>
                                                                        <option>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option >Itu </option>
                                                                        <option>Jundiaí</option>
                                                                        <option>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                                                           
                                                                    else if($unidade == "CAMPINAS")
                                                                    {
                                                                    ?>                       
                                                                         <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option selected>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option >Itu </option>
                                                                        <option>Jundiaí</option>
                                                                        <option>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                      
                                                                    else if($unidade == "INDAIATUBA")
                                                                    {
                                                                    ?>                       
                                                                         <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option >Campinas</option>
                                                                        <option selected>Indaiatuba</option>
                                                                        <option >Itu </option>
                                                                        <option>Jundiaí</option>
                                                                        <option>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                      
                                                                    else if($unidade == "ITU")
                                                                    {
                                                                    ?>                       
                                                                         <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option >Campinas</option>
                                                                        <option >Indaiatuba</option>
                                                                        <option selected >Itu </option>
                                                                        <option>Jundiaí</option>
                                                                        <option>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                                                                    else if($unidade == "JUNDIAÍ")
                                                                    {
                                                                    ?>                       
                                                                         <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option>Itu </option>
                                                                        <option selected>Jundiaí</option>
                                                                        <option>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                      }
                                                                    else if($unidade == "SOROCABA")
                                                                    {
                                                                    ?>                       
                                                                         <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option>Itu </option>
                                                                        <option >Jundiaí</option>
                                                                        <option selected>Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                                                                    else if($unidade == "VALINHOS")
                                                                    {
                                                                    ?>                       
                                                                        <option><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option>Itu </option>
                                                                        <option >Jundiaí</option>
                                                                        <option >Sorocaba</option>
                                                                        <option selected>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
               
               
                                                                    else
                                                                    {
                                                                    ?>                       
                                                                        <option selected><< Escolha a Unidade >></option>
                                                                        <option>Barueri</option>
                                                                        <option>Campinas</option>
                                                                        <option>Indaiatuba</option>
                                                                        <option>Itu </option>
                                                                        <option >Jundiaí</option>
                                                                        <option >Sorocaba</option>
                                                                        <option>Valinhos</option>
                                                               <?php 
                                                                        
                                                                    }
                                                              ?>
                                                             
                                                              </select>
                                                             <p class="help-block text-danger"></p>
                                         
                                           </div>
                                         
                                         
                                                                     
                                                                                         
                                                
                                            <div class="control-group">
                                                <div class="">
                                                    
                                                <table class="table-responsive" >
                                                  <thead>
                                                    <tr>
                                                      <th scope="col" bgcolor="#ffc890">É responsável pelo MQL?</th>
                                                     </tr>
                                                    
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                       <td>
                                                           <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="mql" id="mql" value="SIM" >
                                                              <label class="form-check-label" for="mql">
                                                                SIM
                                                              </label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="mql" id="mql" value="NÃO" checked>
                                                              <label class="form-check-label" for="mql">
                                                                NÃO
                                                              </label>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                                                          
                                                
                                                                                                    
                                                    </tbody>
                                                                                                 
                                                    </table>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                </div>
                                         
                                         
                                          <div id="success">
                                          <center> <div class="form-group 2"><button class="btn btn-primary btn-xl" id="enviar" name="enviar" type="submit">Cadastrar Corretor</button></div></center>  
                                         </div>
                                         
                                         
                                         
                                          
                                            </form>
                                         
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
             
        
 
   <!-- BOTÃO WHATSAPP -->
       
        
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://wa.me/5511945426288?text=Olá ... Estou acessando a Plataforma de Gestão Imobb e preciso de ajuda!" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank">
            <i style="margin-top:16px" class="fab fa-whatsapp"></i>
            
            
  
    </body>
                         
            
                        
   
</html>
