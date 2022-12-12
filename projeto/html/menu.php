<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>

            <?php if(isset($_SESSION['tipo'])){?>

                <li><a href="clientes.php">Clientes</a></li>
            <?php } else if(isset($_SESSION['id'])){?>
                <li><a href="clienteConfiguracao.php">Configuração</a></li>
            <?php } ?>
          
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>

            <?php if(isset($_SESSION['nome'])){?>
                <li style="float: right;"><a href="clienteConfiguracao.php">
                    BEM VINDO: <?= substr($_SESSION['nome'], 0, 
                    strpos($_SESSION['nome'], " ")); ?>
                </a></li>
            <?php } ?>

        </ul>
    </nav>