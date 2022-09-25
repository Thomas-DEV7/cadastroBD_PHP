<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/consulta.css">
    
    <title>consulta Fornecedor</title>
</head>
<body>
    <header>
        <div class="row">
            <img src="../assets/img/toguro.jpeg" >
            <p>Patrão</p>
        </div>
        <div class="row">
            <h1>CONSULTA FORNECEDOR</h1>
        </div>
        <div class="row">
            <button id="back" onclick="javascript:location.href ='index.php';"><a href="#">VOLTAR</a></button>
        </div>
    </header>
                   
                
    <?php
                    include_once('conexao.php');
                    try{
                        $select = $conn->prepare('SELECT * FROM tb_fornecedor');
                        $select->execute();

                        while($row = $select->fetch())
                        {
                            echo "<p>";
                            echo "<br><b>CÓDIGO: </b>".$row['cd_fornecedor'];
                            echo "<br><b>NOME: </b>".$row['nm_primeiro'];
                            echo "<br><b>SOBRENOME: </b>".$row['nm_sobrenome'];
                            echo "<br><b>CNPJ: </b>".$row['nr_cnpj'];
                            echo "<br><b>EMPRESA FORNECEDORA: </b>".$row['nm_empresa'];
                            echo "<br><b>PRODUTO FORNECIDO: </b>".$row['tp_produto'];
                            echo "<br>"
                            ?>
                            <button id="mod" onclick="window.location.href='alterarFornecedor.php?id=<?php echo $row['cd_fornecedor'];?>'">
                            Alterar
                        </button>

                        <button id="delete" onclick="window.location.href='excluirFornecedor.php?id=<?php echo $row['cd_fornecedor'];?>'">
                            Excluir
                        </button>
	                    <hr>
                        <?php
                        }
                    }
                    catch(PDOException $e){
                        echo 'ERROR: ' . $e->getMessage();
                    }
                
                ?>
                
                </div>

                
                

        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>