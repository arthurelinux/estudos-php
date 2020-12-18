<?php
class Upload {
            // Constante responsável por guardar a pasta de onde os arquivos estarão.
            private $diretorio;
            
            // Variável para guardar o array relacionado ao arquivo.
            private $arquivo;
            
            // Métodos Get e Saet para acessar os atributos
            public function getDiretorio(){
                return $this->diretorio;
            }
            public function setDiretorio($diretorio){
                $this->diretorio = $diretorio;
            }
            public function getArquivo(){
                return $this->arquivo;
            }
            public function setArquivo($arquivo){
                $this->arquivo = $arquivo;
            }
        
            

          public  function makeUpload(){
                $arquivo = $this->getArquivo();
                $diretorios = $this->getDiretorio();

                $uploaddir = $diretorios;
                $uploadfile = $uploaddir . basename($arquivo['name']);

                echo '<pre>';
                if (move_uploaded_file($arquivo['tmp_name'], $uploadfile)) {
                    echo "Arquivo válido e enviado com sucesso.\n";
                } else {
                    echo "Possível ataque de upload de arquivo!\n";
                }

                echo 'Aqui está mais informações de debug:';
               
                print_r($_FILES);

                print "</pre>";


               /*
                if(!is_dir($diretorio)){ 
                    echo "Pasta $diretorio nao existe";
                }else{
                    $arquivo = $FILES['arquivos'];
                    //ver se os arquivos foram setados
                   
                    //laço de inserção dos arquivos
                    for ($controle = 0; $controle < count($arquivo['name']); $controle++){
                        //renomeia os arquivos e define o local onde salva
                        $nomes =$arquivo['name'];
                        $extensao = explode('.',$nomes[$controle]);
                        $extensao = end($extensao);
                        $nomes[$controle] = rand().'-'.$nomes[$controle];
                        $destino = $diretorio.$nomes[$controle];
                        
                        $datai = $data[$controle];
                        $categoriai = $categoria[$controle];
                        //move e guarda no banco
                        if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
                           // $query = mysqli_query($conn, "INSERT INTO doc (id, cpf, local_arquivo, tipo, data) VALUES('$id','$cpf','$destino','$categoriai' ,'$datai');");
                            echo "Upload realizado com sucesso<br>"; 
                        }else{
                            echo "Erro ao realizar upload";
                        }
                        
                    }
            } */
      
    }
}

//var_dump ($valor);
$myUpload = new Upload();
$myUpload->setDiretorio("arquivos/");
$myUpload->setArquivo($_FILES['arquivo']);
$myUpload->makeUpload();
 //var_dump($myUpload);
//$verificar = $myUpload->makeUpload();