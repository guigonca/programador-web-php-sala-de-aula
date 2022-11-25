
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <?php if(isset($_SESSION['tipo'])){?>
            <li><a href="clientes.php">Clientes</a></li>
            <?php } ?>
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>

            <?php if(isset($_SESSION['tipo'])){?>      

            <li><a href="edit_cadastro.php">Editar Perfil</a></li>

            <?php } ?>
        </ul>
    </nav>