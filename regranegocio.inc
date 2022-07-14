
       
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
            
            
                function soNumeros(v){
                return v.replace(/\D/g,"")
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
            
                    
            
                function calcula(x)
                {

                        var v="valorparcela" + x;
                        var valor = document.getElementById(v).value;
                        sub = parseFloat(valor).toFixed(2);
                        

                        var meta = document.getElementById("meta").value;
                        var metaparceria = document.getElementById("metaparceria").value;
                        var captador= document.getElementById("captador").value;
                        var captador2 = document.getElementById("captador2").value;
                        var parceria= document.getElementById("parceria").value;
                        var mql= document.getElementById("mql").value;
                        var valorcorretor = 0.00;
                        var valorcaptador1 = 0.00;
                        var valorcaptador2 = 0.00;
                        var valorimobb = 0.00;
                        var valorparceria = 0.00;
                        var valormql = 0.00;
                     

                       if(meta == "SIM")
                       {
                            if(parceria == "NÃO")
                                valorcorretor+=sub * 0.05;
                            else
                            {
                                if(metaparceria == "NÃO")
                                    valorcorretor+=sub * 0.025;
                                else
                                   valorcorretor+=sub * 0.025;
                                
                            }
                       }
                       else
                       {
                             valorcorretor=0.00;
                       }
                    
                       if(metaparceria == "SIM")
                       {
                            if(parceria != "NÃO")
                                valorparceria+=sub * 0.025;
                            else
                                valorparceria=0.00;                           
                                
                            
                       }
                       else
                       {
                             valorparceria=0.00;
                       }
                    
                      if(captador == "SIM" && captador2 != "NÃO TEM")
                      {
                             valorcorretor+=sub * 0.075;
                             valorcaptador2+=sub * 0.075;


                      }
            
                                        
                      else if(captador == "SIM" && captador2 == "NÃO TEM")
                            valorcorretor+=sub * 0.15;

                      else if(captador != "SIM" && captador2 !="NÃO TEM")
                       {
                             valorcaptador1+=sub * 0.075; 
                             valorcaptador2+=sub * 0.075;
                       }
                         else if(captador != "SIM"  && captador2 == "NÃO TEM")
                         {
                              valorcaptador1+=sub * 0.15; 

                         }
                        else
                        {
                            valorcorretor=valorcorretor;
                            valorcaptador1=valorcaptador1;
                            valorcaptador2=valorcaptador2;
                        }


                       if(parceria == "NÃO")
                       {
                            valorcorretor+=sub * 0.30;

                       }
                       else
                       {
                            valorcorretor+=sub * 0.15;
                            valorparceria+=sub * 0.15;
                            
                            if( parceria == captador && captador2 == "NÃO TEM")
                            {
                                valorparceria+=sub * 0.15;
                                valorcaptador1-=sub * 0.15;
                            }
                            if( parceria == captador && captador2 != "NÃO TEM")
                            {
                                valorparceria+=sub * 0.075;
                                valorcaptador1-=sub * 0.075;
                            }


                       }

                       if(mql == "SIM")
                       {

                           valorimobb = sub - valorcorretor - valorcaptador1 - valorcaptador2 - valorparceria - (valor  * 0.015);
                           valormql =  (sub * 0.015);
                      }
                      else
                           valorimobb = sub - valorcorretor - valorcaptador1 - valorcaptador2 - valorparceria;

   
                     valorimobb = parseFloat(valorimobb).toFixed(2);
                     var v="valorimobb" + x;
                     document.getElementById(v).value = valorimobb;
                    
                     valorcorretor = parseFloat(valorcorretor).toFixed(2);
                     var v="valorcorretor" + x;
                     document.getElementById(v).value = valorcorretor;
                    
                     valorcaptador1 = parseFloat(valorcaptador1).toFixed(2);
                     var v="valorcaptador1" + x;
                     document.getElementById(v).value = valorcaptador1;
                    
                     valorcaptador2= parseFloat(valorcaptador2).toFixed(2);
                     var v="valorcaptador2" + x;
                     document.getElementById(v).value = valorcaptador2;
                    
                    
                     valorparceria= parseFloat(valorparceria).toFixed(2);
                     var v="valorparceria" + x;
                     document.getElementById(v).value = valorparceria;
                    

                     valormql= parseFloat(valormql).toFixed(2);
                     var v="valormql" + x;
                     document.getElementById(v).value = valormql;

               
                    

                 }
            
                 function Validar(frm)
                {
                    
                    
                   var resp = confirm("Tem certeza que deseja efetivar a alteração?");
                   if(resp == true )
                   {
                        var parcelas = document.getElementById("parcelas").value;
                        var comissao = document.getElementById("comissao").value;




                        //comissao = comissao.replace('.', '');
                        //comissao = comissao.replace(',', '.');
                        var soma = 0.00;


                        for (var i = 1; i <= parcelas; i++) {
                            var v="valorparcela" + i;
                            var x = document.getElementById(v).value;
                            soma= parseFloat(soma)+parseFloat(x);
                            soma = parseFloat(soma).toFixed(2);
                            var dataprevista ="dataprevista" + i;



                       }

                        if(parseFloat(soma) != parseFloat(comissao))
                        {

                            alert("Confira o valor das parcelas, pois a soma não bate com o valor total da comissão!");
                            return false;
                        }


                        frm.submit();
                        return true;
                    }
                    else
                       alert("Alteração Cancelaeda!");
                       

                }
            
                function enviawhats(x)
                {

                       
                    	var captador= document.getElementById("captador").value;
                        var captador2 = document.getElementById("captador2").value;
                        var parceria= document.getElementById("parceria").value;
                        var imovel= document.getElementById("imovel").value;
                        var comprador= document.getElementById("comprador").value;
                        var vendedor= document.getElementById("vendedor").value;
                        var corretor= document.getElementById("corretor").value;
                        var pixcorretor= document.getElementById("pixcorretor").value;
                        var pixcaptador1= document.getElementById("pixcaptador1").value;
                        var pixcaptador2= document.getElementById("pixcaptador2").value;
                        var pixparceria= document.getElementById("pixparceria").value;
                        var pixmql= document.getElementById("pixmql").value;
                        var parcelas = document.getElementById("parcelas").value;
                        var vrparcela = document.getElementById("vrparcela").value;
                        var comissaox = document.getElementById("comissaox").value;
                        var celfinanceiro = document.getElementById("celfinanceiro").value;
                        var celgestor = document.getElementById("celgestor").value;
                        
                    
                        var v="dataprevista" + x;
                        var valor = document.getElementById(v).value;
                        dtprevista = parseFloat(valor).toFixed(2);
                        var v = "obs" + x;
                        var obs = document.getElementById(v).value;          
                       
                    
                    
                        var v="valorcorretor" + x;
                        var valor = document.getElementById(v).value;
                        sub = parseFloat(valor).toFixed(2);
                        
                        var z="valorparcela" + x;
                        var valorz = document.getElementById(z).value;
                        subz = parseFloat(valorz).toFixed(2);
                        var texto =  "<<< AVISO DE PAGAMENTO DE COMISSÃO >>>\nTOTAL COMISSÃO DA TRANSAÇÃO = R$ " + comissaox + "\nPARCELA = " + x + " de "+ parcelas + "\nVALOR PARCELA = " + subz + "\nCOMPRADOR = " + comprador + "\nVENDEDOR = " + vendedor + "\n\n\nCORRETOR = " +  corretor + "\n  R$ Corretor = " + sub +"\n  "+pixcorretor;
                    
                        var v="valorcaptador1" + x;
                        var valor = document.getElementById(v).value;
                        sub1 = parseFloat(valor).toFixed(2);
                        if(sub1 > 0)
                            texto+="\n\nCAPTADOR 1 =" + captador + "\n  R$ Captador1 ="+ sub1+"\n  "+pixcaptador1;
              
                    
                        var v="valorcaptador2" + x;
                        var valor = document.getElementById(v).value;
                        sub2 = parseFloat(valor).toFixed(2);
                        if(sub2 > 0)
                            texto+="\n\nCAPTADOR 2 =" + captador2 + "\n  R$ Captador2 ="+ sub2 +"\n  "+pixcaptador2;
                   
                    
                        var v="valorparceria" + x;
                        var valor = document.getElementById(v).value;
                        sub3 = parseFloat(valor).toFixed(2);
                         if(sub3 > 0)
                            texto+="\n\nPARCERIA =" + parceria + "\n  R$ Parceria ="+ sub3 +"\n  "+pixparceria;
                    
                        var v="valormql" + x;
                        var valor = document.getElementById(v).value;
                        sub4 = parseFloat(valor).toFixed(2);
                        if(sub4 > 0)
                            texto+="\n\nR$ MQL ="+ sub4 +"\n  "+pixmql;
                    
                        texto+="\n\n  OBS:" + obs;
                       
                       // var valorcaptador= document.getElementById().value;
                        //var valorcaptador2= document.getElementById("valorcaptador2").value;
                      //  var valorparceria= document.getElementById("valorparceria").value;
                       // var valormql= document.getElementById("valormql").value;
                       
                     
                       
                    
                    
                    
                        var celular = "55"+celfinanceiro;
  
                        texto = window.encodeURIComponent(texto);
  
                        window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");
       
                        
                      
                 

                    
                
                }
            
            
              function enviawhatsgestor(x)
                {

                       
                    	var captador= document.getElementById("captador").value;
                        var captador2 = document.getElementById("captador2").value;
                        var parceria= document.getElementById("parceria").value;
                        var imovel= document.getElementById("imovel").value;
                        var comprador= document.getElementById("comprador").value;
                        var vendedor= document.getElementById("vendedor").value;
                        var corretor= document.getElementById("corretor").value;
                        var pixcorretor= document.getElementById("pixcorretor").value;
                        var pixcaptador1= document.getElementById("pixcaptador1").value;
                        var pixcaptador2= document.getElementById("pixcaptador2").value;
                        var pixparceria= document.getElementById("pixparceria").value;
                        var pixmql= document.getElementById("pixmql").value;
                        var parcelas = document.getElementById("parcelas").value;
                        var vrparcela = document.getElementById("vrparcela").value;
                        var comissaox = document.getElementById("comissaox").value;
                        var celfinanceiro = document.getElementById("celfinanceiro").value;
                        var celgestor = document.getElementById("celgestor").value;
                        
                    
                        var v="dataprevista" + x;
                        var valor = document.getElementById(v).value;
                        dtprevista = parseFloat(valor).toFixed(2);
                        var v = "obs" + x;
                        var obs = document.getElementById(v).value;          
                       
                    
                    
                        var v="valorcorretor" + x;
                        var valor = document.getElementById(v).value;
                        sub = parseFloat(valor).toFixed(2);
                        
                        var z="valorparcela" + x;
                        var valorz = document.getElementById(z).value;
                        subz = parseFloat(valorz).toFixed(2);
                        var texto =  "<<< AVISO DE RECEBIMENTO E COMISSÃO PAGA >>>\nTOTAL COMISSÃO DA TRANSAÇÃO = R$ " + comissaox + "\nPARCELA = " + x + " de "+ parcelas + "\nVALOR PARCELA = " + subz + "\nCOMPRADOR = " + comprador + "\nVENDEDOR = " + vendedor + "\n\n\nCORRETOR = " +  corretor + "\n  R$ Corretor = " + sub +"\n  "+pixcorretor;
                    
                        var v="valorcaptador1" + x;
                        var valor = document.getElementById(v).value;
                        sub1 = parseFloat(valor).toFixed(2);
                        if(sub1 > 0)
                            texto+="\n\nCAPTADOR 1 =" + captador + "\n  R$ Captador1 ="+ sub1+"\n  "+pixcaptador1;
              
                    
                        var v="valorcaptador2" + x;
                        var valor = document.getElementById(v).value;
                        sub2 = parseFloat(valor).toFixed(2);
                        if(sub2 > 0)
                            texto+="\n\nCAPTADOR 2 =" + captador2 + "\n  R$ Captador2 ="+ sub2 +"\n  "+pixcaptador2;
                   
                    
                        var v="valorparceria" + x;
                        var valor = document.getElementById(v).value;
                        sub3 = parseFloat(valor).toFixed(2);
                         if(sub3 > 0)
                            texto+="\n\nPARCERIA =" + parceria + "\n  R$ Parceria ="+ sub3 +"\n  "+pixparceria;
                    
                        var v="valormql" + x;
                        var valor = document.getElementById(v).value;
                        sub4 = parseFloat(valor).toFixed(2);
                        if(sub4 > 0)
                            texto+="\n\nR$ MQL ="+ sub4 +"\n  "+pixmql;
                    
                        texto+="\n\n  OBS:" + obs;
                       
                       // var valorcaptador= document.getElementById().value;
                        //var valorcaptador2= document.getElementById("valorcaptador2").value;
                      //  var valorparceria= document.getElementById("valorparceria").value;
                       // var valormql= document.getElementById("valormql").value;
                       
                     
                       
                    
                    
                    
                        var celular = "55"+celgestor;
  
                        texto = window.encodeURIComponent(texto);
  
                        window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");
       
            

                    
                
                }
            
            
                function GeraRecibo(x)
                {

                       
                    	var captador= document.getElementById("captador").value;
                      
                        var captador2 = document.getElementById("captador2").value;
                      
                        var parceria= document.getElementById("parceria").value;
                       
                        var imovel= document.getElementById("imovel").value;
                      
                        var comprador= document.getElementById("comprador").value;
                       
                        var vendedor= document.getElementById("vendedor").value;
                      
                        var corretor= document.getElementById("corretor").value;
                       
                        var pixcorretor= document.getElementById("pixcorretor").value;
                       
                        var pixcaptador1= document.getElementById("pixcaptador1").value;
                     
                        var pixcaptador2= document.getElementById("pixcaptador2").value;
                       
                        var pixparceria= document.getElementById("pixparceria").value;
                       
                        var pixmql= document.getElementById("pixmql").value;
                     
                        var parcelas = document.getElementById("parcelas").value;
                                              
                        var vrparcela = document.getElementById("vrparcela").value;
                     
                        var comissaox = document.getElementById("comissaox").value;
                     
                        var unidade = document.getElementById("unidade").value;
                     
                       

                    
                        var v="obs" + x;
                        var obs = document.getElementById(v).value;
                      
                       
                    
                        var v="valorcorretor" + x;
                        var valor = document.getElementById(v).value;
                        sub = parseFloat(valor).toFixed(2);
                    
                        var v="valorcaptador1" + x;
                        var valor = document.getElementById(v).value;
                        sub1= parseFloat(valor).toFixed(2);
                    
                        var v="valorcaptador2" + x;
                        var valor = document.getElementById(v).value;
                        sub2= parseFloat(valor).toFixed(2);
                    
                        var v="valorparceria" + x;
                        var valor = document.getElementById(v).value;
                        sub3= parseFloat(valor).toFixed(2);
                    
                        var v="valormql" + x;
                        var valor = document.getElementById(v).value;
                        sub4= parseFloat(valor).toFixed(2);
                        
                        var v="valorparcela" + x;
                        var valor = document.getElementById(v).value;
                        subz= parseFloat(valor).toFixed(2);

                      
                           
                              var boleto = {
                                'corretor': corretor,
                                'parcela': x,
                                'parcelas': parcelas,
                                'imovel': imovel,
                                'comprador': comprador,
                                'vendedor': vendedor,
                                'pixcorretor': pixcorretor,
                                'valorcorretor': sub,
                                'captador': captador,
                                'pixcaptador': pixcaptador1,
                                'valorcaptador': sub1,
                                'captador2': captador2,
                                'pixcaptador2': pixcaptador2,
                                'valorcaptador2': sub2,
                                'parceria': parceria,
                                'pixparceria': pixparceria,
                                'valorparceria': sub3,
                                'pixmql': pixmql,
                                'valormql': sub4,
                                'obs': obs,
                                'vrparcela': subz,
                                'unidade': unidade
                                  
                                  
                              }

                               var dados = JSON.stringify(boleto);
                               
                                $.ajax({
                                url: 'gerarecibo.php',
                                type: 'POST',
                                data: {data: dados},
                                success: function(result){
                                  console.log(data);
                                  let a= document.createElement('a');
                                  a.target= '_blank';
                                  a.href= 'recibo.pdf';
                                  a.click();
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                  // Retorno caso algum erro ocorra
                                }
                              }); 
         
                    
                    
                    
                }
            
              function Excluir(x)
              {

                    var r=confirm("Tem certeza que deseja excluir esta venda e todo o parcelamento gerado?");
                    if (r==true)
                    {
                       var exclusao = {
                                'codigo': x
                       }
                       
                        var dados = JSON.stringify(exclusao);
                               
                                $.ajax({
                                url: 'excluirvenda.php',
                                type: 'POST',
                                data: {data: dados},
                                success: function(result){
                                  console.log(data);
                                  alert('Registro Excluído');
                                  window.location.href = "consulta.php";
                                    
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                  alert('Avise o administrador pois esta rotina esta com erro ... ROTINA: EXCLUSÃO VENDA!');
                                }
                       }); 
                       
                       
                       
                       
                        
                    }
                    else
                    {
                      alert("Exclusão Cancelada!");
                    }
                
               
              }

            
            
            function AdicionaBonus(parcelas)
            {
                         
                //esta rotina adiciona bonus ao corretor. Lembrando que após incluir o bonus tem que desabilitar o campo valor da parcela pois senão recalcula novamente
                // se tem parceria o % é metade para o corretor principal e metade para parceria
                
               var resul = confirm('TEM CERTEZA QUE DESEJA INCLUIR O BONUS? \n \n Ao clicar neste botão será distribuido bônus ao corretor principal nas parcelas abertas.\n Lembre-se: Após aplicar Bônus você não pode mais alterar o valor de parcelas\n ATENÇÃO: SE INCLUIR O BONUS CLIQUE EM SALVAR NA SEQUENCIA!');
                
                if (resul == true)
                {
                    document.getElementById("bonus").disabled = true;
                    var parceria = document.getElementById("parceria").value;
                    if(parceria == "NÃO")
                    {
                        perc = 0.05;
                        num = 5;
                    }
                    else
                    {
                        perc = 0.025;
                        num = 2.5;
                    }
                    
                    var inicio = 1;
                    var fim = parcelas;
                    
                    var soma = parcelas * num;
                    var divisor = parcelas;




                    for(var i = 1; i <= parcelas; i++)
                    {

                        

                        var z ="statusrec" + i;
                        var w ="valorparcela" + i;

                        //desabilita o campo do valor da parcela para não acionar o evento onblur que recalcula as porcentagens
                        document.getElementById(w).style.backgroundColor = "#FF0F0F";
                        document.getElementById(w).readonly = true;
                        document.getElementById(w).style['pointer-events'] = 'none';

                        if(document.getElementById(z).value == 1)
                        {
                          inicio++;
                          divisor--;

                        }



                    }
                    perc = parseFloat(soma) / parseFloat(divisor);
                    perc = perc/100;



                    AdicionaBonus1(inicio, fim, perc, "valorcorretor");  
              }
              else
                  alert("Você desistiu de incluir o Bônus!");
        
                    
            }  
            
            function AdicionaBonus1(inicio, fim, perc,campo)
            {
                
      
                for(var i = inicio; i <= fim; i++)
                {
                        var v="valorparcela" + i;
                        var parcela = document.getElementById(v).value;
                        var diferenca = parcela * perc;
                      
                    
                        var v="valorimobb" + i;
                        var imobb = document.getElementById(v).value;
                        
                        imobb = parseFloat(imobb) - parseFloat(diferenca);
                        imobb = parseFloat(imobb).toFixed(2);
                      
                        document.getElementById(v).value = imobb;
                    
                        var v= campo + i;
                        var corretor = document.getElementById(v).value;
                       
                        corretor = parseFloat(corretor) + parseFloat(diferenca);
                        corretor = parseFloat(corretor).toFixed(2);
                     
                        document.getElementById(v).value = corretor;
                        
                        var meta = document.getElementById("meta").value;
                    
                                        
                        document.getElementById("meta").value = "SIM";
                    
                       
                    
               }
                document.getElementById("metapos").value = "SIM";
                
                alert("Clique em salvar para concretizar a inclusão do bônus!");
                
            }
            
            
            
            function AdicionaBonusParceiro(parcelas)
            {
                         
                //esta rotina adiciona bonus ao parceiro. Lembrando que após incluir o bonus tem que desabilitar o campo valor da parcela pois senão recalcula novamente
                // se tem parceria o % é metade para o corretor principal e metade para parceria
                
               var resul = confirm('TEM CERTEZA QUE DESEJA INCLUIR O BONUS? \n \n Ao clicar neste botão será distribuido bônus ao corretor parceiro nas parcelas abertas.\n Lembre-se: Após aplicar Bônus você não pode mais alterar o valor de parcelas\n ATENÇÃO: SE INCLUIR O BONUS CLIQUE EM SALVAR NA SEQUENCIA!');
                
                if (resul == true)
                {
                    
                    document.getElementById("bonusparceiro").disabled = true;
                    perc = 0.025;
                    num = 2.5;
                
                    
                    var inicio = 1;
                    var fim = parcelas;
                    
                    var soma = parcelas * num;
                    var divisor = parcelas;


                    for(var i = 1; i <= parcelas; i++)
                    {

                        

                        var z ="statusrec" + i;
                        var w ="valorparcela" + i;

                        //desabilita o campo do valor da parcela para não acionar o evento onblur que recalcula as porcentagens
                        document.getElementById(w).style.backgroundColor = "#FF0F0F";
                        document.getElementById(w).readonly = true;
                        document.getElementById(w).style['pointer-events'] = 'none';

                        if(document.getElementById(z).value == 1)
                        {
                          inicio++;
                          divisor--;

                        }



                    }
                    perc = parseFloat(soma) / parseFloat(divisor);
                    perc = perc/100;



                    AdicionaBonus2(inicio, fim, perc,"valorparceria");  
              }
              else
                  alert("Você desistiu de incluir o Bônus!");
        
                    
            }  
                
            
            
           
            
        
            
            
             function AdicionaBonus2(inicio, fim, perc,campo)
            {
                
      
                for(var i = inicio; i <= fim; i++)
                {
                        var v="valorparcela" + i;
                        var parcela = document.getElementById(v).value;
                        var diferenca = parcela * perc;
                      
                    
                        var v="valorimobb" + i;
                        var imobb = document.getElementById(v).value;
                        
                        imobb = parseFloat(imobb) - parseFloat(diferenca);
                        imobb = parseFloat(imobb).toFixed(2);
                      
                        document.getElementById(v).value = imobb;
                    
                        var v= campo + i;
                        var parceria = document.getElementById(v).value;
                       
                        parceria = parseFloat(parceria) + parseFloat(diferenca);
                        parceria = parseFloat(parceria).toFixed(2);
                     
                        document.getElementById(v).value = parceria;
                        
                        var metaparceria = document.getElementById("metaparceria").value;
                                              
                        document.getElementById("metaparceria").value = "SIM";
                    
                                        
               }
                document.getElementById("metaposparceria").value = "SIM";
                
                alert("Clique em salvar para concretizar a inclusão do bônus!");
                
            }
            
 
        
        
                      
        
        </script>

