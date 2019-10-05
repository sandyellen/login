<?php
# Back-end

//Verifica se o método GET está enviando dados
if(isset($GET['nome'])){
    echo "\n<h1>Envio de dados método <em>GET</em></h1>";

echo "\n<pre>\n";
print_r($_GET); #Array
echo "\n</pre>\n";

print("\n<br><strong>Nome: </strong>");
print("$_GET[nome]");

print("\n<br><strong>E-mail: </strong>");
print("$_GET[email]");

print("\n<br><strong>Senha: </strong>");
print("$_GET[senha]");

print("\n<br><strong>Data de Nascimento: </strong>");
print("$_GET[data_de_nascimento]");

}
//Varifica se o método POST está enviando dados
if(isset($_POST['nome'])){

    echo "\n<h1>Envio de dados método <em>POST</em></h1>";
    echo "\n<pre>\n";
    print_r($_GET); #Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_GET[nome]");

    print("\n<br><strong>E-mail: </strong>");
    print("$_GET[email]");

    print("\n<br><strong>Senha: </strong>");
    print("$_GET[senha]");

    print("\n<br><strong>Data de Nascimento: </strong>");
    print("$_GET[data_de_nascimento]");

}
