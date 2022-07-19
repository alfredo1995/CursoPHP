# CursoPHP
Conclusão do curso PHP 8 A linguagem


Implementando um formulario de inscrisção 

1) TASK: adicionar o campo Data de Nascimento e Anexar Arquivo

estagio.html 

          
             <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Data de &nbsp;Nascimento</span>
                </div>
                 <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
             </div>
                  
                  
                  
              </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                  <label class="form-label" for="anexaArquivo">Anexar Arquivo</label>
                    <input type="file" class="form-control" id="anexaArquivo" name="anexaArquivo" />
              </div></div>
                  
    
contact.php

<?php require("PHPMailer/PHPMailerAutoload.php");

//coletar as variáveis postadas em variáveis locais antes de chamar $ = novo 


$dataNascimento = $_POST['dataNascimento'];


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["anexaArquivo"]["name"]);



//agora instacia os campos 


$message .= ($dataNascimento) ?"<tr><td><strong>dataNascimento:</strong> </td><td>" . $dataNascimento . "</td></tr>" : '';


$message .= ($InformacoesAdicionais) ?"<tr><td><strong>InformacoesAdicionais:</strong> </td><td>" . $InformacoesAdicionais . "</td></tr>" : '';




                  
                  
