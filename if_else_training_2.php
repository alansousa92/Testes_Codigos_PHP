<?php
$logged_in = 1;
$new_messages = 10;
$emergency;
$age = 16;

if ($logged_in) {
    print "Bem-vindo a bordo, usuário confiável <br>";
} elseif ($new_messages) {
    print "Caro estranho, há novas mensagens";
} elseif ($emergency) {
    print "Estranho, não há novas mensagens, mas há uma emergência";
} else {
    print "Eu não te conheço, você não tem mensagens e não há emergência.";
}

if ($new_messages == 10) {
    print 'Você tem 10 novas mensagens!';
}
if ($new_messages == @$max_messages) {
    print 'Você tem um numero maximo de mensages!';
}

echo '<br><hr>';
echo 'Idade para votar: ';
if ($age < 16) {
    print 'Não pode votar!';
} elseif ($age >= 16) {
    print 'Obrigatorio votar!';
} elseif ($age > 65) {
    print 'Vota se quiser!';
}